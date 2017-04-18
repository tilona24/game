<?php
include 'php/Person.php';
include 'php/Human.php';
include 'php/Elf.php';
include 'php/Dwarf.php';

$Person = new Person();

if (isset($_POST['submit_name'])) {
    include 'php/templates/choose_race.php';
} elseif (isset($_POST['submit_race'])) {
    include 'php/templates/choose_gender.php';
} elseif (isset($_POST['submit_gender'])) {
    include 'php/templates/everythings_chosen.php';
} else {
    include('php/templates/enter_name.php');
}

print_r($Person);

?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Homemade+Apple" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Test</title>
</head>
<body>
<div class="background"></div>
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>

