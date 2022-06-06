let firstName = document.getElementById('firstName');
let lastName = document.getElementById('lastName');
let email = document.getElementById('email');
let password = document.getElementById('password');
let repassword = document.getElementById('repassword');
let tel = document.getElementById('tel');
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
let isCountryValid = false;
let isCityValid = false;
let isAddressValid = false;
let areTermsChecked = false;
let passwordValue ='';


// if (userName) {
firstName.addEventListener('change', (event) => {
    let value = event.target.value;
    isFirstNameValid = (value.length > 1);
    if (isFirstNameValid) {
        document.getElementById('firstName-error').innerHTML = '';
    } else {
        document.getElementById('firstName-error').innerHTML = 'Invalid First Name';
    }
    enableSignUpButton();
});
    // }

    // if (userName) {
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
// }

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
// }

function checkPassword(inputtxt) { 
    // var decimal = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    // if(inputtxt.value.match(decimal)) { 
    //     return true;
    // } else { 
    //     return false;
    // }
    return true;
}; 
// if (password) {
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
    // }

// if (repassword) {
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
    // }

function validateTel(inputtxt) {
    // var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
    // if(inputtxt.value.match(phoneno)) {
    //     return true;
    // } else {
    //     return false;
    // }
    return true;
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
        document.getElementById('terms-error').innerHTML = 'Please agrre with the terms and conditions';
    }
    enableSignUpButton();
});


function enableSignUpButton() {
    if (isFirstNameValid && isLastNameValid && isEmailValid && isPasswordValid && isRePasswordValid
        && isTelValid && isCountryValid && isCityValid && isAddressValid && areTermsChecked) {
        signUpButton.removeAttribute('disabled');
    } else {
        signUpButton.setAttribute('disabled', '');
    }
}


document.getElementById('signup-main-page').onclick = function() {
    location.href = "./signup.php";
};
document.getElementById('login-main-page').onclick = function() {
    location.href = "./login.php";
};
