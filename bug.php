```php
<?php
function increment_array_values(array &$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$arr = [1, 2, 3];
increment_array_values($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$arr2 = [1, 2, [3,4]];
increment_array_values($arr2);
print_r($arr2); // Output: Array ( [0] => 2 [1] => 3 [2] => Array ( [0] => 3 [1] => 4 ) )

//Unexpected behavior
$arr3 = [1,2,3];
$arr4 = $arr3;
increment_array_values($arr4);
print_r($arr3); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

//This is unexpected behavior because we only modified $arr4, not $arr3.
//This is because in PHP, when you pass an array by reference (&), it creates an alias to the original array.
//So any changes made to the alias also affect the original array.
//This can be unexpected if you are not aware of this behavior.
```