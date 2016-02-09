<?php 
$I = new AcceptanceTester($scenario);
$I->am('Any user');
$I->wantTo('ensure the main page works');
$I->lookForwardTo('access the main page of the web application');
$I->amOnPage('/');
$I->seeInTitle('Plataforma de Comunicação');