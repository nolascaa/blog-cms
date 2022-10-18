//document.write("Hello World");      //Output string to homepage

var firstName = "Jane";                     // String type variable
var lastName = "Doe";                       // String type variable
var age = 20;                               // Number type variable
var married = true;                         // Boolean type variable
var childrenNames = ["Alice", "Bob"];       // Array type variable
var husband = { firstName: "John", lastName: "Doe", age: 35 }    // Object type variable

var fullName = firstName + " " + lastName;        // Concatenation operator
var dogYears = age/7;                             // Arithmetic Operator
var isAdult = dogYears > 4;                       // Comparison operator
var isSettled = isAdult && married;               // Integer type variable

function getFullName(firstName, lastName) {     // Function name
    return  firstName + " " + lastName;         // Returned value
}

//Module 5 Part 4.4
var fullName = getFullName(firstName, lastName);   // Using variables
var fullName = getFullName("Alice", "Doe");        // Using values

function getIsSettled(years, married) {     //Function name
    return isSettled;                       //Returned value
}

var isSettled = getIsSettled(age, married)      //Using variables
var isSettled = getIsSettled("5", "false")      //Using values

//Module 5 Part 4.5
//document.write(fullName);    //Output fullName
console.log(fullName);       //Output variable to Dev Tools console

//Module 5 Part 4.6
if (isSettled) {
    document.write(fullName + " is settled.");
} else {
    document.write(fullName + " is not settled.");
}

//Module 5 Part 4.7 - Loops
childrenNames.forEach(function(childName) {
    document.write("<li>" + childName);
});