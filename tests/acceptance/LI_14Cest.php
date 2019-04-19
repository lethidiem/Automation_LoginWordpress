<?php
use Step\Acceptance\Login as AdminTester;

class LI_01Cest
{
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->black('thidiem257@gmail.com', 'diemle30071998');

    }
}