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
  