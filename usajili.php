<!DOCTYPE html>
<html>
<head>
	<title>JAZA FOMU  YA USAJILI</title>
	<style>
	body{
			background-color: #F5F5F5;
			
		}
		body {
   /* Show horizontal scrollbar */
}
		body {
 /* Show scrollbars */
}
		.head{
			position:fixed;
			top:0px;
			left: 0px;
			margin: 0px;
			text-align: center;
			background-color: #3232CD;
			width: 100%;
			color:white;
		}
		.content{
			position: relative	;
			padding:18px;
			margin: 4px;
			top:100px;
			left: 440px;
			width: 450px;
			border:2px solid #2E37FE;
			border-radius: 25px;
			box-shadow: 3px 5px blue;
			background-color: white;
			
		}
		font{
			font-size: 24px;
			color: #2E37FE;
		}
		form{
			font-size: 18px;
		}
		.content input[type="text"]{
			height: 30px;
			width: 100%;
			box-sizing: border-box;
			border:1px solid #2E37FE;
			border-radius: 25px;
			text-align: center;
			font-size: 16px;
		}
		.content input[type="password"]{
			height: 30px;
			width: 100%;
			box-sizing: border-box;
			border:1px solid #2E37FE;
			border-radius: 25px;
			text-align: center;
			font-size: 16px;
		}
		.content input::placeholder{
			color:#CCC;
			font-size: 18px;
		}
		textarea{
			font-size: 16px;
			width: 440px;
		}
		select{
			width:140px;
			height: 25px;
		}
		.content input[type="submit"]{
			font-size: 20px;
			text-align:center;
			float: center;
			padding: 8px;
			width: 120px;
			border:1px solid blue;
			border-radius: 20px;
			background-color:white;
			color: #2E37FE;
			cursor: pointer;
		}
		.content input[type="reset"]{
			font-size: 20px;
			text-align:center;
			float: center;
			padding: 8px;
			border: 8px;
			width: 120px;
			border:1px solid blue;
			border-radius: 20px;
			background-color: white;
			color: #2E37FE;
			cursor: pointer;
		}
		.content input[type="submit"]:hover{
			color:white;
			background-color: #2E37FE;
		}
		.content input[type="reset"]:hover{
			color:white;
			background-color: #2E37FE;
		}	
		
		@media screen and (max-width: 1000px) and (min-width: 100px) {

			.content{
			position: relative	;
			padding:18px;
			margin: 4px;
			top:100px;
			left: 0px;
			width: 70%;
				height:auto;
			border:2px solid #2E37FE;
			border-radius: 25px;
			box-shadow: 3px 5px blue;
			background-color: white;

		}	
		
		form{

width:100%;


		}
	}
	</style>
</head>
<body>
	<?php 			//include("menu.php");   ?>

	<div class="content">
		<font><b>Fomu ya kujisajili </b></font><br><br>
		<form  name="usajili" action="" method="post" onsubmit="return validate()"> 
			<b>Jina kamili</b><br> <input type="text" name="jina"  placeholder="namba ya simu" required><br><br>
			<b>neno la siri</b><br> <input type="password" name="passwod1"  placeholder="neno la siri" maxlength="8" required><br><br>
			<b> hakiki neno la siri</b><br> <input type="password" name="passwod2"  placeholder="neno la siri"  maxlength="8" required><br><br>
			<b>Namba ya simu</b> <br><input type ="text" name="simu" placeholder="Enamba ya simu" required><br><br>
			<b>jinsia yako :</b> 
			<select name="jinsia">
				<option value="" selected></option>				
				<option value="Mwanamke">Mwanamke</option>
				<option value="Mwanamke">Mwanaume</option>
				
	
			</select> <br><br>
			<b> Jisajili kama</b>  
			<select name="kazi">
				<option value="" selected></option>				
				<option value="dalali">dalali</option>
				<option value="Mmiliki">Mwneye nyumba</option>
				<option value="Meja">Mteja</option>
	
			</select> <br>
			<br>
			<input type="submit" name="submit" value="Jisajili" >
			<input type="reset" name="reset" value="hairisha" onclick="myFunction()">
		</form>
	</div>
	<script type="text/javascript">
		function myFunction() {
    alert("Registration Cancelled!");
	}

	function validate() {
		
		let p1=document.forms["usajili"]["passwod1"].value;
		let p2=document.forms["usajili"]["passwod2"].value;
		let cheki_kazi=document.forms["usajili"]["kazi"].value;
		let jins=document.forms["usajili"]["jinsia"].value;
 
  if (p1 != p2) {
    alert("maneno ya siri hayaendani");
    return false;
  }

  
  if (jins == "") {
    alert("chagua jinsia yako tafadhali");
    return false;
  }
  if (cheki_kazi == "") {
    alert("chagua kazi yako tafadhali");
    return false;
  }

	}
</script>

<?php
if(isset($_POST["submit"]))
{
$jina=$_POST["jina"];
$simu=$_POST["simu"];
$jinsia=$_POST["jinsia"];
$passcode=$_POST["passwod1"];
$passcode2=$_POST["passwod2"];
$kazi=$_POST["kazi"];

if($passcode!=$passcode2)
{



	exit();
}
require_once("config.php");

$sql = "INSERT INTO watumiaji (jina, simu, passcode,jinsia,kazi)
VALUES ('".$jina."','".$simu."','".$passcode."','".$jinsia."','".$kazi."')";

if ($con->query($sql) === TRUE) {
   header("location:upload.php");
} else {
    //echo "Error: " . $sql . "<br>" . $con->error;
	echo 'namba ya simu ilishajiliwa tayar ,';
}

$con->close();
}

?>

</body>
</html>