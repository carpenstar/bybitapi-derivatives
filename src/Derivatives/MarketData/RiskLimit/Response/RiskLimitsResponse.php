<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponseItemInterface;

class RiskLimitsResponse extends AbstractResponse implements IRiskLimitsResponseInterface
{
    /**
     * Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set
     * @var string
     */
    private string $cursor;

    /** @var IRiskLimitsResponseItemInterface[] */
    private EntityCollection $list;

    public function __construct(array $data)
    {
        $list = new EntityCollection();

        if (!empty($data['list'])) {
            array_map(function ($item) use ($list) {
                $list->push(ResponseDtoBuilder::make(RiskLimitsResponseItem::class, $item));
            }, $data['list']);
        }

        $this->cursor = $data['nextPageCursor'];
        $this->list = $list;
    }

    public function getRiskLimitList(): array
    {
        return $this->list->all();
    }

    public function getCursor(string $cursor): ?string
    {
        return $this->cursor;
    }
}