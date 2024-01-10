<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výběr přísad na pizzu</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            max-width: 100%;
        }

        label {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            color: #555;
        }

        select,
        input[type="checkbox"] {
            margin-bottom: 10px;
            margin-left: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;

        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        a {
            text-align: center;
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        div {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
    </style>

</head>

<body>

    <h1>Výběr přísad na pizzu</h1>

    <form action="submit.php" method="post">
        <div>
            <label for="base">Základ:</label>
            <select name="base" id="base">
                <option value="rajčatový">Rajčatový</option>
                <option value="smetanový">Smetanový</option>
            </select>
        </div>

        <div>
            <label for="cheese">Sýr:</label>
            <input type="checkbox" id="cheese" name="topping[]" value="sýr">

        </div>
        <div>
            <label for="pepperoni">Pepperoni:</label>
            <input type="checkbox" id="pepperoni" name="topping[]" value="pepperoni">

        </div>
        <div>
            <label for="mushrooms">Houby:</label>
            <input type="checkbox" id="mushrooms" name="topping[]" value="houby">

        </div>
        <div>
            <label for="olives">Olivy:</label>
            <input type="checkbox" id="olives" name="topping[]" value="olivy">

        </div>
        <div>
            <label for="onions">Cibule:</label>
            <input type="checkbox" id="onions" name="topping[]" value="cibule">

        </div>
        <div>
            <label for="bellPeppers">Paprika:</label>
            <input type="checkbox" id="bellPeppers" name="topping[]" value="paprika">

        </div>
        <div>
            <label for="sausage">Klobása:</label>
            <input type="checkbox" id="sausage" name="topping[]" value="klobása">

        </div>
        <div>
            <label for="tomatoes">Rajčata:</label>
            <input type="checkbox" id="tomatoes" name="topping[]" value="rajčata">

        </div>

        <input type="submit" value="Přidat do košíku">
    </form>


    <a href="kosikTemplate.php">Košík</a>




</body>

</html>