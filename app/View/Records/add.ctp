<div class="records form">
<?php echo $this->Form->create('Record'); ?>
	<fieldset>
		<legend><?php echo __('Add Record'); ?></legend>
	<?php
		echo $this->Form->input('test_id');
		echo $this->Form->input('reports');
		echo $this->Form->input('ref_doc');
		echo $this->Form->input('date_report');
		echo $this->Form->input('date_appointment');
		echo $this->Form->input('pesakit_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Records'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tests'), array('controller' => 'tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'tests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pesakits'), array('controller' => 'pesakits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pesakit'), array('controller' => 'pesakits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
