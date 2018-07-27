<?php 
	$clinic = filter_input(INPUT_GET, 'c');
	$file = "./includes/clinics/$clinic.xml";
	if(is_file($file)){
		  $clElements = simplexml_load_file($file);	

	//var_dump($clElements->einleitung);
?>


<div id="page" class="about">
<div class="main_img" style="background-image: url('img/img10.jpg')"></div>
<div class="in">
<div class="section main_section" id="aboutSection_1">
    <div class="author">
        <div class="img">
            <img src="/img/contact/clinics/<?php echo $clinic; ?>/logo.png" alt=""/>
        </div>
        <div class="article">
            <blockquote><?php echo $clElements->einleitung->$language ;?></blockquote>
        </div>
    </div>
    <div class="main_block">
        <h1><?php echo $clElements->name; ?></h1>
        <div class="article">
            <p>
			<?php
				foreach($clElements->team->doctors->doc as $doc)
				{ 			
					echo $doc->name."<br />";			
				} 
				echo $elements->clinic->addr;			
			?>
			</p>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="section" id="aboutSection_2">
    <div class="img">
        <img src="img/about/img13.jpg" alt="" />
    </div>
    <div class="article">
        <h2>Sta Vam možemo ponuditi?</h2>
        <p>Naš tretman koncipiran je tako da reši sve Vaše probleme odjednom, zube koji nedostaju, nesposobnost da normalno jedete I smejete se, periodontalne probleme (upale desni i mobilnost zuba), endodontske probleme (granulome I ciste), kao i probleme sa teško pokvarenim ili rekonstruisanim zubima.</p>
      
        <p>Obicno pristupamo rešavanju svih problema u jednom koraku. Vadenje zuba I ugradnja implantata se obavljaju u jednoj poseti I odmah nakon toga naš labaratorijski tim pocinje da radi na Vašim novim zubima. Kako bi se izbegli problemi u buducnosti, odstranjuju se takode zubi sa bolom i zubi za koje postoji velika verovatnoca da bi mogli da uzrokuju probleme u periodu od narednih 5 godina, te se zamenjuju implantatima.</p>
        <p>Naše iskustvo steceno hiljadama implantoloških operacija jasno pokazuje da su implantati kod odraslih pacijenata mnogo pouzdaniji od njihovih vlastitih zuba.</p>
    </div>
    <div class="clear"></div>
</div>    

    <div class="section" id="aboutSection_5">
        <h1>PREGLED</h1>
        <div class="slider" data-row="1">
            <a href="#" class="left_arr"></a>
            <a href="#" class="right_arr"></a>
            <ul class="clearfix slider_list">
                                    <li>
                        <div class="reviews_list">
                                                                                                <div class="review">
                                        <div class="auth">
                                            <div class="img">
                                                <img src="img/about/80x80/1401196441463016508.png" alt="" />
                                            </div>
                                            <div class="text">
                                                <div class="name">Dieter</div>
                                                <div class="desc">Minhen</div>
                                            </div>
                                        </div>
                                        <div class="review_text">
                                            <div class="article">
                                                <blockquote>Moj stomatolog je bio impresioniran kada je video rezultate mog tretmana. To je bila novina za njega i on nije želeo da zna ništa o tome, jer vec godinama radi samo sa konvencionalnim sistemima implantata. Prošlo je 15 godina kako sam dobio nove zube i mogu sve da jedem. Sada, posle toliko vremena, zamenicu mostove na implantatima.</blockquote>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                                                                                                                <div class="review">
                                        <div class="auth">
                                            <div class="img">
                                                <img src="img/about/80x80/1401196379237642723.png" alt="" />
                                            </div>
                                            <div class="text">
                                                <div class="name">Petra</div>
                                                <div class="desc">Frankfurt</div>
                                            </div>
                                        </div>
                                        <div class="review_text">
                                            <div class="article">
                                                <blockquote>Vrlo sam društvena osoba I bavim se poslom koji od mene zahteva da mnogo govorim, a to mi je predstavljalo veliki problem. Ponudeno mi je mnogo razlicitih tretmana, ali svi su mi se cinili tako bolni I zastrašujuci da nisam bila spremna pristati ni na jedan od njih. Hvala Vam puno Dr.Ihde,velika je sreca imati novi osmeh,a Vi ste mi omogucili to zadovoljstvo. Dajete ljudima novi život.</blockquote>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                                                                                                                <div class="review">
                                        <div class="auth">
                                            <div class="img">
                                                <img src="img/about/80x80/1401196315993169681.png" alt="" />
                                            </div>
                                            <div class="text">
                                                <div class="name">Andrej</div>
                                                <div class="desc">Moskva</div>
                                            </div>
                                        </div>
                                        <div class="review_text">
                                            <div class="article">
                                                <blockquote>Sve vreme trajanja mog tretmana, osim vrhunskog estetskog zadovoljstva, bio sam svedok rada pravih profesionalaca.</blockquote>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                                                                    </div>
                    </li>
                            </ul>
        </div>
    </div>
    </div>


</div>


<?php 
	
	}else {
		
		 echo __file__;
		 echo "<br />";
		 echo __dir__;
		 //echo "Mich gibts nicht: ./includes/clinics/$clinic.xml";
	}


?>

