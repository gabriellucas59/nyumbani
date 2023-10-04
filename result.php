<?php

include("menu.php");

?>
<br><br><br><br><br><br><br>
<?php
if(isset($_POST["post"])){
$_POST["tafuta"];
$tafuta=$_POST["tafuta"];
//echo "".$_POST["tafuta"];

require("config.php");

$sql = "SELECT * FROM nyumbani WHERE mahali LIKE '%".$tafuta."'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
        <img src="<?php  echo $row["path"] ; ?>" alt=""><br><br>
        <?php
        echo "".$row["mahali"];
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    ?>
   <center>
   <?php
    echo "hakuna nyumba  kutoka ".$tafuta." kwa sasa";?></center> <?php
}
$con->close();


}
?>