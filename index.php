<?php
echo ("Seja bem-vindo ao jogo da velha de Erick & Isaac \n");

do {
    $jogador1 = readline('Primeiro jogador(X): Insira teu nome: ');
    $jogador2 = readline('Segundo jogador(O): Insira teu nome: ');

    $jogador = 'X';

    $tabuleiro= [
        0,1,2,
        3,4,5,
        6,7,8,
    ];

    $vencedor = null;

    while($vencedor === null){

        echo $tabuleiro[0].'|'.$tabuleiro[1].'|'.$tabuleiro[2]."\n";
        echo $tabuleiro[3].'|'.$tabuleiro[4].'|'.$tabuleiro[5]."\n";
        echo $tabuleiro[6].'|'.$tabuleiro[7].'|'.$tabuleiro[8]."\n";

        $posicao = (int) readline("Jogador {$jogador}, Insira qual posição deseja jogar:"); //este txt readline converte o valor de string que é a resposta do jogador e converte para inteiro

        if (!in_array($posicao, [0,1,2,3,4,5,6,7,8])){ 
            echo "\nPosição inexistente, digite novamente.\n";
            continue;
        }
        if ($tabuleiro[$posicao] === 'X' || $tabuleiro[$posicao] === 'O'){
            echo "\nPosição ocupada, digite novamente.\n";
            continue;
        }

        $tabuleiro[$posicao] = $jogador;

        if(
            ($tabuleiro[0] === 'X' && $tabuleiro[1] === 'X' && $tabuleiro[2] === 'X') ||
            ($tabuleiro[3] === 'X' && $tabuleiro[4] === 'X' && $tabuleiro[5] === 'X') ||
            ($tabuleiro[6] === 'X' && $tabuleiro[7] === 'X' && $tabuleiro[8] === 'X') ||
            ($tabuleiro[0] === 'X' && $tabuleiro[3] === 'X' && $tabuleiro[6] === 'X') ||
            ($tabuleiro[1] === 'X' && $tabuleiro[4] === 'X' && $tabuleiro[7] === 'X') ||
            ($tabuleiro[2] === 'X' && $tabuleiro[5] === 'X' && $tabuleiro[8] === 'X') ||
            ($tabuleiro[0] === 'X' && $tabuleiro[4] === 'X' && $tabuleiro[8] === 'X') ||
            ($tabuleiro[2] === 'X' && $tabuleiro[4] === 'X' && $tabuleiro[6] === 'X')
        ){
            $vencedor = 'X';
            break;
        }
        if(
            ($tabuleiro[0] === 'O' && $tabuleiro[1] === 'O' && $tabuleiro[2] === 'O') ||
            ($tabuleiro[3] === 'O' && $tabuleiro[4] === 'O' && $tabuleiro[5] === 'O') ||
            ($tabuleiro[6] === 'O' && $tabuleiro[7] === 'O' && $tabuleiro[8] === 'O') ||
            ($tabuleiro[0] === 'O' && $tabuleiro[3] === 'O' && $tabuleiro[6] === 'O') ||
            ($tabuleiro[1] === 'O' && $tabuleiro[4] === 'O' && $tabuleiro[7] === 'O') ||
            ($tabuleiro[2] === 'O' && $tabuleiro[5] === 'O' && $tabuleiro[8] === 'O') ||
            ($tabuleiro[0] === 'O' && $tabuleiro[4] === 'O' && $tabuleiro[8] === 'O') ||
            ($tabuleiro[2] === 'O' && $tabuleiro[4] === 'O' && $tabuleiro[6] === 'O')
        ){
            $vencedor = 'O';
            break;
        }

        if(in_array([0,1,2,3,4,5,6,7,8], $tabuleiro)){
            break;
        }

        if($jogador === 'X'){
            $jogador = 'O';
        } else {
            $jogador = 'X';
        }

    }

        echo $tabuleiro[0].'|'.$tabuleiro[1].'|'.$tabuleiro[2]."\n";
        echo $tabuleiro[3].'|'.$tabuleiro[4].'|'.$tabuleiro[5]."\n";
        echo $tabuleiro[6].'|'.$tabuleiro[7].'|'.$tabuleiro[8]."\n";

        if($vencedor === 'X'){
            echo "Parabens jogador {$jogador1}, você venceu.\n";
        } elseif ( $vencedor === 'O'){
            echo "Parabens jogador {$jogador2}, você venceu.\n";
        } else {
            echo "EMPATE.\n";
        }

        $mensagem = readline('Deseja Jogar novamente? S|N : ');
        
        if ($mensagem === 'S'){
            $jogarnovamente = true;
        }else{}

} while( $jogarnovamente === true );