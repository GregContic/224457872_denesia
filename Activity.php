<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Activities</title>
</head>
<body>

<!-- Task 1: Even Numbers Between 1 and 20 -->
<h2>Even Numbers Between 1 and 20</h2>
<p>
<?php
    $number = 1;
    while ($number <= 20) {
        if ($number % 2 == 0) {
            echo $number . "<br>";
        }
        $number++;
    }
?>
</p>

<!-- Task 2: Password Check -->
<h2>Password Check</h2>
<form method="POST">
    <input type="password" name="password" placeholder="Enter password">
    <input type="submit">
</form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['password'])) {
        $password = "password123";
        $input = $_POST['password'];
        if ($input !== $password) {
            echo "Invalid Password! You entered: $input<br>";
        } else {
            echo "Access Granted!<br>";
        }
    }
?>

<!-- Task 3: Multiplication Table of 7 -->
<h2>Multiplication Table of 7</h2>
<p>
<?php
    $number = 7;
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "$number x $i = $result<br>";
    }
?>
</p>

<!-- Task 4: Continue and Break Example -->
<h2>Numbers from 1 to 10 (Skip 5 and Stop at 8)</h2>
<p>
<?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            continue;
        }
        if ($i == 8) {
            break;
        }
        echo $i . "<br>";
    }
?>
</p>

<!-- Task 5: Sum of Numbers from 1 to 100 -->
<h2>Sum of Numbers from 1 to 100</h2>
<p>
<?php
    $sum = 0;
    $number = 1;
    while ($number <= 100) {
        $sum += $number;
        $number++;
    }
    echo "The sum of numbers from 1 to 100 is: $sum<br>";
?>
</p>

<!-- Task 6: Favorite Movies List -->
<h2>Favorite Movies List</h2>
<p>
<?php
    $favoriteMovies = [
        "Inception",
        "The Shawshank Redemption",
        "Interstellar",
        "Django Unchained",
        "Forrest Gump",
        "Shutter Island",
        "The Lone Ranger",
        "Revenge of the Sith",
        "Pulp Fiction",
        "Avengers Infinity War"
    ];

    foreach ($favoriteMovies as $movie) {
        echo $movie . "<br>";
    }
?>
</p>

<!-- Task 7: Student Info -->
<h2>Student Info</h2>
<p>
<?php
    $studentInfo = [
        "name" => "Michael Porter Jr.",
        "age" => 69,
        "grade" => "99",
        "city" => "Baguio City"
    ];

    foreach ($studentInfo as $key => $value) {
        echo "$key: $value<br>";
    }
?>
</p>

<!-- Task 8: Factorial of a Number -->
<h2>Factorial of a Number</h2>
<form method="POST">
    <input type="number" name="factorialInput" placeholder="Enter a number">
    <input type="submit">
</form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['factorialInput'])) {
        $input = (int)$_POST['factorialInput'];
        $factorial = 1;
        for ($i = $input; $i > 0; $i--) {
            $factorial *= $i;
        }
        echo "Factorial of $input is: $factorial<br>";
    }
?>

<!-- Task 9: FizzBuzz -->
<h2>FizzBuzz from 1 to 50</h2>
<p>
<?php
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz<br>";
        } elseif ($i % 3 == 0) {
            echo "Fizz<br>";
        } elseif ($i % 5 == 0) {
            echo "Buzz<br>";
        } else {
            echo $i . "<br>";
        }
    }
?>
</p>

<!-- Task 10: Prime Number Check -->
<h2>Prime Number Check</h2>
<form method="POST">
    <input type="number" name="primeInput" placeholder="Enter a number">
    <input type="submit">
</form>
<?php
    function isPrime($number) {
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['primeInput'])) {
        $number = (int) $_POST['primeInput'];
        if (isPrime($number)) {
            echo "$number is a prime number.<br>";
        } else {
            echo "$number is not a prime number.<br>";
        }
    }
?>

<!-- Task 11: Fibonacci Sequence -->
<h2>Fibonacci Sequence</h2>
<p>
<?php
    $fib1 = 0;
    $fib2 = 1;
    $count = 0;

    echo "Fibonacci Sequence:<br>";
    while ($count < 10) {
        echo $fib1 . "<br>";
        $nextFib = $fib1 + $fib2;
        $fib1 = $fib2;
        $fib2 = $nextFib;
        $count++;
    }
?>
</p>

<!-- Task 12: Reverse a String -->
<h2>Reverse a String</h2>
<form method="POST">
    <input type="text" name="stringInput" placeholder="Enter a string">
    <input type="submit">
</form>
<?php
    function reverseString($input) {
        $reversed = "";
        $length = strlen($input);
        for ($i = $length - 1; $i >= 0; $i--) {
            $reversed .= $input[$i];
        }
        return $reversed;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['stringInput'])) {
        $inputString = $_POST['stringInput'];
        $reversedString = reverseString($inputString);
        echo "Reversed string: $reversedString<br>";
    }
?>

</body>
</html>
