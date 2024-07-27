<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoRequestInterface;

class TickerInfoRequest extends AbstractParameters implements ITickerInfoRequestInterface
{
    /**
     * Only linear category support at now
     * @var string $category
     */
    protected string $category = 'linear';

    protected string $symbol;

    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $symbol
     * @return TickerInfoRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }
}