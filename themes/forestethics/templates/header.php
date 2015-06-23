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
<div id="site-name"><a href="/"><img src="/<?php echo($theme_path);?>/images/FE_logo_2015.png" alt="forest ethics logo" /></a></div>
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
 
  <div id="nav-1" class="nav-links new">
    <ul class="dropdown">
    <li><a href="/thriving-forests"><span>Protect</span> Forests</a>      
      <?php if ($page['top_menu2']): ?>
          <?php print render($page['top_menu2']); ?>
        <?php endif; ?>
    </li>
    </ul>
  </div>
  <div id="nav-2" class="nav-links new">
    <ul class="dropdown">
    <li><a href="/responsible-industry"><span>Oppose</span> Dirty Energy</a>
      <?php if ($page['top_menu3']): ?>
          <?php print render($page['top_menu3']); ?>
        <?php endif; ?>
    </li>
    </ul>
  </div>
  <div id="nav-3" class="nav-links new">
    <ul class="dropdown">
    <li><a href="/healthy-communities"><span>Support</span> Community</a>
      <?php if ($page['top_menu4']): ?>
          <?php print render($page['top_menu4']); ?>
        <?php endif; ?>
    </li>
    </ul>
  </div>
  <div id="nav-4" class="buttons">
    <a href="/take-action"><span>Do</span> Something</a>
  </div>
  <div id="nav-5" class="buttons">
    <a href="/donate"><span>Donate</span></a>
    <!--<a href="https://forestethics.netdonor.net/ea-action/action?ea.client.id=1818&ea.campaign.id=34376&ea.tracking.id=web"><span>Donate</span></a>-->
  </div>
  <div id="blue-nipple"></div>
</div>  
    <!-- /menu -->
    <div id="secondary-menu" class="navigation">
    <a href="/blog">BLOG</a>
    <a href="/contact-us">CONTACT US</a>
    <div id="search" style="display:inline-block;"><form action="/search/google" method="get"><input type="text" name="keys" onClick="this.value=''" value="Search" style="width:115px;overflow:hidden;background: url('http://www.forestethics.org/sites/www.forestethics.org/themes/forestethics/images/mag-glass.png') no-repeat center right 2px;color: #888;font-style: italic;" width="1115" /></form></div>
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
	   <div class="get-alerts">SIGN ME UP</div>
	   <div class="get-alerts-form">
       <form action="http://e-activist.com/ea-action/action" method="POST" id="signup-header" name="FE Main Sign Up_1" onsubmit="_gaq.push(['_linkByPost', this]);">
            <input type="hidden" value="ea_submit_user_form" name="ea_requested_action">
            <input type="hidden" value="true" id="ea_javascript_enabled" name="ea_javascript_enabled">
            <input type="hidden" value="false" name="ea.AJAX.submit">
            <input type="hidden" value="1818" name="ea.client.id">
            <input type="hidden" value="22777" name="ea.campaign.id">
            <input type="hidden" value="5307" name="ea.form.id">
            <input type="hidden" value="1" name="ea.submitted.page">

			  <input class="text required" type="text" onclick="if(this.value=='enter your email here...'){this.value=''}" onblur="if(this.value==''){this.value='enter your email here...'}" value="enter your email here..." name="Primary Email" id="Email" data-required>
			  <div id="email-sign-up-dropdown">
			   <input value="First Name" class="form-field required noPlaceholder" type="text" id="First_Name" name="First Name" onclick="this.value=''" data-required>
			   <input value="Last Name" class="form-field required noPlaceholder" type="text" id="Last_Name" name="Last Name" onclick="this.value=''" data-required>
         <input value="Zip/Postal Code*" class="form-field required noPlaceholder" type="text" name="Mailing Zip Postal Code" onclick="this.value=''" data-required>
			   
