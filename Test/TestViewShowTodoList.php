<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khannedy");
addTodoList("Programmer");
addTodoList("Zaman");
addTodoList("Now");

viewShowTodoList();
