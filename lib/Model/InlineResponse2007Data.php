<?php
/**
 * InlineResponse2007Data
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
 * InlineResponse2007Data Class Doc Comment
 *
 * @category Class
 * @package  ListcleanSwagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2007Data implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_7_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'address' => 'string',
        'city' => 'string',
        'country' => 'string',
        'phone_number' => 'string',
        'skype_id' => 'string',
        'company_name' => 'string',
        'website' => 'string',
        'twitter_handle' => 'string',
        'linkedin' => 'string',
        'billing_name' => 'string',
        'billing_company_name' => 'string',
        'billing_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'address' => null,
        'city' => null,
        'country' => null,
        'phone_number' => null,
        'skype_id' => null,
        'company_name' => null,
        'website' => null,
        'twitter_handle' => null,
        'linkedin' => null,
        'billing_name' => null,
        'billing_company_name' => null,
        'billing_address' => null
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
        'name' => 'name',
        'address' => 'address',
        'city' => 'city',
        'country' => 'country',
        'phone_number' => 'phone_number',
        'skype_id' => 'skype_id',
        'company_name' => 'company_name',
        'website' => 'website',
        'twitter_handle' => 'twitter_handle',
        'linkedin' => 'linkedin',
        'billing_name' => 'billing_name',
        'billing_company_name' => 'billing_company_name',
        'billing_address' => 'billing_address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'address' => 'setAddress',
        'city' => 'setCity',
        'country' => 'setCountry',
        'phone_number' => 'setPhoneNumber',
        'skype_id' => 'setSkypeId',
        'company_name' => 'setCompanyName',
        'website' => 'setWebsite',
        'twitter_handle' => 'setTwitterHandle',
        'linkedin' => 'setLinkedin',
        'billing_name' => 'setBillingName',
        'billing_company_name' => 'setBillingCompanyName',
        'billing_address' => 'setBillingAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'address' => 'getAddress',
        'city' => 'getCity',
        'country' => 'getCountry',
        'phone_number' => 'getPhoneNumber',
        'skype_id' => 'getSkypeId',
        'company_name' => 'getCompanyName',
        'website' => 'getWebsite',
        'twitter_handle' => 'getTwitterHandle',
        'linkedin' => 'getLinkedin',
        'billing_name' => 'getBillingName',
        'billing_company_name' => 'getBillingCompanyName',
        'billing_address' => 'getBillingAddress'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['skype_id'] = isset($data['skype_id']) ? $data['skype_id'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['twitter_handle'] = isset($data['twitter_handle']) ? $data['twitter_handle'] : '';
        $this->container['linkedin'] = isset($data['linkedin']) ? $data['linkedin'] : null;
        $this->container['billing_name'] = isset($data['billing_name']) ? $data['billing_name'] : null;
        $this->container['billing_company_name'] = isset($data['billing_company_name']) ? $data['billing_company_name'] : null;
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
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
     * @param string $name First name of the user
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number phone_number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets skype_id
     *
     * @return string
     */
    public function getSkypeId()
    {
        return $this->container['skype_id'];
    }

    /**
     * Sets skype_id
     *
     * @param string $skype_id skype_id
     *
     * @return $this
     */
    public function setSkypeId($skype_id)
    {
        $this->container['skype_id'] = $skype_id;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets twitter_handle
     *
     * @return string
     */
    public function getTwitterHandle()
    {
        return $this->container['twitter_handle'];
    }

    /**
     * Sets twitter_handle
     *
     * @param string $twitter_handle twitter_handle
     *
     * @return $this
     */
    public function setTwitterHandle($twitter_handle)
    {
        $this->container['twitter_handle'] = $twitter_handle;

        return $this;
    }

    /**
     * Gets linkedin
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->container['linkedin'];
    }

    /**
     * Sets linkedin
     *
     * @param string $linkedin linkedin
     *
     * @return $this
     */
    public function setLinkedin($linkedin)
    {
        $this->container['linkedin'] = $linkedin;

        return $this;
    }

    /**
     * Gets billing_name
     *
     * @return string
     */
    public function getBillingName()
    {
        return $this->container['billing_name'];
    }

    /**
     * Sets billing_name
     *
     * @param string $billing_name billing_name
     *
     * @return $this
     */
    public function setBillingName($billing_name)
    {
        $this->container['billing_name'] = $billing_name;

        return $this;
    }

    /**
     * Gets billing_company_name
     *
     * @return string
     */
    public function getBillingCompanyName()
    {
        return $this->container['billing_company_name'];
    }

    /**
     * Sets billing_company_name
     *
     * @param string $billing_company_name billing_company_name
     *
     * @return $this
     */
    public function setBillingCompanyName($billing_company_name)
    {
        $this->container['billing_company_name'] = $billing_company_name;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return string
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param string $billing_address billing_address
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

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


