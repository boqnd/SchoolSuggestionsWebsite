<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>FEG Suggest BETA</title>
</head>
<body>
<form action="process.php" method="POST">
    <div id="border">
        <div id="content">
    <h1>FEG Suggest</h1>
            <h2>Ça ira puisque nous sommes ensemble</h2>

            <hr>
            <label for="suggestion">Предложение: </label><br/><textarea rows="7" name="suggestion" id="suggestion" class="textBox" placeholder="Напишете своето предложеие тук." ></textarea>
            <br/><label for="firstName">Име: </label><input type="text" name="firstName" id="firstName" class="textBox" placeholder="Избираемо поле">
            <br/><label for="lastName">Фамилия: </label><input type="text" name="lastName" id="lastName" class="textBox" placeholder="Избираемо поле">
            <br/><label for="mail">E-mail: </label><input type="email" name="mail" id="mail" class="textBox" placeholder="Избираемо поле">

            <br/><label for="grade">Клас: </label><select name="grade" class="selectBox" id="grade">
            <option value="0">Избираемо поле</option>
            <option value="8">8 клас</option>
            <option value="9">9 клас</option>
            <option value="10">10 клас</option>
            <option value="11">11 клас</option>
            <option value="12">12 клас</option>
        </select>
            <span id="class">
    <br/><label for="class">Паралелка: </label><select name="class" class="selectBox">
            <option value="0">Избираемо поле</option>
            <option value="a">"А" паралелка</option>
            <option value="b">"Б" паралелка</option>
            <option value="v">"В" паралелка</option>
            <option value="g">"Г" паралелкас</option>
            <option value="d">"Д" паралелкас</option>
            <option value="e">"Е" паралелка</option>
            <option value="j">"Ж" паралелкас</option>
        </select></span>
    <br/><input type="submit" value="Изпрати" id="btn">
    </div>
    </div>
</form>

</body>
</html>