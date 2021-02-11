<?php
function  ValidaCampos (string $Nome) : bool {
    if(empty($Nome)){
        echo ('O nome não pode ser vazio');
        return false;
    }
}