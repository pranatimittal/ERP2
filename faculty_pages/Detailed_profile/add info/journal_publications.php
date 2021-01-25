<?php
include('config.php');
session_start();

$idf=$_SESSION["idf"];
//echo $idf;
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
.sidenav {
  float:left;
  margin-left: 0;
  margin-right: 0;
  margin-bottom: 0px;
  margin-top:0px;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  /* position: fixed; */
  /* height: 100%; */
  /* overflow: auto; */
  height: 90%;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
    display: block;
  padding: 16px;
  text-decoration: none;
  font-size: 16px;
  color: black;
  border: none;
  background: none;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.dropdown-btn{
    width:200px;
}
/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
    background-color: #555;
  color: white;
}
.active {
  background-color: #4CAF50;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #ABB2B9;
  color:black;
  padding-left: 0px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.contentx {
  margin-top:0px;
  margin-left: 200px;
  padding: 1px 16px;
  /* height: 1000px; */
 
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
  background-color: #57b846;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 35%;
  opacity: 0.9;
  border-radius:15px;
}

.registerbtn:hover {
  opacity: 1;
  background: #333333;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
::placeholder{
  color:black;
  font-family: "Open Sans", "Arial", "Helvetica Neue", sans-serif;
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
  .sidenav,.dropdown-btn {
  width: 120px;
}
.sidenav a ,.dropdown-btn{
  padding: 10px;
  font-size:10px;
}
.contentx {
  margin-left: 120px;
  padding: 1px 6px;
}
.fa-caret-down {
  float: right;
  padding-right: 0px;
}
.registerbtn {
  padding: 10px 15px;
  margin: 8px 0;
  width: 100%;
  font-size:10px;
}
::placeholder{
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
<title>Journal Publications</title>
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
<div class="sidenav">
<a href="../edit info/home_edit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Details</a>
<a href="home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
<a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i> Add Profile</a>
  <button class="dropdown-btn"><i class="fa fa-search"></i> Add Research  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="research_publications.php">Research Publications</a>
  <a href="ongoing_research.php">Ongoing Research</a>
  </div>
  <button class="dropdown-btn"><i class="fa fa-book" aria-hidden="true"></i> Add Publications  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="journal_publications.php"><i class="fa fa-plus"></i> Journal</a>
  <a href="conference_publications.php"><i class="fa fa-plus"></i> Conference</a>
  <a href="book_publications.php"><i class="fa fa-plus"></i> Book</a>
  </div>
  <a href="funding.php"><i class="fa fa-credit-card" aria-hidden="true"></i> Add Funding</a>
  <!-- <a href="technologies.php"><i class="fa fa-desktop" aria-hidden="true"></i> Add Technologies</a> -->
  <a href="achievements.php"><i class="fa fa-trophy" aria-hidden="true"></i> Add Achievements</a>
  <button class="dropdown-btn"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Add Students  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="phd_students.php"><i class="fa fa-plus"></i> PhD Students</a>
  <a href="research_students.php"><i class="fa fa-plus"></i> Research Students</a>
  <a href="master_students.php"><i class="fa fa-plus"></i> Master Students</a>
  </div>
</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<div class="contentx">

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">ENTER JOURNAL PUBLICATIONS HERE <i class="fa fa-book" aria-hidden="true"></i></h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
  <label for="year"><b>Year of publication</b></label>
   
  <input type="text" id="year" name="year" placeholder="Enter year (in YYYY format)" required>
             
           
  <label for="title"><b>Enter paper title</b></label>
  <textarea id="title" name="title" placeholder="Enter paper title. . . ." style="height:200px" required></textarea>

           
   <label for="indexing"><b>Indexing</b></label>
   
   <input type="text" id="indexing" name="indexing" placeholder="Enter indexing" required>


   <label for="if"><b>Impact factor</b></label>
   
   <input type="text" id="if" name="if" placeholder="Enter impact factor" required>


   <label for="publisher"><b>Publisher</b></label>
   
   <input type="text" id="publisher" name="publisher" placeholder="Enter publisher" required>

   <label for="vol"><b>Volume</b></label>
   
  <input type="text" id="vol" name="vol" placeholder="Enter volume" required>
             
  <label for="isbn"><b>ISBN</b></label>
   
  <input type="text" id="isbn" name="isbn" placeholder="Enter ISBN" required>
             
              <hr>
   

              <button type="submit" class="registerbtn" name="sub" ><i class="fa fa-arrow-left" aria-hidden="true"></i> Submit & return</button>
    <button type="addmore" class="registerbtn" name="add" style="float: right;"><i class="fa fa-plus" aria-hidden="true" ></i> Submit & Click to add more</button>
</form>


<?php
if(isset($_POST["sub"]) or isset($_POST["add"]))
{
  $tid=$_SESSION['idf'];
  $year= $_POST['year'];
  $title= $_POST['title'];
  $indexing= $_POST['indexing'];
  $if= $_POST['if'];
  $publisher= $_POST['publisher'];
  $vol= $_POST['vol'];
  $isbn= $_POST['isbn'];
    

  $query = "INSERT INTO f_journal VALUES ('', '$tid', '$year', '$title', '$indexing', '$if', '$publisher', '$vol', '$isbn')";
  $row= mysqli_query($con,$query);

    if($row > 0)
    {
    echo "<script>alert('Journal publications successfully added.');</script>";
    }
    else
    {
    echo "<script>alert('Unsuccessful');</script>";
    }

  
 
}


  if(isset($_POST["sub"]))
  {
    echo "<script>window.location.href='home.php'</script>";
  }
  else if(isset($_POST["add"]))
  {
    echo "<script>window.location.href='journal_publications.php'</script>";
  }

?>    
</div>
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