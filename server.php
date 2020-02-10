<?php 
	require_once "loader.php";

	
    $name = $_POST['name'];
    $money = $_POST['money'];

    $gameCost = 100;
    $prize = 0;

    $cards = array();
    $cardsController = new CardsController();
    $dbController = new DbController();
	

    if($money < $gameCost)
    {
        unset($_POST['play']);
        $notEnoughMoney = true;
    }

    if(isset($_POST['play']))
    {
        $money -= $gameCost;
        
        $cards = $cardsController->get_random_cards();
        $wining_combo = $cardsController->check_same($cards);

        switch(sizeof($wining_combo)) 
        {
            case 1:  
                $prize = 125;
            break;

            case 2:  
                $prize = 150;
            break;
        }
		
        $money += $prize;
        
        $dbController->insertHistory($name, $prize - $gameCost);
    }




    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<link href="css/style.css" rel="stylesheet">
    <title>Game</title>
</head>
<body>
    <div class="row">

        <?php foreach($cards as $card): ?>
            <div class="col-3">
                <p><?php echo $card->suit . " " . $card->value; ?></p>
            </div>
        <?php endforeach; ?>
        
    </div>
    <br />
    <div class="row">
        <div class="col-3">
            <form action="server.php" method="post">
                <button type="submit" name="play" id="play"<?php echo isset($notEnoughMoney) ? " disabled" : ""; ?>>Play</button>
                <input type="text" name="name" value="<?= $name ?>" readonly hidden>
                <input type="text" name="money" value="<?= $money ?>" readonly>
            </form>
        </div>
    </div>

    <div class="row">
            <p <?php echo isset($notEnoughMoney) ? "" : " hidden"; ?>>Not Enough Money!</p>
			<p <?php echo $prize > 0 ? "" : " hidden"; ?>>Поздравляем! Вы выйграли <?= $prize?></p>
    </div>

</body>
</html>