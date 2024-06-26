<?php

    require_once './Player.php';
    require_once './VivoOuMorto.php';

    class TestaPlayerVivoOuMorto {
        public function realizarTeste(){
            $player = new Player("josezinho", 1);
            $verificar = new VivoOuMorto($player);
            
            echo  $verificar->verificarVivoOuMorto();
        }

    }

    $teste = new TestaPlayerVivoOuMorto;
    $teste->realizarTeste();
?>