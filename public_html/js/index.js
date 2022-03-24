let sendRequest = (params) => {
  let welcomeText = document.getElementById('welcome');
  let xhr = new XMLHttpRequest();
  xhr.open('POST', '../php/save_the_farm.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState < 4) {
      welcomeText.innerHTML = 'Loading...';
    }
    if (xhr.readyState === 4) {
      welcomeText.innerHTML = xhr.responseText;
    }
  };
  xhr.send(params);
};

let sendText = (e) => {
  console.log(e.target.value);
  sendRequest(e.target.value);
  document.getElementById('user-input').value = '';
};

let submitButton = document.getElementById('submit-button');
let userInput = document.getElementById('user-input');
userInput.addEventListener('change', sendText);

// let secondOptions = document.getElementsByClassName('second-option');
// for (let i = 0; i < secondOptions.length; i++) {
//   secondOptions[i].addEventListener('click', respondToClick);
// }

// let statusMenu = document.getElementById('status-button');
// statusMenu.addEventListener('click', respondToClick);
