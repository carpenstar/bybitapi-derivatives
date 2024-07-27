<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoRequestInterface;

class InstrumentInfoRequest extends AbstractParameters implements IInstrumentInfoRequestInterface
{
    /**
     * Product type. linear only supports at now
     * @var string $category
     */
    protected string $category = "linear";

    /**
     * Symbol name. query an option symbol, category is required
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Limit for data size per page. [1, 1000]. Default: 500
     * @var int $limit
     */
    protected int $limit = 500;

    /**
     * Cursor. Used for pagination
     * @var string $cursor
     */
    protected string $cursor;

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return InstrumentInfoRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return InstrumentInfoRequest
     */
    public function setCategory(string $category): self
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return InstrumentInfoRequest
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return string
     */
    public function getCursor(): string
    {
        return $this->cursor;
    }

    /**
     * @param string $cursor
     * @return InstrumentInfoRequest
     */
    public function setCursor(string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }
}