
<?php
include "connection.php";
$OrderNo=$_GET["OrderNo"];
  $CName="";
    $phone="";
    $RegisterDate="";
    $PublishDate="";
    $SizeType="";
    $Media="";
    $PubType="";

    $ServiceType="";
    $UnitPrice="";
    $SizeMultiply="";
    $InitialPrice="";

    $Urgent="";
    $Credit="";
    $CopyPrice="";
    $CopyNo="";

    $TotalExcVat="";
    $Vat="";
    $TotalIncVat="";

$res=mysqli_query($link,"select * from customer_service_table where OrderNo=$OrderNo");
while($row=mysqli_fetch_array($res))
{

    $CName=$row["CName"];
    $Phone=$row["Phone"];
    $RegisterDate=$row["RegisterDate"];
    

    $PublishDate=$row["PublishDate"];
    $SizeType=$row["SizeType"];
    $Media=$row["Media"];
    $PubType=$row["PubType"];

    $ServiceType=$row["ServiceType"];
    $UnitPrice=$row["UnitPrice"];
    $SizeMultiply=$row["SizeMultiply"];
    $InitialPrice=$row["InitialPrice"];

    $Urgent=$row["Urgent"];
    $Credit=$row["Credit"];
    $CopyPrice=$row["CopyPrice"];
    $CopyNo=$row["CopyNo"];

    $TotalExcVat=$row["TotalExcVat"];
    $Vat=$row["Vat"];
    $TotalIncVat=$row["TotalIncVat"];
}
?>
<html lang="en">
<head>
  <title>Edit_MyData </title>
  <link rel="stylesheet" href="edit.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body id="body">

<div id="hed">
  <p>EDITING</p> 
</div>
<div class="container">
  <div class="row">
  <form action="" name="form1" method="post" id="form">

  <div class="form-group"> 
  <div class="col-sm-4" id="col3">
      <h2 id="c1">CUSTOMER INFORMATION</h2>        
    <div class="form-group">
    <label for="custname">Customer Name</label>
      <input type="text" class="form-control" id="custname" placeholder="Enter Customer Name" name="custname" value="<?php echo $CName; ?>">
    
    </div>
    <div class="form-group">
      <label for="phoneNo">Phone Number</label>
      <input type="text" class="form-control" id="phoneNo" placeholder="Enter Phone Number" name="phoneNo" value="<?php echo $phone; ?>">
    </div>
   
    <div class="form-group">
      <label for="registerD">Register Date</label>
      <input type="text" class="form-control" id="registerD" placeholder="Enter Register Date" name="registerD" value="<?php echo $RegisterDate; ?>">
    </div>
    <div class="form-group">
      <label for="pubD">Publish Date</label>
      <input type="text" class="form-control" id="pubD" placeholder="Enter Publish Date" name="pubD" value="<?php echo $PublishDate; ?>">
    </div>
    <div class="form-group">
      <label for="orderno">Order Number</label>
      <input type="text" class="form-control" id="orderno" placeholder="Enter Customer Tin Number" name="orderno" value="<?php echo $OrderNo;?>"readonly>
    </div>
   </div>
  <div class="col-sm-4" id="col1">
      <h2 id="c1">SERVICE DETAILS</h2>
