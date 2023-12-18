<?php
// process.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dapatkan data dari formulir
    $task = $_POST["task"];
    $priority = $_POST["priority"];
    $completed = isset($_POST["completed"]) ? "Yes" : "No";
    $category = $_POST["category"];

    // Lakukan validasi data di sisi server jika diperlukan
    // (Anda dapat menambahkan validasi sesuai kebutuhan)

    // Proses data lebih lanjut jika diperlukan (contoh: menyimpan ke database)

    // Kirim hasil balikan ke klien (misalnya, dalam bentuk JSON)
    $response = [
        'success' => true,
        'message' => 'Task added successfully.'
    ];

    echo json_encode($response);
} else {
    
    http_response_code(405); 
    echo json_encode(['error' => 'Method Not Allowed']);
}
?>
