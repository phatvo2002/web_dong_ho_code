


let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("MySlide");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
function Signup(e)
{
  event.preventDefault();
  const username = document.getElementById("Username").value;
  const password = document.getElementById("retypePassword").value;
  const user={
    username:username,
    password : password,
  }
  const json= JSON.stringify(user);
  localStorage.setItem(username,json);
  alert("Đăng kí thành công");
}


function Login(e)
{
  event.preventDefault();
  const username = document.getElementById("Username").value;
  const password = document.getElementById("retypePassword").value;
  const user= localStorage.getItem(username);
  const data=JSON.parse(user);
  if(data==null)
  {
    alert("Vui lòng nhập user name và password")
  }
   if (username==data.username && password==data.password)
  {
    alert("Đăng nhập thành công");
    window.location.href="../html/home.html"
  }
  else
  {
    alert("Đăng nhập thất bại")
  }
}


