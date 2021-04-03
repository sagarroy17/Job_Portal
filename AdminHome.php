<?php
   session_start();
    if(!isset($_SESSION['Email'])){
     header('Location:Login.php');
     exit();

   }
   $con=mysqli_connect('localhost','root','','job_portal');

  
    
  
  
   
   $Admnquery=mysqli_query($con, "SELECT * FROM users");
   $ShowFech=mysqli_fetch_all($Admnquery);
   


  

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
    <a class="navbar-brand" href="#">JOB-PORTAL</a>
    
     
    <ul class="navbar-nav ml-auto">
       
        <li class="nav-itinfoem">
            <a class="nav-link" href="CompanyList.php">Company-List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Jobseekerlist.php">Job-Seeker-List</a>
        </li>
            
    </ul>
    
    
    
    </nav>
   
    <br>
    
    <div> <a class="btn btn-outline-danger " style="margin-left: 10px;" href="Logout.php" >Logout</a>
       
       </div>

</header>
<br>

  <div class="contaner">
     <div class="">
         
         <div class="type">
            <h1 style="color:black; margin-left:200px;" > Registered User,s</h1>
        </div>

        <br>
        <br>
        <form>
        


         <table class="table">
            <tr>
             <th>Name :</th>
             <th>Email :</th>
             <th>Phone:</th>
            </tr>
            
             <?php

               foreach($ShowFech as $single)
               { $Name=$single[1];
                 $email=$single[2];
                 $phone=$single[3];
                  echo "<tr>
                   <td>$Name</td>
                   <td>$email</td>
                   <td>$phone</td>
                 </tr>";
               }
             
             ?>
             
            
            
            </tr>



         
         
         </table>
        
        
        
        </form>
    </div>     
        
</div>





</body>















</html>