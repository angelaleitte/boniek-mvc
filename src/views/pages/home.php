<?php $render('header'); ?>

Opa, <?=$nome;?><br>
Eu tenho <?=$idade?>
<hr>

<?php
foreach($posts as $post){
    echo "<h2>".$post['titulo']."</h2>";
    echo "<p>".$post['corpo']."</p>";
    echo "<hr>";
}

?>