<?php

declare(strict_types=1);

namespace Jaeger\Thrift\Agent;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

interface DependencyIf
{
    /**
     * @param string $traceId
     * @return \Jaeger\Thrift\Agent\Dependencies
     */
    public function getDependenciesForTrace($traceId);
    /**
     * @param \Jaeger\Thrift\Agent\Dependencies $dependencies
     */
    public function saveDependencies(\Jaeger\Thrift\Agent\Dependencies $dependencies);
}