<label class="size">Size option:</label>
<input type="text"class="form-control" id="editsize" placeholder="Enter your new size" name="editsize" value="<?php echo $SizeType;?>">
                            <select class="form-control" id="sizetype" name="SizeType" onchange="sizeprice()">
                                <option>-----</option>
                                <option>---------ምድብ1_ማስታወቂያ-----------------</option>
                                <option>ፍርድቤትmin</option>
                                <option>ፍርድቤትmax</option>
                                <option>ሰሌዳmin</option>
                                <option>ሰሌዳmax</option>
                                <option>ሊብሬmin</option>
                                <option>ሊብሬmax</option>
                                <option>የትምህርትማስረጃmin</option>
                                <option>የትምህርትማስረጃmax</option>
                                <option>ሲቪክማህበራት</option>
                                <option>ሌሎች1min</option>
                                <option>ሌሎች1max</option><br>
                                <option>---------ምድብ2_ማስታወቂያ----------------------</option>
                                <option>ንግድስም</option>
                                <option>ማህበርማፍረስ</option>
                                <option>ስምስያሜ</option>
                                <option>ማዕድን</option>
                                <option>ሌሎች2</option><br>

                                <option>---------ምድብ3_ማስታወቂያ----------------------</option>
                                <option>ደረሰኝ</option>
                                <option>ዓርማ</option>
                                <option>ሓራጅ</option>
                                <option>ሌሎች3</option><br>

                                <option>---------ንግድምልክት_ማስታወቂያ----------------------</option>
                                <option>የዉጪሀገር1/32</option>
                                <option>የዉጪሀገር1/16</option>
                                <option>የዉጪሀገር1/8</option>
                                <option>የዉጪሀገር1/4</option>
                                <option>የዉጪሀገር1/2</option>
                                <option>የዉጪሀገር_ሙሉገፅ</option><br>

                                <option>---------ጨረታ፣ክ/ስ/መደብ እና ሌሎች_ማስታወቂያ----------------------</option>
                                <option>ሙሉገፅ_የዉስጥገፅእለታዊ</option>
                                <option>ሙሉገፅ_የዉስጥገፅሳምንታዊ</option>
                                <option>1/2_የዉስጥገፅእለታዊ</option>
                                <option>1/2_የዉስጥገፅሳምንታዊ</option>
                                <option>1/4_የዉስጥገፅእለታዊ</option>
                                <option>1/4_የዉስጥገፅሳምንታዊ</option>
                                <option>1/8_የዉስጥገፅእለታዊ</option>
                                <option>1/8_የዉስጥገፅሳምንታዊ</option>
                                <option>1/16_የዉስጥገፅእለታዊ</option>
                                <option>1/16_የዉስጥገፅሳምንታዊ</option>
                                <option>1/32_የዉስጥገፅእለታዊ</option>
                                <option>1/32_የዉስጥገፅሳምንታዊ</option><br>

                                <option>---------ባለቀለምጀርባገፅልዩ_ማስታወቂያ----------------------</option>
                                <option>ባለቀለምሙሉጀርባ_እለታዊ</option>
                                <option>ባለቀለምሙሉጀርባ_ሳምንታዊ</option>
                                <option>ባለቀለም1/2ጀርባ_እለታዊ</option>
                                <option>ባለቀለም1/2ጀርባ_ሳምንታዊ</option><br>

                                <option>---------ባለቀለምዉስጥገፅልዩ_ማስታወቂያ----------------------</option>
                                <option>ባለቀለምሙሉዉስጥ_እለታዊ</option>
                                <option>ባለቀለምሙሉዉስጥ_ሳምንታዊ</option>
                                <option>ባለቀለም1/2ዉስጥ_እለታዊ</option>
                                <option>ባለቀለም1/2ዉስጥ_ሳምንታዊ</option>
                                <option>ባለቀለም1/4ዉስጥ_እለታዊ</option>
                                <option>ባለቀለም1/4ዉስጥ_ሳምንታዊ</option>
                                <option>ባለቀለም1/8ዉስጥ_እለታዊ</option>
                                <option>ባለቀለም1/8ዉስጥ_ሳምንታዊ</option>
                                <option>ባለቀለም1/16ዉስጥ_እለታዊ</option>
                                <option>ባለቀለም1/16ዉስጥ_ሳምንታዊ</option>                                  
                                <option> ባለቀለም1/32ዉስጥ_እለታዊ</option>
                                <option>ባለቀለም1/32ዉስጥ_ሳምንታዊ</option><br>

                                <option>---------ለመፅሔት_ማስታወቂያ----------------------</option>
                                <option>የዘመጽሄትየፊትሽፋን የውስጥ ሙሉባለቀለም</option>
                                <option>የዘመጽሄትየኋላሽፋን የዉጪ ሙሉባለቀለም</option>
                                <option>የዘመጽሄትየኋላሽፋን የዉስጥ ሙሉባለቀለም</option>
                                <option>የዘመጽሄትየውስጥ ሙሉባለቀለም</option>
                                <option>የዘመጽሄትየውስጥ ሙሉጥቁር</option><br>

                                <option>---------ጥቁርእናነጭትምህርታዊ_ማስታወቂያ----------------------</option>
                                <option>ትምህርታዊሙሉገፅጥቁር_እለታዊ</option>
                                <option>ትምህርታዊሙሉገፅጥቁር_ሳምንታዊ</option>
                                <option>ትምህርታዊ1/2ጥቁር_እለታዊ</option>
                                <option>ትምህርታዊ1/2ጥቁር_ሳምንታዊ</option>
                                <option>ትምህርታዊ1/2ጥቁር_ሳምንታዊ</option><br>

                                <option>---------ባለቀለምለትምህርታዊ_ማስታወቂያ----------------------</option>
                                <option>ትምህርታዊ1/2ባለቀለምጀርባ_እለታዊ</option>
                                <option>ትምህርታዊ1/2ባለቀለምጀርባ_ሳምንታዊ</option>
                                <option>ትምህርታዊሙሉባለቀለምዉስጥ_እለታዊ</option>
                                <option>ትምህርታዊ1/2ባለቀለምዉስጥ_እለታዊ</option>
                                <option>ትምህርታዊ1/2ባለቀለምዉስጥ_ሳምንታዊ</option>
                                <option>ትምህርታዊ1/4ባለቀለምዉስጥ_እለታዊ</option>
                                <option>ትምህርታዊ1/4ባለቀለምዉስጥ_ሳምንታዊ</option><br>

                                <option>---------የጆሮ_ማስታወቂያ----------------------</option>
                                <option>ጆሮአዲስዘመንፊትገፅ</option>
                                <option>ጆሮአዲስዘመንጀርባገፅ</option>
                                <option>ጆሮሔራልድፊትገፅ</option>
                                <option>ጆሮሔራልድጀርባገፅ</option>
                                <option>ጆሮሳምንታዊፊትገፅ</option>
                                <option>ጆሮሳምንታዊጀርባገፅ</option><br>
                                <option>---------የጋዜጣእናመፅሔት_ዋጋ----------------------</option>
                                <option>የጋዜጣዋጋ</option>
                                <option>የመፅሄትዋጋ</option>
                            </select>
                            <label class="lb">Media Type:</label>
                            <input type="text"class="form-control" id="editmedia" placeholder="Enter your new media" name="editmedia" value="<?php echo $Media; ?>">

                                <select class="form-control" id="media" name="Media"onchange="totalprice(this.value)"
                                style="border-color: green; font-size: 20px;">
                                     
                                    <option>A/Zemen</option>
                                    <option>Herald</option>
                                    <option>Bariisaa</option>
                                    <option>Al-Alem</option>
                                    <option>Bakalcho</option>
                                    <option>Wegahta</option>
                                    <option>Z/Megazine</option>

                                </select>  
                                <label class="lb">Pub-type:</label>
                                <input type="text"class="form-control" id="editpubtype" placeholder="Enter your new Pubtype" name="editpubtype" value="<?php echo $PubType; ?>">

                                <select class="form-control" id="pubtype" name="PubType" onchange="sizeprice(this.value)"
                                style="border-color: green; font-size: 20px;">
                                <option>Normal</option>
                                <option>Urgent4</option>
                                <option>Urgent3</option>
                                <option>Urgent2</option>
                                <option>Urgent1</option>
                                <option>Urgent12</option>
                                <option>Urgent13</option>
                                <option>Urgent14</option>
                                <option>Urgent23</option>
                                <option>Urgent24</option>
                                <option>Urgent34</option>
                                <option>Urgent1_Normal</option>
                                <option>Urgent2_Normal</option>
                                <option>Urgent3_Normal</option>
                                <option>Urgent4_Normal</option>
                                </select>

                                <label class="lb">Service Type:</label>
                                <input type="text"class="form-control" id="editservicetype" placeholder="Enter your new service type" name="editservicetype" value="<?php echo $ServiceType; ?>">

                                <select class="form-control" id="servicetype" name="ServiceType" onchange="sizeprice(this.value)"
                                style="border-color: green; font-size: 20px;">
                                <option>Cash</option>
                                <option>Credit</option>
                                <option>Free</option>
                                <option>BankReceipt</option>
                                <option>Additional1</option>
                                <option>Additional2</option>
                                <option>Additional3</option>
                                <option>Additional4</option>
                                <option>Additional12</option>
                                <option>Additional13</option>
                                <option>Additional14</option>
                                <option>Additional23</option>
                                <option>Additional24</option>
                                <option>Additional34</option>
                                <option>Proforma</option>
                                </select>  <br>
                               
   <!-- <div class="col-sm-4">
      <h3>Column 1</h3>-->
      
    <div class="form-group">  
    <label  for="initialprice">Unit Price</label>
    <input type="text" class="form-control" id="initialprice" name="UnitPrice" value="<?php echo $UnitPrice; ?>">
    </div>

   <div class="form-group">
   <label for="initialpr">Initial Price</label>
    <input type="text" class="form-control" id="initialpr" name="InitialPrice" value="<?php echo $InitialPrice; ?>">
    <input type="text"  id="editsizemultiply" placeholder="Enter your new service sizemultiply" name="editsizemultiply" value="<?php echo $SizeMultiply; ?>">

    <input type="number" id="sizeMultiply1"value="1" name="SizeMultiply">
    <button type="button" id="sizebtn" class="Multiply" onclick="totalprice(this.value)">Multiply</button>
    </div>
   </div>
   
    <div class="col-sm-4" id="col2">
      <h2 id="c1">PRICE DETAILS</h2>
      <div class="form-group">
    <label class="lbl" for="urgent">Urgent value</label>
    <input type="text" class="form-control" id="urgent" name="Urgent" value="<?php echo $Urgent; ?>">
    </div>

    <div class="form-group">
    <label class="lbl" for="credit">Credit value</label>
    <input id="credit" type="text" class="form-control" id="credit" name="Credit" value="<?php echo $Credit; ?>">
    </div>

      <div class="form-group">
    <label class="lbl" for="copy">copy Cost</label>
    <input type="text" class="form-control" id="copy" name="Copy" value="<?php echo $CopyPrice; ?>">
    <input type="text" id="editcopymultiply" placeholder="Enter your new service copymultiply" name="editcopymultiply" value="<?php echo $CopyNo; ?>">
    <input type="number" id="copymultiply1"value="1" name="Copymultiply">
    <button type="button" id="copybtn" class="cMultiply" onclick="totalprice(this.value)">Multiply</button>
    
