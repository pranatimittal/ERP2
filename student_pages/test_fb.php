<?php
   include('config.php');
  session_start();
  
?>

<?php

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='student_login.php'</script>";
}

?>

<?php

$tid=$_GET['tid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Give Test Feedback</title>
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
/* Style the body */
.content {
  flex: 1 0 auto;
}  
body {
  font-family: Arial;
  margin: 0;
}

/* Header/Logo Title */
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
fieldset {
    text-align: center;
    margin-left: 100px;
    margin-right: 100px;
   
    background-color:#ddd;
    font-size: 25px;
}
legend{
  background-color: black;
  color:white;
}
div.stars {
  width: 270px;
  display: inline-block;
  
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #F62;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #F62;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}

input[type=submit]:hover {
    background-color: #45a049;
  }
  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 50px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 20px;
  }
  textarea {
    
    margin-top: 6px;
    margin-bottom: 16px;
    border:2px solid black;
    border-radius: 20px;
    background-color: white;
    padding-left:15px;
    padding-top:10px;
    
  }
  ::placeholder {
  color: black;
 font-size: 15px;
}
.checked {
  color:#F62;
}
.uc {
  color:black;
  background-color:#ddd;
}
.tex{
  margin-left:5%;
  color:black;
  font-size:18px;
}
table{
  width:30%;
  margin-left:auto;
  margin-right:auto;
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
 fieldset {
   width:80%;
   margin:auto;
   font-size: 15px;
 }
 fieldset p{
   font-size:15px;
 }
 textarea{
   width:70%;
 }
 input[type=submit] {
    padding: 8px 10px;
    font-size: 15px;
  }
  table{
    width:70%;
  }
  .tex{
    font-size:15px;
  }
}
</style>
</head>
<body>
<a name="top"></a>
    <div class="content">
<div class="header">
  <img src="IGDTUW-logo.png" alt="logo" />
  <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
  <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
</div>   
<div  style="background-color: green; height:20px;">
</div>
<br>
<br>

<fieldset>
    <legend><B>FEEDBACK FORM</B></legend>
<br>
<table>
<tr>
  <td>  <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
   <span class="fa fa-star checked"></span>
   <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span></td>
  <td><span class="tex">Excellent</span></td>
 </tr>
 <tr>
   <td> <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
   <span class="fa fa-star checked"></span>
   <span class="fa fa-star checked"></span>
    <span class="fa fa-star uc"></span></td>
  <td><span class="tex">Very Good</span></td>
  </tr>
  <tr>
   <td> <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
   <span class="fa fa-star checked"></span>
   <span class="fa fa-star uc"></span>
    <span class="fa fa-star uc"></span></td>
<td>  <span class="tex">Good</span></td>
    </tr>
    <tr>
    <td><span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
   <span class="fa fa-star uc"></span>
   <span class="fa fa-star uc"></span>
    <span class="fa fa-star uc"></span></td>
 <td> <span class="tex">Satisfactory</span></td>
   </tr>
   <tr>
    <td><span class="fa fa-star checked"></span>
    <span class="fa fa-star uc"></span>
   <span class="fa fa-star uc"></span>
   <span class="fa fa-star uc"></span>
    <span class="fa fa-star uc"></span></td>
  <td><span class="tex">Unsatisfactory</span></td>
</tr>
 </table>   
  
    <p>Your overall experience of taking this test.</p>
    <div class="stars">
      <input class="star star-1" id="p1" value="5" type="radio" name="q1"/>
      <label class="star star-1" for="p1"></label>
  
      
      <input class="star star-2" id="b1" value="4" type="radio" name="q1"/>
      <label class="star star-2" for="b1"></label>
  
      
      <input class="star star-3" id="a1" value="3" type="radio" name="q1"/>
      <label class="star star-3" for="a1"></label>
  
     
      <input class="star star-4" id="g1" value="2" type="radio" name="q1"/>
      <label class="star star-4" for="g1"></label>
  
      
      <input class="star star-5" id="e1" value="1" type="radio" name="q1"/>
      <label class="star star-5" for="e1"></label>
    </div>
      <br>
      <br>
      <p>Clarity and conciseness of the information and the instructions provided fot the test.</p>
      <div class="stars">
      <input class="star star-1" id="p2" value="5" type="radio" name="q2"/>
  
      <label class="star star-1" for="p2"></label>
  
      <input class="star star-2" id="b2" value="4" type="radio" name="q2"/>
  
      <label class="star star-2" for="b2"></label>
  
      <input class="star star-3" id="a2" value="3" type="radio" name="q2"/>
  
      <label class="star star-3" for="a2"></label>
  
      <input class="star star-4" id="g2" value="2" type="radio" name="q2"/>
  
      <label class="star star-4" for="g2"></label>
  
      <input class="star star-5" id="e2" value="1" type="radio" name="q2"/>
  
      <label class="star star-5" for="e2"></label>
      </div>
      <br>
      <br>
      <p>Difficulty level of the questions.</p>
      <div class="stars">
          <input class="star star-1" id="p3" value="5" type="radio" name="q3"/>
  
          <label class="star star-1" for="p3"></label>
  
      <input class="star star-2" id="b3" value="4" type="radio" name="q3"/>
  
      <label class="star star-2" for="b3"></label>
  
      <input class="star star-3" id="a3" value="3" type="radio" name="q3"/>
  
      <label class="star star-3" for="a3"></label>
  
      <input class="star star-4" id="g3" value="2" type="radio" name="q3"/>
  
      <label class="star star-4" for="g3"></label>
  
      <input class="star star-5" id="e3" value="1" type="radio" name="q3"/>
  
      <label class="star star-5" for="e3"></label>
      </div>
      <br>
      <br>
      <p>Clarity of the questions and options given in the test.</p>
      <div class="stars">
      <input class="star star-1" id="p4" value="5" type="radio" name="q4"/>
  
      <label class="star star-1" for="p4"></label>
  
      <input class="star star-2" id="b4" value="4" type="radio" name="q4"/>
  
      <label class="star star-2" for="b4"></label>
  
      <input class="star star-3" id="a4" value="3" type="radio" name="q4"/>
  
      <label class="star star-3" for="a4"></label>
  
      <input class="star star-4" id="g4" value="2" type="radio" name="q4"/>
  
      <label class="star star-4" for="g4"></label>
  
      <input class="star star-5" id="e4" value="1" type="radio" name="q4"/>
  
      <label class="star star-5" for="e4"></label>
      </div>
      <br>
      <br>
      <p>Smoothness of login process and the overall user interface</p>
      <div class="stars">
      <input class="star star-1" id="p5" value="5" type="radio" name="q5"/>
  
      <label class="star star-1" for="p5"></label>
  
      <input class="star star-2" id="b5" value="4" type="radio" name="q5"/>
  
      <label class="star star-2" for="b5"></label>
  
      <input class="star star-3" id="a5" value="3" type="radio" name="q5"/>
  
      <label class="star star-3" for="a5"></label>
  
      <input class="star star-4" id="g5" value="2" type="radio" name="q5"/>
  
      <label class="star star-4" for="g5"></label>
  
      <input class="star star-5" id="e5" value="1" type="radio" name="q5"/>
  
      <label class="star star-5" for="e5"></label>
      </div>
      <br>
      <br>
      <p>Any Suggestions:</p>
   <textarea cols="60" rows="9" name="suggestions" placeholder="   Write your suggestions here.." ></textarea><br>
   <br>
   <br>
      <div style="text-align:center"> 
          <input type="submit" name="sub" onclick="getCheckedRadio();" value="Submit"> 
      </div>
    
  
  
</fieldset>

<script type="text/javascript">
    function getCheckedRadio() {
      
      var q1=0;
      var q2=0;
      var q3=0;
      var q4=0;
      var q5=0;
      var f_skill=0;
      var f_count=0;
      
     var radioButtons = document.getElementsByName("q1");

    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
      q1=radioButtons[x].value;
     // alert(q1);
     f_skill+= parseInt(q1);
   f_count++;
   
  //   document.getElementById("d").innerHTML = val;
     // alert("Value is " + count);
     }
     }
   
   
        var radioButtons = document.getElementsByName("q2");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        q2=radioButtons[x].value;
     f_skill+= parseInt(q2);
   f_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     }
   
   
        var radioButtons = document.getElementsByName("q3");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        q3=radioButtons[x].value;
     f_skill+= parseInt(q3);
   f_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     }
   
        var radioButtons = document.getElementsByName("q4");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        q4=radioButtons[x].value;
     f_skill+= parseInt(q4);
   f_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     }
   
   
     var radioButtons = document.getElementsByName("q5");
    for (var x = 0; x < radioButtons.length; x ++) {
      if (radioButtons[x].checked) {
        q5=radioButtons[x].value;
     f_skill+= parseInt(q5);
   f_count++;
     //  alert("Value is " + radioButtons[x].value;
     }
     }
   
   
   
   var t = <?php echo $tid ?>;
   
   
   //f_skill/=parseInt(f_count);
   

   //val/= parseInt(count);
  // alert(" is " + q2);
  
  
  

  var val= document.getElementsByName('suggestions')[0].value;
   
window.location.href = "submit1.php?tid="+t +"&ques1=" + q1 + "&ques2="+ q2 +"&ques3="+ q3+
"&ques4="+q4+ "&ques5="+ q5+"&val="+val;
  }
  
  
    </script>
<br>
</div> 
    
    <?php
include('../footer.php');
?>
</body>
</html>