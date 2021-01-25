<?php
include('config.php');
session_start();

//echo $_SESSION['idf'];

?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
ul {
	/* margin:0;
	padding:0; */
	text-decoration:none;
	list-style:none;
}
/* li {
	padding:0;
	margin:0;
} */
.overlay {
	/* display:none; */
	/* position:fixed; */
	/* top:0; */
	/* height:100%; */
	width:100%;
	background:#333;
	overflow:auto;
	z-index:99;
}
.wrap {
	color:#e9e9e9;
	text-align:center;
	max-width:90%;
	margin:0 auto;
}
.wrap ul.wrap-nav {
	/* border-bottom:1px solid #575757; */
	text-transform:capitalize;
	padding:90px 0px 100px;
}
.wrap ul.wrap-nav li {
	font-size:20px;
	display:inline-block;
	vertical-align:top;
	width:24%;
	position:relative;
}
.wrap ul.wrap-nav li a {
	color:#34B484;
	display:block;
	padding:8px 0;
	text-decoration:none;
	transition-property:all .2s linear 0s;
	-moz-transition:all .2s linear 0s;
	-webkit-transition:all .2s linear 0s;
	-o-transition:all .2s linear 0s;
}
.wrap ul.wrap-nav li a:hover {
	color:#f0f0f0;
}
.wrap ul.wrap-nav ul {
	padding:20px 0;
}
.wrap ul.wrap-nav ul li {
	display:block;
	font-size:18px;
	width:100%;
	color:#e9e9e9;
}
.wrap ul.wrap-nav ul li a {
	color:#f0f0f0;
}
.wrap ul.wrap-nav ul li a:hover {
	color:#34B484;
}
.social {
	font-size:25px;
	padding:20px;
}
.social p {
	margin:0;
	padding:20px 0 5px 0;
	line-height:30px;
	font-size:25px;
}
.social p a {
	color:#34B484;
	text-decoration:none;
	margin:0;
	padding:0;
}
.abc{
	border-bottom:1px solid #575757;
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
  .wrap ul.wrap-nav>li {
		width:100%;
		padding:20px 0;
		border-bottom:1px solid #575757;
	}
	.wrap ul.wrap-nav {
		padding:30px 0px 0px;
	}
  .social {
		color:#c1c1c1;
		font-size:25px;
		padding:15px 0;
	}
  .social p{
    font-size:13px;
  }
  .abc{
  border-bottom:0px solid #333;
  }
  .wrap ul.wrap-nav ul li{
	  font-size:16px;
  }
 }
  </style>
<link rel = "icon" type = "image/png" href = "IGDTUW-logo.png">
<title>Home</title>
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
<div class="overlay">
	<div class="wrap">
		<ul class="wrap-nav">
	  <div class="social">
      <p>
				 Click on the respective link to add
			</p>
		</div>
		<br>
		<br>
      <li><a href="#">Add Details</a>
			<ul>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="funding.php">Funding</a></li>
  <!-- <li><a href="technologies.php">Technologies</a></li> -->
  <li><a href="achievements.php">Achievements</a></li>
			</ul>
			</li>
			<li><a href="#">Add Research</a>
			<ul>
				<li><a href="research_publications.php">Research Publications</a></li>
				<li><a href="ongoing_research.php">Ongoing Research</a></li>
			</ul>
			</li>
      <li><a href="#">Add Publications</a>
			<ul>
				<li><a href="journal_publications.php">Journal</a></li>
				<li><a href="conference_publications.php">Conference</a></li>
				<li> <a href="book_publications.php">Book</a></li>
			</ul>
			</li>
			<li><a href="#">Add Student Details</a>
			<ul>
				<li><a href="phd_students.php">PhD Students</a></li>
				<li> <a href="research_students.php">Research Students</a></li>
				<li><a href="master_students.php">Master Students</a></li>
			</ul>
			</li>
			<li><br><a href="../edit info/home_edit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Click here to edit details</a></li>
            <br>
			<br>
			<div class="abc">
			</div>
			<br>
	  <li><a href="../option.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Back to Home</a></li>
		
		</ul>	
	</div>
</div>

 </div>   
<?php
include('footer.php');
?>
</body>
</html>