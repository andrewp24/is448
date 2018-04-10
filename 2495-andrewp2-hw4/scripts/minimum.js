"use strict"

//This script will take the 3 numbers the user gives, change them from string to int,
//and find the minimum value they entered. The answer will be written to the screen.

// declaring variables.
var num1 = parseInt(prompt("Type your first of three numbers."));
var num2 = parseInt(prompt("Type your second of three numbers"));
var num3 = parseInt(prompt("Type your last number."));

var min = Math.min(num1, num2, num3)

document.write(min)
document.write("<p><b>The above was the minimum of the three you entered, which were: " +
    num1 + ", " + num2 + ", and " + num3 + ".</b></p>")