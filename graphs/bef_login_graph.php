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


<!-- Changed this after cloning -->

<?php
require("../functions.php");
?>


<!DOCTYPE html>

<html lang="">
<script> 
  
var modal2 = document.getElementById('id02'); 
window.onclick = function(event) { 
    if (event.target == modal2) { 
        modal2.style.display = "none"; 
    } 
}  
var modal4 = document.getElementById('id04'); 
window.onclick = function(event) { 
    if (event.target == modal4) { 
        modal4.style.display = "none"; 
    } 
} 
</script> 


<head>
<title>Record Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="../layout/styles/login.css"> 
 


  <script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>

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
            <img   class ="logo2"  height="80" width="80" src="../images/demo/logo2.png">   
            <a href="#">Departmental Record Book</a>
            <img   class ="logo1"  height="80" width="80" src="../images/demo/logo1.png"> 
          </h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="../index.html">Home</a></li>
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
              <li><a href="../null_analysis.php">Tabular</a></li>
           
              <li><a href="#">Graphical</a></li>
            </ul>
          </li>
          <li><a  onclick="document.getElementById('id02').style.display='block'" style="width:auto;"  href="#">Admin</a></li>
          <li><a href="../contact_before.html">Help</a></li>
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


<!-- ADMIN MODAL -->
<div id="id02" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="../php/registered_admin.php"> 
    <div class="imgcontainer"> 
		<h3 style="color:black;">ADMIN LOGIN</h3><br>
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="../images/demo/avatar.png" alt="Avatar" class="avatar">
      
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
      
 <span class="psw"><a onclick="document.getElementById('id04').style.display='block' ; document.getElementById('id02').style.display='none' " style="width:auto;">Forgot password?/New User?</a></span>     </div> 
  </form> 
</div> 

<div id="id04" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="../php/forgot_admin.php"> 
    <div class="imgcontainer"> 
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="../images/demo/avatar.png" alt="Avatar" class="avatar">
      
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
<div class="box">
 <h3>Graphical Analysis</h3>


<center>


<table style="background-color: transparent; border-color: transparent;">
  <tr style="background-color: transparent; border-color: transparent;">
<td style="border-color: transparent;"> <button type="button"  id="clickws"    onclick="ws()" class="button1">Workshop</button></td>
    <td style="border-color: transparent;"><button type="button" id="clicktpp"    onclick="tppf()"class="button1">TPP</button></td>
   
<td style="border-color: transparent;"><button type="button"  id="clickcourse"    onclick="coursesf()"class="button1" >Courses</button></td>
    <td style="border-color: transparent;"> <button type="button"  id="clicksports"    onclick="sportsf()" class="button1">Sports</button></td>
<td style="border-color: transparent;"><button type="button" id="clickoa"    onclick="other_activitiesf()"class="button1" >Other Activity</button></td>
    <td style="border-color: transparent;"> <button type="button"  id="clickcomp"    onclick="competitionsf()"class="button1" >Competition</button></td>
