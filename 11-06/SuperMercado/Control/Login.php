<?php
    class Login{
        private $email;
        private $senha;

        //criando os get (get = pegar)
        public function getEmail(){
            return $this->email;
        }
        public function getSenha(){
            return $this->senha;
        }

        //criando os set (set = setar ou editar)
        public function setEmail($email){
            $this->email = $email;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }

        //criando os construtores 
        public function __construct($email, $senha){
            $this->setEmail($email);
            $this->setSenha($senha);
        }
        
        //funcao para logar
        public function logar(){
            if ($this->email == "teste@gmail" and $this->senha == "12345"){
                echo "logado com sucesso";
            } else {
                echo "erro ao logar";
            }
        }
    }
?>