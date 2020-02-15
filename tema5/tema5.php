<!--PHP-->
<!---PHP Data Types-->
<!---PHP Strings-->
<!---PHP Numbers-->
<!---PHP Constants-->
<!---PHP Operators-->

<!--Orice fisier PHP are extensia php. Orice script php incepe cu tag-ul: < //?php si se termina cu tag-ul ?>, numai daca mai urmeaza cod html, daca este numai cod php nu este obligatoriu.-->

<!--Tema -->
<!--Va rog sa faceti o pagina php in xampp, htdocs in directorul "tema5" un fisier php: tema5.php"-->
<!--In acest fisier va rog aplicati ce ati invata in acest curs.-->

<?php

//variable types
$string="Sir de cuvinte";
$float1=5.23;
$float2=7.22;
echo "suma de float-uri\n";
var_dump($float1+$float2);
$int1=60;
$int2=23;
echo "suma de int si float\n";
var_dump($int1+$float2);

$simpleArray=array(15.5,9,"Cuvant");
echo "array cu multiple tipuri de date\n";
var_dump($simpleArray);

echo "a little bit of OOP:\n";

class Obj {
    function Obj() {
        $this->proprietate = "Sir de caractere";
    }
}

$new_obj= new Obj();
echo "Proprietatea obiectului. ".$new_obj->proprietate;


?>