    ﻿    <div id="page" class="contacts">
        <div class="main_img" style="background-image: url('img/contact/simpl2.jpg')
        "></div>
        <div class="in">
		
            <div class="section main_section" id="contactsSection_1">
                <div class="main_block">
                    <h1>Contact</h1>
                    <div class="article">
                        <h2>Contact us by Phone:</h2>
                        <p>+381 65 511 11 61<br />
						+381 11 408 56 92</p> 
                        <h2>Email:</h2>
                        <p><a href="mailto:info@simpladent.ch">info@simpladent.rs</a></p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="section" id="contactsSection_2">
                <div class="article">
                    <h2>Our Offices:</h2>
                    <!--<p>The administration of each clinic partner allows the placement of patients from other cities and countries.</p>-->
                </div>
                <div class="clear"></div>
                <div class="contactsMapBlock">
                    <script type="text/javascript">
                        //var addressList = { 4: ['<table><tr><td><img src="/img/contact/clinics/dent32/logo.png" height="100" /></td><td><p>Dent 32<br /> Desanke Maksimovic br. 4/2<br />Belgrade</p><p>Serbia</p><strong><a href="javascript: openContact(\'Beograd\')">KONTAKT</a></strong></td></tr></table>' ]              }
                    </script>
					
					
                        <div id="cities_list">
                            <!--  в аттрибут data-coords записываются координаты с google maps -->
                            <ul>
								<a href="/?page=clinic&c=dent32&i=10">
									<li data-clinic="dent32" data-id="4" data-coords="49.920000, 29.4500000">Belgrade / Serbia</li>
								</a>
                             </ul>
                        </div>
						
					<div class="contactssection_2_left">
						
					</div>								
					
                    <div id="mapBlock">
                        <div id="map"></div>
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