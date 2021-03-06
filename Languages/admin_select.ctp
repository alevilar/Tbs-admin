Languages/admin_select<?php

$this->Html
	->addCrumb('', '/admin', array('icon' => $_icons['home']))
	->addCrumb(__d('croogo', 'Settings'), array('plugin' => 'settings', 'controller' => 'settings', 'action' => 'index'))
	->addCrumb(__d('croogo', 'Languages'), array('plugin' => 'settings', 'controller' => 'languages', 'action' => 'index'));

?>
<div class="<?php echo $this->Layout->cssClass('row'); ?>">

	<div class="actions <?php echo $this->Layout->cssClass('columnFull'); ?>">
		<ul class="nav-buttons">
			<li>
			<?php
				echo $this->Html->link(
					__d('croogo', 'New Language'),
					array('action' => 'add'),
					array('button' => 'default')
				);
			?>
			</li>
		</ul>
	</div>

	<div class="languages <?php echo $this->Layout->cssClass('columnFull'); ?>">

	<h4><?php echo $title_for_layout; ?></h4>

	<ul>
	<?php
		foreach ($languages as $language) {
			$title = $language['Language']['title'] . ' (' . $language['Language']['native'] . ')';
			$link = $this->Html->link($title, array(
				'plugin' => 'translate',
				'controller' => 'translate',
				'action' => 'edit',
				$id,
				$modelAlias,
				'locale' => $language['Language']['alias'],
			));
			echo '<li>' . $link . '</li>';
		}
	?>
	</ul>
	</div>

</div>