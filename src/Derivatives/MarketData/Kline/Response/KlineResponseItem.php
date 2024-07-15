<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineResponseItemInterface;

class KlineResponseItem extends AbstractResponse implements IKlineResponseItemInterface
{
    /**
     * @var \DateTime $start
     */
    private \DateTime $startTime;

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
        $this->startTime = DateTimeHelper::makeFromTimestamp($data[0]);
        $this->open = $data[1];
        $this->high = $data[2];
        $this->low = $data[3];
        $this->close = $data[4];
        $this->volume = $data[5];
        $this->turnover = $data[6];
    }

    /**
     * @return \DateTime
     */
    public function getStartTime(): \DateTime
    {
        return $this->startTime;
    }

    /**
     * @return float
     */
    public function getOpen(): float
    {
        return $this->open;
    }

    /**
     * @return float
     */
    public function getHigh(): float
    {
        return $this->high;
    }

    /**
     * @return float
     */
    public function getLow(): float
    {
        return $this->low;
    }

    /**
     * @return float
     */
    public function getClose(): float
    {
        return $this->close;
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return $this->volume;
    }

    /**
     * @return float
     */
    public function getTurnover(): float
    {
        return $this->turnover;
    }
}