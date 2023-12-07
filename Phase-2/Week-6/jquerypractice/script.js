// 4. Selecting elements with jQuery (id, class, element selectors)

// // Dom
// let display1 = document.getElementById("two");
// console.log(display1);

// display1 = document.getElementsByTagName("div");
// console.log(display1);

// //jQuery
// let display2 = $("#two");
// console.log(display2);

// display2 = $("div");
// console.log(display2);

// let el = $("#one")
// console.log(el)

// let el2 = $(".red")
// console.log(el2)


// like in CSS call using method use in jQuary 

// id = #
// class = .
// element = h1


// 2.Selecting elements with jQuery (filters)
// - first()
// - last() 
// - even() and odd() 
// - nth-child() or nth-children()

// // Dom
// let fel = document.querySelector("#techCompanies li:first-child");
// fel.style.backgroundColor = "pink";

// //jquery
//  console.log($("li").first().css("background-color", "red"));
//  $("li").last().css("background-color", "blue");

 // // Dom
 ////by Dom using for loop to identifiy even and odd

// let listItems = document.querySelectorAll("#techCompanies li");

// for (let i = 0; i < listItems.length; i++) {
//   let li = listItems[i];  

//   if (i % 2 === 0) {
    
//     li.style.backgroundColor = "green";
//   } else {
   
//     li.style.backgroundColor = "prple";
//   }
// }

//  nth-child(2)

// //jquery

        // var el = $("li:even");
		// console.log(el);

		// var el = $("li:odd");
		// console.log(el);

//  $("li").even().css("background-color", "green");
// $("li").odd().css("background-color", "purple");


//DOM
// let secondLi = document.querySelector("#techCompanies li:nth-child(2)");
// secondLi.style.backgroundColor = "lightgreen";

// by jQuery
//4.nth-child() or nth-children():
// $("ul li:nth-child(2)").css("background-color", "lightgreen");

// Content filters
//  - has(selector)
//  - contains(text)
//  - empty()

//  Visibility
//     - hidden()
//     - visible()
//     - show()


// //has(selector)

// console.log($('div:has(ul)').addClass('highlight'));

// $("div").has("p").css("background-color", "pink");

// :contains(text):
// $('li:contains("Samsung")').addClass('highlight');
// $("li:contains('Apple')").css("background-color", "pink");

//empty():
// $("#one").empty();

// Visibility
    // // hidden():
    //    $("li[id = four]").hide();

    // // visible()  
    // $("ul li:visible").css("background-color", "lightgreen");


    // // //show()
    // $("#four").show();

// 5.Updating or altering values: content and elements

     // //     - html()
     //    let el = $("#techCompanies").html()
          // console.log(el)     
    //    let el = $("#techCompanies").html("<h1>Hello Group2</h2>")
    


    //  //   -text()
    // let el1 = $("#techCompanies").text();
    // let el1 = $("#techCompanies").text("hi");
    // console.log(el1);

    // $("#two").html("<p>banana</p>");

    //     -remove() and empty()

    // var el = $("li:empty");		
    // $("#five").remove();// removes our element with child.
    // $("#five").empty();// removes only the child/value

        // 5.1.Updating elements:
        //     - before()
        //     - after()
        //     - prepend()
        //     - append()

        // let el = $("#one");
		// el.before('<li> fruites list</li>');

        // let el1 = $("#four");
		// el1.after('<li> strobery </li>');


        // let el2 = $("#techCompanies");
		// el2.prepend("<li class='green'> Added using the prepend method </li>");	

        // let el3 = $("#techCompanies");
		// el3.append("<li class='green'> Added using the append method </li>");

        // var el = $("#five");
		// el.append("<p class='green'>onion</p>");	


