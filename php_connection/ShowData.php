<?php
include "connection.php";
?>

<html lang="en">
<head>
  <title>Show_MyData</title>
  <link rel="stylesheet" href="showdata.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body id="cont">

<div id="hed">
<img src="images1/45.png" alt="logo">
  
  <h2>CUSTOMER SERVICE DATABASE</h2> 
</div>
<div class="container">
  <div class="row">
  <form action="" name="form" method="post" id="form3">

   <button type="submit" id="NewCustomer" name="NewCustomer">Back</button>
   <button type="submit" id="search" name="search" >Search</button>
   <input type="text" id="search1" name="search1" placeholder="Search here"> 
   
</form>

  </div>
</div>
<script type="text/javascript">
    function sizeprice(){
        if(document.getElementById("sizetype").value=="ፍርድቤትmin" || 
        document.getElementById("sizetype").value=="ሰሌዳmin"||
        document.getElementById("sizetype").value=="ሊብሬmin"||
        document.getElementById("sizetype").value=="የትምህርትማስረጃmin"||
        document.getElementById("sizetype").value=="ሌሎች1min")
        {         
            document.getElementById("initialprice").value=532; 
            totalprice();
       }

        if(document.getElementById("sizetype").value=="ፍርድቤትmax"||
        document.getElementById("sizetype").value=="ሰሌዳmax"||
        document.getElementById("sizetype").value=="ሊብሬmax"||
        document.getElementById("sizetype").value=="የትምህርትማስረጃmax"||
        document.getElementById("sizetype").value=="ደረሰኝ"||
        document.getElementById("sizetype").value=="ዓርማ"||
        document.getElementById("sizetype").value=="ሌሎች1max")
        
        {
            document.getElementById("initialprice").value=851.20; 
            totalprice();
        }

        if(document.getElementById("sizetype").value=="ንግድስም"||
        document.getElementById("sizetype").value=="ስምስያሜ"||
        document.getElementById("sizetype").value=="ማህበርማፍረስ"||
        document.getElementById("sizetype").value=="ሲቪክማህበራት"||
        document.getElementById("sizetype").value=="ማዕድን"||
        document.getElementById("sizetype").value=="ሌሎች2")
        {
            document.getElementById("initialprice").value=600;
            totalprice();  
        }
        if(document.getElementById("sizetype").value=="ሓራጅ")
        {
            document.getElementById("initialprice").value=1064;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="የዉጪሀገር1/32")
        {
            document.getElementById("initialprice").value=1000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="የዉጪሀገር1/32")
        {
            document.getElementById("initialprice").value=1000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="የዉጪሀገር1/16")
        {
            document.getElementById("initialprice").value=1500;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="የዉጪሀገር1/8")
        {
            document.getElementById("initialprice").value=3150;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="የዉጪሀገር1/4")
        {
            document.getElementById("initialprice").value=6300;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="የዉጪሀገር1/2")
        {
            document.getElementById("initialprice").value=12600;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="የዉጪሀገር_ሙሉገፅ")
        {
            document.getElementById("initialprice").value=22500;
            totalprice();
        }
        //
        if(document.getElementById("sizetype").value=="ሙሉገፅ_የዉስጥገፅእለታዊ")
        {
            document.getElementById("initialprice").value=9600;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ሙሉገፅ_የዉስጥገፅሳምንታዊ")
        {
            document.getElementById("initialprice").value=8160;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="1/2_የዉስጥገፅእለታዊ")
        {
            document.getElementById("initialprice").value=5520;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="1/2_የዉስጥገፅሳምንታዊ")
        {
            document.getElementById("initialprice").value=4692;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="1/4_የዉስጥገፅእለታዊ")
        {
            document.getElementById("initialprice").value=3174;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="1/4_የዉስጥገፅሳምንታዊ")
        {
            document.getElementById("initialprice").value=2698;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="1/8_የዉስጥገፅእለታዊ")
        {
            document.getElementById("initialprice").value=1825.05;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="1/8_የዉስጥገፅሳምንታዊ")
        {
            document.getElementById("initialprice").value=1551.30;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="1/16_የዉስጥገፅእለታዊ")
        {
            document.getElementById("initialprice").value=1049.40;
            totalprice();
        }

        if(document.getElementById("sizetype").value=="1/16_የዉስጥገፅሳምንታዊ")
        {
            document.getElementById("initialprice").value=892;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="1/32_የዉስጥገፅእለታዊ")
        {
            document.getElementById("initialprice").value=600;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="1/32_የዉስጥገፅሳምንታዊ")
        {
            document.getElementById("initialprice").value=500;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ባለቀለምሙሉጀርባ_እለታዊ")
        {
            document.getElementById("initialprice").value=16500;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ባለቀለምሙሉጀርባ_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=10000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ባለቀለም1/2ጀርባ_እለታዊ")
        {
            document.getElementById("initialprice").value=8400;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ባለቀለም1/2ጀርባ_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=5000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ባለቀለምሙሉዉስጥ_እለታዊ")
        {
            document.getElementById("initialprice").value=12000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ባለቀለምሙሉዉስጥ_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=8000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ባለቀለም1/2ዉስጥ_እለታዊ")
        {
            document.getElementById("initialprice").value=7200;
            totalprice();
        }
        //
        if(document.getElementById("sizetype").value=="ባለቀለም1/2ዉስጥ_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=4500;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ባለቀለም1/4ዉስጥ_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=3000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ባለቀለም1/8ዉስጥ_እለታዊ")
        {
            document.getElementById("initialprice").value=4000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ባለቀለም1/8ዉስጥ_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=2800;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ባለቀለም1/16ዉስጥ_እለታዊ")
        {
            document.getElementById("initialprice").value=3500;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ባለቀለም1/16ዉስጥ_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=2500;
            totalprice();
        }
        //
        if(document.getElementById("sizetype").value=="ባለቀለም1/32ዉስጥ_እለታዊ")
        {
            document.getElementById("initialprice").value=3000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ባለቀለም1/32ዉስጥ_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=2000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="የዘመጽሄትየፊትሽፋን የውስጥ ሙሉባለቀለም")
        {
            document.getElementById("initialprice").value=9500;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="የዘመጽሄትየኋላሽፋን የዉጪ ሙሉባለቀለም")
        {
            document.getElementById("initialprice").value=10500;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="የዘመጽሄትየኋላሽፋን የዉስጥ ሙሉባለቀለም")
        {
            document.getElementById("initialprice").value=9000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="የዘመጽሄትየውስጥ ሙሉባለቀለም")
        {
            document.getElementById("initialprice").value=8000;
            totalprice();
        }
        //
        if(document.getElementById("sizetype").value=="የዘመጽሄትየውስጥ ሙሉጥቁር")
        {
            document.getElementById("initialprice").value=5000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ትምህርታዊሙሉገፅጥቁር_እለታዊ")
        {
            document.getElementById("initialprice").value=11040;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ትምህርታዊሙሉገፅጥቁር_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=9000;
            totalprice();
        }
        //
        if(document.getElementById("sizetype").value=="ትምህርታዊ1/2ጥቁር_እለታዊ")
        {
            document.getElementById("initialprice").value=5520;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ትምህርታዊ1/2ጥቁር_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=4692;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ትምህርታዊ1/4ጥቁር_እለታዊ")
        {
            document.getElementById("initialprice").value=3500;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ትምህርታዊ1/4ጥቁር_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=3000;
            totalprice();
        }
        //
        if(document.getElementById("sizetype").value=="ትምህርታዊ1/2ባለቀለምጀርባ_እለታዊ")
        {
            document.getElementById("initialprice").value=8400;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ትምህርታዊ1/2ባለቀለምጀርባ_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=5000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ትምህርታዊ1/4ጥቁር_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=3000;
            totalprice();
        }
        //
        if(document.getElementById("sizetype").value=="ትምህርታዊሙሉባለቀለምዉስጥ_እለታዊ")
        {
            document.getElementById("initialprice").value=12000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ትምህርታዊ1/2ባለቀለምዉስጥ_እለታዊ")
        {
            document.getElementById("initialprice").value=7200;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ትምህርታዊ1/2ባለቀለምዉስጥ_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=4000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ትምህርታዊ1/4ባለቀለምዉስጥ_እለታዊ")
        {
            document.getElementById("initialprice").value=4500;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ትምህርታዊ1/4ባለቀለምዉስጥ_ሳምንታዊ")
        {
            document.getElementById("initialprice").value=2500;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ጆሮአዲስዘመንፊትገፅ")
        {
            document.getElementById("initialprice").value=3000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ጆሮአዲስዘመንጀርባገፅ")
        {
            document.getElementById("initialprice").value=2000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ጆሮሔራልድፊትገፅ")
        {
            document.getElementById("initialprice").value=1000;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ጆሮሔራልድጀርባገፅ")
        {
            document.getElementById("initialprice").value=869.57;
            totalprice();
        }
        //
        if(document.getElementById("sizetype").value=="ጆሮሔራልድጀርባገፅ")
        {
            document.getElementById("initialprice").value=869.57;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ጆሮሳምንታዊፊትገፅ")
        {
            document.getElementById("initialprice").value= 695.65;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="ጆሮሳምንታዊጀርባገፅ")
        {
            document.getElementById("initialprice").value=565.22;
            totalprice();
        }
        if(document.getElementById("sizetype").value=="የጋዜጣዋጋ")
        {
            document.getElementById("initialprice").value=8.7;
            document.getElementById("copy").value="-";
            document.getElementById("vat").value = parseFloat(document.getElementById("initialprice").value)*.15;
            document.getElementById("total").value= parseFloat(document.getElementById("initialprice").value)+
            parseFloat(document.getElementById("initialprice").value)*.15;
           
        }
        if(document.getElementById("sizetype").value=="የመፅሄትዋጋ")
        {
            document.getElementById("initialprice").value=17;
            document.getElementById("copy").value="-";
            document.getElementById("urgent").value ="-"; 
             document.getElementById("credit").value="-";
            document.getElementById("vat").value = parseFloat(document.getElementById("initialprice").value)*.15;
            document.getElementById("total").value= parseFloat(document.getElementById("initialprice").value)+
            parseFloat(document.getElementById("initialprice").value)*.15;
            
        }
    }
function totalprice(){

       if(document.getElementById("pubtype").value=="Normal" && 
            document.getElementById("servicetype").value=="Cash"){
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //
            document.getElementById("urgent").value =0; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);
            
    }
    else if(document.getElementById("pubtype").value=="Normal" && 
            document.getElementById("servicetype").value=="BankReceipt"){

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //
            document.getElementById("urgent").value =0; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);
            
    }
           
          else  if(document.getElementById("pubtype").value=="Normal" && 
            document.getElementById("servicetype").value=="Credit"){

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //
            document.getElementById("urgent").value =0; 

             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;

             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);

        }
        else  if(document.getElementById("pubtype").value=="Normal" && 
            document.getElementById("servicetype").value=="Free"){

                document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //
            document.getElementById("urgent").value =0; 

             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value =0;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);

        }
        else  if(document.getElementById("pubtype").value=="Normal" && 
            document.getElementById("servicetype").value=="Additional1"){
          //
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //
            document.getElementById("urgent").value =
            (parseFloat(document.getElementById("initialpr").value))*1; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=0;
              //
            document.getElementById("TotalExcVat").value=
            (parseFloat(document.getElementById("urgent").value));
            
             //
             document.getElementById("vat").value =
             (parseFloat(document.getElementById("TotalExcVat").value))*.15; 

             document.getElementById("total").value=
             parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);
        }
        else  if(document.getElementById("pubtype").value=="Normal" && 
            document.getElementById("servicetype").value=="Additional2"){
           //
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);

            //
                document.getElementById("urgent").value =
            (parseFloat(document.getElementById("initialpr").value))*.75; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=0;
             //
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("urgent").value));
             //
             document.getElementById("vat").value =
             (parseFloat(document.getElementById("TotalExcVat").value))*.15; 

             document.getElementById("total").value=
             parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);
        }
        else  if(document.getElementById("pubtype").value=="Normal" && 
            document.getElementById("servicetype").value=="Additional3"){
                //
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            
            //
            document.getElementById("urgent").value =
            (parseFloat(document.getElementById("initialpr").value))*.5; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=0;
             //
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("urgent").value));
             //
             document.getElementById("vat").value =
             (parseFloat(document.getElementById("TotalExcVat").value))*.15; 

             document.getElementById("total").value=
             parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);
        }
        else  if(document.getElementById("pubtype").value=="Normal" && 
            document.getElementById("servicetype").value=="Additional4"){

                //
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            
            //
             document.getElementById("urgent").value =
            (parseFloat(document.getElementById("initialpr").value))*.25; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=0;
             //
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("urgent").value));
             //
             document.getElementById("vat").value =
             (parseFloat(document.getElementById("TotalExcVat").value))*.15; 

             document.getElementById("total").value=
             parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);
        }
        else if(document.getElementById("pubtype").value=="Urgent4" && 
            document.getElementById("servicetype").value=="Cash"){

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.25; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);
            
    }
    else if(document.getElementById("pubtype").value=="Urgent4" && 
            document.getElementById("servicetype").value=="BankReceipt"){

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.25; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);
            
    }
    else if(document.getElementById("pubtype").value=="Urgent4" && 
            document.getElementById("servicetype").value=="Credit"){

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent 25%
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.25; 
            //credit value
             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;
             //gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat 15%
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
   else if(document.getElementById("pubtype").value=="Urgent4"&& 
            document.getElementById("servicetype").value=="Free"){
            
                //if more than one insertion
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //Urgent
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.25; 
            //Credit
             document.getElementById("credit").value=0;
             //Gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value =0;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent3"&& 
            document.getElementById("servicetype").value=="Cash"){
                // document.getElementById("pubtype").value=="Urgent3"&&
                //document.getElementById("servicetype").value=="BankReceipt"

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.5; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);
            
    }
    else if(document.getElementById("pubtype").value=="Urgent3"&& 
            document.getElementById("servicetype").value=="BankReceipt"){

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.5; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);
            
    }
    else if(document.getElementById("pubtype").value=="Urgent3"&& 
            document.getElementById("servicetype").value=="Credit"){

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent 25%
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.5; 
            //credit value
             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;
             //gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat 15%
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent3"&& 
     document.getElementById("servicetype").value=="Free"){
            
                //if more than one insertion
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //Urgent
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.5; 
            //Credit
             document.getElementById("credit").value=0;
             //Gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
            (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value =0;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    
    else if(document.getElementById("pubtype").value=="Urgent24"&& 
            document.getElementById("servicetype").value=="Cash"){

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.5; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);
            
    }
    else if(document.getElementById("pubtype").value=="Urgent24"&&
            document.getElementById("servicetype").value=="BankReceipt"){

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.5; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);
            
    }
    else if(document.getElementById("pubtype").value=="Urgent1_Normal" && 
            document.getElementById("servicetype").value=="Cash"){

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.5; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);
            
    }
    else if(document.getElementById("pubtype").value=="Urgent1_Normal" && 
            document.getElementById("servicetype").value=="BankReceipt"){

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.5; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);
            
    }
    else if(document.getElementById("pubtype").value=="Urgent24"&&
        document.getElementById("servicetype").value=="Credit" 
            ){
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent 25%
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.5; 
            //credit value
             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;
             //gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat 15%
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent1_Normal"&&
        document.getElementById("servicetype").value=="Credit"
            ){
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
           parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent 25%
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.5; 
            //credit value
             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;
             //gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat 15%
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent24"&&
        document.getElementById("servicetype").value=="Free"
     ){
            
                //if more than one insertion
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //Urgent
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.5; 
            //Credit
             document.getElementById("credit").value=0;
             //Gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
            (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value =0;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent1_Normal"&&
        document.getElementById("servicetype").value=="Free"
     ){
        //if more than one insertion
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //Urgent
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.5; 
            //Credit
             document.getElementById("credit").value=0;
             //Gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
            (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value =0;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent2"&&
            document.getElementById("servicetype").value=="Cash"){

             //in more than one insertion
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.75; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent2"&&
            document.getElementById("servicetype").value=="BankReceipt"){

             //in more than one insertion
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.75; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent13"&&
            document.getElementById("servicetype").value=="Cash"){
             //in more than one insertion
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.75; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent13"&&
            document.getElementById("servicetype").value=="BankReceipt"){

             //in more than one insertion
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.75; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent2" &&
            document.getElementById("servicetype").value=="Credit"){

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent 25%
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.75; 
            //credit value
             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;
             //gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat 15%
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent13" &&
            document.getElementById("servicetype").value=="Credit"){

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent 25%
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.75; 
            //credit value
             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;
             //gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat 15%
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent2" && 
            document.getElementById("servicetype").value=="Free"){
            
                //if more than one insertion
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //Urgent
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.75; 
            //Credit
             document.getElementById("credit").value=0;
             //Gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value =0;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent13" &&   
            document.getElementById("servicetype").value=="Free"){
            
                //if more than one insertion
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //Urgent
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.75; 
            //Credit
             document.getElementById("credit").value=0;
             //Gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value =0;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent1" && 
            document.getElementById("servicetype").value=="BankReceipt"){

             //in more than one insertion
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*1; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent1" && 
            document.getElementById("servicetype").value=="Cash"){

             //in more than one insertion
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*1; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent1" && 
            document.getElementById("servicetype").value=="Credit"){

            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent 100%
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*1; 
            //credit value
             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;
             //gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat 15%
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent1" && 
            document.getElementById("servicetype").value=="Free"){
            
            //if more than one insertion
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //Urgent
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*1; 
            //Credit
             document.getElementById("credit").value=0;
             //Gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
            (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value =0;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }

    else if(document.getElementById("pubtype").value=="Urgent12" && 
            document.getElementById("servicetype").value=="Cash"){

             //in more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.875; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent12" && 
            document.getElementById("servicetype").value=="BankReceipt"){

             //in more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.875; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent12" && 
            document.getElementById("servicetype").value=="Credit"){

            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent 100%
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.875; 
            //credit value
             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;
             //gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat 15%
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent12" && 
            document.getElementById("servicetype").value=="Free"){
            
            //if more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //Urgent
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.875; 
            //Credit
             document.getElementById("credit").value=0;
             //Gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
            (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value =0;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent14"&&
            document.getElementById("servicetype").value=="Cash"){

             //in more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.625; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent23" &&
            document.getElementById("servicetype").value=="Cash"){
              
           // document.getElementById("servicetype").value=="BankReceipt"
             //in more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.625; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent23" &&
            document.getElementById("servicetype").value=="BankReceipt"){

             //in more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.625; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent14" &&
            document.getElementById("servicetype").value=="BankReceipt"){

             //in more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.625; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent14" && 
            document.getElementById("servicetype").value=="Credit"){
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent 100%
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.625; 
            //credit value
             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;
             //gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat 15%
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent23" && 
            document.getElementById("servicetype").value=="Credit"){

            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent 100%
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.625; 
            //credit value
             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;
             //gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat 15%
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent14" &&
            document.getElementById("servicetype").value=="Free"){
            //document.getElementById("pubtype").value=="Urgent23"
            //if more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //Urgent
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.625; 
            //Credit
             document.getElementById("credit").value=0;
             //Gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
            (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value =0;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent23" &&
            document.getElementById("servicetype").value=="Free"){

            //if more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //Urgent
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.625; 
            //Credit
             document.getElementById("credit").value=0;
             //Gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
            (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value =0;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent34"  &&    
            document.getElementById("servicetype").value=="Cash"){

             //in more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.375; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent34"  &&    
            document.getElementById("servicetype").value=="BankReceipt"){

             //in more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.375; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent2_Normal" &&    
            document.getElementById("servicetype").value=="BankReceipt"){

            //document.getElementById("servicetype").value=="BankReceipt"  
             //in more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.375; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent2_Normal" &&    
            document.getElementById("servicetype").value=="BankReceipt" ){

             //in more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.375; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent34" && 
            document.getElementById("servicetype").value=="Credit"){
 
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.375; 
            //credit value
             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;
             //gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat 15%
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent2_Normal" && 
            document.getElementById("servicetype").value=="Credit"){
               //  
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent 100%
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.375; 
            //credit value
             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;
             //gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat 15%
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent34" &&  
            document.getElementById("servicetype").value=="Free"){

            //if more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //Urgent
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.375; 
            //Credit
             document.getElementById("credit").value=0;
             //Gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
            (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value =0;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent2_Normal" &&  
            document.getElementById("servicetype").value=="Free"){
        
            //if more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //Urgent
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.375; 
            //Credit
             document.getElementById("credit").value=0;
             //Gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
            (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value =0;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent4_Normal" && 
            document.getElementById("servicetype").value=="BankReceipt"){

             //in more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.125; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent4_Normal" && 
            document.getElementById("servicetype").value=="Cash"){

             //in more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent value
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.125; 
             document.getElementById("credit").value=0;
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);     
    }
    else if(document.getElementById("pubtype").value=="Urgent4_Normal" && 
            document.getElementById("servicetype").value=="Credit"){

            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent 100%
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.125; 
            //credit value
             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;
             //gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat 15%
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent4_Normal" && 
            document.getElementById("servicetype").value=="Credit"){

            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //urgent 100%
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.125; 
            //credit value
             document.getElementById("credit").value=
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value))*.03;
             //gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
              (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat 15%
             document.getElementById("vat").value = 
             (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value))*.15;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }
    else if(document.getElementById("pubtype").value=="Urgent4_Normal" && 
            document.getElementById("servicetype").value=="Free"){
            
            //if more than one insertion
            document.getElementById("sizeMultiply1").value=2;
            document.getElementById("initialpr").value=
            parseFloat(document.getElementById("initialprice").value)*
            parseFloat(document.getElementById("sizeMultiply1").value);
            //Urgent
            document.getElementById("urgent").value =
            parseFloat(document.getElementById("initialpr").value)*.125; 
            //Credit
             document.getElementById("credit").value=0;
             //Gazetta
             document.getElementById("copy").value=
             parseFloat(document.getElementById("copymultiply1").value)*8.7;
            
             //Total without vat
             document.getElementById("TotalExcVat").value=
            (parseFloat(document.getElementById("initialpr").value)+
             parseFloat(document.getElementById("urgent").value)+
             parseFloat(document.getElementById("credit").value)+
             parseFloat(document.getElementById("copy").value));
            
             //vat
             document.getElementById("vat").value =0;
            
            //total with vat
            document.getElementById("total").value=
            parseFloat(document.getElementById("TotalExcVat").value)+
            parseFloat(document.getElementById("vat").value);   
    }


}
     </script>
</body>

<div class="col align-self-center">
<?php
if(isset($_POST["search"]))
{
    $res=mysqli_query($link,"select * from customer_service_table where CName= '$_POST[search1]'");
     
    echo "<div class=table-responsive>";
       echo "<table class= table table-success table-striped>";
       echo "<thead  id=tablehead2>";
       echo "<tr id=tablehead3>";
       echo "<th>"; echo "Edit";echo "</th>";
       echo "<th>"; echo "Id"; echo "</th>";
       echo "<th>"; echo "CName";echo "</th>";
       echo "<th>"; echo "phone";echo "</th>";
       echo "<th>"; echo "OrderNo";echo "</th>";
       echo "<th>"; echo "RegisterDate";echo "</th>";
       echo "<th>"; echo "PublishDate";echo "</th>";

       echo "<th>"; echo "SizeType";echo "</th>";
       echo "<th>"; echo "Media";echo "</th>";
       echo "<th>"; echo "PubType";echo "</th>";
       echo "<th>"; echo "ServiceType";echo "</th>";
       echo "<th>"; echo "UnitPrice";echo "</th>";

       echo "<th>"; echo "SizeMultiply";echo "</th>";
       echo "<th>"; echo "InitialPrice";echo "</th>";
       echo "<th>"; echo "Urgent";echo "</th>";
       echo "<th>"; echo "Credit";echo "</th>";
       echo "<th>"; echo "CopyPrice";echo "</th>";

       echo "<th>"; echo "CopyNo";echo "</th>";
       echo "<th>"; echo "TotalExcVat";echo "</th>";
       echo "<th>"; echo "Vat";echo "</th>";
       echo "<th>"; echo "TotalIncVat";echo "</th>";

       echo "<th>"; echo "OfficerName";echo "</th>";
       echo "<th>"; echo "CashierName";echo "</th>";
       echo "<th>"; echo "PublishedOrNot";echo "</th>";
       echo "<th>"; echo "TakenOrNot";echo "</th>";

       echo "<th>"; echo "Updater1";echo "</th>";
       echo "<th>"; echo "Updater2";echo "</th>";
       echo "<th>"; echo "Updater3";echo "</th>";
       echo "<th>"; echo "Updater4";echo "</th>";
       echo "<th>"; echo "Updater5";echo "</th>";
       echo "<th>"; echo "Updater6";echo "</th>";

       echo "<th>"; echo "NoOfPrinted";echo "</th>";
       echo "<th>"; echo "QueueNo";echo "</th>";
       echo "<th>"; echo "Today";echo "</th>";
       echo "<th>"; echo "Checking";echo "</th>";
       echo "<th>"; echo "Payment";echo "</th>";


       echo "</tr>";
       echo"<thead>";

      


       while($row=mysqli_fetch_array($res))
       {
           echo "<tr>";
           echo "<td>"; ?> <a href="edit.php?OrderNo=<?php echo $row["OrderNo"];?>"> <button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
           echo "<td>"; echo $row["Id"];echo "</td>";
           echo "<td>"; echo $row["CName"];echo "</td>";
           echo "<td>"; echo $row["Phone"];echo "</td>";
           echo "<td>"; echo $row["OrderNo"];echo "</td>";
   
           echo "<td>"; echo $row["RegisterDate"];echo "</td>";
           echo "<td>"; echo $row["PublishDate"];echo "</td>";
   
           echo "<td>"; echo $row["SizeType"];echo "</td>";
           echo "<td>"; echo $row["Media"];echo "</td>";
           echo "<td>"; echo $row["PubType"];echo "</td>";
           echo "<td>"; echo $row["ServiceType"];echo "</td>";
           echo "<td>"; echo $row["UnitPrice"];echo "</td>";
   
           echo "<td>"; echo $row["SizeMultiply"];echo "</td>";
           echo "<td>"; echo $row["InitialPrice"];echo "</td>";
           echo "<td>"; echo $row["Urgent"];echo "</td>";
           echo "<td>"; echo $row["Credit"];echo "</td>";
           echo "<td>"; echo $row["CopyPrice"];echo "</td>";
   
           echo "<td>"; echo $row["CopyNo"];echo "</td>";
           echo "<td>"; echo $row["TotalExcVat"];echo "</td>";
           echo "<td>"; echo $row["Vat"];echo "</td>";
           echo "<td>"; echo $row["TotalIncVat"];echo "</td>";
   
           echo "<td>"; echo $row["OfficerName"];echo "</td>";
           echo "<td>"; echo $row["CashierName"];echo "</td>";
           echo "<td>"; echo $row["PublishedOrNot"];echo "</td>";
           echo "<td>"; echo $row["TakenOrNot"];echo "</td>";
   
           echo "<td>"; echo $row["Updater1"];echo "</td>";
           echo "<td>"; echo $row["Updater2"];echo "</td>";
           echo "<td>"; echo $row["Updater3"];echo "</td>";
           echo "<td>"; echo $row["Updater4"];echo "</td>";
           echo "<td>"; echo $row["Updater5"];echo "</td>";
           echo "<td>"; echo $row["Updater6"];echo "</td>";
   
           echo "<td>"; echo $row["NoOfPrinted"];echo "</td>";
           echo "<td>"; echo $row["QueueNo"];echo "</td>";
           echo "<td>"; echo $row["Today"];echo "</td>";
           echo "<td>"; echo $row["Checking"];echo "</td>";
           echo "<td>"; echo $row["Payment"];echo "</td>";
       }
       echo "</table>";
       echo "</div>";
      
}
?>
</div>

<div class="table-responsive">

<table class="table table-bordered border-primary">
    <thead  id="tablehead">
      <tr id="tablehead1">
        <th>Edit</th>
        <th>Id</th>
        <th>CName</th>
        <th>phone</th>
        <th>OrderNo</th>
        <th>RegisterDate</th>
        <th>PublishDate</th>
        <th>Media</th>
        <th>SizeType</th>
        <th>pupType</th>
        <th>ServiceType</th>
        <th>UnitPrice</th>
        <th>SizeMultiply</th>
        <th>InitialPrice</th>
        <th>Urgent</th>
        <th>Credit</th>
        <th>CopyPrice</th>
        <th>CopyNo</th>
        <th>TotalExcVat</th>
        <th>Vat</th>
        <th>TotalIncVat</th>
        <th>OfficerName</th>
        <th>CashierName</th>
        <th>PublishedOrNot</th>
        <th>TakenOrNot</th>
        <th>Updater1</th>
        <th>Updater2</th>
        <th>Updater3</th>
        <th>Updater4</th>
        <th>Updater5</th>
        <th>Updater6</th>
        <th>NoOfPrinted</th>
        <th>QueueNo</th>
        <th>Today</th>
        <th>Checking</th>
        <th>Payment</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
      
        $res=mysqli_query($link,"select * from customer_service_table");
      while($row=mysqli_fetch_array($res))
      {
        echo "<tr>";
        echo "<td>"; ?> <a href="edit.php? OrderNo=<?php echo $row["OrderNo"];?>"> <button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
        echo "<td>"; echo $row["Id"];echo "</td>";
        echo "<td>"; echo $row["CName"];echo "</td>";
        echo "<td>"; echo $row["Phone"];echo "</td>";
        echo "<td>"; echo $row["OrderNo"];echo "</td>";

        echo "<td>"; echo $row["RegisterDate"];echo "</td>";
        echo "<td>"; echo $row["PublishDate"];echo "</td>";

        echo "<td>"; echo $row["SizeType"];echo "</td>";
        echo "<td>"; echo $row["Media"];echo "</td>";
        echo "<td>"; echo $row["PubType"];echo "</td>";
        echo "<td>"; echo $row["ServiceType"];echo "</td>";
        echo "<td>"; echo $row["UnitPrice"];echo "</td>";

        echo "<td>"; echo $row["SizeMultiply"];echo "</td>";
        echo "<td>"; echo $row["InitialPrice"];echo "</td>";
        echo "<td>"; echo $row["Urgent"];echo "</td>";
        echo "<td>"; echo $row["Credit"];echo "</td>";
        echo "<td>"; echo $row["CopyPrice"];echo "</td>";

        echo "<td>"; echo $row["CopyNo"];echo "</td>";
        echo "<td>"; echo $row["TotalExcVat"];echo "</td>";
        echo "<td>"; echo $row["Vat"];echo "</td>";
        echo "<td>"; echo $row["TotalIncVat"];echo "</td>";

        echo "<td>"; echo $row["OfficerName"];echo "</td>";
        echo "<td>"; echo $row["CashierName"];echo "</td>";
        echo "<td>"; echo $row["PublishedOrNot"];echo "</td>";
        echo "<td>"; echo $row["TakenOrNot"];echo "</td>";

        echo "<td>"; echo $row["Updater1"];echo "</td>";
        echo "<td>"; echo $row["Updater2"];echo "</td>";
        echo "<td>"; echo $row["Updater3"];echo "</td>";
        echo "<td>"; echo $row["Updater4"];echo "</td>";
        echo "<td>"; echo $row["Updater5"];echo "</td>";
        echo "<td>"; echo $row["Updater6"];echo "</td>";

        echo "<td>"; echo $row["NoOfPrinted"];echo "</td>";
        echo "<td>"; echo $row["QueueNo"];echo "</td>";
        echo "<td>"; echo $row["Today"];echo "</td>";
        echo "<td>"; echo $row["Checking"];echo "</td>";
        echo "<td>"; echo $row["Payment"];echo "</td>";
        echo "</tr>";
      } 
      ?>
    </tbody>
  </table>
</div>
<?php
if(isset($_POST["NewCustomer"])){
    ?>
  <script type="text/javascript">
  window.location="FrontUser.php";
  </script>
  <?php
  }
if(isset($_POST["insert"]))
{
  mysqli_query($link,"insert into cs_table values(NULL,'$_POST[custname]','$_POST[phoneNo]',
  '$_POST[registerD]','$_POST[pubD]','$_POST[SizeType]','$_POST[Media]','$_POST[PubType]',
  '$_POST[ServiceType]','$_POST[UnitPrice]','$_POST[SizeMultiply]','$_POST[InitialPrice]','$_POST[Urgent]','$_POST[Credit]',
  '$_POST[Copy]','$_POST[Copymultiply]','$_POST[TotalExcVat]','$_POST[Vat]','$_POST[TotalIncVat]')");
?>
<script type="text/javascript">
window.location.href=window.location.href;
</script>
<?php

}
if(isset($_POST["update"]))
{
  mysqli_query($link,"update cs_table set CName='$_POST[custname]', 
                     PhoneNo='$_POST[phoneNo]',
                     Register_Date='$_POST[registerD]',
                     Publish_Date='$_POST[pubD]'
                     where id='$_POST[search]'")or die(mysqli_error($link));
                     
  ?>
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php
}
if(isset($_POST["delete"]))
{
  mysqli_query($link,"delete from cs_table where CName='$_POST[custname]'")or die(mysqli_error($link));
  ?>
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php
}

?>

</html>
