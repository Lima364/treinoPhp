<?php
// funções anonimas

function teste($callback){
    $callback();
}

test(function(){
    echo "Terminou!!!";
})