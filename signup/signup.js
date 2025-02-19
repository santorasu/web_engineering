function crs(event) {
    // Prevent form submission if validation fails
    event.preventDefault();

    // Get form values
    const fname = document.getElementById('fname').value.trim();
    const lname = document.getElementById('lname').value.trim();
    const username = document.getElementById('username').value.trim();
    const gender = document.querySelector('input[name="gender"]:checked');
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;

    // Reset error messages
    document.getElementById('fnameError').innerHTML = "";
    document.getElementById('lnameError').innerHTML = "";
    document.getElementById('usernameError').innerHTML = "";
    document.getElementById('genderError').innerHTML = "";
    document.getElementById('emailError').innerHTML = "";
    document.getElementById('up').innerHTML = "";
    document.getElementById('low').innerHTML = "";
    document.getElementById('d').innerHTML = "";
    document.getElementById('sc').innerHTML = "";

    let isValid = true;

    // Validate First Name
    if (fname === "") {
        document.getElementById('fnameError').innerHTML = "First Name is required";
        isValid = false;
    }

    // Validate Last Name
    if (lname === "") {
        document.getElementById('lnameError').innerHTML = "Last Name is required";
        isValid = false;
    }

    // Validate Username
    if (username === "") {
        document.getElementById('usernameError').innerHTML = "Username is required";
        isValid = false;
    }

    // Validate Gender
    if (!gender) {
        document.getElementById('genderError').innerHTML = "Gender is required";
        isValid = false;
    }

    // Validate Email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
        document.getElementById('emailError').innerHTML = "Email is required";
        isValid = false;
    } else if (!emailPattern.test(email)) {
        document.getElementById('emailError').innerHTML = "Invalid email format";
        isValid = false;
    }

    // Validate Password
    let u = 0, l = 0, d = 0, s = 0;
    for (let i = 0; i < password.length; i++) {
        if (password[i] >= 'A' && password[i] <= 'Z') {
            u = 1;
        } else if (password[i] >= 'a' && password[i] <= 'z') {
            l = 1;
        } else if (password[i] >= '0' && password[i] <= '9') {
            d = 1;
        } else if (/[!@#$%^&*(),.?":{}|<>]/.test(password[i])) {
            s = 1;
        }
    }

    if (u === 0) {
        document.getElementById('up').innerHTML = "One Capital Letter required";
        isValid = false;
    }
    if (l === 0) {
        document.getElementById('low').innerHTML = "One Small Letter required";
        isValid = false;
    }
    if (d === 0) {
        document.getElementById('d').innerHTML = "One Digit required";
        isValid = false;
    }
    if (s === 0) {
        document.getElementById('sc').innerHTML = "One Special Character required";
        isValid = false;
    }

    // If all validations pass, submit the form
    if (isValid) {
        document.querySelector('form').submit();
    }
}

// Attach the validation function to the form's submit event
document.querySelector('form').addEventListener('submit', crs);