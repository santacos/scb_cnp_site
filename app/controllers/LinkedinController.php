<?php
class LinkedinController extends \BaseController {


 	  public function __construct(Hybrid_Auth $hybridAuth)
    {
        $this->hybridAuth = $hybridAuth;
    }
    public function login($action='')
    {
 		if ( $action == "auth" ) {
		      try {
		         Hybrid_Endpoint::process();
		      }
		      catch ( Exception $e ) {
		         echo "Error at Hybrid_Endpoint process (LinkedinController@login): $e";
		      }
		      return;
   		}
   		// Authenticate with Steam (using the details from our IoC Container).
		 $socialAuth = new Hybrid_Auth(app_path() . '/config/hybridauth.php');
        // authenticate with Linkedin
        $provider = $socialAuth->authenticate("Linkedin");
        // fetch user profile
        $userProfile = $provider->getUserProfile();
		 
		echo "Connected with: <b>{$provider->id}</b><br />";
	    echo "As: <b>{$userProfile->displayName}</b><br />";
	    echo "<pre>" . print_r( $userProfile, true ) . "</pre><br />";
    }
 
    public function logout()
    {
 		$this->hybridAuth->logoutAllProviders();
    }
}