const form = document.getElementById('form');
const lastname = document.getElementById('lastname');
const firstname = document.getElementById('firstname');
const midname = document.getElementById('midname');
const dateofbirth = document.getElementById('dateofbirth');
const nsonum = document.getElementById('nsonum');
const address = document.getElementById('address');


form.addEventListener('submit', (e) => {
  e.preventDefault();
  checkInputs();
});

function checkInputs() {
  const lastnameVal = lastname.value.trim();
  const firstnameVal = firstname.value.trim();
  const midnameVal = midname.value.trim();
  const dateVal = dateofbirth.value.trim();
  const nsoVal = nsonum.value.trim();
  const addVal = address.value.trim();



  if (lastnameVal === '') {
    setErrorFor(lastname);
  } else {
    setSuccessFor(lastname);
  }

  if (firstnameVal === '') {
    setErrorFor(firstname);
  } else {
    setSuccessFor(firstname);
  }

  if (midnameVal === '') {
    setErrorFor(midname);
  } else {
    setSuccessFor(midname);
  }

  if (dateVal === '') {
    setErrorFor(dateofbirth);
  } else {
    setSuccessFor(dateofbirth);
  }

  // col-md-6
  if (nsoVal === '') {
    setErrorFor(nsonum);
  } else {
    setSuccessFor(nsonum);
  }

  // col-12
  if (addVal === '') {
    setErrorFor(address);
  } else {
    setSuccessFor(address);
  }


}

function setErrorFor(input) {
  const infoDiv = input.parentElement;
  if (input === nsonum) {
    infoDiv.className = 'col-md-6 infodiv error';
  } else if (input === address){
    infoDiv.className = 'col-12 infodiv error';
  } else {
    infoDiv.className = 'col-md-3 infodiv error';
  }
}

function setSuccessFor(input) {
  const infoDiv = input.parentElement;
  if (input === nsonum) {
    infoDiv.className = 'col-md-6 infodiv success';
  } else if (input === address){
    infoDiv.className = 'col-12 infodiv success';
  } else {
    infoDiv.className = 'col-md-3 infodiv success';
  }
}
