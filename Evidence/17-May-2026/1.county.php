<?php
$country = [
    'Japan' => 'Tokyo',
    'America' => 'Washington',
    'Pakistan' => 'Islamabaad',
    'India' => 'Delhi',
    'Bangladesh' => 'Dhaka',
];

echo "-----------------Before Sorting---------";
echo "<pre>";
print_r($country);
echo "</pre>";

echo "-----------------After Sorting---------";
ksort($country);
echo "<pre>";
print_r($country);
echo "</pre>";