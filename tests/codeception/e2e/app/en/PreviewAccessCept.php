<?php

// @group mandatory

$I = new E2eTester($scenario);

$I->wantTo('ensure that preview access works');

$I->amOnPage('/');
$I->makeScreenshot('debug-preview-access-login');

$I->amGoingTo('try to login as preview');
$I->login('preview', 'preview1');

$I->amOnPage('/en');
#$I->see('Application installed successfully', 'h2');
$I->dontSeeHorizontalScrollbars();

$I->amOnPage('/de');
$I->dontSee('.alert');
$I->dontSee('Sign in');
$I->canSee('Demo','h1');
$I->dontSeeHorizontalScrollbars();

$I->click('Beispielseite A');
$I->dontSee('.alert');
$I->dontSeeHorizontalScrollbars();

$I->expect('not to see admin/editor elements');
$I->dontSeeElement('.nav-extra *');
$I->dontSeeElement('.nav-backend');

$I->makeScreenshot('success-preview-access');

