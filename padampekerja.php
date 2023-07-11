<?php
include "COMPONENT/DB/connection.php";
$id = $_GET['delete_id'];
$result = mysqli_query($con,"DELETE FROM info_pekerja WHERE ID='$id'");
 echo "<script>window.location='index.php'</script>";
?>