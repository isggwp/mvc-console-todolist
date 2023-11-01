<?php

/**
 * mengambil data todo list
 */
function getData() {

    global $data;

    echo 'TODO LIST' . PHP_EOL;

    foreach ($data as $key => $value) {
        echo "[{$key}] - {$value}" . PHP_EOL;
    };
}