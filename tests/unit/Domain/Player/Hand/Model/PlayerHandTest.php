<?php


use App\Domain\Player\Hand\Model\PlayerHand;
use App\Domain\Player\Hand\Model\PlayerHandInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class PlayerHandTest
 */
class PlayerHandTest extends TestCase
{
    /**
     * @var PlayerHandInterface
     */
    private $model;

    protected function setUp()
    {
        parent::setUp();

        $this->model = new PlayerHand();
    }


    public function testGetCards(): void
    {
        $this->assertEmpty($this->model->getCards());
    }

    public function testSetCardsNotEmpty(): void
    {
        $cards = ['foo' => 'bar'];
        $this->model->setCards($cards);

        $this->assertNotEmpty($this->model->getCards());
        $this->assertEquals($cards, $this->model->getCards());
    }
}
