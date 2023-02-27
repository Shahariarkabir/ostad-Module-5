<?php
class Person {
    // Properties
    private $name;
    private $email;
    // Methods
    public function setName($name) {
        $this->name = $name;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
}
// Create an instance of the Person class
$person = new Person();
// Set the name and email properties
$person->setName("John Doe");
$person->setEmail("johndoe@example.com");
// Display the name and email properties on the webpage
echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail() . "<br>";
?>
