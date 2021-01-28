<?php
namespace Jaeger\Thrift\Agent;

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

class AggregationValidator_validateTrace_args extends TBase
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'traceId',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $traceId = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'AggregationValidator_validateTrace_args';
    }


    public function read($input)
    {
        return $this->_read('AggregationValidator_validateTrace_args', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('AggregationValidator_validateTrace_args', self::$_TSPEC, $output);
    }

}
