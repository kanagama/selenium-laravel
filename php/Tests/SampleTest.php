<?php

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverDimension;
use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\WebDriverBy;

/**
 * @author k-nagama <k.nagama0632@gmail.com>
 *
 * @link https://qiita.com/A-Kira/items/8b9768dcafb5908004c5
 */
class SampleTest extends TestCase
{
    /**
     * @test
     */
    public function google()
    {
        $capabilities = DesiredCapabilities::chrome();

        // UA を iPhone X に
        $capabilities->setCapability('goog:chromeOptions', [
            'mobileEmulation' => [
                'deviceName' => 'iPhone X',
            ],
        ]);

        $driver = RemoteWebDriver::create('http://host.docker.internal:4444/wd/hub', $capabilities);
        // window サイズ変更
        // $driver->manage()->window()->setSize(new WebDriverDimension(1920, 1080));

        $driver->get('https://www.google.co.jp/');

        $element = $driver->findElement(WebDriverBy::name('q'));
        $element->sendKeys('copy paste form value');
        $element->submit();

        $driver->wait(10)
            ->until(
                WebDriverExpectedCondition::titleIs('copy paste form value - Google 検索')
            );

        $this->assertEquals('copy paste form value - Google 検索', $driver->getTitle());
        $this->assertEquals('copy paste form value', $driver->findElement(WebDriverBy::name('q'))->getAttribute("value"));

        // 結果画面をちょっとの間操作したい場合
        // sleep(5);

        $driver->close();
    }
}