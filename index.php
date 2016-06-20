<!DOCTYPE html>
<html lang="en"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PROTO - Track and Tracing</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-3.3.5.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/table.css" rel="stylesheet">
        <!--<link href="css/layout.css" rel="stylesheet" type="text/css" />-->
        <link rel="icon" href="images/p.png" type="image/gif" sizes="16x16">

        <link rel = "stylesheet" href = "http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="js/bootstrap-3.3.5.js" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/stupidtable.js"></script>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
        <script src="cog_files/bootstrap-3.js" type="text/javascript"></script>        
    </head>
    <body>
        <div class="container" id="container">
            <!--<div id="header-wrap">-->
                <nav class="navbar navbar-default" id="header" style="background-color: #0e80c6;">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">

                            <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-responsive" alt="Placeholder image"></a></div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="defaultNavbar1"> </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>

                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
                <script src="js/jquery-1.js"></script>

                <!-- Include all compiled plugins (below), or include individual files as needed --> 
                <script src="js/bootstrap.js"></script>

                <h1 id="title">TRACK AND TRACING</h1>

                <div class="jumbotron" id="jumbotron1">
                    <div class="row">
                        <div class="col-md-5" id="search">
                            <div class="input-group input-group-lg" id="form">
                                <form class="navbar-form navbar-left" id="f1" role="search" method="post">
                                    <div id="lab"> 
                                        <span class="label label-default" id="label">Please enter a reference number:</span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="ref1" id="ref1" class="form-control" placeholder="Search" required="">
                                    </div>

                                    <select id="ref_type" name="ref_type">
                                        <!--<option value="reference">-REF-</option>-->
                                        <option selected value="BOL">-BOL-</option>
                                        <option value="PO Number">-PO Number-</option>
                                        <option value="PRO">-PRO-</option>
                                    </select>

                                    <button type="button" id="button1" class="btn btn-default">Search</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div id="loading_image_div1">
                                <center>
                                    <img id="loading_picture1" src="images/loading_bar.gif" />
                                </center>                                
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="panel panel-default" id="panel0">
                                <div class="panel-heading" style="background-color:#0E80C6">
                                    <h2 class="panel-title">Need Assistence?</h2>
                                </div>
                                <div class="panel-body">
                                    <div id="assitance">
                                        <ul style="list-style:none" id="melissa">
                                            <li>Melissa Jones</li>
                                            <li>Phone: 813.400.2148</li>
                                            <li>mjones@smith-cargo.com</li>                 
                                        </ul>
                                    </div>
                                    <div id="img">
                                        <img src="images/CS.png" alt="Placeholder image" class="img-responsive">
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>

                <div id="loading_image_div">
                    <img id="loading_picture" src="images/loading_apple.gif" />
                </div>
            <!--</div>-->

            <div class="jumbotron" id="jumbotron2">
                <div class="row">
                    <div class="col-md-6" >
                        <div class="panel panel-default" >
                            <div class="panel-body" id ="bol">
                                <div id ="bolpro">
                                    <span id="h1_bol"></span>
                                    <br>
                                    <span id="h2_pro"></span>
                                    <br>
                                    <span id="eta"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" id="col1">
                        <div class="panel panel-default" id="panel1">
                            <div class="panel-heading" style="background-color:#0E80C6">
                                <h3 class="panel-title">Carrier Information </h3>
                            </div>
                            <div class="panel-body" id="carrierbody" >
                                <div id="carrier_info_box">
                                    <div id="h2_carrier"></div>
                                    <span></span><span id="dest_terminal"></span>
                                    <div id="contactaddress"></div>
                                    <div>
                                        <span id="dest_city"></span><span id="comma">, </span><span id="dest_state"> </span><span id="dest_zip"></span>
                                    </div>   
                                    <div id="dest_phone"></div>
                                    <div id="contactname"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="jumbotron" id="jumbotron">
                <div class="row" id="rows">
                    <div class="col-md-3" id="col2" >
                        <div class="" >
                            <div class="panel panel-default" id="panel2">
                                <div class="panel-heading" style="background-color: rgb(14, 128, 198);">
                                    <h3 class="panel-title">Shipper Information </h3>
                                </div>
                                <div class="panel-body">
                                    <ul class="Shipper"  id="shipper" style="list-style:none">
                                        <li><i class="fa fa-building"></i>
                                            <span id="shipper_name"></span></li>
                                        <li><i class="fa fa-location-arrow"></i>
                                            <span id="shipper_address"></span><br>
                                            <span id="shipper_city"></span><span> </span>                        
                                            <span id="shipper_zip"></span><br>
                                        </li>
                                        <li><i class="fa fa-user"></i>
                                            <span id="shipper_contact"></span></li>
                                        <li><i class="fa fa-phone"></i>
                                            <span id="shipper_phone"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" id="col3">
                        <div class="panel panel-default" id="panel3">
                            <div class="panel-heading" style="background-color:#0E80C6">
                                <h3 class="panel-title">Consignee Information </h3>
                            </div>
                            <div class="panel-body" id="bodycom">
                                <ul class="consignee" id="consignee" style="list-style:none">
                                    <li><i class="fa fa-building"></i><span id="consignee_name"></span></li>
                                    <li><i class="fa fa-location-arrow"></i><span id="consignee_address">  </span><br>
                                        <span id="consignee_city"></span><span> </span><span id="consignee_state"></span><span> </span><span id="consignee_zip"></span></li>
                                    <li><span style="display: none;" id="consignee_contact_icon"><i class="fa fa-user"></i><span id="consignee_contact"></span></span></li>
                                    <li><i class="fa fa-phone"></i><span id="consignee_phone"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" id="col4">
                        <div class="panel panel-default" id="panel4">
                            <div class="panel-heading" style="background-color:#0E80C6">
                                <h3 class="panel-title">Last Update</h3>
                            </div>
                            <div class="panel-body">
                                <ul id="update" style="list-style:none">
                                    <li><span id="load_status"></span></li>
                                    <li><span id="status_description"></span></li>
                                    <li><span id="status_date"></span></li>            
                                </ul>
                            </div>
                        </div>
                        <div class="panel panel-default" id="panel5">
                            <div class="panel-heading" style="background-color:#0E80C6">
                                <h3 class="panel-title">Documents</h3>
                            </div>
                            <div class="panel-body">
                                <ul style="list-style:none" id="docs">
                                    <!--<li><span id="document_bol_text"></span></li>
                                    <li><span id="document_pod_text"></span></li>
                                    <li><span id="document_cus_text"></span></li>-->
                                    <div id="bol_div"></div>
                                    <div id="pod_div"></div>
                                    <div id="document_bol_text"  hidden=""></div>
                                    <div id="document_pod_text"  hidden=""></div>
                                    <div id="document_cus_text"  hidden=""></div>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" id="col5">
                        <div class="panel panel-default" id="panel6">
                            <div class="panel-heading" style="background-color:#0E80C6">
                                <h3 class="panel-title">Reference Information</h3>
                            </div>
                            <div class="panel-body">
                                <span id="span">BOL:<span id="ref_bol"></span><br></span>
                                <span id="spanpo">PO NUMBER:<span id="ref_po"></span><br></span>
                                <span id="spanpro">PRO: <span id="ref_pro"></span><br></span>
                                <!--<span id="span">SCAC:<span id="ref_scac"></span><br /></span>
                                <span id="span">Tracking Dispatcher:<span id="ref_tracking_dispatcher"></span><br /></span>-->
                                <span id="spanpiece">Piece Count: <span id="ref_piece_count"></span><br></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12" id="coltrack" >
                    <div class="panel panel-default" id="panel7"   >
                        <div class="panel-heading" style="background-color:#0E80C6">
                            <h3 class="panel-title">Tracking Information</h3>
                        </div>
                        <div class="" id="answer-text"></div>
                        <div class="panel-body" id="panelbodytracking" >
                            <div id="table_div">
                                <table id="table_sort" class="tablesorter">
                                    <thead> 
                                        <tr> 
                                            <th data-sort="string" data-sort-default="desc">Date</th> 
                                            <th>Status</th>
                                            <th>Detail</th> 
                                            <th>City</th>
                                            <th>State</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function (e) {
                /*$('#contentinfo').hide();
                $('#carriername').hide();
                $('#shipper').hide();
                $('#consignee').hide();
                $('#document').hide();
                $('#update').hide();
                $('#reference').hide();
                $('#trackinfo').hide(); */

                /*$('#header').css('width', '89%');*/
                $('#jumbotron').hide();
                $('#jumbotron2').hide();

                if (screen.width > 990) {
                    $('#loading_image_div1').css('display', 'none');
                    $('#loading_image_div1').attr('id', 'no');
                } else {
                    $('#loading_image_div').css('display', 'none');
                    $('#loading_image_div').attr('id', 'no');
                }

                $('#loading_image_div1').css('display', 'none');
                $('#loading_image_div').css('display', 'none');
                $('#pod_div').html('<img id="loading_pod" src="images/loading_apple.gif" width="6%" />');

                $('#answer-text').hide();
            });

            $("#ref1").keyup(function(event) { 
                if(event.keyCode == 13) { 
                    $("#button1").click();
                } 
            });

            $('#button1').click(function () {
                //alert('click');                
                /*$('#infor').hide();----------------------------------------------
                $('#content').hide();*/   

                var valorRef1 = $('#ref1').val();               

                //alert (valorRef1.trim().length);

                if (valorRef1.trim().length == 0) {
                    alert ('You must type a reference to search');
                } else {
                    $('#dest_terminal').html('');
                    $('#table_sort tbody').html('');
                    $('#loading_image_div1').css('display', 'inline-block');
                    $('#loading_image_div').css('display', 'inline-block');
                    $('#pod_div').html('<img id="loading_pod" src="images/loading_apple.gif" width="6%" />');
                    setTimeout(function () {

                    $.ajax({
                        type: 'POST',
                        async: true,
                        data: {ref1: $('#ref1').val(), ref_type: $('#ref_type').val()},
                        url: 'request/request2.php',
                        beforeSend: function () {
                            // setting a timeout
                            $('#loading_image_div1').css('display', 'inline-block');
                            $('#loading_image_div').css('display', 'inline-block');
                        },
                        success: function (data) {
                            //alert('aqui');
                            //alert(data.length);
                            //$('#table_sort tbody').append('<tr><td>Conway</td><td>Tim</td><td>tconway@earthlink.net</td></tr>');
                            alert(data+' OMG');
                            if (data.length == 0) {
                                alert('No information related for this reference');
                                $('#loading_image_div1').css('display', 'none');
                                $('#loading_image_div').css('display', 'none');
                                $('#jumbotron').hide();
                                $('#jumbotron2').hide();
                                /*$('#header').css('width', '90%');*/

                            } else {

                                /*$('#header-wrap').css('padding-left', '0px');*/
                                $('#answer-text').html(data);
                                $('#jumbotron').show();
                                $('#jumbotron2').show();
                                var eta_var = $('masterbilloflading dates drop').find('date[type="earliest"]').html();
                                // $(this).html();
                                var eta_date = eta_var.split(" ");
                                $('#eta').html('ESTIMATED DELIVERY DATE : ' + eta_date[0]);
                                /*$('#contentinfo').show();
                                $('#carriername').show();
                                $('#shipper').show();
                                $('#consignee').show();
                                $('#document').show();
                                $('#update').show();
                                $('#reference').show();
                                $('#trackinfo').show();   */
                                var tm = $('TrackingMessages').length;

                                //$('#number').html(tm);
                                var cont = 0;
                                $('TrackingMessages').each(function () {
                                    //$('#element').html('');
                                    cont++;
                                    if (cont == 1) {
                                        //$('#element').append($(this).html());
                                        $('#element').hide();
                                    } else {
                                    }
                                    ;
                                });

                                //$('#answer-text').html('');
                                var cont_status = $('ShipmentStatus StatusDetails StatusDetail StatusCode').length;
                                // $('#element2').append(cont_status);
                                var status_array = [];
                                $('ShipmentStatus StatusDetails StatusDetail StatusCode').each(function () {
                                    //$('#element2').append('<div>'+$(this).html()+'</div>');
                                    status_array.push($(this).html());
                                    //$('#element2').append('<div>'+$('ShipmentStatus StatusDetails StatusDetail StatusCode').html()+'</div>');
                                });

                                var date_array = [];
                                /*      $('ShipmentStatus StatusDetails StatusDetail Date').each(function() {
                                 if($(this).attr('type')=='actual'){
                                 //$('#element3').append('<div>'+$(this).html()+'</div>');
                                 date_array.push($(this).html());
                                 }
                                 //$('#element2').append('<div>'+$('ShipmentStatus StatusDetails StatusDetail StatusCode').html()+'</div>');
                                 });*/

                                $("dates").each(function () {
                                    //if($(this).attr('type')=='actual'){
                                    // $('#element3').append('<div>'+$(this).html()+'</div>');
                                    $(this).html(''); //---BE CAREFUL 
                                    //date_array.push($(this).html());
                                    //}Date[type='actual']
                                });

                                $('ShipmentStatus StatusDetails StatusDetail Date').each(function () {
                                    if ($(this).attr('type') == 'actual') {
                                        //$('#element3').append('<div>'+$(this).html()+'</div>');
                                        date_array.push($(this).html());
                                    }
                                    //$('#element2').append('<div>'+$('ShipmentStatus StatusDetails StatusDetail StatusCode').html()+'</div>');
                                });

                                //------
                                //var names = ["Mike","Matt","Nancy","Adam","Jenny","Nancy","Carl"];
                                var date_array_un = [];
                                $.each(date_array, function (i, el) {
                                    if ($.inArray(el, date_array_un) === -1)
                                        date_array_un.push(el);
                                });

                                //------
                                var city_array = [];
                                $('ShipmentStatus StatusDetails Location City').each(function () {
                                    //$('#element4').append('<div>'+$(this).html()+'</div>');
                                    city_array.push($(this).html());
                                    //$('#element2').append('<div>'+$('ShipmentStatus StatusDetails StatusDetail StatusCode').html()+'</div>');
                                });

                                var state_array = [];
                                $('ShipmentStatus StatusDetails Location StateProvince').each(function () {
                                    //$('#element5').append('<div>'+$(this).html()+'</div>');
                                    state_array.push($(this).html());
                                    //$('#element2').append('<div>'+$('ShipmentStatus StatusDetails StatusDetail StatusCode').html()+'</div>');
                                });

                                //------------------------------
                                //Clear Table before adding elements.
                                $('#table_item tbody').html('');

                                var itemid_array = [];
                                $('mercurygate masterbilloflading relateditems packages package itemgroups itemgroup lineitem itemid').each(function () {
                                    //$('#element5').append('<div>'+$(this).html()+'</div>');
                                    itemid_array.push($(this).html());
                                });

                                var description_array = [];
                                $('mercurygate masterbilloflading relateditems packages package itemgroups itemgroup lineitem description').each(function () {
                                    //$('#element').append('<div>'+$(this).html()+'</div>');
                                    description_array.push($(this).html());
                                });

                                var class_array = [];
                                $('mercurygate masterbilloflading relateditems packages package itemgroups itemgroup lineitem freightclass').each(function () {
                                    //$('#element').append('<div>'+$(this).html()+'</div>');
                                    class_array.push($(this).html());
                                });

                                var nmfccode_array = [];
                                $('mercurygate masterbilloflading relateditems packages package itemgroups itemgroup lineitem nmfccode').each(function () {
                                    //$('#element').append('<div>'+$(this).html()+'</div>');
                                    nmfccode_array.push($(this).html());
                                });

                                var ordered_qty_array = [];
                                var cont1 = 0;
                                $('mercurygate masterbilloflading relateditems packages package itemgroups itemgroup quantities quantity[type="ordered"]').each(function () {
                                    cont1++;
                                    if (cont1 % 2 === 0) {
                                    } else {
                                        //$('#element5').append('<div>'+$(this).html()+'</div>');
                                        ordered_qty_array.push($(this).html());
                                    };
                                });

                                var ordered_uom_array = [];
                                var cont2 = 0;
                                $('mercurygate masterbilloflading relateditems packages package itemgroups itemgroup quantities quantity[type="ordered"]').each(function () {
                                    cont2++;
                                    if (cont2 % 2 === 0) {
                                    } else {
                                        var a = $(this).attr('uom');
                                        //alert(a);
                                        //$('#element5').append('<div>'+a+'</div>');
                                        ordered_uom_array.push($(this).attr('uom'));
                                    };
                                });

                                var actual_qty_array = [];
                                var cont3 = 0;
                                $('mercurygate masterbilloflading relateditems packages package itemgroups itemgroup quantities quantity[type="actual"]').each(function () {
                                    cont3++;
                                    //if (cont3 % 2 === 0) {} else{
                                    //$('#element5').append('<div>'+$(this).html()+'</div>');
                                    actual_qty_array.push($(this).html());
                                    //};
                                });

                                var actual_uom_array = [];
                                var cont4 = 0;
                                $('mercurygate masterbilloflading relateditems packages package itemgroups itemgroup quantities quantity[type="actual"]').each(function () {
                                    cont4++;
                                    //if (cont4 % 2 === 0) {} else{
                                    var a = $(this).attr('uom');
                                    //alert(a);
                                    //$('#element5').append('<div>'+a+'</div>');
                                    actual_uom_array.push(a);
                                    //};            
                                });

                                var planned_wgt_array = [];
                                var cont5 = 0;
                                $('mercurygate masterbilloflading relateditems packages package itemgroups itemgroup weights weight[type="planned"]').each(function () {
                                    cont5++;
                                    //if (cont5 % 2 === 0) {} else{
                                    //$('#element5').append('<div>'+$(this).html()+'</div>');
                                    planned_wgt_array.push($(this).html());
                                    //};            
                                });

                                var actual_wgt_array = [];
                                var cont6 = 0;
                                $('mercurygate masterbilloflading relateditems packages package itemgroups itemgroup weights weight[type="actual"]').each(function () {
                                    cont6++;
                                    //if (cont6 % 2 === 0) {} else{
                                    //$('#element5').append('<div>'+$(this).html()+'</div>');
                                    actual_wgt_array.push($(this).html());
                                    //};            
                                });

                                var wgt_units_array = [];
                                var cont7 = 0;
                                $('mercurygate masterbilloflading relateditems packages package itemgroups itemgroup weights weight[type="actual"]').each(function () {
                                    cont7++;
                                    //if (cont6 % 2 === 0) {} else{
                                    var b = $(this).attr('uom');
                                    //$('#element5').append('<div>'+b+'</div>');
                                    wgt_units_array.push(b);
                                    //};            
                                });

                                var dimensions_units_array = [];
                                var cont8 = 0;
                                $('mercurygate masterbilloflading relateditems packages package itemgroups itemgroup dimensions dimension[type="actual"][dim="Width"]').each(function () {
                                    cont8++;
                                    //if (cont6 % 2 === 0) {} else{
                                    var c = $(this).attr('uom');
                                    //$('#element5').append('<div>'+c+'</div>');
                                    dimensions_units_array.push(c);
                                    //};            
                                });

                                var delivered_qty_array = [];
                                var cont9 = 0;
                                $('mercurygate masterbilloflading relateditems packages package itemgroups itemgroup quantities quantity[type="delivered"]').each(function () {
                                    cont9++;
                                    //if (cont3 % 2 === 0) {} else{
                                    //$('#element5').append('<div>'+$(this).html()+'</div>');
                                    delivered_qty_array.push($(this).html());
                                    //};
                                });

                                var delivered_wgt_array = [];
                                var cont10 = 0;
                                $('mercurygate masterbilloflading relateditems packages package itemgroups itemgroup weights weight[type="delivered"]').each(function () {
                                    cont10++;
                                    //if (cont6 % 2 === 0) {} else{
                                    //$('#element5').append('<div>'+$(this).html()+'</div>');
                                    delivered_wgt_array.push($(this).html());
                                    //};            
                                });

                                for (var j = 0; j < itemid_array.length; j++) {
                                //$('#number').append('<div>'+date_array_un[i]+'</div>');
                                $('#table_item tbody').append('<tr><td>' + itemid_array[j] + '</td><td>' + description_array[j] + '</td><td>' + class_array[j] + '</td><td>' + nmfccode_array[j] + '</td><td>' + ordered_qty_array[j] + '</td><td>' + ordered_uom_array[j] + '</td><td>' + actual_qty_array[j] + '</td><td>' + actual_uom_array[j] + '</td><td>' + planned_wgt_array[j] + ' ' + wgt_units_array[j] + '</td><td>' + actual_wgt_array[j] + ' ' + wgt_units_array[j] + '</td><td>' + dimensions_units_array[j] + '</td><td>' + delivered_qty_array[j] + '</td><td>' + delivered_wgt_array[j] + ' ' + wgt_units_array[j] + '</td></tr>');
                                };

                                //----------------------------

                                // --------Status Description --------- //// 
                                var status_array_desc = [];
                                for (var j = 0; j < status_array.length; j++) {
                                    switch (status_array[j]) {
                                        case 'A':
                                            status_array_desc.push('Arrived');
                                            break;
                                        case 'A3':
                                            status_array_desc.push('Shipment Returned to Shipper');
                                            break;
                                        case 'A5':
                                            status_array_desc.push('Unable to Locate');
                                            break;
                                        case 'A7':
                                            status_array_desc.push('Refused by Consignee');
                                            break;
                                        case 'A9':
                                            status_array_desc.push('Shipment Damaged');
                                            break;
                                        case 'AA':
                                            status_array_desc.push('Pickup Appointment Date/Time');
                                            break;
                                        case 'AB':
                                            status_array_desc.push('Delivery Appointment Date/Time');
                                            break;
                                        case 'AD':
                                            status_array_desc.push('Delivery Appointment Scheduled');
                                            break;
                                        case 'AF':
                                            status_array_desc.push('Actual Pickup');
                                            break;
                                        case 'AG':
                                            status_array_desc.push('Estimated Delivery');
                                            break;
                                        case 'AH':
                                            status_array_desc.push('Attempted Delivery');
                                            break;
                                        case 'AI':
                                            status_array_desc.push('Shipment has been Reconsigned');
                                            break;
                                        case 'AJ':
                                            status_array_desc.push('Tendered for Delivery');
                                            break;
                                        case 'AM':
                                            status_array_desc.push('Loaded on Truck');
                                            break;
                                        case 'AN':
                                            status_array_desc.push('Diverted to Air Carrier');
                                            break;
                                        case 'AP':
                                            status_array_desc.push('Delivery Not Completed');
                                            break;
                                        case 'AR':
                                            status_array_desc.push('Rail Arrival at Destination Intermodal Ramp');
                                            break;
                                        case 'AV':
                                            status_array_desc.push('Available for Delivery');
                                            break;
                                        case 'AW':
                                            status_array_desc.push('Past Cut-ff Time');
                                            break;
                                        case 'B':
                                            status_array_desc.push('Damaged');
                                            break;
                                        case 'B2':
                                            status_array_desc.push('Trap for Customer');
                                            break;
                                        case 'B6':
                                            status_array_desc.push('Estimated to Arrive at Carrier Terminal');
                                            break;
                                        case 'BA':
                                            status_array_desc.push('Connecting Line or Cartage Pick-up');
                                            break;
                                        case 'BC':
                                            status_array_desc.push('Storage in Transit');
                                            break;
                                        case 'BH':
                                            status_array_desc.push('Insufficient Time to Complete Delivery');
                                            break;
                                        case 'BI':
                                            status_array_desc.push('Cartage Agent');
                                            break;
                                        case 'BS':
                                            status_array_desc.push('Refused by Customer');
                                            break;
                                        case 'C1':
                                            status_array_desc.push('Estimated to Depart Terminal Location');
                                            break;
                                        case 'CA':
                                            status_array_desc.push('Shipment Cancelled');
                                            break;
                                        case 'CD':
                                            status_array_desc.push('Carrier Departed Delivery Location');
                                            break;
                                        case 'CL':
                                            status_array_desc.push('Trailer Closed Out');
                                            break;
                                        case 'CP':
                                            status_array_desc.push('Completed Loading at Pick-up Location');
                                            break;
                                        case 'D1':
                                            status_array_desc.push('Completed Unloading at Delivery Location');
                                            break;
                                        case 'E':
                                            status_array_desc.push('Estimated to Arrive (En Route)');
                                            break;
                                        case 'HB':
                                            status_array_desc.push('Held - Refused');
                                            break;
                                        case 'HC':
                                            status_array_desc.push('Held - Consignee closed');
                                            break;
                                        case 'HD':
                                            status_array_desc.push('Held - Refused Shipment');
                                            break;
                                        case 'I1':
                                            status_array_desc.push('In-Gate');
                                            break;
                                        case 'J':
                                            status_array_desc.push('Delivered to Connecting Line');
                                            break;
                                        case 'J1':
                                            status_array_desc.push('Delivered to Connecting Line');
                                            break;
                                        case 'K':
                                            status_array_desc.push('Customs');
                                            break;
                                        case 'K1':
                                            status_array_desc.push('Arrived at Customs');
                                            break;
                                        case 'L':
                                            status_array_desc.push('Loading');
                                            break;
                                        case 'L1':
                                            status_array_desc.push('Loading');
                                            break;
                                        case 'NS':
                                            status_array_desc.push('Normal Status');
                                            break;
                                        case 'OA':
                                            status_array_desc.push('Out-Gate');
                                            break;
                                        case 'OO':
                                            status_array_desc.push('Paperwork Received');
                                            break;
                                        case 'P':
                                            status_array_desc.push('Departure From Location');
                                            break;
                                        case 'P1':
                                            status_array_desc.push('Departed Terminal Location');
                                            break;
                                        case 'PR':
                                            status_array_desc.push('U.S. Customs Hold at In-Bound Location');
                                            break;
                                        case 'R1':
                                            status_array_desc.push('Received from Prior Carrier');
                                            break;
                                        case 'RB':
                                            status_array_desc.push('Delivery Appointment Requested');
                                            break;
                                        case 'RL':
                                            status_array_desc.push('Rail Departure from Origin Intermodal Ramp');
                                            break;
                                        case 'S1':
                                            status_array_desc.push('Trailer Spotted at Consigne');
                                            break;
                                        case 'SD':
                                            status_array_desc.push('Shipment Delayed');
                                            break;
                                        case 'T':
                                            status_array_desc.push('At Terminal; Intra-Terminal Movement');
                                            break;
                                        case 'WE':
                                            status_array_desc.push('Weather Prevented Movement');
                                            break;
                                        case 'X1':
                                            status_array_desc.push('Arrived at Delivery Location');
                                            break;
                                        case 'X2':
                                            status_array_desc.push('Estimated Date and/or Time of Arrival at Consignees Location');
                                            break;
                                        case 'X3':
                                            status_array_desc.push('Arrived at Pick-up Location');
                                            break;
                                        case 'X4':
                                            status_array_desc.push('Arrived at Terminal Location');
                                            break;
                                        case 'X5':
                                            status_array_desc.push('Arrived at Delivery Location');
                                            break;
                                        case 'X6':
                                            status_array_desc.push('En Route to Delivery Location');
                                            break;
                                        case 'X8':
                                            status_array_desc.push('Arrived at Pick-up Location Loading Dock');
                                            break;
                                        case 'XB':
                                            status_array_desc.push('Shipment Acknowledged');
                                            break;
                                    }
                                };

                                //--------
                                for (var i = 0; i < date_array_un.length; i++) {
                                    $('#number').append('<div>' + date_array_un[i] + '</div>');
                                    $('#table_sort tbody').append('<tr><td>' + date_array_un[i] + '</td><td>' + status_array[i] + '</td><td>' + status_array_desc[i] + '</td><td>' + city_array[i] + '</td><td>' + state_array[i] + '</td></tr>');
                                }
                                ;
                                //$('#table_sort').tablesorter();
                                //$('table').trigger('saveSortReset');
                                /*$("#table_sort").tablesorter({
                                sortReset   : true,
                                sortRestart : true,
                                sortInitialOrder: 'desc',
                                headers : {
                                // 0 : { lockedOrder: 'asc' }, only allow sorting in one direction
                                3 : { sortInitialOrder: 'asc' },
                                4 : { sortInitialOrder: 'asc' },
                                5 : { sortInitialOrder: 'asc' }
                                }
                                });*/

                                //---- GET THE NEWEST EVENT -----//
                                var date_array_last = [];
                                for (var k = 0; k < date_array_un.length; k++) {
                                    date_array_last.push(new Date(date_array_un[k]));
                                }
                                var maxDate = new Date(Math.max.apply(null, date_array_last));
                                var idx = date_array_last.map(Number).indexOf(+maxDate);
                                $('#status_description').html(status_array_desc[idx]);
                                $('#status_date').html((date_array_un[idx]));
                                //$("#table_sort").stupidtable();
                                var $table = $("#table_sort").stupidtable();
                                var $th_to_sort = $table.find("thead th").eq(0);
                                $th_to_sort.stupidsort('desc');

                                var num_bol = $('#ref1').val();

                                $('#h1_bol').html("BOL # " + num_bol);

                                //---TERMINAL INFO ----///
                                var contactname = $('terminalinfo destination address contacts contact').find('name').html();
                                $('#contactname').html(contactname);
                                var dest_terminal = $('terminalinfo destination address').find('name').html();
                                $('#dest_terminal').html(dest_terminal);
                                $('#comma').html(', ');
                                var contactaddress = $('terminalinfo destination address').find('addrline1').html();
                                $('#contactaddress').html(contactaddress);
                                var dest_city = $('terminalinfo destination address').find('city').html();
                                $('#dest_city').html(dest_city);
                                var dest_state = $('terminalinfo destination address').find('stateprovince').html();
                                $('#dest_state').html(dest_state + ' ');
                                var dest_zip = $('terminalinfo destination address').find('postalcode').html();
                                $('#dest_zip').html(dest_zip);
                                var dest_phone = $('terminalinfo destination address contacts contact contactmethods').find("[type='Phone']").html();
                                $('#dest_phone').html(dest_phone);
                                var dest_fax = $('terminalinfo destination address contacts contact contactmethods').find("[type='Fax']").html();
                                $('#dest_fax').html(dest_fax);

                                //---SHIPPER INFO ----///
                                var shipper_name = $('masterbilloflading shipments shipment shipper address').find('name').html();
                                $('#shipper_name').html(shipper_name);
                                var shipper_address = $('masterbilloflading shipments shipment shipper address').find('addrline1').html();
                                $('#shipper_address').html(shipper_address);
                                var shipper_address2 = $('masterbilloflading shipments shipment shipper address').find('addrline2').html();
                                $('#shipper_address2').html(shipper_address2);
                                var shipper_city = $('masterbilloflading shipments shipment shipper address').find('city').html();
                                $('#shipper_city').html(shipper_city);
                                var shipper_state = $('masterbilloflading shipments shipment shipper address').find('stateprovince').html();
                                $('#shipper_state').html(shipper_state);
                                var shipper_zip = $('masterbilloflading shipments shipment shipper address').find('postalcode').html();
                                $('#shipper_zip').html(shipper_zip);
                                var shipper_contact = $('masterbilloflading shipments shipment shipper address contacts contact').find('name').html();
                                $('#shipper_contact').html(shipper_contact);
                                var shipper_phone = $('masterbilloflading shipments shipment shipper address contacts contact contactmethods').find("[type='Phone']").html();
                                $('#shipper_phone').html(shipper_phone);

                                //---CONSIGNEE INFO ----///
                                var consignee_name = $('masterbilloflading shipments shipment consignee address').find('name').html();
                                $('#consignee_name').html(consignee_name);
                                var consignee_address = $('masterbilloflading shipments shipment consignee address').find('addrline1').html();
                                $('#consignee_address').html(consignee_address);
                                var consignee_address2 = $('masterbilloflading shipments shipment consignee address').find('addrline2').html();
                                $('#consignee_address2').html(consignee_address2);
                                var consignee_city = $('masterbilloflading shipments shipment consignee address').find('city').html();
                                $('#consignee_city').html(consignee_city);
                                var consignee_state = $('masterbilloflading shipments shipment consignee address').find('stateprovince').html();
                                $('#consignee_state').html(consignee_state);
                                var consignee_zip = $('masterbilloflading shipments shipment consignee address').find('postalcode').html();
                                $('#consignee_zip').html(consignee_zip);
                                var consignee_contact = $('masterbilloflading shipments shipment consignee address contacts contact').find('name').html();

                                if (consignee_contact == '') {
                                    $('#consignee_contact_icon').hide();
                                } else {
                                    $('#consignee_contact_icon').show();
                                    $('#consignee_contact').html(consignee_contact);
                                };

                                var consignee_phone = $('masterbilloflading shipments shipment consignee address contacts contact contactmethods').find("[type='Phone']").html();
                                $('#consignee_phone').html(consignee_phone);

                                //----REFERENCES----//
                                var ref_bol = $('masterbilloflading referencenumbers').find("[type='BOL']").html();
                                $('#ref_bol').html(ref_bol);
                                var ref_po = $('masterbilloflading referencenumbers').find("[type='PO Number']").html();
                                $('#ref_po').html(ref_po);
                                var ref_pro = $('masterbilloflading referencenumbers').find("[type='PRO']").html();
                                //----
                                if (typeof ref_pro === 'undefined') {
                                    $('#ref_pro').html('');
                                    $('#h2_pro').html("PRO # " + "");
                                } else {
                                    $('#ref_pro').html(ref_pro);
                                    $('#h2_pro').html("PRO # " + ref_pro);
                                };

                                //----
                                var ref_scac = $('masterbilloflading referencenumbers').find("[type='SCAC']").html();
                                $('#ref_scac').html(ref_scac);
                                var ref_tracking_dispatcher = $('masterbilloflading referencenumbers').find("[type='Tracking Dispatcher']").html();
                                $('#ref_tracking_dispatcher').html(ref_tracking_dispatcher);
                                var ref_piece_count = $('masterbilloflading referencenumbers').find("[type='Piece Count']").html();
                                $('#ref_piece_count').html(ref_piece_count);
                                //alert(ref_bol+'-');

                                var load_status = $('mercurygate masterbilloflading').find('status').html();
                                $('#load_status').html(load_status);
                                if ($('#load_status').html() == 'Delivered') {
                                    $('#status_description').html('');
                                    $('#eta').html('DELIVERED : ' + eta_date[0]);
                                } else {
                                };

                                //----Carrier -----//
                                var carrier_name = $('masterbilloflading carriers carrier').find('carriername').html();
                                $('#carrier_name').html(carrier_name);
                                $('#h2_carrier').html("Name: " + carrier_name);
                                if (($('#dest_terminal').html() == '') || ($('#dest_terminal').html() == 'undefined')) {
                                    //alert("Terminal is Empty");
                                    $('#dest_terminal').html('VANESSA BENEDETTI');
                                    $('#contactaddress').html('VANESSA@SMITH-CARGO.COM');
                                    $('#dest_city').html('');
                                    $('#dest_state').html('');
                                    $('#dest_zip').html('');
                                    $('#comma').html('');
                                    $('#dest_phone').html('954-915-7315');
                                    $('#dest_fax').html('');
                                    $('#contactname').html('');
                                }
                                ;
                                $('#loading_image_div1').css('display', 'none');
                                $('#loading_image_div').css('display', 'none');
                            }                            
                        },
                        error: function (data) {
                            alert('There was an error');
                        }

                    });
                    }, 1000);

                    //---- BRING BOL'S ----//
                    $.ajax({
                        type: 'POST',
                        async: true,
                        data: {ref1: $('#ref1').val()},
                        url: 'request/request3.php',
                        success: function (data) {
                            $('#document_bol_text').html(data);
                            var document_bol_content = $('#document_bol_text Documents Document').find('content').html();
                            var document_bol_name = $('#document_bol_text Documents Document').find('filename').html();
                            if (typeof document_bol_content === 'undefined') {
                                $('#bol_div').html('');
                            } else {
                                $('#bol_div').html('<a download="' + document_bol_name + '" href="data:application/pdf;base64,' + document_bol_content + '" title="Download pdf document">BOL</a>');
                            }
                        },
                        error: function (data) {
                        }
                    });

                    //---- BRING POD ----//
                    $.ajax({
                        type: 'POST',
                        async: true,
                        data: {ref1: $('#ref1').val()},
                        url: 'request/request4.php',
                        success: function (data) {
                            $('#document_pod_text').html(data);
                            var document_pod_content = $('#document_pod_text Documents Document').find('content').html();
                            var document_pod_name = $('#document_pod_text Documents Document').find('filename').html();
                            if (typeof document_pod_content === 'undefined') {
                                $('#pod_div').html('');
                                //alert('nothing');
                            } else {
                                $('#pod_div').html('<a download="' + document_pod_name + '" href="data:application/pdf;base64,' + document_pod_content + '" title="Download pdf document">POD</a>');
                            }
                        },
                        error: function (data) {
                        }
                    });

                    //--- BRING CUSTOMER INVOICE ---//
                    $.ajax({
                        type: 'POST',
                        async: true,
                        data: {ref1: $('#ref1').val()},
                        url: 'request/request5.php',
                        success: function (data) {
                            $('#document_cus_text').html(data);
                            var document_cus_content = $('#document_cus_text Documents Document').find('content').html();
                            var document_cus_name = $('#document_cus_text Documents Document').find('filename').html();
                            if (typeof document_cus_content === 'undefined') {
                                $('#cus_div').html('');
                            } else {
                                $('#cus_div').html('<a download="' + document_cus_name + '" href="data:application/pdf;base64,' + document_cus_content + '" title="Download pdf document">BOL</a>');
                            }
                        },
                        error: function (data) {
                        }
                    });
                }                
            });
        </script>

    </body>
</html>