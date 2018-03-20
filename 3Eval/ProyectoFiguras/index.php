<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <title>Figuras</title>
    
</head>
<body>
    <?php
    include 'triangulo.php';
    include 'cuadrado.php';
    include 'circulo.php';

    $triangulo = new triangulo();
    $triangulo->setDimensiones(5.2 , 3);
     
    $cuadrado = new cuadrado();
    $cuadrado->setLado(4.5);
    
    $circulo = new circulo();
    $circulo->setRadio(3);
?>

<table align="center">
    <tr>
     <th></th>  
     <th>Círculo</th>
     <th>Cuadrado</th>
     <th>Triángulo</th>  
    </tr>
    <tr>
     <th>Área</th>
     <td><?php echo $circulo->area()?></td>
     <td><?php echo $cuadrado->area()?></td>
     <td><?php echo $triangulo->area()?></td>
    </tr>
    <tr>
     <th>Perímetro</th>
     <td><?php echo $circulo->perimetro()?></td>
     <td><?php echo $cuadrado->perimetro()?></td>
     <td><?php echo $triangulo->perimetro()?></td>
    </tr>
</table>

</body>
</html>
