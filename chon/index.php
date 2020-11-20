<?php
$mang=array(1, 9, 4.5, 6.6, 5.7, -4.5);
$sophantu = count($mang);
    // Lặp để sắp xếp
    for ($i = 0; $i < $sophantu - 1; $i++)
    {
        // Tìm vị trí phần tử lớn nhất
        $max = $i;
        for ($j = $i + 1; $j < $sophantu; $j++){
            if ($mang[$j] > $mang[$max]){
                $max = $j;
            }
        }
        // Sau khi có vị trí lớn nhất thì hoán vị
        // với vị trí thứ $i
        $temp = $mang[$i];
        $mang[$i] = $mang[$max];
        $mang[$max] = $temp;
    }
for($i=0;$i<$sophantu;$i++){
    echo $mang[$i].' ';
}