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

class OperationSamplingStrategy
{
    public static $isValidate = false;

    public static $_TSPEC = [
        1 => [
            'var' => 'operation',
            'isRequired' => true,
            'type' => TType::STRING,
        ],
        2 => [
            'var' => 'probabilisticSampling',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\Jaeger\Thrift\Agent\ProbabilisticSamplingStrategy',
        ],
    ];

    /**
     * @var string
     */
    public $operation = null;
    /**
     * @var \Jaeger\Thrift\Agent\ProbabilisticSamplingStrategy
     */
    public $probabilisticSampling = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['operation'])) {
                $this->operation = $vals['operation'];
            }
            if (isset($vals['probabilisticSampling'])) {
                $this->probabilisticSampling = $vals['probabilisticSampling'];
            }
        }
    }

    public function getName()
    {
        return 'OperationSamplingStrategy';
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
                        $xfer += $input->readString($this->operation);
                    } else {
                        $xfer += $input->skip($ftype);
                    }

                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->probabilisticSampling = new \Jaeger\Thrift\Agent\ProbabilisticSamplingStrategy();
                        $xfer += $this->probabilisticSampling->read($input);
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
        $xfer += $output->writeStructBegin('OperationSamplingStrategy');
        if ($this->operation !== null) {
            $xfer += $output->writeFieldBegin('operation', TType::STRING, 1);
            $xfer += $output->writeString($this->operation);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->probabilisticSampling !== null) {
            if (!is_object($this->probabilisticSampling)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('probabilisticSampling', TType::STRUCT, 2);
            $xfer += $this->probabilisticSampling->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();

        return $xfer;
    }
}
