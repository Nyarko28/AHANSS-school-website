<?php

$_SERVER="localhost";
$database="schoolproject";
$db_code="";
$studentinfo="root";

$connectdb=mysqli_connect($_SERVER,$studentinfo,$db_code,$database);
$sql="SELECT * FROM studentinformation" ;
$query=mysqli_query($connectdb,$sql);
$row=mysqli_fecth_assoc($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="letter.css">
    <link rel="stylesheet" href="./schoolMediaqueries/applicationmedia.css">
</head>
<body>
    <header>
        <div class="logo"><img src="./ahans_images/logo.png" alt="ahanss badge" class="logo_img">
            <span class="sch_name">AHANSS</span>
        </div>
        <nav>
            <a href="../school.html"> <li >Homepage</li></a>
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
                    <a href="../school.html"> <li >Homepage</li></a>
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
                <div>
                    <?php


                        ?>
                </div>
            </head>
           
            
             <div class="input_info">

                 <div class="passport_box">
                   <?php echo" <img src='$photo' width>"  ?>
                </div>
                <h2>Dear Miss <?php echo $name ?></h2>
               <ol>
                    <li>
                        We write on behalf of this Academic Board to offer you admission into this High School to read  .........leading to 
                    </li>
                  <li>
                        The offer is based on available information that you have satisfied the entry requirement
                        for the above 
                        <?php
                            //    while($row=mysqli_fetch_assoc($query)){
                            //         echo'<img height="300" width"300" src="data:image;base64,'.$row['Photo'].'">';
                            //      }
                            $query=mysqli_query($connectdb,$sql);
                            while($row=mysqli_fecth_assoc($query)){
                                $image=$row['photo'];
                                print"<img src='$image' >";
                            }
                         ?>
                    
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