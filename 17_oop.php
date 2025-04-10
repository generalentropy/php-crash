<?php

/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/


class User
{
    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // Construtor - run when object is created
    public function __construct($name, $email, $password)
    {
        $this -> name = $name;
        $this -> email = $email;
        $this -> password = $password;
    }

    // Method
    public function set_name($name)
    {
        $this -> name = $name;
    }



    public function get_name()
    {

        return $this -> name;
    }
}


// Instantiate a user objet
$user1 = new User('Eddy', 'eddy@tuta.io', 'dksjdskdjkj');
$user2 = new User('David', 'dvd@gmail.com', 'opozopaz');


$user1->set_name('Eddy');
$user2->set_name('John');


var_dump($user1);
var_dump($user2);

echo '<br />';

echo $user2 -> email . '<br />';
echo $user1 -> get_name() . '<br />';
echo $user1 -> email . '<br />';


// Inheritance
class Employee extends User
{
    public string $title;
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title()
    {
        return $this -> title;
    }
};


$employee1 = new Employee('Sarah', 'Sarah@gmail.com', 'dksjdksjdjs', 'Manager');


echo $employee1-> get_title();
