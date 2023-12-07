<?php
$msg="";
include "connection.php";
?>

<?php

$query="select * from cs_table order by id desc limit 1";
$result= mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
$lastid=$row['OrderNo'];

    if(empty($lastid))
    {
    $empid="0000001";
    }

else
    {
    $idd=str_replace("","",$lastid);
    $id=str_pad($idd+1,7,0, STR_PAD_LEFT);
    $empid=''.$id;
   }
?>

<html lang="en">
<head>
<script language="javascript"type="text/javascript">
        window.history.forward();
        </script>
  <title>My Epa</title>
  <link rel="stylesheet" href="database2.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <!--- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--->

</head>
<body>

<!--<div id="clock">
    <label id="clock1"></label>
</div>

<script type="text/javascript">
    var today=new Date();
    var date=((today.getYear()).toString()+(today.getMonth()+1).toString()+(today.getDay()+11).toString());
    document.getElementById("clock1").innerHTML=date;
</script>*/
--->
<div id="hed">
 <div class="form-group"> 
  <div class="col-sm-12" id="col5">
   <img src="images1/45.png" alt="logo"><br>
   <p>ETHIOPIAN PRESS AGENCY</p>
   <p>የኢትዮጵያ ፕሬስ ድርጅት</p>
   
  </div>
 </div>
</div>
<div class="container">
  <div class="row">
  <form action="database1.php" name="form1"   method="post" id="form" onsubmit="return isempty()">

  <div class="form-group"> 
    
  <div class="col-sm-4" id="col3" >
      <h2 id="c1">CUSTOMER INFORMATION</h2>        
    <div class="form-group">
    <label for="custname">Customer Name</label>
      <input type="text" class="form-control" id="custname" placeholder="Enter Customer Name" name="custname" autocomplete="off">
    <!---<p id="pr">error message</p> -->
    </div>
    <div class="form-group">
      <label for="phoneNo">Phone Number</label>
      <input type="text" class="form-control" id="phoneNo" placeholder="Enter Phone Number" name="phoneNo" >
    </div>
   
    <div class="form-group">
      <label for="registerD">Register Date</label>
      <input type="text" class="form-control" id="registerD" placeholder="Enter Register Date" name="registerD">
    </div>
    <div class="form-group">
      <label for="pubD">Publish Date</label>
      <input type="text" class="form-control" id="pubD" placeholder="Enter Publish Date" name="pubD" >
    </div>
    <div class="form-group">
      <label for="ctinNo">Custmer Tin Number</label>
      <input type="text" class="form-control" id="ctinNo" placeholder="Enter Customer Tin Number" name="ctinNo">
    </div>
   </div>
  
  <div class="col-sm-4" id="col1">
      <h2 id="c1">SERVICE DETAILS</h2>

      <div class="form-group">
    <label for="orderno">Order Number: </label>
      <input type="text" class="" id="orderno" placeholder="Enter Customer Name" name="orderno"value="<?php echo $empid;?>" style="color:blue" readonly>
    </div>
<label class="size">Size option:</label>
                            <select class="form-control" id="sizetype" name="SizeType" onchange="sizeprice()" required>
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
                                <select class="form-control" id="media" name="Media"onchange="totalprice(this.value)">
                                     
                                    <option>A/Zemen</option>
                                    <option>Herald</option>
                                    <option>Bariisaa</option>
                                    <option>Al-Alem</option>
                                    <option>Bakalcho</option>
                                    <option>Wegahta</option>
                                    <option>Z/Megazine</option>

                                </select>  
                                <label class="lb">Pup-type:</label>
                                <select class="form-control" id="pubtype" name="PubType" onchange="sizeprice(this.value)">
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
                                <select class="form-control" id="servicetype" name="ServiceType" onchange="sizeprice(this.value)">
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
    <input type="text" class="form-control" id="initialprice" name="UnitPrice">
    </div>

   <div class="form-group">
   <label for="initialpr">Initial Price</label><br>
    <input type="text" class="" id="initialpr" name="InitialPrice">
    <input type="number" id="sizeMultiply1"value="1" name="SizeMultiply">
    <button type="button" id="sizebtn" class="Multiply" onclick="totalprice(this.value)">*</button>
    </div>
   </div>
    <div class="col-sm-4" id="col2">
      <h2 id="c1">PRICE DETAILS</h2>
      <div class="form-group">
    <label class="lbl" for="urgent">Urgent value</label>
    <input type="text" class="form-control" id="urgent" name="Urgent">
    </div>

    <div class="form-group">
    <label class="lbl" for="credit">Credit value</label>
    <input id="credit" type="text" class="form-control" id="credit" name="Credit">
    </div>

      <div class="form-group">
    <label class="lbl" for="copy">copy Cost</label><br>
    <input type="text" class="" id="copy" name="Copy">
    <input type="number" id="copymultiply1"value="1" name="Copymultiply">
    <button type="button" id="copybtn" class="cMultiply" onclick="totalprice(this.value)">*</button>
    
