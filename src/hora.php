<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //date_default_timezone_set("America/La_Paz");
        $zona_horaria= date_default_timezone_get();
        echo $zona_horaria." ".date('Y-m-d\TH:i:sP');
    ?>
</body>
</html>