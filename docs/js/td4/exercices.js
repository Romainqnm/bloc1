document.getElementById('changeColorBtn').addEventListener('click', function () {
    document.body.style.backgroundColor = document.body.style.backgroundColor === 'purple' ? 'white' : 'purple';
  });
  
  document.getElementById('addItemBtn').addEventListener('click', function () {
    const itemValue = document.getElementById('itemInput').value;
    if (itemValue) {
      const li = document.createElement('li');
      li.textContent = itemValue;
      document.getElementById('itemList').appendChild(li);
      document.getElementById('itemInput').value = '';
    }
  });

  document.getElementById('addBtn').addEventListener('click', function () {
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);
    if (!isNaN(num1) && !isNaN(num2)) {
      document.getElementById('result').textContent = `La somme est : ${num1 + num2}`;
    } else {
      document.getElementById('result').textContent = 'Veuillez entrer deux nombres valides.';
    }
  });
document.getElementById('imageSelect').addEventListener('change', function () {
  document.getElementById('displayImage').src = this.value;
  });
  