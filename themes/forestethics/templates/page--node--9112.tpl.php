<?php 
/*
ABOUT US OVERRIDE
*/
?>
<!-- about us -->
<div id="page-wrapper"><div id="page" class="no-nip">
<?php include('header.php'); ?>
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
  <div class="box">
<style>
h3{font-weight: bold;}
</style>    
<h1 class="title">Contact Us</h1>

<div class="contactusbox contactus-blue">
<div class="contactus-title">Offices</div>
<div class="contactus-inside">
<h3>San Francisco</h3>
<p>One Haight Street<br>San Francisco, CA 94102<br>415-863-4563<br><a href="http://maps.google.com/maps?q=forestethics+san+francisco&amp;hl=en&amp;ll=37.773416,-122.422033&amp;spn=0.001891,0.005284&amp;sll=37.866181,-122.268906&amp;sspn=0.217369,0.598068&amp;hq=forestethics&amp;hnear=San+Francisco,+California&amp;t=m&amp;z=18&amp;iwloc=A" target="_blank">View map</a></p>

<h3>Bellingham</h3>
<p>1329 N State St. Suite 302<br>Bellingham, WA 98225<br>360-734-2951<br><a href="http://maps.google.com/maps/place?q=Forestethics,+C+Street,+Bellingham&amp;hl=en&amp;cid=3050306694909742848" target="_blank">View Map</a></p>

  <div style="float:right;">
    <h3>Email Inquiries</h3>
    <p>General questions?<br><a href="mailto:info@forestethics.org">info@forestethics.org</a></p>
    <p>Questions about giving?<br><a href="mailto:gifts@forestethics.org">gifts@forestethics.org</a></p>
    <p>Website comments?<a href="mailto:web@forestethics.org"><br>web@forestethics.org</a>
    </p><p>&nbsp;</p>
  </div>
</div>
</div>

<div class="contactusbox contactus-orange">
<div class="contactus-title">Partner Offices</div>
<div class="contactus-inside">
<p><a target="_blank" href="http://forestethicsadvocacy.ca/"><strong>ForestEthics Advocacy Association</strong></a><br>350-163 W Hastings St<br>Vancouver, BC V6B 1H5<br>604-331-6201<br><a href="mailto:info@forestethicsadvocacy.org" title="Email ForestEthics Advocacy">info@forestethicsadvocacy.org</a></p>
<p><a target="_blank" href="http://forestethicssolutions.ca/"><strong>ForestEthics Solutions Society</strong></a><br>address same as ForestEthics Advocacy Association
<br><a href="mailto:info@forestethicssolutions.org" title="Email ForestEthics Advocacy">info@forestethicssolutions.org</a></p>
</div>
</div>

<div class="contactusbox contactus-green">
<div class="contactus-inside">
<div class="sendus"> What's on your mind? Send us an email using this handy form or email <a href="mailto:info@forestethics.org" style="color: #000;">info@forestethics.org</a>. We will respond to your email as soon as we can!</div>

<?php $block = module_invoke('webform', 'block_view', 'client-block-9113');
print render($block['content']); ?>
</div>
</div>




        <div id="front-top-left">
      <div class="padding-10">
      <a id="main-content"></a>
      
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>

      <?php print $feed_icons; ?>
    
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
