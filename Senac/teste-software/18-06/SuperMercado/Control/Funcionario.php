<?php
    class Funcionario {
        private $nome;
        private $cargo;
        private $salario;
        private $horasTrabalhadas;
        private $identificacao;

        //construtor
        public function __construct($nome, $cargo, $salario, $horasTrabalhadas, $identificacao) {
            $this->nome = $nome;
            $this->cargo = $cargo;
            $this->salario = $salario;
            $this->horasTrabalhadas = $horasTrabalhadas;
            $this->identificacao = $identificacao;
        }

        //Método GET
        public function getNome() {
            return $this->nome;
        }
        public function getCargo() {
            return $this->cargo;
        }
        public function getSalario() {
            return $this->salario;
        }
        public function getHorasTrabalhadas() {
            return $this->horasTrabalhadas;
        }
        public function getIdentificacao() {
            return $this->identificacao;
        }

        //Método para registrar as horas trabalhadas
        public function registrarHoras($horas) {
            $this->horasTrabalhadas += $horas;
        }

        //Método para calcular o valor do Salário do Funcionário
        public function calcularSalario() {
            return $this->salario * $this->horasTrabalhadas;
        }

        //Método para obter od dados do Funcionário
        public function obterDadosFuncionario() {
            return "Nome: {$this->nome}, Cargo: {$this->cargo}, Salário: R$" . number_format($this->salario, 2) . ", ID: {$this->identificacao}";
        }

    }
?>
