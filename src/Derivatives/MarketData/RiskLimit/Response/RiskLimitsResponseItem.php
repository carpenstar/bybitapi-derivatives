<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponseItemInterface;

class RiskLimitsResponseItem extends AbstractResponse implements IRiskLimitsResponseItemInterface
{
    /**
     * Risk id
     * @var string $id
     */
    private string $id;

    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Position limit
     * @var int $limit
     */
    private int $limit;

    /**
     * Maintain margin rate
     * @var float $maintainMargin
     */
    private float $maintainMargin;

    /**
     * Initial margin rate
     * @var float $initialMargin
     */
    private float $initialMargin;

    /**
     * 1: true, 0: false
     * @var int $isLowerRisk
     */
    private ?int $isLowerRisk;

    /**
     * Allowed max leverage
     * @var float $maxLeverage
     */
    private float $maxLeverage;

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->symbol = $data['symbol'];
        $this->limit = $data['limit'];
        $this->initialMargin = $data['initialMargin'];
        $this->maintainMargin = $data['maintainMargin'];
        $this->maxLeverage = $data['maxLeverage'];
        $this->isLowerRisk = (int) $data['isLowerRisk'];
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @return float
     */
    public function getMaintainMargin(): float
    {
        return $this->maintainMargin;
    }

    /**
     * @return float
     */
    public function getInitialMargin(): float
    {
        return $this->initialMargin;
    }

    /**
     * @return int
     */
    public function getIsLowerRisk(): int
    {
        return $this->isLowerRisk;
    }

    /**
     * @return float
     */
    public function getMaxLeverage(): float
    {
        return $this->maxLeverage;
    }
}