<?php
require_once("class/Building.php");
require_once("class/Iintellingence.php");
class IntellingentBuilding extends Building implements Iintellingence {


    function isAutoLocked(){
     $message = "おートロック完備しています。";
     return $message;

    }
    
    function accessWIfi(){
    $message = "無線LAN常時接続できます。";
    return $message;
 }
}



?>