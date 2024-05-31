/*function displayimages(){
   var imgs=[
        "/ahans_images/student (1).jpg",
        "/ahans_images/student (2).jpg",
        "/ahans_images/student (3).jpg",
        "/ahans_images/student.jpg",
        "/ahans_images/ahantaman-senior-high-school.jpg"
    ];
   var rndimgs=imgs[Math.floor(Math.random()*imgs.length)];
  let image="<img src='"+rndimgs+"'>";

 
  document.querySelector(".slide").innerHTML=image;
};
setInterval(displayimages,"3000");
// width: 80%;
//     height: 60%;*/

//TExt_popup

function pop(){
  const showpop=  document.querySelector(".text_pop");
showpop.style.display="block";

 const blurBackground= document.querySelector(".modal");
 blurBackground.style.display="block";

 
};

function popof(){

  const blurBackground= document.querySelector(".modal");
  blurBackground.style.display="none";;
  showpop.style.display="none";
  
}


