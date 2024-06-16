<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsRequestInterface;

class RiskLimitsRequest extends AbstractParameters implements IRiskLimitsRequestInterface
{
    /**
     * Product type. linear
     * Only linear support, now
     * @var string $category
     */
    protected string $category = "linear";

    protected string $symbol;

    protected ?string $cursor;

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

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCursor(string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    public function getCursor(): string
    {
        return $this->cursor;
    }
}