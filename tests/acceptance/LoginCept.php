<?php

use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('Do a successfully login');
$I->amOnPage('/');
$I->fillField('/input[@ng-model="auth.email"]',  "Hello World!");