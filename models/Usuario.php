<?php 
	class Usuario{

		private $id;
		private $nome;
		private $sobrenome;
		private $email;
		private $senha;
		private $data_cadastro;

		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

        public function rules()
        {
            return [
                [['nome', 'sobrenome', 'email', 'senha'], 'required'],
                // email has to be a valid email address
                ['email', 'email'],
                ['senha', 'password'],
            ];
        }

	}
 ?>