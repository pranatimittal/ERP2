<style>
.footer {
   /* position: fixed; */
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
   flex-shrink: 0;
   margin-top:20px;
}
.footer a{
    color: white;
    font-size: 16px;
    text-decoration: none;
}
.footer a:hover{
    color: red;
}
html, body {
  height: 100%;
}
body {
  display: flex;
  flex-direction: column;
}
#visitor {
  color: white;
   font-size: 18px;
   float: right;
   margin-right: 65px;
}
.footerfont a{
  font-size: 18px;
}
@media (max-width: 576px) {
   .footer a{
     font-size:10px;
   }
   #visitor {
     font-size:10px;}
}
</style>
<div class="footer">
    <div  style="background-color: rgb(204, 199, 199); height:7px;"></div>
  <p style="height: 10px;">
  <?php
  echo '<a href="option.php"><b>Home &emsp;&emsp;</b></a>';
  ?>
    <a href="../../footer options/support.php"><b>Support &emsp;&emsp;</b></a>
    <a href="../../footer options/contact.php"><b>Contact Us&emsp;&emsp;</b></a>
    <a href="../../footer options/team.php"><b>Team&emsp;&emsp;</b></a>
    <a href="../../footer options/guideline.php"><b>Guidelines&emsp;&emsp;</b></a>
    <?php
      $q=mysqli_query($con,"SELECT counter FROM visitor WHERE id=1");
      while($row = mysqli_fetch_array($q)) {
        $cnt = $row['counter'];
      echo '<div id="visitor"> Hits till date :'.$cnt.'</div>';
     
      
      }
    ?>
    <div class="footerfont">
    <a href="#top" style="float: left;margin-left:50px;"><i class="fa fa-caret-up" aria-hidden="true" style="color: white;"></i>&nbsp;Back to top</a>
    </div>
</p>
  <div  style="background-color: black; height:22px;"></div>
  <div  style="background-color: white; height:10px;"></div>
</div>