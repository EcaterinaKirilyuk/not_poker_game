<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Game</title>
</head>
<body>
<h2><em>Добро пожаловать. <br />Игра стоит 100.<br />Введите имя и сумму денег. <br />Удачи!</em></h2>
<div class="form">  
  <form action="server.php" method="post" id="form_start">
       <p ><strong> Имя:  </strong></p>
	   <input type="text" name="name" >
       <p ><strong> Ваш баланс:</strong></p>
	   <input type="text" name="money" >
	   <br />
       <button type="submit">Start</button>
    </form>
	
</div>
</body>
</html>