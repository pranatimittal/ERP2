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
.main h3{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 25px;
    color:#5e0c17;
    text-align: center;
  }
    .content {
  flex: 1 0 auto;
}
.collapsible {
  background-color: #777;
    color: white;
    /* cursor: pointer; */
    padding: 10px;
    width: 80%;
    border: none;
    text-align: center;
    outline: none;
    font-size: 18px;
    border-radius:12px;
    margin-left:auto;
    margin-right:auto;
  }
  .active, .collapsible:hover {
    background-color: #555;
  }
  .content1 {
    /* padding: 0 18px; */
    /* max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out; */
    background-color: #f1f1f1;
    width:95%;
    margin-left:auto;
    margin-right:auto;
  }
  table{
      width: 80%;
    }
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
    text-align: center;
  }
  .button1
     {
         font-size: 10px;
        border-radius: 12px;
        background-color: #4CAF50;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin:auto;
  display:block;
     }
     .button1:hover {
  background-color: #3e8e41;
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
 .main h3{
     font-size: 18px;
   }
   .collapsible {
    padding: 8px;
    font-size: 12px;
  }
  th,td {
    font-size:10px;
}
th, td {
    padding: 5px;
  }
  .button1
     {font-size: 12px;
  padding: 12px;
     }
 }
        </style>
      </style>
      <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Detailed Feedback</title>
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
    <a href="fac_fb_home.php"><i class="fa fa-user  fa-home"></i> Home</a>      
    <a href="fac_view_fb.php"><i class="fa fa-eye" aria-hidden="true"></i> View Feedback</a>
     <a href="graph.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Visualize Feedback</a>
  </div>
   <?php 
      $s=$_GET['s'];
      $d=$_GET['d'];
      $fn=$_GET['fn'];
      $id=$_SESSION['idf'];
      $q=array_fill(0, 29,0); 
      $cnt=0;
      $result = mysqli_query($con,"SELECT response FROM teacher_fb WHERE fac_id='$id' AND f_subject='$s' AND date='$d'") or die('Error4009');
      while($row = mysqli_fetch_array($result)) {
            $res = $row['response'];
            $str= unserialize($res);
            $arr=explode(',', $str);
           // print_r($arr);
            //$b=$arr[0]+$arr[1];
            //echo $b;
            $len=sizeof($arr);     
           for ($i=0; $i <$len ; $i++) { 
            $q[$i]= $q[$i]+$arr[$i];
           }
            $cnt++;
            //print_r($arr);
            //echo '<br>';
          }
          //print_r($q);
          //echo $cnt;
          for ($i=0; $i <$len ; $i++) { 
            $val=$q[$i]/$cnt;
            $q[$i]=round($val,3);
           }
           //echo '<br>';
           //print_r($q);
         ?>
  <div class="main">
    <?php
      echo "<h3> Faculty Name :".$fn." &nbsp&nbsp&nbsp Subject Name :".$s."  &nbsp&nbsp&nbsp Date :".$d." </h3><br>";?>
      </div>
      <h4 class="collapsible">Teaching Skills</h4>
<div class="content1">
<table align="center">
      <tr>
        <th>Questions <i class="fa fa-arrow-down"></i></th>
        <th width="18%;">Average Score</th>
      </tr>
      <tr>
           <th>Ability to explain the concepts and the principles of the subject.</th>
           <td> <?php echo $q[0]*2; ?> </td>
      </tr>
      <tr>
        <th>Proper and timely coverage of syllabus.</th>
        <td><?php echo $q[1]*2; ?> </td>
      </tr>
      <tr>
       <th>Provides relevant study material,ppts and learning resources.</th>
        <td><?php echo $q[2]*2; ?>  </td>
      </tr>
      <tr>
       <th>Ability to corelate concepts with examples in accordance with industry principles.</th>
        <td><?php echo $q[3]*2; ?>  </td>
      </tr>
      <tr>
        <th>Provides opportunities for students to work on some projects or research papers.</th>
         <td><?php echo $q[4]*2; ?>  </td>
       </tr>
    </table>
</div>
<br>
<br>
<h4 class="collapsible">Presentation Skills</h4>
<div class="content1">
<table align="center">
      <tr>
        <th>Questions <i class="fa fa-arrow-down"></i></th>
        <th width="18%;">Average Score</th>
      </tr>
      <tr>
          <th>Use of latest tools and visual aids such as smart boards, video lectures, ppts, illustrations, examples, live demonstrations etc.</th>
          <td><?php echo $q[5]*2; ?> </td>
         </tr>
         <tr>
            <th>Delivery of planned and structured lessons as per the curriculum.</th>
            <td> <?php echo $q[6]*2; ?> </td>
           </tr>
           <tr>
              <th>Timely conduction of tests ,quizzes ,assignments etc.</th>
              <td><?php echo $q[7]*2; ?>  </td>
             </tr>
             <tr>
                <th>Focuses on current areas of study and research along with the latest developments in the field.</th>
                 <td> <?php echo $q[8]*2; ?> </td>
               </tr>
    </table>
