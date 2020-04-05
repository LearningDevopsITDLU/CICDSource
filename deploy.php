<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = 'deploy-hooks';
    file_put_contents($file, json_encode($_POST, JSON_PRETTY_PRINT));
}
?>