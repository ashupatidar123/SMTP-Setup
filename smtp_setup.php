1. First Go to gmail login
2. 2 setp verifcation on 
3. App password generate
==========================================================

Plugin wp mail smtp install

Active plugin and go to general setting

$config['protocol']     = 'smtp';
$config['smtp_host']    = 'ssl://smtp.gmail.com';
$config['smtp_port']    = '465';
$config['smtp_user']    = 'webdesky.developers@gmail.com';
$config['smtp_pass']    = 'xorunpzcxthudhxr';
$config['mailtype']     = 'html';
$config['charset']      = 'iso-8859-1';
$config['wordwrap']     =  TRUE;
$config['newline']      = "\r\n"; //use double quotes

==========================================================
Authentication ON

SMTP Username
creatoashvin@gmail.com

SMTP Password
razuvkkppvldojiu

=========================wp-config.php=================================
define( 'WPMS_ON', true );
define( 'WPMS_SMTP_PASS', 'razuvkkppvldojiu' );


done.........

