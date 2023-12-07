console.log("\n Question 1")
//Define a simple function named myFirst that prints the word "Hello" on the console
// ○ First define the function
// ○ Then call the function

function myFrst(){
    console.log("Hello"); 
}
myFrst();

console.log("\n Question 2")

// Define a function called mySecond that takes a parameter and prints the parameter on
// console
// ○ Feel free to give any value as a parameter in your function

function mySecond(myGroup){
    let message=console.log("Hello "+ myGroup)
    return message;
}
mySecond("Group2");

console.log("\n Question 3")
// ● Define a function called myThird that takes a parameter and prints the parameter on the
// console. But, it uses mySecond function to print the parameter on the console

function myThird(me){
me=mySecond(me)
}
myThird("Damenu")

console.log("\n Question 4")
// ● Write a function named myFourth that takes an array as a parameter and prints only the first
// value of the array on the console. Remember, this question is here to explain the concept of
// function delegation in JavaScript.

function myFourth(myNum){
    myNum=[10,20,30,40];
    console.log(myNum[0]);
}
myFourth();

console.log("\n Question 5")
// ● Write a function named myFifth that takes an array with two numbers in it as a parameter
// and prints the sum of the two numbers on console

function myFifth([a,b]){
    let sum= console.log(a+b)
    return sum;
}
myFifth([12,11]);

console.log("\n Question 6")
// ● Write a function that takes an integer minutes and converts it to seconds.
function convert(minutes){
    let seconds=minutes*60; 
    return seconds;
}
let x=convert(6)
console.log(convert(5))
console.log(convert(3))
console.log(convert(2))

console.log("\n Question 7")
// Create a function that takes a number as a parameter, increments the number by +1 and
// returns the result
function increments(s){
    if (typeof(s) !='number'){
        return "invalid number"
    }
    else{
    let res=++s;
return res;
}
}
console.log(increments("5"));
console.log(increments(4));
console.log(increments(100));
console.log(increments(-100));


console.log("\n Question 8")
// Write a function that takes the base and height of a triangle and returns its area.
function areaOftriangle(base,height){
    area=(base*height)/2;
    console.log(area);
    return area;
}
areaOftriangle(2,3);


console.log("\n Question 9")
// Create a function that returns the total number of legs of all the animals. In this challenge, a
// farmer is asking you to tell him how many legs can be counted among all his animals. The
// farmer breeds three species (chickens = 2 legs, cows =, 4 legs, pigs = 4 legs). Remember:
// the farmer wants to know the total number of legs and not the total number of animals.

function allAinmalsLeg(chickens,cows,pigs){
    if(isNaN(chickens)||isNaN(cows)||isNaN(pigs)){
        return "It is string!, Please enter Numerical value!"
    }
    else if(chickens<0||cows<0||pigs<0){
        return "Negative number is not valid!, enter positive number!"
    }
    else{
    let sumOfallLegs= console.log(chickens*2+cows*4+pigs*4);
    }
     return sumOfallLegs;
}
console.log(allAinmalsLeg(-3,4,1));


console.log("\n Question 10")
// Create a function that takes an array containing only TWO numbers as a parameter and
// returns a value that is 3 times the first element of the array.

function tenth([c,d]){
    let result= console.log(3*c,d);
    return result;
}
tenth([4,6]);


console.log("\n Question 11")
// Create a function that returns true when num1 is equal to num2; otherwise return false.
function ifStmnt(){
    let num1,num2;
    num1=20;
    num2=20;
    if(num1==num2){
        console.log("true");
    }
    else{
        console.log("False")
    }
}
ifStmnt();


console.log("\n Question 12")
// Create a function that takes an integer and returns true if it's divisible by 100, otherwise
// return false.

function modulo(){
    let t=Number;
    t=233;
    if(t%100===0){
        console.log("true");
    }
    else{
        console.log("False")
    }
}
modulo();

console.log("\n Question 13")
// Create a function that takes a number as an argument and returns "even" for even numbers
// and "odd" for odd numbers.

function moduloTwo(){
    let f=Number;
    f=4;
    if(f%2===0){
        console.log("true");
    }
    else{
        console.log("False")
    }
}
moduloTwo();

console.log("\n Question 14")
// Create a function that returns
// ○ “Invalid score” if score is above 100 or score is a negative number
// ○ “Grade A” when score is between 90 and 100 (both 90 and 100 included)
// ○ “Grade B” when score is between 80 and 89 (both 80 and 89 included)
// ○ “Grade C” for any score below 79

function gradeResult(score){
    if(isNaN(score) ||score>100 || score<0){
        console.log("invalid score!...please input the correct point!")
    }
    else if(score<=100 && score>=90){
    console.log("A");
    }
    else if(score<=89 && score>=80){
        console.log("B");
        }
    else if(score<=89 && score>=80){
      console.log("B");
     }
     else if(score<=79){
        console.log("C");
       }
}

gradeResult("D");







// var greetings; var timeOfDay; timeOfDay = "afternoon"; 
// switch (timeOfDay) {
//     case "morning":
//     greetings = "Good morning";
//     break;
//     case "afternoon":
//     greetings = "Good afternoon";
//     break;
//     case "evening":
//     greetings = "Good evening";
//     break;
//     default:
//     greetings = "Hi there";
//     break;
//     }
//     console.log(greetings); // 