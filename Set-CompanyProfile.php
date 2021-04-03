<?php
   session_start();
    if(!isset($_SESSION['Email']) ){
     header('Location:index.php');
     exit();

   }
  


   $con=mysqli_connect('localhost','root','','job_portal');

   if (isset($_POST['save']))
     {
       $Company_name=$_POST["cn"];
       $who=$_POST["Who-we-are"];
       $locate=$_POST["Location"];
       $Goal=$_POST["textArea"];
      
      
       $userEmail= $_SESSION['Email'];
       
      if($userEmail){
     
      
        if(!empty($Company_name) && !empty($who)  && !empty($locate) && !empty($Goal)){
         
            

           $CPqueryString = "INSERT INTO companyprofile(Name,who_we_are,location ,our_goals)
           VALUES('$Company_name', '$who', '$locate', ' $Goal')";

           $pquery=mysqli_query($con, $CPqueryString);

              if($pquery){ $success='Your Profile is published successfully';}
   
         } else{
   
           $error='please fillup the required field';
       } 

    }

   
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
    <a class="navbar-brand" href="#">JOB-PORTAL</a>

    <h2 style="color:white; margin-right:210px; font-size:10px">-লক্ষ বেকারের আস্থা..</h2>
    <br>
       
       <h3 style="color:white; margin-left:550px;font-size:15px">
         <?php  $pik=  date("d/m/Y")."<br>"; 
                echo $pik;
            echo  date("l");
            ?>
       </h3>
     
    <ul class="navbar-nav ml-auto">
       
        <li class="nav-itinfoem">
            <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="CompanyHome.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="About_Us.php">About-Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact-Us</a>
        </li>
            
    </ul>
    
    
    
    </nav>
   
    <br>
    
    <div> <a class="btn btn-outline-danger " style="margin-left: 10px;" href="Logout.php" >Logout</a>
       
       </div>

</header>
<br>
        <div  style="margin-left: 520px;">
            <h1 class= " text-info"> Set-Profile</h1>
        </div>

        <h3 class="text-danger" style="margin-left: 10px;">
          <?php
             if(isset($error))
             { 
                 echo $error;
             }
          ?>
          </h3>

          <h3 class="text-INFO" style="margin-left: 10px;">
          <?php
             if(isset($success))
             { 
                 echo $success;
             }
             
          ?>
          </h3>

        <br>
        <br>
        
  <div class="contaner">
     <div class="">

        <form  action="" style="margin-left: 10px;margin-right: 30px;" method="POST">
         <div class="form-group">
            <label for="" >Company-name</label>
            <input class="form-control" type="text" placeholder="Company-Name"  name="cn">
         </div>
         <div class="form-group">
            <label for="exampleFormControlTextarea1">Who We Are</label>
            <textarea type ="text"class="form-control" name="Who-we-are" ></textarea>
        </div>
        <div class="">
            <label for="" class="sr-only">Location</label>
            <input type="text" class="form-control" name="Location" placeholder="Location">

       </div>
        <div class="form-group">
             <label for="exampleFormControlTextarea1">Our-Goals</label>
            <textarea type ="text"class="form-control" name="textArea" ></textarea>
        </div>
        <div class="form-group">
        <input type="submit" name="save"  value="save" class="btn btn-success"/>
        <div>
                

             
            
  
        
        
        
        </form>
    </div>     
        
</div>





</body>















</html>