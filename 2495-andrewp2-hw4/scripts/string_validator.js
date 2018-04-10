"use strict"

//This script will prompt the user for a string. This will contain a function that
//checks the string based on a regex pattern. which goes off of the following:
//only first letter is uppercase, all the other letters are lower case letters,
//no numbers but spaces are allowed

var user_str = prompt("Enter a string. The first letter must be capitalized. All other \
letters must be lower case. No numbers are allowed, but spaces are.")
var pattern = /^[A-Z][a-z\s]+/

document.write("<p><b>" + validator(user_str, pattern) + "</b></p>")

document.write("<p>You entered the string: " + user_str + ".</p>")

function validator(str, pat) {
    if (pat.test(str)) {
        return "Valid input."
    } else {
        return "Invalid input."
    }
}