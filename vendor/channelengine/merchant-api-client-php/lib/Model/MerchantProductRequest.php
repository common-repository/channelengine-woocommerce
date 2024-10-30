<?php
/**
 * MerchantProductRequest
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
 * MerchantProductRequest Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MerchantProductRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MerchantProductRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantProductNo' => 'string',
        'parentMerchantProductNo' => 'string',
        'parentMerchantProductNo2' => 'string',
        'name' => 'string',
        'description' => 'string',
        'brand' => 'string',
        'size' => 'string',
        'color' => 'string',
        'ean' => 'string',
        'manufacturerProductNumber' => 'string',
        'stock' => 'int',
        'price' => 'double',
        'mSRP' => 'double',
        'purchasePrice' => 'double',
        'vatRateType' => 'string',
        'shippingCost' => 'double',
        'shippingTime' => 'string',
        'url' => 'string',
        'imageUrl' => 'string',
        'extraImageUrl1' => 'string',
        'extraImageUrl2' => 'string',
        'extraImageUrl3' => 'string',
        'extraImageUrl4' => 'string',
        'extraImageUrl5' => 'string',
        'extraImageUrl6' => 'string',
        'extraImageUrl7' => 'string',
        'extraImageUrl8' => 'string',
        'extraImageUrl9' => 'string',
        'categoryTrail' => 'string',
        'extraData' => '\ChannelEngine\Merchant\ApiClient\Model\ExtraDataItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchantProductNo' => null,
        'parentMerchantProductNo' => null,
        'parentMerchantProductNo2' => null,
        'name' => null,
        'description' => null,
        'brand' => null,
        'size' => null,
        'color' => null,
        'ean' => null,
        'manufacturerProductNumber' => null,
        'stock' => 'int32',
        'price' => 'double',
        'mSRP' => 'double',
        'purchasePrice' => 'double',
        'vatRateType' => null,
        'shippingCost' => 'double',
        'shippingTime' => null,
        'url' => null,
        'imageUrl' => null,
        'extraImageUrl1' => null,
        'extraImageUrl2' => null,
        'extraImageUrl3' => null,
        'extraImageUrl4' => null,
        'extraImageUrl5' => null,
        'extraImageUrl6' => null,
        'extraImageUrl7' => null,
        'extraImageUrl8' => null,
        'extraImageUrl9' => null,
        'categoryTrail' => null,
        'extraData' => null
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
        'merchantProductNo' => 'MerchantProductNo',
        'parentMerchantProductNo' => 'ParentMerchantProductNo',
        'parentMerchantProductNo2' => 'ParentMerchantProductNo2',
        'name' => 'Name',
        'description' => 'Description',
        'brand' => 'Brand',
        'size' => 'Size',
        'color' => 'Color',
        'ean' => 'Ean',
        'manufacturerProductNumber' => 'ManufacturerProductNumber',
        'stock' => 'Stock',
        'price' => 'Price',
        'mSRP' => 'MSRP',
        'purchasePrice' => 'PurchasePrice',
        'vatRateType' => 'VatRateType',
        'shippingCost' => 'ShippingCost',
        'shippingTime' => 'ShippingTime',
        'url' => 'Url',
        'imageUrl' => 'ImageUrl',
        'extraImageUrl1' => 'ExtraImageUrl1',
        'extraImageUrl2' => 'ExtraImageUrl2',
        'extraImageUrl3' => 'ExtraImageUrl3',
        'extraImageUrl4' => 'ExtraImageUrl4',
        'extraImageUrl5' => 'ExtraImageUrl5',
        'extraImageUrl6' => 'ExtraImageUrl6',
        'extraImageUrl7' => 'ExtraImageUrl7',
        'extraImageUrl8' => 'ExtraImageUrl8',
        'extraImageUrl9' => 'ExtraImageUrl9',
        'categoryTrail' => 'CategoryTrail',
        'extraData' => 'ExtraData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantProductNo' => 'setMerchantProductNo',
        'parentMerchantProductNo' => 'setParentMerchantProductNo',
        'parentMerchantProductNo2' => 'setParentMerchantProductNo2',
        'name' => 'setName',
        'description' => 'setDescription',
        'brand' => 'setBrand',
        'size' => 'setSize',
        'color' => 'setColor',
        'ean' => 'setEan',
        'manufacturerProductNumber' => 'setManufacturerProductNumber',
        'stock' => 'setStock',
        'price' => 'setPrice',
        'mSRP' => 'setMSRP',
        'purchasePrice' => 'setPurchasePrice',
        'vatRateType' => 'setVatRateType',
        'shippingCost' => 'setShippingCost',
        'shippingTime' => 'setShippingTime',
        'url' => 'setUrl',
        'imageUrl' => 'setImageUrl',
        'extraImageUrl1' => 'setExtraImageUrl1',
        'extraImageUrl2' => 'setExtraImageUrl2',
        'extraImageUrl3' => 'setExtraImageUrl3',
        'extraImageUrl4' => 'setExtraImageUrl4',
        'extraImageUrl5' => 'setExtraImageUrl5',
        'extraImageUrl6' => 'setExtraImageUrl6',
        'extraImageUrl7' => 'setExtraImageUrl7',
        'extraImageUrl8' => 'setExtraImageUrl8',
        'extraImageUrl9' => 'setExtraImageUrl9',
        'categoryTrail' => 'setCategoryTrail',
        'extraData' => 'setExtraData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantProductNo' => 'getMerchantProductNo',
        'parentMerchantProductNo' => 'getParentMerchantProductNo',
        'parentMerchantProductNo2' => 'getParentMerchantProductNo2',
        'name' => 'getName',
        'description' => 'getDescription',
        'brand' => 'getBrand',
        'size' => 'getSize',
        'color' => 'getColor',
        'ean' => 'getEan',
        'manufacturerProductNumber' => 'getManufacturerProductNumber',
        'stock' => 'getStock',
        'price' => 'getPrice',
        'mSRP' => 'getMSRP',
        'purchasePrice' => 'getPurchasePrice',
        'vatRateType' => 'getVatRateType',
        'shippingCost' => 'getShippingCost',
        'shippingTime' => 'getShippingTime',
        'url' => 'getUrl',
        'imageUrl' => 'getImageUrl',
        'extraImageUrl1' => 'getExtraImageUrl1',
        'extraImageUrl2' => 'getExtraImageUrl2',
        'extraImageUrl3' => 'getExtraImageUrl3',
        'extraImageUrl4' => 'getExtraImageUrl4',
        'extraImageUrl5' => 'getExtraImageUrl5',
        'extraImageUrl6' => 'getExtraImageUrl6',
        'extraImageUrl7' => 'getExtraImageUrl7',
        'extraImageUrl8' => 'getExtraImageUrl8',
        'extraImageUrl9' => 'getExtraImageUrl9',
        'categoryTrail' => 'getCategoryTrail',
        'extraData' => 'getExtraData'
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

    const VAT_RATE_TYPE_STANDARD = 'STANDARD';
    const VAT_RATE_TYPE_REDUCED = 'REDUCED';
    const VAT_RATE_TYPE_SUPER_REDUCED = 'SUPER_REDUCED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVatRateTypeAllowableValues()
    {
        return [
            self::VAT_RATE_TYPE_STANDARD,
            self::VAT_RATE_TYPE_REDUCED,
            self::VAT_RATE_TYPE_SUPER_REDUCED,
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
        $this->container['merchantProductNo'] = isset($data['merchantProductNo']) ? $data['merchantProductNo'] : null;
        $this->container['parentMerchantProductNo'] = isset($data['parentMerchantProductNo']) ? $data['parentMerchantProductNo'] : null;
        $this->container['parentMerchantProductNo2'] = isset($data['parentMerchantProductNo2']) ? $data['parentMerchantProductNo2'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['manufacturerProductNumber'] = isset($data['manufacturerProductNumber']) ? $data['manufacturerProductNumber'] : null;
        $this->container['stock'] = isset($data['stock']) ? $data['stock'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['mSRP'] = isset($data['mSRP']) ? $data['mSRP'] : null;
        $this->container['purchasePrice'] = isset($data['purchasePrice']) ? $data['purchasePrice'] : null;
        $this->container['vatRateType'] = isset($data['vatRateType']) ? $data['vatRateType'] : null;
        $this->container['shippingCost'] = isset($data['shippingCost']) ? $data['shippingCost'] : null;
        $this->container['shippingTime'] = isset($data['shippingTime']) ? $data['shippingTime'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['extraImageUrl1'] = isset($data['extraImageUrl1']) ? $data['extraImageUrl1'] : null;
        $this->container['extraImageUrl2'] = isset($data['extraImageUrl2']) ? $data['extraImageUrl2'] : null;
        $this->container['extraImageUrl3'] = isset($data['extraImageUrl3']) ? $data['extraImageUrl3'] : null;
        $this->container['extraImageUrl4'] = isset($data['extraImageUrl4']) ? $data['extraImageUrl4'] : null;
        $this->container['extraImageUrl5'] = isset($data['extraImageUrl5']) ? $data['extraImageUrl5'] : null;
        $this->container['extraImageUrl6'] = isset($data['extraImageUrl6']) ? $data['extraImageUrl6'] : null;
        $this->container['extraImageUrl7'] = isset($data['extraImageUrl7']) ? $data['extraImageUrl7'] : null;
        $this->container['extraImageUrl8'] = isset($data['extraImageUrl8']) ? $data['extraImageUrl8'] : null;
        $this->container['extraImageUrl9'] = isset($data['extraImageUrl9']) ? $data['extraImageUrl9'] : null;
        $this->container['categoryTrail'] = isset($data['categoryTrail']) ? $data['categoryTrail'] : null;
        $this->container['extraData'] = isset($data['extraData']) ? $data['extraData'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getVatRateTypeAllowableValues();
        if (!in_array($this->container['vatRateType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'vatRateType', must be one of '%s'",
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

        $allowedValues = $this->getVatRateTypeAllowableValues();
        if (!in_array($this->container['vatRateType'], $allowedValues)) {
            return false;
        }
        return true;
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
     * @param string $merchantProductNo A unique identifier of the product.
     *
     * @return $this
     */
    public function setMerchantProductNo($merchantProductNo)
    {
        $this->container['merchantProductNo'] = $merchantProductNo;

        return $this;
    }

    /**
     * Gets parentMerchantProductNo
     *
     * @return string
     */
    public function getParentMerchantProductNo()
    {
        return $this->container['parentMerchantProductNo'];
    }

    /**
     * Sets parentMerchantProductNo
     *
     * @param string $parentMerchantProductNo If this product is a different version of another  product (for example, all fields are the same except  size), then this field should contain  the 'MerchantProductNo' of the parent. The parent  should already exist (or be present between the products  in the content of the API call, it does not matter whether   the parent is behind the child in the list).
     *
     * @return $this
     */
    public function setParentMerchantProductNo($parentMerchantProductNo)
    {
        $this->container['parentMerchantProductNo'] = $parentMerchantProductNo;

        return $this;
    }

    /**
     * Gets parentMerchantProductNo2
     *
     * @return string
     */
    public function getParentMerchantProductNo2()
    {
        return $this->container['parentMerchantProductNo2'];
    }

    /**
     * Sets parentMerchantProductNo2
     *
     * @param string $parentMerchantProductNo2 If this product is a different version of another  product (for example, all fields are the same except  color) and itself is a parent with child products (e.g. of sizes),   then this field should contain the 'MerchantProductNo' of the grandparent. The grandparent  should already exist (or be present between the products  in the content of the API call, it does not matter whether   the grandparent is behind the child in the list).    Use this field in case of three level product hierarchy,   e.g. model - color - size.   This is required for channels like Otto.
     *
     * @return $this
     */
    public function setParentMerchantProductNo2($parentMerchantProductNo2)
    {
        $this->container['parentMerchantProductNo2'] = $parentMerchantProductNo2;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string $ean ean
     *
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets manufacturerProductNumber
     *
     * @return string
     */
    public function getManufacturerProductNumber()
    {
        return $this->container['manufacturerProductNumber'];
    }

    /**
     * Sets manufacturerProductNumber
     *
     * @param string $manufacturerProductNumber manufacturerProductNumber
     *
     * @return $this
     */
    public function setManufacturerProductNumber($manufacturerProductNumber)
    {
        $this->container['manufacturerProductNumber'] = $manufacturerProductNumber;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return int
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param int $stock stock
     *
     * @return $this
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price Price, including VAT.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets mSRP
     *
     * @return double
     */
    public function getMSRP()
    {
        return $this->container['mSRP'];
    }

    /**
     * Sets mSRP
     *
     * @param double $mSRP Manufacturer's suggested retail price
     *
     * @return $this
     */
    public function setMSRP($mSRP)
    {
        $this->container['mSRP'] = $mSRP;

        return $this;
    }

    /**
     * Gets purchasePrice
     *
     * @return double
     */
    public function getPurchasePrice()
    {
        return $this->container['purchasePrice'];
    }

    /**
     * Sets purchasePrice
     *
     * @param double $purchasePrice purchasePrice
     *
     * @return $this
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->container['purchasePrice'] = $purchasePrice;

        return $this;
    }

    /**
     * Gets vatRateType
     *
     * @return string
     */
    public function getVatRateType()
    {
        return $this->container['vatRateType'];
    }

    /**
     * Sets vatRateType
     *
     * @param string $vatRateType The type of VAT which applies to this product.  See: http://ec.europa.eu/taxation_customs/taxation/vat/topics/rates_en.htm
     *
     * @return $this
     */
    public function setVatRateType($vatRateType)
    {
        $allowedValues = $this->getVatRateTypeAllowableValues();
        if (!is_null($vatRateType) && !in_array($vatRateType, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'vatRateType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['vatRateType'] = $vatRateType;

        return $this;
    }

    /**
     * Gets shippingCost
     *
     * @return double
     */
    public function getShippingCost()
    {
        return $this->container['shippingCost'];
    }

    /**
     * Sets shippingCost
     *
     * @param double $shippingCost shippingCost
     *
     * @return $this
     */
    public function setShippingCost($shippingCost)
    {
        $this->container['shippingCost'] = $shippingCost;

        return $this;
    }

    /**
     * Gets shippingTime
     *
     * @return string
     */
    public function getShippingTime()
    {
        return $this->container['shippingTime'];
    }

    /**
     * Sets shippingTime
     *
     * @param string $shippingTime A textual representation of the shippingtime.  For example, in Dutch: 'Op werkdagen voor 22:00 uur besteld, morgen in huis'
     *
     * @return $this
     */
    public function setShippingTime($shippingTime)
    {
        $this->container['shippingTime'] = $shippingTime;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url A URL pointing to the merchant's webpage  which displays this product.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets imageUrl
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string $imageUrl A URL at which an image of this product  can be found.
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * Gets extraImageUrl1
     *
     * @return string
     */
    public function getExtraImageUrl1()
    {
        return $this->container['extraImageUrl1'];
    }

    /**
     * Sets extraImageUrl1
     *
     * @param string $extraImageUrl1 extraImageUrl1
     *
     * @return $this
     */
    public function setExtraImageUrl1($extraImageUrl1)
    {
        $this->container['extraImageUrl1'] = $extraImageUrl1;

        return $this;
    }

    /**
     * Gets extraImageUrl2
     *
     * @return string
     */
    public function getExtraImageUrl2()
    {
        return $this->container['extraImageUrl2'];
    }

    /**
     * Sets extraImageUrl2
     *
     * @param string $extraImageUrl2 extraImageUrl2
     *
     * @return $this
     */
    public function setExtraImageUrl2($extraImageUrl2)
    {
        $this->container['extraImageUrl2'] = $extraImageUrl2;

        return $this;
    }

    /**
     * Gets extraImageUrl3
     *
     * @return string
     */
    public function getExtraImageUrl3()
    {
        return $this->container['extraImageUrl3'];
    }

    /**
     * Sets extraImageUrl3
     *
     * @param string $extraImageUrl3 extraImageUrl3
     *
     * @return $this
     */
    public function setExtraImageUrl3($extraImageUrl3)
    {
        $this->container['extraImageUrl3'] = $extraImageUrl3;

        return $this;
    }

    /**
     * Gets extraImageUrl4
     *
     * @return string
     */
    public function getExtraImageUrl4()
    {
        return $this->container['extraImageUrl4'];
    }

    /**
     * Sets extraImageUrl4
     *
     * @param string $extraImageUrl4 extraImageUrl4
     *
     * @return $this
     */
    public function setExtraImageUrl4($extraImageUrl4)
    {
        $this->container['extraImageUrl4'] = $extraImageUrl4;

        return $this;
    }

    /**
     * Gets extraImageUrl5
     *
     * @return string
     */
    public function getExtraImageUrl5()
    {
        return $this->container['extraImageUrl5'];
    }

    /**
     * Sets extraImageUrl5
     *
     * @param string $extraImageUrl5 extraImageUrl5
     *
     * @return $this
     */
    public function setExtraImageUrl5($extraImageUrl5)
    {
        $this->container['extraImageUrl5'] = $extraImageUrl5;

        return $this;
    }

    /**
     * Gets extraImageUrl6
     *
     * @return string
     */
    public function getExtraImageUrl6()
    {
        return $this->container['extraImageUrl6'];
    }

    /**
     * Sets extraImageUrl6
     *
     * @param string $extraImageUrl6 extraImageUrl6
     *
     * @return $this
     */
    public function setExtraImageUrl6($extraImageUrl6)
    {
        $this->container['extraImageUrl6'] = $extraImageUrl6;

        return $this;
    }

    /**
     * Gets extraImageUrl7
     *
     * @return string
     */
    public function getExtraImageUrl7()
    {
        return $this->container['extraImageUrl7'];
    }

    /**
     * Sets extraImageUrl7
     *
     * @param string $extraImageUrl7 extraImageUrl7
     *
     * @return $this
     */
    public function setExtraImageUrl7($extraImageUrl7)
    {
        $this->container['extraImageUrl7'] = $extraImageUrl7;

        return $this;
    }

    /**
     * Gets extraImageUrl8
     *
     * @return string
     */
    public function getExtraImageUrl8()
    {
        return $this->container['extraImageUrl8'];
    }

    /**
     * Sets extraImageUrl8
     *
     * @param string $extraImageUrl8 extraImageUrl8
     *
     * @return $this
     */
    public function setExtraImageUrl8($extraImageUrl8)
    {
        $this->container['extraImageUrl8'] = $extraImageUrl8;

        return $this;
    }

    /**
     * Gets extraImageUrl9
     *
     * @return string
     */
    public function getExtraImageUrl9()
    {
        return $this->container['extraImageUrl9'];
    }

    /**
     * Sets extraImageUrl9
     *
     * @param string $extraImageUrl9 extraImageUrl9
     *
     * @return $this
     */
    public function setExtraImageUrl9($extraImageUrl9)
    {
        $this->container['extraImageUrl9'] = $extraImageUrl9;

        return $this;
    }

    /**
     * Gets categoryTrail
     *
     * @return string
     */
    public function getCategoryTrail()
    {
        return $this->container['categoryTrail'];
    }

    /**
     * Sets categoryTrail
     *
     * @param string $categoryTrail The category to which this product belongs.  Please supply this field in the following format:  'maincategory &gt; category &gt; subcategory'  For example:  'vehicles &gt; bikes &gt; mountainbike'
     *
     * @return $this
     */
    public function setCategoryTrail($categoryTrail)
    {
        $this->container['categoryTrail'] = $categoryTrail;

        return $this;
    }

    /**
     * Gets extraData
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\ExtraDataItem[]
     */
    public function getExtraData()
    {
        return $this->container['extraData'];
    }

    /**
     * Sets extraData
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\ExtraDataItem[] $extraData An optional list of key-value pairs containing  extra data about this product. This data can be  sent to channels or used for filtering products.
     *
     * @return $this
     */
    public function setExtraData($extraData)
    {
        $this->container['extraData'] = $extraData;

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


