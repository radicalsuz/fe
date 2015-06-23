<?php

/**
AUTHOR page

contains special code for pulling in news stories that have a related node of this author's NID

 */
?>
<div id="page-wrapper"><div id="page">
<?php include('header.php'); ?>
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
  <div class="box">
        <div id="front-top-left">
      <div class="padding-10">
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <div class="author">
            <?php print render($page['content']); ?>
      </div>

      
<!--       <?php //build ourslves a entityfield query to grab news written by this author
        echo '<h2 class="orange-h2 gil">More content by this author:</h2><div class="padding-10">';
        $query = new EntityFieldQuery;
        $result = $query->entityCondition('entity_type', 'node')
          ->propertyCondition('type', 'news')
          ->fieldCondition('field_author_ref','nid',$node->nid)//the field_author_ref is a node reference to this author's NID
          ->execute();
        //step through them and print them out!
        //we only want the first few items, so break out when we hit that
        $counter = 0;
        foreach($result['node'] as $item){
          $news_node = node_load($item->nid);
          echo '<a href="/node/'.$news_node->nid.'">'.$news_node->title.'</a><br /> '.$news_node->body['und'][0]['summary'].'<br/><br/>';
          $counter++;
          if($counter>4){
            break;
          }
        }
        echo '</div><br/>';
      ?>
 -->
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>

      <?php print $feed_icons;?>
    </div>
    </div> <!-- /content-area -->
    
    <div id="front-top-right">
    <?php if ($page['sidebar']): ?>
      <?php print render($page['sidebar']); ?>
    <?php endif; ?>
    </div>

    <div class="clear"></div>
    
    </div></div> <!-- /.section, /#content -->


  </div>
  </div> <!-- /#main, /#main-wrapper -->

  <div id="footer-wrapper">
          <?php include('footer.php'); ?>
 </div> <!-- /#section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
