<?php

    class Manager extends Conexao{

        public function insert_funcionario($data)
        {
            $pdo = parent::get_instance();

            $sql = "INSERT INTO funcionario VALUES (NULL, :nome, :usuario, :email, :CPF, :telefone, :empresa_id, :cargo, :gender)";

            $statement = $pdo->prepare($sql);
            foreach($data as $key => $value){
                $statement->bindValue(":$key", $value);
            }

            $statement->execute();
        }
        public function list_funcionario()
        {
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM funcionario order by id desc";
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function insert_obras($data)
        {
            $pdo = parent::get_instance();

            $sql = "INSERT INTO obras VALUES (NULL, :nome, :endereco, :id_funcionario, :data_obra, :tipo, :cep)";

            $statement = $pdo->prepare($sql);
            foreach($data as $key => $value){
                $statement->bindValue(":$key", $value);
            }

            $statement->execute();
        }
        public function list_obras()
        {
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM obras order by id desc";
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function logar($email, $senha){

                $pdo = parent::get_instance();

                $sql = "SELECT * FROM empresa WHERE email = '$email' AND senha = '$senha' ";
                $statement = $pdo->query($sql);
                
                
                $statement->execute();
                

                return $statement;

        }

        public function list_empresa($email, $senha)
        {
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM empresa WHERE email = '$email' AND senha = '$senha'";
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function list_empresa_id($id)
        {
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM empresa WHERE id = $id";
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }
    }

?>