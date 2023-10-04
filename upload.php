<?php
session_start();

?>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<style>
.box{
width:40%;
height:auto;

}
@media screen and (max-width: 1000px) and (min-width: 300px) {
  .box{
width:100%;
height:auto;

}
.w3-container{
  width:100%;


}

}
</style>
<body>
 
  <br><br><br>
<center>
<div class="box">
<div class="w3-container w3-indigo">

<h2>INGIA KWENYE ACCOUNT YAKO</h2>
</div>

<form class="w3-container " name="myForm" action="" method="post" onsubmit=" validateForm(),return false">

<p>
<label>Namba ya simu</label>
<input class="w3-input w3-validate" name="username" type="text"  required></p>

<p>
<label>password</label>
<input class="w3-input w3-validate" name="password" type="password" required ></p>

<input class="w3-input w3-indigo" type="submit" name="login" value="login"></p>
</form>

<script>
function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
    var y = document.forms["myForm"]["password"].value;
    if (y == null || y == "") {
        alert("password must be filled out");
        return false;
    }
    e.preventDefault();

}



</script>

<?php
if (isset($_POST["login"])) {
  $usernames=$_POST["username"];
$passwords=$_POST["password"];
$dalali='dalali';
$owner='Mmiliki';

if (!empty($usernames)|| !empty($passwords)) {
  include("config.php");
  $stmt = $con->prepare("SELECT * FROM watumiaji WHERE simu= ? and passcode=?");
												$stmt->bind_param('ss',$usernames,$passwords);
												$stmt->execute();
												//$stmt->store_result();
												$result = $stmt->get_result();
												if($result->num_rows === 0)exit("wrong password or email");
							
												   while($row = $result->fetch_assoc()) {
												//	 $_SESSION['email']=$row['email'];
													// $_SESSION["number"]=$row["registration_no"];
												   if($row['kazi']==$dalali || $row['kazi']==$owner  ){
							
                            header("location:omepae/dalali.php");
												   }
                           else{

                            header("location:admin/adminpage.php");

                           }
 
} 



}
else {
  

  print"jaza taarifa uendelee";
}
}
  ?>
 
  <?php
  


?>

</div>
</center>
</body>
