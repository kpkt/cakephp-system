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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('cake.generic');
    echo $this->Html->script('jquery-3.2.1.min');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<div id="container">
    <div id="header" id="public">
        <h1><?php echo $this->Html->link($cakeDescription, 'https://cakephp.org'); ?></h1>
        <?php if ($this->Session->read('Auth.User.username')): ?>

            <?php echo "Username :" . $this->Session->read('Auth.User.username') ?>
            <?php echo $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']) ?>

        <?php else: ?>

            <?php echo $this->Html->link('Login', ['controller' => 'users', 'action' => 'login']) ?>
            <?php echo $this->Html->link('Register', ['controller' => 'users', 'action' => 'register']) ?>

        <?php endif; ?>
    </div>
    <!--<div id="header" id="members">
			<h1><?php //echo $this->Html->link($cakeDescription, 'https://cakephp.org'); ?></h1>
		</div>-->
    <div id="content">

        <?php echo $this->Flash->render(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>
    <div id="footer">
        <?php echo $this->Html->link(
            $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
            'https://cakephp.org/',
            array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
        );
        ?>
        <p>
            <?php echo $cakeVersion; ?>
        </p>
    </div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>