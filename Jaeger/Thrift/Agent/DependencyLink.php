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

class DependencyLink extends TBase
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'parent',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'child',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'callCount',
            'isRequired' => true,
            'type' => TType::I64,
        ),
    );

    /**
     * @var string
     */
    public $parent = null;
    /**
     * @var string
     */
    public $child = null;
    /**
     * @var int
     */
    public $callCount = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'DependencyLink';
    }


    public function read($input)
    {
        return $this->_read('DependencyLink', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('DependencyLink', self::$_TSPEC, $output);
    }

}
