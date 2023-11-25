# PHP (Hypertext Preprocessor)

PHP, which stands for "PHP: Hypertext Preprocessor," is a widely used open-source scripting language designed for web development. It is a server-side scripting language, primarily used to develop web applications that run on a web server and generate dynamic web content. PHP scripts are embedded within HTML code, allowing developers to create web pages that can interact with databases, process forms, and perform various tasks on the server.

## Key Features and Uses of PHP

1. **Dynamic Web Pages:** PHP is used to create dynamic web pages, where the content can change based on user input or other factors. For example, it can be used to display user-specific data, generate dynamic charts and graphs, or create interactive forms.

2. **Database Connectivity:** PHP is often used in conjunction with databases, such as MySQL, to retrieve and manipulate data. It can connect to various database systems, making it a powerful tool for building data-driven web applications.

3. **Server-Side Scripting:** PHP scripts are executed on the web server, and the resulting HTML is sent to the client's browser. This means that users can't see the PHP code, enhancing security and protecting sensitive information.

4. **Extensibility:** PHP is highly extensible, with a wide range of libraries and extensions available, allowing developers to add additional functionality and features to their applications.

5. **Cross-Platform:** PHP is a cross-platform language, which means it can run on various operating systems, including Windows, macOS, and different flavors of Linux.

6. **Open Source:** PHP is open source, which means it is freely available for anyone to use, modify, and distribute. This has led to a large and active PHP community, with many open-source projects and resources available.

7. **Popular CMS and Frameworks:** Many content management systems (CMS), such as WordPress and Joomla, are built using PHP. There are also popular PHP frameworks like Laravel, Symfony, and CodeIgniter that simplify web application development.

8. **Server Compatibility:** PHP is compatible with a variety of web servers, including Apache, Nginx, and Microsoft IIS, making it easy to integrate into existing server environments.

PHP is known for its ease of use and rapid development capabilities, which has made it a popular choice for web developers around the world. It is especially well-suited for building dynamic websites, web applications, and e-commerce platforms.

---

### Where to write PHP code?

```php
    <?php
        your PHP code goes here...
    ?>
```

#### How to print?

```php
    echo "Hello World!";
    echo 'we can use either single or double quote';
    // This is single line comment
    /* This is
        multi line
        comment */
```

### PHP can contain other codes such as HTML, CSS, JS or PHP.

```php
<?php
    echo "I love Pizza <br>";
    echo "It's really good. <br>";
    echo "Hello, do you like pizza?;
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <br />
    <button>Order a Pizza</button>
  </body>
</html>
```

#### Output:

## ![Alt: Output of above HTML code](<demo-pictures/PHP intro.jpg>)

---

# PHP Variables

In PHP, variables are used to store and manipulate data. A variable is a container that holds a value, and its value can change during the execution of a script. PHP variables are loosely typed, which means you don't need to explicitly declare the data type of a variable before using it.

## Variable Naming Rules

- Variable names start with the dollar sign (`$`), followed by the name (e.g., `$variableName`).
- Variable names are case-sensitive (`$myVar` and `$MyVar` are different variables).
- Variable names can include letters, numbers, and underscores, but they cannot start with a number.
- Avoid using PHP reserved words (e.g., `echo`, `if`, `else`) as variable names.

## Assigning Values to Variables

You can assign values to variables using the assignment operator (`=`). The data type of a variable is determined by the type of the value it holds.

```php
$name = "Apil";     // String
$age = 20;          // Integer
$height = 5.8;       // Float
$isStudent = true;   // Boolean
```

#### Example:

```php
<?php
// 1) String Data Type
$name = "Apil Adhikari";
$food = "pizza";
$email = "test123@gmail.com";
//String Literal(printing the variable directly) echo $name;

// INT Data Type
$age = 20;
$users = 2;
$quantity = 4;

// Float Data Type
$gpa = 3.5;
$price = 5.99;
$tax_rate = 5.3;

// Boolean Data Type : Either TRUE or FALSE
$employed = true;
$online = false;
$for_sale = true;

$total = null;


echo "Hello {$name} <br>";
echo "You like {$food} <br>";
echo "Your email is {$email} <br>";

echo "You are {$age} years old <br>";
echo "There are {$users} users online <br>";
echo "You would like to buy {$quantity} items <br>";

echo "Your gpa is {$gpa} <br>";
echo "Your pizza is \${$price} <br>";
echo "Your tax rate is {$tax_rate}% <br>";

echo "Online Status : {$online} <br>";

echo "You have ordered  {$quantity}x {$food}s <br>";
$total = $quantity * $price;
echo "Your total is: \${$total}";
?>
```

#### Output:

![Alt text](<demo-pictures/variables and data type.jpg>)
