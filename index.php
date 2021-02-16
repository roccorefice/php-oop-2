<?php

include __DIR__ . '/classes/User.php';

$users = [
    new User('mariorossi', 'mariorossi@mail.it', 'mario123'),
    new User('giovannabianchi', 'giobianchi@mail.it', 'gio9876'),
    new User('fabio_090', 'fab90@mail.it', 'fabioitalia90'),
    new User('rosimoon', 'rosaria.luna@mail.it', 'moonros10'),
    new User('carlopax88', 'carlo.passero@mail.it', 'carlopx88'),

];

// foreach ($users as $user){
//     var_dump($user -> username);
//     var_dump($user -> email);
//     var_dump($user -> password);

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <style> section {padding: 10px;} </style>
</head>
<body>
<?php
    foreach($users as $user) { ?>
        <section>
            <h3>username: <?php echo $user->username; ?> </h3>
            <h3>mail: <?php echo $user->email; ?> </h3>
        </section>

    <?php
    }
    ?>
    
</body>
</html>