</div>

    <div class="form-group">
    <label class="lbl" for="TotalExcVat">Total Excluding Vat</label><br>
    <input type="text" class="form-control" id="TotalExcVat" name="TotalExcVat" value="<?php echo $TotalExcVat; ?>">
    </div>

    <div class="form-group">
    <label class="lbl" for="vat">Vat(15%)</label><br>
    <input type="text" class="form-control" id="vat" name="Vat" value="<?php echo $Vat; ?>">
    </div>

    <div class="form-group">
    <label class="lbl" for="total">Total Including Vat</label>
    <input type="text" class="form-control" id="total" name="TotalIncVat" value="<?php echo $TotalIncVat; ?>">                              
    </div>
    </div>

    <button type="submit" id="Exit" name="Exit" class="btn btn-danger" onclick="return confirm('You want to Exit?')">Exit</button>
    <button type="submit" id="update" name="update" class="btn btn-info" onclick="return confirm('Are you sure, to Update the Data?')">Update</button>
    <button type="submit" id="delete" name="delete" class="btn btn-danger" onclick="return confirm('Are you sure, to Delete the Data?')">Delete</button><br><br>
    <button type="submit" id="search" name="search" class="btn btn-success">Search</button>
    <input type="text" class="" id="search1" name="search1" placeholder = "Enter Name to Search"><br><br>

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
</html>
<?php
if(isset($_POST["Exit"])){
  ?>
<script type="text/javascript">
window.location="Frontuser.php";
</script>
<?php
}
if(isset($_POST["update"]))

