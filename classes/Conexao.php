<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 10/11/2017
 * Time: 10:52
 */

class Conexao {

    const SERVIDOR  = "localhost";
    const NOMEBANCO = "bd_loja_2info2";
    const USUARIO   = "root";
    const SENHA     = "";

    public function getConexao(){

        $conexao = new PDO("mysql:host=".self::SERVIDOR.";dbname=".self::NOMEBANCO , self::USUARIO, self::SENHA);

        //mostrar os erros ocorridos laa no banco
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        return $conexao;

    }
}
//teste conexao
//$con = new Conexao();
//$con->getConexao();
