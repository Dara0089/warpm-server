<?php
// ----------------------------------------------------
// LESSON 1: PHP Basics for Beginners
// ----------------------------------------------------

// 1. Variables & Data Types
$name = "Dara";
$age = 21;
$isStudent = true;
$skills = ["PHP", "HTML", "CSS", "JavaScript"];

// 2. Printing Output
echo "<h1>Welcome to PHP First Class!</h1>";
echo "<p>Student Name: <strong>" . $name . "</strong></p>";
echo "<p>Age: " . $age . " years old</p>";

// 5. Custom Function
function greetUser($userName) {
    return "Hello, $userName! Welcome WB II PHP.";
}

echo "<p>" . greetUser($name) . "</p>";
