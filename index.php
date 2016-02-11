 <!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="index.css">
    <meta charset="UTF-8">

<title>Naslov</title>
</head>
<body>


<h1 id="Prvi">Prvi</h1>

<p id="Pozdrav">

    <?php
    echo('Pozdrav iz PHP-a');
    echo('<br>');
    echo(date('d.m.Y.'))

    ?>
</p>
<p id="Praznik">

    <?php
    $dana_do_praznika = 45;
    echo('Do praznika ja ostalo još:<b>' . $dana_do_praznika . '</b>');
    ?>
</p>


</body>
</html>
