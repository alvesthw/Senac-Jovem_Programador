<?php
    //teste da classe Funcionario

    include (__DIR__ . '/../Control/Funcionario.php');

    class TesteFuncionario{
        public function testar(){
            //obejeto do funcionario1
            $funcionario1 = new Funcionario("Kelvin", "Atendente", 30, 20, 27726625529);

            //metodos da classe Funcionario
            $funcionario1->verificarHorasTrabalhadas();
            echo "<br>";
            $funcionario1->registrarHoras(20);
            echo "<br>";
            $funcionario1->verificarHorasTrabalhadas();
            echo "<br>";
            echo "Seu salario atual é de " . $funcionario1->calcularSalario() . " reais";
            echo "<br>";
            $funcionario1->imprimirDados();

        }
    }

    $teste = new TesteFuncionario();
    $teste->testar();
?>