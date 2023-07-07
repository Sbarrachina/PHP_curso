
<?php 

include'./for.php'; // imprime todos los archivos del archivo for.php

?>

<?php 

require'forX.php'; // no se imprime por que no exista forX.php
require'./for.php'; // imprime todos los archivos del archivo for.php

?>