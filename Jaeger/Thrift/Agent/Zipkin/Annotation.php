<?php
namespace Jaeger\Thrift\Agent\Zipkin;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

/**
 * An annotation is similar to a log statement. It includes a host field which
 * allows these events to be attributed properly, and also aggregatable.
 */
class Annotation
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'timestamp',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'value',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'host',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Jaeger\Thrift\Agent\Zipkin\Endpoint',
        ),
    );

    /**
     * Microseconds from epoch.
     * 
     * This value should use the most precise value possible. For example,
     * gettimeofday or syncing nanoTime against a tick of currentTimeMillis.
     * 
     * @var int
     */
    public $timestamp = null;
    /**
     * @var string
     */
    public $value = null;
    /**
     * Always the host that recorded the event. By specifying the host you allow
     * rollup of all events (such as client requests to a service) by IP address.
     * 
     * @var \Jaeger\Thrift\Agent\Zipkin\Endpoint
     */
    public $host = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['timestamp'])) {
                $this->timestamp = $vals['timestamp'];
            }
            if (isset($vals['value'])) {
                $this->value = $vals['value'];
            }
            if (isset($vals['host'])) {
                $this->host = $vals['host'];
            }
        }
    }

    public function getName()
    {
        return 'Annotation';
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
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->timestamp);
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
        $xfer += $output->writeStructBegin('Annotation');
        if ($this->timestamp !== null) {
            $xfer += $output->writeFieldBegin('timestamp', TType::I64, 1);
            $xfer += $output->writeI64($this->timestamp);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->value !== null) {
            $xfer += $output->writeFieldBegin('value', TType::STRING, 2);
            $xfer += $output->writeString($this->value);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->host !== null) {
            if (!is_object($this->host)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('host', TType::STRUCT, 3);
            $xfer += $this->host->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}