<?php
session_start();
require "../conn.php";
require "../counter.php";
if(!isset($_SESSION['vlz'])){
	header('location:index.php');
	exit;
}

$current_user = $_SESSION['vlz'];

$sql_current_user = mysqli_real_escape_string($conn, $current_user);
$sql = "select * from `users` where `username` = '$sql_current_user' limit 1";
$result = $conn->query($sql);
$user_row = $result->fetch_assoc();

if(isset($_POST["type"])) {
	$error = "not supported yet!";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Hello</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/chat/style.css" />
</head>
<body class="bg-dark text-white">
	<div class="container-acc" style="margin-top:30px">
		<br><br><br><br><br>
		<h2 align="center" id="chat-name">Salut <?php echo $current_user; ?> !</h2>
		<h4 align="center" id="chat-name"> Tu veux faire quoi aujourd'hui ? :D </h4>
		<div class="chat-acc bg-light margin-top">
			<a href="/chat/" class="go">Vous entrainez en Python</a>
		</div>
		<div class="chat-acc bg-light">
			<a href="/chat/soon.php" class="go">Vous entrainez en Java</a>
		</div>
		<div class="chat-acc bg-light">
			<a href="/chat/soon.php" class="go">Vous entrainez en C++</a>
		</div>
		<!--<div class="chat-con bg-light text-primary">
			<?php
			if(isset($error)) {
				echo "<span style='color: red;'>Erreur : ".$error."</span>";
			}
			?>
			<form method="post" autocomplete="off">
				<div class="input-group">
					<input type="text" name="username" placeholder="username" class="form-control" required="required" />
					<div class="input-group-append">
						<input type="hidden" name="type" value="username" />
						<input type="submit" value="chat" class="btn btn-primary" />
					</div>
				</div>
			</form>
		</div>-->
		<div class="chat-acc bg-light marg-deco">
			<a href="logout.php" class="deco">Déconnexion</a>
		</div>
		<div class="chat-acc bg-light">
			<a href="delete.php" class="deleteacc">Supprimer le compte</a>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
