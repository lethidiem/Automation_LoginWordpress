<?php


class FirstCest
{
    public function _before(AcceptanceTester $I)
{
}

    // tests
    public function frontpageWorks(AcceptanceTester $client)
    {
        $client->amOnPage('/');
        $client->see('Home');
    }
}