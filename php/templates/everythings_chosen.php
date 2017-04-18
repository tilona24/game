<?php

if (isset($_POST['gender'])) {
    setcookie('Gender', $_POST['gender']);
    $Person->gender = $_POST['gender'];
} else {
    $Person->gender = $_COOKIE['gender'];
}

$Hero = '';

if ($_COOKIE['Race'] == 'Human') {
    $Hero = new Human();
} elseif ($_COOKIE['Race'] == 'Elf') {
    $Hero = new Elf();
} elseif ($_COOKIE['Race'] == 'Dwarf') {
    $Hero = new Dwarf();
}

$Hero->name   = $_COOKIE['Name'];
$Hero->race   = $_COOKIE['Race'];
$Hero->gender = $Person->gender;
//print_r($Hero);
echo '<br>';

?>

<div class="reaction">
    Alright, <?=$Hero->name?>. So you're a <?=$Hero->gender.' '.$Hero->race?>.
</div>
<div class="button"></div>

