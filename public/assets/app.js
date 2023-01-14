const hamburger = document.querySelector('.menu-toggle');
const navigation = document.querySelector("nav");

hamburger.addEventListener("click", function (event) {
  this.classList.toggle('active');
  navigation.classList.toggle('active');
})