<!doctype html>
	<html lang>
		@include('/include/head')
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
				@include('/include/header')
			     @include('/include/sidebar')
				<main class=mdl-layout__content>
					<div class=hb-section>
						<div class="hb-section__background hb-background-parallax">
							<img src="{{ asset('images/backgrounds/bg26-notinclude.jpg') }}" alt="section background">
						</div>
						<div class="hb-section__overlay hb-section__overlay--gradient-from-top-30"></div>
						<div class=hb-section__content>
							<div class="mdl-grid mdl-grid--no-fullwidth">
								<h1 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-100 hb-margin-bottom-100">
									Checkout
								</h1>
							</div>
						</div>
					</div>
					<div class=hb-section>
						<div class=hb-section__content>
							<form action=#>
								<div class="mdl-grid mdl-grid--no-fullwidth hb-margin-top-40">
									<div class="mdl-grid mdl-cell mdl-cell--7-col mdl-cell--6-col-tablet mdl-cell--4-col-phone hb-margin-bottom-40">
										<h2 class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--headline mdl-typography--font-light hb-margin-bottom-0 hb-margin-top-20">Billing Details</h2>
										<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-selectfield mdl-selectfield--full-width mdl-js-selectfield" tabindex=-1>
												<select name=orderby class=mdl-selectfield__select>
														<option value selected>Select Country</option>
                                                        <option value=AD>Andorra</option>
                                                        <option value=AE>United Arab Emirates</option>
                                                        <option value=AF>Afghanistan</option>
                                                        <option value=AG>Antigua and Barbuda</option>
                                                        <option value=AI>Anguilla</option>
                                                        <option value=AL>Albania</option>
                                                        <option value=AM>Armenia</option>
                                                        <option value=AO>Angola</option>
                                                        <option value=AQ>Antarctica</option>
                                                        <option value=AR>Argentina</option>
                                                        <option value=AS>American Samoa</option>
                                                        <option value=AT>Austria</option>
                                                        <option value=AU>Australia</option>
                                                        <option value=AW>Aruba</option>
                                                        <option value=AX>Åland</option>
                                                        <option value=AZ>Azerbaijan</option>
                                                        <option value=BA>Bosnia and Herzegovina</option>
                                                        <option value=BB>Barbados</option>
                                                        <option value=BD>Bangladesh</option>
                                                        <option value=BE>Belgium</option>
                                                        <option value=BF>Burkina Faso</option>
                                                        <option value=BG>Bulgaria</option>
                                                        <option value=BH>Bahrain</option>
                                                        <option value=BI>Burundi</option>
                                                        <option value=BJ>Benin</option>
                                                        <option value=BL>Saint Barthélemy</option>
                                                        <option value=BM>Bermuda</option>
                                                        <option value=BN>Brunei</option>
                                                        <option value=BO>Bolivia</option>
                                                        <option value=BQ>Bonaire</option>
                                                        <option value=BR>Brazil</option>
                                                        <option value=BS>Bahamas</option>
                                                        <option value=BT>Bhutan</option>
                                                        <option value=BV>Bouvet Island</option>
                                                        <option value=BW>Botswana</option>
                                                        <option value=BY>Belarus</option>
                                                        <option value=BZ>Belize</option>
                                                        <option value=CA>Canada</option>
                                                        <option value=CC>Cocos [Keeling] Islands</option>
                                                        <option value=CD>Democratic Republic of the Congo</option>
                                                        <option value=CF>Central African Republic</option>
                                                        <option value=CG>Republic of the Congo</option>
                                                        <option value=CH>Switzerland</option>
                                                        <option value=CI>Ivory Coast</option>
                                                        <option value=CK>Cook Islands</option>
                                                        <option value=CL>Chile</option>
                                                        <option value=CM>Cameroon</option>
                                                        <option value=CN>China</option>
                                                        <option value=CO>Colombia</option>
                                                        <option value=CR>Costa Rica</option>
                                                        <option value=CU>Cuba</option>
                                                        <option value=CV>Cape Verde</option>
                                                        <option value=CW>Curacao</option>
                                                        <option value=CX>Christmas Island</option>
                                                        <option value=CY>Cyprus</option>
                                                        <option value=CZ>Czechia</option>
                                                        <option value=DE>Germany</option>
                                                        <option value=DJ>Djibouti</option>
                                                        <option value=DK>Denmark</option>
                                                        <option value=DM>Dominica</option>
                                                        <option value=DO>Dominican Republic</option>
                                                        <option value=DZ>Algeria</option>
                                                        <option value=EC>Ecuador</option>
                                                        <option value=EE>Estonia</option>
                                                        <option value=EG>Egypt</option>
                                                        <option value=EH>Western Sahara</option>
                                                        <option value=ER>Eritrea</option>
                                                        <option value=ES>Spain</option>
                                                        <option value=ET>Ethiopia</option>
                                                        <option value=FI>Finland</option>
                                                        <option value=FJ>Fiji</option>
                                                        <option value=FK>Falkland Islands</option>
                                                        <option value=FM>Micronesia</option>
                                                        <option value=FO>Faroe Islands</option>
                                                        <option value=FR>France</option>
                                                        <option value=GA>Gabon</option>
                                                        <option value=GB>United Kingdom</option>
                                                        <option value=GD>Grenada</option>
                                                        <option value=GE>Georgia</option>
                                                        <option value=GF>French Guiana</option>
                                                        <option value=GG>Guernsey</option>
                                                        <option value=GH>Ghana</option>
                                                        <option value=GI>Gibraltar</option>
                                                        <option value=GL>Greenland</option>
                                                        <option value=GM>Gambia</option>
                                                        <option value=GN>Guinea</option>
                                                        <option value=GP>Guadeloupe</option>
                                                        <option value=GQ>Equatorial Guinea</option>
                                                        <option value=GR>Greece</option>
                                                        <option value=GS>South Georgia and the South Sandwich Islands</option>
                                                        <option value=GT>Guatemala</option>
                                                        <option value=GU>Guam</option>
                                                        <option value=GW>Guinea-Bissau</option>
                                                        <option value=GY>Guyana</option>
                                                        <option value=HK>Hong Kong</option>
                                                        <option value=HM>Heard Island and McDonald Islands</option>
                                                        <option value=HN>Honduras</option>
                                                        <option value=HR>Croatia</option>
                                                        <option value=HT>Haiti</option>
                                                        <option value=HU>Hungary</option>
                                                        <option value=ID>Indonesia</option>
                                                        <option value=IE>Ireland</option>
                                                        <option value=IL>Israel</option>
                                                        <option value=IM>Isle of Man</option>
                                                        <option value=IN>India</option>
                                                        <option value=IO>British Indian Ocean Territory</option>
                                                        <option value=IQ>Iraq</option>
                                                        <option value=IR>Iran</option>
                                                        <option value=IS>Iceland</option>
                                                        <option value=IT>Italy</option>
                                                        <option value=JE>Jersey</option>
                                                        <option value=JM>Jamaica</option>
                                                        <option value=JO>Jordan</option>
                                                        <option value=JP>Japan</option>
                                                        <option value=KE>Kenya</option>
                                                        <option value=KG>Kyrgyzstan</option>
                                                        <option value=KH>Cambodia</option>
                                                        <option value=KI>Kiribati</option>
                                                        <option value=KM>Comoros</option>
                                                        <option value=KN>Saint Kitts and Nevis</option>
                                                        <option value=KP>North Korea</option>
                                                        <option value=KR>South Korea</option>
                                                        <option value=KW>Kuwait</option>
                                                        <option value=KY>Cayman Islands</option>
                                                        <option value=KZ>Kazakhstan</option>
                                                        <option value=LA>Laos</option>
                                                        <option value=LB>Lebanon</option>
                                                        <option value=LC>Saint Lucia</option>
                                                        <option value=LI>Liechtenstein</option>
                                                        <option value=LK>Sri Lanka</option>
                                                        <option value=LR>Liberia</option>
                                                        <option value=LS>Lesotho</option>
                                                        <option value=LT>Lithuania</option>
                                                        <option value=LU>Luxembourg</option>
                                                        <option value=LV>Latvia</option>
                                                        <option value=LY>Libya</option>
                                                        <option value=MA>Morocco</option>
                                                        <option value=MC>Monaco</option>
                                                        <option value=MD>Moldova</option>
                                                        <option value=ME>Montenegro</option>
                                                        <option value=MF>Saint Martin</option>
                                                        <option value=MG>Madagascar</option>
                                                        <option value=MH>Marshall Islands</option>
                                                        <option value=MK>Macedonia</option>
                                                        <option value=ML>Mali</option>
                                                        <option value=MM>Myanmar [Burma]</option>
                                                        <option value=MN>Mongolia</option>
                                                        <option value=MO>Macao</option>
                                                        <option value=MP>Northern Mariana Islands</option>
                                                        <option value=MQ>Martinique</option>
                                                        <option value=MR>Mauritania</option>
                                                        <option value=MS>Montserrat</option>
                                                        <option value=MT>Malta</option>
                                                        <option value=MU>Mauritius</option>
                                                        <option value=MV>Maldives</option>
                                                        <option value=MW>Malawi</option>
                                                        <option value=MX>Mexico</option>
                                                        <option value=MY>Malaysia</option>
                                                        <option value=MZ>Mozambique</option>
                                                        <option value=NA>Namibia</option>
                                                        <option value=NC>New Caledonia</option>
                                                        <option value=NE>Niger</option>
                                                        <option value=NF>Norfolk Island</option>
                                                        <option value=NG>Nigeria</option>
                                                        <option value=NI>Nicaragua</option>
                                                        <option value=NL>Netherlands</option>
                                                        <option value=NO>Norway</option>
                                                        <option value=NP>Nepal</option>
                                                        <option value=NR>Nauru</option>
                                                        <option value=NU>Niue</option>
                                                        <option value=NZ>New Zealand</option>
                                                        <option value=OM>Oman</option>
                                                        <option value=PA>Panama</option>
                                                        <option value=PE>Peru</option>
                                                        <option value=PF>French Polynesia</option>
                                                        <option value=PG>Papua New Guinea</option>
                                                        <option value=PH>Philippines</option>
                                                        <option value=PK>Pakistan</option>
                                                        <option value=PL>Poland</option>
                                                        <option value=PM>Saint Pierre and Miquelon</option>
                                                        <option value=PN>Pitcairn Islands</option>
                                                        <option value=PR>Puerto Rico</option>
                                                        <option value=PS>Palestine</option>
                                                        <option value=PT>Portugal</option>
                                                        <option value=PW>Palau</option>
                                                        <option value=PY>Paraguay</option>
                                                        <option value=QA>Qatar</option>
                                                        <option value=RE>Réunion</option>
                                                        <option value=RO>Romania</option>
                                                        <option value=RS>Serbia</option>
                                                        <option value=RU>Russia</option>
                                                        <option value=RW>Rwanda</option>
                                                        <option value=SA>Saudi Arabia</option>
                                                        <option value=SB>Solomon Islands</option>
                                                        <option value=SC>Seychelles</option>
                                                        <option value=SD>Sudan</option>
                                                        <option value=SE>Sweden</option>
                                                        <option value=SG>Singapore</option>
                                                        <option value=SH>Saint Helena</option>
                                                        <option value=SI>Slovenia</option>
                                                        <option value=SJ>Svalbard and Jan Mayen</option>
                                                        <option value=SK>Slovakia</option>
                                                        <option value=SL>Sierra Leone</option>
                                                        <option value=SM>San Marino</option>
                                                        <option value=SN>Senegal</option>
                                                        <option value=SO>Somalia</option>
                                                        <option value=SR>Suriname</option>
                                                        <option value=SS>South Sudan</option>
                                                        <option value=ST>São Tomé and Príncipe</option>
                                                        <option value=SV>El Salvador</option>
                                                        <option value=SX>Sint Maarten</option>
                                                        <option value=SY>Syria</option><
                                                        option value=SZ>Swaziland</option>
                                                        <option value=TC>Turks and Caicos Islands</option>
                                                        <option value=TD>Chad</option>
                                                        <option value=TF>French Southern Territories</option>
                                                        <option value=TG>Togo</option>
                                                        <option value=TH>Thailand</option>
                                                        <option value=TJ>Tajikistan</option>
                                                        <option value=TK>Tokelau</option>
                                                        <option value=TL>East Timor</option>
                                                        <option value=TM>Turkmenistan</option>
                                                        <option value=TN>Tunisia</option>
                                                        <option value=TO>Tonga</option>
                                                        <option value=TR>Turkey</option>
                                                        <option value=TT>Trinidad and Tobago</option>
                                                        <option value=TV>Tuvalu</option>
                                                        <option value=TW>Taiwan</option>
                                                        <option value=TZ>Tanzania</option>
                                                        <option value=UA>Ukraine</option>
                                                        <option value=UG>Uganda</option>
                                                        <option value=UM>U.S. Minor Outlying Islands</option>
                                                        <option value=US>United States</option>
                                                        <option value=UY>Uruguay</option>
                                                        <option value=UZ>Uzbekistan</option>
                                                        <option value=VA>Vatican City</option>
                                                        <option value=VC>Saint Vincent and the Grenadines</option>
                                                        <option value=VE>Venezuela</option>
                                                        <option value=VG>British Virgin Islands</option>
                                                        <option value=VI>U.S. Virgin Islands</option>
                                                        <option value=VN>Vietnam</option>
                                                        <option value=VU>Vanuatu</option>
                                                        <option value=WF>Wallis and Futuna</option>
                                                        <option value=WS>Samoa</option>
                                                        <option value=XK>Kosovo</option>
                                                        <option value=YE>Yemen</option>
                                                        <option value=YT>Mayotte</option>
                                                        <option value=ZA>South Africa</option>
                                                        <option value=ZM>Zambia</option>
                                                        <option value=ZW>Zimbabw</option>
													</select>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												<label class=mdl-textfield__label for=name>First Name</label> 
												<input class=mdl-textfield__input type=text id=name>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												<label class=mdl-textfield__label for=lastname>Last Name</label> 
												<input class=mdl-textfield__input type=text id=lastname>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												<label class=mdl-textfield__label for=company>Company Name</label> 
												<input class=mdl-textfield__input type=text id=company>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield mdl-textfield--full-width">
												<textarea class=mdl-textfield__input type=text rows=5 id=address></textarea> 
												<label class=mdl-textfield__label for=address>Your Address</label>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												<label class=mdl-textfield__label for=town>Town</label> 
												<input class=mdl-textfield__input type=text id=town>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												<label class=mdl-textfield__label for=postcode>Postcode</label> 
												<input class=mdl-textfield__input type=text id=postcode>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												<label class=mdl-textfield__label for=email>Email</label> 
												<input class=mdl-textfield__input type=text id=email>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												<label class=mdl-textfield__label for=phone>Phone</label> 
												<input class=mdl-textfield__input type=text id=phone>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
											<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for=create-account-check>
												<input type=checkbox id=create-account-check class=mdl-checkbox__input> 
												<span class=mdl-checkbox__label>Create Account</span>
											</label>
										</div>
										<div id=create-account-details class="mdl-cell mdl-cell--12-col">
											<p class=mdl-typography--body-2>Create an account by entering a password below. If you are a returning customer please login at the top of the page.</p>
											<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												<label class=mdl-textfield__label for=email>Account Password</label> 
												<input class=mdl-textfield__input type=password id=password>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
											<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for=shipping-address-check>
												<input type=checkbox id=shipping-address-check class=mdl-checkbox__input> 
												<span class=mdl-checkbox__label>Different shipping Address</span>
											</label>
										</div>
										<div id=shipping-address-details class="mdl-cell mdl-cell--12-col">
											<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell-4-col-phone">
												<div class="mdl-selectfield mdl-selectfield--full-width mdl-js-selectfield" tabindex=-1>
													<select name=orderby class=mdl-selectfield__select>
														<option value selected>Select Country</option>
                                                        <option value=AD>Andorra</option>
                                                        <option value=AE>United Arab Emirates</option>
                                                        <option value=AF>Afghanistan</option>
                                                        <option value=AG>Antigua and Barbuda</option>
                                                        <option value=AI>Anguilla</option>
                                                        <option value=AL>Albania</option>
                                                        <option value=AM>Armenia</option>
                                                        <option value=AO>Angola</option>
                                                        <option value=AQ>Antarctica</option>
                                                        <option value=AR>Argentina</option>
                                                        <option value=AS>American Samoa</option>
                                                        <option value=AT>Austria</option>
                                                        <option value=AU>Australia</option>
                                                        <option value=AW>Aruba</option>
                                                        <option value=AX>Åland</option>
                                                        <option value=AZ>Azerbaijan</option>
                                                        <option value=BA>Bosnia and Herzegovina</option>
                                                        <option value=BB>Barbados</option>
                                                        <option value=BD>Bangladesh</option>
                                                        <option value=BE>Belgium</option>
                                                        <option value=BF>Burkina Faso</option>
                                                        <option value=BG>Bulgaria</option>
                                                        <option value=BH>Bahrain</option>
                                                        <option value=BI>Burundi</option>
                                                        <option value=BJ>Benin</option>
                                                        <option value=BL>Saint Barthélemy</option>
                                                        <option value=BM>Bermuda</option>
                                                        <option value=BN>Brunei</option>
                                                        <option value=BO>Bolivia</option>
                                                        <option value=BQ>Bonaire</option>
                                                        <option value=BR>Brazil</option>
                                                        <option value=BS>Bahamas</option>
                                                        <option value=BT>Bhutan</option>
                                                        <option value=BV>Bouvet Island</option>
                                                        <option value=BW>Botswana</option>
                                                        <option value=BY>Belarus</option>
                                                        <option value=BZ>Belize</option>
                                                        <option value=CA>Canada</option>
                                                        <option value=CC>Cocos [Keeling] Islands</option>
                                                        <option value=CD>Democratic Republic of the Congo</option>
                                                        <option value=CF>Central African Republic</option>
                                                        <option value=CG>Republic of the Congo</option>
                                                        <option value=CH>Switzerland</option>
                                                        <option value=CI>Ivory Coast</option>
                                                        <option value=CK>Cook Islands</option>
                                                        <option value=CL>Chile</option>
                                                        <option value=CM>Cameroon</option>
                                                        <option value=CN>China</option>
                                                        <option value=CO>Colombia</option>
                                                        <option value=CR>Costa Rica</option>
                                                        <option value=CU>Cuba</option>
                                                        <option value=CV>Cape Verde</option>
                                                        <option value=CW>Curacao</option>
                                                        <option value=CX>Christmas Island</option>
                                                        <option value=CY>Cyprus</option>
                                                        <option value=CZ>Czechia</option>
                                                        <option value=DE>Germany</option>
                                                        <option value=DJ>Djibouti</option>
                                                        <option value=DK>Denmark</option>
                                                        <option value=DM>Dominica</option>
                                                        <option value=DO>Dominican Republic</option>
                                                        <option value=DZ>Algeria</option>
                                                        <option value=EC>Ecuador</option>
                                                        <option value=EE>Estonia</option>
                                                        <option value=EG>Egypt</option>
                                                        <option value=EH>Western Sahara</option>
                                                        <option value=ER>Eritrea</option>
                                                        <option value=ES>Spain</option>
                                                        <option value=ET>Ethiopia</option>
                                                        <option value=FI>Finland</option>
                                                        <option value=FJ>Fiji</option>
                                                        <option value=FK>Falkland Islands</option>
                                                        <option value=FM>Micronesia</option>
                                                        <option value=FO>Faroe Islands</option>
                                                        <option value=FR>France</option>
                                                        <option value=GA>Gabon</option>
                                                        <option value=GB>United Kingdom</option>
                                                        <option value=GD>Grenada</option>
                                                        <option value=GE>Georgia</option>
                                                        <option value=GF>French Guiana</option>
                                                        <option value=GG>Guernsey</option>
                                                        <option value=GH>Ghana</option>
                                                        <option value=GI>Gibraltar</option>
                                                        <option value=GL>Greenland</option>
                                                        <option value=GM>Gambia</option>
                                                        <option value=GN>Guinea</option>
                                                        <option value=GP>Guadeloupe</option>
                                                        <option value=GQ>Equatorial Guinea</option>
                                                        <option value=GR>Greece</option>
                                                        <option value=GS>South Georgia and the South Sandwich Islands</option>
                                                        <option value=GT>Guatemala</option>
                                                        <option value=GU>Guam</option>
                                                        <option value=GW>Guinea-Bissau</option>
                                                        <option value=GY>Guyana</option>
                                                        <option value=HK>Hong Kong</option>
                                                        <option value=HM>Heard Island and McDonald Islands</option>
                                                        <option value=HN>Honduras</option>
                                                        <option value=HR>Croatia</option>
                                                        <option value=HT>Haiti</option>
                                                        <option value=HU>Hungary</option>
                                                        <option value=ID>Indonesia</option>
                                                        <option value=IE>Ireland</option>
                                                        <option value=IL>Israel</option>
                                                        <option value=IM>Isle of Man</option>
                                                        <option value=IN>India</option>
                                                        <option value=IO>British Indian Ocean Territory</option>
                                                        <option value=IQ>Iraq</option>
                                                        <option value=IR>Iran</option>
                                                        <option value=IS>Iceland</option>
                                                        <option value=IT>Italy</option>
                                                        <option value=JE>Jersey</option>
                                                        <option value=JM>Jamaica</option>
                                                        <option value=JO>Jordan</option>
                                                        <option value=JP>Japan</option>
                                                        <option value=KE>Kenya</option>
                                                        <option value=KG>Kyrgyzstan</option>
                                                        <option value=KH>Cambodia</option>
                                                        <option value=KI>Kiribati</option>
                                                        <option value=KM>Comoros</option>
                                                        <option value=KN>Saint Kitts and Nevis</option>
                                                        <option value=KP>North Korea</option>
                                                        <option value=KR>South Korea</option>
                                                        <option value=KW>Kuwait</option>
                                                        <option value=KY>Cayman Islands</option>
                                                        <option value=KZ>Kazakhstan</option>
                                                        <option value=LA>Laos</option>
                                                        <option value=LB>Lebanon</option>
                                                        <option value=LC>Saint Lucia</option>
                                                        <option value=LI>Liechtenstein</option>
                                                        <option value=LK>Sri Lanka</option>
                                                        <option value=LR>Liberia</option>
                                                        <option value=LS>Lesotho</option>
                                                        <option value=LT>Lithuania</option>
                                                        <option value=LU>Luxembourg</option>
                                                        <option value=LV>Latvia</option>
                                                        <option value=LY>Libya</option>
                                                        <option value=MA>Morocco</option>
                                                        <option value=MC>Monaco</option>
                                                        <option value=MD>Moldova</option>
                                                        <option value=ME>Montenegro</option>
                                                        <option value=MF>Saint Martin</option>
                                                        <option value=MG>Madagascar</option>
                                                        <option value=MH>Marshall Islands</option>
                                                        <option value=MK>Macedonia</option>
                                                        <option value=ML>Mali</option>
                                                        <option value=MM>Myanmar [Burma]</option>
                                                        <option value=MN>Mongolia</option>
                                                        <option value=MO>Macao</option>
                                                        <option value=MP>Northern Mariana Islands</option>
                                                        <option value=MQ>Martinique</option>
                                                        <option value=MR>Mauritania</option>
                                                        <option value=MS>Montserrat</option>
                                                        <option value=MT>Malta</option>
                                                        <option value=MU>Mauritius</option>
                                                        <option value=MV>Maldives</option>
                                                        <option value=MW>Malawi</option>
                                                        <option value=MX>Mexico</option>
                                                        <option value=MY>Malaysia</option>
                                                        <option value=MZ>Mozambique</option>
                                                        <option value=NA>Namibia</option>
                                                        <option value=NC>New Caledonia</option>
                                                        <option value=NE>Niger</option>
                                                        <option value=NF>Norfolk Island</option>
                                                        <option value=NG>Nigeria</option>
                                                        <option value=NI>Nicaragua</option>
                                                        <option value=NL>Netherlands</option>
                                                        <option value=NO>Norway</option>
                                                        <option value=NP>Nepal</option>
                                                        <option value=NR>Nauru</option>
                                                        <option value=NU>Niue</option>
                                                        <option value=NZ>New Zealand</option>
                                                        <option value=OM>Oman</option>
                                                        <option value=PA>Panama</option>
                                                        <option value=PE>Peru</option>
                                                        <option value=PF>French Polynesia</option>
                                                        <option value=PG>Papua New Guinea</option>
                                                        <option value=PH>Philippines</option>
                                                        <option value=PK>Pakistan</option>
                                                        <option value=PL>Poland</option>
                                                        <option value=PM>Saint Pierre and Miquelon</option>
                                                        <option value=PN>Pitcairn Islands</option>
                                                        <option value=PR>Puerto Rico</option>
                                                        <option value=PS>Palestine</option>
                                                        <option value=PT>Portugal</option>
                                                        <option value=PW>Palau</option>
                                                        <option value=PY>Paraguay</option>
                                                        <option value=QA>Qatar</option>
                                                        <option value=RE>Réunion</option>
                                                        <option value=RO>Romania</option>
                                                        <option value=RS>Serbia</option>
                                                        <option value=RU>Russia</option>
                                                        <option value=RW>Rwanda</option>
                                                        <option value=SA>Saudi Arabia</option>
                                                        <option value=SB>Solomon Islands</option>
                                                        <option value=SC>Seychelles</option>
                                                        <option value=SD>Sudan</option>
                                                        <option value=SE>Sweden</option>
                                                        <option value=SG>Singapore</option>
                                                        <option value=SH>Saint Helena</option>
                                                        <option value=SI>Slovenia</option>
                                                        <option value=SJ>Svalbard and Jan Mayen</option>
                                                        <option value=SK>Slovakia</option>
                                                        <option value=SL>Sierra Leone</option>
                                                        <option value=SM>San Marino</option>
                                                        <option value=SN>Senegal</option>
                                                        <option value=SO>Somalia</option>
                                                        <option value=SR>Suriname</option>
                                                        <option value=SS>South Sudan</option>
                                                        <option value=ST>São Tomé and Príncipe</option>
                                                        <option value=SV>El Salvador</option>
                                                        <option value=SX>Sint Maarten</option>
                                                        <option value=SY>Syria</option><
                                                        option value=SZ>Swaziland</option>
                                                        <option value=TC>Turks and Caicos Islands</option>
                                                        <option value=TD>Chad</option>
                                                        <option value=TF>French Southern Territories</option>
                                                        <option value=TG>Togo</option>
                                                        <option value=TH>Thailand</option>
                                                        <option value=TJ>Tajikistan</option>
                                                        <option value=TK>Tokelau</option>
                                                        <option value=TL>East Timor</option>
                                                        <option value=TM>Turkmenistan</option>
                                                        <option value=TN>Tunisia</option>
                                                        <option value=TO>Tonga</option>
                                                        <option value=TR>Turkey</option>
                                                        <option value=TT>Trinidad and Tobago</option>
                                                        <option value=TV>Tuvalu</option>
                                                        <option value=TW>Taiwan</option>
                                                        <option value=TZ>Tanzania</option>
                                                        <option value=UA>Ukraine</option>
                                                        <option value=UG>Uganda</option>
                                                        <option value=UM>U.S. Minor Outlying Islands</option>
                                                        <option value=US>United States</option>
                                                        <option value=UY>Uruguay</option>
                                                        <option value=UZ>Uzbekistan</option>
                                                        <option value=VA>Vatican City</option>
                                                        <option value=VC>Saint Vincent and the Grenadines</option>
                                                        <option value=VE>Venezuela</option>
                                                        <option value=VG>British Virgin Islands</option>
                                                        <option value=VI>U.S. Virgin Islands</option>
                                                        <option value=VN>Vietnam</option>
                                                        <option value=VU>Vanuatu</option>
                                                        <option value=WF>Wallis and Futuna</option>
                                                        <option value=WS>Samoa</option>
                                                        <option value=XK>Kosovo</option>
                                                        <option value=YE>Yemen</option>
                                                        <option value=YT>Mayotte</option>
                                                        <option value=ZA>South Africa</option>
                                                        <option value=ZM>Zambia</option>
                                                        <option value=ZW>Zimbabw</option>
													</select>
												</div>
											</div>
											<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
												<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
													<label class=mdl-textfield__label for=name>First Name</label> 
													<input class=mdl-textfield__input type=text id=name>
												</div>
											</div>
											<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
												<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
													<label class=mdl-textfield__label for=lastname>Last Name</label> 
													<input class=mdl-textfield__input type=text id=lastname>
												</div>
											</div>
											<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell-4-col-phone">
												<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
													<label class=mdl-textfield__label for=company>Company Name</label> 
													<input class=mdl-textfield__input type=text id=company>
												</div>
											</div>
											<div class="mdl-cell mdl-cell--12-col">
												<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield mdl-textfield--full-width">
													<textarea class=mdl-textfield__input type=text rows=5 id=address></textarea> 
													<label class=mdl-textfield__label for=address>Your Address</label>
												</div>
											</div>
											<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
												<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
													<label class=mdl-textfield__label for=town>Town</label> 
													<input class=mdl-textfield__input type=text id=town>
												</div>
											</div>
											<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
												<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
													<label class=mdl-textfield__label for=postcode>Postcode</label> 
													<input class=mdl-textfield__input type=text id=postcode>
												</div>
											</div>
											<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
												<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
													<label class=mdl-textfield__label for=email>Email</label> 
													<input class=mdl-textfield__input type=text id=email>
												</div>
											</div>
											<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
												<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
													<label class=mdl-textfield__label for=phone>Phone</label> 
													<input class=mdl-textfield__input type=text id=phone>
												</div>
											</div>
										</div>
									</div>
									<div class="mdl-grid mdl-cell mdl-cell--1-col"></div>
									<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
										<div class="mdl-card mdl-card mdl-shadow--2dp hb-card-order hb-margin-bottom-40">
											<div class=mdl-card__title><h2 class=mdl-card__title-text>Your Order</h2></div>
											<div class="hb-card-order__summary hb-data-table">
												<table class="mdl-data-table mdl-js-data-table hb-full-width hb-card-order__summary-table"><thead><tr><th>Product</th><th>Total</th></tr></thead><tbody><tr><td>White Top <strong>x 2</strong></td><td>$12.90</td></tr><tr><td>Red Green Dress <strong>x 1</strong></td><td>$17.25</td></tr><tr><td>Red striped top <strong>x 2</strong></td><td>$77.99</td></tr><tr><td>Blue suede <strong>x 2</strong></td><td>$52.88</td></tr><tr><td>Funky hat <strong>x 1</strong></td><td>$88.00</td></tr></tbody><tfoot><tr><td>Subtotal</td><td>$218.87</td></tr><tr><td>Shipping</td><td>Free</td></tr><tr><td>Total</td><td>$218.87</td></tr></tfoot></table>
												<div class=mdl-card__supporting-text>
													<h2 class="mdl-typography--title mdl-typography--font-light">Payment methods</h2>
													<p>
														<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for=bank-transfer>
															<input type=radio id=bank-transfer class=mdl-radio__button name=options value=bank-transfer checked> 
															<span class=mdl-radio__label>Bank Transfer</span>
														</label>
													</p>
													<p>
														<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for=credit-card>
															<input type=radio id=credit-card class=mdl-radio__button name=options value=credit-card> 
															<span class=mdl-radio__label>Credit Card</span>
														</label>
													</p>
													<p>
														<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for=pay-pal>
															<input type=radio id=pay-pal class=mdl-radio__button name=options value=pay-pal>
															<span class=mdl-radio__label>PayPal</span>
														</label>
													</p>
												</div>
											</div>
											<div class="mdl-card__actions mdl-card--border mdl-typography--text-right">
												<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Place Order</a>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class=hb-section>
						<div class=hb-section__content>
							<div class="mdl-grid mdl-grid--no-fullwidth">
								<div class="mdl-cell mdl-cell--12-col">
									<h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light hb-margin-top-40 hb-margin-bottom-20">Related Products</h2>
									<div class="hb-divider hb-divider--center">
										<div class=hb-divider__border></div>
									</div>
								</div>
							</div>
							<div class="mdl-grid mdl-grid--no-fullwidth">
								<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone hb-margin-bottom-40">
									<div class="mdl-card mdl-shadow--2dp hb-card-product">
										<div class="mdl-card__media hb-card-product__media">
											<a href=single-product>
												<img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-10-a-big-notinclude.jpg') }}"> 
												<img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-10-b-big-notinclude.jpg') }}">
											</a>
											<div class="mdl-card__title hb-card-product__title">
												<h3 class="mdl-card__title-text hb-card-product__title-text">
													<a href=single-product class=mdl-typography--font-light>White Hat</a>
												</h3>
												<span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-product__tags">
													<a href=shop rel=tag>Women</a>, 
													<a href=shop rel=tag>Hats</a>
												</span>
												<div class="hb-rating hb-card-product__rating hb-card-product__rating--animated" title="Rated 4.00 out of 5">
													<span style=width:80%><strong class=hb-rating__stars>4.00</strong> out of 5</span>
												</div>
											</div>
											<div class="hb-card-product__badge hb-product-badge">Sale</div>
										</div>
										<div class="mdl-card__actions hb-card-product-actions">
											<strong class="mdl-typography--headline hb-product-price"><del><span>£42</span></del><ins><span>£16</span></ins></strong>
											<button class="hb-button-add-product hb-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
												<i class=material-icons>add_shopping_cart</i>
											</button>
										</div>
									</div>
								</div>
								<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
									<div class="mdl-card mdl-shadow--2dp hb-card-product">
										<div class="mdl-card__media hb-card-product__media">
											<a href=single-product>
												<img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-2-a-big-notinclude.jpg') }}"> 
												<img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-2-b-big-notinclude.jpg') }}">
											</a>
											<div class="mdl-card__title hb-card-product__title">
												<h3 class="mdl-card__title-text hb-card-product__title-text">
													<a href=single-product class=mdl-typography--font-light>Bright Blue Sleeveless Dress</a>
												</h3>
												<span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-product__tags">
													<a href=shop rel=tag>Women</a>, <a href=shop rel=tag>Dresses</a>
												</span>
												<div class="hb-rating hb-card-product__rating hb-card-product__rating--animated" title="Rated 3.00 out of 5">
													<span style=width:60%><strong class=hb-rating__stars>3.00</strong> out of 5</span>
												</div>
											</div>
											<div class="hb-card-product__badge hb-product-badge">Sale</div>
										</div>
										<div class="mdl-card__actions hb-card-product-actions">
											<strong class="mdl-typography--headline hb-product-price">
												<del><span>£32</span></del>
												<ins><span>£18</span></ins>
											</strong>
											<button class="hb-button-add-product hb-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
												<i class=material-icons>add_shopping_cart</i>
											</button>
										</div>
									</div>
								</div>
								<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
									<div class="mdl-card mdl-shadow--2dp hb-card-product">
										<div class="mdl-card__media hb-card-product__media">
											<a href=single-product>
												<img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-3-a-big-notinclude.jpg') }}"> 
												<img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-3-b-big-notinclude.jpg') }}">
											</a>
											<div class="mdl-card__title hb-card-product__title">
												<h3 class="mdl-card__title-text hb-card-product__title-text">
													<a href=single-product class=mdl-typography--font-light>Two-Tone Tailored Jacket</a>
												</h3>
												<span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-product__tags">
													<a href=shop rel=tag>Jackets</a>
												</span>
												<div class="hb-rating hb-card-product__rating hb-card-product__rating--animated" title="Rated 4.00 out of 5">
													<span style=width:80%><strong class=hb-rating__stars>4.00</strong> out of 5</span>
												</div>
											</div>
										</div>
										<div class="mdl-card__actions hb-card-product-actions">
											<strong class="mdl-typography--headline hb-product-price">
												<del><span>£22</span></del>
												<ins><span>£14</span></ins>
											</strong> 
											<button class="hb-button-add-product hb-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
												<i class=material-icons>add_shopping_cart</i>
											</button>
										</div>
									</div>
								</div>
								<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
									<div class="mdl-card mdl-shadow--2dp hb-card-product">
										<div class="mdl-card__media hb-card-product__media">
											<a href=single-product>
												<img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-24-a-big-notinclude.jpg') }}"> 
												<img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-24-b-big-notinclude.jpg') }}">
											</a>
											<div class="mdl-card__title hb-card-product__title">
												<h3 class="mdl-card__title-text hb-card-product__title-text">
													<a href=single-product class=mdl-typography--font-light>Printed One-Piece Swimsuit</a>
												</h3>
												<span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-product__tags">
													<a href=shop rel=tag>Swimsuits</a>, <a href=shop rel=tag>Womens</a>
												</span>
												<div class="hb-rating hb-card-product__rating hb-card-product__rating--animated" title="Rated 5.00 out of 5">
													<span style=width:100%><strong class=hb-rating__stars>5.00</strong> out of 5</span>
												</div>
											</div>
											<div class="hb-card-product__badge hb-product-badge">Sale</div>
										</div>
										<div class="mdl-card__actions hb-card-product-actions">
											<strong class="mdl-typography--headline hb-product-price"><del><span>£29</span></del><ins><span>£19</span></ins></strong> 
											<button class="hb-button-add-product hb-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
												<i class=material-icons>add_shopping_cart</i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class=hb-section>
						<div class="hb-section__background hb-section__background--bottom-align hb-background-parallax">
							<img src="{{ asset('images/backgrounds/bg26-notinclude.jpg') }}" alt="section background">
						</div>
						<div class="hb-section__overlay hb-section__overlay--color-30"></div>
						<div class=hb-section__content>
							<div class="mdl-grid mdl-grid--no-fullwidth">
								<div class="mdl-cell mdl-cell--12-col">
									<h2 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-80 hb-margin-bottom-20">
										Never Miss An Offer
									</h2>
								</div>
							</div>
							<form action=# class="hb-margin-bottom-80 hb-color-light">
								<div class="mdl-grid mdl-grid--no-fullwidth">
									<div class="mdl-cell mdl-cell--3-col">
										<div class="mdl-textfield mdl-js-textfield textfield-demo mdl-textfield--floating-label">
											<label class=mdl-textfield__label for=signup-name>Your name</label> 
											<input class=mdl-textfield__input type=text id=signup-name>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--3-col">
										<div class="mdl-textfield mdl-js-textfield textfield-demo mdl-textfield--floating-label">
											<label class=mdl-textfield__label for=signup-email>Your email</label> 
											<input class=mdl-textfield__input type=text id=signup-email>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--6-col mdl-cell--middle">
										<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent hb-margin-bottom-10">Sign Up</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					@include('/include/footer')
				</main>
			</div>
			@include('/include/sidecart')
		</body>
	</html>