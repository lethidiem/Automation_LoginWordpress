<?php
namespace Step\Acceptance;
use Page\Login as LoginPage;
class Login extends \AcceptanceTester
{
public function login($name,$password)
{
    $I = $this;
    $I->amOnPage(LoginPage:: $URL);
    $I->fillField(loginPage::$usernameField, $name);
    $I->click('Continue');
    $I->wait('2');
    $I->fillField(LoginPage::$passwordField, $password);
    $I->click('Log In');
    $I->wait('2');
}
public function hyperlink1($h)
{
    $I = $this;
    $I->amOnPage(LoginPage:: $URL);
    $I->click('//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/p/a');
    $I->wait('2');
}
public function black($name,$password)
{
    $I = $this;
    $I->amOnPage(LoginPage:: $URL);
    $I->fillField(loginPage::$usernameField, $name);
    $I->click('Continue');
    $I->wait('2');
    $I->fillField(LoginPage::$passwordField, $password);
    $I->click('Log In');
    $I->wait('2');
    //$I = $this;
    $I->amOnPage(LoginPage:: $URL);
}
public function signup($s)
{
    $I = $this;
    $I->amOnPage(LoginPage:: $URL);
    $I->click('//*[@id="header"]/div/a/span');
    $I->wait('2');
}
public function hyperlink2($h2)
{
    $I = $this;
    $I->amOnPage(LoginPage:: $URL);
    $I->click('//*[@id="primary"]/div/main/div/div[2]/a[1]');
    $I->wait('2');
}
public function buttonG($g)
{
    $I = $this;
    $I->amOnPage(LoginPage:: $URL);
    $I->click('//*[@id="primary"]/div/main/div/div[1]/div/form/div[2]/div[2]/div/div/div/button');
    $I->wait('2');
}
/*public function Enter($name,$password,$char)
{
    $I = $this;
    $I->amOnPage(LoginPage:: $URL);
    $I->fillField(loginPage::$usernameField, $name);
    $I->pressKey(['id' => 'filter_search_webservices'], WebDriverKeys::ENTER);
    $I->wait('2');
    $I->fillField(LoginPage::$passwordField, $password);
    $I->pressKey(['id' => 'filter_search_webservices'], WebDriverKeys::ENTER);
    $I->wait('2');
   // $I->pressKey(['id' => 'filter_search_webservices'], WebDriverKeys::ENTER);
}*/
    public function hyperlink3($h3)
    {
        $I = $this;
        $I->amOnPage(LoginPage:: $URL);
        $I->click('//*[@id="primary"]/div/main/div/div[2]/a[2]');
        $I->wait('2');
    }

    public function hyperlink4($h4)
    {
        $I = $this;
        $I->amOnPage(LoginPage:: $URL);
        $I->click('//*[@id="primary"]/div/main/div/div[2]/a[3]');
        $I->wait('2');
    }

    public function hyperlink5($h5)
    {
        $I = $this;
        $I->amOnPage(LoginPage:: $URL);
        $I->click('//*[@id="primary"]/div/main/div/div[2]/a[4]');
        $I->wait('2');
    }
}