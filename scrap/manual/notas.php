<?php 
include 'cft2.php'
$html = str_get_html($response);
foreach($html->find('table') as $element)
       echo $element . '<br>';
 
print_r($ret);



 ?>