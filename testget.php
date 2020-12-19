<?php
include_once("../controller/deptcontroller.php");
include_once("../controller/positioncontroller.php");
$deptcontrol=new DeptController();
$results=$deptcontrol->showDepts();
$position=new PositionController();
$presult=$position->showPositions();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- our custom CSS -->
<!-- JS, Popper.js, and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   
</head>
<body>
<form>
<div class="form-group row">
    <label for="dept" class="col-sm-2 col-form-label">Department</label>
    <div class="col-sm-10">
      <select id="dept">
      <?php

        foreach($results as $result)
        {

      ?>
      <option value="<?php echo $result['id'];?>"><?php echo $result['name'];?> </option>
      <?php
        }
      ?>
      </select>
</div>
</div>
<div class="form-group row">
    <label for="dept" class="col-sm-2 col-form-label">Position</label>
    <div class="col-sm-10">
      <select id="position">
      <?php

foreach($presult as $result)
{

?>
<option value="<?php echo $result['id'];?>"><?php echo $result['name'];?> </option>
<?php
}
?>
      </select>
</div>
    </div>
    </form>


<script>
$(document).ready(function(){
    $("#dept").change(function()
    {
      $deptid=$(this).val();
      $("#position").empty();
        $.get("getpos.php",{deptid:$deptid},function(data){
        $("#position").html(data);
       
       }) ;
    });
});

</script>

</body>
</html>