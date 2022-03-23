let theOptions = {
  Eat: ['Mushrooms', 'Soup'],
  Go: ['To the Bathroom', 'To the Forest'],
};

let respondToClick = (e) => {
  console.log(e.target.dataset.choice);
};

let secondOptions = document.getElementsByClassName('second-option');
for (let i = 0; i < secondOptions.length; i++) {
  secondOptions[i].addEventListener('click', respondToClick);
}

console.log(theOptions[0]);
console.log('others:');
console.log(theOptions[1]);
