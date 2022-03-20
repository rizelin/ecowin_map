<?php
$inputData = 3;
if(!preg_match('/^([1-3]{1})$/', $inputData)){
    echo '不正';
}else{
    echo '正しい';
}

?>
