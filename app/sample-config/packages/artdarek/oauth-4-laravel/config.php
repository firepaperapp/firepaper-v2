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
            'client_id'     => '',
            'client_secret' => '',
            'scope'         => array('email','read_friendlists','user_online_presence'),
        ),		
        'Google' => array(
    		'client_id'     => '',
    		'client_secret' => '',
    		'scope'         => array('userinfo_email', 'userinfo_profile'),
		), 
		

	)

);