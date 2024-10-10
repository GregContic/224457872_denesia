<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1</title>
</head>
<body>
<p>
<?php
//1:
$number = 1;

while ($number <= 20) {
    if ($number % 2 == 0) {
        echo $number . "\n";
    }
    $number++;
}
?>
<?php
//2
$password = "password123"; 

do {
    echo "Enter the password: ";
    $input = trim(fgets(STDIN));

    if ($input !== $pass) { 
        echo "You entered: $input\n";
    }

} while ($input !== $password); 

echo "Access Granted!\n"; 
?>

<?php
//3:
$number = 7;

// Loop from 1 to 10
for ($i = 1; $i <= 10; $i++) {
    $result = $number * $i;
    echo "$number x $i = $result" . PHP_EOL;
}
?>




<?php
//4:
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }

    if ($i == 8) {
        break;
    }

    echo $i . PHP_EOL;
}
?>


<?php
//5:
$sum = 0;
$number = 1;


while ($number <= 100) {
    $sum += $number; 
    $number++;       
}


echo "The sum of numbers from 1 to 100 is: $sum";
?>



<?php
//6:
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
    echo $movie . PHP_EOL;
}
?>




<?php
//7:
$studentInfo = [
    "name" => "Michael Porter Jr.",
    "age" => 69,
    "grade" => "99",
    "city" => "Baguio City"
];


foreach ($studentInfo as $key => $value) {

    echo "$key: $value" . PHP_EOL;
}
?>



<?php
//8:
echo "Enter the number: ";
$input = trim(fgets(STDIN));



$factorial = 1;


for ($i = $input; $i > 0; $i--) {
    $factorial *= $i;
}


echo "Factorial of $input is: $factorial";
?>



<?php
//9:
for ($i = 1; $i <= 50; $i++) {
   
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz" . PHP_EOL;
    }

    elseif ($i % 3 == 0) {
        echo "Fizz" . PHP_EOL;
    }

    elseif ($i % 5 == 0) {
        echo "Buzz" . PHP_EOL;
    }

    else {
        echo $i . PHP_EOL;
    }
}
?>



<?php
//10:
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


$number = (int)readline("Enter a number: ");


if (isPrime($number)) {
    echo "$number is a prime number." . PHP_EOL;
} else {
    echo "$number is not a prime number." . PHP_EOL;
}
?>


<?php
//11:
$fib1 = 0;
$fib2 = 1;
$count = 0;


echo "Fibonacci Sequence:\n";

while ($count < 10) {
    
    echo $fib1 . PHP_EOL;

    
    $nextFib = $fib1 + $fib2;

    
    $fib1 = $fib2;
    $fib2 = $nextFib;

    
    $count++;
}
?>


<?php
//12:
function reverseString($input) {
    $reversed = ""; 
    $length = strlen($input); 


    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $input[$i]; 
    }

    return $reversed; 
}


$inputString = readline("Enter a string: ");


$reversedString = reverseString($inputString);
echo "Reversed string: $reversedString" . PHP_EOL;
?>
</p>
</body>
</html>