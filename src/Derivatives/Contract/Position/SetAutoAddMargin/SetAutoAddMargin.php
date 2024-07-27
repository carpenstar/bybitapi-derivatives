<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Request\SetAutoAddMarginRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Response\SetAutoAddMarginResponse;

class SetAutoAddMargin extends PrivateEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::POST;
    }

    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/position/set-auto-add-margin";
    }

    protected function getRequestClassname(): string
    {
        return SetAutoAddMarginRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return SetAutoAddMarginResponse::class;
    }
}
