<?php
include('config.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
     
body {
  font-family: Arial, Helvetica, sans-serif;
}
.header {
  position: relative;
  padding: 20px;
  background: white;
  color: #21610B;  
  font-size: 15px;
  
}

p{
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
.navbar {
  overflow: hidden;
  background-color:#555;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4CAF50;
}
* {
            box-sizing: border-box;
          }

          input[type=text], input[type=textarea] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
          }

          
          .custom-file-upload {
           
            padding: 10px;
            cursor: pointer;
            width: 100%
            border-radius: 4px;
            resize: vertical;
        }

          label {
            padding: 7px 12px 12px 0;
            display: inline-block;
            font-size: 16px;
          }

          input[type=submit]  {

            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left:45%;
          }

          input[type=submit]:hover {
            background-color: #45a049;
          }

          .form_u {
            border-radius: 10px;
            background-color: #f2f2f2;
            padding: 40px;
            margin-left: auto;
            margin-right: auto;
            width: 34em;

          }

          .col-25 {
          float: left;
          width: 25%;
          margin-top: 6px;
        }

        .col-75 {
          float: left;
          width: 75%;
          margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }

        .text{
          text-align: center; 
          color: #62665C;
          padding: 20px;
        }
        .content {
  flex: 1 0 auto;
}  
@media (max-width: 576px) {
  
  .header{
    font-size:8px;
  }
  .header p{
    font-size:12px;
  }
  .header img{
    width:100px;
    height:80px;
  }
  .navbar a {
   float: left;
   font-size: 12px;
   color: white;
   text-align: center;
   padding: 8px 10px;
   text-decoration: none;
 }
 .text{
     font-size: 12px;
   }
   .form_u {
            border-radius: 10px;
            background-color: #f2f2f2;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            width: 100%;

          }
          label{
            font-size:15px;
          }
 }
  </style>
  <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Faculty Upload Documents</title>
</head>
<body>
<a name="top"></a>
    <div class="content">
  <div class="header">
    <img src="IGDTUW-logo.png" alt="logo" />
    <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
    <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
  </div> 
  
  
  <div class="navbar">
    <a href="fac_module.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <a href="fac_resources.php"><i class="fa fa-user  fa-home"></i> Home</a><a href="fac_upload_learning.php"><i class="fa fa-upload" aria-hidden="true"></i> Upload Learning Resources </a> 
    <a href="fac_manage_learning.php"><i class="fa fa-eye" aria-hidden="true"></i> Manage Uploaded Resources</a>
  </div>

  <div class="text"><h2> Upload Learning materials    <i class="fa fa-upload fa-1x"></i> </h2></div>
    

    <div class = "form_u" >

<form name="form" method="POST" enctype="multipart/form-data">    

    <div class="row">
    <div class="col-25">
    <label> Name of the document </label>
    </div>
    <div class="col-75">
    <input type="text" name="name">
    </div>
    </div>


<div class="row">
    <div class="col-25">
    <label> Subject Name </label>
    </div>
    <div class="col-75">
    <input type="text" name="sub_name">
    </div>
    </div>
  
  
    <div class="row">
    <div class="col-25">
    <label>Upload</label>
    </div>
    <div class="col-75">

    <label class="custom-file-upload">
    <input type="File" name="file">
    </label>

    </div>
    </div>

    <div class="row">
    <div class="col-25">
    <label>Message</label>
    </div>
    <div class="col-75">
    <input type="textarea" name="msg" placeholder="Write a message.">
    </div>
    </div>
    <br>
    <div class="row">
    <input name="sub" type="submit" value="Submit">
    </div>

    </div>
</form>

</div> 
    
    <?php
include('../footer.php');
?>
<?php
if(isset($_POST["sub"]))
{
  //$timezone= date_default_timezone_get();
  $timezone= date("d-m-Y");
  $id=$_SESSION["idf"];
  $a= $_POST["name"];
  $b= $_POST["msg"];
  $c= $_POST["sub_name"];
  
  
      $img=basename($_FILES["file"]["name"]);
        $type=$_FILES["file"]["type"];
        $size=$_FILES["file"]["size"];
        $store=$_FILES["file"]["tmp_name"];
 
        //for support only image code here
      $n=explode('.',$img);
      $p=pathinfo("upload/".$img,PATHINFO_EXTENSION);
      $q=array("pdf","doc", "docx", "ppt", "pptx",  "jpg","png","jpeg");
      
  if(in_array($p,$q))
  {
    
        $fileName = str_replace(" ", "_", $img);
          move_uploaded_file($store,"upload/".$fileName);
          
      $query1="INSERT INTO documents VALUES ('','$timezone', '$c','$a', '$fileName', '$b','$id')";
      $row=mysqli_query($con, $query1);
      if($row > 0)
      {
      //echo "33";
        echo "<script>alert('success done')</script>";
        echo "<script>window.location.href='assign_submit.php'</script>";
      }
      else
      { 
        echo "<script>alert('not done')</script>";
      }
  } 
      else
      {
$query="INSERT INTO documents VALUES ('', '$timezone','$c','$a', '', '$b','$id')";
$row=mysqli_query($con, $query);
      }
 
}
?>


  </body>
</html>
