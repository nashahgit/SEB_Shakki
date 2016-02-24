        function submitForm(){
    // Initiate Variables With Form Content
    formProcess();
    var name = $("#name").val();
    var company = $("#company").val();
    var designation = $("#designation").val();
    var mobile = $("#mobile").val();
    var email = $("#email").val();
    var country = $("#country").val();
    var subject = $("#subject").val();
    var message = $("#message").val();
 
    $.ajax({
        type: "POST",
        url: "/SEB_Shakki/sendmail.php",
        data: "name=" + name +"&company=" + company + "&designation=" + designation + "&mobile=" + mobile + "&email=" + email + "&country=" + country + 
              "&subject=" + subject + "&message=" + message, 
        success : function(text){
            if (text == "success"){
                console.log("success");
                formSuccess();
            }
            else
            {
                console.log("not success :" );
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
    $('#contactForm').each(function(){
        this.reset();
    });
    $("#msgprocess").addClass("hidden");
    $( "#msgSubmit" ).removeClass( "hidden" );
}

$("#contactForm").submit(function(event){
    console.log("here I am 2");
    // cancels the form submission
    event.preventDefault();
    submitForm();
});