<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('jquery-ui.theme') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('styles.css') ?>
    <?= $this->Html->css('fontawesome.min.css') ?>
    <?= $this->Html->css('bootstrap-formhelpers.min.css') ?>
    <?= $this->Html->css('bootstrap-select.min.css') ?>
    <?= $this->Html->css('bootstrap-tags.css') ?>  
<!--    <?= $this->Html->css('forms.css') ?>   -->
    <?= $this->Html->css('datetimepicker.css') ?>  
    <?= $this->Html->css('misEstilos.css') ?> 

    <?= $this->Html->script('https://code.jquery.com/jquery.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('custom.js') ?>

  
    <?= $this->Html->script('jquery.dataTables.min.js') ?>
    <?= $this->Html->script('dataTables.bootstrap.js') ?>
    
  <!--  <?= $this->Html->script('forms.js') ?>  -->
    <?= $this->Html->script('jquery-ui.js') ?>

    <?= $this->Html->script('bootstrap-formhelpers.min.js') ?>  
    <?= $this->Html->script('bootstrap-tags.min.js') ?>
    <?= $this->Html->script('bootstrap-datetimepicker') ?>   

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>   
<body >
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                  <!-- Logo -->
                    <div class="logo">
                        <h1 class="miCabecera">GestPro</h1>
                    </div>
                </div>
                <div class="col-xs-10">
                    <div class="navbar navbar-inverse" role="banner">
                        <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario<b class="caret"></b></a>
                                    <ul class="dropdown-menu animated fadeInUp">
                                        <li><a href="#">Perfil</a></li>
                                        <li><a href="#">Salir</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
               </div>
            </div>
        </div>
    </div>
    <!-- Menu lateral  -->
    <div class="page-content">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="nav">
                        <!-- Main menu -->
                        <li class="submenu col-xs-6 col-md-12">
                             <a href="#" id="sombraMenu">
                                Proyectos
                                <span class="caret pull-right"></span>
                             </a>
                             <!-- Sub menu -->
                             <ul>
                                <li>
                                    <?= $this->Html->link(__('Listado'), [
                                    'controller'=> 'Proyectos', 
                                    'action' => 'listar']) ?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Crear'), [
                                    'controller'=> 'Proyectos',
                                    'action' => 'crear']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu col-xs-6 col-md-12">
                             <a href="#">
                                Jefes
                                <span class="caret pull-right"></span>
                             </a>
                             <!-- Sub menu -->
                             <ul>
                                <li>
                                    <?= $this->Html->link(__('Listado'), [
                                    'controller'=> 'Jefes', 
                                    'action' => 'listar']) ?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Crear'), [
                                    'controller'=> 'Jefes',
                                    'action' => 'crear']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu col-xs-6 col-md-12">
                             <a href="#">
                                Tecnicos
                                <span class="caret pull-right"></span>
                             </a>
                             <!-- Sub menu -->
                             <ul>
                                <li>
                                    <?= $this->Html->link(__('Listado'), [
                                    'controller'=> 'Tecnicos', 
                                    'action' => 'listar']) ?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Crear'), [
                                    'controller'=> 'Tecnicos',
                                    'action' => 'crear']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu col-xs-6 col-md-12">
                             <a href="#">
                                Grupos
                                <span class="caret pull-right"></span>
                             </a>
                             <!-- Sub menu -->
                             <ul>
                                <li>
                                    <?= $this->Html->link(__('Listado'), [
                                    'controller'=> 'Grupos', 
                                    'action' => 'listar']) ?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Crear'), [
                                    'controller'=> 'Grupos',
                                    'action' => 'crear']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu col-xs-6 col-md-12">
                             <a href="#">
                                Clientes
                                <span class="caret pull-right"></span>
                             </a>
                             <!-- Sub menu -->
                             <ul>
                                <li>
                                    <?= $this->Html->link(__('Listado'), [
                                    'controller'=> 'Clientes', 
                                    'action' => 'listar']) ?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Crear'), [
                                    'controller'=> 'Clientes',
                                    'action' => 'crear']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu col-xs-6 col-md-12">
                             <a href="#">
                                Informes
                                <span class="caret pull-right"></span>
                             </a>
                             <!-- Sub menu -->
                             <ul>
                                <li>
                                    <?= $this->Html->link(__('Listado'), [
                                    'controller'=> 'Informes', 
                                    'action' => 'listar']) ?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Crear'), [
                                    'controller'=> 'Informes',
                                    'action' => 'crear']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu col-xs-6 col-md-12">
                             <a href="#">
                                Contenidos
                                <span class="caret pull-right"></span>
                             </a>
                             <!-- Sub menu -->
                             <ul>
                                <li>
                                    <?= $this->Html->link(__('Listado'), [
                                    'controller'=> 'Contenidos', 
                                    'action' => 'listar']) ?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Crear'), [
                                    'controller'=> 'Contenidos',
                                    'action' => 'seleccionarinformeparacrear']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu col-xs-6 col-md-12">
                             <a href="#">
                                Plazos
                                <span class="caret pull-right"></span>
                             </a>
                             <!-- Sub menu -->
                             <ul>
                                <li>
                                    <?= $this->Html->link(__('Listado'), [
                                    'controller'=> 'Plazos', 
                                    'action' => 'listar']) ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div> 
            <div class="container clearfix col-md-10">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               RVeiga 2018 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>



       
</body>
</html>
