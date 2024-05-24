<?php
function addStudent($id, $name){
$xml = simplexml_load_file('students.xml');
$student = $xml->addChild('student');
$student->addAttribute('id', $id);
$student->addChild('name', $name);
$student->addChild('grades');
$student->addChild('overallGrade', 0);
$xml->asXML('students.xml');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_student'])) {
$id = $_POST['id'];
$name = $_POST['name']; 
addStudent($id, $name);
}
// Function to add a new student 
function addStudent($id, $name){
$xml = simplexml_load_file('students.xml');
$student = $xml->addChild('student');
$student->addAttribute('id', $id);
$student->addChild('name', $name);
$student->addChild('grades');
$student->addChild('overallGrade', 0);
$xml->asXML('students.xml');
}
// Function to enter a grade
function enterGrade($id, $type, $name, $score){
$xml = simplexml_load_file('students.xml'); 
foreach ($xml->student as $student) {
if ($student['id'] == $id) {
$grade = $student->grades->addChild($type);
$grade->addChild('name', $name);
$grade->addChild('score', $score); 
break;
}
}
$xml->asXML('students.xml');
}
// Function to calculate the overall grade 
function calculateOverallGrade($id) {
$xml = simplexml_load_file('students.xml'); 
foreach ($xml->student as $student) {
if ($student['id'] == $id) {
$total = 0;
$count = 0;
foreach ($student->grades->children() as $grade){
$total += (int)$grade->score;
$count++;
}
$overallGrade = $count ? $total / $count : 0;
$student->overallGrade = $overallGrade; 
break;
}
}
$xml->asXML('students.xml');
}
// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if(isset($_POST['add_student'])){
$id = $_POST['id'];
$name = $_POST['name']; 
addStudent($id, $name);
} elseif (isset($_POST['enter_grade'])) {
$id = $_POST['id'];
$type = $_POST['type'];
$name = $_POST['name'];
$score = $_POST['score'];
enterGrade($id, $type, $name, $score);
} elseif (isset($_POST['calculate_grade'])) {
$id = $_POST['id'];
calculateOverallGrade($id);
}
}
?>