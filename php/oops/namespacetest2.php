<?php
include 'namespacetest1.php';
class MyTableclass{
    public function hello(){
        echo __CLASS__;
        echo "<br />-----------------<br />";
    }
}
$classtable = new MyTableclass();
$classtable->hello();
$namespaceclasstable = new MyTable\MyTableclass();
$namespaceclasstable->hello();
?>