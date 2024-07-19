<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Online Tax/Fee Payment System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/colreorder/1.5.2/js/dataTables.colReorder.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script> -->

    <style type="text/css">
        body{font-family: Arial, Helvetica, sans-serif;font-size:13px;}
        .blur{text-shadow:0 0 3px #b76e6e;color:transparent; font-size:15px;z-index:1;text-transform:uppercase;}
        .txt1{font-family: Arial, Helvetica, sans-serif;text-transform:;font-size:13px;}
        .txt2{font-family: Arial, Helvetica, sans-serif;text-transform:uppercase;font-size:13px;}
        table {border-collapse: collapse;  width: 100%;}
        th, td {padding: 3px 15px;  text-align: left;  border-bottom: 0px solid #ddd;}
        /*.qr-code-generator {width: 500px;margin: 0 auto;}
        .qr-code-generator * {-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing:border-box;}
        #qrcode {width: 128px;height: 128px;margin: 0 auto;text-align: center;}
        #qrcode a {font-size: 0.8em;}
        .qr-url, .qr-size {padding: 0.5em;border: 1px solid #ddd;border-radius: 2px;-webkit-box-sizing: border-box;  -moz-box-sizing: border-box;box-sizing: border-box;}
        .qr-url {width: 79%;}
        .qr-size {width: 20%;}
        .generate-qr-code {display: block;width: 100%;margin: 0.5em 0 0;padding: 0.25em;font-size: 1.2em;border: none;cursor: pointer;background-color: #e5554e;color: #fff;}*/
        @media print {
    * {
        -webkit-print-color-adjust: exact;
    }
    
    .blur {
    text-shadow: 0 0 3px #eb3030;
   
}
.txt1 {
    font-weight: bold;
}
}

 .blur {
    text-shadow: 0 0 3px #eb3030;
   
}

.txt1 {
    font-weight: bold;
}
    </style>
</head>
<body>


<div id="">
    <!--<img class="img img-responsive" src="https://mptxtxtx.vahanetaxfilingservices.com/assets/images/qrcode.png">-->
    <?php
    // if($this->input->post('submit')){
    //   $receipt_no=trim($this->input->post('receipt_no'));
    //   $result=$this->apimodel->listRecord('tex_record',array('receipt_no'=>$receipt_no,'status'=>1,'pstatus'=>1),1,array());
    //   if(empty($data['result'])){
    //     $data['msg']=$this->session->set_flashdata('msg','Sorry! No Record found!');
    //     $data['msg']=$this->session->set_flashdata('msg_class','alert-danger');
    //   }
    // }else if($_GET['id']){
    //   $id=$_GET['id'];
    //   $result = $this->apimodel->listRecord('tex_record',array('id'=>$id,'status'=>1,'pstatus'=>1),1,array());
    // }else
   /* if($_GET['receiptno']){
        $receiptno=$_GET['receiptno'];
        $result=$this->apimodel->listRecord('tex_record',array('receipt_no'=>$receiptno,'status'=>1,'pstatus'=>1),1,array());
    }
    $receip=$result[0]['receipt_no'];
    if(!empty($result)){
        $tolltax=$this->apimodel->listRecord('tolltax',array('id'=>$result[0]['tid']));
        $state=$this->apimodel->listRecord('m_state',array('id'=>20));*/
        ?>
        <div class="row" style="width:1000px !important; height:;border:0px solid black;z-index:1;">
            <div class="col-sm-12" style="overflow-y:hidden;padding:10px;text-align:;height:447px !important;background-image: url('');background-repeat: no-repeat;background-attachment:;background-size: cover;">
                <?php
                for ($x = 1; $x < 1000; $x++) {
                    echo '<span class="blur" style=""> '.strtoupper(@$rectdata->vehicleno).' '.strtoupper(@$rectdata->ownername).' '.strtoupper(@$rectdata->receipt_no_gen).' MP TRANSPORT DEPARTMENT'.' </span> ';
                }
                ?>
            </div>
        </div>
        <table cellpadding="0" cellspacing="0" border="0" style="position:absolute;top:0px !important;z-index:3;width:1000px!important;background:transparent;  border:1px solid gray;background-image: url('{{asset('mp/assets/images/mp_bg.png?v='.uniqid())}}');background-repeat: no-repeat;background-attachment:;background-size:100%;min-height:480px;">
            <tr style="border-bottom:0px solid black;">
                <td class="txt1" style="border:0px solid black;vertical-align:middle;text-align:center;">
                    <br/><br/>
                    <span style="font-size:20px;font-weight:700;line-height:24px;text-transform:capitalize;">Madhya Pradesh Transport Department</span><br/><br/>
                    <span style="font-size:14px;font-weight:;line-height:26px;text-align:center;margin:40px 0px;"><B>Form G</B><br/><i>See Rule -7 (Subrule rule-4)<br/>Vehicle Tax Receipt</span><br/><br/><br/>
                </td>
            </tr>
            <tr style="border-bottom:0px solid black;">
                <td style="border:0px solid black;vertical-align:middle;text-align:center;">
                    <table cellpadding="0" cellspacing="0" border="0" style="border:0px solid gray;width:100%;">
                        <tr>
                            <td style="width:45%;" class="txt1">Serial No. <b class="txt2">992017{{strtoupper($rectdata->receipt_no)}}</b></td>
                            <td style="width:55%;font-weight:700;text-transform:uppercase;" class="txt1"></td>
                        </tr>
                        <tr>
                            <td style="" class="txt1">Dated &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b class="txt2">{{strtoupper($rectdata->created_at->format('d-M-Y'))}}</b><br/><br/></td>
                            <td style="" class="txt2"></td>
                        </tr>
                        <tr>
                            <td style="" class="txt1">Received from Sh/Smt: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b class="txt2">{{ strtoupper(@$rectdata->ownername) }}</b></td>
                            <td style="" class="txt1"></td>
                        </tr>
                        <tr>
                            <td style="" class="txt1">for Vehicle No. <b class="txt2">{{ strtoupper(@$rectdata->vehicleno) }}</b></td>
                            <td style="" class="txt1">Category</td>
                        </tr>
                        <tr>
                            <td style="" class="txt1">against of Tax/Penalty/Interest</td>
                            <td style="" class="txt1"></td>
                        </tr>
                        <tr>
                            <td style="" class="txt1">Rupees &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class="txt2"><?php  $amount=@$rectdata->total_tax_amount; echo numberTowords($amount).'  only';?></b></td>
                            <td style="" class="txt1"></td>
                        </tr>
                        <tr>
                            <td style="" class="txt1">Period &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class="txt2">{{date('d-M-Y',strtotime($rectdata->tax_from))}}</b></td>
                            <td style="" class="txt1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To  &nbsp;&nbsp; <b class="txt2">{{date('d-M-Y',strtotime($rectdata->tax_upto))}}</b></td>
                        </tr>
                        <tr>
                            <td style="" class="txt1">Received for the &nbsp;&nbsp;&nbsp;&nbsp;<b>{{strtoupper($rectdata->txt_no_of_weeks)}} tax</b></td>
                            <td style="" class="txt1"></td>
                        </tr>
                        <tr>
                            <td style="" class="txt1">Payment receiving RTO: &nbsp;&nbsp;<b class="txt2">{{strtoupper($rectdata->from_state)}}<?php //echo $result[0]['from_district'];?> RTO</b></td>
                            <td style="" class="txt1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rupees <b class="txt2"><?php  echo $amount;?>/-</b></td>
                        </tr>
                        <tr>
                            <td style="" class="txt1">This Payment is made by : &nbsp;&nbsp; <b class="txt2">{{strtoupper($rectdata->genby)}}<?php // echo $result[0]['client_name'];?></b>, Registered at <b class="txt2">INDORE RTO</b><br/><br/></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="txt1">
                                <i>
                                    Note: Shown deficiency amount does not include in the current quarter tax amount.<br/>
                                    Note: This is computer generated receipt and does not require any signature/stamp.
                                </i>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>


    <table cellpadding="0" cellspacing="0" border="0" style="z-index:3;width:1000px!important;background:transparent; height:; border:1px solid gray;background-image: url('<?php //echo base_url()."assets/images/".$state[0]["bg"];?>');background-repeat: no-repeat;background-attachment:;background-size:100%;min-height:400px;">
        <tr style="border-bottom:0px solid black;">
            <td class="txt1" style="border:0px solid black;vertical-align:middle;text-align:center;">
                <br/><br/>
                <span style="font-size:28px;font-weight:700;line-height:30px;text-transform:uppercase;">CASH RECEIPT CUM TAX INVOICE FOR ONLINE PAYMENT SYSTEM</span><br/><br/><br/>
            </td>
        </tr>
        <tr style="border-bottom:0px solid black;">
            <td style="border:0px solid black;vertical-align:middle;text-align:center;">
                <table cellpadding="0" cellspacing="0" border="0" style="border:0px solid gray;width:100%;">
                    <tr>
                        <td style="width:25%;" class="txt1">Reg./Chassis No : </td>
                        <td style="width:25%;font-weight:700;text-transform:uppercase;" class="txt1"><b>{{strtoupper($rectdata->vehicleno)}}</b></td>
                        <td style="width:25%;text-align:right;" class="txt1">Receipt ID : </td>
                        <td style="width:25%;font-weight:700;text-transform:uppercase;" class="txt1"><b>992017{{strtoupper($rectdata->receipt_no)}}</b></td>
                    </tr>

                    <tr>
                        <td style="width:25%;" class="txt1">Owner Name : </td>
                        <td style="width:25%;font-weight:700;text-transform:uppercase;" class="txt1"><b>{{strtoupper($rectdata->ownername)}}</b></td>
                        <td style="width:25%;text-align:right;" class="txt1">Receipt Date :</td>
                        <td style="width:25%;font-weight:700;text-transform:uppercase;" class="txt1"><b>{{strtoupper($rectdata->created_at->format('d-M-Y'))}}</b></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td rowspan="6">{!! QrCode::size(140)->generate($rectdata->universal_link); !!}</td>
                    </tr>
                    <tr>
                        <td style="" class="txt2" colspan="4"><br/><b>SMART CHIP PRIVATE LIMITED</b></td>
                    </tr>

                    <tr>
                        <td  class="txt1" colspan="4" style="font-size: 15px;">187, ROHIT NAGAR, PHASE 2, BAWARIA KALAN BHOPAL, MADHYA PRADESH-462039</td>

                    </tr>
                    <tr>
                        <td style="" class="txt1">Goods & Service Tax No. :</td>
                        <td style="" class="txt2"><b>23AABCS2005H1Z0</b> <?php //echo $result[0]['owner_name'];?></td>
                    </tr>
                    <tr>
                        <td  class="txt1" colspan="4" style="font-size: 17.8px;"><br/>Received with thanks a sum of Rs. <b>31.86/- (Thirty One Rupees And Eighty Six Paisa Only)</b></td>
                    </tr>
                    <tr>
                        <td style="" class="txt1" colspan="4">on account of following as per details below:</td>
                    </tr>
                    <tr>
                        <td style="" class="txt1" colspan="4">
                            <table cellpadding="0" cellspacing="0" border="3" style="border:2px solid gray;width:100%;margin:15px 0px;">
                                <tr>
                                    <td class="txt1" rowspan="2" style="border:2px solid gray;">Description of Service</td>
                                    <td class="txt1" rowspan="2" style="border:2px solid gray;">Service Accounting Code</td>
                                    <td class="txt1" rowspan="2" style="border:2px solid gray;text-align:center;">Amount<br/>(Rs.)</td>
                                    <td class="txt1" rowspan="2" style="border:2px solid gray;text-align:center;">Total Tax<br/>(Rs.)</td>
                                    <td class="txt1" rowspan="2" style="border:2px solid gray;text-align:center;">Total<br/>(Rs.)</td>
                                    <td class="txt1" rowspan="2" style="border:2px solid gray;text-align:center;"></td>
                                    <td class="txt1" rowspan="2" style="border:2px solid gray;text-align:center;"></td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                        <td class="txt1" style="border:2px solid gray;"><b>ONLINE PAYMENT<?php //echo $result[0]['receipt_no'];?></b></td>
                        <td class="txt1" style="border:2px solid gray;text-align:center;"><b>998319<?php //echo $result[0]['receipt_no'];?></b></td>
                        <td class="txt1" style="border:2px solid gray;text-align:right;"><b>27<?php //echo $result[0]['receipt_no'];?></b></td>
                        <td class="txt1" style="border:2px solid gray;text-align:center;"><b>2.43<?php //echo $result[0]['receipt_no'];?></b></td>
                        <td class="txt1" style="border:2px solid gray;text-align:center;"><b>2.43<?php //echo $result[0]['receipt_no'];?></b></td>
                        <td class="txt1" style="border:2px solid gray;text-align:right;"><b>4.86<?php //echo $result[0]['receipt_no'];?></b></td>
                        <td class="txt1" style="border:2px solid gray;text-align:right;"><b>31.86<?php //echo $result[0]['receipt_no'];?></b></td>
                      </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="" class="txt1" style="padding:0px 30px;">Issuing date :  &nbsp;&nbsp;&nbsp;&nbsp;<b> {{strtoupper($rectdata->created_at->format('d-M-Y'))}}<?php //echo $result[0]['tax_total'].'/- ('.numberTowords($result[0]['tax_total']).' Only)';?></b></td>
        </tr>
        <tr>
            <td style="" class="txt1"  style="padding:0px 30px;"><br/>This service is delivered at the request of applicant for his / her own convenience</td>
        </tr>
        <tr>
            <td style="" class="txt1" style="padding:0px 30px;"><br/><center><b>This is an electronically generated document and does not require any signatures</b></center></td>
        </tr>
    </table>

       </div>
<br/>
<div id="ignorePDF" style="width:1000px;align-items:center;text-align:center;height:30px;z-index:1;border:0px solid black;">
    <a href="{{ route('user.apply.list.mp') }}" class="btn">Back</a>
    <input type="button" value="Print" id="" onclick="myFunction()" />
</div>
<script type="text/javascript">
    // $(document).ready(function () {
    //   $('.generate-qr-code').on('click', function(){
    //      $('#qrcode').empty();// Clear Previous QR Code
    //      // Set Size to Match User Input
    //      $('#qrcode').css({
    //      'width' : $('.qr-size').val(),
    //      'height' : $('.qr-size').val()
    //    })
    //    // Generate and Output QR Code
    //    $('#qrcode').qrcode({
    //      width: $('.qr-size').val(),
    //      height: $('.qr-size').val(),
    //      text: $('.qr-url').val()
    //      //text: <?php  ?>;
    //    });

    //  });
    // }
</script>

<?php
function numberTowords($num)
{
    $ones = array(
        0 =>"ZERO",
        1 => "ONE",
        2 => "TWO",
        3 => "THREE",
        4 => "FOUR",
        5 => "FIVE",
        6 => "SIX",
        7 => "SEVEN",
        8 => "EIGHT",
        9 => "NINE",
        10 => "TEN",
        11 => "ELEVEN",
        12 => "TWELVE",
        13 => "THIRTEEN",
        14 => "FOURTEEN",
        15 => "FIFTEEN",
        16 => "SIXTEEN",
        17 => "SEVENTEEN",
        18 => "EIGHTEEN",
        19 => "NINETEEN",
        "014" => "FOURTEEN"
    );
    $tens = array(
        0 => "ZERO",
        1 => "TEN",
        2 => "TWENTY",
        3 => "THIRTY",
        4 => "FORTY",
        5 => "FIFTY",
        6 => "SIXTY",
        7 => "SEVENTY",
        8 => "EIGHTY",
        9 => "NINETY"
    );
    $hundreds = array(
        "HUNDRED",
        "THOUSAND",
        "MILLION",
        "BILLION",
        "TRILLION",
        "QUARDRILLION"
    ); /*limit t quadrillion */
    $num = number_format($num,2,".",",");
    $num_arr = explode(".",$num);
    $wholenum = $num_arr[0];
    $decnum = $num_arr[1];
    $whole_arr = array_reverse(explode(",",$wholenum));
    krsort($whole_arr,1);
    $rettxt = "";
    foreach($whole_arr as $key => $i){
        while(substr($i,0,1)=="0")
            $i=substr($i,1,5);
        if($i < 20){
            /* echo "getting:".$i; */
            if($i){
                $rettxt .= $ones[$i];
            }
            
        }elseif($i < 100){
            if(substr($i,0,1)!="0")  $rettxt .= $tens[substr($i,0,1)];
            if(substr($i,1,1)!="0") $rettxt .= " ".$ones[substr($i,1,1)];
        }else{
            if(substr($i,0,1)!="0") $rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0];
            if(substr($i,1,1)!="0")$rettxt .= " ".$tens[substr($i,1,1)];
            if(substr($i,2,1)!="0")$rettxt .= " ".$ones[substr($i,2,1)];
        }
        if($key > 0){
            $rettxt .= " ".$hundreds[$key]." ";
        }
    }
    if($decnum > 0){
        $rettxt .= " and ";
        if($decnum < 20){
            $rettxt .= $ones[$decnum];
        }elseif($decnum < 100){
            $rettxt .= $tens[substr($decnum,0,1)];
            $rettxt .= " ".$ones[substr($decnum,1,1)];
        }
    }
    return $rettxt;
}
?>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script> -->
<!-- Below script will print div with id pdf to a pdf file using jspdf -->
<script type="text/javascript">
    // $("#btnPrint").live("click", function () {
    //     var printDoc = new jsPDF();
    //     printDoc.fromHTML($('#pdf').get(0), 10, 10, {
    //         'width': 180
    //     });
    //     printDoc.autoPrint();
    //     printDoc.output("dataurlnewwindow");
    //     // this opens a new popup,  after this the PDF opens the print window view but there are browser inconsistencies with how this is handled
    // });

</script>

<script type="text/javascript">
    // $(document).ready(function () {
    //   // var doc = new jsPDF();
    //   // doc.text(10, 10, <?php //echo $link;?>);
    //   // doc.autoPrint({variant: 'non-conform'});
    //   // doc.save('autoprint.pdf');
    //   window.print();
    // });

    function myFunction() {
        window.print();
    }

    // $( document ).ready(function() {
    //   $('#pdf').DataTable({
    //    "processing": true,
    //    "sAjaxSource":"<?php // echo $link;?>",
    //    "dom": 'lBfrtip',
    //   });
    // });
    // $( document ).ready(function() {
    //   $('#pdf').DataTable({
    //    "processing": true,
    //    "sAjaxSource":"<?php // echo $link;?>",
    //    "dom": 'lBfrtip',
    //   });
    // });
    // "buttons": [
    //   {
    //     extend: 'collection',
    //     text: 'Export',
    //     buttons: [
    //       'copy',
    //       'excel',
    //       'csv',
    //       'pdf',
    //       'print'
    //     ]
    //   }
    // ]
</script>

<script type="text/javascript">
    // function printImg() {
    //   pwin = window.open(document.getElementById("mainImg").src,"_blank");
    //   pwin.onload = function () {window.print();}
    // }
</script>
</body>
</html>