<!-- 			   <select id="State" name="Mailing State Province" class="form-field required noPlaceholder" data-required>
      <option value="">State/Province</option>
      <option value="AL">AL</option>
      <option value="AK">AK</option>
      <option value="AZ">AZ</option>
      <option value="AR">AR</option>
      <option value="CA">CA</option>
      <option value="CO">CO</option>
      <option value="CT">CT</option>
      <option value="DC">DC</option>
      <option value="DE">DE</option>
      <option value="FL">FL</option>
      <option value="GA">GA</option>
      <option value="HI">HI</option>
      <option value="ID">ID</option>
      <option value="IL">IL</option>
      <option value="IN">IN</option>
      <option value="IA">IA</option>
      <option value="KS">KS</option>
      <option value="KY">KY</option>
      <option value="LA">LA</option>
      <option value="ME">ME</option>
      <option value="MD">MD</option>
      <option value="MA">MA</option>
      <option value="MI">MI</option>
      <option value="MN">MN</option>
      <option value="MS">MS</option>
      <option value="MO">MO</option>
      <option value="MT">MT</option>
      <option value="NE">NE</option>
      <option value="NV">NV</option>
      <option value="NH">NH</option>
      <option value="NJ">NJ</option>
      <option value="NM">NM</option>
      <option value="NY">NY</option>
      <option value="NC">NC</option>
      <option value="ND">ND</option>
      <option value="OH">OH</option>
      <option value="OK">OK</option>
      <option value="OR">OR</option>
      <option value="PA">PA</option>
      <option value="RI">RI</option>
      <option value="SC">SC</option>
      <option value="SD">SD</option>
      <option value="TN">TN</option>
      <option value="TX">TX</option>
      <option value="UT">UT</option>
      <option value="VT">VT</option>
      <option value="VA">VA</option>
      <option value="WA">WA</option>
      <option value="WV">WV</option>
      <option value="WI">WI</option>
      <option value="WY">WY</option>
      <option value="AB">AB</option>
      <option value="BC">BC</option>
      <option value="MB">MB</option>
      <option value="NB">NB</option>
      <option value="NL">NL</option>
      <option value="NS">NS</option>
      <option value="NT">NT</option>
      <option value="NU">NU</option>
      <option value="ON">ON</option>
      <option value="PE">PE</option>
      <option value="QC">QC</option>
      <option value="SK">SK</option>
      <option value="YT">YT</option>

        </select>-->
        <input type="checkbox" onclick="checkdep(this);" onblur="validatefield(this);" value="Y" name="Email - Opt In" id="Email_-_Opt_InY" style="visibility: hidden;height:0;width:0;display:block;" checked />
<!--         <select id="Country" name="Country" class="form-field">
			<option value="">Country</option>
<option value="US">United States</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote D'Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curacao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TL">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="FX">France, Metropolitan</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard and McDonald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran, Islamic Republic of</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Dem. People's Republic of</option><option value="KR">Korea, Republic of</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People's Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia, Former Yugoslav Republic</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States of</option><option value="MD">Moldova, Republic of</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territory, Occupied</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="SP">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="SS">South Sudan</option><option value="GS">S. Georgia and S. Sandwich Islands</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic of</option><option value="TH">Thailand</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="UM">United States Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Virgin Islands, British</option><option value="VI">Virgin Islands, U.S.</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="YU">Yugoslavia</option><option value="ZR">Zaire</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe
</option></select> -->
<div class="error"></div>
			  <input class="button" value="submit" type="submit">

			  </div>
                        </form>

<!-- <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> -->
<script type="text/javascript">
  jQuery.validator.addMethod(
    'noPlaceholder', function (value, element) {
        return value !== element.defaultValue;
    }, ''
  );

  jQuery("form#signup-header").validate();//.val();


 	jQuery("form#signup-header").validate({
		rules: {
			First_Name: "required",
			Last_Name: "required",
			Email: {
				required: true,
				email: true
			},
      State: "required",
		}
  });

</script>

<script>
jQuery(document).ready(function(){
   hasBreadcrumb=jQuery('#block-breadcrumb-breadcrumb');
   //hasCaption=jQuery('.content .field-name-field-caption');
   hasCaption=jQuery('.content h1.title');
   isWide = jQuery('#full-width-hero');
  
  
  
  if((isWide.length<=0)&&(hasCaption.length>0)&&(hasBreadcrumb.length>0)){
    jQuery(hasCaption).before(hasBreadcrumb);
  }
  
});
</script>
</div>
</div>
</div>
</div>
    </div>
  </div></div> <!-- /.section, /#header -->
