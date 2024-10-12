const changeColorBtn = document.getElementById('changeColorBtn');
if (changeColorBtn) {
  changeColorBtn.addEventListener('click', function () {
    document.body.style.backgroundColor = document.body.style.backgroundColor === 'purple' ? 'white' : 'purple';
  });
}

const addItemBtn = document.getElementById('addItemBtn');
if (addItemBtn) {
  addItemBtn.addEventListener('click', function () {
    const itemValue = document.getElementById('itemInput').value;
    if (itemValue) {
      const li = document.createElement('li');
      li.textContent = itemValue;
      document.getElementById('itemList').appendChild(li);
      document.getElementById('itemInput').value = '';
    }
  });
}

const addBtn = document.getElementById('addBtn');
if (addBtn) {
  addBtn.addEventListener('click', function () {
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);
    if (!isNaN(num1) && !isNaN(num2)) {
      document.getElementById('result').textContent = `La somme est : ${num1 + num2}`;
    } else {
      document.getElementById('result').textContent = 'Veuillez entrer deux nombres valides.';
    }
  });
}

const imageSelect = document.getElementById('imageSelect');
if (imageSelect) {
  imageSelect.addEventListener('change', function () {
    document.getElementById('displayImage').src = this.value;
  });
}

const hoverElement = document.getElementById('hoverElement');
if (hoverElement) {
  hoverElement.addEventListener('mouseover', function () {
    alert('Vous avez survolé cet élément !');
  });
}

function updateClock() {
  const now = new Date();
  const timeString = now.toLocaleTimeString();
  const clock = document.getElementById('clock');
  if (clock) {
    clock.textContent = timeString;
  }
}
setInterval(updateClock, 1000);
updateClock();

const deleteBtn = document.getElementById('deleteBtn');
if (deleteBtn) {
  deleteBtn.addEventListener('click', function () {
    const confirmDelete = confirm('Voulez-vous vraiment supprimer cet élément ?');
    if (confirmDelete) {
      const deleteElement = document.getElementById('deleteElement');
      if (deleteElement) {
        deleteElement.remove();
      }
    }
  });
}

const toggleCheckbox = document.getElementById('toggleCheckbox');
if (toggleCheckbox) {
  toggleCheckbox.addEventListener('change', function () {
    const element = document.getElementById('toggleElement');
    if (element) {
      element.style.display = this.checked ? 'block' : 'none';
    }
  });
}

const contactForm = document.getElementById('contactForm');
if (contactForm) {
  contactForm.addEventListener('submit', function (event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    console.log(`Nom: ${name}, Email: ${email}, Message: ${message}`);
  });
}
