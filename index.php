<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gmashoes</title>
	<link href="css2/all.min.css" rel="stylesheet">
  
    <link rel="stylesheet" href="css/w3.css">

   
<style>
	input[type="text"]{
border-radius:6px;
width:320px;
height:38px;
border:1px solid lightgray;
	}
	input[type="submit"]{
border-radius:6px;
background:white;
border:1px solid white;
	}
  .footer{
	  background:green;
  }
  
  button{
background-color:darkblue;
color:white;
width:120px;
height:40px;
border-radius:4px;
cursor:pointer;

  }
  p2{
color:orange;
font-size:15px;
font-weight:bold;
  }
  p{
	  text-decoration:none;
  }
  .menu{
    width:20%;
    height:auto;
    background:white;
    border-style: solid;
     border-width: medium;
     border-color:white;
     margin-right:20px;
     
     border-left:none;
     display:block;
     margin-left:-30px;
  }
  input[type=search]{
    margin-left:-60px;
  }
  
  .menu a{
color:gray;
padding:18px 19px;
margin-left:0px !important;

  }
  .menu a:hover{
color:darkblue;

  }
  .car{
  
    width:100%;
    background:white !important;
    display:flex;
    height:auto;

  }

  }
  .books{
display:;

  }
  .w3-row{
width:100%;
margin-right:0px  !important;
margin-left:0px !important;
margin-top:20px;
height:auto;


  }
.w3-col{
  margin-top:45px;
  padding:10px 12px;
  margin-left:20px;
  margin-left:60px;
  text-align:center;
  display:block;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.w3-col:hover{
 
  box-shadow: 0 4px 8px 0 gray, 0 6px 20px 0 lightgray !important;
}
.pagination {
				list-style-type: none;
				padding: 10px 0;
				display: inline-flex;
				justify-content: space-between;
				box-sizing: border-box;
			}
			.pagination li {
				box-sizing: border-box;
				padding-right: 10px;
			}
			.pagination li a {
				box-sizing: border-box;
				background-color: #e2e6e6;
				padding: 8px;
				text-decoration: none;
				font-size: 12px;
				font-weight: bold;
				color: #616872;
				border-radius: 4px;
			}
			.pagination li a:hover {
				background-color: #d4dada;
			}
			.pagination .next a, .pagination .prev a {
				text-transform: uppercase;
				font-size: 12px;
			}
			.pagination .currentpage a {
				background-color: #518acb;
				color: #fff;
			}
			.pagination .currentpage a:hover {
				background-color: #518acb;
			}
			footer  ul a{
padding :12px 12px;
display:block;


			}
			.header{
height:auto;
display:block;


			}
			.company{
width:100%;
height:100px;


			}
			.jumbo{

width:100%;
height:300px;
background:white;

			}
  
  @media screen and (max-width: 1000px) and (min-width: 300px) {
	  .company{

		  text-align:center;
	  }

  .menu{
    display:none;
  }
  .w3-row{
width:100%;
margin-right:0px  !important;
margin-left:0px !important;
margin-top:20px;
height:auto;


  }
  .w3-col{
	  width:100% !important;
  margin-top:45px;
  padding:15px 15px;
  margin-left:0px;
  
  text-align:center;
  display:block;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  height:auto;
}
button{
	margin-top:20px;
margin-bottom:10px;

}
  }
</style>
</head>
<body>

  <div class="header">
  <?php include("menu.php"); ?><br><br>
<div class="company w3-light-grey"><h1>simpo_dalali.com</h1>
<i><p1>Best houses for rent/buy</p1></i>
</div>
  </div><br>
  <center>
<div class="search">
<form action="result.php" method="POST">
	<input type="text" name="tafuta" id="" required>
<input type="submit" name="post" value="tafuta">

</form>
</div>
</center>
<div class="car">
<div class="menu">
<ul>
<form action="" method="post">

</form>
<h2> VIPENGELE</h2>
<ul>
<li><a href="">pangisha</a></li>
<li><a href="">kodisha</a></li>
<li><a href="">uza nyumba</a></li>
<li><a href="">nunua </a></li>

</ul>

</div>



      
<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'zakupanga');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query('SELECT * FROM nyumbani')->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 9;

if ($stmt = $mysqli->prepare('SELECT * FROM nyumbani ORDER BY number LIMIT ?,?')) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	?>
    <div class="w3-row">
    <?php while ($row = $result->fetch_assoc()):
      $location=$row["path"]; 
	  $price1=$row["mahali"]; 
	  $price2=$row["bei"]; 
	  $no=$row["number"];
?>
<div class="w3-col" style="width:25.5%;border-radius:7px;"><img src="<?php echo $location;  ?>"
 class="img-rounded" alt="Cinque Terre" width="224" height="206">
 <p>Mahali : <?php  echo $price1 ."";   ?> </p>
<b></B><p2>bei  : <?php  echo $price2."/=Tsh";    ?> </p2></b><br>
<button  onclick=window.location.href="item.php<?php echo '?id='.$no;  ?>" >NUNUA
</button>


</div>



<?php endwhile; ?>



	<?php
	$stmt->close();
}
?></div>
</div>
<center>
<div class="home">
<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="home.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="home.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="home.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="home.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="home.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="home.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="home.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="home.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="home.php?page=<?php echo $page+1 ?>">Next</a></li>
				<?php endif; ?>
			</ul>
			<?php endif; ?>

			</div>
			</center>

			<footer class="w3-row w3-indigo">
			<center><h1>CONTACT US</h1></center>
			<ul>
			<a href=""><i class="fab fa-facebook w3-xlarge">&nbsp;</i>facebook </a>
			<a href=""><i class="fab fa-instagram w3-xlarge">&nbsp;</i>instagram</a>
			<a href=""><i class="fab fa-whatsapp w3-xlarge">&nbsp;</i>whatsapp</a>
			<a href="">phone 076855944</a></li>
			
			
			
			</ul>
			
			</footer>