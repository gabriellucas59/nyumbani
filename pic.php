<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>pic</title>
</head>
<?php include("menu.php"); ?><br><br><br>
<style>
    a{
        font-size:1rem;
    }
    label{
font-size:1rem;
margin-left:5px;
}
form{
padding-left:5px;
    width:40%;
}


select{
  width:100%;
  height:40px;
}
button{

  width:40%;
}
    </style>
<body>
    
<form role="form" method="post" action="" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="email">pakia picha ya chumba/nyumba</label>
    <input type="file"  name="file"class="form-control" id="email" required>
  </div>
  <label for="email">Kwa ajili ya </label><br>
  <select name="description">
  <option value=""></option>
  <option value="kodishwa">kodishwa</option>
  <option value="inauzwa" selected>uzwa</option>
  
</select>
  <div class="form-group">
    <label for="email">mahali ilipo</label>
    <input type="text"  name="mahali"class="form-control" id="email" required>
  </div>
  <div class="form-group">
    <label for="email">mtaa</label>
    <input type="text"  name="mtaa"class="form-control" id="email" required>
  </div>
  <div class="form-group">
  <label for="email">Wilaya</label>
  <select name="wilaya">
  <option value=""></option>
  <option value="Ilala">Ilala</option>
  <option value="Kinondoni" selected>Kinondoni</option>
  <option value="Temeke" selected>Temeke</option>
  
</select>
</div>
  <div class="form-group">
    <label for="email">bei </label>
    <input type="text"  name="bei"class="form-control" id="email" required>
  </div>
  
  <div class="form-group">
    <label for="description">Idadi ya vyumba</label>
    <textarea  name="vyumba"class="form-control" ></textarea>
  </div>
 
  <div class="form-group">
    <label for="title">Namba ya simu</label>
    <input type="text"  name="simu"class="form-control" id="email" required>
  </div>
  <button type="submit" name="post" class="btn btn-primary">post</button>
</form>

<?php


     
        if(isset($_POST['post'])){
            $maxsize = 5242880; // 5MB
             include("config.php");
              $name = $_FILES['file']['name'];
                 $target_dir = "images/";
                   $description=$_POST["description"];
                         $simu=$_POST["simu"];
                                         $vyumba=$_POST["vyumba"];
                   $wilaya=$_POST["wilaya"];
            $mahali=$_POST["mahali"];
            $mtaa=$_POST["mtaa"];
           $bei=$_POST["bei"];
           //$idadi=$_POST["vyumba"];
            
            $target_file = $target_dir . $_FILES["file"]["name"];

            // Select file type
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("jpeg","jpg","png","jfif");

            // Check extension
            if( in_array($videoFileType,$extensions_arr) ){
                
                // Check file size
                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    echo "File too large. File must be less than 5MB.";
                }else{
                    // Upload
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                        // Insert record
                        $query = "INSERT INTO nyumbani(picture,path,description,phone,wilaya,bei,mahali,mtaa,size) 
                        VALUES('".$name."','".$target_file."','".$description."','".$simu."','".$wilaya."','".$bei."','".$mahali."','".$mtaa."','".$vyumba."')";

                        mysqli_query($con,$query);
                        echo "Upload successfully.";
                    }
                    else{

echo "something wrong";

                    }
                }

            }else{
                echo "that not picture.";
            }
        
        }
        ?>


</body>
</html>