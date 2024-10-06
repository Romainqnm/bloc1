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