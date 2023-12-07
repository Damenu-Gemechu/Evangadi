
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
    <div class="col-sm-4">
    
      <h3>Customer Information</h3>
      
    <div class="form-group">
    <label for="search">Search</label>
      <input type="text" class="form-control" id="search" placeholder="Search here" name="search">
     
    </div>
    <div class="form-group">
      <label for="fname">Firstname</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname">
    </div>
   
    <div class="form-group">
      <label for="lastname">LastName</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="contact">contact</label>
      <input type="text" class="form-control" id="contact" placeholder="Enter contact" name="contact">
    </div>
  <!--</form>    -->
   </div>
    <div class="col-sm-4">
      <h3>Price Detail</h3>
      <form action="index.php" name="form1" method="post">

    <div class="form-group">
    <label for="search2">Search</label>
    <input type="text" class="form-control" id="search2" placeholder="Search here" name="search2">
    </div>

    <div class="form-group">
      <label for="fname2">Firstname</label>
      <input type="text" class="form-control" id="firstname2" placeholder="Enter firstname" name="firstname2">
    </div>
   
    <div class="form-group">
      <label for="lastname2">LastName</label>
      <input type="text" class="form-control" id="lastname2" placeholder="Enter lastname" name="lastname2">
    </div>
    <div class="form-group">
      <label for="email2">Email</label>
      <input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2">
    </div>
    <div class="form-group">
      <label for="contact2">contact</label>
      <input type="text" class="form-control" id="contact2" placeholder="Enter contact" name="contact2">
    </div>
   
<!--</form>    -->
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
 <!--</form>    -->
   </div>
   <button type="submit" name="insert" class="btn btn-primary">Insert</button>
    <button type="submit" name="update" class="btn btn-info">Update</button>
    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
    <button type="submit" name="search" class="btn btn-success">Search</button>
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

<?php
if(isset($_POST["insert"]))
{
  mysqli_query($link,"insert into table1 values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[contact]')");
?>
<script type="text/javascript">
window.location.href=window.location.href;
</script>
<?php

}
if(isset($_POST["update"]))
{
  mysqli_query($link,"update table1 set firstname='$_POST[firstname]', 
                     lastname='$_POST[lastname]',
                     email='$_POST[email]',
                     contact='$_POST[contact]'
                     where id='$_POST[search]'")or die(mysqli_error($link));
                     
  ?>
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php
}
if(isset($_POST["delete"]))
{
  mysqli_query($link,"delete from table1 where firstname='$_POST[firstname]'")or die(mysqli_error($link));
  ?>
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php
}
if(isset($_POST["search"]))
{
     $res=mysqli_query($link,"select * from table1 where firstname= '$_POST[firstname]'");
      while($row=mysqli_fetch_array($res))
      {
        echo "<tr>";
        echo "<td>"; echo $row["id"]; echo "</td>";
        echo "<td>"; echo $row["firstname"];echo "</td>";
        echo "<td>"; echo $row["lastname"];echo "</td>";
        echo "<td>"; echo $row["email"];echo "</td>";
        echo "<td>"; echo $row["contact"];echo "</td>";
        echo "</tr>";
      }              
  ?>
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php
}
?>
</html>