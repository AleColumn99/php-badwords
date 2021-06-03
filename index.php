<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
  </head>

  <body>

  <?php
    $censored = $_GET['censored'];
    $text = "Testo molto lungo non so esattamente cosa scrivere banana frutta banana fragole mele giovanni";
    $length = strlen($text);
    $censoredText = str_replace($censored, '***', $text);
    $censoredLength = strlen($censoredText);
  ?>

  <h1>TESTO:</h1>
  <p><?php echo $text ?></p>
  <h3>Lunghezza: <?php echo $length ?> caratteri</h3>
  
  <h1>TESTO MODIFICATO:</h1>
  <p><?php echo $censoredText ?></p>
  <h3>Lunghezza: <?php echo $censoredLength ?> caratteri</h3>
    
  </body>

</html>