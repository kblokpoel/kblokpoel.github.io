const title = document.querySelector('.title');
const button = document.querySelector('.button');
let quote;
let txt = document.createElement('p')

function getQuote() {
    fetch('https://animechan.vercel.app/api/random')
    .then(response => response.json())
    .then(quote => console.log(quote))
}
getQuote();
button.addEventListener('click', function epicquote() {
    title.textContent = getQuote();
   
    
})




