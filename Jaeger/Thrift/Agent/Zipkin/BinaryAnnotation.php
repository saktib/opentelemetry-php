<?php

declare(strict_types=1);

namespace Jaeger\Thrift\Agent\Zipkin;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Exception\TProtocolException;
use Thrift\Type\TType;

/**
 * Binary annotations are tags applied to a Span to give it context. For
 * example, a binary annotation of "http.uri" could the path to a resource in a
 * RPC call.
 *
 * Binary annotations of type STRING are always queryable, though more a
 * historical implementation detail than a structural concern.
 *
 * Binary annotations can repeat, and vary on the host. Similar to Annotation,
 * the host indicates who logged the event. This allows you to tell the
 * difference between the client and server side of the same key. For example,
 * the key "http.uri" might be different on the client and server side due to
 * rewriting, like "/api/v1/myresource" vs "/myresource. Via the host field,
 * you can see the different points of view, which often help in debugging.
 */
class BinaryAnnotation
{
    public static $isValidate = false;

    public static $_TSPEC = [
        1 => [
            'var' => 'key',
            'isRequired' => false,
            'type' => TType::STRING,
        ],
        2 => [
            'var' => 'value',
            'isRequired' => false,
            'type' => TType::STRING,
        ],
        3 => [
            'var' => 'annotation_type',
            'isRequired' => false,
            'type' => TType::I32,
        ],
        4 => [
            'var' => 'host',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Jaeger\Thrift\Agent\Zipkin\Endpoint',
        ],
    ];

    /**
     * @var string
     */
    public $key = null;
    /**
     * @var string
     */
    public $value = null;
    /**
     * @var int
     */
    public $annotation_type = null;
    /**
     * The host that recorded tag, which allows you to differentiate between
     * multiple tags with the same key. There are two exceptions to this.
     *
     * When the key is CLIENT_ADDR or SERVER_ADDR, host indicates the source or
     * destination of an RPC. This exception allows zipkin to display network
     * context of uninstrumented services, or clients such as web browsers.
     *
     * @var \Jaeger\Thrift\Agent\Zipkin\Endpoint
     */
    public $host = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['key'])) {
                $this->key = $vals['key'];
            }
            if (isset($vals['value'])) {
                $this->value = $vals['value'];
            }
            if (isset($vals['annotation_type'])) {
                $this->annotation_type = $vals['annotation_type'];
            }
            if (isset($vals['host'])) {
                $this->host = $vals['host'];
            }
        }
    }

    public function getName()
    {
        return 'BinaryAnnotation';
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
                        $xfer += $input->readString($this->key);
                    } else {
                        $xfer += $input->skip($ftype);
                    }

                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->value);
                    } else {
                        $xfer += $input->skip($ftype);
                    }

                    break;
                case 3:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->annotation_type);
                    } else {
                        $xfer += $input->skip($ftype);
                    }

                    break;
                case 4:
                    if ($ftype == TType::STRUCT) {
                        $this->host = new \Jaeger\Thrift\Agent\Zipkin\Endpoint();
                        $xfer += $this->host->read($input);
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
        $xfer += $output->writeStructBegin('BinaryAnnotation');
        if ($this->key !== null) {
            $xfer += $output->writeFieldBegin('key', TType::STRING, 1);
            $xfer += $output->writeString($this->key);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->value !== null) {
            $xfer += $output->writeFieldBegin('value', TType::STRING, 2);
            $xfer += $output->writeString($this->value);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->annotation_type !== null) {
            $xfer += $output->writeFieldBegin('annotation_type', TType::I32, 3);
            $xfer += $output->writeI32($this->annotation_type);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->host !== null) {
            if (!is_object($this->host)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('host', TType::STRUCT, 4);
            $xfer += $this->host->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();

        return $xfer;
    }
}
