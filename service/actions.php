<?php

require("queries.php");

$action = $_POST["action"];

switch ($action){
    case 1:
        $folio = $_POST["folio"];
        registerToCourse($folio);
        break;
    case 2:
        $code = $_POST["code"];
        
        registerAssitence($code);
        break;
    case 3:
        
        selectContacts($code);
        break;
    case 4:
        $id = $_POST["id"];
        $status = $_POST["status"];
        changeStatus($id, $status);
        break;
}

?>