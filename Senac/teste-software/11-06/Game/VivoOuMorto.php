<?php
    require_once './Player.php';

    class VivoOuMorto {
        private $player;

        //construtor do player
        function __construct($player){
            $this->player = $player;
        }

        //metodo para verificar se o player esta morto ou vivo
        function verificarVivoOuMorto(){
            if($this->player->getVida() <= 0){
                return "Morto";
            } else {
                return "Vivo";
            }
        }
    }
?>