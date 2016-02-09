<?php 
$I = new AcceptanceTester($scenario);
$I->am('Any user');
$I->wantTo('do a login on the web application');
$I->lookForwardTo('access all features that my access level grant');
$I->amOnPage('/');
$I->fillField('Login de Usuário','yuri.reis@socialbase.com.br');
$I->fillField('Senha','idkfa03');
$I->click('//button[@class="b-access"]');
$I->see('Yuri Reis', '//div[@class="my-name ng-binding"]');
