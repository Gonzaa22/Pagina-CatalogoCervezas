<header>
    <div class="contenido">

        <h2 class="titulo"> Cervezas Villa del Parque</h2>
        <nav>
            <?php
            $archivo_actual = basename($_SERVER['SCRIPT_FILENAME']);
            switch($archivo_actual){
                case "index.php":
                    echo"<a href='index.php'>Inicio</a>";
                    echo"<a href='API/api.php'>Api</a>";
                    break;
                case 'panelDeControl.php':
                    echo"<a href='../index.php'>Inicio</a>";
                    echo"<a href='../API/api.php'>Api</a>";
                    break;    
            }
            
            if(!isset($_SESSION)){
                session_start();
            }
            if(isset($_SESSION["logueado"])&&$_SESSION["logueado"] === true){
                switch($archivo_actual){
                    case 'index.php':
                        echo"<a href='HTML/panelDeControl.php'>Panel de Control</a>";
                        echo"<a href='PHP/cerrarsesion.php'><span>Cerrar Sesion</span></a>";
                        break;
                    case 'panelDeControl.php':
                        echo"<a href='panelDeControl.php'>Panel de Control</a>";
                        echo"<a href='../PHP/cerrarsesion.php'><span>Cerrar Sesion</span></a>";
                        break;  
                }
                
            }else{
                echo"<a href='HTML/login.html'>" . "Iniciar Sesion" . "</a>";
            }
            ?>
                
        </nav>

    </div>
        
</header>