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

class ThrottlingResponse
{
    public static $isValidate = false;

    public static $_TSPEC = [
        1 => [
            'var' => 'defaultConfig',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\Jaeger\Thrift\Agent\ThrottlingConfig',
        ],
        2 => [
            'var' => 'serviceConfigs',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => [
                'type' => TType::STRUCT,
                'class' => '\Jaeger\Thrift\Agent\ServiceThrottlingConfig',
                ],
        ],
    ];

    /**
     * @var \Jaeger\Thrift\Agent\ThrottlingConfig
     */
    public $defaultConfig = null;
    /**
     * @var \Jaeger\Thrift\Agent\ServiceThrottlingConfig[]
     */
    public $serviceConfigs = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['defaultConfig'])) {
                $this->defaultConfig = $vals['defaultConfig'];
            }
            if (isset($vals['serviceConfigs'])) {
                $this->serviceConfigs = $vals['serviceConfigs'];
            }
        }
    }

    public function getName()
    {
        return 'ThrottlingResponse';
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
                    if ($ftype == TType::STRUCT) {
                        $this->defaultConfig = new \Jaeger\Thrift\Agent\ThrottlingConfig();
                        $xfer += $this->defaultConfig->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }

                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->serviceConfigs = [];
                        $_size0 = 0;
                        $_etype3 = 0;
                        $xfer += $input->readListBegin($_etype3, $_size0);
                        for ($_i4 = 0; $_i4 < $_size0; ++$_i4) {
                            $elem5 = null;
                            $elem5 = new \Jaeger\Thrift\Agent\ServiceThrottlingConfig();
                            $xfer += $elem5->read($input);
                            $this->serviceConfigs []= $elem5;
                        }
                        $xfer += $input->readListEnd();
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
        $xfer += $output->writeStructBegin('ThrottlingResponse');
        if ($this->defaultConfig !== null) {
            if (!is_object($this->defaultConfig)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('defaultConfig', TType::STRUCT, 1);
            $xfer += $this->defaultConfig->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->serviceConfigs !== null) {
            if (!is_array($this->serviceConfigs)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('serviceConfigs', TType::LST, 2);
            $output->writeListBegin(TType::STRUCT, count($this->serviceConfigs));
            foreach ($this->serviceConfigs as $iter6) {
                $xfer += $iter6->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();

        return $xfer;
    }
}