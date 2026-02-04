
submitFormSignup = (submitSignup, name) => {
    if (submitSignup) {
        if (document.getElementById("errorSignup")) document.getElementById("errorSignup").innerHTML = "Account created successfully";
        // The redirection will handle the UI state via PHP sessions
        window.location.href = "../index.php";
    } else {
        if (document.getElementById("errorSignup")) document.getElementById("errorSignup").innerHTML = "User name already exists";
    }
}

submitFormSignin = (submitSignin, name) => {
    if (submitSignin) {
        if (document.getElementById("errorSignin")) document.getElementById("errorSignin").innerHTML = "Connected successfully";
        // The redirection will handle the UI state via PHP sessions
        window.location.href = "../index.php";
    } else {
        if (document.getElementById("errorSignin")) document.getElementById("errorSignin").innerHTML = "User name or password is incorrect";
    }
}

signout = () => {
    // This function is likely unused if we use direct links, but keeping it for safety
    window.location.href = "php/signout.php";
}
