<?php

// Obtém o código de idioma do navegador, a partir do cabeçalho 'HTTP_ACCEPT_LANGUAGE'. O método substr extrai apenas os dois primeiros caracteres da string que representa o código do idioma.   
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Define um array com os idiomas suportados
$acceptLang = ['es', 'en', 'pt']; 

// Verifica se o código de idioma obtido na linha 4 está incluído no array de idiomas suportados. Se estiver, o valor de $lang permanece, se não, o valor de $lang é definido como 'en'. 
$lang = in_array($lang, $acceptLang) ? $lang : 'en';
      
// Inclui o arquivo de tradução correspondente ao código de idioma em $lang
require_once "../localizacao/{$lang}.php"; 