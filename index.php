
<?php

echo "<h3 style='border-bottom:5px solid; border-color:green; width:200px;'>Types of array listing</h3>";
/* index array examples */
echo "<h5>Index Array</h5>";
$indexArray = array('Virsing', 'SK Patel', 'Romil Patel');
echo "<pre>";
print_r($indexArray);
echo "</pre>";

/* associative array */
echo "<h5>Associative Array</h5>";
$associativeArray = array('a' => 'Abc', 'b' => 'bcd', 'c' => 'cde');
echo "<pre>";
print_r($associativeArray);
echo "</pre>";

/* multidimosnal array */
echo "<h5>Multidimensional Array</h5>";
$multidimensional = array (
    array("students Eng:Marks out of 25",22,18),
    array("students Math:Marks out of 25",15,13),
    array("students Science:Marks out of 25",05,02),
    array("students Social Science:Marks out of 25",17,15)
  );
echo "<pre>";
print_r($multidimensional);
echo "</pre>";


echo "<h3 style='border-bottom:5px solid; border-color:green; width:200px;'>PHP String Functions</h3>";
/*
String Function 
- explode()
- implode()
- strtolower()
- strtoupper()
- ucfirst()
- ucword()
- strlen()
- strrev()
- strpos()
- lcfirst()
*/

/* explode */
echo "<h5>String Function:- explode()</5>";
echo "<p><strong>explode() => </strong> function is split string to array.</p>";
$explodeArr = 'Hello this Virsing, I"M PHP developer';
echo "<pre>";
print_r(explode(' ', $explodeArr));
echo "</pre>";

/* implode */
echo "<h5>String Function:- implode()</h5>";
echo "<p><strong>implode() => </strong> Function is split array to string.</p>";
$implodeArray = array(' Hello ', ' this ', ' Virsing ', ' I"M ', ' PHP ', ' Developer');
echo "<pre>";
print_r(implode($implodeArray));
echo "</pre>";

/* strtolower */
echo "<h5>strtolower()</h5>";
$strtolowerString  = "Hello this one the must important thing which you have done";
echo strtolower($strtolowerString);

/* strtoupper */
echo "<h5>strtoupper()</h5>";
$strtolowerString  = "Hello this one the must important thing which you have done";
echo strtoupper($strtolowerString);

echo "<h3 style='border-bottom:5px solid; border-color:green; width:200px;'>PHP Array Functions</h3>";
/*
Array Function 
==============
- array_combine()
- array_merge()
- array_merge_recursive()
- array_pop()
- array_shift()
- array_pad()
- array_push()
- array_product()
- array_map()
- count()
- compact()
- extract()
- in_array()
*/

/* array_combine */
echo "<h5>Array Function:- array_combine()</h5>";
$a1 = array('a', 'b', 'c', 'd');
$a2 = array('1', '2', '3', '4');
$array_combine = array_combine($a1, $a2);
echo "<pre>";
print_r($array_combine);
echo "</pre>";

/* array_map() */
echo "<h5>Array Function:- array_map()</h5>";
$arrayMaps = array(10, 20, 30, 40, 50);
function mapTest($arrayMaps){
 return $arrayMaps*5;
}

/* array_map() */
$array_map = array_map('mapTest', $arrayMaps);
echo "<pre>";
print_r($array_map);
echo "</pre>";

/* array_pop() */
echo "<h5>Array Function:- array_pop()</h5>";
$arrayPop = array('AA', 'BB', "CC", 'Virsing');
$checkPop = array_pop($arrayPop);
echo "<pre>";
print_r($arrayPop);
echo "</pre>";

/* array_shift() */
echo "<h5>Array Function:- array_shift()</h5>";
$arrayshift = array('AA', 'BB', "CC", 'Virsing');
$checkshift = array_shift($arrayshift);
echo "<pre>";
print_r($arrayshift);
echo "</pre>";
echo "<br><br>";

?> 