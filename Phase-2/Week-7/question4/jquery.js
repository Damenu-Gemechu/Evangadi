$(document).ready(function () {
    $("#registrationForm").on("submit", function (event) {
      event.preventDefault();

      var firstName = $("#firstName").val();
      var lastName = $("#lastName").val();
      var email = $("#email").val();

      if (firstName && lastName && email) {
        $("#registrationForm").hide();
        $("#confirmationMessage").show();

        $("#displayFirstName").text(firstName);
        $("#displayLastName").text(lastName);
        $("#displayEmail").text(email);
      } else {
        $("#errorMessage")
          .text("Please fill in all the required fields.")
          .show();
          if($("#firstName").val()==0 || $("#lastName").val()|| $("#email").val()){
            $('#audit_submit').click(function(){
                $('.required').each(function() {
                    if($(this).val() == '') {
                       $(this).css('background-color' , '#FF0000');
                    }
                });
            });
          }

      }
    });
  });