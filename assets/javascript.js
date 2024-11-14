$("#form-message").hide();
$("#contact-form").submit(function(e) {
    e.preventDefault();
    var form = $(this);
    $.ajax({
        url: "assets/contact/contact.php",
        method: "POST",
        data: form.serialize(),
        success: function(result){
            if (result == "The email massage was sent.") {
                $("#form-message").show();
                $("#contact-form")[0].reset();
                setTimeout(() => {
                    $("#form-message").hide();
                }, 10000);
            }
        }
    });
})