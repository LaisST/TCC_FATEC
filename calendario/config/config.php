<?php
#caminhos absolutos
$dirInt = "";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/calendario/{$dirInt}");

#Se a ultima letra do servidor for uma barra ele não recebe nada, se for outra coisa ele recebe uma barra
$bar = (substr($_SERVER['DOCUMENT_ROOT'], -1)=='/')?"":"/";
#Constante para incluir arquivos
define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

#Banco de dados
define('HOST', 'localhost');
define('DB', 'sistema');
define('USER', 'root');
define('PASS', '');

#Incluir arquivos
include (DIRREQ.'calendario\lib\composer\vendor\autoload.php');

