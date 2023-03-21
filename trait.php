
<?php
trait message {
    public function sayHi() {
        echo "Hi";
    }
}
class welcome {
    use message;

    public function myFunction() {
        $this->sayHi();
    }
}
$obj = new welcome();
$obj->myFunction(); // Output: "Hello"
?>

