<?php
include("functions/init.php");

//echo "https://student.dagloremodelschool.com.ng/qrnt";

$sql = "SELECT * FROM students";
$res = query($sql);
while($row = mysqli_fetch_array($res)){

$cls = $row['Class'];

if ($cls == 'S.S.S 2') {
    echo $cs = 'Basic 2'."<br/>";
   } else {
  
}
//echo $call['stud']."/qrnt";
  
//echo strtotime($);