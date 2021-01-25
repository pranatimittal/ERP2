<?php
include('config.php');
session_start();

$a=$_SESSION["nam"];
$b=$_SESSION["roll"];
$c=$_SESSION["prog"];
$d=$_SESSION["bat"];
$e=$_SESSION["bran"];
$f=$_SESSION["sem"];

$f_name= $_SESSION["yy"];
//echo $f_name;

$s_name= $_SESSION["zz"];
$f_tid;

$query = mysqli_query($con,"SELECT id FROM login_faculty WHERE tname='$f_name' ") or die('Error');
  
    while($row = mysqli_fetch_array($query)) {
      $f_tid = $row['id'];
   }
$_SESSION["tidf"]=$f_tid;
//echo $f_tid;


//$arr= array();

?>


<?php

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='student_login.php'</script>";
}
else
{
	//echo $_SESSION["xx"];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Section Wise Feedback</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            return false;
        } else {
            return true;
        }
};

$(document).keypress("u",function(e) {
  if(e.ctrlKey)
  {
return false;
}
else
{
return true;
}
});

</script>
<style>
.content1 {
  flex: 1 0 auto;
}  
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

.collapsible {
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 21px;
  }
  
  .active, .collapsible:hover {
    background-color: #555;
  }
  
  .collapsible:after {
    content: '\002B';
    color: white;
    font-weight: bold;
    float: right;
    margin-left: 5px;
  }
  
  .active:after {
    content: "\2212";
  }
  .content {
    /* padding: 0 18px; */
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    background-color: #f1f1f1;
    
  }
  /* th{
    border: 1px solid black; 
  } */
  

th {
  text-align: left;
    background:#4CAF50;
    
    
    font-size:18px;
    border-top: none;
}

  table {
    border-collapse:separate;
    border:solid black 3px;
    border-radius:10px;
    -moz-border-radius:10px;
    
}
  th, td {
    padding: 15px;
  }
  
 
  
  td{
    background:  #ddd;
    border : 1px solid black;
    
  }
  
  /* table {
    border-spacing: 5px;
    
  } */
  
  input[type='radio'] {
        -webkit-appearance: none;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        outline: none;
        border: 2px solid black;
    }

    input[type='radio']:before {
        content: '';
        display: block;
        width: 60%;
        height: 60%;
        margin: 20% auto;
        border-radius: 50%;
    }

 input[type="radio"]:checked:before {
        background: rgb(51, 145, 98);
    }
    
    input[type="radio"]:checked {
      border-color:rgb(51, 145, 98);
    } 
    table{
      width: 80%;
    }
    textarea{
      height:120px;
      width:500px;
    }
  .button1{
    width:200px;
     height:35px; 
     float:right; 
     margin-right:10px;
  }

    #sub{
      width:200px; 
      height:35px; 
      float:right;  
      margin-right:30px;
       background:#4CAF50;
       font-size:25px; 
       font-family:Times-roman;
    }
    .navbar .icon {
  display: none;
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
  .navbar a:not(:first-child) {display: none;}
  .navbar a.icon {
    float: right;
    display: block;
  }
  .navbar.responsive {position: relative;}
  .navbar.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .navbar.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .navbar a:hover{
  background-color: #ddd;
  color: black;
}

  .navbar a.active1 {
  background-color: #4CAF50;
  color: white;
}
 h2{
   font-size:20px;
 }
 .collapsible {
    padding: 12px;
    font-size: 15px;
  }
  th {
    font-size:8px;
}
th, td {
    padding: 5px;
  }
  table{
      width: 60%;
    }
    textarea{
      height:100px;
      width:310px;
    }
    .button1{
      margin:auto;
      margin-bottom:10px;
      padding:auto;
      width:100%;
    }
    #sub{
      margin:auto;
      padding:auto;
      width:100%;
    }
 }
</style>

</head>
<body>
<a name="top"></a>
    <div class="content1">
<div class="header">
  <img src="IGDTUW-logo.png" alt="logo" />
  <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
  <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
</div> 
<div class="navbar" id="myTopnav">
  <a class="active1" href="module_page.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
  <a href="student_home_page.php"><i class="fa fa-user  fa-home"></i> Home</a>      
  <a href="add_fb_for_teacher.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Feedback</a> 
  <a href="view_fb_given.php"><i class="fa fa-eye" aria-hidden="true"></i> View Feedback given for faculty</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
  </a>
      </div>
      <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>
