<?php
header('Content-Type: application/json');

// Connect to DB
$mysqli = new mysqli('localhost', 'root', '', 'proyect_next_level');
if ($mysqli->connect_error) {
  error_log("Login DB error: " . $mysqli->connect_error);
  echo json_encode(['success' => false, 'error' => 'DB connection failed']);
  exit;
}

// Agregar un registro para depurar los datos recibidos
error_log("Datos recibidos: " . file_get_contents('php://input'));

// Verificar credenciales con password_verify para bcrypt
$input = json_decode(file_get_contents('php://input'), true);
$usuario = $input['usuario'] ?? '';
$password = $input['password'] ?? '';

if (empty($usuario) || empty($password)) {
  echo json_encode(['success' => false, 'error' => 'Missing credentials']);
  exit;
}

// Query para obtener la contraseña hasheada
$stmt = $mysqli->prepare("SELECT contrasena FROM alumnos WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
  $hashedPassword = $row['contrasena'];
  if (password_verify($password, $hashedPassword)) {
    echo json_encode(['success' => true, 'rol' => 'alumno']);
  } else {
    echo json_encode(['success' => false, 'error' => 'Credenciales inválidas']);
  }
} else {
  echo json_encode(['success' => false, 'error' => 'Credenciales inválidas']);
}

$stmt->close();
$mysqli->close();
?>

