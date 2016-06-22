<?php 
    //$_POST['ref1'];
    $reference_number = $_POST['ref1'];//'PUMKPINPIE';//
    $reference_type = $_POST['ref_type'];//'';//
     //echo 'Your Reference number is :'.$reference_number;
     //echo '<br>';
        function httpPost($url, $params) {
          $postData = '';
          //create name value pairs seperated by &
          foreach ($params as $k => $v) {
              $postData .= $k . '=' . $v . '&';
          }
          rtrim($postData, '&');

          $ch = curl_init();

          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_HEADER, false);
          curl_setopt($ch, CURLOPT_POST, count($postData));
          curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

          $output = curl_exec($ch);

          curl_close($ch);
          return $output;
      }

    function httpPost2($url, $params) {
        $postData = '';
        //create name value pairs seperated by &
        foreach ($params as $k => $v) {
            $postData .= $k . '=' . $v . '&';
        }
        rtrim($postData, '&');

        $ch1 = curl_init();
        $ch2 = curl_init();

        curl_setopt($ch1, CURLOPT_URL, $url);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch1, CURLOPT_HEADER, false);
        curl_setopt($ch1, CURLOPT_POST, count($postData));
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $postData);

        curl_setopt($ch2, CURLOPT_URL, $url);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch2, CURLOPT_HEADER, false);
        curl_setopt($ch2, CURLOPT_POST, count($postData));
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $postData);

        $mch = curl_multi_init();

        curl_multi_add_handle($mch,$ch1);
        curl_multi_add_handle($mch,$ch2);

        $mrc = '';
        $active = null;
        //-----execute the handles----//
        //do {
                $mrc .= curl_multi_exec($mch, $active);
         //   } while ($mrc == CURLM_CALL_MULTI_PERFORM);

           // while ($active && $mrc == CURLM_OK) {
            //    if (curl_multi_select($mch) != -1) {
              //      do {
                     //   $mrc .= curl_multi_exec($mch, $active);
              //      } while ($mrc == CURLM_CALL_MULTI_PERFORM);
                //}
           // }

            //close the handles
            curl_multi_remove_handle($mch, $ch1);
            curl_multi_remove_handle($mch, $ch2);
            curl_multi_close($mch);

        //$output = curl_exec($ch);

        //curl_close($ch);
        return $mrc;
        //return 'Multishipment';
    }

    if ($reference_type == 'BOL') {
        $request = '<?xml version="1.0"?>
        <!-- Consult the WSDocumentation .docx file for more details on the content of this file. -->
        <service-request>
          <service-id>OidLookup</service-id>
          <!-- The <request-id> tag is populated with a unique String (generated by caller); This number is used for troubleshooting purposes. -->
          <request-id>20160211-Test-1</request-id>
          <data>
            <objectType>transport</objectType>
            <searchBy>primaryReference</searchBy>
            <searchValue>'.$reference_number.'</searchValue>
            <searchModifier/>
          </data>
        </service-request>';
    } else {
      $request = '<?xml version="1.0"?>
        <!-- Consult the WSDocumentation .docx file for more details on the content of this file. -->
        <service-request>
          <service-id>OidLookup</service-id>
          <!-- The <request-id> tag is populated with a unique String (generated by caller); This number is used for troubleshooting purposes. -->
          <request-id>20141204-Test-1</request-id>
          <data>
            <objectType>transport</objectType>
            <searchBy>reference</searchBy>
            <searchValue>'.$reference_number.'</searchValue>
            <searchModifier>
              <searchBy></searchBy>     <!-- This is the RefType name to use with searchValue -->
            </searchModifier>
          </data>
        </service-request>';
    };

    $params = array(
        "userid" => "ProtoWSID",
        "password" => "ProtoWebSvc2016!",
        "request" => urlencode($request)
    );

    $xml = httpPost("https://cargotsi.mercurygate.net/MercuryGate/common/remoteService.jsp", $params);

    $response = simplexml_load_string($xml);
     //$decoded64 = base64_decode($response->data);
     //echo 'Your Oid number is :'.$response->data;
     //echo '<br>';

     $oidvalue = $response->data;
     
  $oidvalue_split = explode(",", $oidvalue);
   $count = 1;
  if(count($oidvalue_split)>1){
    echo 'Hello World';
    while ( $count <= count($oidvalue_split)) {

          $request2 = '<service-request>
              <service-id>WebExtractTransportDeep</service-id>
              <!-- The <request-id> tag is populated with a unique String (generated by caller); This number is used for troubleshooting purposes. -->
              <request-id>20141204-Test-3</request-id>
              <data>
              <!-- The Oid value is found using the OidLookup request. -->
                <oid>'.$oidvalue_split[$count-1].'</oid>
              </data>
            </service-request>';

                 $params2 = array(
                      "userid" => "ProtoWSID",
                      "password" => "ProtoWebSvc2016!",
                      "request" => urlencode($request2)
                  );
                     
                $xml2 = httpPost("https://cargotsi.mercurygate.net/MercuryGate/common/remoteService.jsp", $params2);
                $response2 = simplexml_load_string($xml2);

                echo $oidvalue_split[$count-1].'<br>';
                $decoded = base64_decode($response2->data);
                 //echo $request2;
                echo $decoded;
                $count++;
                //echo $count;
    }
  }else{
  

          $request2 = '<service-request>
              <service-id>WebExtractTransportDeep</service-id>
              <!-- The <request-id> tag is populated with a unique String (generated by caller); This number is used for troubleshooting purposes. -->
              <request-id>20141204-Test-3</request-id>
              <data>
              <!-- The Oid value is found using the OidLookup request. -->
                <oid>'.$oidvalue.'</oid>
              </data>
            </service-request>';

          $params2 = array(
                "userid" => "ProtoWSID",
                "password" => "ProtoWebSvc2016!",
                "request" => urlencode($request2)
            );
               
          $xml2 = httpPost2("https://cargotsi.mercurygate.net/MercuryGate/common/remoteService.jsp", $params2);
          
          $response2 = simplexml_load_string($xml2);
          $decoded = base64_decode($response2->data);
          //echo '------';
          echo $decoded;
          echo $xml2;
  }
?>