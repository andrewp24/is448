"use strict";
// insert_names.js 
//   The script in this document has an array of
//   names, name_list, whose values are in 
//   alphabetic order. New names are input through
//   prompt. Each new name is inserted into the 
//   name array, after which the new list is 
//   displayed.

// The original list of names

var name_list = new Array("Al", "Betty", "Kasper", "Michael", "Roberto", "Zimbo");
var new_name, index, last;

// Loop to get a new name and insert it

while (new_name = prompt("Please type a new name", "")) {

      // Insert the new name into its spot in the array
      name_list.push(new_name);
      //name_list.pop();
      //name_list.unshift(new_name);
      // Display the new array
      document.write("<p><b>The new name list is:</b> " + "<br />");
      for (index = 0; index < name_list.length; index++)
            document.write("Index: " + index + ", Content: " + name_list[index] + "<br />");
      document.write("</p>");

} //** end of the while loop