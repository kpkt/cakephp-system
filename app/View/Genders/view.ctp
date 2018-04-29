<div class="genders view">
<h2><?php echo __('Gender'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gender['Gender']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($gender['Gender']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($gender['Gender']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($gender['Gender']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gender'), array('action' => 'edit', $gender['Gender']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Gender'), array('action' => 'delete', $gender['Gender']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $gender['Gender']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Genders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pesakits'), array('controller' => 'pesakits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pesakit'), array('controller' => 'pesakits', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pesakits'); ?></h3>
	<?php if (!empty($gender['Pesakit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Ic'); ?></th>
		<th><?php echo __('Age'); ?></th>
		<th><?php echo __('Dob'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Gender Id'); ?></th>
		<th><?php echo __('Race Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($gender['Pesakit'] as $pesakit): ?>
		<tr>
			<td><?php echo $pesakit['id']; ?></td>
			<td><?php echo $pesakit['name']; ?></td>
			<td><?php echo $pesakit['ic']; ?></td>
			<td><?php echo $pesakit['age']; ?></td>
			<td><?php echo $pesakit['dob']; ?></td>
			<td><?php echo $pesakit['address']; ?></td>
			<td><?php echo $pesakit['gender_id']; ?></td>
			<td><?php echo $pesakit['race_id']; ?></td>
			<td><?php echo $pesakit['created']; ?></td>
			<td><?php echo $pesakit['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pesakits', 'action' => 'view', $pesakit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pesakits', 'action' => 'edit', $pesakit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pesakits', 'action' => 'delete', $pesakit['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pesakit['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pesakit'), array('controller' => 'pesakits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
