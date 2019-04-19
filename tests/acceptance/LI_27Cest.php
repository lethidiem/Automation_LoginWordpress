<?php
use Step\Acceptance\Login as AdminTester;

class loginCest
{
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->hyperlink5('//*[@id="primary"]/div/main/div/div[2]/a[4]');
    }
}
