<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Košík</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #555;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a.delete-link{
            color: #ff0000;
        }
        a.delete-all-link,
        a.order-link {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            
            
        }

        
        a.delete-all-link:hover,
        a.order-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <a href="index.php">Zpět na výběr přísad</a>
    <h1>Položky v košíku:</h1>
    <?php
    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });
    session_start();
    if (isset($_SESSION['pizzas'])):
        foreach ($_SESSION['pizzas'] as $key => $pizza): ?>

            <h2>Pizza <?= $key + 1 ?></h2>
            <a class="delete-link" href="delete.php?key=<?= $key ?>">Smazat</a>
            <ul>
                <li>Základ:
                    <?= $pizza->getBase() ?>
                </li>
                <li>Přísady:
                    <ul>
                        <?php foreach ($pizza->getToppings() as $topping): ?>
                            <li>
                                <?= $topping ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        <?php endforeach;

    endif;
    ?>
    <a class="delete-all-link" href="deleteAll.php">Vymazat košík</a>
    <a class="order-link" href="orderForm.php">Objednat</a>
</body>

</html>