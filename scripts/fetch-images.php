<?php
$base = __DIR__ . '/../public/assets/img/';
$map = [
    'service-sourcing.jpg' => 9489083,   // Professional handshake / boardroom (Monstera Production)
    'service-testing.jpg'  => 1194775,   // Magnifying glass / loupe-style inspection (jewelry & precious metal testing)
    'service-consulting.jpg' => 12275702, // Geological mineral specimens, no faces (field consultancy context)
];
foreach ($map as $file => $id) {
    $url = "https://images.pexels.com/photos/{$id}/pexels-photo-{$id}.jpeg?auto=compress&cs=tinysrgb&w=1600";
    $data = @file_get_contents($url);
    if ($data === false) {
        fwrite(STDERR, "FAIL {$file} id={$id}\n");
        exit(1);
    }
    file_put_contents($base . $file, $data);
    echo "OK {$file} " . strlen($data) . " bytes\n";
}
