<?php

interface interfacePublicacao
{
    function abrir();
    function fechar();
    function folhear($pagina);
    function avancarPagina();
    function voltarPagina();
}
?>
