<?php
$pubid = elgg_get_plugin_setting('profileID','addthis_share');
$follow = elgg_get_plugin_setting('follow', 'addthis_share');
$share = elgg_get_plugin_setting('share', 'addthis_share');
$shareposition = elgg_get_plugin_setting('shareposition', 'addthis_share');
$next = elgg_get_plugin_setting('next', 'addthis_share');
$theme = elgg_get_plugin_setting('theme', 'addthis_share');



if($pubid != null){
?>



<!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $pubid; ?>"></script>
<script type="text/javascript">
  addthis.layers({
    'theme' : "<?php echo $theme; ?>",
    <?php if($pubid != null && $share == 'yes'){ ?>
    'share' : {
      'position' : "<?php echo $shareposition; ?>",
      'numPreferredServices' : 5
    }, <?php } ?>
    <?php if($pubid != null && $follow == 'yes'){ ?>
    'follow' : {

      'offset': {'top':'50px'},
      'services' : [

        {'service': 'facebook', 'id': '[REPLACE WITH YOUR ID]'},
        {'service': 'twitter', 'id': '[REPLACE WITH YOUR ID]'},
        {'service': 'youtube', 'id': '[REPLACE WITH YOUR ID]'},
        {'service': 'instagram', 'id': '[REPLACE WITH YOUR ID]'}
      ]
    },  <?php } ?>
     <?php if($pubid != null && $next == 'yes'){ ?>
    'whatsnext' : {}  <?php } ?>
  });
</script>
<!-- AddThis Smart Layers END -->

<?php } ?>
