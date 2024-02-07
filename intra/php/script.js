// Função para listar os dados do banco
function listarDados() {
  fetch('listar.php')
    .then(response => response.json())
    .then(data => {
      const listaDados = document.getElementById('lista-dados');
      listaDados.innerHTML = '';
      data.forEach(item => {
        const div = document.createElement('div');
        div.innerHTML = `Nome: ${item.nome} - E-mail: ${item.email} <button onclick="editar(${item.id})">Editar</button> <button onclick="excluir(${item.id})">Excluir</button><br>`;
        listaDados.appendChild(div);
      });
    });
}

// Função para cadastrar um novo item
document.getElementById('form-cadastro').addEventListener('submit', function(event) {
  event.preventDefault();
  const nome = document.getElementById('nome').value;
  const email = document.getElementById('email').value;
  fetch('cadastrar.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ nome, email })
  })
  .then(response => response.text())
  .then(data => {
    alert(data);
    listarDados();
  });
});

// Função para editar um item
function editar(id) {
  const novoNome = prompt("Digite o novo nome:");
  const novoEmail = prompt("Digite o novo e-mail:");
  fetch('editar.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ id, novoNome, novoEmail })
  })
  .then(response => response.text())
  .then(data => {
    alert(data);
    listarDados();
  });
}

// Função para excluir um item
function excluir(id) {
  if (confirm("Tem certeza que deseja excluir este item?")) {
    fetch('excluir.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ id })
    })
    .then(response => response.text())
    .then(data => {
      alert(data);
      listarDados();
    });
  }
}

// Inicializar a lista de dados ao carregar a página
listarDados();
