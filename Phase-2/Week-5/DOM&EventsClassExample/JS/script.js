//*************************************************************************
// 8.2 - How do we add JS into our HTML?
//*************************************************************************
// console.log(document.getElementById("one")); // checkout the different results by attaching your "script" file on the "html" file at the bottom of the page right before closing body tag and inside the head tag (without "defer" & "async" keywords and with)

//*************************************************************************
// 8.3 - What is DOM
//*************************************************************************

// console.dir(document);

// document.body.children[0].innerText = "Hello Class"

//*************************************************************************
// 8.4 DOM Tree
//*************************************************************************

// Example 1 (DOM node VS. DOM element)
// console.log(document.body.childNodes);

// console.log(document.body.children);

// Example 2 (DOM node VS. DOM element)
// console.log(document.querySelectorAll("h1")[4].childNodes); // NodeList(2) [text, b]
// console.log(document.getElementsByTagName("h1")[4].children); // HTMLCollection [b]

// ************************************************************************
// 8.6 & 8.7 - DOM manipulation: selecting elements (part-1 & part-2)
// **************************************************************************

// // // Selecting individual elements
// // 1. getElementById() method

// console.dir(document)
// console.log(document.body.children[1].children[0])

// let firstElement = document.getElementById("one");
// console.log(firstElement);

// console.log(firstElement.className);
// firstElement.className = "blue";

// document.getElementById("four").className = "blue";

// // 2. querySelector() method

// console.log(document.querySelector("#two"));
// console.log(document.querySelector(".red"));
// console.log(document.querySelector("h1"));

// // // Selecting multiple elements

// // 1. getElementsByClassName() method

// let redElements = document.getElementsByClassName("red");
// console.log(redElements);
// console.log(redElements[2]);
// console.log(redElements.item(2));

// // 2. getElementsByTagName() method

// let tagElements = document.getElementsByTagName("h1");
// console.log(tagElements);
// console.log(tagElements[4]);

// // 3. querySelectorAll() method

// let queryElements = document.querySelectorAll("h1");
// console.log(queryElements);

// console.log(queryElements[3]);

// console.log(document.querySelectorAll(".red"));

//**********************************************************************************
// 8.8 - HTMLCollection vs NodeList (use the google debugger tool for demonstration)
//**********************************************************************************

// let myElements = document.querySelectorAll(".red"); // NodeList

// let myElements = document.getElementsByClassName("red"); // HTMLCollection

// let myElements = document.getElementsByTagName("h1"); // HTMLCollection

// console.log(myElements);

// myElements[0].className="blue"

// for (let i = 0; i < myElements.length; i++) {
// 	const element = myElements[i];
// 	element.className = "blue";
// 	// element.outerHTML = `<li>${element.textContent}</li>`;
// }

// console.log(myElements); // Length changes for selectors that return HTMLCollection because of live update.

// ***********************************************************************
// 8.9 - Selecting elements (traversing between multiple elements)
//************************************************************************
// // //  1. firstElementChild
// console.log(document.getElementById("numbersList").firstElementChild);

// // // 2. lastElementChild
// console.log(document.getElementById("numbersList").lastElementChild);

// // // 3. parentElement
// console.log(document.getElementById("one").parentElement);

// // // 4. previousElementSibling
// console.log(document.getElementById("three").previousElementSibling);

// // // 5. nextElementSibling
// console.log(document.getElementById("three").nextElementSibling);

// // // 6. nth-child
// console.log(document.querySelectorAll(".red:nth-child(2)")); // P.S it starts from 1

//*************************************************************************
// 8.10 - Altering values (working with HTML content)
//*************************************************************************

// 1. createElement() method
// let liElem = document.createElement("li");
// console.log(liElem);

// // 2. appendChild() method
// let parent = document.getElementById("numbersList");

// parent.appendChild(liElem);

// liElem.innerText = "Hi Everyone"

// // 3. prepend () method
// parent.prepend(liElem);

// // 4. innerHTML and outerHTML properties
// liElem.innerHTML = "<i>Selam new using innerHTML</i>";

// liElem.outerHTML = "<p>Selam new 2 using outerHTML</p>";

// // 5. textContent() properties
// liElem.textContent = "Hello class";

// // 6. removeChild() method
// let childElement = document.getElementById("two");
// parent.removeChild(childElement);

// // 7. after() and before() method

// // // Get the reference Element
// let myReferenceElement = document.querySelector('#three');

// // // // Insert the new Element before the reference Element
// myReferenceElement.after(liElem);

// myReferenceElement.before(liElem);

//************************************************************************
// 8.11 - Altering values (working with HTML attribute)
//************************************************************************
// let parent = document.getElementById("numbersList");

// console.log(parent.className)

// // 1. className property
// parent.className = "yellow";

// parent.className = "blue pink"; // you can add multiple class too
// console.log(parent.className);

// // // // // 2. ClassList() method

// console.log(parent.classList);
// // // // // // // // adding a class using classList method
// parent.classList.add("violet");
// console.log(parent.classList);

// // // // // // // removing a class using classList method
// parent.classList.remove("pink");
// console.log(parent.classList);

// // // // // - adding and removing together -> classList.toggle()
// parent.classList.toggle("violet");
// console.log(parent.classList);

// //  3. Id property
// parent.id = "newID";
// console.log(parent.id);

