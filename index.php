<?php
    // create an array of suits and use to populate the associative array
    $suits = ["hearts","diamonds","clubs","spades"];

    // create a cards array to hold the array of arrays
    $cards = array();
    
    // create an outer for loop and generate an associative array of suit names keys with an empty array container for each value
    for ($i = 0; $i < count($suits); $i++){
        // use the suit names as keys for an empty array
        $cards[$suits[$i]] = array();
        // create an inner for loop and generate an associative array with suit names as keys and applicable images as values
        for ($j = 0; $j < 13; $j++){
            $face = $j + 1;
            if ($face == 1) $face = "A";
            if ($face == 11) $face = "J";
            if ($face == 12) $face = "Q";
            if ($face == 13) $face = "K";
        // assign each image to each suit's unique array index value
        $cards[$suits[$i]][$j] = "images/$suits[$i]/$face.png";
        } // end inner for loop
    } // end outer for loop

    // generate a random index value to be used when accessing the $suits array in the echo statement
    $suit = random_int(0, 3);

    // generate a random index value to be used when access the individual suit's image values
    $value = random_int(0, 12);

/* -- unused php code --
            // Use the foreach() function to display all the cards
            foreach ($cards as $card) echo '<img src="'.$card.'"><br>';
*/            
            
        ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Random Card Presenter</h1>
        
        <!-- Return a random card from the $cards array of arrays  -->
        <!-- [$suits[$suit]] returns the string of the suit name from the $suits array  -->
        <!-- [$value] returns the index for the inner array of the specific suit  -->
        <?php echo '<img src="'.$cards[$suits[$suit]][$value].'"><br>'; ?>

        <!-- the action="." calls itself, method could be either get or post  -->
        <form action="." method="post">
            <input type="submit" value="Generate A Random Card">
        </form>
    </body>
</html>
