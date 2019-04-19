<?php
use Step\Acceptance\Login as AdminTester;

class loginCest
{
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->buttonG('//*[@id="primary"]/div/main/div/div[1]/div/form/div[2]/div[2]/div/div/div/button');
    }
}
