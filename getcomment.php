<?php
include_once("../controller/commentcontroller.php");
$count=$_POST['count'];
echo $count;
$comControl=new CommentController();
$results=$comControl->showComments($count);
$output=null;

foreach($results as $row)
{
    $output.="<div>";
    $output.="<h3>";
    $output.= $row['author'];
    $output.="</h3><p>" . $row['message'];
    $output.="</p>";
    $output.="</div>";
}


echo $output;


?>