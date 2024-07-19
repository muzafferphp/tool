
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>VEHICLE TAX PAYMENT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('mp/assets/js/jquery.scrollUp.min.js')}}"></script>
    <style type="text/css">
      body{font-family:arial;background-color:#fff;margin:0px;padding:0px;text-transform:;}
      .recentcomments a {display:inline !important;padding:0 !important;margin:0 !important;}
      #menu-main li{width:119px;}
      .white_link:link,.white_link:visited{color:#666;text-decoration:none;margin:10px;padding:10px;font-size:14px;}
      .white_link:hover,.white_link:active{color:#bf0400;text-decoration:none;margin:10px;padding:10px;}
    </style>
    <style type='text/css'>
      /*body{padding:0px; margin:0px;background-color:#eee;}*/
      .container{background-color:#fff;box-shadow:0 0 30px #000; padding:0px 20px 15px 20px;}
      .error{color:red;font-weight:300;}
      .foooter1{padding:30px 0px; margin:0;border-top:2px solid #ec868d; font-size:12px;}
      .foooter1><span{font-size:12px;}
      .icon_social_top{height:30px; margin-top:10px;float:right; margin-right:5px;}
      .li_footer{list-style:none;margin-left:10px;}
      .icon_social_footer{height:22px; margin-bottom:5px;}
      .span_footer{margin-left:10px;}
      .a_footer:link, .a_footer:visited{text-decoration:none; color:#ccc; font-size:13px;}
      .a_footer:hover{text-decoration:none; color:red; font-size:13px;}
      .promo{background-color:transparent; color:#fff; border:0px solid #ec868d; padding:20px;}
      .promo2{color:#fff; padding:25px 3px; text-align:center; height:120px; margin-bottom:30px;}
      .scrollup{width:40px; height:40px; text-indent:-9999px; opacity:0.5; position:fixed;bottom:50px; right:30px; display:none;background: url('https://mptxtxtx.vahanetaxfilingservices.com/assets/img/icon_top.png') no-repeat;}
      .span_navy{color:blue;}
      .border{border:1px solid #ec868d;border-radius:8px;padding:10px;}
      .bg{background-color:#ffe5e9;}
      .bg2{background-color:#ffefe8;}
      .text_red{color:#bf0400;font-weight:700;}
      .text_blue{color:#0b4a8f;font-weight:700;}
      .form:focus{background-color:#c6ffc6;}
      .text-field:focus, input[type='text']:focus, input[type='password']:focus, input[type='int']:focus, input[type='radio']:focus, .ui-selectonemenu:focus, .ui-selectmanymenu:focus, .ui-selectonemenu.ui-state-focus, .ui-selectmanymenu.ui-state-focus, .ui-chkbox-box.ui-state-focus, .ui-chkbox-box:focus, .ui-selectcheckboxmenu-label.ui-state-hover, .ui-inputtextarea.ui-state-hover {background: #c6ffc6 !important;border-color: #1682ba !important;outline: 0;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 8px rgba(102, 175, 233, 0.6);
        }
        input,select{border:1px solid #1682ba;text-transform:uppercase;}
    </style>
  </head>
  <body style="overflow-x:hidden;">
    <div class="container-fluid" style="padding:0px;">
      <div class="row">
        <div class="col-sm-12">
          <center>
            <img class="img img-responsive" src="{{asset('mp/assets/images/header_home.jpg')}}">
          </center>
        </div>
      </div>
              <div class="row" style="background-color:;color:;padding:;background-image:url({{asset('mp/assets/images/menu_bg.jpg')}});background-repeat:repeat-x;">
          <div class="col-sm-12" style="height:40px;padding:10px">

            <a class="white_link" href="{{route('user.booking.mp')}}"><i class="fa fa-home"></i> Home</a>
            <a class="white_link" href="{{route('user.apply.list.mp')}}"><i class="fa fa-print"></i> View Receipt</a>
          <a class="white_link" href="{{route('select-state')}}"><i class="fa fa-file"></i> Change State</a>
          <a class="white_link" href="{{route('all-booking')}}"><i class="fa fa-print"></i> All Booking</a>
          <a class="white_link" href="{{route('user.logout.mp')}}"><i class="fa fa-sign-out"></i> Logout</a>
          <span style="float:right;text-transform:;margin-right:20px;">Welcome {{$u->email}}</span>
          </div>
        </div>
            <!-- <div class="row" style="background-color:#0e8bd3;color:white;padding:5px;font-size:100%;">
        <div class="col-sm-12">
          <marquee width="100%" behavior="alternate" direction="left" scrollamount="10" scrolldelay="100">
            Verify the validity of the receipt by sending sms <font style="color:pink;">VAHAN < STATE CODE > CP < VEHICLE NO ></font> to 7738299899 (e.g. <font style="color:pink;">VAHAN XX CP XXXXXXXXXXX</font>)
          </marquee>
        </div>
      </div>
      <div class="row" style="background-color:#a0d7ff;color:white;padding:5px;font-size:100%;color:red;">
        <div class="col-sm-12">
          <marquee width="100%" behavior="alternate" direction="left" scrollamount="10" scrolldelay="100">
            Select the services name carefully in case you select wrong service and pay the fee/tax, amount will not be refunded or adjusted.
          </marquee>
        </div>
      </div> -->
    </div>  <!--home-->
  <style type="text/css">
    input, select, textarea{margin-bottom:0px;border:0px solid #1682ba;height:24px;}
  </style>
    <div class="container-fluid" style="margin-top:10px;">
      <div class="row">
        <div class="col-sm-12">
                  </div>
      </div>
      <div class="row">
        <div class="col-sm-12">

          <div class="container" style="box-shadow:none;padding:20px;width:;">
            <!-- <div class="row">
              <div class="col-sm-12 bg border" style="margin: 0px 15px 0px;padding:5px 10px;">Tax Payment Entry</div>
            </div> -->
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
            <form name="paytax" method="post" action="{{ route('user.booking.create.mp') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-sm-12">
                  <center>
                    <table cellpadding="0" cellspacing="0" border="0" class="bg2" style="width:1000px;background-color:#fff;">
                      <tr><td style=""><span class="text_red">Pay Tax for Other State Vehicles</span></td></tr>
                    </table>
                    <table cellpadding="2" cellspacing="2" border="0" class="bg2" style="width:1000px;min-height:200px;background-color:#ffefe8;border-top:2px solid #ec868d;border-bottom:2px solid #ec868d;">
                      <tr style="padding-top:5px;">
                        <td style="text-align:right;width:450px;">* Form No. : </td>
                        <td style="padding:2px 10px;width:550px;" colspan="2">
                          <select class="form-control" name="VehicleType" required style="width:450px;">
                            <option value=  "FORM20-APP FOR REGISTRATION OF A MOTOR VEHICLE"  >FORM20-APP FOR REGISTRATION OF A MOTOR VEHICLE</option>
                            <option value="M.P.M.V.R.20-APP FOR TEMPORARY REGISTRATION"  >M.P.M.V.R.20-APP FOR TEMPORARY REGISTRATION</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:right;width:;">* Pay Tax to RTO : </td>
                        <td style="padding:2px 10px;width:300px;">
                          <select class="form-control" name="from_state" required>
                            <option value="">-- Select RTO --</option>
                                                          <option value="AGAR MALWA"  >AGAR MALWA</option>
                                                          <option value="ALIRAJPUR"  >ALIRAJPUR</option>
                                                          <option value="ANUPPUR"  >ANUPPUR</option>
                                                          <option value="ASHOK NAGAR"  >ASHOK NAGAR</option>
                                                          <option value="BADWANI"  >BADWANI</option>
                                                          <option value="balaghat">balaghat</option>
                                                          <option value="betul"  >betul</option>
                                                          <option value="bhind"  >bhind</option>
                                                          <option value="bhopal"  >bhopal</option>
                                                          <option value="burahanpur">burahanpur</option>
                                                          <option value="chhatarpur"  >chhatarpur</option>
                                                          <option value="chhindwara"  >chhindwara</option>
                                                          <option value="damoh"  >damoh</option>
                                                          <option value="datia"  >datia</option>
                                                          <option value="dewas"  >dewas</option>
                                                          <option value="dhar"  >dhar</option>
                                                          <option value="dindori"  >dindori</option>
                                                          <option value="guna"  >guna</option>
                                                          <option value="Gwalior"  >Gwalior</option>
                                                          <option value="harda"  >harda</option>
                                                          <option value="hosangabad"  >hosangabad</option>
                                                          <option value="indore"  >indore</option>
                                                          <option value="jabalpur"  >jabalpur</option>
                                                          <option value="jhabua"  >jhabua</option>
                                                          <option value="katni"  >katni</option>
                                                          <option value="khandwa"  >khandwa</option>
                                                          <option value="khargoni"  >khargoni</option>
                                                          <option value="mandla"  >mandla</option>
                                                          <option value="mandsaur"  >mandsaur</option>
                                                          <option value="morena"  >morena</option>
                                                          <option value="narsinghpur"  >narsinghpur</option>
                                                          <option value="neemuch"  >neemuch</option>
                                                          <option value="panna"  >panna</option>
                                                          <option value="raisen"  >raisen</option>
                                                          <option value="rajgarh"  >rajgarh</option>
                                                          <option value="ratlam"  >ratlam</option>
                                                          <option value="rewa"  >rewa</option>
                                                          <option value="sagar"  >sagar</option>
                                                          <option value="satna"  >satna</option>
                                                          <option value="sehore"  >sehore</option>
                                                          <option value="seoni"  >seoni</option>
                                                          <option value="shahdol"  >shahdol</option>
                                                          <option value="shajapur"  >shajapur</option>
                                                          <option value="sheopur"  >sheopur</option>
                                                          <option value="shivpuri"  >shivpuri</option>
                                                          <option value="sidhi"  >sidhi</option>
                                                          <option value="singrauli"  >singrauli</option>
                                                          <option value="sta gwa"  >sta gwa</option>
                                                          <option value="tikamgarh"  >tikamgarh</option>
                                                          <option value="ujjain"  >ujjain</option>
                                                          <option value="umaria"  >umaria</option>
                                                          <option value="vidisha"  >vidisha</option>
                                                      </select>
                        </td>
                        <td style="width:250px;"></td>
                      </tr>
                      <tr>
                        <td style="text-align:right;width:;">* Name : </td>
                        <td style="padding:2px 10px;">
                          <input class="form-control" type="text" name="ownername" value="" required>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:right;width:;">* Registration No. : </td>
                        <td style="padding:2px 10px;">
                          <input class="form-control" type="text" name="vehicleno" value="" required>
                          <input class="form-control" type="hidden" name="receipt_no" value="9920782972317" required>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:right;width:;">* Is Vehicle Registered As Gramin : </td>
                        <td style="padding:2px 10px;">
                          <input type="checkbox" name="gramin" style="height:12px;">
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:right;width:;">* Tax Peroid : </td>
                        <td style="padding:2px 10px;text-transform:uppercase;">
                          <select class="form-control" name="tax_mode" required>
                            <option value="">-- Tax Mode --</option>
                            <option value="DAYS"  >DAYS</option>
                            <option value="WEEKLY"  >WEEKLY</option>
                            <option value="MONTHLY"  >MONTHLY</option>
                            <option value="QUARTERLY"  >QUARTERLY</option>
                            <option value="YEARLY"  >YEARLY</option>
                            <option value="LIFETIME"  >LIFETIME</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:right;width:;">* Tax From Date : </td>
                        <td style="padding:2px 10px;">
                          <input class="form-control" type="date" name="tax_from" value="" required>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:right;width:;">* Tax To Date : </td>
                        <td style="padding:2px 10px;">
                          <input class="form-control" type="date" name="tax_upto" value="" required>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:right;width:;">* Tax Amount : </td>
                        <td style="padding:2px 10px;">
                          <input class="form-control" type="number" name="total_tax_amount" value="" required>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:right;width:;">* Consessioner Fee : </td>
                        <td style="padding:2px 10px;">
                          <input class="form-control" type="number" name="tax_consessioner" value="">
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:right;width:;">* IPS Fee : </td>
                        <td style="padding:2px 10px;">
                          <input class="form-control" type="number" name="tax_ips" value="31.86">
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:right;width:;">* Mobile No. : </td>
                        <td style="padding:2px 10px;">
                          <input class="form-control" type="text" name="mobile" value="" maxlength="10" minlength="10" required>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:right;width:;">* Owner Name : </td>
                        <td style="padding:2px 10px;">
                            <input type="text" name="genby" class="form-control">
                          <!--<select class="form-control" name="client_name" required>
                            <option value="AAKASH"  >AAKASH</option>
                            <option value="ANKUR"  >ANKUR</option>
                            <option value="MANIRAM"  >MANIRAM</option>
                            <option value="AJAY"  >AJAY</option>
                            <option value="RAHUL"  >RAHUL</option>
                            <option value="KRISHAN"  >KRISHAN</option>
                            <option value="VIJAY"  >VIJAY</option>
                          </select>-->
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:right;width:;"></td>
                        <td style="padding:2px 10px;">
                          <input class="btn btn-danger" type="submit" name="submit" value="Submit" style="height:32px;">
                        </td>
                        <td></td>
                      </tr>
                    </table>
                  </center>
                </div>
              </div>
            </form>
          </div>
          <br/>
        </div>
      </div>
    </div>
  </div>
    <br/>
  <!-- End home -->
<!-- End home -->
<script src="https://mptxtxtx.vahanetaxfilingservices.com/assets/js/scrollup.min.js"></script>
    <a href="#" class="scrollup" style="display: none;">Scroll</a>
    <script>
      $(document).ready(function(){
        $(window).scroll(function(){
          if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
          } else {
            $('.scrollup').fadeOut();
          }
        });
        $('.scrollup').click(function(){
          $("html, body").animate({ scrollTop: 0 }, 1000);
          return false;
        });
      });
    </script>
    <script>
      function myFunction() {
        window.print();
      }
      function getTotal()
      {
        var amount = document.getElementById("tax_amount").value;
        var fine   = document.getElementById("tax_fine").value;
        var total = parseFloat(amount) + parseFloat(fine);
        $('#tax_total').val(total);
      }
      function getvehicle()
      {
        var vehicle = document.getElementById("vehicle").value;
        $('#vehicle_no').val(vehicle);
      }
    </script>
  </body>
</html>
    <script type="text/javascript">
      jQuery(document).ready(function(){
      });
    </script>
    <a href="#" class="scrollup" style="display: none;">Scroll</a>
    <script>
      $(document).ready(function(){
        $(window).scroll(function(){
          if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
          } else {
            $('.scrollup').fadeOut();
          }
        });

        $('.scrollup').click(function(){
          $("html, body").animate({ scrollTop: 0 }, 1000);
          return false;
        });
      });
    </script>
    <!--print command-->
    <script type="text/javascript">
      function myFunction(){window.print();}
    </script>
  </body>
</html>
