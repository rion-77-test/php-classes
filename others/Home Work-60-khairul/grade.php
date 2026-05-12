<?php $score = (int) readline("Enter your score (0-100): ");
if ($score >= 90 && $score <= 100) {
    echo "Grade: A+";
} elseif ($score >= 80 && $score <= 89) {
    echo "Grade: B";
} elseif ($score >= 70 && $score <= 79) {
    echo "Grade: C";
} elseif ($score >= 60 && $score <= 69) {
    echo "Grade: D";
} elseif ($score >= 0 && $score < 60) {
    echo "Grade: F";
} else {
    echo "Invalid score! Enter 0-100.";
}
