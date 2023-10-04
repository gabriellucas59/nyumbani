<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<style>
nav a{
display:block;
text-decoration:none;
padding:12px 10px;

}
.container{
display:flex;

}
nav a:hover{
background:darkblue;
color:white;

}

</style>
<body>
<div class="container">
<nav class="w3-sidenav w3-collapse w3-white w3-card-2 w3-animate-left" style="width:200px;">
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-closenav w3-large w3-hide-large">Close ×</a>
  <a href="#">home</a>		
  <a href="pic.php">pakia nyumba/chumba</a>		
  <a href="all_shoes.php">futa nyumba/chumba</a>		
  <a href="#">setting </a>		
  <a href="#">Logout</a>		
</nav>

<div class="w3-main" style="margin-left:200px">
<header class="w3-container w3-blue">
  <span class="w3-opennav w3-xlarge w3-hide-large" onclick="w3_open()">☰</span>
  <h2>HomePage</h2>
</header>

<div class="w3-container">
  
</div>


     
</div>
</div>
<script>
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
}
</script>
     
</body>

<!-- Mirrored from www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidenav_hide&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:50 GMT -->
</html> 
