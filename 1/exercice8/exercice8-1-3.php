<?php 

$couleur ="Rouge";

switch (ucfirst($couleur)) {
    case "Rouge":
        echo "S'arretez.";
        break;
    case "Orange":
        echo "Ralentissez.";
        break;
    case "Vert":
        echo "Passez.";
        break;
    default:
        echo "Couleur non reconnue.";
        break;
}
?>