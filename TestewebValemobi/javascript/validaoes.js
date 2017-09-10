function calculaTotal(){
    form.vlNegociacao.value = ((form.vlMercadoria.value*1) * (form.qtdMercadoria.value*1)).toFixed(2);
}

function Onlynumbers(e){
    var tecla=new Number();
    if(window.event) {
        tecla = e.keyCode;
    }
    else if(e.which) {
        tecla = e.which;
    }
    else {
        return true;
    }
    if((tecla >= "97") && (tecla <= "122")){
        return false;
    }
}


