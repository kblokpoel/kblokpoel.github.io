const button = document.querySelector('.button-light-on')
console.log(button);
button.addEventListener("click", function () {
  const elements = document.querySelectorAll('body')
  for (let i = 0; i < elements.length; i++) {
    // console.log(i);
    // console.log(elements[i]);
    elements[i].classList.toggle('button-light-on')
  }
  if(button.textContent == "Dark mode")
  {
    button.textContent = "Light mode";
  }
  else
  {
    button.textContent = "Dark mode";
  }
  
  
  
});
