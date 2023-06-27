<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>RITG</title>
    <link rel="stylesheet" href="/css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/temp/header.php"); ?>
    <main class="container1">
    <?php include($_SERVER["DOCUMENT_ROOT"]."/temp/menu.php"); ?>
        <div class="content">
        <?php include($_SERVER["DOCUMENT_ROOT"]."/temp/add-btn.php"); ?>
            <div class="blocks">
                <?php include($_SERVER["DOCUMENT_ROOT"]."/temp/block__colum-1.php"); ?>
                <?php include($_SERVER["DOCUMENT_ROOT"]."/temp/block__colum-2.php"); ?>
                <?php include($_SERVER["DOCUMENT_ROOT"]."/temp/block__colum-3.php"); ?>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>