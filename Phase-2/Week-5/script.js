// Question 1: The following three questions are based on the two paragraphs under the
// section which says "For Question 1" in the index.html file.
// 1.1 Select the element with an id of "sample1".
// 1.2 Print the element itself on the console upon page refresh.
// 1.3 Print the content of the element on the console upon page refresh.
// Hint: Use the "textContent" property to select the content















// Function to add background color
function addBackgroundColor(color) {
    document.body.style.backgroundColor = color;
  }
  
  // Function to remove background color
  function removeBackgroundColor(none) {
    document.body.style.backgroundColor = none;
  }
  
  // Select 'Yes' element and bind click event
  var yesButton = document.getElementById('yesBackground');
  yesButton.addEventListener('click', function() {
    addBackgroundColor('#99ecff');
  });
  
  // Select 'No' element and bind click event
  var noButton = document.getElementById('noBackground');
  noButton.addEventListener('click', function() {
    removeBackgroundColor('white');
  });
  