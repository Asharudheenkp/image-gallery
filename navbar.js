const menu = document.querySelector(".handburger");
const navbar=document.querySelector(".navcontainer");
const drop = document.querySelector("#menu");

menu.addEventListener("click" , ()=>{
    navbar.classList.toggle("change")

    console.log(navbar.classList)

    if(navbar.classList.value=="navcontainer change"){
        document.documentElement.style.overflow="hidden"
    }else{
        document.documentElement.style.overflow="auto"
    }

   
}) 