<?php


class DiemCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function frontpageWorks(AcceptanceTester $client)
    {
        $client->amOnPage('/log-in');
        $client->fillField('*[@id="usernameOrEmail"]','thidiem257@gmail.com');
        $client->click('*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button');
        $client->fillField('*[@id="password"]','diemle30071998');
        $client->click('*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button');
        $client->see('Home');

    }
}