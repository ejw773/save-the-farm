let respondToClick = (e) => {
  console.log(e.target.dataset.choice);
};

let secondOptions = document.getElementsByClassName('second-option');
for (let i = 0; i < secondOptions.length; i++) {
  secondOptions[i].addEventListener('click', respondToClick);
}
