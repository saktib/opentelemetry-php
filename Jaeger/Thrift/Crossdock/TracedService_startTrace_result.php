<?php
namespace Jaeger\Thrift\Crossdock;

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

class TracedService_startTrace_result extends TBase
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        0 => array(
            'var' => 'success',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Jaeger\Thrift\Crossdock\TraceResponse',
        ),
    );

    /**
     * @var \Jaeger\Thrift\Crossdock\TraceResponse
     */
    public $success = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'TracedService_startTrace_result';
    }


    public function read($input)
    {
        return $this->_read('TracedService_startTrace_result', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('TracedService_startTrace_result', self::$_TSPEC, $output);
    }

}
