import Player from "./Player.js";



/**
 * To start:
 * Check index.html, make sure the board with fields are created with correct classnames
 * The board should be 3x3 fields
 * Add correct classes
 */

const players = [];
let currentPlayer = 0; // This is the index of the array of the currentplayer
const fields = document.querySelectorAll('.board > .field');
const resetButton = document.querySelector(".reset-btn");
//Create two players aligned with the Player class
 const playerOne = new Player("Player 1", 'X');
 const playerTwo = new Player("Player 2", 'O');
//Add both players to the players array
 players.push(playerOne, playerTwo);
/**
 * Assignment
 * Make a loop thru all the fields and add a click event. 
 * Connect the addSymbolToField function in the eventHandler
 */
for (let i = 0; i < fields.length; i++) {
    const field = fields[i]
    field.addEventListener('click', function(e) {
        console.log(e)
        if(addSymbolToField(field))
        {
            let symbolText = document.createElement('h2')
            field.append(symbolText)
            
            symbolText.textContent = players[currentPlayer].symbol;

            if(currentPlayer == 0)
            {
                currentPlayer = 1;
            }
            else
            {
                currentPlayer = 0;
            }
        }

        checkWinner()
        

    })


}



/**
 * Assignment 
 * Give body to the reset function (the function exists below)
 * 
 */



resetButton.addEventListener("click", resetGame);


function addSymbolToField(field) {
    console.log(field)
    const fieldContent = field.textContent;
    if (fieldContent === 'X' || fieldContent === 'O') {
        alert('This field can not be used');
        return;
    }
    

    /**
     * Assignment
     * Add the current player symbol to the field textContent
     * What more needs to be done here? Make a short todolist
     */


    return true;



}

function checkWinner() 
{
    const winnningBox = [   
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6],
      ];


    let threex = 0;
    let threeo = 0;
    
    
    for (let i = 0; i < winnningBox.length; i++)
    {

        const winline = winnningBox[i];
        console.log(winline);

         threeo = 0;
         threex = 0;


        for (let j = 0; j < winline.length; j++)
        {
            console.log(winnningBox[i][j]);

            const fieldIndex = winline[j]
            console.log(fieldIndex);
            const symbol = fields[fieldIndex].textContent;
            console.log(symbol);
            
            if(symbol.toLowerCase() === "x")
            {
                threex++;
            }
            else if(symbol.toLowerCase() === "o")
            {
                threeo++;
            }

            if(threex === 3)
            {
                alert(playerOne.name + ' has won');
            }
            else if(threeo === 3)
            {
                alert(playerTwo.name + ' has won');
            } 



            
        }
    }
    
      
    

        
        
          


        
    }
    /**
     * Assignment
     * Add an algorithm to check if someone has three in a row
     * Try to use Internet - if not found the teacher will give you one
     * Also make sure you check for a draw (gelijkspel)
     * Again what more needs to be done, make a short todolist
     */


function resetGame() 
{
    location.reload();
     alert("Board has been reset.")
    
}

console.log('File loaded');