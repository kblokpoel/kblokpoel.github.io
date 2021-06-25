const anime = document.querySelector('.anime')
const character = document.querySelector('.character')
const quote = document.querySelector('.quote')
const title = document.querySelector('.title');
const button = document.querySelector('.button');
function getQuote() {
    fetch('https://animechan.vercel.app/api/random')
    .then(response => response.json())
    .then(function getData(data){
        console.log(data);
        anime.textContent = data.anime;
        character.textContent = data.character;
        quote.textContent = data.quote;
    })
}

button.addEventListener('click', getQuote);
    





