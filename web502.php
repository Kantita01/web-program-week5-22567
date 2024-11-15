<?php
$score = 26;
if($score>=80 && $score<=100) {
    echo "GRADE A";
} else if($score>=70 && $score<=79) {
    echo "GRADE B";
} else if($score>60 && $score<=69) {
    echo "GRADE C";
} else if($score>=50 && $score<=59) {
    echo "GRADE D";
} else if($score>=0 && $score<=49) {
    echo "GRADE F";
} else {
    echo "ERROR SCORE";
}