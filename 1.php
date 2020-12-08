<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 - Tabuleiro de xadrez</title>
    <link rel="stylesheet" type="text/css" href="stylesheet_1.css" media="screen" />
</head>
<body>

    <div class="container">
        <?php for($l = 1; $l <= 9; $l++) {
            echo '<div class="coluna">';
            for($c = 1; $c <= 9; $c++) {
                echo '<div class="celula ';
                if (($c % 2) == 1) {
                    echo 'impar';
                } else {
                    echo 'par';
                }
                echo '"><div>';
            }
            echo '</div>';
        }
        ?>
    </div>
    
</body>
</html>