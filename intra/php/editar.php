<?php
include 'conexaoBD.php';

$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'];
$novoNome = $data['novoNome'];
$novoEmail = $data['novoEmail'];

$sql = "UPDATE teste SET nome='$novoNome', email='$novoEmail' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Dados atualizados com sucesso";
} else {
  echo "Erro ao atualizar os dados: " . $conn->error;
}

$conn->close();
?>
