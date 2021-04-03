<?php
   session_start();
    if(!isset($_SESSION['Email'])){
     header('Location:index.php');
     exit();

   }

   $con=mysqli_connect('localhost','root','','job_portal');




  
    $userEmail= $_SESSION['Email'];
    


    
  
    if (isset($_GET['view']))
  {
  
       $id=$_GET['view'];

    $nquery=mysqli_query($con, "SELECT * FROM users WHERE Email= '$userEmail'");

  
   
   
   $ShowFech=mysqli_fetch_assoc($nquery);

  }

  

    
       


?>

<!DOCTYPE HTML>
<html>
<head>
     <meta charset="UTF-8">
     <title>JOBPORTAL</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     
     




</head>
<body>
<header>
    <nav class ="navbar navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="About_Us.php">JOB-PORTAL</a>
    <h2 style="color:white; margin-right:200px; font-size:10px"> -লক্ষ বেকারের আস্থা..</h2>
    <br>
    <h3 style="color:white; margin-left:665px;font-size:15px">
         <?php  echo  date("d/m/Y")."<br>"; 
            echo  date("l");
            ?>
       </h3>
     
     
    <ul class="navbar-nav ml-auto">
        <li class ="nav-item">
            <a class="nav-link" href="jobseekerHome.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
        </li>
       
            
    </ul>
    
    
    
    </nav>
   
   
    
    
       </div>

</header>
 <br>
  <div class="contaner">
     <div class="">
            <h1 class= "text-md-center text-info "><?php 
            
            echo $ShowFech['Full_Name']; ?></h1>
             
        <br>
        
            
        <form  action="">
        <div>
        <h2 class= "text-md-center text-info ">-Who We are-</h2>
        
     <p class="text-md text-center"><?php echo $ShowFech['Email']; ?> </p>
      </div>
      <div>
      <h2 class= "text-md-center text-info ">Our-Goals</h2>
      

      <p class="text-md text-center font-weight-light "><?php echo $ShowFech['Name']; ?></p>

      </div>

      <div>
      <h2 class= "text-md-center text-info ">Location</h2>
      

      <p class="text-md text-center font-weight-light "><?php echo $ShowFech['location']; ?></p>

      </div>

     </form>
  
   
   <br>
    
  </div>

</body>
</html>