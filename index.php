<?php
$paragrafo = 'But so far trouble had not come; and as Mr. Baggins was generous with his money, most people were willing to forgive him his oddities and his good fortune. 
He remained on visiting terms with his relatives (except, of course, the Sackville-Bagginses), and he had many devoted admirers among the hobbits of poor and unimportant families. 
But he had no close friends, until some of his younger cousins began to grow up.';

$censored = isset($_GET['censored']) ? $_GET['censored'] : '';
$censoredPar = str_ireplace($censored, '***', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BAD WORDS</title>
</head>
<body>
    <h1>BAD WORDS</h1>
    <h3>Aiya Eärendil Elenion Ancalima!</h3>
    <form method="GET">
        <input type="text" name="censored">
        <button>Censor</button>
    </form>
    <p> 
        <?php echo isset($_GET['censored']) ? $censoredPar : $paragrafo ;?>
    </p>
    <p>La lunghezza del paragrafo è: <?php echo strlen($paragrafo); ?></p>
    <p>La lunghezza del paragrafo censurato è: <?php echo strlen($censoredPar); ?></p>
    <p>La parola censurata è: <?php echo $censored; ?></p>
</body>
</html>