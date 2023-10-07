<?php

// weighted options
$options = [
  "rock" => 1,
  "paper" => 1,
  "scissors" => 0.5  
];

$totalWeights = 0;
foreach ($options as $weight) {
  $totalWeights += $weight;
}

function getComputerChoice() {
  global $options, $totalWeights;
  
  $rand = mt_rand(0, $totalWeights);
  $runningTotal = 0;

  foreach ($options as $key => $value) {
    $runningTotal += $value;
    if ($rand < $runningTotal) {
      return $key;
    }
  }
}

function checkWinner($player, $computer) {
  if ($player == $computer) {
    return "Tie game!";
  } else if (
    ($player == "rock" && $computer == "scissors") || 
    ($player == "paper" && $computer == "rock") ||
    ($player == "scissors" && $computer == "paper")
  ) {
    return "You win!";
  } else {
    return "Computer wins!";
  }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $playerChoice = $_POST['playerChoice'];
  $computerChoice = getComputerChoice();

  $winner = checkWinner($playerChoice, $computerChoice);

}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Rock Paper Scissors</title>
</head>
<body>

  <h1>Rock Paper Scissors</h1>

  <form method="post">
    <label>Enter your choice:</label>
    <input type="text" name="playerChoice">
    <button type="submit">Play</button>
  </form>

  <?php if (isset($winner)): ?>
    <p>You chose: <?php echo $playerChoice; ?></p>
    <p>The computer chose: <?php echo $computerChoice; ?></p>
    <p><?php echo $winner; ?></p>
  <?php endif; ?>

</body>
</html>