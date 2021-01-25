<?php
include('config.php');
session_start();

$idf= $_SESSION["idf"];
$aid= $_GET["aid"];

//echo $aid;
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <style>

        body {
          font-family: Arial, Helvetica, sans-serif;
          background: white;
        }   
   .header {
  position: relative;
  padding: 20px;
  background: white;
  color: #21610B;  
  font-size: 15px;
  
}
.header p{
color:black;
font-size:25px;
}

 .header img {
  float: left;
  width: 150px;
  height: 120px;
  background: #555;
  margin-right:15px;
}
.content {
  flex: 1 0 auto;
}
.font-robo {
  font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
}

.font-poppins {
  font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
}

.font-opensans {
  font-family: "Open Sans", "Arial", "Helvetica Neue", sans-serif;
}
.page-wrapper {
  min-height: 100vh;
}
.bg-gra-03 {
  background-color:#ddd;
}
.p-t-45 {
  padding-top: 45px;
}
.p-b-50 {
  padding-bottom: 50px;
}
.wrapper {
  margin: 0 auto;
}

.wrapper--w790 {
  max-width: 790px;
}
.title {
  font-size: 24px;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;
  color: #fff;
}

.card {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background: #fff;
}

.card-5 {
  background: #fff;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
}

.card-5 .card-heading {
  padding: 20px 0;
  background: #333333;
  -webkit-border-top-left-radius: 10px;
  -moz-border-radius-topleft: 10px;
  border-top-left-radius: 10px;
  -webkit-border-top-right-radius: 10px;
  -moz-border-radius-topright: 10px;
  border-top-right-radius: 10px;
}

.card-5 .card-body {
  padding: 52px 85px;
  padding-bottom: 73px;
}
input[type=text],textarea{
  width:95%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color:white;
  border: 2px solid  #4CAF50;
  color:green;
  padding: 16px 20px;
  margin: 8px 0;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border-radius:15px;
}

.registerbtn:hover {
  opacity: 1;
  background: #4CAF50;
  color:white;
}


/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
label{
  font-family: "Open Sans", "Arial", "Helvetica Neue", sans-serif;
  margin-left:1%;
}
@media (max-width: 576px) {
  
  .header{
    font-size:6px;
  }
  .header p{
    font-size:10px;
  }
  .header img{
    width:100px;
    height:80px;
  }
.registerbtn {
  padding: 10px 15px;
  margin: 8px 0;
  width: 100%;
  font-size:10px;
}

.card-5 .card-body{
  padding: 20px;
  padding-bottom: 73px;
  
}
input[type=text],textarea{
  width:90%;
}
label{
  font-size:10px;
}
.title{
  font-size:12px;
}
.p-t-45{
  padding-top: 10px;
}
.wrapper{
  width:90%;
}

 }
  </style>
<link rel = "icon" type = "image/png" href = "IGDTUW-logo.png">
<title>Journal Publications Edit</title>
</head>
<body>
    <a name="top"></a>
    <div class="content">
	<div class="header">
  <img src="IGDTUW-logo.png" alt="logo" />
  <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
  <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
</div> 

<div  style="background-color: #186A3B ; height:20px;">
 </div>

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">EDIT JOURNAL PUBLICATIONS HERE <i class="fa fa-book" aria-hidden="true"></i></h2>
            </div>
            <div class="card-body">
                <form method="post">
				
				<?php
   
   $query ="SELECT * FROM f_journal where fid='$idf' and jid='$aid'";
   
   $result = mysqli_query($con,$query) or die('Error');
    $c=1;
   while($row = mysqli_fetch_array($result)) {
	   
	  
	  // $year= $row["year"];
  $year= $row['year'];
  $title= $row['papertitle'];
  $indexing= $row['indexing'];
  $if= $row['impactfactor'];
  $publisher= $row['publisher'];
  $vol= $row['volume'];
  $isbn= $row['isbn'];
	   ?>
	   
  <label for="year"><b>Year of publication</b></label>
   
  <?php echo '<input type="text" id="year" name="year" value="'.$year.'">'; ?>
             
           
  <label for="title"><b>Enter paper title</b></label>
  <?php echo '<textarea id="title" name="title" style="height:200px" value="'.$title.'">'.$title.'</textarea>'; ?>

           
   <label for="indexing"><b>Indexing</b></label>
   
   <?php echo '<input type="text" id="indexing" name="indexing" value="'.$indexing.'">';?>


   <label for="if"><b>Impact factor</b></label>
   
   <?php echo '<input type="text" id="if" name="if" value="'.$if.'">'; ?>


   <label for="publisher"><b>Publisher</b></label>
   
   <?php echo '<input type="text" id="publisher" name="publisher" value="'.$publisher.'">';?>

   <label for="vol"><b>Volume</b></label>
   
  <?php echo '<input type="text" id="vol" name="vol" value="'.$vol.'">'; ?>
             
  <label for="isbn"><b>ISBN</b></label>
   
  <?php echo '<input type="text" id="isbn" name="isbn" value="'.$isbn.'">'; ?>
             
              <hr>
   
<?php
   }
   ?>
              <button type="submit" class="registerbtn" name="sub" ><b>SUBMIT</b></button>
			  
			  
</form>  


<?php
				if(isset($_POST["sub"]))
				{	
					  $year= $_POST['year'];
					  $title= $_POST['title'];
					  $indexing= $_POST['indexing'];
					  $if= $_POST['if'];
					  $publisher= $_POST['publisher'];
					  $vol= $_POST['vol'];
					  $isbn= $_POST['isbn'];
					
					$query = "UPDATE f_journal SET year='$year', papertitle='$title', indexing='$indexing', impactfactor='$if', 
					          publisher='$publisher', volume='$vol', isbn='$isbn' where jid='$aid' and fid='$idf'";
			
				            //$query = "UPDATE login_student SET name='".$name."',rollno='".$b."',email='".$h."',mob='".$c."',branch='".$e."',program='".$d."',semester='".$f."',batch='".$g."' ,image='".$img."') where email=".$E;

			$roww=mysqli_query($con, $query);
			if($roww > 0)
			{
				echo "<script>alert('Journal edited successfully.')</script>";
				echo "<script>window.location.href='journal_publications_edit.php'</script>";
			}
			else
			{
				//echo "1";
				echo "<script>alert('Unsuccessful.Try again or contact ADMIN!')</script>";
			}
				}
				
				?>
</div>
</div>
</div>
</div>


 </div>   
<?php
include('footer.php');
?>
</body>
</html>