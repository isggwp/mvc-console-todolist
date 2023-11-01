<?php

require_once './businessLogic/getData.php';


/**
 * Mendelete data todo list
 */
function deleteData($keyFromUser) {
    global $data;

    $result = array_filter($data, function($key) use ($keyFromUser) {
        return $key !== $keyFromUser;
    },
    ARRAY_FILTER_USE_KEY);

    if($data == $result) {
        echo "Sorry, key does not Match";
    } else {
        $data = $result; 
        getData();
    }
}



