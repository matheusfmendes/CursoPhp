<div class="titulo">Tipo String</div>
<?php
echo 'Eu sou uma string';

echo '<br>';

var_dump("eu tambem");

echo '<br>';

echo ("Nós também".'somos'), '<br>';

echo "Tambem aceito","virgulas", '<br>';

echo "'Teste'". '"Teste"'.'\'Teste\''."\"Teste\"".'<br>';

echo '<br>'. strtoupper('maximizado');
echo '<br>'. strtolower('minimiizado');
echo '<br>'. ucfirst('só a primeira letra');
echo '<br>'. ucwords('todas as palavras');
echo '<br>'. strlen('quantas letras?');
echo '<br>'. mb_strlen("eu tambem","utf-8");
echo '<br>'. substr('só uma parte mesmo',7,6);
echo '<br>'. str_replace('isso','aquilo','Trocar isso isso');