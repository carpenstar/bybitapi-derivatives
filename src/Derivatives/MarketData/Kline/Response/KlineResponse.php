<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineDto;


class KlineResponse extends AbstractResponse implements IKlineDto
{
    /**
     * @var \DateTime $start
     */
    private \DateTime $start;

    /**
     * @var float $open
     */
    private float $open;

    /**
     * @var float $high
     */
    private float $high;

    /**
     * @var float $low
     */
    private float $low;

    /**
     * @var float $close
     */
    private float $close;

    /**
     * @var float $volume
     */
    private float $volume;

    /**
     * @var float $turnover
     */
    private float $turnover;

    public function __construct(array $data)
    {
        $this
            ->setStart($data[0])
            ->setOpen($data[1])
            ->setHigh($data[2])
            ->setLow($data[3])
            ->setClose($data[4])
            ->setVolume($data[5])
            ->setTurnover($data[6]);
    }

    /**
     * @param int $start
<<<<<<<< HEAD:src/Derivatives/MarketData/Kline/Response/KlineResponse.php
     * @return KlineResponse
========
     * @return KlineAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/Kline/Response/KlineAbstractResponse.php
     */
    public function setStart(int $start): self
    {
        $this->start = DateTimeHelper::makeFromTimestamp($start);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStart(): \DateTime
    {
        return $this->start;
    }

    /**
     * @param float $open
     * @return $this
     */
    private function setOpen(float $open): self
    {
        $this->open = $open;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpen(): float
    {
        return $this->open;
    }

    /**
     * @param float $high
     * @return $this
     */
    private function setHigh(float $high): self
    {
        $this->high = $high;
        return $this;
    }

    /**
     * @return float
     */
    public function getHigh(): float
    {
        return $this->high;
    }

    /**
     * @param float $low
     * @return $this
     */
    private function setLow(float $low): self
    {
        $this->low = $low;
        return $this;
    }

    /**
     * @return float
     */
    public function getLow(): float
    {
        return $this->low;
    }

    /**
     * @param float $close
     * @return $this
     */
    private function setClose(float $close): self
    {
        $this->close = $close;
        return $this;
    }

    /**
     * @return float
     */
    public function getClose(): float
    {
        return $this->close;
    }

    /**
     * @param float $volume
<<<<<<<< HEAD:src/Derivatives/MarketData/Kline/Response/KlineResponse.php
     * @return KlineResponse
========
     * @return KlineAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/Kline/Response/KlineAbstractResponse.php
     */
    private function setVolume(float $volume): self
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return $this->volume;
    }

    /**
     * @param float $turnover
<<<<<<<< HEAD:src/Derivatives/MarketData/Kline/Response/KlineResponse.php
     * @return KlineResponse
========
     * @return KlineAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/Kline/Response/KlineAbstractResponse.php
     */
    public function setTurnover(float $turnover): self
    {
        $this->turnover = $turnover;
        return $this;
    }

    /**
     * @return float
     */
    public function getTurnover(): float
    {
        return $this->turnover;
    }
}