<h2 style="text-align: center;"> Give section wise feedback below <i class="fa fa-arrow-down"></i> </h2>


<button class="collapsible">Teaching Skills</button>
<div class="content">
  <br>
  <table align="center">
      <tr>
        <th>Questions <i class="fa fa-arrow-down"></i></th>
        <th width="100">Excellent</th>
        <th width="100">Very Good</th>
      <th width="100">Good</th>
        <th>Satisfactory</th>
        <th>Unsatisfactory</th>
      </tr>
      <tr>
           <th>Ability to explain the concepts and the principles of the subject.</th>
        <td> <input type="radio" name="dis" value="5" > <br></td>
        <td> <input type="radio" name="dis" value="4" > <br></td>
      <td> <input type="radio" name="dis" value="3" > <br></td>
        <td> <input type="radio" name="dis" value="2" > <br></td>
        <td> <input type="radio" name="dis" value="1" > <br></td>
      </tr>
      <tr>
        <th>Proper and timely coverage of syllabus.</th>
        <td> <input type="radio" name="syl" value="5" > <br></td>
        <td> <input type="radio" name="syl" value="4" > <br></td>
      <td> <input type="radio" name="syl" value="3" > <br></td>
        <td> <input type="radio" name="syl" value="2" > <br></td>
        <td> <input type="radio" name="syl" value="1" > <br></td>
      </tr>
      <tr>
       <th>Provides relevant study material,ppts and learning resources.</th>
        <td> <input type="radio" name="mat" value="5" > <br></td>
        <td> <input type="radio" name="mat" value="4" > <br></td>
      <td> <input type="radio" name="mat" value="3" > <br></td>
        <td> <input type="radio" name="mat" value="2" > <br></td>
        <td> <input type="radio" name="mat" value="1" > <br></td>
      </tr>
      <tr>
       <th>Ability to corelate concepts with examples in accordance with industry principles.</th>
        <td> <input type="radio" name="knop" value="5" > <br></td>
        <td> <input type="radio" name="knop" value="4" > <br></td>
      <td> <input type="radio" name="knop" value="3" > <br></td>
        <td> <input type="radio" name="knop" value="2" > <br></td>
        <td> <input type="radio" name="knop" value="1" > <br></td>
      </tr>
      <tr>
        <th>Provides opportunities for students to work on some projects or research papers.</th>
         <td> <input type="radio" name="opp" value="5" > <br></td>
         <td> <input type="radio" name="opp" value="4" > <br></td>
       <td> <input type="radio" name="opp" value="3" > <br></td>
         <td> <input type="radio" name="opp" value="2" > <br></td>
         <td> <input type="radio" name="opp" value="1" > <br></td>
       </tr>
    </table>
</div>
<br>

<button class="collapsible">Presentation Skills</button>
<div class="content">
  <br>
  <table align="center">
      <tr>
        <th>Questions <i class="fa fa-arrow-down"></i></th>
        <th width="105">Excellent</th>
        <th width="105">Very Good</th>
      <th width="105">Good</th>
        <th>Satisfactory</th>
        <th>Unsatisfactory</th>
      </tr>
      <tr>
          <th>Use of latest tools and visual aids such as smart boards, video lectures, ppts, illustrations, examples, live demonstrations etc.</th>
           <td> <input type="radio" name="lat" value="5" > <br></td>
           <td> <input type="radio" name="lat" value="4" > <br></td>
         <td> <input type="radio" name="lat" value="3" > <br></td>
           <td> <input type="radio" name="lat" value="2" > <br></td>
           <td> <input type="radio" name="lat" value="1" > <br></td>
         </tr>
         <tr>
            <th>Delivery of planned and structured lessons as per the curriculum.</th>
             <td> <input type="radio" name="rea" value="5" > <br></td>
             <td> <input type="radio" name="rea" value="4" > <br></td>
           <td> <input type="radio" name="rea" value="3" > <br></td>
             <td> <input type="radio" name="rea" value="2" > <br></td>
             <td> <input type="radio" name="rea" value="1" > <br></td>
           </tr>
           <tr>
              <th>Timely conduction of tests ,quizzes ,assignments etc.</th>
               <td> <input type="radio" name="tim" value="5" > <br></td>
               <td> <input type="radio" name="tim" value="4" > <br></td>
               <td> <input type="radio" name="tim" value="3" > <br></td>
               <td> <input type="radio" name="tim" value="2" > <br></td>
               <td> <input type="radio" name="tim" value="1" > <br></td>
             </tr>
             <tr>
                <th>Focuses on current areas of study and research along with the latest developments in the field.</th>
                 <td> <input type="radio" name="kno" value="5" > <br></td>
                 <td> <input type="radio" name="kno" value="4" > <br></td>
               <td> <input type="radio" name="kno" value="3" > <br></td>
                 <td> <input type="radio" name="kno" value="2" > <br></td>
                 <td> <input type="radio" name="kno" value="1" > <br></td>
               </tr>
     
    </table>
