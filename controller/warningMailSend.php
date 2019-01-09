<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 4/5/2018
 * Time: 4:40 PM
 */

print_r($_POST);

include "../model/mail-send.php";

mailSend($_POST['mail'],$_POST['subject'],$_POST['text']);