</div>
<br>
<br>
<h4 class="collapsible">Quality of lectures</h4>
<div class="content1">
<table align="center">
      <tr>
        <th>Questions <i class="fa fa-arrow-down"></i></th>
        <th width="18%;">Average Score</th>
      </tr>
            <th>Quality of slides,content and learning resources provided.</th>
            <td><?php echo $q[9]*2; ?>  </td>
           </tr>
           <tr>
              <th>Effectiveness of teaching methodlogy.</th>
              <td><?php echo $q[10]*2; ?>  </td>
             </tr>
             <tr>
                <th>Delivery of interactive lectures. </th>
                <td> <?php echo $q[11]*2; ?> </td>
               </tr>
               <tr>
                  <th>Timely clarification of the doubts.</th>
                  <td> <?php echo $q[12]*2; ?> </td>
                 </tr>
    </table>
 </div>
<br>
<br>
<h4 class="collapsible">Practical Section</h4>
<div class="content1">
<table align="center">
        <tr>
          <th>Questions <i class="fa fa-arrow-down"></i></th>
          <th width="18%;">Average Score</th>
        </tr>
        <tr>
            <th>Timely conduction of practical labs.</th>
            <td> <?php echo $q[13]*2; ?> </td>
           </tr>
           <tr>
              <th>Adequate time provided for questions, discussions and for clearing doubts.</th>
              <td> <?php echo $q[14]*2; ?> </td>
             </tr>
             <tr>
                <th>Explanation of the experiments and demonstrations.</th>
                <td> <?php echo $q[15]*2; ?> </td>
               </tr>
               <tr>
                  <th>Labs are adequately equipped for lab sessions.</th>
                  <td><?php echo $q[16]*2; ?>  </td>
                 </tr>
      </table>
</div>
<br>
<br> 
<h4 class="collapsible">Beyond the Class</h4>
<div class="content1">
<table align="center">
        <tr>
          <th>Questions <i class="fa fa-arrow-down"></i></th>
          <th width="18%;">Average Score</th>
        </tr>
        <tr>
            <th>Motivating the students and creating interest in the subject taught.</th>
            <td> <?php echo $q[17]*2; ?> </td>
           </tr>
           <tr>
              <th>General interaction with students</th>
              <td> <?php echo $q[18]*2; ?> </td>
             </tr>
             <tr>
                <th>Helpfullness in solving doubts and assignments</th>
                <td> <?php echo $q[19]*2; ?> </td>
               </tr>
               <tr>
                  <th>Approachability</th>
                  <td> <?php echo $q[20]*2; ?> </td>
                 </tr>
                 <tr>
                    <th>Approach towards developing professional skills in students.</th>
                    <td><?php echo $q[21]*2; ?>  </td>
                   </tr>
      </table>
</div>
<br>
<br> 
<h4 class="collapsible">Personal Attributes</h4>
<div class="content1">
<table align="center">
      <tr>
        <th>Questions <i class="fa fa-arrow-down"></i></th>
        <th width="18%;">Average Score</th>
      </tr>
      <tr>
          <th>Punctuality and regularity in taking classes.</th>
          <td> <?php echo $q[22]*2; ?> </td>
         </tr>
         <tr>
            <th>Engaging students in learning.</th>
            <td><?php echo $q[23]*2; ?>  </td>
           </tr>
           <tr>
              <th>Communication Skills and clarity.</th>
              <td> <?php echo $q[24]*2; ?> </td>
             </tr>
             <tr>
                <th>Inspires the students for ethical conduct.</th>
                <td><?php echo $q[25]*2; ?>  </td>
               </tr>
               <tr>
                  <th>Passion for the subject.</th>
                  <td><?php echo $q[26]*2; ?>  </td>
                 </tr>
    </table>
</div>
<br>
<br> 
<h4 class="collapsible">General Questions</h4>
<div class="content1">
<table align="center">
        <tr>
          <th>Questions <i class="fa fa-arrow-down"></i></th>
          <th width="18%;">Average Score</th>
        </tr>
        <tr>
            <th>Would you like to take the same teacher again in other courses?</th>
            <td> <?php echo $q[27]*100;echo "%" ?>  </td>
           </tr>
           <tr>
              <th>Are you satisfied with the evaluation of answer sheets by this teacher?(If 'NO', please provide the reason specifically in suggestion box below.)</th>
              <td> <?php echo $q[28]*100;echo "%" ?>  </td>
             </tr>
            </table>
</div>
<br>
<br>
<div  style="background-color: #ddd;border-radius:12px;"> 
                <br> 
<button class="button button1" onclick="location.href = 'fac_view_fb.php';">Go back to previous page</button>
<br>
</div> 
<br>
      </div> 
    <?php
include('../footer.php');
?>   
</body>
</html>