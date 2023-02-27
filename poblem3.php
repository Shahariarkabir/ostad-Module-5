<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the name and email from the form
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Create a new instance of the Person class
    $person = new Person();

    // Set the name and email properties
    $person->setName($name);
    $person->setEmail($email);

    // Display the name and email properties on the webpage
    echo "Name: " . $person->getName() . "<br>";
    echo "Email: " . $person->getEmail() . "<br>";
}
