function see(){
    document.querySelector(".kibab_menu").style.width="100%";
    document.querySelector(".cross_kibab").style.display="block";
    document.querySelector(".menu_item").style.display="flex";
    
 }
          

 function unsee(){
    document.querySelector(".kibab_menu").style.width="0%";

    document.querySelector(".menu_item").style.display="none";
    document.querySelector(".cross_kibab").style.display="none";
 }