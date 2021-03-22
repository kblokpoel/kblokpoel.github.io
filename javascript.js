const button = document.querySelector('.button-light-on')
console.log(button);
button.addEventListener("click", function () {
  const elements = document.querySelectorAll('body, h1, h2, h3, h4, h5, h6')
  for (let i = 0; i < elements.length; i++) {
    console.log(i);
    console.log(elements[i]);
    elements[i].classList.toggle('button-light-on')
  }
});
