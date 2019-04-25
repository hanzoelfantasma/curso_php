<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Entre tintos y pingüinos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    </head>
    <body>
        <!-- CABECERA -->
        
        <header id="header">
            <!-- LOGO -->
            <div id="logo">
                <a href="index.php">Entre Tintos y Pingüinos</a>
            </div>
        
            
                
        <!-- MENU -->
        <nav id="menu">
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Categoria 1</a></li>
                <li><a href="">Categoria 2</a></li>
                <li><a href="">Categoria 3</a></li>
                <li><a href="">Categoria 4</a></li>
                <li><a href="">Sobre Mi</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
        </header>
        
        
        <div id="container">
            <!-- BARRA LATERAL-->
            <aside id="sidebar">
                <div id="login" class="block-aside">
                    <h3>Identificate</h3>
                    <form action="login.php">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        
                        <label for="password">Contraseña</label>
                        <input type="password" name="password">
                        <input type="submit" value="Entrar">
                    </form>                    
                </div>
                
                <div id="register" class="block-aside">
                    <h3>Regístrate</h3>
                    <form action="registro.php">
                        <label for="name">Nombre</label>
                        <input type="text" name="name">
                        <label for="lastname">Apellidos</label>
                        <input type="text" name="lastname">
                        
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        
                        <label for="password">Contraseña</label>
                        <input type="password" name="password">
                        <input type="submit" value="Registrar">
                    </form>                    
                </div>
            </aside>
        
        
        
        <!-- CAJA PRINCIPAL -->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            <articles class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id cum error magnam illo iste amet nemo itaque optio delectus deserunt.</p>
            </articles>
            <articles class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>Modi, asperiores, hic, sunt, recusandae nemo itaque laudantium nulla ab repellendus quia aut vel suscipit perspiciatis minus mollitia perferendis amet!</p>
            </articles>
            <articles class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>Autem, maiores, omnis, voluptas, corrupti minus quidem molestiae quibusdam unde ratione in nulla consectetur optio dolore nemo enim quaerat eaque?</p>
            </articles>
            <articles class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>Expedita, nesciunt, minus dolor eligendi perspiciatis harum quod corporis vero adipisci ducimus sequi dolorem vel veniam voluptatem explicabo nam laborum.</p>
            </articles>            
            <div id="ver_mas">
                <a href="">Ver todas las entradas</a>
            </div>
        </div>        
      </div>      
        <div class="clearfix"></div>
        <!-- FOOTER -->
        <footer id="footer">
            <p>Desarrollado por Lukacs Portela Rua &copy; 2019</p>
        </footer> 
       
        
    </body>
</html>