<?php

//la deconnexion 
if(isset($pdo)){
    $pdo=null;
echo 'deconnected from database !';

}else{
    echo 'deconnected failed !';
 
}


?>