<?php
// Defaults
$defaults['food'] = 'toast';
// Generating the radio buttons
$choices = array('eggs' => 'Eggs Benedict',
                 'toast' => 'Buttered Toast with Jam',
                 'coffee' => 'Piping Hot Coffee');
foreach ($choices as $key => $choice) {
    echo "<input type='radio' name='food' value='$key'";
    if ($key == $defaults['food']) {
        echo ' checked="checked"';
    }
    echo "/> $choice \n";
}


// Then, later, validating the radio button submission
if (! array_key_exists($_POST['food'], $choices)) {
    echo "You must select a valid choice.";
}
