<?php
$n = 0;
if (isset ( $_POST ['n'] )) {
    $n = $_POST ['n'];
}

function tongccs($n) {
    $tong = 0;
    do {
        $tong = $tong + ($n % 10);
        $n = floor ( $n / 10 );
    } while ( $n > 0 );
    return $tong;
}
function checkuc($n){
    for($i = 1; $i <= $n; $i ++) {
        if($n%$i==0)
            echo (" " . $i);
    }
}
function checksonguyen($n){
    $uc = 1;
    if ($n <2) {
        return true;
    } 
    else {
        for($i = 2; $i < $n; $i ++) {
            if($n%$i==0)
                return false;
        }
    }
    return true;
}
function checkucsonguyen($n){
    for($i = 2; $i <= $n; $i ++) {
        if($n%$i==0){
            if(checksonguyen($i)==true)
                echo (" " . $i);
        }
            
    }
}
?>
<form action="#" method="post">
 <table>
  <tr>
   <td>Nhap so n:</td>
   <td><input type="text" name="n" value="<?=$n?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="Nhap"></td>
  </tr>
  <tr>
   <td>Tong cac chu so cua n:</td>
   <td><input type="text" name="tccs" value="<?=tongccs ( $n )?>" /></td>
  </tr>
  <tr>
   <td>Cac uoc so cua n:</td>
   <td>
    <input type="text" name="uc" value="<?=checkuc ( $n )?>" /></td>
  </tr>
  <tr>
   <td>Cac uoc so la so nguyen to cua n:</td>
   <td><input type="text" name="uclsnt" value="<?=checkucsonguyen ( $n )?>" /></td>
  </tr>
 </table>
</form>
<br>