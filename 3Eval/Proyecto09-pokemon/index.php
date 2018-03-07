<?php
require "models/personajes/Sergiander.php";
require "models/personajes/Jigglyeugenio.php";
require "models/personajes/Pablostoise.php";
require "models/personajes/Chikosebas.php";


$pokesebas = new Chikosebas("Chikosebas");
$pokepablo = new Pablostoise("Pablostoise");
$pokeeugenio = new Jigglyeugenio("Jigglyeugenio");
$pokesergio = new Sergiander("Sergiander");

echo "<h1>Pokemon DAW</h1>";
echo "Nombre: " . $pokesebas->getNombre();
echo "<br>";
echo "Vida: " . $pokesebas->getVida();
echo "<br>";
echo "Tipo: " . $pokesebas->getTipo();
echo "<br>";
echo "Sexo: " . $pokesebas->getSexo();
echo "<br>";
echo "Látigo cepa: " . $pokesebas->getLatigocepa();
echo "<br>";
echo $pokesebas->getNombre() . " es un pokemon <b> " . $pokesebas->getSexo() . "</b> pero con su habilidad especial de transgénero puede transformarse en <b>" . $pokesebas->transgenero() . "</b> .";
echo "<br>";
echo "Como todos los pokemon puede gritar su propio nombre: <b>" . $pokesebas->gritarNombre() . "</b>";

echo "<br>";
echo "<br>";
echo "<br>";

echo "Nombre: " . $pokepablo->getNombre();
echo "<br>";
echo "Vida: " . $pokepablo->getVida();
echo "<br>";
echo "Tipo: " . $pokepablo->getTipo();
echo "<br>";
echo "Surf: " . $pokepablo->getSurf();
echo "<br>";
echo $pokepablo->getNombre() . " ataca a Chikosebas con surf y le deja con <b>" . $pokepablo->ataque($pokepablo->getSurf(), $pokesebas) . "</b> de vida.";
echo "<br>";
echo $pokepablo->getNombre() . " puede aumentar su poder de surf a <b>" . $pokepablo->potenciarPoder() . "</b> mediante potenciar poder.";

echo "<br>";
echo "<br>";
echo "<br>";

echo "Nombre: " . $pokeeugenio->getNombre();
echo "<br>";
echo "Vida: " . $pokeeugenio->getVida();
echo "<br>";
echo "Tipo: " . $pokeeugenio->getTipo();
echo "<br>";
echo "Dormir : + " . $pokeeugenio->getDormir();
echo "<br>";
echo "Jigglyeugenio también puede gritar su propio nombre: <b>" . $pokeeugenio->gritarNombre() . "</b>";
echo "<br>";
echo "Puede aumentar su vida a <b>" . $pokeeugenio->dormilon() . "</b> mientras duerme.";

echo "<br>";
echo "<br>";
echo "<br>";

echo "Nombre: " . $pokesergio->getNombre();
echo "<br>";
echo "Vida: " . $pokesergio->getVida();
echo "<br>";
echo "Tipo: " . $pokesergio->getTipo();
echo "<br>";
echo "Ascuas: " . $pokesergio->getAscuas();
echo "<br>";
echo "A Sergiander le gusta cantar su canción favorita: <b>" . $pokesergio->cantar() . "</b>";
echo "<br>";
echo "Sergiander ataca a Jigglyeugenio con ascuas y le deja con <b>" . $pokesergio->ataque($pokesergio->getAscuas(),$pokeeugenio) . "</b> de vida";

?>
