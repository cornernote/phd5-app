<?php

// @group mandatory

$I = new E2eTester($scenario);
$I->wantTo('ensure that sign-up works');
$I->amOnPage('/user/register');
$I->see('Sign up');