//   6 Altering values: attributes, form value, looping through elements
        // Attributes:
        //     - addClass()
        //     - removeClass()
        //     - css()
        // // addClass()
        // console.log($("#one").addClass("blue green"));    
        
        // // removeClass()
        // $("#one").removeClass("green");    

        // add any attribute with a value use attr()

      //  $("#techCompanies").attr("name" ,"EvangadiClass");
      //  console.log($("#four").attr("class"));

    //   css()
		// $("#one").css({"background-color": "black", "color": "#fff"});
		// $("li").css("border", "4px solid pink");

        // Form value:
        //     - val()
        //     - $.isNumeric()

        // val()
        // var el = $("input:first");
		// console.log(el);
		// el.val("Some value");
	


        // $.isNumeric()
        /*function is used to specify a callback function that should be executed when the DOM (Document Object Model) is fully loaded and ready to be manipulated. It ensures that the JavaScript code inside the callback function is executed only after the DOM has finished loading.*/

        // $(document).ready(function() {
            
        //     $('#checkNumericBtn').click(function() {              
        //       let inputValue = $('#inputField').val();         
        //       let isNumeric = $.isNumeric(inputValue);         
            
        //       let resultMessage = isNumeric ? 'The value is numeric.' : 'The value is not numeric.';
        //       $('#result').text(resultMessage);
        //     });
        //   });


   // jQuery traversing: Methods to up the DOM
        //     - parent()
                // $("ul").parent().css({ border: "2px solid red" });

        //     -parents()
                $("ul").parents().css({ border: "2px solid green" });

        // Methods to traverse down the DOM

        //     - children()

        //   $("div").children().css({border: "2px solid" });

        //     - find()

        // $("div").find("li").css({ border: "2px solid black" });

        // Methods to travers sideways in the DOM

        // //     - siblings()
           // $("li").siblings().css({ border: "4px solid red" });
        // //     - next()
        //    $("div").next().css({ border: "4px solid red" });

        // //     - nextAll()

        // $("p").nextAll().css({ border: "4px solid red" });

        // Looping through elements

        // //DOM
        // let element1 = document.getElementsByTagName("li");
        // for (let i = 0; i < element1.length; i++) {
        // let allLi = element1[i];
        // allLi.style.backgroundColor = "pink";
        // }

        // //Jquery}
        // $("li").css("background-color", "pink")

// 7 Handling events

//1.common used jQuery Event method
      $("#three").click(function(){
            $(this).hide();
        });

        $("#four").dblclick(function(){
          $(this).prev().show();
      });
    //     $("#clickMe1").click(function(){
    //       $(this).hide();
    //   });

    //   $("#clickMe2").dblclick(function(){
    //     $(this).prev().show();
    // });

     

        // - on()
        // //Bind any event triggered on the selected elements to an event handler
        
    //     $("#three").on("click" ,function(){
    //       $(this).hide();
    //   });

    //   $("#four").on("dblclick",function(){
    //     $(this).prev().show();
    // });

        // $( "li" ).on( "click", function() {
        //     console.log( "<p> was clicked" );
        //    });
        
        // by on form manage
         // $("#registration-form").on("submit", function(e){
      //   e.preventDefault();
      //   let input1 =$("input[name = 'first-name']").val();
      //   let input2 =$("input[name = 'last-name']").val();
      //   if($.isNumeric(input1) && $.isNumeric(input2)){
      //     let sum = parseInt(input1) + parseInt(input2);
      //     $(this).append("<h2>" + sum +"</h2>")
      //   }
      //   else{
      //     $(this).append("<h2> Please enter numbers only</h2>")
      //   }
      // })

        // //    Bind multiple events to one event handler
        //    $( "div" ).on( "mouseenter mouseleave", function() {
        //     console.log( "mouse hovered over or left a div" );
        //    });

        // // Bind any event triggered on the selected elements to an event handler
          
        // $("div").on({
        //     click: function () {
        //     console.log("clicking div");
        //     },
        //     mouseenter: function () {
        //     $("div").css("background-color", "yellow");
        //     },
        //     mouseleave: function () {
        //     console.log("mouse leaving div");
        //     },
        //     });

        // Other most popular jQuery event methods:
                // blur()

                // $("input").blur(function () {
                //     $("input").css("background-color", "red");
                //     alert("This text box has lost its focus");
                //     });
                    
                // // keypress()
                // $("input").keypress(function () {
                //     $("label").css("background-color", "pink");
                //     });

                // // click()
                // $("p").click(function(){
                //     $("div").hide();
                //    });


    // Form events:
    // //   -submit()
    //         $("form").on("submit", backgroundChanger);
    //         function backgroundChanger() {
    //         $("#firstInput").css("background-color", "pink");
    //         }
    // Browser/window /document events

     
    // - ready(), 
    //     $(document).ready(function(){
    //         alert("Document is now ready!");
    //         });
        
    // - load(), 
    // $(document).ready(function() {
    //     // Button click event
    //     $('#loadContentBtn').click(function() {
    //       // Load content from a file and inject it into the #content element
    //       $('#content').load('content.html', function(response, status, xhr) {
    //         if (status == 'success') {
    //           console.log('Content loaded successfully!');
    //         } else {
    //           console.log('Error loading content.');
    //         }
    //       });
    //     });
    //   });
    // - resize(), 
    // let x = 0
    // $(window).resize(function(){
    //     $('span').text(x += 1);});
    // - unload(), Removed in version 3.0
    // - error(),Removed in version 3.0
    // - scroll()
    // $("div").scroll(function(){
    //     $("span").text(x += 1);
    //   });
    
