function loadProducts() {
  fetch('api/index.php')  // убрали ../
    .then(res => res.json())
    .then(products => {
      const tbody = document.querySelector('#products-table tbody');
      tbody.innerHTML = products.map(p => `
        <tr>
          <td>${p.id}</td>
          <td>${p.name}</td>
          <td>${p.price} zł</td>
          <td>${p.description}</td>
          <td>
            <a href="update.html?id=${p.id}">✏️ Edytuj</a>
            <a href="#" onclick="deleteProduct(${p.id})">🗑️ Usuń</a>
          </td>
        </tr>
      `).join('');
    })
    .catch(err => console.error('Błąd podczas ładowania produktów:', err));
}

function deleteProduct(id) {
  if (!confirm('Czy na pewno chcesz usunąć produkt?')) return;

  fetch('api/delete.php?id=' + id)  // путь относительно public/index.html
    .then(res => res.text())
    .then(() => loadProducts())
    .catch(err => console.error('Błąd podczas usuwania produktu:', err));
}


function createProduct(form) {
  const data = new FormData(form);

  fetch('api/create.php', {
    method: 'POST',
    body: data
  })
    .then(res => res.text())
    .then(() => {
      alert('Produkt dodany!');
      window.location.href = 'index.html';
    })
    .catch(err => console.error('Błąd podczas dodawania produktu:', err));

  return false;
}

function updateProduct(form, id) {
  const data = new FormData(form);

  fetch(`api/update.php?id=${id}`, {
    method: 'POST',
    body: data
  })
    .then(res => res.text())
    .then(() => {
      alert('Produkt zaktualizowany!');
      window.location.href = 'index.html'; 
    })
    .catch(err => console.error('Błąd aktualizacji produktu:', err));

  return false;
}
