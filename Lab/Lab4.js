function validateform() {

    var a = document.forms["myform"]["name"].value;
    var b = document.forms["myform"]["email"].value;
    var c = document.forms["myform"]["phone"].value;
    var d = document.forms["myform"]["pwd"].value;

    // Name Validation
    var namePattern = /^[A-Za-z ]+$/;
    if (a == "") {
        alert("Please fill out name");
        return false;
    }
    if (!namePattern.test(a)) {
        alert("Name can contain only letters and spaces");
        return false;
    }

    // Email Validation
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (b == "") {
        alert("Please fill out email");
        return false;
    }
    if (!emailPattern.test(b)) {
        alert("Invalid email format");
        return false;
    }

    // Phone Validation
    var phonePattern = /^98[0-9]{8}$/;

    if (c == "") {
        alert("Please fill out phone");
        return false;
    }
    
    if (!phonePattern.test(c)) {
        alert("Phone must start with 98 and contain exactly 10 digits");
        return false;
    }

    // Password Validation
    if (d == "") {
        alert("Please fill out Password");
        return false;
    }
    if (d.length < 6) {
        alert("Password must be at least 6 characters");
        return false;
    }

    alert("Registration Successful");
    return true;
}