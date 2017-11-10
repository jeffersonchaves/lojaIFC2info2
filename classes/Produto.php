<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

require_once "Conexao.php";

class Produto {

    private $codigo;
    private $nome;
    private $preco;
    private $categoria;

    public function __construct($codigo, $nome, $preco, $categoria){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
    }

    public function salvar(){
        $sql = "NSERT INTO tb_produtos (nome, preco, categoria) VALUES ('$this->nome', $this->preco, '$this->categoria')";

        $conexao = new Conexao();
        $conexao = $conexao->getConexao();
        $conexao->exec($sql);
    }

    public function getProdutos(){
        $sql = "SELECT * FROM tb_produtos";

        $conexao = new Conexao();
        $conexao = $conexao->getConexao();

        $consulta = $conexao->query($sql);
        $listaProdutos = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $listaProdutos;
    }
}

//nao facam isso em casa
$tomate = new Produto(null, 'Rabanete', 2.00, 'Tubérculo');
$lista = $tomate->getProdutos();

print_r($lista);