<?php
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 1 Sep 2008 07:30:00 GMT');
$a[] = "Audi"; 
$a[] = "BMW";
$a[] = "Buick";
$a[] = "Chevrolet";
$a[] = "Citroen";
$a[] = "Cherry";
$a[] = "Cherokee";
$q = $_GET['q'];
if (strlen($q) > 0) {$hint = '';
                     for ($i=0; $i < count($a); $i++) {
                        if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q)))) 
                        {if ($hint== '') {$hint = $a[$i];}
                                                                                                                     else {$hint = $hint.", ".$a[$i];} } } }
if ($hint == '') {$response = "no suggestion";}
else {$response = $hint;}
echo $response;
?>