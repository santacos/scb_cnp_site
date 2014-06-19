<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '261228864061099',
            'client_secret' => '4c251316edbd016ab7958bdad65d88ba',
            'scope'         => array('email','read_friendlists','user_online_presence'),
        ),		

	)

);