console.log("Question 1");
// Given an array of numbers, write a function that prints in the console another array
// which contains all the even numbers in the original array, which also have even indexes only.
// ○ Test 1: getOnlyEvens([1, 2, 3, 6, 4, 8]) prints [ 4]
// ○ Test 2: getOnlyEvens([0, 1, 2, 3, 4]) prints [0, 2, 4]

function kg(arr){
  let arry=[];
  for(i=0;i<arr.length;i+=2){
if(arr(i)%2===0){
  arry.push(arr[i]);
}
  }
  return arry;
}

console.log([1, 2, 3, 6, 4, 8]);
console.log([0, 1, 2, 3, 4]);


console.log("Question 2");
// Create a function that takes a two-digit number as an parameter and prints "Ok" in
// the console if the given string is greater than its reversed digit version. If not, the
// function will print "Not ok"
// ○ Test 1: reverseCompare(72) prints "ok" because 72 > 27
// ○ reverseCompare(23) prints "Not ok", because 23 is not greater than 32


console.log("Question 3");
// Write a function that takes a positive integer and returns the factorial of the number.
// Notes: The factorial of 0 is 1. Ex: factorial seven is : 1 × 2 × 3 × 4 × 5 × 6 × 7. The
// factorial of any positive integer x is x * (x - 1) * (x - 2) * . . . . . . * 1 (ex: factorial of 4 is
// 4 * 3 * 2 * 1 = 24)
// ○ Test 1: returnFactorial(5) outputs 120
// ○ Test 2: returnFactorial(6) outputs 720
// ○ Test 3: returnFactorial(0) outputs 1

function factorialOfn(n){
let f=1;
//check if the given number is positive
if(n==0){
 f=1;
}
for(let i = n; i >= 1; i--) {
  f *= i;
}
return f;
 }
console.log(factorialOfn(0));
console.log(factorialOfn(5));
console.log(factorialOfn(6));

console.log("Question 4");
// A Meera array is defined to be an array containing only numbers as its elements and for
// all n values in the array, the value n*2 is not in the array. So [3, 5, -2] is a Meera array
// because 3*2, 5*2 or 2*2 are not in the array. But [8, 3, 4] is not a Meera array because
// 2*4=8 and both 4 and 8 are elements found in the array. Write a function that takes an
// array of numbered elements and prints “I am a Meera array” in the console if its array
// does NOT contain n and also n*2 as value. Otherwise, the function prints “I am NOT a
// Meera array”
// ○ Test 1: checkMeera([10, 4, 0, 5]) outputs “I am NOT a Meera array” because 5 *
// 2 is 10
// ○ Test 2: checkMeera([7, 4, 9]) outputs “I am a Meera array”
// ○ Test 1: checkMeera([1, -6, 4, -3]) outputs “I am NOT a Meera array” because -3
// *2 is -6

//Define a Function checkMeera that takes an array as an argument
function checkMeera(array) {
  let isMeera = true;
  
  // Iterate over each element in the array
  for (let i = 0; i < array.length; i++) {
    const n = array[i];
    const nTimes2 = n * 2; // Calculate n*2

    // Check if both n and n*2 exist in the array
    if (array.includes(n) && array.includes(nTimes2)) {
      isMeera = false;
      break;
    }
  }

  // Print the result
  if (isMeera) {
    console.log("I am a Meera array");
  } else {
    console.log("I am NOT a Meera array");
  }
}
checkMeera([10, 4, 0, 5]) //will output "I am NOT a Meera array" because 5*2 is 10.
checkMeera([7, 4, 9]) //will output "I am a Meera array" //because there is no n and n*2 in the array.
checkMeera([1, -6, 4, -3])// will output "I am NOT a Meera array" because -3*2 is -6.

console.log("Question 5");
// Define a Dual array to be an array where every value occurs exactly twice. For example,
// {1, 2, 1, 3, 3, 2} is a dual array.The following arrays are not Dual arrays {2, 5, 2, 5, 5} (5
// occurs three times instead of two times) {3, 1, 1, 2, 2} (3 occurs once instead of two
// times) Write a function named isDual that returns 1 if its array argument is a Dual array.
// Otherwise it returns 0.

// Define a Function take array as an argument
function isDual(arr) {
    // Create an empty object to store the count of each value
    let count = {};
  
    // Loop through the array and count each value
    for (let i = 0; i < arr.length; i++) {
      let value = arr[i];
  
      // If the value is already in the count object, increment its count
      // Otherwise, initialize its count to 1
      count[value] = count[value] ? count[value] + 1 : 1;
    }
  
    // Check if any value occurs more than twice or not exactly twice
    for (let key in count) {
      if (count[key] !== 2) {
        return 0;
      }
    }
  
    // All values occurred exactly twice, so it is a dual array
    return 1;
  }
  let arr1=[1,2,1,3,3,2];
  let arr2=[2,5,2,5,5];
  let arr3=[3,1,1,2,2];

console.log(isDual(arr1));
console.log(isDual(arr2));
console.log(isDual(arr3));

console.log("Question 6");
// ● Write a function that takes the number of seconds and returns the digital format clock
// time as a string. Time should be counted from 00:00:00.
// ○ Examples: digitalClock(5025) as "01:23:45" 5025 seconds is 1 hour, 23 mins, 45
// secs.
// ■ digitalClock(61201) as "17:00:01" No AM/PM. 24h format.
// ■ digitalClock(87000) as "00:10:00" It's 00:10 next day.

//Define the Function that have seconds as an argument
function digitalClock(seconds) {
    // Calculate the hours, minutes, and remaining seconds
    let hours = Math.floor((seconds / 3600)%24);
    let minutes = Math.floor((seconds % 3600) / 60);
    let remainingSeconds = seconds % 60;

    //Format the Time to hh:mm:ss
    let formattedTime;
    let sethours;
    let setminutes;
    let setseconds;

    if (hours<10){
        sethours="0"+hours;
    }
    else{
        sethours=hours;
    }
    if (minutes<10){
        setminutes="0"+minutes;
    }
    else{
        setminutes=minutes;
    }
    if (remainingSeconds<10){
        setseconds="0"+remainingSeconds;
    }
    else{
        setseconds=remainingSeconds;
    }
    formattedTime = sethours+":"+setminutes+":"+setseconds;
    return formattedTime;
  }
  //Test by input seconds
  let seconds1=5025;
  let seconds2=61201;
  let seconds3=87000;
  let seconds4=2400;
  console.log(digitalClock(seconds1)); // Output: "01:23:45"
  console.log(digitalClock(seconds2)); // Output: "17:00:01"
  console.log(digitalClock(seconds3)); // Output: "00:10:00"
  console.log(digitalClock(seconds4)); // Output: "00:40:00"