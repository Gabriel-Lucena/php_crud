<?php

function verificarLogin ($variavelSessao) {

    if (isset($variavelSessao) == false) {
        
        return false;

    } else {

        return true;

    }
};

?>