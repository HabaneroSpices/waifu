<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/inc/dbh.inc.php"; ?> <!-- Navbar -->

<!DOCTYPE html>
<html>
<head>
<title>Waifu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body class="light">
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/navbar.inc.php';?> <!-- Navbar -->
<main>
<div class="torrent">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/torrents.inc.php';?> <!-- Torrents -->
</div>
</main>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/inc/modal.inc.php"; ?> <!-- Modal -->
</body>
<script src="js/app.js"></script>
</html>