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
    private $mercadoria;
    private $qtdMercadoria;
    private $tpNegociacao;
    private $vlNegociacao;
    
    public function __construct(){
        $this->con = new Conexao();
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
            $this->nmMercadoria = $dados['nmMercadoria'];
            $this->tpNegociacao = $dados['tpNegociacao'];
            $this->vlNegociacao = $dados['vlNegociacao'];
            $this->mercadoria=$dados['cdMercadoria'];
            $cst = $this->con->conectar()->prepare("INSERT INTO `tb_negociacao` (`qtd_mercadoria`, `tp_negociacao`, `vl_total`, `cd_mercadoria`) VALUES (:cdMercdoria, :nmMercadoria, :tpMercadoria, :vlMercadoria, :cdMercadoria);");
            $cst->bindParam(":cdMercadoria", $this->cdMercadoria, PDO::PARAM_INT);
            $cst->bindParam(":nmMercadoria", $this->nmMercadoria, PDO::PARAM_STR);
            $cst->bindParam(":tpMercadoria", $this->tpMercadoria, PDO::PARAM_STR);
            $cst->bindParam(":vlMercadoria", $this->vlMercadoria, PDO::PARAM_STR);
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
            $cst = $this->con->conectar()->prepare("SELECT ``tb_mercadoria.cd_mercadoria`, `tp_mercadoria`, `nm_mercadoria`, `qtd_mercadoria`, `vl_mercadoria`, `tp_negociacao`, `vl_total` FROM `tb_negociacao`, `mercadoria` "
                    . "WHERE `tb_mercadoria.cd_mercadoria` = `tb_negociacao.cd_mercadoria`;");
            $cst->execute();
            return $cst->fetchAll();
        } catch (PDOException $ex) {
            return 'erro '.$ex->getMessage();
        }
    }
    
}
