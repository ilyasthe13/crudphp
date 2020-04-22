<?php 

include("functions.php");

$query = mysqli_query($conn, "SELECT * FROM daftar");

// $result []=[
// 	"status" = 0;
// ]
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);


// // input

// $input = $_GET["input"];

// $insert = mysqli_query($conn, "INSERT INTO daftar SET input='$input'");
?>

<!DOCTYPE html>
<html>
<head>
	<title>list</title>
</head>
<body>
	<h1>what you need`s/do</h1>
	<hr>

	<form action="input.php" method="post">
		<input type="text" name="input">
		<button type="dubmit" name="submit">input</button>
	</form>

	<form action="search.php" method="get">
		<input type="text" name="search">
		<button type="submit" name="bsearch">search</button>
		
	</form>

	<h2>daftar list</h2>

	<ul>
<?php foreach ($result as $key => $value): ?>
    <li>
        <input 
            type="checkbox" 
            name="input" 
            onclick="window.location.href='hal1.php?stat=<?php echo ($value['stat'] == 1) ? 0 : 1;?>&key=<?php echo $key; ?>'" 
            <?php echo ($value["stat"]==1) ? "checked" : "";?> 
        />
        <b><?php echo $value["input"]; ?></b>
        <a href="hapus.php">hapus</a>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>


