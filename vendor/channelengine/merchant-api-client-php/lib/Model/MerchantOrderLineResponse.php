<?php
/**
 * MerchantOrderLineResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * OpenAPI spec version: 2.6.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChannelEngine\Merchant\ApiClient\Model;

use \ArrayAccess;
use \ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * MerchantOrderLineResponse Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MerchantOrderLineResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MerchantOrderLineResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'isFulfillmentByMarketplace' => 'bool',
        'merchantProductNo' => 'string',
        'unitVat' => 'double',
        'lineTotalInclVat' => 'double',
        'lineVat' => 'double',
        'originalUnitPriceInclVat' => 'double',
        'originalUnitVat' => 'double',
        'originalLineTotalInclVat' => 'double',
        'originalLineVat' => 'double',
        'channelProductNo' => 'string',
        'quantity' => 'int',
        'unitPriceInclVat' => 'double',
        'feeFixed' => 'double',
        'feeRate' => 'double',
        'condition' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'isFulfillmentByMarketplace' => null,
        'merchantProductNo' => null,
        'unitVat' => 'double',
        'lineTotalInclVat' => 'double',
        'lineVat' => 'double',
        'originalUnitPriceInclVat' => 'double',
        'originalUnitVat' => 'double',
        'originalLineTotalInclVat' => 'double',
        'originalLineVat' => 'double',
        'channelProductNo' => null,
        'quantity' => 'int32',
        'unitPriceInclVat' => 'double',
        'feeFixed' => 'double',
        'feeRate' => 'double',
        'condition' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'status' => 'Status',
        'isFulfillmentByMarketplace' => 'IsFulfillmentByMarketplace',
        'merchantProductNo' => 'MerchantProductNo',
        'unitVat' => 'UnitVat',
        'lineTotalInclVat' => 'LineTotalInclVat',
        'lineVat' => 'LineVat',
        'originalUnitPriceInclVat' => 'OriginalUnitPriceInclVat',
        'originalUnitVat' => 'OriginalUnitVat',
        'originalLineTotalInclVat' => 'OriginalLineTotalInclVat',
        'originalLineVat' => 'OriginalLineVat',
        'channelProductNo' => 'ChannelProductNo',
        'quantity' => 'Quantity',
        'unitPriceInclVat' => 'UnitPriceInclVat',
        'feeFixed' => 'FeeFixed',
        'feeRate' => 'FeeRate',
        'condition' => 'Condition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'isFulfillmentByMarketplace' => 'setIsFulfillmentByMarketplace',
        'merchantProductNo' => 'setMerchantProductNo',
        'unitVat' => 'setUnitVat',
        'lineTotalInclVat' => 'setLineTotalInclVat',
        'lineVat' => 'setLineVat',
        'originalUnitPriceInclVat' => 'setOriginalUnitPriceInclVat',
        'originalUnitVat' => 'setOriginalUnitVat',
        'originalLineTotalInclVat' => 'setOriginalLineTotalInclVat',
        'originalLineVat' => 'setOriginalLineVat',
        'channelProductNo' => 'setChannelProductNo',
        'quantity' => 'setQuantity',
        'unitPriceInclVat' => 'setUnitPriceInclVat',
        'feeFixed' => 'setFeeFixed',
        'feeRate' => 'setFeeRate',
        'condition' => 'setCondition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'isFulfillmentByMarketplace' => 'getIsFulfillmentByMarketplace',
        'merchantProductNo' => 'getMerchantProductNo',
        'unitVat' => 'getUnitVat',
        'lineTotalInclVat' => 'getLineTotalInclVat',
        'lineVat' => 'getLineVat',
        'originalUnitPriceInclVat' => 'getOriginalUnitPriceInclVat',
        'originalUnitVat' => 'getOriginalUnitVat',
        'originalLineTotalInclVat' => 'getOriginalLineTotalInclVat',
        'originalLineVat' => 'getOriginalLineVat',
        'channelProductNo' => 'getChannelProductNo',
        'quantity' => 'getQuantity',
        'unitPriceInclVat' => 'getUnitPriceInclVat',
        'feeFixed' => 'getFeeFixed',
        'feeRate' => 'getFeeRate',
        'condition' => 'getCondition'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const STATUS_SHIPPED = 'SHIPPED';
    const STATUS_IN_BACKORDER = 'IN_BACKORDER';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_MANCO = 'MANCO';
    const STATUS_IN_COMBI = 'IN_COMBI';
    const STATUS_CLOSED = 'CLOSED';
    const STATUS__NEW = 'NEW';
    const STATUS_RETURNED = 'RETURNED';
    const STATUS_REQUIRES_CORRECTION = 'REQUIRES_CORRECTION';
    const CONDITION__NEW = 'NEW';
    const CONDITION_NEW_REFURBISHED = 'NEW_REFURBISHED';
    const CONDITION_USED_AS_NEW = 'USED_AS_NEW';
    const CONDITION_USED_GOOD = 'USED_GOOD';
    const CONDITION_USED_REASONABLE = 'USED_REASONABLE';
    const CONDITION_USED_MEDIOCRE = 'USED_MEDIOCRE';
    const CONDITION_UNKNOWN = 'UNKNOWN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_IN_PROGRESS,
            self::STATUS_SHIPPED,
            self::STATUS_IN_BACKORDER,
            self::STATUS_CANCELED,
            self::STATUS_MANCO,
            self::STATUS_IN_COMBI,
            self::STATUS_CLOSED,
            self::STATUS__NEW,
            self::STATUS_RETURNED,
            self::STATUS_REQUIRES_CORRECTION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION__NEW,
            self::CONDITION_NEW_REFURBISHED,
            self::CONDITION_USED_AS_NEW,
            self::CONDITION_USED_GOOD,
            self::CONDITION_USED_REASONABLE,
            self::CONDITION_USED_MEDIOCRE,
            self::CONDITION_UNKNOWN,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isFulfillmentByMarketplace'] = isset($data['isFulfillmentByMarketplace']) ? $data['isFulfillmentByMarketplace'] : null;
        $this->container['merchantProductNo'] = isset($data['merchantProductNo']) ? $data['merchantProductNo'] : null;
        $this->container['unitVat'] = isset($data['unitVat']) ? $data['unitVat'] : null;
        $this->container['lineTotalInclVat'] = isset($data['lineTotalInclVat']) ? $data['lineTotalInclVat'] : null;
        $this->container['lineVat'] = isset($data['lineVat']) ? $data['lineVat'] : null;
        $this->container['originalUnitPriceInclVat'] = isset($data['originalUnitPriceInclVat']) ? $data['originalUnitPriceInclVat'] : null;
        $this->container['originalUnitVat'] = isset($data['originalUnitVat']) ? $data['originalUnitVat'] : null;
        $this->container['originalLineTotalInclVat'] = isset($data['originalLineTotalInclVat']) ? $data['originalLineTotalInclVat'] : null;
        $this->container['originalLineVat'] = isset($data['originalLineVat']) ? $data['originalLineVat'] : null;
        $this->container['channelProductNo'] = isset($data['channelProductNo']) ? $data['channelProductNo'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unitPriceInclVat'] = isset($data['unitPriceInclVat']) ? $data['unitPriceInclVat'] : null;
        $this->container['feeFixed'] = isset($data['feeFixed']) ? $data['feeFixed'] : null;
        $this->container['feeRate'] = isset($data['feeRate']) ? $data['feeRate'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['channelProductNo'] === null) {
            $invalidProperties[] = "'channelProductNo' can't be null";
        }
        if ((strlen($this->container['channelProductNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'channelProductNo', the character length must be smaller than or equal to 50.";
        }

        if ((strlen($this->container['channelProductNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'channelProductNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['unitPriceInclVat'] === null) {
            $invalidProperties[] = "'unitPriceInclVat' can't be null";
        }
        $allowedValues = $this->getConditionAllowableValues();
        if (!in_array($this->container['condition'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'condition', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        if ($this->container['channelProductNo'] === null) {
            return false;
        }
        if (strlen($this->container['channelProductNo']) > 50) {
            return false;
        }
        if (strlen($this->container['channelProductNo']) < 0) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        if ($this->container['unitPriceInclVat'] === null) {
            return false;
        }
        $allowedValues = $this->getConditionAllowableValues();
        if (!in_array($this->container['condition'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets isFulfillmentByMarketplace
     *
     * @return bool
     */
    public function getIsFulfillmentByMarketplace()
    {
        return $this->container['isFulfillmentByMarketplace'];
    }

    /**
     * Sets isFulfillmentByMarketplace
     *
     * @param bool $isFulfillmentByMarketplace isFulfillmentByMarketplace
     *
     * @return $this
     */
    public function setIsFulfillmentByMarketplace($isFulfillmentByMarketplace)
    {
        $this->container['isFulfillmentByMarketplace'] = $isFulfillmentByMarketplace;

        return $this;
    }

    /**
     * Gets merchantProductNo
     *
     * @return string
     */
    public function getMerchantProductNo()
    {
        return $this->container['merchantProductNo'];
    }

    /**
     * Sets merchantProductNo
     *
     * @param string $merchantProductNo merchantProductNo
     *
     * @return $this
     */
    public function setMerchantProductNo($merchantProductNo)
    {
        $this->container['merchantProductNo'] = $merchantProductNo;

        return $this;
    }

    /**
     * Gets unitVat
     *
     * @return double
     */
    public function getUnitVat()
    {
        return $this->container['unitVat'];
    }

    /**
     * Sets unitVat
     *
     * @param double $unitVat The total amount of VAT charged over the value of a single unit of the ordered product  (in the shop's base currency calculated using the exchange rate at the time of ordering).
     *
     * @return $this
     */
    public function setUnitVat($unitVat)
    {
        $this->container['unitVat'] = $unitVat;

        return $this;
    }

    /**
     * Gets lineTotalInclVat
     *
     * @return double
     */
    public function getLineTotalInclVat()
    {
        return $this->container['lineTotalInclVat'];
    }

    /**
     * Sets lineTotalInclVat
     *
     * @param double $lineTotalInclVat The total value of the order line (quantity * unit price) including VAT  (in the shop's base currency calculated using the exchange rate at the time of ordering).
     *
     * @return $this
     */
    public function setLineTotalInclVat($lineTotalInclVat)
    {
        $this->container['lineTotalInclVat'] = $lineTotalInclVat;

        return $this;
    }

    /**
     * Gets lineVat
     *
     * @return double
     */
    public function getLineVat()
    {
        return $this->container['lineVat'];
    }

    /**
     * Sets lineVat
     *
     * @param double $lineVat The total amount of VAT charged over the total value of the order line (quantity * unit price)  (in the shop's base currency calculated using the exchange rate at the time of ordering).
     *
     * @return $this
     */
    public function setLineVat($lineVat)
    {
        $this->container['lineVat'] = $lineVat;

        return $this;
    }

    /**
     * Gets originalUnitPriceInclVat
     *
     * @return double
     */
    public function getOriginalUnitPriceInclVat()
    {
        return $this->container['originalUnitPriceInclVat'];
    }

    /**
     * Sets originalUnitPriceInclVat
     *
     * @param double $originalUnitPriceInclVat The value of a single unit of the ordered product including VAT  (in the currency in which the order was paid for, see CurrencyCode).
     *
     * @return $this
     */
    public function setOriginalUnitPriceInclVat($originalUnitPriceInclVat)
    {
        $this->container['originalUnitPriceInclVat'] = $originalUnitPriceInclVat;

        return $this;
    }

    /**
     * Gets originalUnitVat
     *
     * @return double
     */
    public function getOriginalUnitVat()
    {
        return $this->container['originalUnitVat'];
    }

    /**
     * Sets originalUnitVat
     *
     * @param double $originalUnitVat The total amount of VAT charged over the value of a single unit of the ordered product  (in the currency in which the order was paid for, see CurrencyCode).
     *
     * @return $this
     */
    public function setOriginalUnitVat($originalUnitVat)
    {
        $this->container['originalUnitVat'] = $originalUnitVat;

        return $this;
    }

    /**
     * Gets originalLineTotalInclVat
     *
     * @return double
     */
    public function getOriginalLineTotalInclVat()
    {
        return $this->container['originalLineTotalInclVat'];
    }

    /**
     * Sets originalLineTotalInclVat
     *
     * @param double $originalLineTotalInclVat The total value of the order line (quantity * unit price) including VAT  (in the currency in which the order was paid for, see CurrencyCode).
     *
     * @return $this
     */
    public function setOriginalLineTotalInclVat($originalLineTotalInclVat)
    {
        $this->container['originalLineTotalInclVat'] = $originalLineTotalInclVat;

        return $this;
    }

    /**
     * Gets originalLineVat
     *
     * @return double
     */
    public function getOriginalLineVat()
    {
        return $this->container['originalLineVat'];
    }

    /**
     * Sets originalLineVat
     *
     * @param double $originalLineVat The total amount of VAT charged over the total value of the order line (quantity * unit price)  (in the currency in which the order was paid for, see CurrencyCode).
     *
     * @return $this
     */
    public function setOriginalLineVat($originalLineVat)
    {
        $this->container['originalLineVat'] = $originalLineVat;

        return $this;
    }

    /**
     * Gets channelProductNo
     *
     * @return string
     */
    public function getChannelProductNo()
    {
        return $this->container['channelProductNo'];
    }

    /**
     * Sets channelProductNo
     *
     * @param string $channelProductNo channelProductNo
     *
     * @return $this
     */
    public function setChannelProductNo($channelProductNo)
    {
        if ((strlen($channelProductNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $channelProductNo when calling MerchantOrderLineResponse., must be smaller than or equal to 50.');
        }
        if ((strlen($channelProductNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $channelProductNo when calling MerchantOrderLineResponse., must be bigger than or equal to 0.');
        }

        $this->container['channelProductNo'] = $channelProductNo;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unitPriceInclVat
     *
     * @return double
     */
    public function getUnitPriceInclVat()
    {
        return $this->container['unitPriceInclVat'];
    }

    /**
     * Sets unitPriceInclVat
     *
     * @param double $unitPriceInclVat The value of a single unit of the ordered product including VAT  (in the shop's base currency calculated using the exchange rate at the time of ordering).
     *
     * @return $this
     */
    public function setUnitPriceInclVat($unitPriceInclVat)
    {
        $this->container['unitPriceInclVat'] = $unitPriceInclVat;

        return $this;
    }

    /**
     * Gets feeFixed
     *
     * @return double
     */
    public function getFeeFixed()
    {
        return $this->container['feeFixed'];
    }

    /**
     * Sets feeFixed
     *
     * @param double $feeFixed A fixed fee that is charged by the Channel for this orderline.  This field is optional, send 0 if not applicable.
     *
     * @return $this
     */
    public function setFeeFixed($feeFixed)
    {
        $this->container['feeFixed'] = $feeFixed;

        return $this;
    }

    /**
     * Gets feeRate
     *
     * @return double
     */
    public function getFeeRate()
    {
        return $this->container['feeRate'];
    }

    /**
     * Sets feeRate
     *
     * @param double $feeRate A percentage fee that is charged by the Channel for this orderline.  This field is optional, send 0 if not applicable.
     *
     * @return $this
     */
    public function setFeeRate($feeRate)
    {
        $this->container['feeRate'] = $feeRate;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition The condition of the product, this can be used to indicate that a product is a second-hand product
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $allowedValues = $this->getConditionAllowableValues();
        if (!is_null($condition) && !in_array($condition, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'condition', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['condition'] = $condition;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


