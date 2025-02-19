function crs(event) {
    let x = document.getElementById('password').value;
    let u = 0, l = 0, d = 0, s = 0;
    for (let i = 0; i < x.length; i++) {
    if (x[i] >= 'A' && x[i] <= 'Z') {
    u = 1;
    } else if (x[i] >= 'a' && x[i] <= 'z') {
    l = 1;
    } else if (x[i] >= '0' && x[i] <= '9') {
    d = 1;
    } else if (/[!@#$%^&*(),.?":{}|<>]/.test(x[i])) {
    s = 1;
    }
    }
    let isValid = true;
    
    if (u == 0) {
    document.getElementById('up').innerHTML = "One Capital Letter required";
    isValid = false;
    } else {
    document.getElementById('up').innerHTML = "";
    }
    if (l == 0) {
    document.getElementById('low').innerHTML = "<br>One Small Letter required";
    isValid = false;
    } else {
    document.getElementById('low').innerHTML = "";
    }
    if (d == 0) {
    document.getElementById('d').innerHTML = "<br>One Digit required";
    isValid = false;
    } else {
    document.getElementById('d').innerHTML = "";
    }
    if (s == 0) {
    document.getElementById('sc').innerHTML = "<br>One SpecialCharacter required";
    isValid = false;
    } else {
    document.getElementById('sc').innerHTML = "";
    }
    if (!isValid) {
    event.preventDefault();
    }
    return isValid;
    }