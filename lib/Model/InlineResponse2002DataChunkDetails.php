<?php
/**
 * InlineResponse2002DataChunkDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  ListcleanSwagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Listclean API (Beta)
 *
 * Listclean APIs. For API reference doc at [https://api.listclean.xyz](https://api.listclean.xyz).
 *
 * OpenAPI spec version: 0.1.0
 * Contact: support@listclean.xyz
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ListcleanSwagger\Client\Model;

use \ArrayAccess;
use \ListcleanSwagger\Client\ObjectSerializer;

/**
 * InlineResponse2002DataChunkDetails Class Doc Comment
 *
 * @category Class
 * @package  ListcleanSwagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2002DataChunkDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_2_data_chunk_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_chunk_count' => 'int',
        'uploaded_chunk_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_chunk_count' => null,
        'uploaded_chunk_count' => null
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
        'total_chunk_count' => 'total_chunk_count',
        'uploaded_chunk_count' => 'uploaded_chunk_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_chunk_count' => 'setTotalChunkCount',
        'uploaded_chunk_count' => 'setUploadedChunkCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_chunk_count' => 'getTotalChunkCount',
        'uploaded_chunk_count' => 'getUploadedChunkCount'
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
        $this->container['total_chunk_count'] = isset($data['total_chunk_count']) ? $data['total_chunk_count'] : null;
        $this->container['uploaded_chunk_count'] = isset($data['uploaded_chunk_count']) ? $data['uploaded_chunk_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets total_chunk_count
     *
     * @return int
     */
    public function getTotalChunkCount()
    {
        return $this->container['total_chunk_count'];
    }

    /**
     * Sets total_chunk_count
     *
     * @param int $total_chunk_count Total numbers of chunk in a upload
     *
     * @return $this
     */
    public function setTotalChunkCount($total_chunk_count)
    {
        $this->container['total_chunk_count'] = $total_chunk_count;

        return $this;
    }

    /**
     * Gets uploaded_chunk_count
     *
     * @return int
     */
    public function getUploadedChunkCount()
    {
        return $this->container['uploaded_chunk_count'];
    }

    /**
     * Sets uploaded_chunk_count
     *
     * @param int $uploaded_chunk_count Total numbers of successfully uploaded chunks
     *
     * @return $this
     */
    public function setUploadedChunkCount($uploaded_chunk_count)
    {
        $this->container['uploaded_chunk_count'] = $uploaded_chunk_count;

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

