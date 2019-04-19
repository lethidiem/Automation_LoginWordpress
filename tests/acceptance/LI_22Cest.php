<?php
use Step\Acceptance\Login as AdminTester;

class loginCest
{
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->hyperlink1('//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/p/a');
    }
}
