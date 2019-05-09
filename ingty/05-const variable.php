<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
        <title>05-Const Variables</title>
        <style>
        body{
            color: #fc0;
            background: #000;
        }
        </style>
    </head>
    <body>
        <?php
            define('KWOTA_DO_ODJECIA', 586.85);
            define('STAWKA_PODATKOWA', 0.19);
            print('Podatek od dochodu 5000 PLN w 2008 roku wynosi: ');
            printf('%0.2f', (5000 * STAWKA_PODATKOWA - KWOTA_DO_ODJECIA));
            print(' PLN');
        ?>
    </body>
</html>