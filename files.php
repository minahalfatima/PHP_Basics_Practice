<?php
$file="example.txt";
// if($handle=fopen($file,'w')){
// fwrite($handle,"Mann the life sucks");
// fclose($handle);
// }
// else{
//     echo "Unable to write";
// }
// if($handle=fopen($file,'r')){
//     echo fread($handle,filesize($file));
//     fclose($handle);
//     }
//     else{
//         echo "Unable to read";
//     }
unlink($file);//deleting files
?>