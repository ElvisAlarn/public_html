<?php
defined('EXEC') or die;
?>
<div class="menu">
	<ul>
		<li><a class="icon-gauge <?php if($view == 'dashboard') print 'active';?>" href="/?view=dashboard">Показатели</a></li>
		<li><a class="icon-th <?php if($view == 'dashboard') print 'active';?>" href="/?view=order">Заказы</a></li>
		<li><a class="icon-clock <?php if($view == 'dashboard') print 'active';?>" href="/?view=task">Задачи</a></li>
		<li><a class="icon-rouble <?php if($view == 'dashboard') print 'active';?>" href="/?view=payment">Платежи</a></li>
		<li><a class="icon-users <?php if($view == 'dashboard') print 'active';?>" href="/?view=contractor">Контрагенты</a></li>
		<li><a class="icon-cubes <?php if($view == 'dashboard') print 'active';?>" href="/?view=storage">Склад</a></li>
		<li><a class="icon-chart-area <?php if($view == 'dashboard') print 'active';?>" href="/?view=reports">Отчеты</a></li>
		<li><a class="icon-sliders <?php if($view == 'dashboard') print 'active';?>" href="/?view=settings">Настройки</a></li>
	</ul>
</div>