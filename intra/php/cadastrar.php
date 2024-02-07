<?php
include 'conexaoBD.php';

$data = json_decode(file_get_contents('php://input'), true);
$nome = $data['nome'];
$email = $data['email'];

$sql = "INSERT INTO teste (nome, email) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "Dados cadastrados com sucesso";
} else {
  echo "Erro ao cadastrar os dados: " . $conn->error;
}

$conn->close();
?>
