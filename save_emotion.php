<?php
// filepath: /public_html/save_emotion.php
$host = "localhost";
$db = "u898339417_Diary";
$user = "u898339417_root";
$pass = "Feet!19972611";

// Get POST data
$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    http_response_code(400);
    echo "No data received";
    exit;
}

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    http_response_code(500);
    echo "Database connection failed";
    exit;
}

$stmt = $conn->prepare("INSERT INTO data (emotion, time) VALUES (?, ?)");
foreach ($data as $row) {
    $stmt->bind_param("ss", $row['emotion'],  $row['time']);
    $stmt->execute();
}
$stmt->close();
$conn->close();

echo "Success";
?>