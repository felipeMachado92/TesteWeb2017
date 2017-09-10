<?php

/**
 * Classe que contém os atributos e métodos das negociações
 *
 * @author Felipe
 */
require_once 'Conecta.class.php';
require_once 'Mercadoria.class.php';
class Negociacao {
    private $con;
    private $cdMercadoria;
    private $qtdMercadoria;
    private $tpNegociacao;
    private $vlNegociacao;
    
    public function __construct(){
        $this->con = new Conecta();
    }
    
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    
    public function __get($atributo){
        return $this->$atributo;
    }
    
    public function queryInsert($dados){
        try{
            $this->qtdMercadoria = $dados['qtdMercadoria'];
            $this->tpNegociacao = $dados['tpNegociacao'];
            $this->vlNegociacao = $dados['vlNegociacao'];
            $this->cdMercadoria=$dados['cdMercadoria'];
            $cst = $this->con->conectar()->prepare("INSERT INTO `tb_negociacao` (`qtd_mercadoria`, `tp_negociacao`, `vl_total`, `cd_mercadoria`) "
                    . "VALUES (:qtdMercadoria, :tpNegociacao, :vlNegociacao, :cdMercadoria);");
            $cst->bindValue(":qtdMercadoria", $this->qtdMercadoria);
            $cst->bindValue(":tpNegociacao", $this->tpNegociacao);
            $cst->bindValue(":vlNegociacao", $this->vlNegociacao);
            $cst->bindValue(":cdMercadoria", $this->cdMercadoria);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
    
        public function querySelect(){
        try{
            $cst = $this->con->conectar()->prepare("SELECT tb_mercadoria.cd_mercadoria, nm_mercadoria, tp_mercadoria, vl_mercadoria, qtd_mercadoria, vl_total, tp_negociacao  "
                    . "FROM tb_negociacao, tb_mercadoria "
                    . "WHERE tb_mercadoria.cd_mercadoria = tb_negociacao.cd_mercadoria ORDER BY cd_negociacao ASC;");
            $cst->execute();
            return $cst->fetchAll();
        } catch (PDOException $ex) {
            return 'erro '.$ex->getMessage();
        }
    }
    
}
