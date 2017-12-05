<?php

header('Content-type: text/plain; charset=utf-8');

$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = 'cool.ksandr2013@gmail.com';
$password = 'doyouwannabelikeme1';

$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());

$emails = imap_search($inbox,'UNSEEN');

if($emails) {
	
	/* begin output var */
	$output = '';
	
	/* for every email... */
	foreach($emails as $email_number) {
		
		/* get information specific to this email */
		$overview = imap_fetch_overview($inbox,$email_number,0);
		$message = imap_body($inbox,$email_number);
		$dom = new DOMDocument();
		$dom->loadHTML($message);
		$tags = $dom->getElementsByTagsName('span');
		foreach ($tags as $tag) {
    		echo $tag->nodeValue, PHP_EOL;
		}
		die();
		/* output the email header information */
		// $output.= '<div class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
		// $output.= 'Subject: '.$overview[0]->subject;
		$subject = explode(' ', $overview[0]->subject);
		// die(var_dump($orderId));
		$orderId = $subject[6];
		$output.= 'Order ID: '.$orderId;
		$output.= '<br />';
		$MageIDpos = strrpos($message, 'MAG');
		$MageID = substr($message, $MageIDpos);
		$output.=$MageID;
		// $output.= '<span class="from">'.$overview[0]->from.'</span>';
		// $output.= '<span class="date">on '.$overview[0]->date.'</span>';
		// $output.= '</div>';
		
		/* output the email body */
		// $output.= '<div class="body">'.$message.'</div>';
	}
	
	echo $output;
} 

/* close the connection */
imap_close($inbox);

// $imap = imap_open("{imap.gmail.com:993/imap/ssl}INBOX", "cool.ksandr2013@gmail.com", "doyouwannabelikeme1");

// // $status = imap_status($imap, "{imap.gmail.com:993/imap/ssl}INBOX", SA_ALL);

// $check = imap_check($imap);

// // Fetch an overview for all messages in INBOX
// $result = imap_fetch_overview($imap,"1:15",0);
// foreach ($result as $overview) {
//     echo "#{$overview->msgno} ({$overview->date}) - From: {$overview->from}
//     {$overview->subject}\n";
// }
// imap_close($imap);

// echo $check->;
// if($status->unseen){
// 	echo $status->unseen;
// }
// echo $status->messages;
// die(var_dump($check));
?>
