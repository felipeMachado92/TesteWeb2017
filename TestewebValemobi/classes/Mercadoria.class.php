<?php

/**
 * Classe que contém os atributos e métodos do CRUD da mercadoria
 *
 * @author Felipe
 */

require_once 'Conecta.class.php';
class Mercadoria {
    private $cdMercadoria;
    private $tpMercadoria;
    private $nmMercadoria;
    private $vlMercadoria;
    
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
            $this->cdMercadoria = $dados['cdMercdoria'];
            $this->nmMercadoria = $dados['nmMercadoria'];
            $this->tpMercadoria = $dados['tpMercadoria'];
            $this->vlMercadoria = $dados['vlMercadoria'];
            $cst = $this->con->conectar()->prepare("INSERT INTO `tb_mercadoria` (`cd_mercadoria`, `nm_mercadoria`, `tp_mercadoria`, `vl_mercadoria`) VALUES (:cdMercdoria, :nmMercadoria, :tpMercadoria, :vlMercadoria);");
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
    
        public function querySeleciona($dado){
        try{
            $cst = $this->con->conectar()->prepare("SELECT cd_mercadoria, nm_mercadoria, tp_mercadoria, vl_mercadoria FROM `tb_mercadoria` WHERE `cd_mercadoria` = :cdMercadoria;");
            $cst->bindParam(":cdMercadoria", $this->cdMercadoria, PDO::PARAM_INT);
            $cst->execute();
            return $cst->fetch();
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
}

