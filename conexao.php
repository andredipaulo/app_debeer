<?php 


	class Conexao{

		private $host = '127.0.0.1';
		private $dbname = 'db_debeer';
		private $user =  'root';
		private $pass = '';

		public function conectar(){
			
			try {
				
				$conexao = new PDO( 
					"mysql:host=$this->host;dbname=$this->dbname", //dsn
					"$this->user", //user
					"$this->pass" // pass
				 );

				return $conexao;

			} catch (PDOException $e) {
				echo '<p>'.$e->getMessage().'</p>';
			}			
		}
	}
 ?>