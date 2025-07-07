<?php
include 'roasts.php';

$name = isset($_GET['roastinput']) ? htmlspecialchars($_GET['roastinput']) : 'Friend';

if (!isset($roasts) || !is_array($roasts)) {
    die("Roasts not found or invalid format.");
}

$total = count($roasts);
$random = rand(0, $total - 1);

$roast = str_replace("{name}", $name, $roasts[$random]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Roast</title>
    <link rel="stylesheet" href="roast.css">
</head>
<body>
    <div class="roast-card">
        <h2>🔥 Here's Your Roast, <?= $name ?> 😂</h2>
        <p class="line"><?= $roast ?></p>
        <a href="index.php" class="again-btn">Roast Again</a>
    </div>
</body>
</html>
