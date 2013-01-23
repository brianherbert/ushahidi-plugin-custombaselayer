<p><strong><?php echo Kohana::lang("custombaselayer.settings.note"); ?></strong></p>



<?php echo form::open(url::site().'admin/custombaselayer_settings/'); ?>

<div class="row">
	<h4><?php echo Kohana::lang("custombaselayer.settings.title"); ?></h4>
	<?php echo form::input('title', $custombaselayer->title, 'style="width:380px;"'); ?>
</div>

<div class="row">
	<h4><?php echo Kohana::lang("custombaselayer.settings.url"); ?></h4>
	<?php if($this->template->content->settings_form->url_not_set) echo '<strong style="color:red">'.Kohana::lang("custombaselayer.settings.url_must_be_set").'</strong><br/>'; ?>
	<?php echo form::input('url', $custombaselayer->url, 'style="width:380px;"'); ?><br/>
	<small><?php echo Kohana::lang("custombaselayer.settings.help_url"); ?></small><br/>
	<small><?php echo Kohana::lang("custombaselayer.settings.example"); ?>: http://tile.openstreetmap.org/transport/${z}/${x}/${y}.png</small>
</div>

<div class="row">
	<h4><?php echo Kohana::lang("custombaselayer.settings.openlayers"); ?></h4>
	<span class="sel-holder"><?php echo form::dropdown('openlayers', $openlayers_defaults); ?></select>
</div>

<div class="row">
	<h4><?php echo Kohana::lang("custombaselayer.settings.description"); ?></h4>
	<?php echo form::textarea('description', $custombaselayer->description,' style="height:50px;width:380px;"'); ?>
</div>

<div class="row">
	<h4><?php echo Kohana::lang("custombaselayer.settings.attribution"); ?></h4>
	<?php echo form::textarea('attribution', $custombaselayer->attribution,' style="height:50px;width:380px;"'); ?>
	<div style="clear:both;"></div>
	<small><?php echo Kohana::lang("custombaselayer.settings.help_attribution"); ?></small><br/>
	<small><?php echo Kohana::lang("custombaselayer.settings.example"); ?>:</small>
	<small><pre><?php echo htmlentities('&copy;<a href="@ccbysa">CCBYSA</a> 2010 <a href="@openstreetmap">OpenStreetMap.org</a> contributors.'); ?></pre></small>
</div>




<?php echo form::close(); ?>

<?php /*
<table style="width: 630px;" class="my_table">
	<tr>
		<td style="width:60px;">
			<span class="big_blue_span"><?php echo Kohana::lang('ui_main.step');?> 1:</span>
		</td>
		<td>
			<h4 class="fix"><a href="#" class="tooltip" title="<?php echo Kohana::lang("tooltips.settings_flsms_download"); ?>"><?php echo Kohana::lang('settings.sms.flsms_download');?></a></h4>
			<p>
				xx
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<span class="big_blue_span"><?php echo Kohana::lang('ui_main.step');?> 2:</span>
		</td>
		<td>
			<h4 class="fix"><a href="#" class="tooltip" title="<?php echo Kohana::lang("tooltips.settings_flsms_synchronize"); ?>"><?php echo Kohana::lang('settings.sms.flsms_synchronize');?></a></h4>
			<p>
				<?php echo Kohana::lang('settings.sms.flsms_instructions');?>.
			</p>
			<p class="sync_key">
				<?php echo Kohana::lang('settings.sms.flsms_key');?>: <span>XX</span><br /><br />
				<?php echo Kohana::lang('settings.sms.flsms_link');?>:<br /><span>YY</span>
			</p>
		</td>
	</tr>
</table>

*/ ?>
