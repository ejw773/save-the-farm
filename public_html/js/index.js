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

let statusMenu = document.getElementById('status-button');
statusMenu.addEventListener('click', respondToClick);
