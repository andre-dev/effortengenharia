<?php
include 'conexaoBD.php';

$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'];

$sql = "DELETE FROM teste WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Dado excluído com sucesso";
} else {
  echo "Erro ao excluir o dado: " . $conn->error;
}

$conn->close();
?>
