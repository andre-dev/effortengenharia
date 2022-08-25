<?php

$config['protocol']         = 'smtp';
$config['smtp_host']        = 'smtp.hostinger.com';
$config['smtp_crypto']      = 'tls'; // tls or ssl
$config['smtp_port']        = 465;
$config['smtp_user']        = 'comercial@effortengenharia.com';
$config['smtp_pass']        = '!Ironmah2';
$config['validate']         = false; // validar email
$config['mailtype']         = 'text'; // text ou html
$config['charset']          = 'utf-8';
$config['newline']          = "\r\n";
$config['bcc_batch_mode']   = false;
$config['wordwrap']         = false;
$config['priority']         = 3; // 1, 2, 3, 4, 5 | Email Priority. 1 = highest. 5 = lowest. 3 = normal.
