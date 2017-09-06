<?php

/**
 * Classe que contém os atributos e métodos do CRUD da mercadoria
 *
 * @author Felipe
 */
class Mercadoria {
    private $cdMercadoria;
    private $tpMercadoria;
    private $nmMercadoria;
    private $prMercadoria;
    
    //Construtor
    function __construct($cdMercadoria, $tpMercadoria, $nmMercadoria, $prMercadoria) {
        $this->cdMercadoria = $cdMercadoria;
        $this->tpMercadoria = $tpMercadoria;
        $this->nmMercadoria = $nmMercadoria;
        $this->prMercadoria = $prMercadoria;
    }
    
    //Inicio Getters e Setters
    function getCdMercadoria() {
        return $this->cdMercadoria;
    }

    function getTpMercadoria() {
        return $this->tpMercadoria;
    }

    function getNmMercadoria() {
        return $this->nmMercadoria;
    }

    function getPrMercadoria() {
        return $this->prMercadoria;
    }

    function setCdMercadoria($cdMercadoria) {
        $this->cdMercadoria = $cdMercadoria;
    }

    function setTpMercadoria($tpMercadoria) {
        $this->tpMercadoria = $tpMercadoria;
    }

    function setNmMercadoria($nmMercadoria) {
        $this->nmMercadoria = $nmMercadoria;
    }

    function setPrMercadoria($prMercadoria) {
        $this->prMercadoria = $prMercadoria;
    }
    
    //Fim Getters e Setters
    

}
