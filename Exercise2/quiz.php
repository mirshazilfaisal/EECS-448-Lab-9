<?php
$ans1 = $_POST["q1"];
$ans2 = $_POST['q2'];
$ans3 = $_POST['q3'];
$ans4 = $_POST['q4'];
$ans5 = $_POST['q5'];

$correct = 0;

if ($ans1 == "1865") $correct++; 
if ($ans2 == "Jayhawk")  $correct++; 
if ($ans3 == "Hail to Old KU")  $correct++; 
if ($ans4 == "Phog") $correct++; 
if ($ans5 == "1920 Antwerp") $correct++;

echo "Correct Answers:  " . $correct . "/5 Answers<br>";
echo "Percentage: " . (($correct / 5)*100) . "%<br><br>";

echo "Solution:<br>";
echo "Question 1: What year was KU founded?<br>";
    echo "Your answer: " . $ans1 . "<br>";
    echo "Correct answer: 1865<br><br>";

    echo "Question 2: What is the mascot of KU?<br>";
    echo "Your answer: " . $ans2 . "<br>";
    echo "Correct answer: Jayhawk<br><br>";

    echo "Question 3: What is the last line to KU's Alma Mater?<br>";
    echo "Your answer: " . $ans3 . "<br>";
    echo "Correct answer: Hail to Old KU<br><br>";

    echo "Question 4:Beware of the...?<br>";
    echo "Your answer: " . $ans4 . "<br>";
    echo "Correct answer: Phog<br><br>";

    echo "Question 5: At what Olympics did the crowd chant, 'Rock, Chalk, Jayhawk, KU'?<br>";
    echo "Your answer: " . $ans5 . "<br>";
    echo "Correct answer: 1920 Antwerp<br><br>";
?>