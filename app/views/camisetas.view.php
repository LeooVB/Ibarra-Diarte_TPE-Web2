<?php


class CamisetasView{

    function ShowCamisetas($camisetas, $decadas){
         
    require './templates/camisetas.phtml';
    require './templates/addCamiseta.phtml';
         
    }
    function ShowCamiseta($camiseta, $decadas){
         
        require './templates/camiseta.id.phtml';
             
        }
    function ShowCamisetasByDecada($camisetas){

        require './templates/camiseta.decada.phtml';
    }
}
