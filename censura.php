<?php
  $paragraph = $_POST['paragraph'];
  $word = $_POST['word'];

  $explode_paragraph = explode(' ', $paragraph);
  
  if (in_array($word, $explode_paragraph)) {
      $censored_paragraph = str_replace($word, '***', $paragraph);
  } else {
      $censored_paragraph = $paragraph;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP badwords</title>
</head>
<body>
  <div class="container">
    <h1>Risultato</h1>
      <h2>il paragrafo è "<?php echo $paragraph ?>";</h2>
      <h2>Il paragrafo contiene: <?php echo strlen($paragraph) ?> caratteri</h2>
      <h2>Il paragrafo contiene: <?php echo count($explode_paragraph) ?> parole.</h2>
      <hr>
      <h2>il nuovo paragrafo è "<?php echo $censored_paragraph ?>";</h2>
      <h2>Il paragrafo contiene: <?php echo strlen($censored_paragraph) ?> caratteri</h2>
      <h2>Il paragrafo contiene: <?php echo count(explode(' ', $censored_paragraph)) ?> parole.</h2>
  </div>
</body>
</html>
