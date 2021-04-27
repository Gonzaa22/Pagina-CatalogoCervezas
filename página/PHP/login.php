<?PHP
	include("config.php");
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	
	$query = $DBcon -> prepare("select * from usuarios where nombre = ? and contrasenia = ?");
	$query -> bindParam (1,$_POST["user"]);
	$query -> bindParam (2,$pass);
	$query -> execute();
	
	$encontrado = $query -> rowCount();
	if($encontrado == 1){
		session_start();
		$_SESSION["user"]= $_POST["user"];
		$_SESSION["pass"]= $pass;
		$_SESSION["logueado"] = true;
		header("Status: 301 Moved Permanently");
		header("Location: ../index.php");
	}else{
		echo "Nombre de Usuario o Contraseña Incorrectos.";
		echo "<br><a href='../HTML/login.html'> Volver a Intentarlo </a>";
	}
?>