</tr>
</table>

   <div class="results2">
       <div id="graph_container" style="width: 500px;height: 300px;margin-left: 9px;margin-top: 45px;"></div>


      <script  >


              
                    var wsvar;
                    var tppvar;
                    var coursevar;
                    var sportsvar;
                    var oavar;
                    var compvar;

          function ws() {
            document.getElementById("graph_container").innerHTML = "";
            
            wsvar = setTimeout(workshop, 0);
          }

          function tppf() {
            document.getElementById("graph_container").innerHTML = "";
            
            tppvar = setTimeout(tpp, 0);
          }
          function coursesf(){
            document.getElementById("graph_container").innerHTML = "";
             coursevar = setTimeout(courses, 0);

          }
          function sportsf(){
            document.getElementById("graph_container").innerHTML = "";
             sportsvar = setTimeout(sports, 0);

          }
          function other_activitiesf(){
            document.getElementById("graph_container").innerHTML = "";
             oavar = setTimeout(other_activities, 0);

          }
           function competitionsf(){
            document.getElementById("graph_container").innerHTML = "";
             compvar = setTimeout(competitions, 0);

          }
    
    

          function workshop(){



           anychart.onDocumentReady(function() {
 
        // set the data
        //Workshops
        var fe_ws=<?php echo json_encode(getcount(1,2,1));?>;
        var se_ws=<?php echo json_encode(getcount(3,4,1));?>;
        var te_ws=<?php echo json_encode(getcount(5,6,1));?>;
        var be_ws=<?php echo json_encode(getcount(7,8,1));?>;

        var data = {
            header: ["YEAR", "NUMBER"],
            rows: [
              ["FE", fe_ws],
              ["SE", se_ws],
              ["TE", te_ws],
              ["BE", be_ws]
        ]};
 
        // create the chart
       var chart = anychart.column();
      chart.data(data);
      chart.title("Workshops Attended ");
      chart.container("graph_container");
      chart.draw();
            });
        } 

          
            function tpp(){

        
        //TPP
              anychart.onDocumentReady(function() {
         
                // set the data
                var fe_ws=<?php echo json_encode(getcount(1,2,3));?>;
                var se_ws=<?php echo json_encode(getcount(3,4,3));?>;
                var te_ws=<?php echo json_encode(getcount(5,6,3));?>;
                var be_ws=<?php echo json_encode(getcount(7,8,3));?>;

                var data = {
                    header: ["YEAR", "NUMBER"],
                    rows: [
                      ["FE", fe_ws],
                      ["SE", se_ws],
                      ["TE", te_ws],
                      ["BE", be_ws]
                ]};
         
                // create the chart
               var chart = anychart.column();
              chart.data(data);
              chart.title("Technical Papers Presented");
              chart.container("graph_container");
              chart.draw();
                    });
        }

              function courses(){
         //courses
        anychart.onDocumentReady(function() {
   
          // set the data
          var fe_cs=<?php echo json_encode(getcount(1,2,2));?>;
          var se_cs=<?php echo json_encode(getcount(3,4,2));?>;
          var te_cs=<?php echo json_encode(getcount(5,6,2));?>;
          var be_cs=<?php echo json_encode(getcount(7,8,2));?>;

          var data = {
              header: ["YEAR", "NUMBER"],
              rows: [
                ["FE", fe_cs],
                ["SE", se_cs],
                ["TE", te_cs],
                ["BE", be_cs]
          ]};
   
          // create the chart
         var chart = anychart.column();
        chart.data(data);
       
        chart.title("Courses Studied ");
        chart.container("graph_container");
      chart.draw();
              });
        }

              function competitions(){
        
                            //competition
          anychart.onDocumentReady(function() {
     
            // set the data
            var fe_ws=<?php echo json_encode(getcount(1,2,5));?>;
            var se_ws=<?php echo json_encode(getcount(3,4,5));?>;
            var te_ws=<?php echo json_encode(getcount(5,6,5));?>;
            var be_ws=<?php echo json_encode(getcount(7,8,5));?>;

            var data = {
                header: ["YEAR", "NUMBER"],
                rows: [
                  ["FE", fe_ws],
                  ["SE", se_ws],
                  ["TE", te_ws],
                  ["BE", be_ws]
            ]};
     
            // create the chart
           var chart = anychart.column();
          chart.data(data);
          chart.title("Competition Participation ");
          chart.container("graph_container");
          chart.draw();
                });
        }

              function sports(){
         
                          //Sports
          anychart.onDocumentReady(function() {
     
            // set the data
            var fe_ws=<?php echo json_encode(getcount(1,2,4));?>;
            var se_ws=<?php echo json_encode(getcount(3,4,4));?>;
            var te_ws=<?php echo json_encode(getcount(5,6,4));?>;
            var be_ws=<?php echo json_encode(getcount(7,8,4));?>;

            var data = {
                header: ["YEAR", "NUMBER"],
                rows: [
                  ["FE", fe_ws],
                  ["SE", se_ws],
                  ["TE", te_ws],
                  ["BE", be_ws]
            ]};
     
            // create the chart
           var chart = anychart.column();
          chart.data(data);
          chart.title("Sports Played ");
          chart.container("graph_container");
          chart.draw();
                });
        }

              function other_activities(){
          //Other activities
          anychart.onDocumentReady(function() {
     
            // set the data
            var fe_ws=<?php echo json_encode(getcount(1,2,6));?>;
            var se_ws=<?php echo json_encode(getcount(3,4,6));?>;
            var te_ws=<?php echo json_encode(getcount(5,6,6));?>;
            var be_ws=<?php echo json_encode(getcount(7,8,6));?>;

            var data = {
                header: ["YEAR", "NUMBER"],
                rows: [
                  ["FE", fe_ws],
                  ["SE", se_ws],
                  ["TE", te_ws],
                  ["BE", be_ws]
            ]};
     
            // create the chart
           var chart = anychart.column();
          chart.data(data);
          chart.title("Other Activities ");
          chart.container("graph_container");
          chart.draw();
                });
        }
                   





                    

                  



                    
                    </script>

                    </div>




</center>
  



<!-- table ends -->
      
  
<footer class="page-footer font-small special-color-dark pt-4">

<p style="font-size: 20px"> For any further queries Email us at admin@somaiya.edu </p>

<a href="contact_before.php" style="font-size: 20px">Click here for general FAQs</a>
<!--
<div class="vl"></div>
-->
</footer>
 





      <!-- ################################################################################################ -->
   </div>
   </div>
  </section>
  <!-- ################################################################################################ -->
</div>

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