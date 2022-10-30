let login = document.querySelector('#login-tab');
let signup = document.querySelector('#signup-tab');

window.addEventListener("load", ()=>{
  login.classList.add("active");
});

document.getElementById("login-tab").addEventListener("click",()=>{
 
  login.classList.add("active");
  
  signup.classList.remove("active");
  document.getElementById("login").style.display="inline-block";
  
  document.getElementById("signup").style.display="none";
  
});

document.getElementById("signup-tab").addEventListener("click",()=>{
  
  signup.classList.add("active");
  
  login.classList.remove("active");
  document.getElementById("signup").style.display="inline-block";
  
  document.getElementById("login").style.display="none";
  
});