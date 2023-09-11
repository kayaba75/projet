
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#registration_form_plainPassword");

togglePassword.addEventListener("click", function () {

  // toggle the type attribute
  const type = password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);
  // toggle the eye icon
  this.classList.toggle('fa-eye');
  this.classList.toggle('fa-eye-slash');
});


// parralax
window.addEventListener('scroll', function() {
  parallaxContainer.style.backgroundPosition = 'center';
  const scrollValue = window.scrollY;

  parallaxContainer.style.backgroundPositionY = -scrollValue * 0.5 + 'px';
});