</div>
<br>
<button class="collapsible">Quality of lectures</button>
<div class="content">
  <br>
  <table align="center">
      <tr>
        <th>Questions <i class="fa fa-arrow-down"></i></th>
        <th width="100">Excellent</th>
        <th width="100">Very Good</th>
      <th width="100">Good</th>
        <th>Satisfactory</th>
        <th>Unsatisfactory</th>
      </tr>
      
            <tr>
			<th>Quality of slides,content and learning resources provided.</th>
             <td> <input type="radio" name="voi" value="5" > <br></td>
             <td> <input type="radio" name="voi" value="4" > <br></td>
           <td> <input type="radio" name="voi" value="3" > <br></td>
             <td> <input type="radio" name="voi" value="2" > <br></td>
             <td> <input type="radio" name="voi" value="1" > <br></td>
           </tr>
           <tr>
              <th>Effectiveness of teaching methodlogy.</th>
               <td> <input type="radio" name="pro" value="5" > <br></td>
               <td> <input type="radio" name="pro" value="4" > <br></td>
             <td> <input type="radio" name="pro" value="3" > <br></td>
               <td> <input type="radio" name="pro" value="2" > <br></td>
               <td> <input type="radio" name="pro" value="1" > <br></td>
             </tr>
             <tr>
                <th>Delivery of interactive lectures. </th>
                 <td> <input type="radio" name="int" value="5" > <br></td>
                 <td> <input type="radio" name="int" value="4" > <br></td>
               <td> <input type="radio" name="int" value="3" > <br></td>
                 <td> <input type="radio" name="int" value="2" > <br></td>
                 <td> <input type="radio" name="int" value="1" > <br></td>
               </tr>
               <tr>
                  <th>Timely clarification of the doubts.</th>
                   <td> <input type="radio" name="doup" value="5" > <br></td>
                   <td> <input type="radio" name="doup" value="4" > <br></td>
                 <td> <input type="radio" name="doup" value="3" > <br></td>
                   <td> <input type="radio" name="doup" value="2" > <br></td>
                   <td> <input type="radio" name="doup" value="1" > <br></td>
                 </tr>
      
    </table>
</div>
<br>
<button class="collapsible">Practical Section</button>
<div class="content">
  <br>
  <table align="center">
        <tr>
          <th>Questions <i class="fa fa-arrow-down"></i></th>
          <th width="100">Excellent</th>
        <th width="100">Very Good</th>
      <th width="100">Good</th>
        <th>Satisfactory</th>
        <th>Unsatisfactory</th>
        </tr>
        <tr>
            <th>Timely conduction of practical labs.</th>
             <td> <input type="radio" name="cons" value="5" > <br></td>
             <td> <input type="radio" name="cons" value="4" > <br></td>
           <td> <input type="radio" name="cons" value="3" > <br></td>
             <td> <input type="radio" name="cons" value="2" > <br></td>
             <td> <input type="radio" name="cons" value="1" > <br></td>
           </tr>
           <tr>
              <th>Adequate time provided for questions, discussions and for clearing doubts.</th>
               <td> <input type="radio" name="dou" value="5" > <br></td>
               <td> <input type="radio" name="dou" value="4" > <br></td>
             <td> <input type="radio" name="dou" value="3" > <br></td>
               <td> <input type="radio" name="dou" value="2" > <br></td>
               <td> <input type="radio" name="dou" value="1" > <br></td>
             </tr>
             <tr>
                <th>Explanation of the experiments and demonstrations.</th>
                 <td> <input type="radio" name="exp" value="5" > <br></td>
                 <td> <input type="radio" name="exp" value="4" > <br></td>
               <td> <input type="radio" name="exp" value="3" > <br></td>
                 <td> <input type="radio" name="exp" value="2" > <br></td>
                 <td> <input type="radio" name="exp" value="1" > <br></td>
               </tr>
               <tr>
                  <th>Labs are adequately equipped for lab sessions.</th>
                   <td> <input type="radio" name="prac" value="5" > <br></td>
                   <td> <input type="radio" name="prac" value="4" > <br></td>
                 <td> <input type="radio" name="prac" value="3" > <br></td>
                   <td> <input type="radio" name="prac" value="2" > <br></td>
                   <td> <input type="radio" name="prac" value="1" > <br></td>
                 </tr>
                 
      </table>
