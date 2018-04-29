<div class="pesakits form">
<?php echo $this->Form->create('Pesakit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pesakit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('ic');
		echo $this->Form->input('age');
		echo $this->Form->input('dob');
		echo $this->Form->input('address');
		echo $this->Form->input('gender_id');
		echo $this->Form->input('race_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pesakit.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Pesakit.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Pesakits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Races'), array('controller' => 'races', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Race'), array('controller' => 'races', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Records'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
	</ul>
</div>
