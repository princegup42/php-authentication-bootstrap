<?php

// Database Main Object

function objDB()
{
    $objDB = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($objDB->connect_error) {
        die("Connection Not Established");
    }

    return $objDB;
}

// Checking User By Email

function checkUserByEmail($email)
{
    // Make Database Connection
    $objDB = objDB();

    // Make The Statement
    $stmt = $objDB->prepare('SELECT * FROM users WHERE email=?');

    // Bind The Paramters
    $stmt->bind_param('s', $email);

    // execute
    $stmt->execute();

    // Store The Result
    $stmt->store_result();

    // Return Numbers of rows
    return $stmt->num_rows;
}

// Checking User By Username

function checkUserByUsername($email)
{
    // Make Database Connection
    $objDB = objDB();

    // Make The Statement
    $stmt = $objDB->prepare('SELECT * FROM users WHERE username=?');

    // Bind The Paramters
    $stmt->bind_param('s', $email);

    // execute
    $stmt->execute();

    // Store The Result
    $stmt->store_result();

    // Return Numbers of rows
    return $stmt->num_rows;
}

// Redirection reuseable function

function redirect($file)
{
    header("Location:" . URLROOT . '/' . $file);
}

// Setting a msg
function setMsg($name, $value, $class = 'success')
{
    if (is_array($value)) {
        $_SESSION[$name] = $value;
    } else {
        $_SESSION[$name] = "<div class='alert alert-$class text-center'>$value</div>";
    }
}

// Getting a msg

function getMsg($name)
{
    if (isset($_SESSION[$name])) {
        $session = $_SESSION[$name];
        unset($_SESSION[$name]);
        return $session;
    }
}