<? ob_start(); ?> <?php 

	$userEmail = $_POST["userEmail"];
	$to = "admin@yeahnah.tv";
	$subject = "User Email";
	$message = "{$userEmail}" ;
				
	mail($to, $subject, $message); 
	
	$url = "redirect1.html"; 	
	header( "Location: $url" );

	?>

<? ob_flush(); ?>
