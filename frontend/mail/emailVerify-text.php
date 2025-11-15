<?php
/* @var $user frontend\models\User */
/* @var $verifyLink string */

echo "Hello {$user->username},\n\n";
echo "Follow the link below to verify your email:\n";
echo $verifyLink;
