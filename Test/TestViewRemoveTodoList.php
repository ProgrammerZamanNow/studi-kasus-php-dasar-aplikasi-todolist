<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Eko");
addTodoList("Kurniwan");
addTodoList("Khannedy");
addTodoList("Programmer");
addTodoList("Zaman");
addTodoList("Now");

showTodoList();

viewRemoveTodoList();

showTodoList();