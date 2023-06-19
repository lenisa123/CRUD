<?php
   require_once "../login/controlar_acesso.php";
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";
   require_once "faz_upload.php";

   $codigo = $_POST['codigo'];
   $nomedoanimal = $_POST['nomedoanimal'];
   $nomedodono = $_POST['nomedodono'];
   $raca = $_POST['raca'];
   $peso = $_POST['peso'];
   $idade = $_POST['idade'];
   $foto = $nome_foto;

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `animal` SET `nomedoanimal`= ?, `nomedodono`= ?, `raca`= ?, `peso`= ?, `idade`= ?, foto= ? WHERE `codigo`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssssssi", $nomedoanimal, $nomedodono, $raca, $peso, $idade, $foto, $codigo);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   
 






