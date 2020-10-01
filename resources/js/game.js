const cellElements = document.querySelectorAll('[data-cell]');
const board = document.getElementById('board');
const restartButton = document.getElementById('restartButton');
const winningScreen = document.getElementById('winning-screen');
const winningMessage = document.getElementById('winner');
const X_CLASS = 'x';
const CIRCLE_CLASS = 'circle';
const WINNING_COMBOS = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];
let circleTurn;

function start() {
    cellElements.forEach(cell => {
        cell.addEventListener('click', handleClick, { once: true });
    });

    restartButton.addEventListener('click', function () {
        location.reload();
    });

    setBoardHover();
    circleTurn = false;
}

function handleClick(e) {
    const cell = e.target;
    const currentClass = circleTurn ? CIRCLE_CLASS : X_CLASS;
    // place mark
    placeMark(cell, currentClass);

    // check for game condition
    if (isWin(currentClass)) {
        endGame(false);
    } else if (isDraw()) {
        endGame(true);
    } else {
        switchTurns();
        setBoardHover();
    }
}

function isDraw() {
    return [...cellElements].every(cell => {
        return cell.classList.contains(X_CLASS) || cell.classList.contains(CIRCLE_CLASS);
    });
}

function endGame(draw) {
    let winner;
    if (draw) {
        winner = 'D';
        winningMessage.innerText = "The game is a draw!";
    } else {
        winner = circleTurn ? "O" : "X";
        winningMessage.innerText = `${winner} wins the game!`;
    }

    saveLog(winner, () => {
        winningScreen.classList.add('show');
    });
}

function placeMark(cell, currentClass) {
    cell.classList.add(currentClass);
}

function switchTurns() {
    circleTurn = !circleTurn;
}

function setBoardHover() {
    board.classList.remove(X_CLASS);
    board.classList.remove(CIRCLE_CLASS);
    
    if (circleTurn) {
        board.classList.add(CIRCLE_CLASS);
    } else {
        board.classList.add(X_CLASS);
    }
}

function isWin(currentClass) {
    return WINNING_COMBOS.some(combo => {
        return combo.every(index => {
            return cellElements[index].classList.contains(currentClass);
        });
    });
}

function saveLog(winner, callback) {
    window.axios.post('/api/logs', { 'winner': winner }).then((resp) => {
        console.log("data saved!");
        callback();
    }).catch((error) => {
        alert(error.response.data.message);
        callback();
    });
}

start();
