    ﻿    <div id="page" class="contacts">
        <div class="main_img" style="background-image: url('img/contact/simpl2.jpg')
        "></div>
        <div class="in">

            <div class="section main_section" id="contactsSection_1">
                <div class="main_block">
                    <h1>Kontakt</h1>
                    <div class="article">
                        <h2>Telefonische Anfragen</h2>
                        <p>+381 65 511 11 61<br />
						+381 11 408 56 92</p> 
                        <h2>Email:</h2>
                        <p><a href="mailto:info@simpladent.ch">info@simpladent.rs</a></p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

			<div id="contactsSection_1"><!--TEST-->
			
			</div>
			
            <div class="section" id="contactsSection_2">
                <div class="article">
                    <h2>Unsere Kliniken:</h2>
                    <!--<p>Die Verwaltung der einzelnen Klinik-Partner ermöglicht die Platzierung von Patienten aus anderen Städten und Ländern.</p>-->
                </div>

				
                <div class="clear"></div>
                <div class="contactsMapBlock">
                    <script type="text/javascript">
                        //var addressList = { 4: ['<table><tr><td><img src="/img/contact/clinics/dent32/logo.png" height="100" /></td><td><p>Dent 32<br /> Desanke Maksimovic br. 4/2<br />Belgrad</p><p>Serbien</p><strong><a href="javascript: openContact(\'Beograd\')">KONTAKT</a></strong></td></tr></table>' ]              }
                    </script>
					
					
                        <div id="cities_list">
                            <!--  в аттрибут data-coords записываются координаты с google maps -->
                            <ul>
								<a href="/?page=clinic&c=dent32&i=10"><li data-clinic="dent32" data-id="4" data-coords="49.920000, 29.4500000">Belgrad / Serbien</li></a>
                                        <!--<li data-id="4" data-coords="46.257460, 27.0033098">Budva Region</li>-->
                             </ul>
                        </div>	
						
					<div class="contactssection_2_left">
						<img src="img/contact/petra_mehrlein.png" height="300" alt="Frau Petra Mehrlein" />
						<br />
						<p><strong>Frau Petra Mehrlein</strong></p>
						<p>Koordination für Anfragen auf Deutsch.</p>
						<br />
						<p><strong>Mobil Tel.:</strong> +49 (0) 152 287 48 223</p>
					</div>										
                    <div id="mapBlock">
                        <div id="map"></div>
					</div>
					<br />
					<br />
					<br />
					<div class="contactworldmap">
						<br />
						<br />
						<p>Sehen Sie alle Kliniken auf der <a href="http://simpladent-implant.solutions/?page=map&i=5" target="_blank">Weltkarte</a></p>
					</div>
					
					
                                        <div class="clear"></div>
                    <div class="clearfix" id="addresses_list"></div>
                    <div class="clear"></div>
                </div>
				
				
				
                    <div id="contactForm" title="Simpladent">
                        <form method="post" id="contact">
                            <table>
                                <tr>
                                    <td><?php echo $elements->contact->name ; ?></td>
                                    <td><input type="text" name="name" /> </td>
                                </tr>
                                <tr>
                                    <td><?php echo $elements->contact->number ; ?></td>
                                    <td><input type="text" name="phone" /></td>
                                </tr>
                                <tr>
                                    <td><?php echo $elements->contact->mail ; ?></td>
                                    <td><input type="text" name="mail" /></td>
                                </tr>
                                <tr>
                                    <td><?php echo $elements->appointments->comment ; ?></td>
                                    <td><textarea name="comment" style="width: 203px;"></textarea></td>
                                </tr>
                                <tr>
                                    <input type="text" name="customerID" id="customerID"/>
                                    <input type="hidden" name="city" id="city" value="none"/>
                                    <td colspan="2" align="right"><input type="submit" value="<?php echo $elements->contact->send ; ?>" /></td>
                                </tr>
                            </table>
                            
                        </form>
                    </div>

            </div>
        </div>


    </div>