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

class Dependency_saveDependencies_args
{
    public static $isValidate = false;

    public static $_TSPEC = [
        1 => [
            'var' => 'dependencies',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Jaeger\Thrift\Agent\Dependencies',
        ],
    ];

    /**
     * @var \Jaeger\Thrift\Agent\Dependencies
     */
    public $dependencies = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['dependencies'])) {
                $this->dependencies = $vals['dependencies'];
            }
        }
    }

    public function getName()
    {
        return 'Dependency_saveDependencies_args';
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
                        $this->dependencies = new \Jaeger\Thrift\Agent\Dependencies();
                        $xfer += $this->dependencies->read($input);
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
        $xfer += $output->writeStructBegin('Dependency_saveDependencies_args');
        if ($this->dependencies !== null) {
            if (!is_object($this->dependencies)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('dependencies', TType::STRUCT, 1);
            $xfer += $this->dependencies->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();

        return $xfer;
    }
}
