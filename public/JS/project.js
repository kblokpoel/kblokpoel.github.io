const button = document.querySelector('.button-light-on')
console.log(button);
button.addEventListener("click", function () {
  const elements = document.querySelectorAll('body')
  for (let i = 0; i < elements.length; i++) {
    // console.log(i);
    // console.log(elements[i]);
    document.body.style.backgroundColor = '#f5f5f5';
  }
  if(button.textContent == "Dark mode")
  {
    document.body.style.backgroundColor = 'rgb(48, 48, 48)';
    button.textContent = "Light mode";
  }
  else
  {
    button.textContent = "Dark mode";
  }
  
  
  
});
