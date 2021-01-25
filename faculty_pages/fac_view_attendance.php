<?php
include('config.php');
session_start();
?>

<?php

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='faculty_login.php'</script>";
}

?>

<?php

    if( $_SERVER['REQUEST_METHOD']=='POST' && isset(
        $con,
        $_POST['task'],
        $_POST['rollno'],
        $_POST['attend']
    )){

        ob_clean();

        if( $_POST['task']=='increase' ){

            function increase($con,$r,$a) {
                $sql='UPDATE `attendance` SET `attendno`=`attendno`+1 WHERE `rollno`=? AND `tid`=?';

                $stmt=$con->prepare($sql);
                $stmt->bind_param('ss',$r,$_SESSION['idf']);
                $res=$stmt->execute();
                $stmt->close();
                return $res;
            }
            $result=increase( $con, $_POST['rollno'],$_POST['attend'] );
        }


        if( $_POST['task']=='decrease' ){
            function increase($con,$r,$a) {
                $sql='UPDATE `attendance` SET `attendno`=`attendno`-1 WHERE `rollno`=? AND `tid`=?';

                $stmt=$con->prepare($sql);
                $stmt->bind_param('ss',$r,$_SESSION['idf']);
                $res=$stmt->execute();
                $stmt->close();
                return $res;
            }
            $result=increase( $con, $_POST['rollno'],$_POST['attend'] );
        }
        if( $_POST['task']=='add' ){
            /*etc */
        }
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Manage User</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/* Style the body */
.content {
  flex: 1 0 auto;
}
body {
  font-family: Arial;
  /* margin: 0; */
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
/*.footer p{
  position: relative;
  height: 50px;
  width: 100%;
  background-color: black;
  text-align: center;
  color:white;
   font-size:30px;
  }
*/

 .main h1{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 30px;
    color:#5e0c17;
    text-align: center;
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

.dropdown {
  float: left;
  overflow: hidden;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4CAF50;
}

.manageuser{
			font-family: "Times New Roman", Times, serif;
      font-size: 20px;

		}
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
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
 .main h1{
     font-size: 20px;
   }
   th,td{
     font-size:12px;
     padding:5px;
   }
   table{
     width:100%;
   }
     .adminpanel p{
       font-size:20px;
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

  .navbar a.active {
  background-color: #4CAF50;
  color: white;
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

<div class="navbar" id="myTopnav">
        <a class="active" href="fac_classroom_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        <a href="fac_view_attendance.php"><i class="fa fa-users" aria-hidden="true"></i> Manage User</a>

        <a href="f_logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
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
<br>
<div class="main">
<h1>Attendance Record</h1>
</div>
 <br>
<div class = "manageuser">
  <table align="center">
  <tr>
    <th>Program</th>
    <th>Branch</th>
    <th>Semester</th>
    <th>Roll No.</th>
    <th>Attendance</th>
    <th>Increase</th>
    <th>Decrease</th>
  </tr>

  <?php
  if( isset( $_SESSION['idf'] ) ){

                      $sql='SELECT a.program, a.branch, a.semester, a.rollno, a.attendno
                              from attendance a, login_student l
                          WHERE l.rollno = a.rollno
                              AND l.branch = a.branch
                              AND l.program = a.program
                              AND l.semester = a.semester
                              AND a.tid=?
                          ORDER BY l.branch';

                      $stmt=$con->prepare( $sql );
                      $stmt->bind_param( 's', $_SESSION['idf'] );

                      $res=$stmt->execute();
                      $stmt->bind_result( $program, $branch, $semester, $rollno, $attendno );

                      while( $stmt->fetch() ){
                          printf(
                              '<tr>
                                  <td>%1$s</td>
                                  <td>%2$s</td>
                                  <td>%3$s</td>
                                  <td>%4$s</td>
                                  <td>%5$s</td>
                                  <td><button data-task="increase" data-rollno="%4$s" data-attend="%5$s">+</button></td>
                                  <td><button data-task="decrease" data-rollno="%4$s" data-attend="%5$s">-</button></td>
                              </tr>',
                              $program,
                              $branch,
                              $semester,
                              $rollno,
                              $attendno );
                      }
                  }
              ?>
</table>

</div>
<script>
    document.querySelectorAll('td button').forEach( bttn=>{
        bttn.addEventListener('click',e=>{

            /* create an empty FormData object and add our own values */
            let fd=new FormData();
                fd.append('task',e.target.dataset.task);
                fd.append('rollno',e.target.dataset.rollno);
                fd.append('attend',e.target.dataset.attend);

            /* send a POST request to the PHP endpoint that will perform the update ( same page here ) */
            fetch( location.href, { method:'post',body:fd } )
                .then( r=>r.text() )
                .then( text=>{
                    if(e.target.getAttribute('data-task')=="increase"){
                        td=e.target.parentNode.previousElementSibling;
                        td.textContent=parseInt( td.textContent ) + 1;
                    }
                    else if(e.target.getAttribute('data-task')=="decrease"){
                        td=e.target.parentNode.previousElementSibling.previousElementSibling;
                        td.textContent=parseInt( td.textContent ) - 1;
                    }
                });
        });
    })
</script>
<br>
<br>
</div>

    <?php
include('../footer.php');
?>
</body>
</html>