</div>
<br>
<button class="collapsible">Beyond the Class</button>
<div class="content">
  <br>
  <table align="center">
        <tr>
          <th>Questions <i class="fa fa-arrow-down"></i></th>
          <th width="100">Excellent</th>
        <th width="100">Very Good</th>
      <th width="100">Good</th>
        <th>Satisfactory</th>
        <th>Unsatisfactory</th>
        </tr>
        <tr>
            <th>Motivating the students and creating interest in the subject taught.</th>
             <td> <input type="radio" name="mot" value="5" > <br></td>
             <td> <input type="radio" name="mot" value="4" > <br></td>
           <td> <input type="radio" name="mot" value="3" > <br></td>
             <td> <input type="radio" name="mot" value="2" > <br></td>
             <td> <input type="radio" name="mot" value="1" > <br></td>
           </tr>
           <tr>
              <th>General interaction with students</th>
               <td> <input type="radio" name="gen" value="5" > <br></td>
               <td> <input type="radio" name="gen" value="4" > <br></td>
             <td> <input type="radio" name="gen" value="3" > <br></td>
               <td> <input type="radio" name="gen" value="2" > <br></td>
               <td> <input type="radio" name="gen" value="1" > <br></td>
             </tr>
             <tr>
                <th>Helpfullness in solving doubts and assignments</th>
                 <td> <input type="radio" name="hel" value="5" > <br></td>
                 <td> <input type="radio" name="hel" value="4" > <br></td>
               <td> <input type="radio" name="hel" value="3" > <br></td>
                 <td> <input type="radio" name="hel" value="2" > <br></td>
                 <td> <input type="radio" name="hel" value="1" > <br></td>
               </tr>
               <tr>
                  <th>Approachability</th>
                   <td> <input type="radio" name="app" value="5" > <br></td>
                   <td> <input type="radio" name="app" value="4" > <br></td>
                  <td> <input type="radio" name="app" value="3" > <br></td>
                   <td> <input type="radio" name="app" value="2" > <br></td>
                   <td> <input type="radio" name="app" value="1" > <br></td>
                 </tr>
                 <tr>
                    <th>Approach towards developing professional skills in students.</th>
                     <td> <input type="radio" name="apr" value="5" > <br></td>
                     <td> <input type="radio" name="apr" value="4" > <br></td>
                   <td> <input type="radio" name="apr" value="3" > <br></td>
                     <td> <input type="radio" name="apr" value="2" > <br></td>
                     <td> <input type="radio" name="apr" value="1" > <br></td>
                   </tr>
        
      </table>
</div>
<br>
<button class="collapsible">Personal Attributes</button>
<div class="content">
  
  <br>
  <table align="center">
      <tr>
        <th>Questions <i class="fa fa-arrow-down"></i></th>
        <th width="100">Excellent</th>
        <th width="100">Very Good</th>
      <th width="100">Good</th>
        <th>Satisfactory</th>
        <th>Unsatisfactory</th>
      </tr>
      <tr>
          <th>Punctuality and regularity in taking classes.</th>
           <td> <input type="radio" name="pun" value="5" > <br></td>
           <td> <input type="radio" name="pun" value="4" > <br></td>
         <td> <input type="radio" name="pun" value="3" > <br></td>
           <td> <input type="radio" name="pun" value="2" > <br></td>
           <td> <input type="radio" name="pun" value="1" > <br></td>
         </tr>
         <tr>
            <th>Engaging students in learning.</th>
             <td> <input type="radio" name="con" value="5" > <br></td>
             <td> <input type="radio" name="con" value="4" > <br></td>
           <td> <input type="radio" name="con" value="3" > <br></td>
             <td> <input type="radio" name="con" value="2" > <br></td>
             <td> <input type="radio" name="con" value="1" > <br></td>
           </tr>
           <tr>
              <th>Communication Skills and clarity.</th>
               <td> <input type="radio" name="comm" value="5" > <br></td>
               <td> <input type="radio" name="comm" value="4" > <br></td>
             <td> <input type="radio" name="comm" value="3" > <br></td>
               <td> <input type="radio" name="comm" value="2" > <br></td>
               <td> <input type="radio" name="comm" value="1" > <br></td>
             </tr>
             <tr>
                <th>Inspires the students for ethical conduct.</th>
                 <td> <input type="radio" name="work" value="5" > <br></td>
                 <td> <input type="radio" name="work" value="4" > <br></td>
               <td> <input type="radio" name="work" value="3" > <br></td>
                 <td> <input type="radio" name="work" value="2" > <br></td>
                 <td> <input type="radio" name="work" value="1" > <br></td>
               </tr>
               <tr>
                  <th>Passion for the subject.</th>
                   <td> <input type="radio" name="pas" value="5" > <br></td>
                   <td> <input type="radio" name="pas" value="4" > <br></td>
                 <td> <input type="radio" name="pas" value="3" > <br></td>
                   <td> <input type="radio" name="pas" value="2" > <br></td>
                   <td> <input type="radio" name="pas" value="1" > <br></td>
                 </tr>
      
    </table>
