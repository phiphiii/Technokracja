const hamburger = document.querySelector('.hamburger');

hamburger.addEventListener('click',function(){
    this.classList.toggle('is-active')
});
function showPassword() {
    var x = document.getElementById("password");
    var y = document.getElementById("password2");
    if (x.type === "password") {
      x.type = "text";
      y.type = "text";
    } else {
      x.type = "password";
      y.type = "password";
    }
  }