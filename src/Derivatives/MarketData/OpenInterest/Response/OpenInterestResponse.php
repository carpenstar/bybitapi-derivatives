<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;

class OpenInterestResponse extends AbstractResponse
{
    /** @var OpenInterestResponseItem[] */
    private EntityCollection $list;

    public function __construct(array $data)
    {
        $list = new EntityCollection();

        if (!empty($data['list'])) {
            array_map(function ($item) use ($list) {
                $list->push(ResponseDtoBuilder::make(OpenInterestResponseItem::class, $item));
            }, $data['list']);
        }

        $this->list = $list;
    }

    public function getOpenInterestList(): array
    {
        return $this->list->all();
    }
}