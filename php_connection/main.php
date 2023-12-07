<?php
include "connection.php";
?>
<html lang="en">
<head>
  <title>My first MSQL Database </title>
  <link rel="stylesheet" href="CSUserform.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="jumbotron text-center">
  <h1>EPA SERVICES</h1>
</div>
  
<div class="container1">
  <div class="row">
  <form action="index.php" name="form1" method="post">
  <label class="size">Size option:</label>
  <select id="sizetype" name="SizeType" onchange="sizeprice()">
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

    <div class="col-sm-4"> 
      <h3>Customer Information</h3>

    <div class="form-group">  
    <label  for="initialprice">Unit Price</label><br>
    <input type="text" id="initialprice" name="UnitPrice">
    </div>

   <div class="form-group">
   <label for="initialpr">Initial Price</label><br>
    <input type="text" id="initialpr" name="InitialPrice"><br><br>
    <input type="number" class="sizemultiply"id="sizeMultiply1"value="1" name="SizeMultiply">
    <button type="button" class="Multiply" onclick="totalprice(this.value)">Multiply</button>
    </div>
    <div class="form-group">
    <label class="lbl" for="urgent">Urgent value</label><br>
    <input type="text" id="urgent" name="Urgent">
    </div>

    <div class="form-group">
    <label class="lbl" for="credit">Credit value</label><br>
    <input id="credit" type="text" id="credit" name="Credit"><br>
    </div>

    <div class="form-group">
    <label class="lbl" for="copy">copy Cost</label><br>
    <input type="text" id="copy" name="Copy"><br><br>
    <input type="number" class="copymultiply"id="copymultiply1"value="1" name="Copymultiply">
    <button type="button" class="cMultiply" onclick="totalprice(this.value)">Multiply</button><br>
    </div>

    <div class="form-group">
    <label class="lbl" for="TotalExcVat">Total Excluding Vat</label><br>
    <input type="text" id="TotalExcVat" name="TotalExcVat"><br>
    </div>

    <div class="form-group">
    <label class="lbl" for="vat">Vat(15%)</label><br>
    <input type="text" id="vat" name="Vat"><br>
    </div>

    <div class="form-group">
    <label class="lbl" for="total">Total Including Vat</label><br>
    <input type="text" id="total" name="TotalIncVat"><br>                               
    </div>
   </div>
   
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <form action="index.php" name="form1" method="post">
    <div class="form-group">
    <label for="search3">Search</label>
      <input type="text" class="form-control" id="search3" placeholder="Search here" name="search3">
    
    </div>
    <div class="form-group">
      <label for="fname3">Firstname</label>
      <input type="text" class="form-control" id="firstname3" placeholder="Enter firstname" name="firstname3">
    </div>
   
    <div class="form-group">
      <label for="lastname3">LastName</label>
      <input type="text" class="form-control" id="lastname3" placeholder="Enter lastname" name="lastname3">
    </div>
    <div class="form-group">
      <label for="email3">Email</label>
      <input type="email" class="form-control" id="email3" placeholder="Enter email" name="email3">
    </div>
    <div class="form-group">
      <label for="contact3">contact</label>
      <input type="text" class="form-control" id="contact3" placeholder="Enter contact" name="contact3">
    </div>
   </div>

   <button type="submit" name="insert" class="btn btn-primary">Insert</button>
    <button type="submit" name="update" class="btn btn-info">Update</button>
    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
    </form>
</div>

</div>


<div class="col-lg-12">

<table class="table table-bordered">
    <thead>
      <tr>
      <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $res=mysqli_query($link,"select * from table1");
      while($row=mysqli_fetch_array($res))
      {
        echo "<tr>";
        echo "<td>"; echo $row["id"];echo "</td>";
        echo "<td>"; echo $row["firstname"];echo "</td>";
        echo "<td>"; echo $row["lastname"];echo "</td>";
        echo "<td>"; echo $row["email"];echo "</td>";
        echo "<td>"; echo $row["contact"];echo "</td>";
        echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"];?>"> <button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
        echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"];?>"> <button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
    }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>