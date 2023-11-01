<?php
require_once './businessLogic/getData.php';

/**
 * Mengupdate data todo list
 */
function updateData($newData) {
    $capitalizedString = ucwords($newData);

    global $data;
    $data =  array_merge([$capitalizedString], $data);

    getData();
}