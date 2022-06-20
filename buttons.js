document.getElementById('login-main-page').onclick = function() {
    // eraseCookieFromAllPaths('authenticated');
    location.href = "./login.php";
}

document.getElementById('signup-main-page').onclick = function() {
    location.href = "./registration/signup.php";
}