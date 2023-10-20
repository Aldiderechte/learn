<!DOCTYPE html>
<html lang="de">

<head>

</head>

<body>

<!--Taschenrechner-->
<form action="calc.php" method="post">

<div style="color: red;">
    <?= $error ?? '' ?>
</div>


    <table id="calcu">
        <tr>
            <td colspan="3"><input type="text" id="result" name="input" value="<?= $result ?? '' ?>"></td>
            <td><input type="button" value="c" onclick="clr()" /> </td>
        </tr>
        <tr>
            <td><input type="button" value="1" name="data[]" onclick="dis('1')"
                       onkeydown="myFunction(event)"> </td>
            <td><input type="button" value="2" onclick="dis('2')"
                       onkeydown="myFunction(event)"> </td>
            <td><input type="button" value="3" onclick="dis('3')"
                       onkeydown="myFunction(event)"> </td>
            <td><input type="button" value="/" onclick="dis('/')"
                       onkeydown="myFunction(event)"> </td>
        </tr>
        <tr>
            <td><input type="button" value="4" onclick="dis('4')"
                       onkeydown="myFunction(event)"> </td>
            <td><input type="button" value="5" onclick="dis('5')"
                       onkeydown="myFunction(event)"> </td>
            <td><input type="button" value="6" onclick="dis('6')"
                       onkeydown="myFunction(event)"> </td>
            <td><input type="button" value="*" onclick="dis('*')"
                       onkeydown="myFunction(event)"> </td>
        </tr>
        <tr>
            <td><input type="button" value="7" onclick="dis('7')"
                       onkeydown="myFunction(event)"> </td>
            <td><input type="button" value="8" onclick="dis('8')"
                       onkeydown="myFunction(event)"> </td>
            <td><input type="button" value="9" onclick="dis('9')"
                       onkeydown="myFunction(event)"> </td>
            <td><input type="button" value="-" onclick="dis('-')"
                       onkeydown="myFunction(event)"> </td>
        </tr>
        <tr>
            <td><input type="button" value="0" onclick="dis('0')"
                       onkeydown="myFunction(event)"> </td>
            <td><input type="button" value="." onclick="dis('.')"
                       onkeydown="myFunction(event)"> </td>

        <!-- Lösen der Rechnung-->

            <td><input type="submit" value="=" > </td>

            <td><input type="button" value="+" onclick="dis('+')"
                       onkeydown="myFunction(event)"> </td>
        </tr>
    </table>
</form>


<script>

    // Funktion zum anzeigen von Rechnung
    function dis(val) {
        document.getElementById("result").value += val
    }

    function myFunction(event) {
        if (event.key == '0' || event.key == '1'
            || event.key == '2' || event.key == '3'
            || event.key == '4' || event.key == '5'
            || event.key == '6' || event.key == '7'
            || event.key == '8' || event.key == '9'
            || event.key == '+' || event.key == '-'
            || event.key == '*' || event.key == '/')
            document.getElementById("result").value += event.key;
    }

    var cal = document.getElementById("calcu");
    cal.onkeyup = function (event) {
        if (event.keyCode === 13) {
            console.log("Enter");
            let x = document.getElementById("result").value
            console.log(x);
            solve();
        }
    }

    // Funktion zum löschen der Rechnung
    function clr() {
        document.getElementById("result").value = ""
    }

    var jsVal = "Test!";

</script>
</body>

<style>
        table {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
        }

        input[type="button"],input[type="submit"] {
            width: 100%;
            padding: 20px 40px;
            background-color: #007BFF;
            color: white;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
        }

        input[type="text"] {
            padding: 20px 30px;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            border: 2px solid black;
        }

        body {

            background-color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>

</html>
