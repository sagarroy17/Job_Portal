<?php
  

  $con=mysqli_connect('localhost','root','','job_portal');

if (isset($_POST['registration']))
  {
    $name=$_POST["fullname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $phone=$_POST["enter_PhoneNo"];
    if(isset($_POST["userType"])){
    $role=$_POST["userType"];}

  
   
     if(!empty($name) && !empty($email) && !empty($password) && !empty($phone) &&!empty($role)){
        $queryString = "INSERT INTO users(Full_name,Email,Password,Phone,Chose_optn)
        VALUES('$name', '$email', '$password','$phone','$role')";
        $query=mysqli_query($con, $queryString);
           if($query){ $success='YOUR REGISTRATION DONE';}

      } else{

        $error='please fillup the required field';
    } 

  }






?>






<!DOCTYPE HTML>
<html>
<head>
     <meta charset="UTF-8">
     <title>Registration</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

     


</head>
<body>
<header>
    <nav class ="navbar navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="Registration.php">JOB-PORTAL</a>

    <h2 style="color:white; margin-right:210px; font-size:10px"> -লক্ষ বেকারের আস্থা..</h2>
    <br>
     
    <ul class="navbar-nav ml-auto">
        <li class ="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link" href="index.php">Login</a>
        </li>
        
            
    </ul>
    
    
    
    </nav>

</header>
<br>
  <div class="contaner">
    <div class="col-10">
    <h1 class= "text-center text-info"> Registration Here</h1>
        <h3 class="text-danger">
          <?php
             if(isset($error))
             { 
                 echo $error;
             }
          ?>
        
        
        </h3>
        
        <h3 class="text-INFO">
          <?php
             if(isset($success))
             { 
                 echo $success;
             }
          ?>
        
        
        </h3>
        <form  action="" method="POST">
            <div class="form-group">
                <label for="">Full Name/Comany Name</label>
                <input type="text" placeholder="Full Name/Company Name" name="fullname" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" placeholder="@example.com" name="email" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Enter Password</label>
                <input type="password" placeholder="Enter a strong password" name="password" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="tel" placeholder="Enter Your phone Number " name="enter_PhoneNo" class="form-control"
               />
            </div>
            <div class="form-group">
                <label for="" class="text-info">Register as a  :</label>
                <input type="radio"  name="userType" value="1"/> Company | 
               <input type="radio"  name="userType" value="2" /> Job-seeker
            </div>
            
              <br>
            <div class="form-group">
             <input type="submit" name="registration"  value="Sign up" class="btn btn-success"/>
            </div>
     </div>
        </form>
  
  </div>





</body>















</html>