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

	}
 ?>