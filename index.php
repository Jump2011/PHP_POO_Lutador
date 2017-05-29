<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
         $l = array() ;
         $l[0] = new Lutador("PRETTY BOY","FRANCESA",31,1.75,68.9,11,2,1);
         $l[1] = new Lutador("JUNIO","BRASILEIRA",33,1.70,68.9,10,3,4);
         $l[2] = new Lutador("JACARE","EUA",31,1.75,83.9,11,2,1);
         $l[3] = new Lutador("JOSE ALDO","BRASILEIRA",31,1.75,68.9,11,2,1);
         
         $UEC01 = new Luta();
         $UEC01->marcarLuta($l[1],$l[3]);
         $UEC01->lutar();
         
        $l[3] -> status(); 
        $l[1] -> status();
    
        ?>
       </pre>
    </body>
</html>
