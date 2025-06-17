<?php
$clima = $_POST['clima'];

switch ($clima) {
    case 'ensolarado':
        echo "Com o clima ensolarado, recomendamos ir ao Clube.";
        break;
    case 'ameno':
        echo "Com o clima ameno, recomendamos ir ao Parque.";
        break;
    case 'chuvoso':
        echo "Com o clima chuvoso, recomendamos ir ao Cinema.";
        break;
    case 'nublado':
        echo "Com o clima nublado, recomendamos ir ao Museu.";
        break;
    case 'tempestuoso':
        echo "Com o clima tempestuoso, o melhor é ficar em casa.";
        break;
    default:
        echo "Clima inválido.";
}
?>