</div>
<br>
<button class="collapsible">General Questions</button>
<div class="content">
  <br>
  <table align="center">
        <tr>
          <th>Questions <i class="fa fa-arrow-down"></i></th>
          <th>YES</th>
          <th>NO</th>
        </tr>
        <tr>
            <th>Would you like to take the same teacher again in other courses?</th>
             <td> <input type="radio" name="sam" value="1" > <br></td>
             <td> <input type="radio" name="sam" value="0" > <br></td>
           
           </tr>
           <tr>
              <th>Are you satisfied with the evaluation of answer sheets by this teacher?(If 'NO', please provide the reason specifically in suggestion box below.)</th>
               <td> <input type="radio" name="eva" value="1" > <br></td>
               <td> <input type="radio" name="eva" value="0" > <br></td>
            
             </tr>
            </table>
          </div>
          <br>
<br><br>
<h2 style="margin-left: 15px;" >Any Suggestions:</h2> 
<textarea id="comment" style="font-family: Arial, Helvetica, sans-serif; margin-left: 15px;background-color:  #eeeae9 ;border:1px solid black; font-size:20px;">
</textarea><br><br>
<button class="button1" onclick="location.href = 'student_home_page.php';">
<b>	<a style="font-size:25px; font-family:Times-roman; font-weight: bold;">Cancel</a></b>
          </button>
		<!---  <button style="width:200px; height:35px; float:right;  margin-right:30px; background:#4CAF50;" onclick="location.href = 'submit.html';">
     <b>  <a style="font-size:20px; font-family:Times-roman;">Submit</a> </b>
            
          </button>
	  --->
	  <input name="sub" id="sub" value = "Submit" type="submit" onclick="getCheckedRadio();"/>
      <br><br><br>
	  
	  
	  
	   <script type="text/javascript">
	  function getCheckedRadio() {
		  
		  var arr1 = [];
   
       
//            arr1.push(1);
 //           arr1.push(2);
        

		  var f_skill=0;
		  var f_count=0;
		  var count=0;
     var radioButtons = document.getElementsByName("dis");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
		  var p=radioButtons[x].value;
		  arr1.push(parseInt(p));
     f_skill+= parseInt(p);
	 f_count++;
	//   document.getElementById("d").innerHTML = val;
     // alert("Value is " + count);
     }
	 else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("syl");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     f_skill+= parseInt(p);
	 f_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	 
	      var radioButtons = document.getElementsByName("mat");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     f_skill+= parseInt(p);
	 f_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("knop");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     f_skill+= parseInt(p);
	 f_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	 
	 var radioButtons = document.getElementsByName("opp");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     f_skill+= parseInt(p);
	 f_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	 

	 
	  var pre_skill=0;
		  var pre_count=0;
	 
	 
	 
	 
	      var radioButtons = document.getElementsByName("lat");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     pre_skill+= parseInt(p);
	 pre_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("rea");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     pre_skill+= parseInt(p);
	 pre_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("tim");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     pre_skill+= parseInt(p);
	 pre_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("kno");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     pre_skill+= parseInt(p);
	 pre_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	 
	   var qua_lec=0;
		  var lec_count=0;
	 
	 
	 
	 
	      var radioButtons = document.getElementsByName("voi");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     qua_lec+= parseInt(p);
	 lec_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("pro");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
 var p=radioButtons[x].value;
 arr1.push(parseInt(p));
     qua_lec+= parseInt(p);
	 lec_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("int");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     qua_lec+= parseInt(p);
	 lec_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("doup");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     qua_lec+= parseInt(p);
	 lec_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	 
	 
	 	 
	   
	 
	 
	 var prac_ques=0;
		  var prac_count=0;
	 
	 
	 
	      var radioButtons = document.getElementsByName("cons");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     prac_ques+= parseInt(p);
	 prac_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("dou");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     prac_ques+= parseInt(p);
	 prac_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
	 else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	 var radioButtons = document.getElementsByName("exp");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     prac_ques+= parseInt(p);
	 prac_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("prac");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     prac_ques+= parseInt(p);
	 prac_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	 
	 
	 var class_beh=0;
		  var beh_count=0;
	 
	 
	 
	      var radioButtons = document.getElementsByName("mot");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     class_beh+= parseInt(p);
	 beh_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("gen");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     class_beh+= parseInt(p);
	 beh_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("hel");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     class_beh+= parseInt(p);
	 beh_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("app");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     class_beh+= parseInt(p);
	 beh_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("apr");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     class_beh+= parseInt(p);
	 beh_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	 
	 
	 	 var per_att=0;
		  var per_count=0;
	 
	 
	      var radioButtons = document.getElementsByName("pun");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     per_att+= parseInt(p);
	 per_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("con");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     per_att+= parseInt(p);
	 per_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("comm");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
       var p=radioButtons[x].value;
	   arr1.push(parseInt(p));
     per_att+= parseInt(p);
	 per_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("work");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     per_att+= parseInt(p);
	 per_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	      var radioButtons = document.getElementsByName("pas");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     per_att+= parseInt(p);
	 per_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	 
	 
	 var gen_ques=0;
		  var gen_count=0;
	 
	 
	 
	      var radioButtons = document.getElementsByName("sam");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
				arr1.push(parseInt(p));

     gen_ques+= parseInt(p);
	 gen_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 var count=0;
	 
	  var gen_question=0;
		  var gen_countt=0;
	 
	      var radioButtons = document.getElementsByName("eva");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        var p=radioButtons[x].value;
		arr1.push(parseInt(p));
     gen_question+= parseInt(p);
	 gen_countt++;
     //  alert("Value is " + radioButtons[x].value;
     }
     else
	 {
		 count+=1;
	 }
     }
	 
	 if(count==radioButtons.length)
	 {
		 arr1.push(0);
	 }
	 
	 
	 
	 f_skill/=parseInt(f_count);
	 
	 per_att/=parseInt(per_count);
	 
     pre_skill/=parseInt(pre_count);
	 
	 qua_lec/=parseInt(lec_count);
	 
	 class_beh/=parseInt(beh_count);
	 
	// gen_ques/=parseInt(gen_count);
	 
	// gen_question/=parseInt(gen_countt);
	 
	 prac_ques/=parseInt(prac_count);
	 
	 //val/= parseInt(count);
	// alert(" is " + val);
	
	
	
