<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '60569c91d2f78431727e06c73217c99c';
$access_token  = 'GvVbsxwUB2rmY6pVXPplkHrb7UD+UjsN1VSbpuZLFgNRiFr82ObKlKda/9HpCm146Ay/ekPpm/xAMtJwSwFAuC2+LepcVxezOTjONjWOHjOtQEs59l/VEpDwh8nKf99tenIkzgIEX1eOgHbbxr0s4QdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
