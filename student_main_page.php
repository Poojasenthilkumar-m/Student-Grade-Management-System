<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Grade Management System</title>
<style>
body {
font-family: Arial, sans-serif; 
background-color: #f5f5f5; 
margin: 0;
padding: 0; 
display: flex;
justify-content: center; 
align-items: center;
height: 100vh;
}
h1 {
text-align: center; 
color: #333;
}
.container {
background-color: #fff; 
padding: 20px;
border-radius: 8px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
width: 300px;
text-align: center;
}
form {
margin-bottom: 20px;
}
label {
display: block;
margin: 10px 0 5px; 
font-weight: bold;
}
input[type="text"], 
input[type="number"]{
width: calc(100% - 22px); 
padding: 10px;
margin-bottom: 10px; 
border: 1px solid #ccc; 
border-radius: 4px;
}
.container {
background-color: #fff; 
padding: 20px;
border-radius: 8px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
width: 300px;
text-align: center;
}
input[type="submit"] {
background-color: #4CAF50; 
color: white;
border: none; 
padding: 10px 20px; 
text-align: center;
text-decoration: none; 
display: inline-block; 
font-size: 16px;
margin: 4px 2px; 
cursor: pointer;
border-radius: 4px;
transition: background-color 0.3s ease;
}
input[type="submit"]:hover { 
background-color: #45a049;
}
.form-section {
margin-bottom: 20px;
}
</style>
</head>
<body>
<h1>Student Grade Management System</h1>
<h2>Add New Student</h2>
<form name="form" method="post" action="php_file.php">
<label for="id">Student ID:</label>
<input type="text"id="id" name="id" required>
<label for="name">Student Name:</label>
<input type="text" id="name" name="name" required>
<input type="submit" name="add_student" value="Add Student">
</form>
<h2>Enter Grade</h2>
<form name="form" method="post" action="php_file.php">
<label for="id">Student ID:</label>
<input type="text"id="id" name="id" required>
<label for="type">Type (assignment/exam):</label>
<inputtype="text"id="type" name="type" required>
<label for="name">Name:</label>
<input type="text" id="name" name="name" required>
<label for="score">Score:</label>
<input type="number" id="score" name="score" required>
<input type="submit" name="enter_grade" value="Enter Grade">
</form>
<h2>Calculate Overall Grade</h2>
<form name="form" method="post" action="php_file.php">
<label for="id">Student ID:</label>
<input type="text"id="id" name="id" required>
<input type="submit" name="calculate_grade" value="Calculate Overall Grade">
</form>
<form name="form" method="post" action="php_file.php">
<label for="id">StudentID:</label>
<input type="text"id="id" name="id" required>
<input type="submit" name="calculate_grade" value="Calculate Overall Grade">
</form>
<form name="form" method="post" action="php_file.php">
<label for="id">StudentID:</label>
<input type="text"id="id" name="id" required>
<label for="type">Type (assignment/exam):</label>
<inputtype="text"id="type" name="type" required>
<label for="name">Name:</label>
<input type="text" id="name" name="name" required>
<label for="score">Score:</label>
<input type="number" id="score" name="score" required>
<input type="submit" name="enter_grade" value="Enter Grade">
</form>
<form name="form" method="post" action="php_file.php">
<label for="id">StudentID:</label>
<input type="text"id="id" name="id" required>
<label for="type">Type (assignment/exam):</label>
<inputtype="text"id="type" name="type" required>
<label for="name">Name:</label>
<input type="text" id="name" name="name" required>
<input type="number" id="score" name="score" required>
<input type="submit" name="enter_grade" value="Enter Grade">
</form>
</body>
</html>
