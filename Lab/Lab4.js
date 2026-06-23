function validateform()
{
    document.getElementById("nameError").innerHTML="";
    document.getElementById("emailError").innerHTML="";
    document.getElementById("phoneError").innerHTML="";
    document.getElementById("passwordError").innerHTML="";
    
    let name=document.getElementById("name").value.trim();
    let email=document.getElementById("email").value.trim();
    let phone=document.getElementById("phone").value.trim();
    let password=document.getElementById("password").value.trim();

    let namePattern= /^[A-Za-z\s]+$/;
    let emailPattern=  /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let phonePattern= /^[0-9]{10}$/;
    isValid=true;
    
    if(!namePattern.test(name))
    {
        document.getElementById("nameError").innerHTML=
        "Name should contain only letters.";
        isValid=false;
    }

    if(!emailPattern.test(email))
    {
        document.getElementById("emailError").innerHTML=
        "Enter a valid email address.";
        isValid=false;
    }

    if(!phonePattern.test(phone))
    {
        document.getElementById("phoneError").innerHTML=
         "Phone number must contain exactly 10 digits.";
         isValid=false;
    }

     if (password.length < 6) {
        document.getElementById("passwordError").innerHTML =
        "Password must be at least 6 characters.";
        isValid = false;
    }

    if (isValid) {
        alert("Registration Successful");
    }

    return isValid;

}