// // // 4. hasAttribute() method
// console.log(parent.hasAttribute("href")); // false
// console.log(parent.hasAttribute("id")); // true

// // // 5. getAttribute() method
// console.log(parent.getAttribute("type"));

// // // 6. setAttribute() method
// parent.setAttribute("class", "yellow");
// parent.setAttribute("name", "abebe");

// let imageElement = document.createElement("img");
// console.log(imageElement);

// imageElement.setAttribute(
// 	"src",
// 	"https://earthsky.org/upl/2022/06/Christy-Mandeville_dramatic-sunset-with-child-silhouette_Indian-Shores-FL_2022-jun-08-e1655264484437.jpg"
// );

// parent.appendChild(imageElement);

// imageElement.setAttribute("width", "50%");

// // // // 7. removeAttribute() method
// imageElement.removeAttribute("width");

//************************************************************************
// 8.12 directly (without the need of classes or ids)
//************************************************************************

// let parent = document.getElementById("numbersList");

// parent.style.backgroundColor = "green";
// parent.style.fontSize = "30px";
// parent.style.color = "white";
// parent.style.border = "black double 20px";
// parent.style.display = "none";
// parent.style.display = "block";

// //*********************************************************************
//  9 - JS Events
// //*********************************************************************

// //*********************************************************************
// 9.5 - Ways to bind an event (HTML event handlers)
// //*********************************************************************

// // 1. HTML event handlers attribute

// // A function that will be executed when the event is triggered (event listener)
// let techParent = document.getElementById("numbersList");

// function changeColor() {
// 	techParent.style.color = "blue";
// 	techParent.style.backgroundColor = "yellow";
// }

// function removeColor() {
// 	techParent.style.color = "";
// 	techParent.style.backgroundColor = "";
// }

// //*********************************************************************
// 9.6 - Ways to bind an event (traditional DOM event handlers)
// //*********************************************************************

// // // 2. Traditional DOM event handlers

// // Step:1 Selecting elements

// let btn2 = document.getElementById("btn-2");

// // // Step:2 Binding
// btn2.onclick = changeToBlack;

// // // Step:3 Event listener
// let techParent = document.getElementById("numbersList");

// function changeToBlack() {
// 	techParent.style.color = "white";
// 	techParent.style.backgroundColor = "black";
// }

// //*********************************************************************
// 9.7 - Ways to bind an event (DOM level event listeners)
// //*********************************************************************

// // 3. DOM level event listeners

// // Step:1 Selecting elements
// let btn3 = document.getElementById("btn-3");

// let techParent = document.getElementById("numbersList");
// // Step:2 & 3 Binding and Event listener together
// btn3.addEventListener("click", function () {
// 	techParent.style.color = "blue";
// 	techParent.style.backgroundColor = "aqua";
// });

// // or //

// // Step:2 binding
// btn3.addEventListener("click", changeToAqua);

// // Step:3 Event listener
// function changeToAqua() {
// 	techParent.style.color = "blue";
// 	techParent.style.backgroundColor = "aqua";
// }

// //************************************************************************
// // 9.8 Halting default behaviors (preventDefault())
// //************************************************************************

// // stopping default behavior for anchor tag
// //*****************************************
// console.log(document.getElementsByTagName("a")[0]);

// document.getElementsByTagName("a")[0].addEventListener("click", function (e) {
// 	e.preventDefault();
// 	document.getElementsByTagName("a")[0].textContent = "Hello World";
// });

// //************************************************************************
// 9.9 - Form validation exercise
// //************************************************************************
// selecting
let myForm = document.getElementById("formID");

// event listener
function checkValidity(e) {
	e.preventDefault();
	console.log("Form submission");

	let myInput = document.querySelectorAll("#formID input");
	console.log(myInput);

	myInput[0].style.backgroundColor = "";
	myInput[1].style.backgroundColor = "";

	if (myInput[0].value.length == 0) {
		alert("please enter first name");
		myInput[0].style.backgroundColor = "pink";
	}

	if (myInput[1].value.length == 0) {
		alert("please enter last name");
		myInput[1].style.backgroundColor = "pink";
	}

	if (myInput[0].value.length !== 0 && myInput[1].value.length !== 0) {
		alert("Thanks, form Submitted");

		let outPut = myInput[0].value + " " + myInput[1].value; // normally they are treated as strings.

		// let outPut = Number(myInput[0].value) + Number(myInput[1].value); // if you want to treat them as numbers

		let result = document.getElementById("result");
		result.textContent = outPut;
	}
}

// binding
// myForm.addEventListener("submit", checkValidity);

// function validateEmail(email) {
// 	// Regular expression for basic email validation
// 	const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
// 	return regex.test(email);
// }
// console.log(validateEmail("test@evangadi.com"))

// //************************************
// stopPropagation() example (Additional)
// //************************************

// let div1 = document.getElementById("div1");
// let div2 = document.getElementById("div2");

// div1.addEventListener("click", () => {
// 	alert("Div 1 is clicked");
// });

// div2.addEventListener("click", (e) => {
// 	e.stopPropagation(); // Without this it would also alert "Div 1 is clicked"
// 	alert("Div 2 is clicked");
// });

// // // keyboard events
// document.addEventListener("keydown", function (event) {
// 	var keycode = event.key;
// 	console.log(keycode);

// 	if (keycode === "Enter") {
// 		console.log("Enter key pressed");
// 	}
// });
