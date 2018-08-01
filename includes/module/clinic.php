<?php 
	$clinic = filter_input(INPUT_GET, 'c');
	$file = './includes/clinics/'.$clinic.'.xml';
	if(is_file($file)){
		$clElements = simplexml_load_file($file);
		
?>

<?PHP
//************************* Functions *********************************



//*********************************************************************
//******** Function um Elemente der XML Liste auszugeben **************
//************* Aufgerufen wird nur das Hauptelement ******************
//****** -> input_data($language, $elements, $clElements->team); ******
//*********************************************************************
function input_data($language,$elements, $clElements)
{
	
	$header_slang=$clElements->getName();
	echo('<div class="Headline">'.$elements->slang->$header_slang.'</div><br />');

	foreach($clElements->children() as $subheader_title)
	{
		$subheader_title_slang=$subheader_title->getName();
		
		//$subheader_title_child=$subheader_title->children()->getName();
		
		//***********************************************************************************
		//*** zum prüfen ob count in einem header_element subelemente leer oder voll sind ***
		//********* wenn alle elemente leer sind wird komplette Gruppe ausgeblendet *********
		//***********************************************************************************
		$check=0; //Temp Variable
		foreach($subheader_title->children() as $subheader_title_child)
		{
			if($subheader_title_child -> name -> $language != '' || $subheader_title_child -> image != '')
			{
				$check+=1;
			}
		}
		
		if($check>0)
		{		
			echo('<div class="subheader_area">' . $elements->slang->$subheader_title_slang . '</div>');		
		
			foreach($subheader_title->children() as $person_title)
			{
				if($person_title->name->$language != '' || $person_title->image != '') //nur ausführen wenn bildname oder image nicht leer sind
				{
					//***********************************************************************************************
					// *** Wenn in der Ausgabe kein bild eingebunden ist -> clear:both damit text in die nächste zeile fällt
					//***********************************************************************************************
					/*if($person_title->image == '')
					{
						echo('<div class="clear"></div>');
					}*/
					
					
					echo('<div class="person_master_div">'); // Master Div umschliesst komplett jedes Element
					
					//***********************************************************************************************
					//*** Wenn ein Bild beim Element enthalten ist dann erstelle Bildbox mit integriertem Namensfeld
					//*** Wenn nicht dann erstelle nur das Namensfeld
					//***********************************************************************************************
					if($person_title->image != '')
					{
						echo('<a href="' . $person_title->image . '" class="picturepopup"><div class="pic_image" style="background-image:url(' . $person_title->image . ')">');	
						if($person_title->name->$language != '')
						{
							echo('<div class="pic_name">'.$person_title->name->$language . '</div>');					
						}
						echo('</div></a>');
					}
					else
					{	
						echo('<div class="nopic_name">'.$person_title->name->$language . '</div>');
					}
					//***********************************************************************************************
					//*** Gibt es beim Element einen website eintrag dann wird ein Link unter dem Bild/Name erstellt
					//***********************************************************************************************
					if($person_title->website != '')
					{
						echo('<a href="' . $person_title->website . '" target="_blank"><div class="website_link_box">' . $elements->slang->website . '</div></a>');
					}
					echo('</div>');
				}
			}
			echo('<div class="clear"></div>');
		}
	}
}
?>	



<div id="page" class="about">
	<div class="main_img" style="background-image: url('img/img10.jpg')"></div>
	<div class="in">
		<div class="section main_section" id="clinicSection_1">
			
			<?PHP
				$pic_path='./img/contact/clinics/' . $clinic . '/logo.png';			
				if( file_exists($pic_path) || $clElements->einleitung->$language != '' )
				{
			?>
			<div class="author">
				<div class="img"style="background-color:white;">
					<?PHP
						if(file_exists($pic_path))
						{
							echo( '<img src="' . $pic_path . '" alt="" background-color:white;" />' );
						}

						if($clElements->einleitung->$language != '')
						{
							echo('<div class="article">');
							echo('<blockquote>'.$clElements->einleitung->$language.'</blockquote> </div>');
						}
					?>					
					
				</div>
			</div>
			<?PHP	} ?>	
			
			<div class="main_block">
				<h1><?php echo $clElements->name; ?></h1>
				<br />
				<div class="article">
					<p>
					<?php
								
					function adressdaten_ausgabe($language,$clElements, $elements)
					{
						foreach($clElements->children() as $child_name => $child_value)
						{
							//print_r($child_value);echo('<br />');
							if(isset($elements->slang->$child_name) && strval($child_value) != '' )
							{
								echo('<h3>' . $elements->slang->$child_name . '</h3>');
							}
							else
							{
								if(isset($child_value->$language) && $child_value->$language != '')
								{								
									echo($child_value->$language . '<br />');
								}								
							}
							
							
							if(strval($child_value) != '')
							{
								echo(strval($child_value));
							}
						}				
					}					
					adressdaten_ausgabe($language,$clElements->address,$elements);

					
						/*echo $clElements->address->name->$language."<br />";
						echo $clElements->address->street->$language."<br />";
						echo $clElements->address->town->$language."<br />";
						echo $clElements->address->land->$language."<br />";
						echo('<h3>'.$elements->slang->phone.'</h3>');
							foreach($clElements->address->phone as $phone)
							{
								echo($phone.'<br />');
							}				
						if ($clElements->address->email != '')
						{
							echo('<h3>'.$elements->slang->email.'</h3>'.$clElements->address->email.'<br />');							
						}
						echo('<h3>'.$elements->slang->homepage.'</h3>');
							foreach($clElements->address->homepage as $hpage)
							{
								echo("<a href='$hpage' target='_blank'>$hpage</a>");
							}*/
							// var_dump($elements);die;
					?>
					</p><form method="post" id="contact">
                        <br />
                        <h2><?php echo $elements->appointments->title; ?></h2>
                        <table>
							<div class="form-group">
                                <label><?php echo $elements->contact->name ; ?></label>
                                <input class="form-control" type="text" name="name" />
                            </div>
                            <div class="form-group">
                                <label><?php echo $elements->contact->number ; ?></label>
                                <input class="form-control" type="text" name="phone" />
                            </div>
                            <div class="form-group">
                                <label><?php echo $elements->contact->mail ; ?></label>
                                <input class="form-control" type="text" name="mail" />
                            </div>
                            <div class="form-group">
                                <label><?php echo $elements->appointments->comment ; ?></label>
                                <textarea class="form-control" name="comment"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" name="customerID" id="customerID"/>
                                <input type="hidden" name="city" id="city" value="<?php $clinic?>"/>
                                <input class="btn btn-primary" type="submit" value="<?php echo $elements->contact->send ; ?>" />
                            </div>
                        </table>
                        </form>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div class="section" id="clinicSection_2">
			<?PHP
				input_data($language, $elements, $clElements->team);
				echo('<br /><br /><br /><br />');
				input_data($language, $elements, $clElements->clinic);
				echo('<br /><br /><br /><br />');
				input_data($language, $elements, $clElements->additional);
			?>
			
			
		</div>
	<div class="section" id="aboutSection_5"></div>
	</div>
</div>

<?php 	
	}else {
		
		 echo("Error <br />");
		 echo __file__;
		 echo "<br />";
		 echo __dir__;
		 //echo "Mich gibts nicht: ./includes/clinics/$clinic.xml";
	}
?>

