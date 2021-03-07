<?php

namespace application\config;

 /**
 * mailserver Class
 *
 * List type of document type of site content
 * read from extention file and document type
 *
 * @package		application
 * @subpackage	config
 * @category	content type
 */


class mailserver{
	
	 /**
     * mail_config function
     *
     * set login authenticatio to SMTP server
     *
     * @param string
     * @return array,mixed
     */
	
	protected function mail_config(){
				
		return array(
			"protocol" 		=> "smtp",
			"smtp_secure"	=> "ssl",
			"smtp_host" 	=> "mail.hostname.com",
			"smtp_port"		=> 465,
			"smtp_timeout"	=> 5,
			"smtp_user"		=> "webmaster@hostname.com",
			"smtp_pass"		=> "password",
			"mailtype"		=> "html",
			"crlf"			=> "\r\n",
			"newline"		=> "\r\n",
			"wordwrap"		=> true
		);
		
		
	}
	
}