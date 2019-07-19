<!-- id01 is student login 
id02 is admin login 
id03 is forgot password-student
id03 is forgot password-admin 

------------------------
4 pages for before login 

index.html
null_analysis.php
graphs/bef_login_graph.php
contact_before.html

-->


<?php
require("functions.php");
?>


<!DOCTYPE html>

<html lang="">
<script> 
  
var modal4 = document.getElementById('id04'); 
window.onclick = function(event) { 
    if (event.target == modal4) { 
        modal4.style.display = "none"; 
    } 
} 


var modal2 = document.getElementById('id02'); 
window.onclick = function(event) { 
    if (event.target == modal2) { 
        modal2.style.display = "none"; 
    } 
}  
</script> 

<head>
<title>Record Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="layout/styles/login.css"> 
<link rel="stylesheet" type="text/css" href="analysisdesign.css"> 

<style>
  footer{

  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  #A2B70D
  text-align: center;
  height:max-content;
}
  </style>


</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay"  > 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
      <h1>
            <img   class ="logo2"  height="80" width="80" src="images/demo/logo2.png">   
            <a href="#">Departmental Record Book</a>            <img   class ="logo1"  height="80" width="80" src="images/demo/logo1.png"> 
          </h1>        </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
        <!--   <li><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="pages/gallery.html">Gallery</a></li>
              <li><a href="pages/full-width.html">Full Width</a></li>
              <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
              <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            </ul>
          </li> -->
          <li><a class="drop" href="#">Analysis</a>
            <ul>
              <li><a href="null_analysis.php">Tabular</a></li>
           
              <li><a href="graphs/bef_login_graph.php">Graphical</a></li>
            </ul>
          </li>
          <li><a   onclick="document.getElementById('id02').style.display='block'" style="width:auto;"  href="#">Admin</a></li>
          <li><a href="contact_before.html">Help</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <section id="pageintro" class="hoc clear">
    <div> 
      <!-- ################################################################################################ -->


<!-- ADMIN MODAL -->
<div id="id02" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="php/registered_admin.php"> 
    <div class="imgcontainer"> 
		<h3 style="color:black;">ADMIN LOGIN</h3><br>
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="images/demo/avatar.png" alt="Avatar" class="avatar">
      
    </div> 
   
  
    <div class="container"> 
      <label style="color: black;"><b>Username</b></label> 
      <input type="text" name="uname"  placeholder="SVV id" required> 
  
      <label style="color: black;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" style="color:black"  name="pword"  required> 
          
      <button type="submit">Login</button> 
     <!--  <input type="checkbox" checked="checked"> Remember me  -->
    </div> 
  
    <div class="container" style="background-color:#f1f1f1"> 

      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button> 
      
      <span class="psw"><a onclick="document.getElementById('id04').style.display='block' ; document.getElementById('id02').style.display='none' " style="width:auto;">Forgot password?/New User?</a></span> 
    </div> 
  </form> 
</div> 

<div id="id04" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="php/forgot_admin.php"> 
    <div class="imgcontainer"> 
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="images/demo/avatar.png" alt="Avatar" class="avatar">
      
    </div> 
   
  
    <div class="container"> 
      <label style="color: black;"><b>Username</b></label> 
      <input type="text" name="svv"  placeholder="SVV id" required> 
  
      <button type="submit">Email Password</button> 
     <!--  <input type="checkbox" checked="checked"> Remember me  -->
    </div> 
  
    <div class="container" style="background-color:#f1f1f1"> 

      <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button> 
      
    </div> 
  </form> 
</div> 

     <!--  table starts -->
     <div class="search1">

  

<!-- <font color="white" align="center" style="margin-left:220px" size="75px" > Overall </font> -->
<center>
<h2 style=" margin-top: -111px; font-size: 30px; padding-bottom: 26px;" >Tabular Analysis</h2>

</center>
  

  

<table>
    <tr>
      <th style="color:white;">Categories      </th>
      <th style="color:white;">First Year</th>
      <th style="color:white;"> Second Year</th>
         
      <th style="color:white;">Third Year</th>
      <th style="color:white;">Fourth Year</th>
    </tr>
    
    <tr>
    
    
      <th style="color:white;">Workshops</th>
      <td>
         <?php 
  
    $ct=getcount(1,2,1);
    echo $ct; 

?>
</td>
       <td>
         <?php 
  
$ct=getcount(3,4,1);
echo $ct;

?>
</td>
<td>
         <?php 
  
$ct=getcount(5,6,1);
echo $ct;

?>
</td>
<td>
         <?php 

  $ct=getcount(7,8,1);
echo $ct;  

?>
</td>
    </tr>
    <tr>
      <th style="color:white;">Courses</th>
      <td>
         <?php 
 
$ct=getcount(1,2,2);
echo $ct;

?></td>
  <td>
         <?php 
  
$ct=getcount(3,4,2);
echo $ct;

?></td>
  <td>
         <?php 
 
$ct=getcount(5,6,2);
echo $ct;

?></td>
  <td>
         <?php 
 
$ct=getcount(7,8,2);
echo $ct;

?></td>

</tr>
    
    

  <tr>
      <th style="color:white;">TPP</th>
      
      <td>
         <?php 
  
$ct=getcount(1,2,3);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(3,4,3);
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getcount(5,6,3);
echo $ct;

?></td>
  <td>
         <?php 
  
$ct=getcount(7,8,3);
echo $ct;

?></td>





</tr>
  <tr>
      <th style="color:white;">Sports</th>
      <td>
         <?php 
  
 $ct=getcount(1,2,4);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(3,4,4);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(5,6,4);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(7,8,4);
echo $ct;

?></td>

</tr>
  <tr>
      <th style="color:white;">Competitions</th>
      <td>
         <?php 
  
 $ct=getcount(1,2,5);
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getcount(3,4,5);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(5,6,5);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(7,8,5);
echo $ct;

?></td>

</tr>


  <tr>
      <th style="color:white;">Other Activities</th>
            <td>
         <?php 
  
 $ct=getcount(1,2,6);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(3,4,6);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(5,6,6);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(7,8,6);
echo $ct;

?></td>
</tr>
</table>

</center>
</div>

<!-- table ends -->
      
  
<div id="id01" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="php/registered_user.php"> 
    <div class="imgcontainer"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="images/demo/avatar.png" alt="Avatar" class="avatar">
      
    </div> 
   
  
    <div class="container"> 
      <label style="color: black;"><b>Username</b></label> 
      <input type="text" name="uname"  placeholder="SVV id" required> 
  
      <label style="color: black;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" style="color:black"  name="pword"  required> 
          
      <button type="submit">Login</button> 
     <!--  <input type="checkbox" checked="checked"> Remember me  -->
    </div> 
  
    <div class="container" style="background-color:#f1f1f1"> 

      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
      
      <span class="psw"><a href="#">Forgot password?/New User?</a></span> 
    </div> 
  </form> 
</div> 
 </div>




      <!-- ################################################################################################ -->
   
  </section>
  <!-- ################################################################################################ -->
</div>

<footer class="page-footer font-small special-color-dark pt-4">

<p style="font-size: 20px"> For any further queries Email us at admin@somaiya.edu </p>

<a href="contact_before.php" style="font-size: 20px">Click here for general FAQs</a>
<!--
<div class="vl"></div>
-->
</footer>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>