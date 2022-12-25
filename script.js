let menu=document.querySelector('#menu-btn');
let navbar=document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{
  loginForm.classList.toggle('active');
}

document.querySelector('#close-login-btn').onclick = () =>{
  loginForm.classList.remove('active');
}


var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  
  let loadMoreBtn = document.querySelector('.packages .load-more .btn');
  let currentItem = 3;
  
  loadMoreBtn.onclick = () =>{
     let boxes = [document.querySelectorAll('.packages .box-container .box')];
     for (var i = currentItem; i < currentItem + 3; i++){
        boxes[i].style.display = 'inline-block';
     };
     currentItem += 3;
     if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
     }
  }
  

  function validate(){
    var emri=document.getElementById("name").value;
    var regex=/^[a-zA-Z]{3,}$/

    if(emri.trim()==""){
      alert("Shkruaj emrin: ");
    }
    else if((regex.test(emri))){
      alert("Emri pranohet");
    }
    else{
      alert("Emri nuk pranohet");
    }

    var emaili=document.getElementById("email").value;
    var regex=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/

    if(emaili.trim()==""){
      alert("Shkruaj nje email: ");
    }
    else if((regex.test(emaili))){
      alert("Email pranohet");
    }
    else{
        alert("Email nuk pranohet");
    }

    var numri=document.getElementById("nrtel").value;
    var regex =/^0+4+[3-5 | 8-9]+[0-9]{6}$/

  if(numri.trim() == ""){
    alert("Shkruaj numrin e telefonit");
  } 
   else if((regex.test(numri))){
       alert("Numri i telefonit pranohet");
   }
  
   else{
      alert("Numri i telefonit nuk pranohet");
  }

   var adresa=document.getElementById("address").value;
   var regex=/^[a-zA-Z]+ [a-zA-Z]+,[0-9]{5}$/

   if(adresa.trim()==""){
    alert("Shkruaj adresen ");
   }
   else if((regex.test(adresa))){
    alert("Adresa pranohet");
   }
   else{
    alert("Adresa nuk pranohet");
   }

   var lokacioni=document.getElementById("location").value;
   var regex=/[A-Za-z]/

   if(lokacioni.trim()==""){
    alert("Shkruaj nje lokacion qe do vizitosh: ");
   }
   else if((regex.test(lokacioni))){
    alert("Lokacioni pranohet");
   }
   else{
    alert("Lokacioni nuk pranohet");
   }

   var persona=document.getElementById("persona").value;
   var regex=/[1-9][0-9]/

   if(persona.trim()==""){
    alert("Shkruaj numrin e personave: ");
   }
   else if((regex.test(persona))){
    alert("Numri i personave pranohet");
   }
   else{
    alert("Nuk pranohet numri personave");
   }
  }


  function validoLogIn(){
    var emaili=document.getElementById("email").value;
    var regex=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
  
    if(emaili.trim()==""){
      alert("Ploteso fushen per  email: ");
    }
    else if((regex.test(emaili))){
      alert("Email pranohet");
    }
    else{
        alert("Email nuk pranohet");
    }
  
    var passwordi=document.getElementById("password").value;
    var regex=/^[a-zA-Z0-9!@#$%^&*]{6,16}$/
  
    if(passwordi.trim()==""){
      alert("Ploteso fushen per passwordin")
    }
    else if((regex.test(passwordi))){
      alert("Passwordi pranohet");
    }
    else{
      alert("Passwordi nuk pranohet");
    }
  
  }

