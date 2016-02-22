        function submitForm(){
    // Initiate Variables With Form Content
    formProcess();
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
 
    $.ajax({
        type: "POST",
        url: "sendmail.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success : function(text){
            if (text == "success"){
                console.log("here I am success $text");
                formSuccess();
            }
            else
            {
                console.log("here I am not success :" );
                console.log(text);
            }
        }
    });
    console.log("here I am");
}

function formProcess(){
    $("#contactForm").addClass("hidden");
    $("#msgprocess").removeClass("hidden");
}

function formSuccess(){
    $("#msgprocess").addClass("hidden");
    $( "#msgSubmit" ).removeClass( "hidden" );
}

$("#contactForm").submit(function(event){
    console.log("here I am 2");
    // cancels the form submission
    event.preventDefault();
    submitForm();
});