<?php
use Step\Acceptance\Login as AdminTester;

class loginCest
{
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->login('thidiem257@gmail.com', 'fsdiugudsgvdfdkj');

    }
}