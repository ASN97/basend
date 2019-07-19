<!-- background image not seen -->
<?php
session_start();
require("../functions.php");
 


if(isset($_SESSION['username'])){

    $usersData = getUsersData(getId($_SESSION['username']));

  

$rn=$usersData['rollno']; 
}

if (isset($_GET['deloa'])) {
    $filename=$_GET['deloa'];
    $sql="delete from other where filename='$filename'";
    if (mysqli_query($conn, $sql)) {
      // echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
  }
  
  
  
    if (isset($_GET['delcomp'])) {
    $filename=$_GET['delcomp'];
    $sql="delete from competition where filename='$filename'";
    if (mysqli_query($conn, $sql)) {
      // echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
  }
  
  
  
   if (isset($_GET['delsports'])) {
    $filename=$_GET['delsports'];
    $sql="delete from sports where filename='$filename'";
    if (mysqli_query($conn, $sql)) {
      // echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
  
  }
  
   if (isset($_GET['deltpp'])) {
    $filename=$_GET['deltpp'];
    $sql="delete from tpp where filename='$filename'";
    if (mysqli_query($conn, $sql)) {
      // echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
  
  }
  
  
  
   if (isset($_GET['delcourse'])) {
    $filename=$_GET['delcourse'];
    $sql="delete from course where filename='$filename'";
    if (mysqli_query($conn, $sql)) {
      // echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
  
  
  }
  
  
   if (isset($_GET['delws'])) {
   // echo "Hi";
    $filename=$_GET['delws'];
    $sql="delete from workshop where filename='$filename'";
    echo "$filename";
    if (mysqli_query($conn, $sql)) {
      // echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
  }
  


?>

<!DOCTYPE html>
<!--
Template Name: Basend
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->


<html lang="">
<head>
<title>Record Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">


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
<div class="bgded overlay"   > 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
      <h1>
            <img   class ="logo2"  height="80" width="80" src="../images/demo/logo2.png">   
            <a href="#">Departmental Record Book</a>            <img   class ="logo1"  height="80" width="80" src="../images/demo/logo1.png"> 
          </h1>       </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="../home.php">Home</a></li>
          <li><a class="drop" href="#">Add Activity</a>
            <ul>
              <li><a href="../workshop.php">Workshop</a></li>
              <li><a href="../course.php">Course</a></li>
              <li><a href="../tpp.php">TPP</a></li>
              <li><a href="../competition.php">Competition</a></li>
              <li><a href="../sports.php">Sports</a></li>
              <li><a href="../other_activity.php">Other Activity</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">View Progress</a>
            <ul>
              <li><a href="my_workshop.php">Workshop</a></li>
              <li><a href="my_course.php">Course</a></li>
              <li><a href="my_tpp.php">TPP</a></li>
              <li><a href="my_competition.php">Competition</a></li>
              <li><a href="my_sports.php">Sports</a></li>
              <li><a href="my_other.php">Other Activity</a></li>
            </ul>
          </li>
            <li><a class="drop" href="#">Analysis</a>
            <ul>
              <li><a href="../student_analysis.php">Tabular</a></li>
              <li><a href="../student_graphical.php">Graphical</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Other</a>
            <ul>
              <li><a class="drop" href="#">View</a>
               <ul>
                  <li><a href="../php/view_workshop.php">Workshop</a></li>
                  <li><a href="../php/view_course.php">Course</a></li>
                  <li><a href="../php/view_tpp.php">TPP</a></li>
                   <li><a href="../php/view_competition.php">Competition</a></li>
                  <li><a href="../php/view_sports.php">Sports</a></li>
                  <li><a href="../php/view_otheractivity.php">Other Activity</a></li>
                </ul>
                </li>
              <li><a href="../feedback_s.php">Contact Us</a></li>
              <li><a href="../contact_after.php">Help</a></li>
              <li><a href="../changepass.php">Change Password</a></li>
              <li><a href="../logout.php">Logout</a></li>
            </ul>
          </li>
         
     
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>

<div >
  <main class="hoc container clear"> 



    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
     

<!--       TABLE STARTS -->
<h1>Courses Completed</h1>
 </div>
<?php
  $sql = "select * from course where rollno=$rn";
  $results=mysqli_query($conn,$sql);
   if ($results->num_rows > 0)
{  
//   if (isset($_GET['pageno'])) {
//             $pageno = $_GET['pageno'];
//         } else {
//             $pageno = 1;
//         }
//         $no_of_records_per_page = 5;
//         $offset = ($pageno-1) * $no_of_records_per_page;
// $total_pages_sqls = "SELECT COUNT(*) FROM course";
//         $results = mysqli_query($conn,$total_pages_sqls);
//         $total_rows = mysqli_fetch_array($results)[0];
//         $total_pages = ceil($total_rows / $no_of_records_per_page);

//         $sql = "SELECT * FROM course where rollno= $rn LIMIT $offset, $no_of_records_per_page";
//         $results = mysqli_query($conn,$sql);
  ?>

    <table style="margin-top:40px; margin-left: 20px" border="3" solid white>

      <tr><th>ROLL NO</th><th>NAME</th><th>COURSE NAME</th><th>INSTITUTE/WEBSITE</th><th>START&nbsp&nbspDATE</th><th>END&nbsp&nbspDATE</th><th>CERTIFICATE</th><th>OPTIONAL IMAGE</th><th>DELETE</th></span></tr>

<?php
  while ($line = mysqli_fetch_array($results, MYSQLI_ASSOC)) {

  

      
  echo "<tr><td > <span style='color:#000000;'>  ". $line['rollno']."
  </td><td>  <span style='color:#000000;'> ". $line['name']."
    </td><td>  <span style='color:#000000;'> ". $line['name_c']."
    </td><td>  <span style='color:#000000;'> ". $line['insti']."
    </td><td>  <span style='color:#000000;'> ". $line['start_date']." 
    </td><td>  <span style='color:#000000;'> ". $line['end_date']." 
    </td><td>  ";


      $fn =$line['filename'];
      $files= scandir("../uploads/courses");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>

       

        <p>
          <a style='color:#000000;' href="../uploads/courses/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }


      }
	  echo "</td><td>";
	  
      $fn1 =$line['filename1'];
      $files= scandir("../uploads/opt_courses");
      for($a =2;$a <count($files);$a++){

        if($fn1==$files[$a])
        {


        ?>

       

        <p>
          <a style='color:#000000;' href="../uploads/opt_courses/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }


      }
echo "</td><td><a href='my_course.php?delcourse=$fn' onClick=\"return confirm('Are you sure you want to delete this ?');\"><button type='submit' name='delete' class='del-btn'><i class='fa fa-trash'></i></button></a></td></tr>";

   }  
  
?>

<!--  <a href="?pageno=1"><font color="white" size="4"><- First</font></a>
        
    &nbsp&nbsp&nbsp&nbsp&nbsp;
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"><font color="white" size="4">Prev</font></a>
       &nbsp&nbsp&nbsp&nbsp&nbsp;
       
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>"><font color="white" size="4">Next</font></a>
      &nbsp&nbsp&nbsp&nbsp&nbsp;
       <a href="?pageno=<?php echo $total_pages; ?>"><font color="white" size="4">Last -></font></a> -->
	   
	   <?php   
  }
  else
  {
    echo "<center><font size='3' color='white'> NO ENTRIES FOUND </font></center>";
  }
  

?>
</table>

  
  
     
<!-- TABLE ENDS -->
      
    </div>

 
   
  </main>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    

</div>

</div><!--  background image tag -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


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