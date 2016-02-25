<?php

use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->am('Any user');
$I->wantTo('do a login on the web application');
$I->lookForwardTo('access all features that my access level grant');
$I->amOnPage('/');
$I->fillField(Locator::combine('//*[@data-qa="auth-login"]' , '//input[@data-qa="auth-login"]'), 'sbsuporte@socialbase.com.br');
$I->fillField(['xpath' => '//*[@data-qa="auth-pass"]'],'socialbase');
$I->click(['xpath' => '//button[@data-qa="auth-button"]']);
$I->see('SB Suporte', ['xpath' => '//div[@data-qa="profile-my-name"]']);
$I->see('CARGO', ['xpath' => '//div[@data-qa="profile-my-job"]']);