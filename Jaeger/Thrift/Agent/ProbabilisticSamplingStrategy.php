<?php

declare(strict_types=1);

namespace Jaeger\Thrift\Agent;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Type\TType;

class ProbabilisticSamplingStrategy
{
    public static $isValidate = false;

    public static $_TSPEC = [
        1 => [
            'var' => 'samplingRate',
            'isRequired' => true,
            'type' => TType::DOUBLE,
        ],
    ];

    /**
     * @var float
     */
    public $samplingRate = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['samplingRate'])) {
                $this->samplingRate = $vals['samplingRate'];
            }
        }
    }

    public function getName()
    {
        return 'ProbabilisticSamplingStrategy';
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
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->samplingRate);
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
        $xfer += $output->writeStructBegin('ProbabilisticSamplingStrategy');
        if ($this->samplingRate !== null) {
            $xfer += $output->writeFieldBegin('samplingRate', TType::DOUBLE, 1);
            $xfer += $output->writeDouble($this->samplingRate);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();

        return $xfer;
    }
}
