<?php

/**
 * Classe que contém os atributos e métodos do CRUD da mercadoria
 *
 * @author Felipe
 */

require_once 'Conecta.class.php';
class Mercadoria {
    private $con;
    private $cdMercadoria;
    private $tpMercadoria;
    private $nmMercadoria;
    private $vlMercadoria;
    
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
            $this->cdMercadoria = $dados['cdMercdoria'];
            $this->nmMercadoria = $dados['nmMercadoria'];
            $this->tpMercadoria = $dados['tpMercadoria'];
            $this->vlMercadoria = $dados['vlMercadoria'];
            $cst = $this->con->conectar()->prepare("INSERT INTO `tb_mercadoria` (`cd_mercadoria`, `nm_mercadoria`, `tp_mercadoria`, `vl_mercadoria`) "
                    . "VALUES (:cdMercadoria, :nmMercadoria, :tpMercadoria, :vlMercadoria);");
            $cst->bindValue(":cdMercadoria", $this->cdMercadoria);
            $cst->bindValue(":nmMercadoria", $this->nmMercadoria);
            $cst->bindValue(":tpMercadoria", $this->tpMercadoria);
            $cst->bindValue(":vlMercadoria", $this->vlMercadoria);
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
            $cst = $this->con->conectar()->prepare("SELECT cd_mercadoria, nm_mercadoria, tp_mercadoria, vl_mercadoria FROM `tb_mercadoria` WHERE `cd_mercadoria` = :cd_mercadoria;");
            $cst->bindValue(":cdMercadoria", $this->cdMercadoria);
            $cst->execute();
            return $cst->fetch();
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
}

