<?php
//-COOKIE
setcookie('user','Rodrigo Oliveir', time()+3600);
setcookie('email', 'rodrigosantosweb@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

var_dump($_COOKIE);