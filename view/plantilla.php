<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" />

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/e5fb2908a9.js" crossorigin="anonymous"></script>

    <!-- VINCULADO TODOS LOS ARCHIVO -->
    <base href="view/">

    <!-- CUSTOMER STYLE -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

    <!-- HEADER -->
    <?php require_once "view/pages/header.php"; ?>

    <div class="container">

        <?php

            if (isset($_GET["pages"])) {

                if (
                    $_GET["pages"] == "inicio"   ||
                    $_GET["pages"] == "registro" ||
                    $_GET["pages"] == "aboutMe"  ||
                    $_GET["pages"] == "login"    ||
                    $_GET["pages"] == "edit"       
                ) {
                    require_once "pages/" . $_GET['pages'] . ".php";
                } else {
                    require_once "pages/error.php";
                }
            } else {
                require_once "pages/inicio.php";
            }

        ?>

    </div>
</body>

</html>