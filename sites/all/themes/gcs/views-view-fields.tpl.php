<?php if ($zebra == "even"):?>
<div class="bg">
<?php endif;?>
<dl class="news box">
	<dt>SEP<br />
	<span>23</span></dt>
	<dd><span><?php print $row->node_title?></span><br />
	<?php print $image?>
	<?php print $row->node_revisions_body;?>
	</dd>
</dl>
<?php if ($zebra == "even"):?>
</div>
<?php endif;?>

