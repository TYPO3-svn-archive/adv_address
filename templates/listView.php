<?php if (!defined ('TYPO3_MODE')) 	die ('Access denied.'); ?>
<?php
/*******************************************************************************************
 *  Copyright notice
 *
 *  (c) 2007 Sven Kalbhenn
 *  Contact: sven@skom.de
 *  All rights reserved
 * 
 *  If you ar not familiar with php-Templates, you can find a documentation here:
 *  http://typo3.org/documentation/document-library/extension-manuals/lib/0.0.20/view/1/5/
 *******************************************************************************************/
 ?>
<style type="text/css">
<!--
.tx_advaddress_address_list{
	margin-bottom: 10px;
	background-color:#EEEEEE;
}
.tx_advaddress_name_label{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-color: #CCCCCC;
	font-weight: bold;
	padding: 2px 15px;
}
.tx_advaddress_data_label{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-color: #CCCCCC;
	font-weight: bold;
	padding: 2px 15px;
}
.tx_advaddress_name{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	padding: 2px 15px;
}
.tx_advaddress_data{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	padding: 2px 15px;
}

-->
</style>


<h4>Adv-Address-List</h4>


<?php for($this->rewind(); $this->valid(); $this->next()): $entry = $this->current();	?>
<? //print_r($entry); ?>

<div class="tx_advaddress_address_list">
	<div class="tx_advaddress_name_label">%%%Name%%%:</div>
	<div class="tx_advaddress_name">
		<?php $entry->printAsText('title'); ?>
		<?php $entry->printAsText('firstname'); ?>
		<?php $entry->printAsText('middlename'); ?>
		<?php $entry->printAsText('lastname'); ?>
	</div>
	<?php if($entry->has('birthday')): ?>
	<div class="tx_advaddress_data_label">%%%Birthday%%%:</div>
	<div class="tx_advaddress_data"><?php $entry->printAsText('birthday'); ?></div>
	<?php endif; ?>
	<?php if($entry->has('picture')): ?>
	<div class="tx_advaddress_data_label">%%%Image%%%:</div>
	<div class="tx_advaddress_image"><?php $entry->printAsImage($entry->get('picture')); ?></div>
	<?php endif; ?>
	<?php if($entry->has('note')): ?>
	<div class="tx_advaddress_data_label">%%%Note%%%:</div>
	<div class="tx_advaddress_data"><?php $entry->printAsText('note'); ?></div>
	<?php endif; ?>
</div>

<?php endfor; ?>
