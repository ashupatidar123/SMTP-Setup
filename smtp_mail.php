<?php

$this->sendEmail($to,$subject,$htmlContent,$title='RBS Payment code');

function sendEmail($to,$subject,$template,$title) {

        $from = 'admin@enrollment.romebusinessschool.ng';
        $this->load->library('email'); //ci lib

        $config['protocol'] = 'sendmail'; // sendmail , smtp
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_port'] = 465;
        $config['smtp_timeout'] = '7';
        $config['smtp_user'] = 'awt.honest2019@gmail.com';
        $config['smtp_pass'] = 'ios@@developers22';
        $config['charset'] = 'iso-8859-1';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'html';
        $config['validation'] = TRUE;
        $config['wordwrap'] = TRUE;
        $config['mailpath'] = '/usr/sbin/sendmail'; 

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from($from, $title);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($template);
        //pr($this->email->send());
        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
}



========html========

$htmlContent = ' 
    <html> 
        <head> 
            <title>Reset password</title> 
        </head> 
        <body>              
            <h1 style="background-color: #ff000014;">Reset Password:=></h1> 
            <table cellspacing="0" style="border:1px solid black;width:100%;font-size: 20px;text-align:left;padding:20px;"> 
                <tr> 
                    <th>Welcome:</th><td>'.$user['firstName'].'</td> 
                </tr> 
                <tr> 
                    <th>OTP:</th><td>'.$otp.'</td> 
                </tr> 
                <tr>
                    <td>Please do not share this otp for security purpose.</td>
                </tr>
            </table>
        </body>
    </html>';

    $update = array('otherKey'=>$otp);
    $where = array('userId'=>$user['userId']);
    $this->APIModel->updateQuery('users',$update,$where);
    
    $subject = 'Reset password';
    $to  = $dt['userEmail'];
    $this->sendEmail($to,$subject,$htmlContent,$title='Reset password');








?>
