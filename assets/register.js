$('#btn-reg').click(function(){
    check();
});

var check = () => {
    var name = $('#name').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var cpassword = $('#cpassword').val();

    if (name.trim() === "" || email.trim() === "" || password.trim() === "" || cpassword.trim() === "") {
        alert("Please fill in all fields");
        return;
    }

    if (password !== cpassword) {
        alert("The passwords do not match");
        return;
    }

    doRequest(name, email, password, cpassword);
}

var doRequest = (name, email, password, cpassword) => {
    $.ajax({
        type: "POST",
        url: "./include/router.php",
        data: {
            choice: 'register',
            name: name,
            email: email,
            password: password,
            cpassword: cpassword
        },
        success: function(data) {
            if (data == "200") {
                alert("Registration successful");
                // window.location.href = "./";
            } else {
                alert("Registration unsuccessful" );
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert("Error: " + thrownError);
        }
    });
}
