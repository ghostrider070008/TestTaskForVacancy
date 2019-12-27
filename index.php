<!--/*var_dump($pdo);

$sql = "CREATE TABLE IF NOT EXISTS `image` (
`id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
`title` varchar(255) NOT NULL,
`URL` varchar(255) NOT NULL,
`id_article` integer NOT NULL
)";
$stmt = $pdo->exec($sql);
$m = file_get_contents("controller/123.json");*/-->
<<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Статья</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <script src="src/static/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form id="my_form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <label for="">
                            <h3>Название статьи</h3>
                        </label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" id="articleTitle" placeholder="Введите название статьи...">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <label for="">
                            <h3>Содержание статьи</h3>
                        </label>
                    </div>
                    <div class="col-sm-8">
                        <textarea placeholder="Введите содержание статьи..."></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <label for="">
                            <h3>Добавить изображение</h3>
                        </label>
                    </div>
                    <div class="col-sm-8">
                        <input type="file" name="" id="">
                    </div>
                </div>

            </div>
            <button type="submit" name="" id="save" class="btn btn-primary">Сохранить</button>
            <button type="button" name="" id="view" class="btn btn-primary">Сохранить</button>
        </form>
        <div class="myClass">

        </div>
    </div>
    <script src="src/static/js/ajax.js"></script>
</body>
</html>

<?php
include_once 'controller/db.php';
include 'controller/connect.php';