<?php
    class Funcionario {
        private $nome;
        private $cargo;
        private $salarioHORA;
        private $horasTrabalhadas;
        private $cpf;

        //construtor
        public function __construct($nome, $cargo, $salarioHORA, $horasTrabalhadas, $cpf) {
            $this->nome = $nome;
            $this->cargo = $cargo;
            $this->salarioHORA = $salarioHORA;
            $this->horasTrabalhadas = $horasTrabalhadas;
            $this->cpf = $cpf;
        }

        //get horasTrabalhadas
        public function getHorasTrabalhadas() {
            return $this->horasTrabalhadas;
        }

        //funcao para verificar quantidade de horas trabalhadas
        public function verificarHorasTrabalhadas() {
            echo "Voce possui " . $this->horasTrabalhadas . " horas trabalhadas";
        }

        //Método para registrar as horas trabalhadas
        public function registrarHoras($horas) {
            echo "Voce adicionou mais " . $horas . " horas ao seu banco de horas";
            $this->horasTrabalhadas += $horas;
        }

        //Método para calcular o valor do Salário do Funcionário
        public function calcularSalario() {
            return $this->salarioHORA * $this->horasTrabalhadas;
        }

        //Método para obter od dados do Funcionário
        public function imprimirDados() {
            echo "Nome: {$this->nome}, Cargo: {$this->cargo}, Salário: R$" . $this->calcularSalario() . ", CPF: {$this->cpf}";
        }

    }
?>
