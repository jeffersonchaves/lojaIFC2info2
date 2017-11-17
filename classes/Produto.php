<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 08/11/2017
 * Time: 16:46
 */

require_once "Conexao.php";

class Produto {

    private $codigo;
    private $nome;
    private $preco;
    private $categoria;
    private $estoque;

    public function __construct($cod, $nom, $pre, $cat, $est ){
        $this->codigo    = $cod;
        $this->nome      = $nom;
        $this->preco     = $pre;
        $this->categoria = $cat;
        $this->estoque   = $est;
    }

    public function cadastrar(){
        $sql = "INSERT INTO tb_produtos (nome, preco, categoria, estoque) VALUES ('$this->nome', $this->preco, '$this->categoria', $this->estoque)";

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

//teste
$repolho = new Produto(null, "Repolho", 2.50, "Hortaliça", 100);
$repolho->cadastrar();

$lista = $repolho->getProdutos();
print_r($lista);