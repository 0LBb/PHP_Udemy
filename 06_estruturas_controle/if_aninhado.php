<?php



if(10 > 2){
    echo "Entrou no primeiro if<br>";

    if(10 > 3){
        echo "Entrou no segundo if<br>";
    }
}

if(10 > 2){
    echo "Entrou no primeiro if<br>";

    if(10 < 3){
        echo "Entrou no segundo if<br>";
    } else {
        echo "Entrou no segundo else";
    }
}