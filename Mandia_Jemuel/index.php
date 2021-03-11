<!DOCTYPE html>
<html>
<body>

<h1>1. LOOP</h1>
<h3>A. Create a PHP function using WHILE loop that will sum all even numbers from 0-10.</h3>
<?php
$sum = 0;
$num = 0;
while($num <=10){
	//checks if the remainder of n/2 is 0
	// 0 means even
	if($num % 2 == 0)
		$sum += $num;
	$num++;
}
echo "Sum of all even from 0-10: $sum";
?>

<h3>B. Create a PHP function using DO WHILE loop that will display all odd numbers from 0-10.</h3>
<?php
$allOdd = "";
$num2 = 0;
Do{
	//checks if the remainder of n/2 is 0
	// 1 means odd
	if($num2 % 2 != 0)
		$allOdd = $allOdd ."$num2 "; //concatenates all odd number into a variable to echo
	$num2++;
}while($num2 <=10);
echo "All odd numbers from 0-10: {$allOdd}";
?>

<h3>C. Create a PHP function using FOR loop that will display 10 numbers in fibonacci sequence. </h3>
<?php
$fibonacci = "";
$x=0;
$y=1;
$z = 0;
for($len=1;$len<=10;$len++){
	$fibonacci .= "$x ";
	//contenates the sum of first and second number to a variable to be displayed
	//then passes the 2nd number to first variable and the sum to the second to create
	//the fibonacci sequence
	$z = $x + $y;
	$x = $y;
	$y = $z;
}
echo "10 fibonacci Sequence: {$fibonacci}";
?>

<h1>2. Array</h1>
<h3>A. Display the value that have the most number occurrence; in case of tie arrange it in alphabetical order.</h3>
<?php
$programmers = array("Marvin", "Marco", "Marvin","Marco","Marco","Marvin","Christian");
sort($programmers);
$counts = array_count_values($programmers); //get the count of occurence of each value in array

function sortByValue($a,$b)
{
if ($a==$b) return 1;
return ($a>$b)?-1:1;
}
uasort($counts,"sortByValue");//sorted by values
foreach($counts as $keys => $value){
	echo "$keys ";
}
?>

<h3>B. Sort the array in ascending order; if the value is an odd number, round it up to nearest tens.</h3>
<?php	
$numbers = array(9863, 7127, 2020, 80, 131, 55, 100);
$sortedNumber = "";
sort($numbers);
foreach($numbers as $nums){
	if($nums % 2 == 0) //if number is even, concatenate it to the variable that will be displayed
		$sortedNumber = $sortedNumber ."$nums ";
	else{ // else round it to the nearest tens then add to the variable that will be displayed
		$nums = round($nums/10)*10;
		$sortedNumber = $sortedNumber ."$nums ";
	}
}
echo $sortedNumber;
?>	

<h3>C. Display the item that is not repetitive.</h3>
<?php
$colors = array("red", "blue", "black", "red", "blue", "blue", "red", "gold");
$counts = array_count_values($colors); //counts every repetition using array_count_values
$unique = array_unique($colors); // get all the unique colors

foreach($unique as $dup)
	if($counts[$dup] == 1) //display all records with only 1 occurence
		echo "$dup ";
?>	


<h1>3. SQL</h1>
<h3>A. Get all data of highest paid employee (without using LIMIT).</h3>
	"SELECT * FROM Employees emp  <br>
	 JOIN Departments dep ON dep.id = emp.department_id <br>
	 JOIN Salary sal ON emp.salary_id = sal.id <br>
	 WHERE emp.salary_id = (SELECT id from salary where salary =(SELECT MAX(salary) FROM salary))"
		
<h3>B. Get all employees that are hired from 2017-2018.</h3>
	"SELECT * FROM Employees emp <br>
	 JOIN Departments dep ON dep.id = emp.department_id <br>
	 JOIN Salary sal ON emp.salary_id = sal.id <br>
	 WHERE DATEPART(year,emp.date_hired) IN('2017','2018')"

