<?php
if(isset($_POST["submit"])){
    // form value
$name=$_POST["name"];
$date=$_POST["date"];
$address=$_POST["address"];
$father=$_POST["father"];
$mother=$_POST["mother"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$course=$_POST["course"];
$photo=$_FILES["photo"];
// connec db
$_SERVER="localhost";
$database="schoolproject";
$db_code="";
$studentinfo="root";
$db_connect=mysqli_connect($_SERVER,$studentinfo,$db_code,$database);

$sql="INSERT INTO `studentinformation` (Student, DOB,`Address`, Father, Mother, Phone, Email, Course, Photo) VALUES ('$name','$date','$address','$father','$mother','$phone','$email','$course','$photo')";
$query=mysqli_query($db_connect,$sql);


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../schoolStyle/letter.css">
    <
    <link rel="stylesheet" href="../schoolMediaqueries/applicationmedia.css">
</head>
<body>
    <header>
        <div class="logo"><img src="../ahans_images/logo.png" alt="ahanss badge" class="logo_img">
            <span class="sch_name">AHANSS</span>
        </div>
        <nav>
            <a href="../index.html"> <li >Homepage</li></a>
            <a href="../schoolPages/contact.html" > <li class="contactbtn">Contact US</li></a>
            <a href="../schoolPages/nwe.html"> <li >Administration</li></a>
            <a href="../schoolPages/event.html"> <li >Event</li></a>
            <a href="../schoolPages/admission.html"> <li >Admission</li></a>
             
        </nav>
        <!-- humber icon and it menu -->
        <div class="kibab" onclick="see()">
            <span></span>
            <span></span>
            <span></span>
        </div>
            <div class="kibab_menu" >

                <div class="cross_kibab" onclick="unsee()">
                    <span></span>
                    <span></span>
                </div>
                
                <nav class="menu_item">
                    <a href="../index.html"> <li >Homepage</li></a>
                    <a href="../schoolPages/admission.html"> <li >Admission</li></a>
                    <a href="../schoolPages/event.html"> <li >Event</li></a>
                    <a href=""> <li >Administration</li></a>
                    <a href="../schoolPages/contact.html" > <li >Contact Us</li></a>
                     
                 </nav>
            </div>
            
        </header>
    <div id="form">
        <div class="application_inner">
            <head>
                <div class="application_head">
                    <img src="./ahans_images/logo.png" alt="AHANSS logo">
                    <h2 class="full_shcoolname">
                        AHANTAMAN GIRLS SENIOR HIGH SCHOOL (AHANSS)
                    </h2>
                    <address>PO BOX 144X  KETAN-SEKONDI</address>

                </div>
            </head>
           
            
            <div class="input_info">
    
                <div class="passport_box">
                  <?php 
                  $_SERVER="localhost";
                  $database="schoolproject";
                  $db_code="";
                  $studentinfo="root";
                 $db_connect=mysqli_connect($_SERVER,$studentinfo,$db_code,$database);
                    $simg="SELECT * FROM `studentinformation` ";
                    $imgquery=mysqli_query($db_connect,$simg);
                    $row=mysqli_fetch_assoc($imgquery);
                    while($row){?>
                    
                   <img src= "./ahans_images/<?=$row['Photo'] ?>" style='width:100% height:100%>' ;
                   break;
                    <?php
               
                    }
                   ?>
                </div>
                <h2>Dear Miss <?php echo $name ?></h2>
                <ol style='margin-top: 8rem;'>
                    <li>
                        We write on behalf of this Academic Board to offer you admission into this High School to read  <?php echo $course ?></h2>leading to 
                    </li>
                    <li>
                        The offer is based on available information that you have satisfied the entry requirement
                        for the above 
                       
                    </li>
                </ul>
            </div>
          
               
        </div>


    <script>
        function see(){
               opennav=document.querySelector(".kibab");
               closebtn=document.querySelector(".kibab_menu")
               if(closebtn.style.display==="none"){
                   opennav =(addEventListener),onclick=closebtn.style.display="flex",opennav.style.display="none"
               }else{
                  closebtn.style.display="none"
               }
             }see()
             function unsee(){
               opennav=document.querySelector(".kibab");
               closebtn=document.querySelector(".kibab_menu")
              let closemenu=document.querySelector(".cross_kibab");
               if(closebtn.style.display="flex"){
                 closemenu.addEventListener,onclick=
                   closebtn.style.display="none";
                  
               }else{
                   opennav.style.display="flex";
               }
             }
   </script>
   <script src="../school_javascript/application.js"></script>
</body>
</html>
