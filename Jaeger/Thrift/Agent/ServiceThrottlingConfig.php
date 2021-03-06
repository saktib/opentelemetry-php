<?php

declare(strict_types=1);

namespace Jaeger\Thrift\Agent;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Exception\TProtocolException;
use Thrift\Type\TType;

class ServiceThrottlingConfig
{
    public static $isValidate = false;

    public static $_TSPEC = [
        1 => [
            'var' => 'serviceName',
            'isRequired' => true,
            'type' => TType::STRING,
        ],
        2 => [
            'var' => 'config',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\Jaeger\Thrift\Agent\ThrottlingConfig',
        ],
    ];

    /**
     * @var string
     */
    public $serviceName = null;
    /**
     * @var \Jaeger\Thrift\Agent\ThrottlingConfig
     */
    public $config = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['serviceName'])) {
                $this->serviceName = $vals['serviceName'];
            }
            if (isset($vals['config'])) {
                $this->config = $vals['config'];
            }
        }
    }

    public function getName()
    {
        return 'ServiceThrottlingConfig';
    }

    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->serviceName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }

                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->config = new \Jaeger\Thrift\Agent\ThrottlingConfig();
                        $xfer += $this->config->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }

                    break;
                default:
                    $xfer += $input->skip($ftype);

                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();

        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('ServiceThrottlingConfig');
        if ($this->serviceName !== null) {
            $xfer += $output->writeFieldBegin('serviceName', TType::STRING, 1);
            $xfer += $output->writeString($this->serviceName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->config !== null) {
            if (!is_object($this->config)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('config', TType::STRUCT, 2);
            $xfer += $this->config->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();

        return $xfer;
    }
}
