<?php
session_start();
$fname = "";
$sname = "";
$flames="";
$errors = array();
 $con = mysqli_connect('sql204.epizy.com', 'epiz_24802663', 'sslmdraj', 'epiz_24802663_flames');
$db = mysqli_connect('sql204.epizy.com', 'epiz_24802663', 'sslmdraj', 'epiz_24802663_flames');
if(!$con)
{
    die('please check u r connection'.mysqli_error($con));
}
if (isset($_POST['flame'])) {
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $sname = mysqli_real_escape_string($db, $_POST['sname']);
    if (empty($fname)) { array_push($errors, "Name is required"); }
  if (empty($sname)) { array_push($errors, "Name is required"); }
  if (count($errors) == 0) {
    $sql="INSERT INTO flame(fname,sname) VALUES ('$fname','$sname')";
    mysqli_query($db,$sql);
  }
}  

?>
