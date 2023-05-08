<?php
include("functions/init.php");

if(!isset($_GET['id'])) {

    echo "Error 404!";

} else {

    $data = $_GET['id'];
    $acti = $_GET['active'];


    $sql="UPDATE staff SET `active` = '$acti' WHERE `staffid`= '$data'";
    $result_set=query($sql);

    redirect("./viewstaff");
}

?>