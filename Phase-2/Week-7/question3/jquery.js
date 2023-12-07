$(document).ready(function() {
    $('#numberForm').submit(function(e) {
      e.preventDefault();
  
      var num1 = parseFloat($('#number1').val());
      var num2 = parseFloat($('#number2').val());
  
      if (isNaN(num1) || isNaN(num2)) {
        $('#result').text("Please enter numerical values only");
      } else {
        var sum = num1 + num2;
        var avg = (num1 + num2) / 2;
  
        console.log("Sum:", sum);
        console.log("Average:", avg);
  
        $('#result').html("Sum: " + sum + "<br/>Average: " + avg);
      }
    });
  });
  