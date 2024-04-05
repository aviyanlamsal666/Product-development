const passwordInput = document.querySelector(".js-showPassword");
const passIcon = document.getElementById("js-eye");

passIcon.addEventListener("click", () => {
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
});
