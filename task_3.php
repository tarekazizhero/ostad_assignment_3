<?php
function sortingArray($grades) {
    rsort($grades);
    print_r($grades);
}
$grades = array(85, 92, 78, 88, 95);
sortingArray($grades);