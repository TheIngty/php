<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
        <title>07-else if</title>
        <style>
        body{
            color: #fc0;
            background: #000;
        }
        </style>
    </head>
    <body>
        <?php
            $a = 2;
            $b = 3;
            print("Wartosc a: $a <br>");
            print("Wartosc b: $b <br>");
            if($a>$b){
                print("$a>$b");
            }
            else if($a==$b){
                print("$a=$b");
            }
            else{
                print("$a<$b");
            }
        ?>
    </body>
</html>