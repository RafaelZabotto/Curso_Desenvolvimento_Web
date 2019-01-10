function iniciaJogo(){

    var url = window.location.search;

    var nivel_jogo = url.replace("?","");

    //1 fácil -> 120 segundos
    //2 normal -> 60 segundos
    //3 difícil -> 30 segundos

    var tempo_segundos = 0;

    if(nivel_jogo == 1) {
        tempo_segundos = 120;
    }

    if(nivel_jogo == 2) {
        tempo_segundos = 60;
    }

    if(nivel_jogo == 3) {
        tempo_segundos = 30;
    }

    //Inserindo segundos no span
    document.getElementById("cronometro").innerHTML = tempo_segundos;

    //quantidade de balões
    var qtde_baloes = 10;

    cria_baloes(qtde_baloes);

    //imprimir qtde baloes inteiros

    document.getElementById("baloes_inteiros").innerHTML(qtde_baloes);
    document.getElementById("baloes_estourados").innerHTML = 0;
}

function cria_baloes(qtde_baloes){

        for(var i = 1; i <= qtde_baloes; i++){

            var balao = document.createElement("img");
            balao.src = "imagens/balao_azul_pequeno.png";
            balao.style.margin = '10px';
        
            document.getElementById('cenario').appendChild(balao);
        }
}