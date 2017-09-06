<?php

/**
 * Classe que contém os atributos e métodos das negociações
 *
 * @author Felipe
 */
class Negociacao {
    private $mercadoria;
    private $qtdMercadoria;
    private $tpNegociacao;
    private $vlNegociacao;
    
    //Construtor da classe
    function __construct($mercadoria, $qtdMercadoria, $tpNegociacao, $vlNegociacao) {
        $this->mercadoria = $mercadoria;
        $this->qtdMercadoria = $qtdMercadoria;
        $this->tpNegociacao = $tpNegociacao;
        $this->vlNegociacao = $vlNegociacao;
    }
    
    //Inicio Getters e Setters
    function getMercadoria() {
        return $this->mercadoria;
    }

    function getQtdMercadoria() {
        return $this->qtdMercadoria;
    }

    function getTpNegociacao() {
        return $this->tpNegociacao;
    }

    function getVlNegociacao() {
        return $this->vlNegociacao;
    }

    function setMercadoria($mercadoria) {
        $this->mercadoria = $mercadoria;
    }

    function setQtdMercadoria($qtdMercadoria) {
        $this->qtdMercadoria = $qtdMercadoria;
    }

    function setTpNegociacao($tpNegociacao) {
        $this->tpNegociacao = $tpNegociacao;
    }

    function setVlNegociacao($vlNegociacao) {
        $this->vlNegociacao = $vlNegociacao;
    }
    
    //Inicio Getters e Setters
    
}
