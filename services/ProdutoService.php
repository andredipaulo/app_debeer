<?php

    class ProdutoService{

        public function __construct(Conexao $conexao )
        {
        }

        //crud
        public function create(){
            $query = 'insert into to tb_produtos( produto, descricao) values(?, ?)';



        }

        public function read(){

        }

        public function update(){

        }

        public function delete(){

        }


    }
?>
