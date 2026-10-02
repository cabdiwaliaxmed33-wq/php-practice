<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loops and Arrays Practice</title>
</head>
<body>
	<h1>Loops and Arrays: Beginner Practice</h1>
	<p>Read each example, try the practice task, and write a short explanation in your own words.</p>

	<section>
	<h2>1. Do-while loop</h2>
	<p>A do-while loop runs its code at least once, then checks the condition.</p>
	<?php
	$number = 1;
	do {
		echo $number . '<br>';
		$number++;
	} while ($number <= 5);
	?>
	<p><strong>Practice:</strong> Change the example so it counts from 1 to 10.</p>
	<p><strong>My explanation:</strong> __________________________________________</p>
	</section>

	<section>
	<h2>2. For loop</h2>
	<p>A for loop is useful when you know how many times to repeat the code.</p>
	<?php
	for ($number = 1; $number <= 5; $number++) {
		echo 'Number: ' . $number . '<br>';
	}
	?>
	<p><strong>Practice:</strong> Display the numbers 2, 4, 6, 8, and 10.</p>
	<p><strong>My explanation:</strong> __________________________________________</p>
	</section>

	<section>
	<h2>3. While loop</h2>
	<p>A while loop repeats as long as its condition is true.</p>
	<?php
	$number = 5;
	while ($number >= 1) {
		echo $number . '<br>';
		$number--;
	}
	echo 'Finished!<br>';
	?>
	<p><strong>Practice:</strong> Make it count from 10 down to 1, then display "Start!".</p>
	<p><strong>My explanation:</strong> __________________________________________</p>
	</section>

	<section>
	<h2>4. Numeric array</h2>
	<p>A numeric array stores numbers. A foreach loop can display each value.</p>
	<?php
	$numbers = [4, 7, 2, 9];
	foreach ($numbers as $number) {
		echo $number . '<br>';
	}
	?>
	<p><strong>Practice:</strong> Add another number to the array, then find the total.</p>
	<p><strong>My explanation:</strong> __________________________________________</p>
	</section>

	<section>
	<h2>5. String array</h2>
	<p>A string array stores text, such as a list of names.</p>
	<?php
	$names = ['Anna', 'Ben', 'Chris'];
	foreach ($names as $name) {
		echo 'Hello, ' . $name . '!<br>';
	}
	?>
	<p><strong>Practice:</strong> Add your name to the list, then display all the names.</p>
	<p><strong>My explanation:</strong> __________________________________________</p>
	</section>

	<section>
	<h2>6. Associative array</h2>
	<p>An associative array stores values using named keys, such as a student's name and age.</p>
	<?php
	$student = [
		'Name' => 'Sam',
		'Age' => 18,
		'City' => 'London'
	];
	foreach ($student as $key => $value) {
		echo $key . ': ' . $value . '<br>';
	}
	?>
	<p><strong>Practice:</strong> Create another student's details with a name, age, and favorite subject.</p>
	<p><strong>My explanation:</strong> __________________________________________</p>
	</section>
</body>
</html>
