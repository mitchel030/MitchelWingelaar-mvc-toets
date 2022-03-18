<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
}


</style>
</head>
<body>

<table>
 
<?php

$records = "";

foreach ($data['users'] as $country){
    $records .= "<tr>
    <th>" .  $country->id  . "</th>
    <th>" .  $country->name  . "</th>
    <th>" .  $country->capitalCity  . "</th>
    <th>" .  $country->continent  . "</th>
    <th>" .  $country->population  . "</th>";
    

}


?>

   <div class="container">
  <div class="row">
    <div class="col">
    <div class="col-12" id="header-text">
    <h1      landen         </h1>
    </div>

      <center> <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Land</th>
      <th scope="col">Hoofdstad</th>
      <th scope="col">continent</th>
      <th scope="col">Aantalbewoners</th>
    </tr>
  </thead>
  <?php
    echo $records;
    ?>
</table> </center> 

</table>

</body>
</html>
