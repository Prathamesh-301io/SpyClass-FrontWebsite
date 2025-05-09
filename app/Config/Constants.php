<?php

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');
defined('SITE_TITLE') || define('SITE_TITLE', 'Delhi Development Authority');
defined('PAY_MODE') || define('PAY_MODE', 'Live');
//defined('PAY_MODE') || define('PAY_MODE', 'test');
if(PAY_MODE=='Live'){
	defined('PAY_URL') || define('PAY_URL', 'https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction');
	defined('MERCHANT_ID') || define('MERCHANT_ID', '745757');
	defined('WORKING_KEY') || define('WORKING_KEY', '0B737F39FBDD8F2903DA16CD6B4B96CA');
	defined('ACCESS_CODE') || define('ACCESS_CODE', 'AVGQ61IL32AF27QGFA');
}else{
	defined('PAY_URL') || define('PAY_URL', 'https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction');
	defined('MERCHANT_ID') || define('MERCHANT_ID', '745757');
	//defined('WORKING_KEY') || define('WORKING_KEY', '88F87FB0FB01AA90BACA520D487A69A0');
	//defined('ACCESS_CODE') || define('ACCESS_CODE', 'AVDD04JD24CA56DDAC');	
	defined('WORKING_KEY') || define('WORKING_KEY', 'C2FEF353866877BF331C81656253B7F5');
	defined('ACCESS_CODE') || define('ACCESS_CODE', 'AVYY04JE26AJ45YYJA');
}
defined('PASSWORD_SECU') || define('PASSWORD_SECU', 'AHBJAHDVVJHVD$%46546');

defined('google_key') || define('google_key', '6LdwguMZAAAAAAp5PtKTMtQP3N2-1qVngqmgyfUk');
defined('google_secret') || define('google_secret', '6LdwguMZAAAAAOOpNg6BrhRvBoIArPnNOmBkkVBx');
defined('SENDINBLUE_API') || define('SENDINBLUE_API', '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');


/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2_592_000);
defined('YEAR')   || define('YEAR', 31_536_000);
defined('DECADE') || define('DECADE', 315_360_000);
defined('VERSION') || define('VERSION', 'v1.0');

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('SITE_TITLE') || define('SITE_TITLE', 'Reckitt');
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0);        // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1);          // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3);         // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4);   // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5);  // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7);     // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8);       // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9);      // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125);    // highest automatically-assigned error code

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_LOW instead.
 */
define('EVENT_PRIORITY_LOW', 200);

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_NORMAL instead.
 */
define('EVENT_PRIORITY_NORMAL', 100);

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_HIGH instead.
 */
define('EVENT_PRIORITY_HIGH', 10);
