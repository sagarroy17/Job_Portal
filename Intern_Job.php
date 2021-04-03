<?php
   session_start();
    if(!isset($_SESSION['Email'])){
     header('Location:index.php');
     exit();

   }
  
   $con=mysqli_connect('localhost','root','','job_portal');

  
    
  
  
   
   $nquery=mysqli_query($con, "SELECT * FROM post_job");
   $ShowFech=mysqli_fetch_all($nquery);
   
   




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
    <a class="navbar-brand" href="Intern_Job.php">JOB-PORTAL</a>




    <h2 style="color:white; margin-right:210px; font-size:10px">-লক্ষ বেকারের আস্থা..</h2>
    <br>
       
       <h3 style="color:white; margin-left:520px; font-size:15px">
         <?php  echo  date("d/m/Y")."<br>"; 
              
            echo  date("l");
            ?>
       </h3>
     
    <ul class="navbar-nav ml-auto">
        <li class ="nav-item">
            <a class="nav-link" href="#">Community</a>
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
    
    <div> <a class="btn btn-outline-danger " style="margin-left: 10px;" href="Logout.php">Logout</a>
       
       </div>

</header>

  <div class="contaner">
           <div class="type">
                <h1 class= " "> Search Your Job's & Intern Here...</h1>
            </div> 
        
        <br>
        <br>
            
        <form  action="">
      
       
         <?php 
         foreach($ShowFech as $single): ?>                    
                 
            <div class="card " style="margin-left: 20px; margin-right: 20px;">
                                
                                <div class="">
                                    <h5 class="card-title"><?php echo $single['1']; ?></h5>
                                    <h5 class="text-muted"><?php echo $single['4']; ?></h5>
                                    <p class="text-justify" style="margin-left: 230px;"><?php echo $single['3']; ?></p>
                                    <h5 class="text-muted">
                                    <?php  
                                        echo $single['2'];
                                    ?>
                                    
                                    </h5>
                                 
                                    <h5 class="text-muted"><?php echo "job-posted:". $single['5']; ?></h5>

                                    <a href="Apply.php" class="btn btn-outline-info">Apply</a>
                                                               
                                </div>
                                
         </div>
                
        <br>         
                       
            <?php endforeach;?>

                 
           
     </form>
  
   
   
    
    
     
  </div>





</body>















</html>