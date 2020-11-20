<?php
$mang = array(2, 3, 2, 5, 6, 1, -2, 3, 14, 12); // mảng theo đề bài
// Sắp xếp mảng
for ($i = 0; $i < count($mang); $i++)
{
    for ($j = $i + 1; $j <count($mang); $j++) // lặp các phần tử phía sau
    {
        if ($mang[$i] > $mang[$j]) // nếu phần tử $i bé hơn phần tử phía sau
        {
            // hoán vị
            $tmp = $mang[$j];
            $mang[$j] = $mang[$i];
            $mang[$i] = $tmp;
        }
    }
}

// Hiển thị các phần tử của mảng đã sắp xếp
for ($i = 0; $i < count($mang); $i++){
    echo $mang[$i] . ' ';
}