<?php
$hardware = ['Motherboard', 'Processor', 'Hard Disk', 'Pc Cooler', 'VGA Card', 'SSD'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardware</title>
</head>

<body>
    <h4>Macam-macam perangkat keras komputer</h4>
    <ol>
        <?php for ($i = 0; $i < 6; $i++) { ?>
            <li> <?php echo $hardware[$i] ?></li>
        <?php } ?>
    </ol>

    <h4>Macam-macam perangkat keras komputer</h4>
    <ol>
        <?php
        array_push($hardware, "Card Reader", "Modem")
        ?>


        <?php for ($i = 0; $i < count($hardware); $i++) { ?>
            <li>
                <?php
                sort($hardware);
                echo ($hardware[$i]);
                ?>
            </li>
        <?php } ?>

    </ol>
</body>

</html>