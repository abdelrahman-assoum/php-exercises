<?php
$name = "Abdel Rahman";
$position = "mentee at Codi";
$github_url = "https://github.com/abdelrahman-assoum/";

// Output
// Hello, I'm Gaby, I'm a tech consultant please check my github link https://github.com/gk-git.

// Using double quotaition and the .
echo "Hello, I'm" . $name . ", I'm a " . $position . "please check my github link" . $github_url . ".";

// Using double quotaition without the .
echo "Hello, I'm $name, I'm a $position please check my github link $github_url.";

// Without double quotaition
echo 'Hello, I\'m ' . $name . ', I\'m a ' . $position . 'please check my github link' . $github_url . '.';

// Without using .
echo "Hello, I'm {$name} a {$position} please check my github link {$github_url}.";
?>
