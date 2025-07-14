<?php
class Student {
    private $id;
    private $name;
    private $address;
  
    private static $laltu="display.txt";

     function __construct($id, $name, $address) {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
      
    }

    public function caught() {
        return $this->id . ", " . $this->name . " ," . $this-> address . ", " .   PHP_EOL;
    }
    public function store() {
       file_put_contents(self::$laltu, $this->caught(), FILE_APPEND);
    }


 public static function showData(){
    $students = file(self::$laltu);
    echo "<b>id | name | address </b><br>";
    foreach ($students as $d) {
        list($id, $name, $address) = explode(",", trim($d));
        echo"$id | $name | $address  <br>";

    }

}
}

?>