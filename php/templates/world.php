<?php

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
$Hero->gender = $_COOKIE['Gender'];




for ($row = 0; $row <= 12; $row++) {
    echo '<div class="row">';
    for ($col = 0; $col <= 8; $col++) {
        echo '<div class=\'col\'>';
        switch ($Hero->race) {
            case 'Human':

                ?>
                <img src="img/texture/sand.png" alt="sand">
                <?php
                break;
            case 'Elf':
                ?>
                <img src="img/texture/gras.png" alt="sand">
                <?php
                break;
            case 'Dwarf':
                ?>
                <img src="img/texture/stone.png" alt="sand">
                <?php
                break;
        }
        echo '</div>';
    }
    echo '</div>';
}
