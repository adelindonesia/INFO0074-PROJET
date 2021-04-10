<?php
	include 'header.php'
?>

<!--https://www.youtube.com/watch?v=lwgG_uIJYQM&ab_channel=DaniKrossing-->

<div class="produit-container">
<?php
	$server = "localhost";
	$username = "root";
	$passeword = "";
	$db = "groupe_72.sql";

	$con = mysqli_connect($server,$username,$passeword,$db);

	if(isset($_POST['submit-search'])){
		$search = mysqli_real_escape_string($con, $_POST['search']);
		$sql = "SELECT * FROM produit WHERE produit_name LIKE '%$search%' or produit_type LIKE '%search%' or produit_country LIKE '%$search%' or produit_design LIKE '%$search%' ";

		$result = mysqli_query($con, $sql);
		$queryResult = mysqli_num_rows($result);

		echo "<h1>There are ". $queryResult." results!</h1>";
		echo "<br>","<br>", "<br>";

		if ($queryResult > 0 ) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<a href='produit.php?title=".$row['produit_name']."'>
						<div class='produit_box'>
							<h2>".$row['produit_name']."</h2>
							<h3>".$row['produit_type']."</h3>
							<p>Degré : ".$row['produit_alcohol']."</p>
							<p>Prix : ".$row['produit_price']." €</p>
							<p>Origine : ".$row['produit_country']."</p>
							<p>Description : </p>
							<p>".$row['produit_design']."</p>
						</div>
					</a>";
			}
		} else {
			echo"There are no result matching your research!";
		}
	}

?>
</div>

<?php
	include 'footer.php'
?>