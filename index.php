<?php
require_once 'person.abstract.php';
define('className', "DawidKlimowicz");
class DawidKlimowicz extends Person {
    protected $firstName = 'Dawid';
    protected $lastName = 'Klimowicz';
    protected $counter = 0;
    public function saveData() {
        if (file_exists("data") == FALSE) {
            mkdir("data");
        }
        file_put_contents("data/" . className . ".counter.txt", $this->counter);
    }
    public function getCounter() {
        if (file_exists("data/" . className . ".counter.txt")) {
            $this->counter = file_get_contents("data/" . className . ".counter.txt");
        }
        $this->counter = $this->counter + 1;
        echo $this->counter;
    }
}
