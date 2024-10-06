const calculator = document.getElementById('calculator');
const display = document.getElementById('display');
const buttons = [
    ['7', '8', '9', '×'],
    ['4', '5', '6', '−'],
    ['1', '2', '3', '+'],
    ['±', '0', ',', '=']
];

let currentOperation = '';
let currentValue = '';
let previousValue = '';
let operator = '';

function generateCalculatorInterface() {
    buttons.forEach(row => {
        const rowDiv = document.createElement('div');
        rowDiv.className = 'row';
        row.forEach(buttonText => {
            const button = document.createElement('button');
            button.className = 'button';
            button.textContent = buttonText;
            button.addEventListener('click', () => handleButtonClick(buttonText));
            rowDiv.appendChild(button);
        });
        calculator.appendChild(rowDiv);
    });
}