$('#addUser').click(function() {
    check();
});

var check = () => {
    var name = $('#name').val().trim();
    var company = $('#company').val().trim();
    var phone = $('#phone').val().trim();
    var email = $('#email').val().trim();

    if (name !== "" && company !== "" && phone !== "" && email !== "") {
        doRequest(name, company, phone, email);
    } else {
        alert('Please fill up all the fields.');
    }
}

var doRequest = (name, company, phone, email) => {
    $.ajax({
        type: "POST",
        url: "../include/router.php",
        data: {
            choice: 'adduser',
            name: name,
            company: company,
            phone: phone,
            email: email
        },
        success: function(data) {
            if (data === "200") {
                window.location.href = "./index.php";
            } else {
                alert("Unsuccessful addition: " + data); // Alert the error message returned from server
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert("Error: " + thrownError); // Alert the specific error encountered
        }
    });
}
