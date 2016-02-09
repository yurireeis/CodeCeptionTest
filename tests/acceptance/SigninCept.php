<?php 
$I = new AcceptanceTester($scenario);
$I->am('Any user');
$I->wantTo('do a login on the web application');
$I->lookForwardTo('access all features that my access level grant');
$I->amOnPage('/login');
$I->fillField('Login de Usuário','yuri.reis@socialbase.com');
