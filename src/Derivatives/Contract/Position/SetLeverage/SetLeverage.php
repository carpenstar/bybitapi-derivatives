<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IPostEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Request\SetLeverageRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Response\SetLeverageResponse;

class SetLeverage extends PrivateEndpoint implements IPostEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/position/set-leverage";
    }

    protected function getRequestClassname(): string
    {
        return SetLeverageRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return SetLeverageResponse::class;
    }
}