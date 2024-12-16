```php
<?php
function increment_array_values_copy(array $arr) {
  $arr_copy = [];
  foreach ($arr as $key => $value) {
    if (is_array($value)) {
      $arr_copy[$key] = increment_array_values_copy($value);
    } else {
      $arr_copy[$key] = $value + 1;
    }
  }
  return $arr_copy;
}

$arr3 = [1,2,3];
$arr4 = $arr3;
$arr5 = increment_array_values_copy($arr4);
print_r($arr3); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )
print_r($arr5); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$arr6 = [1,2,[3,4]];
$arr7 = increment_array_values_copy($arr6);
print_r($arr6); // Output: Array ( [0] => 1 [1] => 2 [2] => Array ( [0] => 3 [1] => 4 ) )
print_r($arr7); // Output: Array ( [0] => 2 [1] => 3 [2] => Array ( [0] => 4 [1] => 5 ) )

?>
```