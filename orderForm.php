<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doručovací informace</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            max-width: 100%;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #555;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["pizzas"]) || count($_SESSION["pizzas"]) == 0) {
        header("Location: kosikTemplate.php");
    }
    if (isset($_SESSION["error"]))
        foreach ($_SESSION["error"] as $error): ?>
            <script>
                alert("<?= $error ?>");
            </script>
        <?php endforeach;
    ?>
    <h1>Doručovací informace</h1>

    <form action="process_order.php" method="post">
        <label for="name">Jméno a příjmení:</label>
        <input type="text" id="name" name="name" required>

        <label for="street">Ulice:</label>
        <input type="text" id="street" name="street" required>

        <label for="city">Město:</label>
        <input type="text" id="city" name="city" required>

        <label for="housenr">Číslo popisné:</label>
        <input type="text" id="housenr" name="housenr" required>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>

        <label for="postalcode">PSČ:</label>
        <input type="text" id="postalcode" name="postalcode" required>

        <input type="submit" value="Objednat">
    </form>
</body>

</html>