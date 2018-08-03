<?php @session_start();
  $appointment = true;
  require_once('../recaptcha/recaptchalib.php');
  require_once('../init.php');
  
  // $clinic = filter_input(INPUT_POST, 'city');
  $clinic = 'dent32';
  $bot = filter_input(INPUT_POST, 'CustomerID');
  //if(strpos('.', $clinic) || strpos('/', $clinic)){
	  // Display Errror
	  // 403 forbiddon
  //} else {
	  $file = $_SERVER['DOCUMENT_ROOT'].'/includes/clinics/'.$clinic.'.xml';
	  if(is_file($file)){
		$clElements = simplexml_load_file($file);
		//print($_POST['city']);
	  }
	  
	  // Check if a blind bot has filled out the Form
	  if(strlen($bot)){
		  echo "bot detected!";
		  header('HTTP/1.0 403 Forbidden');
		  
	  } else {
		  
		  $name = filter_input(INPUT_POST, 'name');
		  $phone = filter_input(INPUT_POST, 'phone');
		  $mail = filter_input(INPUT_POST, 'mail');
		  $msg = filter_input(INPUT_POST, 'comment');
		  $city = filter_input(INPUT_POST, 'city');
		
		  // Construck Mail Header
			  //$cc = "CC: $clElements->name <" . $clElements->address->email . ">; ";
			  //$cc = "CC: ". $clElements->address->email;
			  $header = 'From: websurvey@simpladent.ch' . "\r\n";
			  //$header .= $cc;
		  
		  
		  // Evaluate Data to see if legit
		  // Check name length
		  if(strlen($name)){
			  
			  // Check Length of phone number
			  if(strlen($phone)){
				  
				  // Check if mail has @ symbil
				  if(strlen($mail) && strpos($mail, '@')){
					$msgs =  "Type: General \nName: $name \nPhone: $phone \nE-Mail: $mail \nCity: $city \nLanguage: $language \nMessage: $msg";
					// All good, Sned Mail and positive response!
					mail('info@simpladent.ch;', 'Simpladent Customer ' . $_SERVER['HTTP_HOST'],$msgs,$header);
					mail($clElements->address->email,'Simpladent Customer ' . $_SERVER['HTTP_HOST'], $msgs, $header );
					//mail('mathias.wehling@implant.com;', 'Simpladent Customer ' . $_SERVER['HTTP_HOST'],$msgs,$header);
					// mail('info@simpladent.rs;','Simpladent Customer ' . $_SERVER['HTTP_HOST'], $msgs, $header );
					echo $elements->appointments->getBack;
				  }else {
					echo "E-Mail is invalid";
					header('HTTP/1.0 403 Forbidden');
					  
				  }
			  } else {
				echo "Please fill in your Phone Number";
				header('HTTP/1.0 403 Forbidden');
			  }
		  }else {
				echo "Please fill in your Name";
				header('HTTP/1.0 403 Forbidden');
			  
		  }
	  }
 // }
?>




