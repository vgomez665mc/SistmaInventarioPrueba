<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
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



    <?= $this->Html->css(['bootstrap.min.css','style']) ?>
    <?= $this->Html->script(['jquery-2.2.4.min.js','bootstrap.min.js']) ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<?= $this->element('menu')?>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>

    <link href="<?php echo $this->request->webroot; ?>custom.css" rel="stylesheet" type="text/css">

    <!-- Data table JavaScript -->
    <script src="<?php echo $this->request->webroot; ?>vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $this->request->webroot; ?>vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo $this->request->webroot; ?>vendors/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>

    <!-- Data table CSS -->
    <link href="<?php echo $this->request->webroot; ?>vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>


<!-- simpleWeather JavaScript -->
<script src="<?php echo $this->request->webroot; ?>vendors/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>dist/js/simpleweather-data.js"></script>

<!-- Bootstrap Datetimepicker CSS -->
        <link href="<?php echo $this->request->webroot; ?>vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>

        
                <!-- Bootstrap Datetimepicker JavaScript -->
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>


</body>
</html>
