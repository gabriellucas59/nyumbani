<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/w3.css">
  
    <title>Document</title>
</head>
<style>
#bsform{
float:right;
margin-right:120px;

}
table a{
color:red;

}
</style>
<body>
    <?php  include("menu.php");  ?>
    <br><br>
   
<?php

?>
<br><br>


<div class="container">

<?php

include("config.php");
$sql = "SELECT *FROM nyumba  ORDER BY number DESC";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?>
<b><h1>LIST OF AVAILABLE SHOES</h1></b>
    <table class="w3-table w3-bordered w3-striped w3-border w3-hoverable">
    <thead>
      <tr  class="w3-red">
      <th>registration_no</th>
        <th>price 1</th>
        <th>offer</th>
        
        
      </tr>

    <?php
    while($row = $result->fetch_assoc()) {
       ?>

<tr >
<td><?php echo $row["number"];  ?></td>
<td><?php echo $row["price1"];  ?></td>
<td><?php echo $row["price2"];  ?></td>
<td><img src="<?php  echo $row["description"]; ?>" width="60" height="66" class="img-circle" ></td>
<td><?php echo "<a href='delete_item.php?id=
 $row[number]&price=$row[price2]&price1=$row[price1]'>
 remove item<i class='fas fa-trash'></i></a>";?> </td>
</tr>




<?php

    }
    ?>
    </table>
    <?php
} else {
    echo "0 results";
}
 $con->close();
 ?> 




</div>


</body>
</html>

