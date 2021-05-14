<?php
/**
 * Gs1128Label
 *
 * PHP version 5
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Infoplus API
 *
 * Infoplus API.
 *
 * OpenAPI spec version: beta
 * Contact: api@infopluscommerce.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Infoplus\Infoplus\Model;

use \ArrayAccess;
use \Infoplus\ObjectSerializer;

/**
 * Gs1128Label Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Gs1128Label implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'gs1128Label';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'sscc' => 'string',
        'lob_id' => 'int',
        'order_no' => 'float',
        'gs1128_template_id' => 'int',
        'no_of_copies' => 'int',
        'record_type' => 'string',
        'pallet_load_id' => 'int',
        'master_carton_load_id' => 'int',
        'carton_id' => 'int',
        'line_item_id' => 'int',
        'line_item_unit_no' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'custom_fields' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'sscc' => null,
        'lob_id' => 'int32',
        'order_no' => null,
        'gs1128_template_id' => 'int32',
        'no_of_copies' => 'int32',
        'record_type' => null,
        'pallet_load_id' => 'int32',
        'master_carton_load_id' => 'int32',
        'carton_id' => 'int32',
        'line_item_id' => 'int32',
        'line_item_unit_no' => 'int32',
        'create_date' => 'date-time',
        'modify_date' => 'date-time',
        'custom_fields' => null
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
        'id' => 'id',
        'sscc' => 'sscc',
        'lob_id' => 'lobId',
        'order_no' => 'orderNo',
        'gs1128_template_id' => 'gs1128TemplateId',
        'no_of_copies' => 'noOfCopies',
        'record_type' => 'recordType',
        'pallet_load_id' => 'palletLoadId',
        'master_carton_load_id' => 'masterCartonLoadId',
        'carton_id' => 'cartonId',
        'line_item_id' => 'lineItemId',
        'line_item_unit_no' => 'lineItemUnitNo',
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sscc' => 'setSscc',
        'lob_id' => 'setLobId',
        'order_no' => 'setOrderNo',
        'gs1128_template_id' => 'setGs1128TemplateId',
        'no_of_copies' => 'setNoOfCopies',
        'record_type' => 'setRecordType',
        'pallet_load_id' => 'setPalletLoadId',
        'master_carton_load_id' => 'setMasterCartonLoadId',
        'carton_id' => 'setCartonId',
        'line_item_id' => 'setLineItemId',
        'line_item_unit_no' => 'setLineItemUnitNo',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sscc' => 'getSscc',
        'lob_id' => 'getLobId',
        'order_no' => 'getOrderNo',
        'gs1128_template_id' => 'getGs1128TemplateId',
        'no_of_copies' => 'getNoOfCopies',
        'record_type' => 'getRecordType',
        'pallet_load_id' => 'getPalletLoadId',
        'master_carton_load_id' => 'getMasterCartonLoadId',
        'carton_id' => 'getCartonId',
        'line_item_id' => 'getLineItemId',
        'line_item_unit_no' => 'getLineItemUnitNo',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'custom_fields' => 'getCustomFields'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sscc'] = isset($data['sscc']) ? $data['sscc'] : null;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['order_no'] = isset($data['order_no']) ? $data['order_no'] : null;
        $this->container['gs1128_template_id'] = isset($data['gs1128_template_id']) ? $data['gs1128_template_id'] : null;
        $this->container['no_of_copies'] = isset($data['no_of_copies']) ? $data['no_of_copies'] : null;
        $this->container['record_type'] = isset($data['record_type']) ? $data['record_type'] : null;
        $this->container['pallet_load_id'] = isset($data['pallet_load_id']) ? $data['pallet_load_id'] : null;
        $this->container['master_carton_load_id'] = isset($data['master_carton_load_id']) ? $data['master_carton_load_id'] : null;
        $this->container['carton_id'] = isset($data['carton_id']) ? $data['carton_id'] : null;
        $this->container['line_item_id'] = isset($data['line_item_id']) ? $data['line_item_id'] : null;
        $this->container['line_item_unit_no'] = isset($data['line_item_unit_no']) ? $data['line_item_unit_no'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['modify_date'] = isset($data['modify_date']) ? $data['modify_date'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lob_id'] === null) {
            $invalidProperties[] = "'lob_id' can't be null";
        }
        if ($this->container['order_no'] === null) {
            $invalidProperties[] = "'order_no' can't be null";
        }
        if ($this->container['gs1128_template_id'] === null) {
            $invalidProperties[] = "'gs1128_template_id' can't be null";
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

        if ($this->container['lob_id'] === null) {
            return false;
        }
        if ($this->container['order_no'] === null) {
            return false;
        }
        if ($this->container['gs1128_template_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sscc
     *
     * @return string
     */
    public function getSscc()
    {
        return $this->container['sscc'];
    }

    /**
     * Sets sscc
     *
     * @param string $sscc sscc
     *
     * @return $this
     */
    public function setSscc($sscc)
    {
        $this->container['sscc'] = $sscc;

        return $this;
    }

    /**
     * Gets lob_id
     *
     * @return int
     */
    public function getLobId()
    {
        return $this->container['lob_id'];
    }

    /**
     * Sets lob_id
     *
     * @param int $lob_id lob_id
     *
     * @return $this
     */
    public function setLobId($lob_id)
    {
        $this->container['lob_id'] = $lob_id;

        return $this;
    }

    /**
     * Gets order_no
     *
     * @return float
     */
    public function getOrderNo()
    {
        return $this->container['order_no'];
    }

    /**
     * Sets order_no
     *
     * @param float $order_no order_no
     *
     * @return $this
     */
    public function setOrderNo($order_no)
    {
        $this->container['order_no'] = $order_no;

        return $this;
    }

    /**
     * Gets gs1128_template_id
     *
     * @return int
     */
    public function getGs1128TemplateId()
    {
        return $this->container['gs1128_template_id'];
    }

    /**
     * Sets gs1128_template_id
     *
     * @param int $gs1128_template_id gs1128_template_id
     *
     * @return $this
     */
    public function setGs1128TemplateId($gs1128_template_id)
    {
        $this->container['gs1128_template_id'] = $gs1128_template_id;

        return $this;
    }

    /**
     * Gets no_of_copies
     *
     * @return int
     */
    public function getNoOfCopies()
    {
        return $this->container['no_of_copies'];
    }

    /**
     * Sets no_of_copies
     *
     * @param int $no_of_copies no_of_copies
     *
     * @return $this
     */
    public function setNoOfCopies($no_of_copies)
    {
        $this->container['no_of_copies'] = $no_of_copies;

        return $this;
    }

    /**
     * Gets record_type
     *
     * @return string
     */
    public function getRecordType()
    {
        return $this->container['record_type'];
    }

    /**
     * Sets record_type
     *
     * @param string $record_type record_type
     *
     * @return $this
     */
    public function setRecordType($record_type)
    {
        $this->container['record_type'] = $record_type;

        return $this;
    }

    /**
     * Gets pallet_load_id
     *
     * @return int
     */
    public function getPalletLoadId()
    {
        return $this->container['pallet_load_id'];
    }

    /**
     * Sets pallet_load_id
     *
     * @param int $pallet_load_id pallet_load_id
     *
     * @return $this
     */
    public function setPalletLoadId($pallet_load_id)
    {
        $this->container['pallet_load_id'] = $pallet_load_id;

        return $this;
    }

    /**
     * Gets master_carton_load_id
     *
     * @return int
     */
    public function getMasterCartonLoadId()
    {
        return $this->container['master_carton_load_id'];
    }

    /**
     * Sets master_carton_load_id
     *
     * @param int $master_carton_load_id master_carton_load_id
     *
     * @return $this
     */
    public function setMasterCartonLoadId($master_carton_load_id)
    {
        $this->container['master_carton_load_id'] = $master_carton_load_id;

        return $this;
    }

    /**
     * Gets carton_id
     *
     * @return int
     */
    public function getCartonId()
    {
        return $this->container['carton_id'];
    }

    /**
     * Sets carton_id
     *
     * @param int $carton_id carton_id
     *
     * @return $this
     */
    public function setCartonId($carton_id)
    {
        $this->container['carton_id'] = $carton_id;

        return $this;
    }

    /**
     * Gets line_item_id
     *
     * @return int
     */
    public function getLineItemId()
    {
        return $this->container['line_item_id'];
    }

    /**
     * Sets line_item_id
     *
     * @param int $line_item_id line_item_id
     *
     * @return $this
     */
    public function setLineItemId($line_item_id)
    {
        $this->container['line_item_id'] = $line_item_id;

        return $this;
    }

    /**
     * Gets line_item_unit_no
     *
     * @return int
     */
    public function getLineItemUnitNo()
    {
        return $this->container['line_item_unit_no'];
    }

    /**
     * Sets line_item_unit_no
     *
     * @param int $line_item_unit_no line_item_unit_no
     *
     * @return $this
     */
    public function setLineItemUnitNo($line_item_unit_no)
    {
        $this->container['line_item_unit_no'] = $line_item_unit_no;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime $create_date create_date
     *
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets modify_date
     *
     * @return \DateTime
     */
    public function getModifyDate()
    {
        return $this->container['modify_date'];
    }

    /**
     * Sets modify_date
     *
     * @param \DateTime $modify_date modify_date
     *
     * @return $this
     */
    public function setModifyDate($modify_date)
    {
        $this->container['modify_date'] = $modify_date;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return map[string,object]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param map[string,object] $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

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


