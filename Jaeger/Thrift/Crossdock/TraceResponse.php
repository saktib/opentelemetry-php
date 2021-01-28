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

/**
 * Each server must include the information about the span it observed.
 * It can only be omitted from the response if notImplementedError field is not empty.
 * If the server was instructed to make a downstream call, it must embed the
 * downstream response in its own response.
 */
class TraceResponse extends TBase
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'span',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Jaeger\Thrift\Crossdock\ObservedSpan',
        ),
        2 => array(
            'var' => 'downstream',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Jaeger\Thrift\Crossdock\TraceResponse',
        ),
        3 => array(
            'var' => 'notImplementedError',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var \Jaeger\Thrift\Crossdock\ObservedSpan
     */
    public $span = null;
    /**
     * @var \Jaeger\Thrift\Crossdock\TraceResponse
     */
    public $downstream = null;
    /**
     * @var string
     */
    public $notImplementedError = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'TraceResponse';
    }


    public function read($input)
    {
        return $this->_read('TraceResponse', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('TraceResponse', self::$_TSPEC, $output);
    }

}
