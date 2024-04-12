<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Převodník měn</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>

<form class="center" action="index.php" method="post">

    <div id="box">
        <h2><div class="center">Převodník měn <img src="icons8-money-32.png"></div></h2>
        <table>
	        <tr>
	            <td>
		            Vlož částku:<input type="text" name="amount"><br>
	            </td>
            </tr>
            <tr>
                <td>
	                <br><div class="center">Z:<select name='cur1'>
	                <option value="CZK" selected>Česká koruna(CZK)</option>
	                <option value="EUR">EURO(EUR)</option>
                    <option value="USD">Americký dolar(USD)</option>
	                </select>
                </td>
            </tr>
            <tr>
	            <td>
	                <br><div class="center">Na:<select name='cur2'>
                    <option value="CZK">Česká koruna(CZK)</option>
                    <option value="EUR" selected>EURO(EUR)</option>
	                <option value="USD" >Americký dolar(USD)</option>
	                </select>
                </td>
            </tr>
            <tr>
                <td><div class="center"><br>
                    <input type='submit' name='submit' value="Převeď"></div>
                </td>
            </tr>
        </table>
</form>

<?php 
    require_once('prevodnikMen.php');
?>

</body>
</html>