{
  $CName=$row["CName"];
  $Phone=$row["Phone"];
  $RegisterDate=$row["RegisterDate"];
  

  $PublishDate=$row["PublishDate"];
  $SizeType=$row["SizeType"];
  $Media=$row["Media"];
  $PubType=$row["PubType"];

  $ServiceType=$row["ServiceType"];
  $UnitPrice=$row["UnitPrice"];
  $SizeMultiply=$row["SizeMultiply"];
  $InitialPrice=$row["InitialPrice"];

  $Urgent=$row["Urgent"];
  $Credit=$row["Credit"];
  $CopyPrice=$row["CopyPrice"];
  $CopyNo=$row["CopyNo"];

  $TotalExcVat=$row["TotalExcVat"];
  $Vat=$row["Vat"];
  $TotalIncVat=$row["TotalIncVat"];

    mysqli_query($link,"update customer_service_table set CName='$_POST[custname]', Phone='$_POST[phoneNo]',RegisterDate='$_POST[registerD]',
    PublishDate='$_POST[pubD]',SizeType='$_POST[SizeType]',Media='$_POST[Media]',PubType='$_POST[PubType]',
    ServiceType='$_POST[ServiceType]',UnitPrice='$_POST[UnitPrice]',SizeMultiply='$_POST[SizeMultiply]',
    InitialPrice='$_POST[InitialPrice]', Urgent='$_POST[Urgent]',Credit='$_POST[Credit]',
    CopyPrice='$_POST[Copy]',CopyNo='$_POST[Copymultiply]',TotalExcVat='$_POST[TotalExcVat]',
    Vat='$_POST[Vat]',TotalIncVat='$_POST[TotalIncVat]' where OrderNo='$OrderNo'");
?>
<script type="text/javascript">
window.location="FrontUser.php";
</script>
<?php

}

if(isset($_POST["delete"]))
{
  mysqli_query($link,"delete from customer_service_table where OrderNo='$_POST[orderno]'")or die(mysqli_error($link));
  ?>
  <script type="text/javascript">
   window.location="FrontUser.php";
  </script>
  <?php
}
if(isset($_POST["search"]))
{
     $res=mysqli_query($link,"select * from customer_service_table where CName= '$_POST[search1]'");

     
      echo "<div class=table-responsive>";
        echo "<table class=table table-success table-striped>";
        echo "<thead  id=tablehead2>";
        echo "<tr id=tablehead3>";
        echo "<th>"; echo "Edit";echo "</th>";
        echo "<th>"; echo "id"; echo "</th>";
        echo "<th>"; echo "CName";echo "</th>";
        echo "<th>"; echo "Phone";echo "</th>";
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
        echo "</tr>";
        echo"<thead>";

        while($row=mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"];?>"> <button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
            echo "<td>"; echo $row["id"];echo "</td>";
            echo "<td>"; echo $row["CName"];echo "</td>";
            echo "<td>"; echo $row["phone"];echo "</td>";
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
        }
        echo "</table>";
        echo "</div>";
       
}
?>