</div>

    <div class="form-group">
    <label class="lbl" for="TotalExcVat">Total Excluding Vat</label><br>
    <input type="text" class="form-control" id="TotalExcVat" name="TotalExcVat">
    </div>

    <div class="form-group">
    <label class="lbl" for="vat">Vat(15%)</label><br>
    <input type="text" class="form-control" id="vat" name="Vat">
    </div>

    <div class="form-group">
    <label class="lbl" for="total">Total Including Vat</label>
    <input type="text" class="form-control" id="total" name="TotalIncVat">                              
    </div>
    </div>
   <?php if ($msg !="") echo $msg ."<br>"?>
   <button type="submit" id="insert" name="insert" class="btn btn-info">Insert</button><br><br>
   <button type="submit" id="search" name="search" class="btn btn-200">Search</button>
   <input type="text" id="search1" name="search1" placeholder="Search here"><br>
   <button type="submit" id="showdata" name="showdata" class="$blue">Go to Database</button><br>
   <button type="submit" id="logout" name="Logout" class="$blue">Logout</button>
<?php
  if(isset($_POST["Logout"])){
    ?>
  <script type="text/javascript">
  window.location="login.php";
  </script>
  <?php
  }
?>
   <?php 
  if(isset($_POST["search"]))
{
     $res=mysqli_query($link,"select * from cs_table where CName= '$_POST[search1]'");
     
     echo "<div class=table-responsive>";
        echo "<table class= table table-success table-striped>";
        echo "<thead  id=tablehead2>";
        echo "<tr id=tablehead3>";
        echo "<th>"; echo "Edit";echo "</th>";
        echo "<th>"; echo "id"; echo "</th>";
        echo "<th>"; echo "CName";echo "</th>";
        echo "<th>"; echo "phone";echo "</th>";
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
        echo "<th>"; echo "OrderNo";echo "</th>";
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
            echo "<td>"; echo $row["OrderNo"];echo "</td>";
        }
        echo "</table>";
        echo "</div>";
       
}
  ?>
  
</form>
  </div>
  
</div>
<script type="text/javascript">
    /*
    const custname = document.querySelector('#username');
    const registerD = document.querySelector('#registerD');
    const insert = document.querySelector('#insert');

    insert.addEventListener('click', (event)=>{
        event.preventDefault();

        //username validation
        if(custname.value.trim() == ''){
            error(custname, 'Customer Name can not be empty!');
        }

    });
    function error(element, msg){
        element.style.border = '3px red solid';
        const parent = element.parentElement;
        const p = parent.querySelector('p');
        p.textContent=msg;
    
    }*/
   
</script>

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
     <script>

function isempty(){
    
    var custname=document.form.custname.value;
    var phoneNo=document.form.phoneNo.value;
  
    if(custname.length=="" && phoneNo.length =="")
    {
        alert("Username and Password Field is empty!")
        return false
    }
    else{
        if(custname.length=="")
        {
            alert("Username Field is empty!");
            return false
        }
        if(phoneNo.length=="")
        {
            alert("Password Field is empty!");
            return false
        }
    }
}
        </script>
     
</body>

<?php
if(isset($_POST["insert"]))
{
  mysqli_query($link,"insert into cs_table values(NULL,'$_POST[custname]','$_POST[phoneNo]',
  '$_POST[registerD]','$_POST[pubD]','$_POST[SizeType]','$_POST[Media]','$_POST[PubType]',
  '$_POST[ServiceType]','$_POST[UnitPrice]','$_POST[SizeMultiply]','$_POST[InitialPrice]','$_POST[Urgent]','$_POST[Credit]',
  '$_POST[Copy]','$_POST[Copymultiply]','$_POST[TotalExcVat]','$_POST[Vat]','$_POST[TotalIncVat]','$_POST[orderno]')");
   
 /* mysqli_query($link,"insert into customer_service_table values(NULL,'$_POST[custname]','$_POST[phoneNo]','$_POST[orderno]',
  '$_POST[registerD]','$_POST[pubD]','$_POST[Media]','$_POST[SizeType]','$_POST[PubType]',
  '$_POST[ServiceType]','$_POST[UnitPrice]','$_POST[SizeMultiply]','$_POST[InitialPrice]','$_POST[Urgent]','$_POST[Credit]',
  '$_POST[Copy]','$_POST[Copymultiply]','$_POST[TotalExcVat]','$_POST[Vat]','$_POST[TotalIncVat]')");
  // }*/
   ?>
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php
   
}
if(isset($_POST["showdata"])){
    ?>
  <script type="text/javascript">
  window.location="ShowData.php";
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
