function handleContactForm() {
  
    var formData = {
        firstName: $("#firstName").val(),
        lastName: $("#lastName").val(),
        email: $("#email").val(),
        interestedArea: $("input[name='interestedArea']:checked").val(),
        message: $("#message").val()
    };

    // Check for not null values
    var hasEmptyFields = false;
    for (var field in formData) {

        if (field != 'message' && (formData[field] === "" || formData[field] === null)) {
            hasEmptyFields = true;
            break; // Stop iterating if an empty field is found
        }
    }

    if (hasEmptyFields) {
        $('#validationResult').text('Please fill in all required fields.');
        console.error("Please fill in all required fields.");
        return; // Exit the function if there are empty fields
    }

    $.ajax({
        type: "POST",
        url: "/api/sendmessage.php", // Replace with your actual server-side script URL
        data: formData,
        dataType: "json", // Specify expected response format (optional)
        success: function (response) {

            console.log(response);
            $('#validationResult').text(response['body']);
            $("#firstName").val(''),
            $("#lastName").val(''),
            $("#email").val(''),
            $("input[name='interestedArea']:checked").val('checked'),
            $("#message").val('')

            $('#validationResult').text(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error("Error:", textStatus, errorThrown);
        }
    });
}
