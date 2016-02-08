<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure the main page works');
$I->amOnPage('/');
$I->seeInTitle("Plataforma de Comunicação");