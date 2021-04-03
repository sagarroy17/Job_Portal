<?php
   session_start();
    if(!isset($_SESSION['Email'])){
     header('Location:index.php');
     exit();

   }
  


   $con=mysqli_connect('localhost','root','','job_portal');

   if (isset($_POST['Post']))
     {
       $title=$_POST["title"];
       $txtarea=$_POST["textArea"];
       $CN=$_POST["Company_Name"];

       if(isset($_POST["userType"])){
        $jobType=$_POST["userType"];}
      
      
   
     
      
        if(!empty($title) && !empty($txtarea)  && !empty($jobType) && !empty($CN)){
           $pqueryString = "INSERT INTO post_job(Title,job_type,Description ,ComName)
           VALUES('$title', '$jobType', '$txtarea', '$CN' )";

           $pquery=mysqli_query($con, $pqueryString);

              if($pquery){ $success='Your JOb is Posted';}
   
         } else{
   
           $error='please fillup the required field';
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
            <h1 class= " text-success"> POST-jOB</h1>
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
            <label for="" >Job-TiTle</label>
            <input class="form-control" type="text" placeholder="Job-Title"  name="title">
         </div>
         <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea type ="text"class="form-control" name="textArea" ></textarea>
        </div>
        <div class="">
            <label for="" class="sr-only">Company Name</label>
            <input type="text" class="form-control" name="Company_Name" placeholder="Company-Name">

       </div>
        <div class="form-group">
                <label for="" class="text-info">Post as a  :</label>
                <input type="radio"  name="userType" value="Full-Time"/> Full-Time | 
               <input type="radio"  name="userType" value="Part-Time" /> Part-Time |
               <input type="radio"  name="userType" value=" Intern " />    Intern 
            </div>
        <div class="form-group">
        <input type="submit" name="Post"  value="Post" class="btn btn-success"/>
        <div>
                

             
            
  
        
        
        
        </form>
    </div>     
        
</div>





</body>















</html>