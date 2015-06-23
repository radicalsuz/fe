  <div class="campaign-button gil">
<?php //relaged node is named campaign_link, we grab it's uri path ?>
<a href="/node/<?php  echo($node->field_campaign_link['und'][0]['node']->nid); ?>">
      <div class="campaign-button-text">
        <?php print($node->field_display_title['und'][0]['value']); ?>
      </div>
      <?php //ughggggg ?>
      <img src='/<?php echo(path_to_theme()); ?>/../../files/<?php echo $node->field_image['und'][0]['filename'] ?>'>
    </a>
  </div>
