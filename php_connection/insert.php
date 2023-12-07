<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert PDF</title>
    <style media="screen">
      div{
        border: 2px solid black;
        width: 500px;
       
        margin-left: 370px;
        margin-top: 50px;
        padding: 30px;
        background-color:lightgray;
      }
      .table-responsive{
        background-color:white;
      }
     
      #tablehead2{
        background-color:red;
      }
      form{
        margin-left: 70px;
      }
      label{
        font-size: 25px;
        font-weight: bold;
      }
      #pdf{
        font-size: 20px;
        font-weight: bold;
        margin-top: 10px;
      }
      #upload{
        font-size: 20px;
        font-weight: bold;
        margin-left: 100px;
      }
    </style>
  </head>
  <body>
    <div class="">
      <form class="" action="insert.php" method="post" enctype="multipart/form-data">
        <label for="">Choose Your PDF File</label><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <input id="upload" type="submit" name="submit" value="Upload">

        <?php
        include 'db.php';

        if (isset($_POST['submit'])) {
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);

          $sql="INSERT INTO pdf_file values('$pdf')";
          $query=mysqli_query($conn,$sql);

        }



         ?>

      </form>

    </div>
    <!--<div class="table-responsive">
<br>
<table class="table table-bordered border-primary">
    <thead  id="tablehead">
      <tr id="tablehead2">
        <th>Edit</th>
      <th>#</th>
        <th>pdf</th>
        
      </tr>
    </thead>
  </table>
</div>

      -->
<div class="table-responsive">

<table class="table">
    <thead  id="tablehead">
      <tr id="tablehead1">
        <th>pdf</th>

        
      </tr>
    
      <?php
      include 'db.php';
        $sql2="SELECT*FROM pdf_file where 1" ;
        $result=mysqli_query($conn,$sql2);
      while($fetch=mysqli_fetch_assoc($result))
      {
        echo "";
        ?>
        
        <tr>
          <td><img src="./pdf/<?php echo $fetch['pdf'] ?>" width=100px alt=""></td>
          <!--<td><a href="" class="btn btn-outline-danger">Delete</a></td>-->
      
        </tr>
        <?php
      } 
      ?>
    
  </table>
</div>
</body>
</html>
