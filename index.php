<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function generaUrlImmagine($height, $width) {
            return "https://picsum.photos/{$height}/{$width}";
        }
        echo "<img src='". generaUrlImmagine(rand(300,1000), rand(300,1000)) ."'></img>";
    ?>
</body>
</html>