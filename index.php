<?php

class User
{
    private $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function login()
    {
        echo $this->name . ' is logged in.';
    }
}

$user1 = new User('Jane Doe', 'jane@test.com');

$user1->login();

// Class inheritence
class Admin extends User
{
    public $level;

    public function __construct($name, $email, $level)
    {
        $this->level = $level;
        // Called to set the parent constructor...
        parent::__construct($name, $email);
    }
}

$admin1 = new Admin('tom', 'tom@test.com', 1);
echo '<br>';
$admin1->login();
echo '<br>' . $admin1->level;

class CurrentSavings
{
    // Static member
    public static $amount = 2000;
}

echo "$" . number_format(CurrentSavings::$amount);

// Abstract class
abstract class Shape {
    protected $name;

    // Abstract method
    abstract public function calculateArea();

    public function __construct($name) {
        $this->name = $name;
    }

    // Concrete method
    public function getName() {
        echo $this->name;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    #[Override]
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

$circle = new Circle('circle', 5);
echo '<br>';
var_dump($circle);

