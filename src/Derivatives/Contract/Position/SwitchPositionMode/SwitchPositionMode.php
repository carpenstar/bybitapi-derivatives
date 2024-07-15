<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IPostEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Request\SwitchPositionModeRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Response\SwitchPositionModeResponse;

class SwitchPositionMode extends PrivateEndpoint implements IPostEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/position/switch-mode";
    }

    protected function getRequestClassname(): string
    {
        return SwitchPositionModeRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return SwitchPositionModeResponse::class;
    }
}