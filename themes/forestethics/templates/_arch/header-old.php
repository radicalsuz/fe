<?php global $theme_path; ?>
<div id="fb-root"></div><!-- facebook header bloby -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="header"><div id="header-center">
<div id="site-name"><a href="/"><img src="/<?php echo($theme_path);?>/images/logo.jpg" alt="forest ethics logo" /></a></div>
<div id="main-menu" class="gil">
  <div id="nav-0" class="nav-links">
    <ul class="dropdown">
      <li><a href="/about-us"><span>About</span> Us</a>
            <?php if ($page['top_menu']): ?>
    <?php print render($page['top_menu']); ?>
  <?php endif; ?>
      </li>
    </ul>      
  </div>
 
  <div id="nav-1" class="nav-links">
    <a href="/thriving-forests"><span>Thriving</span> Forests</a>
  </div>
  <div id="nav-2" class="nav-links">
    <a href="/responsible-industry"><span>Responsible</span> Industry </a>
  </div>
  <div id="nav-3" class="nav-links">
    <a href="/healthy-communities"><span>Healthy</span> People</a>
  </div>
  <div id="nav-4" class="buttons">
    <a href="/take-action"><span>Do</span> Something</a>
  </div>
  <div id="nav-5" class="buttons">
    <a href="https://salsa.democracyinaction.org/o/281/p/salsa/donation/common/public/?donate_page_KEY=1841"><span>Donate</span></a>
  </div>
  <div id="blue-nipple"></div>
</div>  
    <!-- /menu -->
    <div id="secondary-menu" class="navigation">
    <a href="/blog">BLOG</a>
    <a href="/media-room">MEDIA ROOM</a>
    <a href="/contact-us">CONTACT US</a>
    </div>
    <div id="soc-net-header">
      <a href="http://facebook.com/forestethics"><img src="/<?php echo($theme_path);?>/images/icon_fb_icon.gif" alt="facebook" /></a>
      <a href="http://twitter.com/#!/forestethics"><img src="/<?php echo($theme_path);?>/images/icon_tw_icon.gif" alt="twitter" /></a>
      <a href="https://plus.google.com/b/115612067497993787499/115612067497993787499/posts"><img src="/<?php echo($theme_path);?>/images/google-plus-badge.png" alt="google+" /></a>
    </div>
<!-- 
<form action="http://salsa.democracyinaction.org/processEditValues.jsp" method="POST" id="signup-header">
  <input type="hidden" value="281" name="organization_KEY">
  <input type="hidden" value="http://salsa.democracyinaction.org/o/281/t/12944/tellafriend.jsp?tell_a_friend_KEY=4578" name="redirect">
  <input type="hidden" value="groups" name="link">
  <input type="hidden" value="47870" name="linkKey">
  <input type="hidden" value="groups" name="link">
  <input type="hidden" value="47136" name="linkKey">

  <input type="hidden" value="supporter" name="table">
  <input class="text" type="text" onClick="this.value=''" value="GET ACTION ALERTS > enter email" name="Email" id="Email" />
  <input class="button" value="" type="submit" />
</form>
-->
<div class="header-ribbon-social-outer">
<div class="header-ribbon-outer">
<div class="header-ribbon">

   <div class="header-ribbon-content">
	   <div class="get-alerts">GET ACTION ALERTS</div>
	   <div class="get-alerts-form">
		   <form action="http://salsa.democracyinaction.org/processEditValues.jsp" method="POST" id="signup-header">
			  <input type="hidden" value="281" name="organization_KEY">
			  <input type="hidden" value="http://salsa.democracyinaction.org/o/281/t/12944/tellafriend.jsp?tell_a_friend_KEY=4578" name="redirect">
			  <input type="hidden" value="groups" name="link">
			  <input type="hidden" value="47870" name="linkKey">
			  <input type="hidden" value="groups" name="link">
			  <input type="hidden" value="47136" name="linkKey">

			  <input type="hidden" value="supporter" name="table">
			  <input class="text" type="text" onclick="this.value=''" value="enter your email here..." name="Email" id="Email">
			  <input class="button" value="" type="submit">
			</form>
		</div>
</div>
</div>
</div>
    </div>
  </div></div> <!-- /.section, /#header -->
