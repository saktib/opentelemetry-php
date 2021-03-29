<?php

declare(strict_types=1);

namespace Jaeger\Thrift\Agent;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

interface BaggageRestrictionManagerIf
{
    /**
     * getBaggageRestrictions retrieves the baggage restrictions for a specific service.
     * Usually, baggageRestrictions apply to all services however there may be situations
     * where a baggageKey might only be allowed to be set by a specific service.
     *
     * @param string $serviceName
     * @return \Jaeger\Thrift\Agent\BaggageRestriction[]
     */
    public function getBaggageRestrictions($serviceName);
}