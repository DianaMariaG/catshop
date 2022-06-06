function setLoggedInState(){
    document.getElementById('login-main-page').style.visibility = 'hidden'; //make login invisible
    document.getElementById('logout-main-page').style.visibility = 'visible'; //make logout visible
    document.getElementById('signup-main-page').style.visibility = 'hidden';
}

function setLoggedOutState(){
    document.getElementById('login-main-page').style.visibility = 'visible'; //make login visible
    document.getElementById('logout-main-page').style.visibility = 'hidden'; //make logout invisible 
    document.getElementById('signup-main-page').style.visibility = 'visible';  
}

if(document.cookie.indexOf('authenticated')== -1){
    setLoggedOutState();  
}

if(document.cookie.indexOf('authenticated')!= -1){
    setLoggedInState();
}
    
function eraseCookieFromAllPaths(name) {
    // This function will attempt to remove a cookie from all paths.
    var pathBits = location.pathname.split('/');
    var pathCurrent = ' path=';
    // do a simple pathless delete first.
    document.cookie = name + '=; expires=Thu, 01-Jan-1970 00:00:01 GMT;';
    for (var i = 0; i < pathBits.length; i++) {
        pathCurrent += ((pathCurrent.substr(-1) != '/') ? '/' : '') + pathBits[i];
        document.cookie = name + '=; expires=Thu, 01-Jan-1970 00:00:01 GMT;' + pathCurrent + ';';
    }
}

document.getElementById('logout-main-page').onclick = function() {
    eraseCookieFromAllPaths('authenticated');
    setLoggedOutState();
    location.href = "./index.php";
}

document.getElementById('login-main-page').onclick = function() {
    eraseCookieFromAllPaths('authenticated');
    location.href = "./login.php";
}

document.getElementById('signup-main-page').onclick = function() {
    location.href = "./signup.php";
}