<?php
//==declarations==//
$nameErr = $postalErr = $dobErr = $emailErr = $passwordErr = $countryErr = " ";
$name = $postal = $dob = $email = $password = $country = " ";
$isValid = false;

$countries = ["United States", "United Kingdom", "Canada", "Australia", "Bangladesh"];

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ---- NAME ----
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = cleanInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z' -]+$/", $name)) {
            $nameErr = "Only letters, hyphen and white space allowed";
        } elseif (strlen($name) < 3) {
            $nameErr = "Name must be at least 3 characters";
        }
    }

    // ---- POSTAL CODE ----
    if (empty($_POST["postal"])) {
        $postalErr = "Enter your postal code";
    } else {
        $postal = cleanInput($_POST["postal"]);
        if (!preg_match("/^[0-9]{4,10}$/", $postal)) {
            $postalErr = "Postal code must be 4 to 10 digits";
        }
    }

    // ---- DATE OF BIRTH ----
    if (empty($_POST["dob"])) {
        $dobErr = "Enter your date of birth";
    } else {
        $dob   = cleanInput($_POST["dob"]);
        $today = new DateTime();
        $birth = DateTime::createFromFormat("Y-m-d", $dob);

        if (!$birth || $birth->format("Y-m-d") !== $dob) {
            $dobErr = "Enter a valid date in YYYY-MM-DD format";
        } elseif ($birth > $today) {
            $dobErr = "Date of birth cannot be in the future";
        } elseif ($birth->diff($today)->y < 18) {
            $dobErr = "You must be at least 18 years old to register";
        }
    }

    // ---- EMAIL ----
    if (empty($_POST["email"])) {
        $emailErr = "Enter your email address";
    } else {
        $email = cleanInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Enter a valid email address, e.g. saiqamardia@gmail.com";
        }
    }

    // ---- PASSWORD ----
    // not cleaned and never sent back to the browser.
    if (empty($_POST["password"])) {
        $passwordErr = "Enter a password";
    } else {
        $password = $_POST["password"];
        if (strlen($password) < 8) {
            $passwordErr = "Password must be at least 8 characters";
        } elseif (!preg_match("/[A-Za-z]/", $password) || !preg_match("/[0-9]/", $password)) {
            $passwordErr = "Password must contain at least one letter and one number";
        }
    }

    // ---- COUNTRY ----
    if (empty($_POST["country"])) {
        $countryErr = "Select a country";
    } else {
        $country = cleanInput($_POST["country"]);
        if (!in_array($country, $countries, true)) {
            $countryErr = "Select a country from the list";
        }
    }

    // ---- OVERALL VALIDITY ----
    $isValid = !$nameErr && !$postalErr && !$dobErr
        && !$emailErr && !$passwordErr && !$countryErr;
}