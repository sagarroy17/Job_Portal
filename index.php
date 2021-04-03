<?php
    
    session_start();
   
  $con=mysqli_connect('localhost','root','','job_portal');

if (isset($_POST['login']))
  {
    
    $lemail=$_POST['Lemail'];
    $lpassword=$_POST['lpass'];
    
    if(!empty($lemail) ){

        $queryStr = "SELECT * FROM users WHERE Email = '$lemail'";
        
        $lquery=mysqli_query($con, $queryStr);
        
         $login_fetch=mysqli_fetch_assoc($lquery);

            $email_from_db =  $login_fetch['Email'];
            $lpassword_from_db=$login_fetch['Password'];
            $luserType_from_db=$login_fetch['Chose_optn'];
            
           
    
         
         if( $email_from_db ==  $lemail && $lpassword_from_db ==  $lpassword )
         {
                
            
            $_SESSION['Email']=$lemail;
            

            if($luserType_from_db==0){

            header('Location:AdminHome.php');

            } elseif($luserType_from_db==1){
                header('Location:CompanyHome.php');
            }
            elseif($luserType_from_db==2){
                header('Location:JobSeekerHome.php');
            }
            

        
         }
         else {$lerror ='please enter valid email and password'; }
     }

  }

  
     



?>

















<!DOCTYPE HTML>
<html>
<head>
     <meta charset="UTF-8">
     <title>Login</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="style.css">


</head>
<body>
  
<header>
    <nav class ="navbar navbar navbar-expand-lg navbar-dark bg-dark">
    <br>
    <br>
    <a class="navbar-brand" href="index.php">JOB-PORTAL</a>

    <h2 style="color:white; margin-right:210px; font-size:10px">-লক্ষ বেকারের আস্থা..</h2>
    <br>
       
       <h3 style="color:white; margin-left:620px;font-size:15px">
         <?php  echo  date("d/m/Y")."<br>"; 
              
            echo  date("l");
            ?>
       </h3>
       
       
    
    <ul class="navbar-nav ml-auto">
        <li class ="nav-item">
            <a class="nav-link" href="">Contact Us</a>
        </li> 
         <li class="nav-item">
            <a class="nav-link" href="#">Our-Sponsor</a>
        </li>
    
            
    </ul>
    
    
    
    </nav>

</header>

<div class="contaner">
    <div class="col-10">
     
     <br>
     <h2 class= "text-center text-info"> Login Here</h2>
    <h3 class="text-danger">
    
          <?php
             if(isset($lerror))
             { 
                 echo $lerror;
             }
          ?>
        
        
        </h3>
    
        
        <form  action="" method="post">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" placeholder="Email" name="Lemail" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">password</label>
                <input type="password" placeholder="Enter your Password" name="lpass" class="form-control"/>
            </div>
            <div> 
            <button type="submit" name="login" class="btn btn-success" class="form-control">sign in</button>
           
              <a class="btn btn-outline-primary" href="Registration.php" >sign up</a>
       
      
            </div>
            






</body>