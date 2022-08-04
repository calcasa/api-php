<?php
/**
 * ReferentieobjectObject
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Copyright 2022 Calcasa B.V.
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
 * The version of the OpenAPI document: 1.2.0
 * Contact: info@calcasa.nl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * ReferentieobjectObject Class Doc Comment
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReferentieobjectObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Referentieobject_object';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'woningType' => '\Calcasa\Api\Model\WoningType',
        'bouwjaar' => 'int',
        'oppervlak' => 'int',
        'perceeloppervlak' => 'int',
        'inhoud' => 'int',
        'energielabel' => '\Calcasa\Api\Model\Energielabel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'woningType' => null,
        'bouwjaar' => 'int32',
        'oppervlak' => 'int32',
        'perceeloppervlak' => 'int32',
        'inhoud' => 'int32',
        'energielabel' => null
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
        'woningType' => 'woningType',
        'bouwjaar' => 'bouwjaar',
        'oppervlak' => 'oppervlak',
        'perceeloppervlak' => 'perceeloppervlak',
        'inhoud' => 'inhoud',
        'energielabel' => 'energielabel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'woningType' => 'setWoningType',
        'bouwjaar' => 'setBouwjaar',
        'oppervlak' => 'setOppervlak',
        'perceeloppervlak' => 'setPerceeloppervlak',
        'inhoud' => 'setInhoud',
        'energielabel' => 'setEnergielabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'woningType' => 'getWoningType',
        'bouwjaar' => 'getBouwjaar',
        'oppervlak' => 'getOppervlak',
        'perceeloppervlak' => 'getPerceeloppervlak',
        'inhoud' => 'getInhoud',
        'energielabel' => 'getEnergielabel'
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
        $this->container['woningType'] = $data['woningType'] ?? null;
        $this->container['bouwjaar'] = $data['bouwjaar'] ?? null;
        $this->container['oppervlak'] = $data['oppervlak'] ?? null;
        $this->container['perceeloppervlak'] = $data['perceeloppervlak'] ?? null;
        $this->container['inhoud'] = $data['inhoud'] ?? null;
        $this->container['energielabel'] = $data['energielabel'] ?? null;
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
     * Gets woningType
     *
     * @return WoningType|null
     */
    public function getWoningType()
    {
        return $this->container['woningType'];
    }

    /**
     * Sets woningType
     *
     * @param WoningType|null $woningType Woningtypes zoals gedefinieerd in het Calcasa-model.Woningtypes zoals gedefinieerd in het Calcasa-model. | Waarde | Omschrijving | | --- | --- | | `onbekend` | Onbekend woning type. | | `vrijstaand` | Vrijstaande woning. | | `halfVrijstaand` | Half-vrijstaande woning / twee-onder-een-kap.<br>            Heel speciaal type | | `hoekwoning` | Hoekwoning. | | `tussenwoning` | Tussenwoning. | | `galerijflat` | Galerijflat. | | `portiekflat` | Portiekflat. | | `maisonnette` | Maisonette. | | `bovenwoning` | Bovenwoning. | | `benedenwoning` | Benedenwoning. |
     *
     * @return self
     */
    public function setWoningType($woningType)
    {
        $this->container['woningType'] = $woningType;

        return $this;
    }

    /**
     * Gets bouwjaar
     *
     * @return int|null
     */
    public function getBouwjaar()
    {
        return $this->container['bouwjaar'];
    }

    /**
     * Sets bouwjaar
     *
     * @param int|null $bouwjaar bouwjaar
     *
     * @return self
     */
    public function setBouwjaar($bouwjaar)
    {
        $this->container['bouwjaar'] = $bouwjaar;

        return $this;
    }

    /**
     * Gets oppervlak
     *
     * @return int|null
     */
    public function getOppervlak()
    {
        return $this->container['oppervlak'];
    }

    /**
     * Sets oppervlak
     *
     * @param int|null $oppervlak Het woonoppervlak in hele vierkante meters.
     *
     * @return self
     */
    public function setOppervlak($oppervlak)
    {
        $this->container['oppervlak'] = $oppervlak;

        return $this;
    }

    /**
     * Gets perceeloppervlak
     *
     * @return int|null
     */
    public function getPerceeloppervlak()
    {
        return $this->container['perceeloppervlak'];
    }

    /**
     * Sets perceeloppervlak
     *
     * @param int|null $perceeloppervlak Het perceeloppervlak in hele vierkante meters.
     *
     * @return self
     */
    public function setPerceeloppervlak($perceeloppervlak)
    {
        $this->container['perceeloppervlak'] = $perceeloppervlak;

        return $this;
    }

    /**
     * Gets inhoud
     *
     * @return int|null
     */
    public function getInhoud()
    {
        return $this->container['inhoud'];
    }

    /**
     * Sets inhoud
     *
     * @param int|null $inhoud De inhoud in hele kubieke meters.
     *
     * @return self
     */
    public function setInhoud($inhoud)
    {
        $this->container['inhoud'] = $inhoud;

        return $this;
    }

    /**
     * Gets energielabel
     *
     * @return Energielabel|null
     */
    public function getEnergielabel()
    {
        return $this->container['energielabel'];
    }

    /**
     * Sets energielabel
     *
     * @param Energielabel|null $energielabel | Waarde | Omschrijving | | --- | --- | | `onbekend` |  | | `g` |  | | `f` |  | | `e` |  | | `d` |  | | `c` |  | | `b` |  | | `a` |  | | `a1` | A+ | | `a2` | A++ | | `a3` | A+++ | | `a4` | A++++ |
     *
     * @return self
     */
    public function setEnergielabel($energielabel)
    {
        $this->container['energielabel'] = $energielabel;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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

