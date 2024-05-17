<?php
// Task#1
// Define the variables
$name = "Mark Joseph";
$age = 21;
$address = "Palapat, Hagonoy, Bulacan";
$hobbies = "Playing Basketball, Gaming";
$pet_peeve = "Loud noises";

// Print the values using the echo statement, each on a new line
echo "Name: " . $name . "\n";
echo "Age: " . $age . "\n";
echo "Address: " . $address . "\n";
echo "Hobbies: " . $hobbies . "\n";
echo "Pet Peeve: " . $pet_peeve . "\n";

// Task#2
// Single-line comments to comment out the $hobbies and $pet_peeve variables and their echo statements
// $hobbies = "Reading, Hiking, Cooking";
// $pet_peeve = "Loud noises";
// echo "Hobbies: " . $hobbies . "\n";
// echo "Pet Peeve: " . $pet_peeve . "\n";

// Task 3: Define the constants
define("NAME", "Mark Joseph");
define("AGE", 21);
define("ADDRESS", "Palapat, Hagonoy, Bulacan");
define("HOBBIES", "Playing Basketball, Gaming");
define("PET_PEEVE", "Loud noises");

// Print each constant value on a new line
echo "Constant Name: " . NAME . "\n";
echo "Constant Age: " . AGE . "\n";
echo "Constant Address: " . ADDRESS . "\n";
echo "Constant Hobbies: " . HOBBIES . "\n";
echo "Constant Pet Peeve: " . PET_PEEVE . "\n";

// Task 4: Display the constant values using var_dump()
var_dump(NAME);
var_dump(AGE);
var_dump(ADDRESS);
var_dump(HOBBIES);
var_dump(PET_PEEVE);

// Task 5: Multi-line comment explaining the reasoning behind the pet peeve
/*
My pet peeve is loud noises. I find them particularly bothersome because they can be very disruptive and
distracting. Whether it's loud music, construction noise, or people talking loudly, it tends to break my
concentration and can be quite disturb, especially when I'm trying to focus on a task or relax in a quiet
environment. Loud noises can also cause a interruption, making it difficult to maintain a peaceful mind
and productive atmosphere.
*/
?>


