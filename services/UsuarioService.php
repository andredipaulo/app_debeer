<?php

	class UsuarioService {

		private $conexao;
		private $usuario;

		public function __construct(Conexao $conexao, Usuario $usuario){
			$this->conexao = $conexao->conectar();
			$this->usuario = $usuario;
		}

        //crud
        public function ler(){

        }

		public function inserir(){

			$query = "select                       
                        email
                      from 
                        tb_usuarios
                      where email = ?";

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->usuario->__get('email'));
            $stmt->execute();

            $existe = $stmt->fetch(PDO::FETCH_OBJ);

            if (empty($existe->email)){
                $query = " insert into tb_usuarios (nome, sobrenome, email, senha) values(?, ?, ?, ?)";

                $stmt = $this->conexao->prepare($query);
                $stmt->bindValue(1, $this->usuario->__get('nome'));
                $stmt->bindValue(2, $this->usuario->__get('sobrenome'));
                $stmt->bindValue(3, $this->usuario->__get('email'));
                $stmt->bindValue(4, $this->usuario->__get('senha'));
                $stmt->execute();
            }else{
                return $existe;
            }
		}

        public function atualizar(){

        }
        public function remover(){

        }

        public function login(){
            $query = ' select * from tb_usuarios  
                       where email = ?
                       and senha = ?';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->usuario->__get('email'));
            $stmt->bindValue(2, $this->usuario->__get('senha'));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ);
        }

		public function checkEmail($email){
			$query =  'select email from tb_usuarios
				        where email=?';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(1, $this->usuario->__get('email'));
			return $stmt->execute();					
		}

	}

 ?>