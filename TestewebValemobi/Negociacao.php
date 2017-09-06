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
    private $prNegociacao;
    
    //Construtor da classe
    function __construct($mercadoria, $qtdMercadoria, $tpNegociacao, $prNegociacao) {
        $this->mercadoria = $mercadoria;
        $this->qtdMercadoria = $qtdMercadoria;
        $this->tpNegociacao = $tpNegociacao;
        $this->prNegociacao = $prNegociacao;
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

    function getPrNegociacao() {
        return $this->prNegociacao;
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

    function setPrNegociacao($prNegociacao) {
        $this->prNegociacao = $prNegociacao;
    }
    
    //Inicio Getters e Setters
    
}
