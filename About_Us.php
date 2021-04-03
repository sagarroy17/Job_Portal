<?php
   session_start();
    if(!isset($_SESSION['Email'])){
     header('Location:index.php');
     exit();

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
            <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
        </li>
       
            
    </ul>
    
    
    
    </nav>
   
   
    
    
    </div>
    <br>
    
       <div> <a class="btn btn-outline-danger " style="margin-left: 10px;" href="Logout.php" >Logout</a>
       
       </div>

</header>
 <br>
  <div class="contaner">
     <div class="">
            <h1 class= "text-md-center text-info ">About-Us</h1>
             
        <br>
            
        <form  action="">
        
     <p class="text-md text-center"> Learn more about the team maintaining Job-portal, how and why the project started, and how to get involved.</p>

      <div>
      <h2 class= "text-md-center text-info ">TEAM</h2>
      

      <p class="text-md text-center font-weight-light "> This Job-Portal is maintained by a small team of developers on GitHub.We are 4 developers working for this portal 
      Tanvir Hossain ,Jobayer Hayder Mishel ,Anik Dey ,Sagor Roy</p>

      </div>

     </form>
  
   
   <br>
    
    
     
  </div>





</body>















</html>