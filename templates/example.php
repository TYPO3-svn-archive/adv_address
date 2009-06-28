<?php if (!defined ('TYPO3_MODE')) 	die ('Access denied.'); ?>
<h4>Adv-Address</h4>
<? //print_r($this); ?>

<?php for($this->rewind(); $this->valid(); $this->next()): $entry = $this->current();	?>
<? //print_r($entry); ?>

<dl>
	<dt>%%%Name%%%</dt>
		<dd>
			<?php $entry->printAsText($entry->get('title')); ?>
			<?php $entry->printAsText('firstname'); ?>
			<?php $entry->printAsText('middlename'); ?>
			<?php $entry->printAsText('lastname'); ?>

		</dd>
	<dt>%%%Birthday%%%</dt>
		<dd><?php $entry->printAsText('birthday'); ?></dd>
	<dt>%%%Image%%%</dt>
		<dd><?php $entry->get('picture'); ?></dd>
	<dt>%%%Note%%%</dt>
		<dd><?php $entry->printAsText('note'); ?></dd>
</dl>

<?php endfor; ?>
