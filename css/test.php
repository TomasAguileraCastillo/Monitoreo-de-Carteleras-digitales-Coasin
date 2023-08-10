 

<div style=" width:130%; position:relative; top:2%; left:3%; font-size:14px;">
<?php	
$data =  "www.google.cl";
exec("ping {$data}", $output, $return);
foreach ($output as $x){
         print_r($x . "<br>");
       }
?>
</div>
 