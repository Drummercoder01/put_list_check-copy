<?php
$_content = array(
    "Micky,De Pauw,Schoten,België",
    "Anita,Verresen,Schoten,België",
    "Karin,Villez,Schilde,België",
    "Koen,Villez,Brasschaat,België"
  );

$_pointer = fopen("test6.csv","wb");

foreach ($_content as $_line)
  {
   fputcsv($_pointer,explode(',',$_line));

  }

fclose($_pointer);



$_pointer = fopen("test6.csv","r"); 

while(! feof($_pointer))
{
    
  list($_vNaam, $_aNaam, $_gemeente,$_land)=fgetcsv($_pointer);
    
  echo("$_vNaam $_aNaam uit $_gemeente in $_land<br>");
    
}

fclose($_pointer);
?>

