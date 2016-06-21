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
                <div id="div_table_xml"></div>
                <div id="test_eta"></div>
                <div id="result_xml">
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
                            //alert(data+' OMG');
                            if (data.length == 0) {
                                alert('No information related for this reference');
                                $('#loading_image_div1').css('display', 'none');
                                $('#loading_image_div').css('display', 'none');
                                $('#jumbotron').hide();
                                $('#jumbotron2').hide();
                                /*$('#header').css('width', '90%');*/

                            } else {
                                //alert('Single Item');
                                $('#result_xml').html(data);
                                var eta_var = $('#result_xml masterbilloflading dates drop').find('date[type="earliest"]').html();
                                // $(this).html();
                                var eta_date = eta_var.split(" ");
                                

                                var status_array = [];
                                var counter = 1;
                                $('#result_xml masterbilloflading').find('shipments').each(function () {
                                    //$('#element2').append('<div>'+$(this).html()+'</div>');
                                    $(this).html('');
                                    //alert(counter);
                                    counter++;
                                    //$('#element2').append('<div>'+$('ShipmentStatus StatusDetails StatusDetail StatusCode').html()+'</div>');
                                });
                                alert(counter);
                                $('#result_xml masterbilloflading dates drop date[type="earliest"]').each(function () {
                                    //$('#element2').append('<div>'+$(this).html()+'</div>');
                                    status_array.push($(this).html());
                                    //$('#element2').append('<div>'+$('ShipmentStatus StatusDetails StatusDetail StatusCode').html()+'</div>');
                                });

                                $('#test_eta').html('ESTIMATED DELIVERY DATE : ' + status_array.toString() + '---'+status_array.length);
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