<?php


require_once './model/data.php';
require_once './businessLogic/deleteData.php';

function viewDeleteTodoList() {
    deleteData(2);
};