<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";


addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khannedy");

var_dump($todoList);
