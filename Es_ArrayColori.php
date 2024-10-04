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
        $lista[] = popolateArray($num);
        $color = array("red", "green", "blue", "yellow", "orange");
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
                echo "<li style:'color:" . $arrayCol[rand(0,5)] . "'>$i</li>";
            }
            echo "</ol>";
        }
    ?>
</body>
</html>