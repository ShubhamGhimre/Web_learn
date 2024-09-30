<!-- one Method -->
<?php
function generatePassword($length = 12)
{
    // Define character sets for password generation
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialCharacters = '!@#$%^&*()-_=+{}[]|;:,.<>?';

    // Combine all character sets
    $allCharacters = $lowercase . $uppercase . $numbers . $specialCharacters;

    // Ensure the password contains at least one character from each set
    $password = '';
    $password .= $lowercase[rand(0, strlen($lowercase) - 1)];
    $password .= $uppercase[rand(0, strlen($uppercase) - 1)];
    $password .= $numbers[rand(0, strlen($numbers) - 1)];
    $password .= $specialCharacters[rand(0, strlen($specialCharacters) - 1)];

    // Fill the rest of the password length with random characters from all sets
    for ($i = 4; $i < $length; $i++) {
        $password .= $allCharacters[rand(0, strlen($allCharacters) - 1)];
    }

    // Shuffle the password to randomize the order of characters
    $password = str_shuffle($password);

    return $password;
}

// Example usage
echo generatePassword(12);  // Generate a 12-character password
?>

<!-- short method -->
<?php


