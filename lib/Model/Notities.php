<?php
/**
 * Notities
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Copyright 2021 Calcasa B.V.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * Calcasa Public API v1
 *
 * The version of the OpenAPI document: 1.1.0
 * Contact: info@calcasa.nl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Calcasa\Api\Model;

use \ArrayAccess;
use \Calcasa\Api\ObjectSerializer;

/**
 * Notities Class Doc Comment
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Notities implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Notities';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'straat' => '\Calcasa\Api\V0\Model\Notitie',
        'huisnummer' => '\Calcasa\Api\V0\Model\Notitie',
        'huisnummertoevoeging' => '\Calcasa\Api\V0\Model\Notitie',
        'postcode' => '\Calcasa\Api\V0\Model\Notitie',
        'woonplaats' => '\Calcasa\Api\V0\Model\Notitie'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'straat' => null,
        'huisnummer' => null,
        'huisnummertoevoeging' => null,
        'postcode' => null,
        'woonplaats' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'straat' => 'straat',
        'huisnummer' => 'huisnummer',
        'huisnummertoevoeging' => 'huisnummertoevoeging',
        'postcode' => 'postcode',
        'woonplaats' => 'woonplaats'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'straat' => 'setStraat',
        'huisnummer' => 'setHuisnummer',
        'huisnummertoevoeging' => 'setHuisnummertoevoeging',
        'postcode' => 'setPostcode',
        'woonplaats' => 'setWoonplaats'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'straat' => 'getStraat',
        'huisnummer' => 'getHuisnummer',
        'huisnummertoevoeging' => 'getHuisnummertoevoeging',
        'postcode' => 'getPostcode',
        'woonplaats' => 'getWoonplaats'
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
        return self::$openAPIModelName;
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
        $this->container['straat'] = $data['straat'] ?? null;
        $this->container['huisnummer'] = $data['huisnummer'] ?? null;
        $this->container['huisnummertoevoeging'] = $data['huisnummertoevoeging'] ?? null;
        $this->container['postcode'] = $data['postcode'] ?? null;
        $this->container['woonplaats'] = $data['woonplaats'] ?? null;
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
     * Gets straat
     *
     * @return Notitie|null
     */
    public function getStraat()
    {
        return $this->container['straat'];
    }

    /**
     * Sets straat
     *
     * @param Notitie|null $straat De straatnaamnotitie. | Waarde | Omschrijving | | --- | --- | | `geen` | De input was correct. | | `gecorrigeerd` | De input was gecorrigeerd. | | `onbekend` | De input is onbekend en kon niet gevonden of gecorrigeerd worden. | | `ontbreekt` | De input was leeg en is wel nodig voor een succesvolle zoekopdracht. |
     *
     * @return self
     */
    public function setStraat($straat)
    {
        $this->container['straat'] = $straat;

        return $this;
    }

    /**
     * Gets huisnummer
     *
     * @return Notitie|null
     */
    public function getHuisnummer()
    {
        return $this->container['huisnummer'];
    }

    /**
     * Sets huisnummer
     *
     * @param Notitie|null $huisnummer De huisnummernotitie. | Waarde | Omschrijving | | --- | --- | | `geen` | De input was correct. | | `gecorrigeerd` | De input was gecorrigeerd. | | `onbekend` | De input is onbekend en kon niet gevonden of gecorrigeerd worden. | | `ontbreekt` | De input was leeg en is wel nodig voor een succesvolle zoekopdracht. |
     *
     * @return self
     */
    public function setHuisnummer($huisnummer)
    {
        $this->container['huisnummer'] = $huisnummer;

        return $this;
    }

    /**
     * Gets huisnummertoevoeging
     *
     * @return Notitie|null
     */
    public function getHuisnummertoevoeging()
    {
        return $this->container['huisnummertoevoeging'];
    }

    /**
     * Sets huisnummertoevoeging
     *
     * @param Notitie|null $huisnummertoevoeging De huisnummertoevoegingnotitie. | Waarde | Omschrijving | | --- | --- | | `geen` | De input was correct. | | `gecorrigeerd` | De input was gecorrigeerd. | | `onbekend` | De input is onbekend en kon niet gevonden of gecorrigeerd worden. | | `ontbreekt` | De input was leeg en is wel nodig voor een succesvolle zoekopdracht. |
     *
     * @return self
     */
    public function setHuisnummertoevoeging($huisnummertoevoeging)
    {
        $this->container['huisnummertoevoeging'] = $huisnummertoevoeging;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return Notitie|null
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param Notitie|null $postcode De postcodenotitie. | Waarde | Omschrijving | | --- | --- | | `geen` | De input was correct. | | `gecorrigeerd` | De input was gecorrigeerd. | | `onbekend` | De input is onbekend en kon niet gevonden of gecorrigeerd worden. | | `ontbreekt` | De input was leeg en is wel nodig voor een succesvolle zoekopdracht. |
     *
     * @return self
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets woonplaats
     *
     * @return Notitie|null
     */
    public function getWoonplaats()
    {
        return $this->container['woonplaats'];
    }

    /**
     * Sets woonplaats
     *
     * @param Notitie|null $woonplaats De woonplaatsnotitie. | Waarde | Omschrijving | | --- | --- | | `geen` | De input was correct. | | `gecorrigeerd` | De input was gecorrigeerd. | | `onbekend` | De input is onbekend en kon niet gevonden of gecorrigeerd worden. | | `ontbreekt` | De input was leeg en is wel nodig voor een succesvolle zoekopdracht. |
     *
     * @return self
     */
    public function setWoonplaats($woonplaats)
    {
        $this->container['woonplaats'] = $woonplaats;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


