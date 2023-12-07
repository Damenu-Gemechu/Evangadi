console.log("Question 1")
// Write a function that prints the first 10 integers on the console starting from the number 1 using
// the JavaScript for loop.

function firstQ(input){
for (input = 1; input <= 10; input++) {
    console.log(input);
}
}
firstQ();

console.log("Question 2")
// Write a function that takes a single number as an argument and prints the next 5 numbers in the
// console. Note: each output should be displayed on a new line.
// ○ Test case: If you give 7 to the function, output should look like this:
// 8
// 9
// 10
// 11
// 12 
function secondQ(start){

    for (var i =start+1; i <=start+5;i++) {
       
        if(typeof(start) !='number'){
            console.log("It is string!, Please enter Numerical value!")
        }
        else{
            console.log(+i);
        }
         
    }
   
    }
    secondQ(8);
        
    console.log("Question 3")
//Write a function that takes a single number and prints the sum of the next 10 numbers after the
// given number.
// ○ Test case: If you give 7 to the function, output should be: 125 - because (8 + 9 + 10+
// 11+ 12+ 13+ 14+ 15+ 16+ 17 = 125)

function thirdQ(n){

    let sum=0;
    for (var i =n+1; i <n+10;i++) {

        sum=sum+i;

    }
    return sum;
    }
    console.log(thirdQ(7));

  console.log("Question 4")
// //Write a function that takes an array as an argument and prints every element of the array on the
// // console.
// // ○ Test case: given the array a = [1, "Hello", 8, 44], output should look like this:
// // 1
// // Hello
// // 8
// // 44
function questFour(x){
    for(i=0;i<=x.length;i++){
    console.log(x[i]);
    }
}
questFour([6,"hi",9,"guys"]);

console.log("Question 5")
// Write a function that takes an array as an argument and prints the total number of elements
// found in the array. Hint: use a property of the Array object to solve this question.
// ○ Test case 1: Given the array a = [1, "Hello", 8, 44], output should be: 4
// ○ Test case 2: Given the array a = ["world", 13], output should be: 2

function named(x){
    console.log(x.length);
}
named([1, "Hello", 8, 44]);

console.log("Question 6")
// Write a function that takes an array of numbers as a parameter and logs in the console the sum of
// all the numbers in the array.
// ○ Test case 1: If you give this array, [5, 6, 99, 8, 76, 4, 68, 44], to the function, output
// should be: 310 because 5 + 6 + 99 + 8 + 76 + 4 + 68 + 44
// ○ Test case 2: If you give this array, [3, 0], to the function, output should be: 3 because
// 3 + 0

function adder(w){
    let sum=0;
    for (i=0;i<w.length;i++)
    sum=sum+w[i];
console.log(sum);
}
adder([5, 6, 99, 8, 76, 4, 68, 44])

console.log("Question 7")
// Write a function that takes an array of all numbers as a parameter, subtracts the total sum of all
// odd numbers of the array from the total sum of all even numbers and logs the result in the
// console.
// ○ Test case: If you give these array, [5, 6, 99, 8, 76, 4, 68, 44], to the function, output
// should be: 102
// ■ Sum of odd numbers: 5 + 99 = 104
// ■ Sum of even numbers: 6 + 8 + 76 + 4 + 68 + 44 = 206
// ■ Difference between total even and total odd numbers: 206 - 104 = 102

function diff(y){
    let even=0;
    let odd =0;
    for (k=0;k<y.length;k++){
        if(y[k]%2==0){
            even=even+y[k];
        }
        else{
            odd=odd+y[k]; 
        }
    }
    console.log("The sum of even arrays: "+even);
    console.log("The sum of odd arrays: "+odd);
    console.log("The difference of even and odd arrays: "+(even-odd));
}
diff([5,6,99,8,76,4,68,44]);


console.log("Question 8")
// Write a function that takes an array as a parameter and logs in the console the elements that have
// even indexes only. Notice: this question is not asking you to log elements with even value, but
// elements that are located on even indexes)
// ○ Test case 1: If you give this array to the function [5, 6, 99, 8, 76, 4, 68, 44], toutput
// should be:
// 5
// 99
// 76
// 68
// ○ Test case 2: If you give this array to the function [11, “Sam”, 3, 7, “car”], output should
// be:
// 11
// 3
// car

function evenIndex(t){
    console.log("The arrays with even indexes: ");
    for (let u=0;u<t.length;u++){
        if(u%2==0){
        console.log(t[u]);
        }
    }
}
evenIndex([5,6,99,8,76,4,68,44]);

// Questions 9 and 10 are dependent on the sampleArray provided below:
// let sampleArray = [5, 6, 99, 8, 76, 4, 68, 44];
console.log("Question 9")
// Write a function that takes the sampleArray as a parameter, removes the last element from the array,
// adds a new value of "32" to the array and prints the new array on the console. Hint: use an array method

