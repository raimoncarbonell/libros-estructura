<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>libros</title>
        <link href="estilo.css" rel="stylesheet">
        <script src="ajax.js"></script>
    </head>
    <body>
        <header>
            <h1>Libros</h1>
        </header>
        <nav>
            <h2>Listado de libros</h2>
            <ul>
                <?php
     require_once "datos/libros.php";
  $titulos =array_keys ($libros);
   for ($i=0;$i<count($titulos);$i++)
    {  
         $contenido  =array_values ($libros[$i]);
       //print_r($contenido);
        $c=array_values($contenido); 
       ?>
               
             <li><a href="javascript:cargarLibro(<?php echo $i ?>)"><?php echo $c[0];?> </a></li><?php // el valor de i es la pos del array objeto c es el titulo del libro ?>
        
        <?php
    }
                ?>
                    
            </ul>
        </nav>
       <main>
            <p>Seleciona el libro para ver su informacion</p>
        </main>
    </body>
</html>
