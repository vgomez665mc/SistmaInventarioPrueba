

<nav class="navbar navbar-inverse nav-users">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link('SINSERTEC', ['controller' => 'Users', 'action' => 'index'], ['class' => 'navbar-brand']) ?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <?php if(isset($current_user)): ?>
                <ul class="nav navbar-nav">
                    <?php if($current_user['role'] == 'admin'): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gestionar Usuarios <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <?=  $this->Html->link('Agregar Tecnicos', ['controller' => 'Users', 'action' => 'add']) ?>
                                </li>
                                <li>
                                    <?=  $this->Html->link('Listar Tecnicos', ['controller' => 'Users', 'action' => 'index']) ?>
                                </li>

                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>

            <ul class="nav navbar-nav">
                <?php if($current_user['role'] == 'admin' || $current_user['role'] == 'tecnico'): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Servicio Tecnico <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?=  $this->Html->link('Ingreso de Equipos', ['controller' => 'IncomeEquipment', 'action' => 'add']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Listar Ingresos', ['controller' => 'IncomeEquipment', 'action' => 'index']) ?>
                            </li>

                           
                            <li>
                                <?=  $this->Html->link('Listar Egresos', ['controller' => 'ExpendituresEquipment', 'action' => 'index']) ?>
                            </li>

                        </ul>
                    </li>
                <?php endif; ?>
            </ul>

                <ul class="nav navbar-nav">
                    <?php if($current_user['role'] == 'admin' || $current_user['role'] == 'tecnico'): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Inventario <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <?=  $this->Html->link('Agregar Equipos', ['controller' => 'Equipment', 'action' => 'add']) ?>

                                </li>
                                <li>
                                    <?=  $this->Html->link('Listar Equipos', ['controller' => 'Equipment', 'action' => 'index ']) ?>
                                </li>

                                <li>
                                    <?=  $this->Html->link('Agregar Cpu', ['controller' => 'Cpu', 'action' => 'add']) ?>
                                </li>
                                <li>
                                    <?=  $this->Html->link('Listar Cpu', ['controller' => 'Cpu', 'action' => 'index ']) ?>
                                </li>

                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>



                <ul class="nav navbar-nav">
                    <?php if($current_user['role'] == 'admin'): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Funcionarios <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <?=  $this->Html->link('Agregar Funcionario', ['controller' => 'Officials', 'action' => 'add']) ?>

                                </li>
                                <li>
                                    <?=  $this->Html->link('Listar Funcionarios', ['controller' => 'Officials', 'action' => 'index ']) ?>
                                </li>



                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>



                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?= $this->Html->link('Salir', ['controller' => 'Users', 'action' => 'logout']) ?>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?= $this->Html->link('Registrarse', ['controller' => 'Users', 'action' => 'add']) ?>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>
<div >
    <img style=" padding: 0;position: relative;text-align: center;heigth: 50%; width: 100%" src="<?php echo $this->request->webroot; ?>dist/img/logo.jpg">
    <!--h3 class="text-center txt-dark mb-10">Iniciar Sesión</h3>
    <h6 class="text-center nonecase-font txt-grey">Por favor ingrese los datos correspondientes</h6-->
</div>