let sampleArray=[5,6,99,8,76,4,68,44];
function modifyArray(arr){
    arr.pop();
    arr.push(32);
    arr.shift();
    arr.unshift(4);
    console.log(arr);
}
modifyArray(sampleArray);

console.log("Question 10")
// ● Write a function that takes the sampleArray as an argument, sorts the array in ascending order
// and prints the sorted array on the console
// // Use the sort method. Make sure you understand just using the sort() method alphabetically.
// You should use this sorting syntax - sort(function(a, b){return a-b});

function sortArray(a){
    function compare(a,b){
        return a-b;
    }
    a.sort(compare);
    console.log(a);
}
sortArray(sampleArray);


// The questions below ( questions 11 to 14) are based on the "evangadiClass" object provided below.
 let evangadiClass = {
lengthOfCourse: "1 Month",
website: "https://www.evangadi.com/",
isChallenging: false,
topicsCovered: ["HTML", "CSS", "Media Query", "JavaScript"],
students: [
{
name: "Abebe",
age: 34,
sex: "M"
},
{
name: "Kebede",
age: 44,
sex: "M"
},
{
name: "Almaz",
age: 27,
sex: "F"
},
{
name: "Challa",
age: 22,
sex: "M"
},
{
name: "Chaltu",
age: 19,
sex: "F"
}
]
}
console.log("Question 11")
// Change the lengthOfCourse property of the object to "5 Month" and print the new object on the
// console
// // Use the dot notation "." to call the property you want to change
evangadiClass.lengthOfCourse="5 month";
console.table(evangadiClass);

console.log("Question 12")
// Add "Bootstrap" at the end of the topicsCovered property and print the new object on the
// console
// ○ // Use an array method
evangadiClass.topicsCovered.push("Bootstrap");
console.table(evangadiClass);


console.log("Question 13")
// Write a function that takes the "evangadiClass" object as an argument and calculates the average
// age of the class. Print the result on the console
function stuAverageAge(g){
let ages=0;
for(i=0;i<g.students.length;i++){
    ages=ages+g.students[i].age
}
return ages/g.students.length;
}
console.log(stuAverageAge(evangadiClass));

console.log("Question 14")
// Write a function that takes the "evangadiClass" object as an argument and calculates the
// percentage of male students in the class. Print the result on the console


function malePercentage(o){
let total=o.students.length;
let male=0;
let malePercent=0;
for(i=0;i<total;i++){
    if(o.students[i].sex==="M"){
        male++;
    }  
}
malePercent=(male/total)*100;
    console.log(malePercent);
}
malePercentage(evangadiClass);


console.log("Question 15")
// Puzzles:Test the divisors of three
// Write a function that takes 2 parameters: a low and high number. Your goal is to print all
// numbers (on the console) between low and high, and for each of these numbers print
// whether or not the number is divisible by 3. If the number is divisible by 3, print the word
// "div3" directly after the number.


function divisorsOfThree(low,high){
    for(i=low;i<=high;i++){
        let Q=i;
        if(i%3==0){
            Q+="div3";
        }
        console.log(Q);
    }
}
divisorsOfThree(5,18);

console.log("Question 16")
// The famous coding interview question (FizzBuzz)
// Write a function that prints in the console the numbers from 1 to 100. But for multiples of
// three print “Fizz” instead of the number and for the multiples of five print “Buzz” and for
// numbers which are multiples of both three and five print "FizzBuzz".

function multipleThreeAndFive(){
    for(i=1;i<=100;i++){
    if(i%3==0 && i%5==0){
        console.log("FizzBuzz")
    }
    else if(i%3==0){
        console.log("Fizz")
        }
        else if(i%5==0){
            console.log("Buzz")
        }
            else {
                console.log(i)
            }
     }
 }
multipleThreeAndFive();

console.log("Question 17")
// Evens number
// An Evens number is an integer whose digits are all even. For example 2426 is an Evens
// number but 3224 is not. Write a function named isEvens that prints on the console 1 if its
// integer argument is an Evens number. The function prints 0 otherwise.

let x1 = 2241;
let x2=4442;

function isEvens(ev) {
  // changing ev to string
  ev = ev.toString();

  let even = "";
  let odd = "";

  for (i = 0; i < ev.length; i++) {
    //checking each index if divided by 2 or not

    if (ev.charAt(i) % 2 == 0) {
      even = even + ev.charAt(i);
    } else {
      odd = odd + ev.charAt(i);
    }
  }
  // the return par+
  if (even % 2 == 0 && odd % 2 == 0) {
    return 1;
  } else {
    return 0;
  }
}
console.log(isEvens(x1));
