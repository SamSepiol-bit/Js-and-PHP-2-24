function validateForm() {
    var valid = true;
    
        if(document.loginForm.loginName.value == "") {
            alert("Please  fill user name field");
            document.loginForm.loginName.focus();
            valid = false;
        } else {
            if (document.loginForm.password.value == "") {
                alert("Please fill password filed ");
                document.loginForm.password.focus ();
                valid = false;
            }
            return valid;
        }
    }

    function validateForm() {
        var username = document.forms["loginForm"]["loginName"].value;
        var password = document.forms["loginForm"]["password"].value;

        // Check if the username and password match the correct ones
        if (username === "admin" && password === "12345") {
            // Redirect to the home.html if the credentials are correct
            window.location.href = "home.html";
            return false; // Prevent form submission
        } else {
            alert("Incorrect username or password. Please try again.");
            return false; // Prevent form submission
        }
    }

