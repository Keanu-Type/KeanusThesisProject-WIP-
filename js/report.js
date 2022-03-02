const form = document.getElementById('form');
const usernamee = document.getElementById('usernamee');
const yourNumber = document.getElementById('yourNumber');
const reportedMobilenumber = document.getElementById('reportedMobilenumber');
const textArea = document.getElementById('textArea');

form.addEventListener('submit', (e) =>{
    e.preventDefault();
    checkInputs();
});

function checkInputs(){
    // get the values from the inputs
    const userNameValue = usernamee.value.trim();
    const yourNumberValue = yourNumber.value.trim();
    const reportedNumberValue = reportedMobilenumber.value.trim();
    const textAreaValue = textArea.value.trim();

    if (userNameValue === ''){
        // show error
        // add error class
        setErrorFor(usernamee, 'Please enter your name');
    } else {
        // add success class
        setSuccessFor(usernamee);
    }

    if (yourNumberValue === ''){
        setErrorFor(yourNumber, 'Please enter your number');
    } else {
        setSuccessFor(yourNumber);
    }

    if (reportedNumberValue === ''){
        setErrorFor(reportedMobilenumber, 'Please enter number to be reported');
    } else {
        setSuccessFor(reportedMobilenumber);
    }

    if (textAreaValue === ''){
        setErrorFor(textArea, 'Please enter remarks about your report');
    } else {
        setSuccessFor(textArea);
    }
}

// FUNCTIONS USED
function setErrorFor(input, message) {
    const infoDiv = input.parentElement;
    const small = infoDiv.querySelector('small');

    // add error message inside the small
    small.innerText = message;

    // add error class
    infoDiv.className = 'infodiv error';
}

function setSuccessFor(input) {
    const infoDiv = input.parentElement;
    infoDiv.className = 'infodiv success';

}

// FUNCTION FOR CHECKING EMAIL

/*
function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
*/

// PLACE THIS AT CHECKINPUT FUNCTION

/*
if (emailValue === ''){
setErrorFor(email,'Email cannot be blank');
}else if (!isEmail(emailValue)){
  setErrorFor(email,'Email is not valid');
} else {
setSuccessFor(usernamee)
}



*/
