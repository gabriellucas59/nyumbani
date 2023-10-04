<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style type="text/css">

	.btn{

width: 60%;
height: 60px;
color: #FFFFFF;
background: black;
margin-top: 20px;
font-weight: bold;
font-size: 30px;
border-radius: 8px !important;
cursor: pointer;
	}
.contain{

width: 100%;
height: auto;
display: flex;
background:white;
padding-top:60px;

}

img{
width:60%;
height:auto;


}




h1{
  color:black;
  font-size: 30px;
  font-weight:bold;
 
}
p{
  font-size:25px;
}

p2{
font-size: 30px;
font-weight: bold;
color: #FFFFFF;



}
p3{
font-size: 20px;
color: gray;


}
h3{
font-size: 30px;
font-weight: bold;
color: gray;


}
.image{
background:white;
width:60%;
padding-top:100px;

}
.details{
  background:white;
  padding-left:20px;
}
.details button{
background:darkblue;

}
@media screen and (max-width: 1000px) and (min-width: 300px) {

  .contain{

width: 100%;
height: auto;
display: block;
background:white;

}
.image{
background:white;
width:100%;
padding-top:20px;

}
.details{
  background:lightgray;
  width:100%;
  text-align:center;
  
}
.image{
width:100% !important;
height:500px;
margin-left:20px;
padding-left:30px;
}




}
</style>

<body>
  

<?php 
$id=$_GET["id"];
ob_start()

?>
<?php
include("menu.php");
include("config.php");
  

// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM nyumbani WHERE number='".$id."'";
            $result = mysqli_query($con,$sql);
            //$sno = $row + 1;
            while($fetch = mysqli_fetch_array($result)){
              
                $name = $fetch['description'];
                $price = $fetch['bei'];
               // $id = $fetch['id'];
               $simu=$fetch['phone'];
               $size=$fetch["size"];
                $details=$fetch['mahali'];
                $wilaya=$fetch['wilaya'];
               
               // $category=$fetch['category'];
?>
<br><br><br>
<div class="contain">

<div class="image">
<?php
                $location=$fetch['picture'];
?>
                
                &nbsp;   &nbsp;<img src="images/<?php echo $location;  ?>"
                  alt="Cinque Terre" >
            <?php   }
               ?>
</div>
 <div class="details">
 <?php echo"<b><h1>".$name."</h1></b><br>"; ?>
 <b><p>Vyumba</p></b><?php echo"<p>".$size."</p>"; ?>
 <b><p>Mahali</p></b><?php echo"<p>".$details.". ".$wilaya."</p>"; ?>
                    <?php echo"<p2>".$price."</p2>"; echo "<p2>/=TSH</p2>"; ?>

                    <button class="btn"  onclick="window.location.href='”tel:0 '<?php echo $simu;?>'"'>Piga simu</button>
                    <button class="btn"  onclick="window.location.href='https://wa.me/255625699428'">Watsapp</button>


</div>
</div>


                    
                  