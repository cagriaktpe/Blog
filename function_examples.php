<?php

function showMessage($name = 'bob') {
    return "Hi, $name";
}

echo showMessage("Frank");
echo showMessage();

?>