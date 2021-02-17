<?php

declare(strict_types=1);

namespace Jaeger\Thrift;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Type\TType;

class BatchSubmitResponse
{
    public static $isValidate = false;

    public static $_TSPEC = [
        1 => [
            'var' => 'ok',
            'isRequired' => true,
            'type' => TType::BOOL,
        ],
    ];

    /**
     * @var bool
     */
    public $ok = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['ok'])) {
                $this->ok = $vals['ok'];
            }
        }
    }

    public function getName()
    {
        return 'BatchSubmitResponse';
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
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->ok);
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
        $xfer += $output->writeStructBegin('BatchSubmitResponse');
        if ($this->ok !== null) {
            $xfer += $output->writeFieldBegin('ok', TType::BOOL, 1);
            $xfer += $output->writeBool($this->ok);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();

        return $xfer;
    }
}
