<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-learning</title>
</head>

<body>

    <ul>
        <?php foreach ($task as $todo) :?>
        <li>
           <?= $todo -> title ?>
        </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>