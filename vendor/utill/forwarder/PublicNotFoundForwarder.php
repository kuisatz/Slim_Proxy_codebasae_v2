<?php
/**
 *  Framework 
 *
 * @link       
 * @copyright Copyright (c) 2017
 * @license   
 */
namespace Utill\Forwarder;

/**
 * public key  control and redirection if necessary
 * @author Okan CIRAN
 */
class PublicNotFoundForwarder extends \Utill\Forwarder\AbstractForwarder {
    
    /**
     * constructor
     */
    public function __construct() {

    }
    
    /**
     * redirect
     */
    public  function redirect() {
        //ob_end_flush();
        /*ob_end_clean();
        $newURL = 'http://localhost/slim_redirect_test/index.php/hashNotMatch';
        header("Location: {$newURL}");*/
        
        ob_end_clean();
        //$ch = curl_init('http://slimRedirect.sanalfabrika.com/index.php/hashNotMatch');
        //$ch = curl_init('http://localhost/slim_Redirect_SanalFabrika/index.php/publicNotFound');
		$ch = curl_init('http://localhost/Slim_Redirect_devamsizlik/index.php/publicNotFound'); 
        //curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
        //curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        //curl_setopt($ch,CURLOPT_POSTFIELDS,$content);

        $result = curl_exec($ch);
        curl_close($ch);
        exit();
        
    }
}