<h3>C. Get all employees that belongs to IT department AND hired 2018 onwards.</h3>
	"SELECT * FROM Employees emp  <br>
	 JOIN Departments dep ON dep.id = emp.department_id <br>
	 JOIN Salary sal ON emp.salary_id = sal.id <br>
	 WHERE department = 'IT' AND( DATEPART(year,emp.date_hired) >= '2018')"
	 
<h1>4. JavaScript<h1>
<h3>A. Fix the sentence. (Capitalize the first word only and add spaces per word).
Note: Assume that the string is a variable.</h3>
TheQuickBrownFoxJumpsOverTheLazyDog.
<?php 
    echo "<div id='sentence'></div>"; 
?> 
<script type="text/JavaScript"> 
var s = "TheQuickBrownFoxJumpsOverTheLazyDog";
var x = "";
var newIndex = 0;
for (var i = 0; i <= s.length; i++) {
	//check if the char at current index is upper case
  if((s.charAt(i) == s.charAt(i).toUpperCase() && i>0)||i==s.length){
	x += s.slice(newIndex, i) +" ";  //if the char is upercase then it will be considered as a word
	newIndex = i; // used newIndex as the new starting point of the string that will be sliced
  }
}		
document.getElementById("sentence").innerHTML = x; 
</script>


<h3>B. Create a function that will parse and display the JSON values on a Contact FORM.
(text field, radio button, checkbox)
Note: Get only the first record order by lastName ASCENDING.</h3>
<?php 
	echo "<label for='ID'>ID</label><br>
    <input type='text' id='idNo'/><br>
	<label for='fName'>First Name</label><br>
    <input type='text' id='fName'/><br>
	<label for='lName'>Last Name</label><br>
    <input type='text' id='lName'/><br>
	<label for='bDay'>Birthday</label><br>
    <input type='text' id='bDay'/><br>
	<input type='radio' name='gender' id='male' value='male'>
	<label for='male'>Male</label><br>
	<input type='radio' name='gender' id='female' value='female'
	<label for='female'>Female</label><br>
	<label>Known Languages</label><br>
	<input type='checkbox' id='eng'/>
	<label for='eng'>English</label><br>
	<input type='checkbox' id='jap'/>
	<label for='jap'>Japanese</label><br>
	<input type='checkbox' id='chi'/>
	<label for='chi'>Chinese</label><br>";
?> 
<script type="text/JavaScript">	
var emp = {
	"employees":
	[
		{
		"id":"1",
		"firstName":"John",
		"lastName":"Doe",
		"birthday":"1990-05-07",
		"gender":
			{
			"male":true,
			"female":false
			},
		"knownLanguage":[
			"English",
			"Japanese",
			"Chinese"]
		},
		{
		"id":"2",
		"firstName":"Lina",
		"lastName":"Art",
		"birthday":"1994-08-05",
		"gender":{
			"male":false,
			"female":true
			},
		"knownLanguage":[
			"English",
			"Japanese"]
		}
	]

}
//sort the JSON by lastName Descending so that 
// the data that will be displayed will be ascending
emp.employees.sort((a, b) => a["lastName"] > b["lastName"] ? -1 : 1);

function display(){
	for (i in emp.employees) {
		document.getElementById("idNo").value = emp.employees[i].id;
		document.getElementById("fName").value = emp.employees[i].firstName;
		document.getElementById("lName").value = emp.employees[i].lastName;
		document.getElementById("bDay").value = emp.employees[i].birthday;
		for (j in emp.employees[i].gender){
			document.getElementById("male").checked = emp.employees[i].gender.male;
			document.getElementById("female").checked = emp.employees[i].gender.female;
		}
		document.getElementById("eng").checked = false;
		document.getElementById("jap").checked = false;
		document.getElementById("chi").checked = false;
		for (j in emp.employees[i].knownLanguage){
			if(emp.employees[i].knownLanguage[j]=="English")
				document.getElementById("eng").checked = true;
			else if(emp.employees[i].knownLanguage[j]=="Japanese")
				document.getElementById("jap").checked = true;
			else if(emp.employees[i].knownLanguage[j]=="Chinese")
				document.getElementById("chi").checked = true;
			else{
				document.getElementById("eng").checked = false;
				document.getElementById("jap").checked = false;
				document.getElementById("chi").checked = false;
			}
		}
	}
}
display();
</script>
	
</body>
</html>