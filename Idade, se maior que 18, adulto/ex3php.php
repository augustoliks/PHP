<?php 

$idade	= $_GET ["id"];

if ($idade >= 5 && $idade <= 7){


echo "Infantil A: ";
}


elseif ($idade >= 8 && $idade <= 10){


echo "Infantil B: ";
}


elseif ($idade >= 11 && $idade <= 13){


echo "Juvenil A: ";
}


elseif ($idade >= 14 && $idade <= 17){


echo "Juvenil B: ";
}

elseif ($idade >= 18){


echo "Adulto: ";
}

?>

