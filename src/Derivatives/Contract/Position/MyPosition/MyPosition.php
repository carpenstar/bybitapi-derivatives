<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Request\MyPositionRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Response\MyPositionResponse;

class MyPosition extends PrivateEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::GET;
    }

    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/position/list";
    }

    protected function getRequestClassname(): string
    {
        return MyPositionRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return MyPositionResponse::class;
    }
}
