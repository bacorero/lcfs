<nav class="navbar navbar-inverse nav-users">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link('INICIO', ['controller' => 'Inicios', 'action' => 'index'], ['class' => 'navbar-brand']) ?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
        <?php if(isset($_SESSION['rol'])): ?>
            <?php if($_SESSION['rol'] == 'admin'): ?>
                <ul class="nav navbar-nav">
                    <?php if($_SESSION['rol'] == "admin"): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Listar usuarios', ['controller' => 'Users', 'action' => 'index']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Crear usuario', ['controller' => 'Users', 'action' => 'add']) ?>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li>
                        
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <?php if($_SESSION['rol'] == "admin"): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jugadores <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Listar jugadores', ['controller' => 'Players', 'action' => 'index']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Crear jugador', ['controller' => 'Players', 'action' => 'add']) ?>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li>
                        
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <?php if($_SESSION['rol'] == "admin"): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Árbitros <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Listar árbitros', ['controller' => 'Arbitros', 'action' => 'index']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Crear árbitro', ['controller' => 'Arbitros', 'action' => 'add']) ?>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li>
                        
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <?php if($_SESSION['rol'] == "admin"): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Equipos <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Listar equipos', ['controller' => 'Teams', 'action' => 'index']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Crear equipo', ['controller' => 'Teams', 'action' => 'add']) ?>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li>
                        
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <?php if($_SESSION['rol'] == "admin"): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categorías <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Listar categorías', ['controller' => 'Categorias', 'action' => 'index']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Crear categoría', ['controller' => 'Categorias', 'action' => 'add']) ?>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li>
                        
                    </li>
                </ul>

                <!-- Menu de manejo de espónsores -->
                <ul class="nav navbar-nav">
                    <?php if($_SESSION['rol'] == "admin"): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Spónsores <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Listar spónsores', ['controller' => 'Sponsors', 'action' => 'index']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Crear spónsor', ['controller' => 'Sponsors', 'action' => 'add']) ?>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li>
                        
                    </li>
                </ul>

            <ul class="nav navbar-nav navbar-right">
              <li>
                   <?= $this->Html->link('Salir', ['controller' => 'Users', 'action' => 'logout']) ?>
              </li>
            </ul>
            <?php endif; ?>
        <?php else: ?>
            <!-- Añado menu público -->
            <ul class="nav navbar-nav">

            <!-- MENU DIVISION DE HONOR -->
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Honor<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Resultados', ['controller' => 'Inicios', 'action' => 'clasificacion1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Clasificación', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Goleadores', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Sanciones', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Listado Tarjetas', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Calendario', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                        </ul>
                    </li>

                <!-- MENU PRIMERA DIVISION  -->
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Primera<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Resultados', ['controller' => 'Inicios', 'action' => 'clasificacion1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Clasificación', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Goleadores', ['controller' => 'Inicios', 'action' => 'goleadores1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Sanciones', ['controller' => 'Inicios', 'action' => 'deporjugadores1']) ?>

                            </li>
                            <li>
                                <?=  $this->Html->link('Listado Tarjetas', ['controller' => 'Inicios', 'action' => 'tarjetasjugadores1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Calendario', ['controller' => 'Inicios', 'action' => 'jornadas']) ?>
                            </li>
                        </ul>
                    </li>

                    <!-- MENU SEGUNDA DIVISION -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Segunda<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Resultados', ['controller' => 'Inicios', 'action' => 'clasificacion1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Clasificación', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Goleadores', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Sanciones', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Listado Tarjetas', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Calendario', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                        </ul>
                    </li>

                    <!-- MENU TERCERA DIVISION -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tercera<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Resultados', ['controller' => 'Inicios', 'action' => 'clasificacion1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Clasificación', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Goleadores', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Sanciones', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Listado Tarjetas', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Calendario', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                        </ul>
                    </li>

                    <!-- MENU TORNEOS -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Torneos<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Copa', ['controller' => 'Inicios', 'action' => 'clasificacion1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('24 Hores Concentaina', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('3D Alcoi', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('24H Liga Comarcal', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Torneig Comarcal', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Trofeu Filaes', ['controller' => 'Inicios', 'action' => 'deportividad1']) ?>
                            </li>
                        </ul>
                    </li>

                    <!-- MENU CALENDARIO -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Calendario<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Calendario', ['controller' => 'Inicios', 'action' => 'clasificacion1']) ?>
                            </li>
                        </ul>
                    </li>

                    <!-- MENU SEGURO -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Seguro<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Seguro', ['controller' => 'Inicios', 'action' => 'clasificacion1']) ?>
                            </li>
                        </ul>
                    </li>

                    <!-- MENU NORMATIVA -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Normativa<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Normativa', ['controller' => 'Inicios', 'action' => 'clasificacion1']) ?>
                            </li>
                        </ul>
                    </li>
            </ul>

            <!-- Parte pública para acceder al sistema -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                   <?= $this->Html->link('Login', ['controller' => 'Users', 'action' => 'index']) ?>
              </li>
            </ul>
        
    <?php endif; ?>
        </div>
    </div>
</nav>