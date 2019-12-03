<header>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="API/api.php">Api</a>
            <?php
            if(!isset($_SESSION)){
                session_start(); 
            }
            if(isset($_SESSION["logueado"])&&$_SESSION["logueado"] === true){ 
                echo"<a href='panelDeControl.php'>Panel de Control</a>";
                echo"<a href='PHP/cerrarsesion.php'><span>Cerrar Sesion</span></a>";
            }else{
                echo"<a href='login.html'>" . "Iniciar Sesion" . "</a>"; 
            }
            ?>
                
        </nav>
    </header>