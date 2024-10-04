<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Colori</title>
</head>
<body>
    <?php
        $num = rand(10,21);
        $lista = popolateArray($num);
        $color = array("rgb(255, 0, 0)", "rgb(60, 179, 113)", "rgb(0, 0, 255)", "rgb(238, 130, 238)", "rgb(255, 165, 0)");
        createList($lista, $color);

        function popolateArray($n){
            for ($i=0; $i < $n; $i++) { 
                $array[$i] = $i;
            }
            return $array;
        }

        function createList($array, $arrayCol){
            echo "<ol>";
            foreach ($array as $i) {
                $col = randomColors($arrayCol);
                echo "<li style='color: $col;'>$i</li>";
            }
            echo "</ol>";
        }

        function randomColors($c){
            return $c[rand(0,4)];
        }
    ?>
</body>
</html>