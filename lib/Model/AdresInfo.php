<?php
/**
 * AdresInfo
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
 * Calcasa Public API v0
 *
 * The version of the OpenAPI document: 0.0.6
 * Contact: info@calcasa.nl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
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
 * AdresInfo Class Doc Comment
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AdresInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdresInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bag_nummeraanduiding_id' => 'int',
        'adres' => '\Calcasa\Api\V0\Model\Adres',
        'notities' => '\Calcasa\Api\V0\Model\Notities',
        'adres_gevonden' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bag_nummeraanduiding_id' => 'int64',
        'adres' => null,
        'notities' => null,
        'adres_gevonden' => null
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
        'bag_nummeraanduiding_id' => 'bagNummeraanduidingId',
        'adres' => 'adres',
        'notities' => 'notities',
        'adres_gevonden' => 'adresGevonden'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bag_nummeraanduiding_id' => 'setBagNummeraanduidingId',
        'adres' => 'setAdres',
        'notities' => 'setNotities',
        'adres_gevonden' => 'setAdresGevonden'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bag_nummeraanduiding_id' => 'getBagNummeraanduidingId',
        'adres' => 'getAdres',
        'notities' => 'getNotities',
        'adres_gevonden' => 'getAdresGevonden'
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
        $this->container['bag_nummeraanduiding_id'] = $data['bag_nummeraanduiding_id'] ?? null;
        $this->container['adres'] = $data['adres'] ?? null;
        $this->container['notities'] = $data['notities'] ?? null;
        $this->container['adres_gevonden'] = $data['adres_gevonden'] ?? null;
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
     * Gets bag_nummeraanduiding_id
     *
     * @return int|null
     */
    public function getBagNummeraanduidingId()
    {
        return $this->container['bag_nummeraanduiding_id'];
    }

    /**
     * Sets bag_nummeraanduiding_id
     *
     * @param int|null $bag_nummeraanduiding_id Het BAG nummeraanduiding Id van het adres.  Normaal aangevuld met nullen tot 16 karakters.
     *
     * @return self
     */
    public function setBagNummeraanduidingId($bag_nummeraanduiding_id)
    {
        $this->container['bag_nummeraanduiding_id'] = $bag_nummeraanduiding_id;

        return $this;
    }

    /**
     * Gets adres
     *
     * @return Adres|null
     */
    public function getAdres()
    {
        return $this->container['adres'];
    }

    /**
     * Sets adres
     *
     * @param Adres|null $adres Het adres object.
     *
     * @return self
     */
    public function setAdres($adres)
    {
        $this->container['adres'] = $adres;

        return $this;
    }

    /**
     * Gets notities
     *
     * @return Notities|null
     */
    public function getNotities()
    {
        return $this->container['notities'];
    }

    /**
     * Sets notities
     *
     * @param Notities|null $notities Informatie over de adres zoekopdracht en eventueel gecorrigeerde velden.
     *
     * @return self
     */
    public function setNotities($notities)
    {
        $this->container['notities'] = $notities;

        return $this;
    }

    /**
     * Gets adres_gevonden
     *
     * @return bool|null
     */
    public function getAdresGevonden()
    {
        return $this->container['adres_gevonden'];
    }

    /**
     * Sets adres_gevonden
     *
     * @param bool|null $adres_gevonden Geeft aan of er een correct adres is gevonden voor deze zoekopdracht.
     *
     * @return self
     */
    public function setAdresGevonden($adres_gevonden)
    {
        $this->container['adres_gevonden'] = $adres_gevonden;

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


