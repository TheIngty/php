<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
        <title>06-Adding text to var</title>
        <style>
        body{
            color: #fc0;
            background: #000;
        }
        </style>
    </head>
    <body>
        <?php
            $tekst = 'Andrej';
            $tekst .= ' Kierzowski';
            $tekst .= '<br>';
            $tekst .= 'ul. Czekoladowa 15';
            $tekst .= '<br>';
            $tekst .= '99-999 Czekoladowo';
            print($tekst);
        ?>
    </body>
</html>