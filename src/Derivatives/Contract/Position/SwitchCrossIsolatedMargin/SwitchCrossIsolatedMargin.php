<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IPostEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Request\SwitchCrossIsolatedMarginRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Response\SwitchCrossIsolatedMarginResponse;

class SwitchCrossIsolatedMargin extends PrivateEndpoint implements IPostEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/position/switch-isolated";
    }

    protected function getRequestClassname(): string
    {
        return SwitchCrossIsolatedMarginRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return SwitchCrossIsolatedMarginResponse::class;
    }
}