// 8 Effects and animations in jQuery
// toggle()
// $("#ulList").click(function(){
//   $("#techCompanies").toggle()
// });
// slideToggle()
// $("#ulList").click(function(){
//   $("#techCompanies").slideToggle()
// });

//fadeToggle()
$("#ulList").click(function(){
  $("#techCompanies").fadeToggle(2000)
});


    // // - toggle()
            // $("p#firstPar").on("click", function () {
            //     $("p#thirdPar").toggle(1000);
            //     });

    // // slideUp():

        // $(document).ready(function() {
        //     $("#slideUpButton").click(function() {
        //       $("#myElement").slideUp(3000);
        //     });
        //   });

    //   slideDown()
    // $(document).ready(function() {
    //     $("#slideDownButton").click(function() {
    //       $("#myElements").slideDown(3000);
    //     });
    //   });


    //   slideToggle()
    // $(document).ready(function() {
    //     $("#slideToggleButton").click(function() {
    //       $("#myElement1").slideToggle(3000);
    //     });
    //   });

    //   Some of jQuery’s fading Effects: fadeIn(), fadeOut(), fadeToggle()\

    // fadeOut()
          //   $(document).ready(function() {
          //   $("#fadeOutButton").click(function() {
          //     $("#myElement2").fadeOut(3000);
          //   });
          // });

    // fadeIn()
    // $(document).ready(function() {
    //     $("#fadeInButton").click(function() {
    //       $("#myElement1").fadeIn(3000);
    //     });
    //   });

    //   fadeToggle()
    
    // $(document).ready(function() {
    //     $("#fadeToggleButton").click(function() {
    //       $("#myElement3").fadeToggle(3000);
    //     });
    //   }); 

  
    // delay(), 
    // $(document).ready(function() {
    //     $("#delayButton").click(function() {
    //       $("#myElement4").delay(2000).fadeIn(1000);
    //     });
    //   });

    // stop(), 
    // $(document).ready(function() {
    //     var $myElement = $("#myElement5");
    //     var animationRunning = false;
        
    //     $("#startButton").click(function() {
    //       if (!animationRunning) {
    //         $myElement.animate({left: '500px'}, 3000);
    //         animationRunning = true;
    //       }
    //     });
        
    //     $("#stopButton").click(function() {
    //       if (animationRunning) {
    //         $myElement.stop();
    //         animationRunning = false;
    //       }
    //     });
    //   });
      
    // animate()
    // $(document).ready(function() {
    //     $("#animateButton").click(function() {
    //       $("#myElement6").animate({
    //         left: '200px',
    //         opacity: '0.5',
    //         height: '200px',
    //         width: '200px'
    //       }, 2000);
    //     });
    //   });
    
    // $("#ulList").click(function(){
    //   $("#techCompanies")
    //   .animate({width: "90%"}, 1000)
    //   .animate({fontSize: "34px"}, 1000);
    // });

    // reset Animation

    // $("#ulList").click(function(){
    //   $("#techCompanies")
    //   .animate({width: "100%"},1000)
    //   .animate({fontSize: "16px"},1000);
    // });

   // Automatic Reset
    setTimeout(()=>{
      $("#techCompanies")
      .animate({width: "100%"},1000)
      .animate({fontSize: "16px"},1000);
    } , 3000)









