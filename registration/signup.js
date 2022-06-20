let first_name = document.getElementById('first_name');
let lastName = document.getElementById('lastName');
let email = document.getElementById('email');
let password = document.getElementById('password');
let repassword = document.getElementById('repassword');
let tel = document.getElementById('tel');
let birthDate = document.getElementById('birthDate');
let country = document.getElementById('country');
let city = document.getElementById('city');
let address = document.getElementById('address');
let terms = document.getElementById('terms');
let signUpButton = document.getElementById('sign-up');


let isFirstNameValid = false;
let isLastNameValid = false;
let isPasswordValid = false;
let isRePasswordValid = false;
let isEmailValid = false;
let isTelValid = false;
let isBirthDateValid = false;
let isCountryValid = false;
let isCityValid = false;
let isAddressValid = false;
let areTermsChecked = false;
let passwordValue ='';


first_name.addEventListener('change', (event) => {
    let value = event.target.value;
    isFirstNameValid = (value.length > 1);
    if (isFirstNameValid) {
        document.getElementById('first_name-error').innerHTML = '';
    } else {
        document.getElementById('first_name-error').innerHTML = 'Invalid First Name';
    }
    enableSignUpButton();
});

  
lastName.addEventListener('change', (event) => {
    let value = event.target.value;
    isLastNameValid = (value.length > 1);
    if (isLastNameValid) {
        document.getElementById('lastName-error').innerHTML = '';
    } else {
        document.getElementById('lastName-error').innerHTML = 'Invalid Last Name';
    }
    enableSignUpButton();
});


function validateEmail(inputText) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(inputText.value.match(mailformat)) {
        return true;
    } else {
        return false;
    }
};

email.addEventListener('change', (event) => {
    let value = event.target.value;
    isEmailValid = validateEmail(email);
    if (isEmailValid) {
        document.getElementById('email-error').innerHTML = '';
    } else {
        document.getElementById('email-error').innerHTML = 'Invalid Email Address';
    }
    enableSignUpButton();
});

function checkPassword(inputtxt) { 
    var decimal = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    if(inputtxt.value.match(decimal)) { 
        return true;
    } else { 
        return false;
    }
}; 

password.addEventListener('change', (event) => {
    let value = event.target.value;
    isPasswordValid = checkPassword(password);
    passwordValue = value;
    if (isPasswordValid) {
        document.getElementById('password-error').innerHTML = '';
    } else {
        document.getElementById('password-error').innerHTML = 'Password must contain minimum 8 characters, one uppercase letter and one number/special character';
    }
    enableSignUpButton();
});

repassword.addEventListener('change', (event) => {
    let value = event.target.value;
    isRePasswordValid = value === passwordValue;
    if (isRePasswordValid) {
        document.getElementById('repassword-error').innerHTML = '';
    } else {
        document.getElementById('repassword-error').innerHTML = 'Invalid RePassword'
    }
    enableSignUpButton();
});
    
function validateTel(inputtxt) {
    var phoneno = /^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/;
    if(inputtxt.value.match(phoneno)) {
        return true;
    } else {
        return false;
    }
};

tel.addEventListener('change', (event) => {
    let value = event.target.value;
    isTelValid = validateTel(tel);
    if (isTelValid) {
        document.getElementById('tel-error').innerHTML = '';
    } else {
        document.getElementById('tel-error').innerHTML = 'Invalid Phone number'
    }
    enableSignUpButton();
});

birthDate.addEventListener('change', (event) => {
    let value = event.target.value;
    isBirthDateValid = true;
    enableSignUpButton();
});

country.addEventListener('change', (event) => {
    let value = event.target.value;
    isCountryValid = (value.length > 2);
    if (isCountryValid) {
        document.getElementById('country-error').innerHTML = '';
    } else {
        document.getElementById('country-error').innerHTML = 'Invalid Country';
    }
    enableSignUpButton();
});

city.addEventListener('change', (event) => {
    let value = event.target.value;
    isCityValid = (value.length > 2);
    if (isCityValid) {
        document.getElementById('city-error').innerHTML = '';
    } else {
        document.getElementById('city-error').innerHTML = 'Invalid City';
    }
    enableSignUpButton();
});

address.addEventListener('change', (event) => {
    let value = event.target.value;
    isAddressValid = (value.length > 3);
    if (isAddressValid) {
        document.getElementById('address-error').innerHTML = '';
    } else {
        document.getElementById('address-error').innerHTML = 'Invalid Address';
    }
    enableSignUpButton();
});

terms.addEventListener('change',(event)=>{
    areTermsChecked = (document.getElementById('terms').checked);
    if(areTermsChecked) {
        document.getElementById('terms-error').innerHTML = '';
    } else {
        document.getElementById('terms-error').innerHTML = 'Please agree with the terms and conditions';
    }
    enableSignUpButton();
});


function enableSignUpButton() {
    if (isFirstNameValid && isLastNameValid && isEmailValid && isPasswordValid && isRePasswordValid
        && isTelValid && isBirthDateValid && isCountryValid && isCityValid && isAddressValid && areTermsChecked) {
        signUpButton.removeAttribute('disabled');
    } else {
        signUpButton.setAttribute('disabled', '');
    }
}
document.getElementById('login-main-page').onclick = function() {
    // eraseCookieFromAllPaths('authenticated');
    location.href = "../login.php";
}

document.getElementById('signup-main-page').onclick = function() {
    location.href = "./signup.php";
}

