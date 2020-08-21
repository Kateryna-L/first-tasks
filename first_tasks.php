/*First Task*/

<?php

$array = array("1","13","45","2","31","16","99","7");
$sumEven = 0;
$sumOdd = 0;
foreach ($array as $value) {
    if($value % 2 == 0) {
        $sumEven = $sumEven + $value;
    }
    else{
        $sumOdd = $sumOdd + $value;
    }
}
    
echo $sumEven." - сумма четных"."\n";
echo $sumOdd." - сумма не четных"."\n";
    
?>




/*Second Task*/

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




/*Third Task*/

<?php

class User {
   public string  $name; 
   public string  $city;
   
   function setName ($name){
       $this->name = $name;
   }
    function setCity ($city){
       $this->city = $city;
   }
    function check (string $name, string $city): bool {
        if ($name == $this->name and $city == $this->city){
            return true;
            }
        else{
            return false;
        }
   }
}