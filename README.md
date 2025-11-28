# PHP

PHP, which recursively stands for "PHP: Hypertext Preprocessor," is an open-source, server-side scripting language
primarily designed for web development. It is widely used to create dynamic and interactive websites and web
applications.

## Run Server

```bash
php -S localhost:8080
```

### Variables

```bash
$name = "Eran"; // always use double quotes
$age = 24;
$isDeveloper = true;
$height = 5.9;

class User {
    public string $name;
    public int $age;
    public bool $active;
    public float $rating;
}

function add(int $a, int $b): int {
    return $a + $b;
}

echo add(5, 10);  // 15
```

### Conditions and Booleans

```bash
$isLoggedIn = true;
$hasAccess = false;

// if elseif else

$marks = 75;

if ($marks >= 90) {
    echo "A";
} elseif ($marks >= 75) {
    echo "B";
} elseif ($marks >= 60) {
    echo "C";
} else {
    echo "Fail";
}

// Ternary Operator

$status = ($age >= 18) ? "Adult" : "Child";

// Null Coalescing Operator

$username = $_GET["user"] ?? "Guest";

//Null Coalescing Assignment

$color = null;

$color ??= "blue";

echo $color; // blue
```

### Indexed Arrays

```bash
// indexed Arrays

$fruits = ["Apple", "Banana", "Orange"];
$fruits = array("Apple", "Banana", "Orange");

echo $fruits[0];

// Associative Arrays

$user = [
    "name" => "Eran",
    "age" => 24,
    "role" => "Developer"
];

echo $user["name"];
```

### Functions

```bash
 function myFunction()
    {
        // do something
    }
```

### Data Types

```bash
 $int_var = 12345; // integer
 $var1 = 1.55; // float or double
 $bool1 = true; // boolean
 $string_1 = "This is a string in double quotes"; // string
```

### Type Casting

```bash
 $a = 10; // implicit type casting, automatically detecting type when initialize
 
 $a = 9.99;
 $b = (int)$a; // type casting operator
 
 // type casting functions - intval() floatVal() strVal()
 $value = "1";

 $intCast = intval($value);
 echo $intCast;

 echo gettype($intCast);
```