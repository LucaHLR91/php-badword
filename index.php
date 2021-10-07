<?php 
    $text = 'Un nuovo, sorprendente salto di qualità per le fotocamere. Un display così reattivo che anche i gesti di sempre ti stupiranno. Il chip per smartphone più veloce al mondo. Robustezza eccezionale. E autonomia senza precedenti.
    Entra nel mondo Pro.';
    $textlength = strlen($text);
    $badword = $_GET["badword"];
    $badword_position = strpos($text, $badword);
    $replace_value = '***';
    $word_replace = str_replace($badword, $replace_value, $text);
?>

<p><?php echo $text?></p>
<p>La lunghezza è <?php echo $textlength?> caratteri</p>
<p>La badword è: <?php echo $badword ?></p>
<p>La posizione della badword è: <?php echo $badword_position ?></p>
<p>Frase modifcata: <?php echo $word_replace ?></p>