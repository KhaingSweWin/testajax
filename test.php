<?php
include_once("../controller/empcontroller.php");
$empcontrol=new EmpController();
$results=$empcontrol->showEmployees();
$output=null;
$output.="<table class='table'>";
foreach($results as $row)
{
    $output.="<tr><td>";
    $output.= $row['name'];
    $output.="</td></tr>";
}
$output.="</table>";

echo $output;


?>