var name= <?php echo json_encode($a);  ?>;
var roll_no= <?php echo json_encode($b);  ?>;
var prog= <?php echo json_encode($c);  ?>;
var bat= <?php echo json_encode($d);  ?>;
var bran= <?php echo json_encode($e);  ?>;
var sem= <?php echo json_encode($f);  ?>;
var fname= <?php echo json_encode($f_name);  ?>;
var sname= <?php echo json_encode($s_name);  ?>;
var ftid= <?php echo json_encode($f_tid);  ?>;





var com= document.getElementById("comment").value;
	 
window.location.href = "submit.php?skill=" + f_skill + "&att="+ per_att +"&pre_skill="+ pre_skill+
"&quality="+qua_lec+ "&beh="+ class_beh+"&gnt="+gen_ques +"&gnp="+gen_question+"&prac_beh="+ prac_ques+"&name=" +name 
+"&roll=" +roll_no +"&prog=" +prog +"&bat=" +bat +"&bran=" +bran +"&sem=" +sem+"&com=" +com+"&fname=" +fname
+"&sname=" +sname+ "&f_tid1="+ftid+ "&arr="+ arr1;
  }
  
  
	  </script>
	  
	  
	  
	  
	  
	  
<script>

  var coll = document.getElementsByClassName("collapsible");
  var i;
  
  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      } 
    });
  }
  </script>
  </div> 
    
    <?php
include('../footer.php');
?>
</body>
</html>