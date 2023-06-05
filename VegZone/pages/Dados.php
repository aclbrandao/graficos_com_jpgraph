<?php

class Dados {
              private $pdo;

              public function __construct($dsn, $username, $password) 
              {
                            try {
                                          $this->pdo = new PDO ("mysql:dbname=".$dsn, $username, $password);
                            }
                            catch (PDOException $pdoexception) {
                                          echo "Erro com o banco de dados: ";
                                          $pdoexception->getMessage();
                                          exit();

                            }
                            catch (Exception $errosgenericos) {
                                          echo "Erro com o banco de dados: ";
                                          $errosgenericos->getMessage();
                                          exit();

                            }
              }

              public function buscaQuantidade($id)
        {
                $resposta=array();
                $cmd = $this->pdo->prepare("SELECT quantidade FROM vegetarianos WHERE id = :id");
                $cmd->bindValue(":id", $id);
                $cmd->execute();
                $resposta = $cmd->fetchAll(PDO::FETCH_ASSOC);
                return $resposta;
        }

        //editar aqui para o relatório:
        public function buscaEstoque($mes)
        {
                $resposta=array();
                $cmd = $this->pdo->prepare("SELECT valor FROM estoque WHERE mes = :mes");
                $cmd->bindValue(":mes", $mes);
                $cmd->execute();
                $resposta = $cmd->fetchAll(PDO::FETCH_ASSOC);
                return $resposta;
        }

        public function abreArray ($array){
                foreach ($array as $chave){
                        foreach($chave as $valor){
                           return $valor;
                        }
                     }
        }
}

?>