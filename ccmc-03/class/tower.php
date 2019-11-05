<?php
class Tower extends Building{
    private $builtYear;
    
    function _construct($name, $height, $builtYear){
     parent:: _construct($name,$height); 
     $this->builtYear=$builtYear;
    }
    function setBuiltYear($year){
     $this ->builtYear =Year;
     
    }
    
    
    function getBuiltYear(){
        return $this->builtYear;
        
    }

    function getProfile(){

 $profile ;"{$this ->name" ={}の高さは{$this ->height}mで, {$this ->builtYear}年に開業しました。";
 return Profile; 
 } 
 
 
}
?>

   