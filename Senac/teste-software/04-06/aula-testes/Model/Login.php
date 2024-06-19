<?php
    class Login {
        private $email;
        private $senha;

        public function __construct($email, $senha) {
            $this->setEmail($email);
            $this->setSenha($senha);
        }

        //o get ele serve para retornar o "email" que foi inserido no set
        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function Logar(){
            if ($this->email == "jv@gmail.com" and $this->senha == "12345"): 
                echo "Logado com sucesso";
            else:
                echo "Dados invalidos";
            endif;
        }
    }

    $login1 = new Login("jv@gmail.com","12345");
    $login1->Logar();

    echo "<br>";
    
    $login1 = new Login("jv@gmail.com","123456");
    $login1->Logar();
?>