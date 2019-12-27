<?php
var_dump($pdo);

$sql = "CREATE TABLE IF NOT EXISTS `image` (
`id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
`title` varchar(255) NOT NULL,
`URL` varchar(255) NOT NULL,
`id_article` integer NOT NULL
)";
$stmt = $pdo->exec($sql);
$m = file_get_contents("controller/123.json");
