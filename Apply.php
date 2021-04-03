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
    <a class="navbar-brand" href="Apply.php">JOB-PORTAL</a>
    <h2 style="color:white; margin-right:210px; font-size:10px">-লক্ষ বেকারের আস্থা..</h2>
    
    <h3 style="color:white; margin-left:520px; font-size:15px">
         <?php  echo  date("d/m/Y")."<br>"; 
              
            echo  date("l");
            ?>
       </h3>
    <br>
     
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
    
    <div> <a class="btn btn-outline-danger " style="margin-left: 10px;" href="Logout.php" >Logout</a>
       
       </div>

</header>

  <div class="contaner">
     <div class="">
         <div class="type">
            <h1 style="margin-left:200px;">Apply Here</h1>
        </div> 
        <br>
        <br>
        <br>
            
        <form action="" style="margin-left: 10px;margin-right: 30px;">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Educational Institution</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Department</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Computer-Science</option>
        <option>BBA</option>
        <option>EEE</option>
        <option>IPE</option>
        <option>ETE</option>
        <option>Islamic-Studies</option>
        
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip"></label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  
   
   
    
    
     
  </div>





</body>















</html>