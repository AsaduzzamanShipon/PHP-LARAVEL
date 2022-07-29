<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="calculator">
        <form action="index.php">
            <label for="name" id="number">First number :</label> <br> <input type="number" name="number1" id="number1" ><br>
            <label for="name" id="number">Second number :</label>  <br> <input type="number" name="number2" id="number2" ><br> <br>
            <select name="name" id="name">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
            <option value="modulus">Modulus</option>
            </select><br><br><br>
            <button id="button">Submit</button>
            <br>
            <br>
        </form>
        <div id="total">
        <?php 

        if ($_GET['name'] == "addition") {
           $addition = $_GET['number1'] + $_GET['number2']; 
           echo "Total Number:" . $addition;
        }
        elseif ($_GET['name'] == "subtraction") {
            echo $_GET['number1'] - $_GET['number2']; 
        }
        elseif ($_GET['name'] == "multiplication") {
            echo $_GET['number1'] * $_GET['number2']; 
        }
        elseif ($_GET['name'] == "division") {
            echo $_GET['number1'] / $_GET['number2']; 
        }
        elseif ($_GET['name'] == "modulus") {
            echo $_GET['number1'] % $_GET['number2']; 
        }
    
        ?>
        </div>
    </main>
</body>
</html>