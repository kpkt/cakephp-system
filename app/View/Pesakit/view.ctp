<div class="pesakits view">
<h2><?php echo __('Pesakit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pesakit['Pesakit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($pesakit['Pesakit']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ic'); ?></dt>
		<dd>
			<?php echo h($pesakit['Pesakit']['ic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($pesakit['Pesakit']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob'); ?></dt>
		<dd>
			<?php echo h($pesakit['Pesakit']['dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($pesakit['Pesakit']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pesakit['Gender']['name'], array('controller' => 'genders', 'action' => 'view', $pesakit['Gender']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Race'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pesakit['Race']['name'], array('controller' => 'races', 'action' => 'view', $pesakit['Race']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pesakit['Pesakit']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pesakit['Pesakit']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pesakit'), array('action' => 'edit', $pesakit['Pesakit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pesakit'), array('action' => 'delete', $pesakit['Pesakit']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pesakit['Pesakit']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Pesakits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pesakit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Races'), array('controller' => 'races', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Race'), array('controller' => 'races', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Records'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Records'); ?></h3>
	<?php if (!empty($pesakit['Record'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Test Id'); ?></th>
		<th><?php echo __('Reports'); ?></th>
		<th><?php echo __('Ref Doc'); ?></th>
		<th><?php echo __('Date Report'); ?></th>
		<th><?php echo __('Date Appointment'); ?></th>
		<th><?php echo __('Pesakit Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pesakit['Record'] as $record): ?>
		<tr>
			<td><?php echo $record['id']; ?></td>
			<td><?php echo $record['test_id']; ?></td>
			<td><?php echo $record['reports']; ?></td>
			<td><?php echo $record['ref_doc']; ?></td>
			<td><?php echo $record['date_report']; ?></td>
			<td><?php echo $record['date_appointment']; ?></td>
			<td><?php echo $record['pesakit_id']; ?></td>
			<td><?php echo $record['user_id']; ?></td>
			<td><?php echo $record['created']; ?></td>
			<td><?php echo $record['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'records', 'action' => 'view', $record['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'records', 'action' => 'edit', $record['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'records', 'action' => 'delete', $record['id']), array('confirm' => __('Are you sure you want to delete # %s?', $record['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
