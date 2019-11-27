<?php

echo ("Hoeveel vrienden zal ik vragen om hun droom? ");
$aantal = readline ();

$Personen = array();
//for ($i=0; $i < ; $i++) {
  // code...

for ($i=0; $i <$aantal; $i++) {
$dromenarray = array();
$naam = readline("name");
$aantal_dromen = readline ("hoeveel dromen ga je opgeven: ");
if(is_numeric($aantal_dromen)){
for ($j=0; $j < $aantal_dromen; $j++) {
  echo "wat is je droom: ";
  array_push($dromenarray, readline());
}
$persoon = array('naam' => $naam, 'dromen' => $dromenarray);
array_push($Personen, $persoon);
}
else {
echo "correcte nummer invoeren ";
}
}

var_dump($Personen);
 ?>
