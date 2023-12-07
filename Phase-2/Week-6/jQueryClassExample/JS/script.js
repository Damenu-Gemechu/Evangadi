// ********************************************************************
// 10.3 - Selecting elements with jQuery (id, class, element selectors)
// ********************************************************************

// let apple = $("#one");
// console.log(apple);

// let redElements = $(".red");
// console.log(redElements);

// let h1Elements = $("h1");
// console.log(h1Elements);

// ********************************************************************
// 10.4 - Selecting elements with jQuery (filters)
// ********************************************************************
// // // first()
// $("h1").first().css("background-color", "blue");

// // // // // // last()
//  $("h1").last().css("background-color", "blue");

// // // even() and odd()

// $("h1").even().css("background-color", "green");
// $("h1").odd().css("background-color", "purple");

// // // nth-child()
// $("div h1:nth-child(2)").css("background-color", "lightgreen");

// // // has(selector)
// $("div").has("button").css("background-color", "yellow");

// // // :contains(text)
// $("h1:contains(Apple)").css("background-color", "orange");

// // // empty();
// $("div.myButtons").empty();

// // // - Visibility
// // // - hide()
// $("h1[id=three]").hide();

// // // // - visible()
// $("div h1:visible").css("background-color", "lightgreen");

// // // // - show()
// $("#three").show()

// ********************************************************************
// 10.5 - Updating or altering values: content and elements
// ********************************************************************

// //  html()
// console.log($("#numbersList").html());

// //     text()
// console.log($("#numbersList").text());

// //     remove()
// $("#one").remove();

// //     empty()
// $("#two").empty();

// //     before()
// $("#two").before("<h2>Hello</h2>");

// // // // //     after()
// $("#two").after("<h2>World</h2>");

// // // // //     prepend()
// $("#numbersList").prepend("<h1 class='lightblue'>Testing prepend method</h1>");

// // // // //     append()
// $("#numbersList").append("<h1 class='purple'>Testing append method</h1>");

// ***********************************************************************************
// 10.6 - Updating(altering) values: attributes, form value, looping through elements
// ***********************************************************************************

// //  - Attributes
// //         - addClass()
// $("#one").addClass("blue lightblue");

// // // //         - removeClass()
// $("#one").removeClass("lightblue");

// // add any attribute with a value
// $("#numbersList").attr("name", "Tech Giants");

// // access any attribute value
// console.log($("#four").attr("class"));

// console.log($("#four").removeAttr("class"));

// //         - css()
// $("form").css({
//     "background-color": "black",
//     "border": "5px solid red"
// });

// //     - Form value
// //         - val()
// console.log($("input [name='first name']").val());

// //         - $.isNumeric()
// console.log($.isNumeric("hi")); // false
// console.log($.isNumeric("4")); // true

// ***********************************
// //     - jQuery traversing Methods
// ***********************************

// //         - parent()
// $("input").parent().css({
// 	border: "5px solid red",
//     	backgroundColor: "blue"
// });

// //         - parents()
// $("input").parents().css({
//     border: "5px solid green",
// });

// // //         - children()
// $("form").children().css({ border: "2px solid red" });

// // // //         - find()
// $("div").find("#four").css({ border: "10px solid black" });

//         - siblings()
// $("span").siblings().css({ border: "10px solid blue" });

//         - next()
// $(".jeffBezos").next().css({ border: "4px solid blue" });

// // //         - nextAll()
// $(".jeffBezos").nextAll().css({ border: "4px solid blue" });

// // //         - prev()
// $(".elonMusk").prev().css({ border: "10px solid green" });

// // //         - prevAll()
// $(".elonMusk").prevAll().css({ border: "10px solid green" });

// //     - looping through elements using jQuery
// ***********************************************

// $("h1").css("background-color", "lightgreen");

// ********************************************************************
// 10.7 - Handling events
// ********************************************************************

// 1. Commonly Used jQuery Event Methods
// **************************************

// $("#clickMe1").click(function () {
// 	$(this).hide();
// });

// $("#clickMe2").dblclick(function () {
// 	$(this).prev().show();
// });

// // 2. The on() Method
// **********************

// $("#clickMe1").on("click", function () {
// 	$(this).hide();
// });

// $("#clickMe2").on("dblclick", function () {
// 	$(this).prev().show();
// });

// $("#formID").on("submit", function (e) {
// 	e.preventDefault();
// 	let firstInput = $("input[name='first name']").val();
// 	let secondInput = $("input[name='last name']").val();
// 	console.log(firstInput);
// 	console.log(secondInput);

// 	// if ($.isNumeric(firstInput) && $.isNumeric(secondInput)) {
// 	// 	let sum = parseInt(firstInput) + parseInt(secondInput);
// 	// 	$(this).append("<h1>" + sum + "</h1>");
// 	// } else {
// 	// 	$(this).append("<h1>Please enter numbers only</h1>");
// 	// }
// });

// // // multiple events causing one action
// $("#btn-4").on("mouseenter mouseleave click", function () {
// 	console.log("mouse hovered over or left or clicked on the button");
// });

// // // multiple events causing multiple actions
// $("#btn-3").on({
// 	mouseenter: function () {
// 		$(this).css("background-color", "green");
// 	},
// 	mouseleave: function () {
// 		$(this).css("background-color", "blue");
// 	},
// 	click: function () {
// 		$("body").css("background-color", "yellow");
// 	},
// 	dblclick: function () {
// 		$("body").css("background-color", "white");
// 	},
// });

// ********************************************************************
// 10.8 - Effects and animations in jQuery
// ********************************************************************

// toggle() - hide and show together

$(".techGiants").click(function () {
	$("#numbersList").toggle();
});

// // slideToggle()

// $(".techGiants").click(function () {
// 	$("#numbersList").slideToggle();
// });

// // fadeToggle()
// $(".techGiants").click(function () {
// 	$("#numbersList").fadeToggle(2000);
// });

// // // // Animate
// $(".techGiants").click(function () {
// 	$("#numbersList")
// 		.animate({ width: "90%" }, 1000)
// 		.animate({ fontSize: "24px" }, 1000);
// });

// // reset the above
// $("span").click(function () {
// 	$("#numbersList")
// 		.animate({ width: "100%" }, 1000)
// 		.animate({ fontSize: "16px" }, 1000);
// });

// // 	// // to reset automatically after 3 seconds (append it inside the animate function)
// setTimeout(() => {
// 	$("#numbersList")
// 		.animate({ width: "100%" }, 1000)
// 		.animate({ fontSize: "16px" }, 1000);
// }, 3000);
