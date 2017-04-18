<?php

$Person->name = $_COOKIE['Name'];

if (isset($_POST['race'])) {
    setcookie('Race', $_POST['race']);
    $Person->race = $_POST['race'];
} else {
    $Person->race = $_COOKIE['race'];
}

$htmltag = '<div class="reaction">';

switch ($Person->race) {
    case 'Human':
        echo $htmltag . $Person->name.' the human, well well .</div>';
        $female = 'female_human';
        $male   = 'male_human';
        break;
    case 'Elf':
        echo $htmltag . $Person->name.' the elf, well well .</div>';
        $female = 'female_elf';
        $male   = 'male_elf';
        break;
    case 'Dwarf':
        echo $htmltag . $Person->name.' the dwarf, well well .</div>';
        $female = 'female_dwarf';
        $male   = 'male_dwarf';
        break;
}
?>

<div class="question">And now, whats your gender?</div>

<form action="" method="post" class="choose_gender">
    <input type="radio" name="gender" value="Male" id="chooseToBeMale">
    <label for="chooseToBeMale">
        <img src="img/characters/<?=$male?>.png">
    </label>
    <input type="radio" name="gender" value="Female" id="chooseToBeFemale">
    <label for="chooseToBeFemale">
        <img src="img/characters/<?=$female?>.png">
    </label>
    <input type="submit" name="submit_gender" value="Decide">
</form>
