<?php

$nums = [1,2,3,4,5];

//1.查数组的数量
$count = count($nums);
//2. 新数组 [sum(arr[1]), sum(arr[2]), sum(arr[3])]。 所以思路是根据数量遍历,然和求和
for ($i=0;$i<$count;$i++) {
    $result[$i] = get_sum($nums, $i);
//    print_r($result[$i]);die;
}

return $result;



//求数组的和
function get_sum($arr, $i) {
    $new_arr = array_splice($arr, 0 ,$i+1);
//    print_r($new_arr);die;
    return array_sum($new_arr);

}


?>