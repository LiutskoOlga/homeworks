<?php
require_once('2.php');

if ($age >= 18 && $age <= 59) {
    echo "You should work";
}
if ($age > 59) {
    echo "It is time for you to retire";
}
if ($age >= 0 && $age <= 17) {
    echo "You still early work";
}