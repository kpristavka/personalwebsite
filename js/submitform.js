function SubmitForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;

    var dataString = 'name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message;

    // AJAX code to submit form.
    $.ajax({
        type: "POST",
        method: "POST",
        url: "php/submit-form-data.php",
        data: dataString,
        dataType: "text",
        cache: false,
        success: function () {
            alert("Message has been sent!");
        },
        error: function(){
            console.log("SubmitForm. Error...");
        }
    });

    var frm = document.getElementById("contact_form").reset();

    return false;
}
