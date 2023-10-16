<?php

class CamisetasView{

    function ShowCamisetas($camisetas){
         
    require './templates/camisetas.phtml';
         
    }
    function ShowCamiseta($camiseta){
         
        require './templates/camiseta.id.phtml';
             
        }
    function ShowCamisetasByDecada($camisetas){

        require './templates/camiseta.decada.phtml';
    }
}
