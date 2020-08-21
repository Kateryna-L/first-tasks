<?php

$links = array(
    'https://www.google.com/', 
    'https://divan.tv/', 
    'https://in.vigo.one/', 
    'http://htmlbook.ru/'
    );
?>
<html>
    <head></head>
    <body>
        <ul>
        <?php for($i=0; $i <= (count($links)-1); $i++){ ?>
            <li><a href="<?php echo $links[$i];?>"></li>
        <?php }?></ul>        
    </body>
</html>