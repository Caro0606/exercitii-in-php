 <?php
 echo 'Rezultatul este:' .((8+4)+(5+3));
 echo"<br>";
echo 'Rezultatul este:' .(3-((6+4)+(4+7)));
echo"<br>";
echo'Rezultatul este:' .(5*(2+8));
echo"<br>";
echo'Rezultatul este:' .(4*4)+9;
echo"<br>";
echo'Rezultatul este:' .pow(3,4);
echo"<br>";
echo'Rezultatul este:' .(8*pow(4,5))+6;
echo"<br>";
echo 'Rezultatul este:' .((15*5)+(6%4));
echo"<br>";
echo'Rezultatul este:' .((9*pow(5,3)+pow(7,2)+(7+4)));
echo"<br>";
echo'Rezultatul este:' .number_format(5.3);



$name="Carolina";
echo"<br>";
$name_1="Carolina";
$name_2="Hello";
echo $name_2.=$name_1;



echo"<br>";
$n="Hello";
$b="Carolina";

echo$n."".$b;
echo"<br>";
echo 'Carolina';
echo"<br>";


$member=[
    'id'=>1,
    'name'=>'Carolina',
    'country'=>'Republica Moldova',
];

echo'Numele meu este:' .$member['name'];
echo"<br>";
echo'Provin din:' .$member['country'];
echo"<br>";


$list=['Paine','Apa','Salam','Masline'];
echo $list[0];
echo"<br>";
echo"<pre>";
var_dump($list);
echo"<br>";



$lista_masini=array(
    array('Model'=>'Audi','SUZUKI'),
    array('Model'=>'Mercedes','skoda'),
    array('Model'=>'Audi','Nissan','sub_array'=>array('roti'=>4),
    'sub_array2'=>array('usi'=>5))
);

echo $lista_masini[0]['Model'];
echo"<br>";
echo $lista_masini[2]
    ['sub_array']['roti'];
echo "<br>";


$famili=array('Mama','Frate');
echo $famili[0];
echo $famili[0]="Nepot";
echo $famili[2]="Nepot 2";
echo"<pre>";
var_dump ($famili);
echo"<br>";



$celsius=32;
$fahrenheit=($celsius*1.8)+32;
echo $fahrenheit;
echo"<br>";



$numar=125;
$total=500;
$procent = ($numar / $total) * 100;
echo $procent;
echo"<br>";


$rezultat=2023+223+36*3;
echo $rezultat;

?>