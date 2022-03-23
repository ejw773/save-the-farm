let theOptions = {
  Eat: ['Mushrooms', 'Soup'],
  Go: ['To the Bathroom', 'To the Forest'],
};

let respondToClick = (e) => {
  console.log(e.target.dataset.button);
};

let secondOptions = document.getElementsByClassName('second-option');
for (let i = 0; i < secondOptions.length; i++) {
  secondOptions[i].addEventListener('click', respondToClick);
}
let welcomeText = document.getElementById('welcome');

let statusMenu = document.getElementById('status-button');
statusMenu.addEventListener('click', respondToClick);

let xhr = new XMLHttpRequest();
xhr.open('GET', '../php/save_the_farm.php', true);
xhr.onreadystatechange = function () {
  if (xhr.readyState < 4) {
    welcomeText.innerHTML = 'Loading...';
  }
  if (xhr.readyState === 4) {
    welcomeText.innerHTML = xhr.responseText;
  }
};
xhr.send();
