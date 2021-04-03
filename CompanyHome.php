<?php
   session_start();
    if(!isset($_SESSION['Email'])){
     header('Location:Login.php');
     exit();

   }




?>




<!DOCTYPE HTML>
<html>
<head>
     <meta charset="UTF-8">
     <title>JOBPORTAL</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     



   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="style.css">
     


</head>
<body>
<header>
    <nav class ="navbar navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="CompanyHome.php">JOB-PORTAL</a>


    <h2 style="color:white; margin-right:200px; font-size:10px" > -লক্ষ বেকারের আস্থা..</h2>
    <br>

    
    <h3 style="color:white; margin-left:550px;font-size:15px">
         <?php  echo  date("d/m/Y")."<br>"; 
            echo  date("l");
            ?>
       </h3>
     
    <ul class="navbar-nav ml-auto">
        <li class ="nav-item">
            <a class="nav-link" href="CompanyProfile.php">Profile</a>
        </li>
        <li class="nav-itinfoem">
            <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="About_Us.php">About us</a>
        </li>
            
    </ul>
    
    
    
    </nav>
   
    <br>
    
    <div> <a class="btn btn-outline-danger " style="margin-left: 10px;" href="Logout.php" >Logout</a>
       
       </div>

</header>

  <div class="contaner">
     <div class="">
         <div class="type">
            <h1 class= " ">Welcome to our professional community...</h1>
        </div> 
        <br>
        <br>
            
        <form  action="">
      
        
                        
            <div class="row">
                          
                        <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bolder">Post a Job</h5>
                                        <p class="card-text  font-weight-light">Post your job and find the people you need.</p>
                                        <a href="Post_job.php" class="btn btn-outline-info">Click Here</a>
                                    </div>
                                </div>
                        </div>
                        <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bolder">Set-Profile</h5>
                                        <p class="card-text  font-weight-light">Set Your profile as a company</p>
                                        <a href="Set-CompanyProfile.php" class="btn btn-outline-info">Click Here</a>
                                    </div>
                                </div>
                        </div>
                    </div>       
           </div>

<br>
           
     </form>
  
   
   
    
    
     
  </div>





</body>















</html>