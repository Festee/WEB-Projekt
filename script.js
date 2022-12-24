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