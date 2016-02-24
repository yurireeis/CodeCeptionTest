<?php 
$I = new AcceptanceTester($scenario);
$I->am('Any user');
$I->wantTo('do a login on the web application');
$I->lookForwardTo('access all features that my access level grant');
$I->amOnPage('/');
$I->fillField(['xpath' => '//input[@data-qa="auth-login"]'], 'sbsuporte@socialbase.com.br1');
$I->fillField(['xpath' => '//input[@data-qa="auth-pass"]'],'socialbase');
$I->click(['xpath' => '//button[@data-qa="auth-button"]']);
$I->see('Suporte SocialBase', ['xpath' => '//div[@data-qa="profile-my-name"]']);
$I->see('SUPORTE', ['xpath' => '//div[@data-qa="profile-my-job"]']);