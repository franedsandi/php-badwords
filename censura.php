<?php
  $paragraph = $_POST['paragraph'];
  $lengthParagraph = strlen($paragraph);
  $word = $_POST['word'];
  $paragrafWithWord = $_POST['paragraph'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP badwords</title>
</head>
<body>
<h1>Risultato</h1>
  <h2>il paragrafo è "<?php echo $paragraph ?>";</h2>
  <h2>il paragrafo contiene: <?php echo $lengthParagraph ?> lettere.</h2>
</body>
</html>