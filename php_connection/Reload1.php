
<?php
$msg="";
include "connection.php";
?>

<?php echo date ('H:i:s');?></h3>

<?php
$query="select * from customer_service_table order by id desc limit 1";
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
    $OrderNo=str_pad($idd+1,7,0, STR_PAD_LEFT);
    $empid=''.$OrderNo;
   }
?>