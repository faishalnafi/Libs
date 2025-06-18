<?php
// Mapping jenis dokumen ke folder (langsung di root)
$folderMap = [
    'kk' => 'kk/',
    'akta' => 'akta/',
    'pas-foto' => 'pas-foto/',
    'rapor' => 'rapor/',
];

// Ambil jenis dokumen dari POST
$type = $_POST['type'] ?? '';

// Validasi jenis dokumen
if (!isset($folderMap[$type])) {
    http_response_code(400);
    echo json_encode(["error" => "Jenis dokumen tidak valid"]);
    exit;
}

// Cek apakah ada file
if (!isset($_FILES['file'])) {
    http_response_code(400);
    echo json_encode(["error" => "Tidak ada file yang diupload"]);
    exit;
}

$uploadDir = $folderMap[$type];
$filename = time() . "-" . basename($_FILES["file"]["name"]); // prevent overwrite
$targetPath = $uploadDir . $filename;

// Simpan file
if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {
    $url = "https://fm.ppti.me/spmb/" . $uploadDir . $filename;
    echo json_encode(["success" => true, "url" => $url]);
} else {
    http_response_code(500);
    echo json_encode(["error" => "Gagal menyimpan file"]);
}
?>
