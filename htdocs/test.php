<?php
function checkname($input_name){
  $checkStr1 = 'あいうえおかきくけこ';
  $checkStr2 = '亜井宇江尾化木区毛子';
  if(preg_match('/[^ァ-ヶー]/u',$checkStr1) or preg_match('/[^一-龠]/u',$checkStr2)) {
      echo 'ok' ;
}
}
checkname('1');
?>