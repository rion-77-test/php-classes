<?php $marks = (int) readline("Enter your marks (in %): ");
if ($marks >= 90) {
    echo "Grade: A+";
} elseif ($marks >= 60) {
    echo "Grade: A";
} elseif ($marks >= 50) {
    echo "Grade: B";
} else {
    echo "Grade: Fail";
}
