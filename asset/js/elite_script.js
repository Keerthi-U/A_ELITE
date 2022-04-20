// validation  registration

 
  $("#registration").validate({
    // Specify validation rules
    rules: {
      firstname:{
        required: true,
        firstname: true
      },
      lastname: "required",
      email: {
        required: true,
        email: true
      },      
    password: {
        required: true,
        minlength: 5,
      }
    },
    messages: {
      firstname: {
      required: "required",
     },      
     password: {
      required: "required",
     },     
    email: {
      required: "required",
      email: "Please enter a valid email address.",
     },
     
    },
    errorPlacement: function(error, element) {
    if (element.attr("name") == "first_name")
        error.insertAfter(".frequried");
    else if  (element.attr("name") == "email" )
        error.insertAfter(".erequried");
        else if  (element.attr("name") == "password" )
        error.insertAfter(".prequried");
    else
        error.insertAfter(element);
}
  
  });


// after google recaptcha submit button
  function enableBtn(){
   document.getElementById("button1").disabled = false;
 }
