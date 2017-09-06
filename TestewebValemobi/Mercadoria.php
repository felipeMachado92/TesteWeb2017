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
    private $vlMercadoria;
    
    //Construtor
    function __construct($cdMercadoria, $tpMercadoria, $nmMercadoria, $vlMercadoria) {
        $this->cdMercadoria = $cdMercadoria;
        $this->tpMercadoria = $tpMercadoria;
        $this->nmMercadoria = $nmMercadoria;
        $this->vlMercadoria = $vlMercadoria;
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

    function getVlMercadoria() {
        return $this->vlMercadoria;
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

    function setVlMercadoria($vlMercadoria) {
        $this->vlMercadoria = $vlMercadoria;
    }
    
    //Fim Getters e Setters
    

}
