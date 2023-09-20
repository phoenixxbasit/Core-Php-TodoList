<?php 
function debug($var) {
    echo "<pre>", var_dump($var) , "</pre>";
    die("Debug ENDED"); 
}
?>