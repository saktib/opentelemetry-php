<?php

declare(strict_types=1);

namespace Jaeger\Thrift\Agent;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

final class SamplingStrategyType
{
    const PROBABILISTIC = 0;

    const RATE_LIMITING = 1;

    public static $__names = [
        0 => 'PROBABILISTIC',
        1 => 'RATE_LIMITING',
    ];
}
