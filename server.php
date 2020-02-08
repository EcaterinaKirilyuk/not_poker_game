<?php 
    $name = $_POST['name'];
    $money = $_POST['money'];
    $gameCost = 250;
    $cards = array();
    $cardsType = array("A", "B", "C", "D");

    if($money < $gameCost)
    {
        unset($_POST['play']);
        $notEnoughMoney = true;
    }

    if(isset($_POST['play']))
    {
        $money -= $gameCost;
        
        for($i = 0; $i < 4; $i++)
        {
            $cards[] = $cardsType[array_rand($cardsType)] . random_int(1, 13);
        }

    }


    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Not Poker Game</title>
</head>
<body>
    <div class="row">

        <?php foreach($cards as $card): ?>
            <div class="col-3">
                <p><?= $card ?></p>
            </div>
        <?php endforeach; ?>
        
    </div>

    <div class="row">
        <div class="col-3">
            <form action="server.php" method="post">
                <button type="submit" name="play" <?php echo isset($notEnoughMoney) ? " disabled" : ""; ?>>Play</button>
                <input type="text" name="name" value="<?= $name ?>" readonly hidden>
                <input type="text" name="money" value="<?= $money ?>" readonly>
            </form>
        </div>
    </div>

    <div class="row">
            <p <?php echo isset($notEnoughMoney) ? "" : " hidden"; ?>>Not Enough Money!</p>
    </div>

</body>
</html>