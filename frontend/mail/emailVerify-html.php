<?php
use yii\helpers\Html;

/* @var $user frontend\models\User */
/* @var $verifyLink string */
?>
<div>
    <p>Hello <?= Html::encode($user->username) ?>,</p>
    <p>Follow the link below to verify your email:</p>
    <p><?= Html::a(Html::encode($verifyLink), $verifyLink) ?></p>
</div>
