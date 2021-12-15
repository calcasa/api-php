<?php
/**
 * Referentieobject
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
 * Referentieobject Class Doc Comment
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Referentieobject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Referentieobject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'afstand' => 'int',
        'verkoopprijs' => 'int',
        'gecorrigeerde_verkoopprijs' => 'int',
        'geindexeerde_verkoopprijs' => 'int',
        'vierkantemeterprijs' => 'int',
        'gecorrigeerde_vierkantemeterprijs' => 'int',
        'geindexeerde_vierkantemeterprijs' => 'int',
        'verkoopdatum' => '\DateTime',
        'adres' => '\Calcasa\Api\V0\Model\Adres',
        'object' => '\Calcasa\Api\V0\Model\Objectdata',
        'cbs_indeling' => '\Calcasa\Api\V0\Model\CbsIndeling',
        'fotos' => '\Calcasa\Api\V0\Model\\Calcasa\Api\Model\Foto[]',
        'bijzonderheden' => '\Calcasa\Api\V0\Model\\Calcasa\Api\Model\VerkoopBijzonderheden[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'afstand' => 'int32',
        'verkoopprijs' => 'int32',
        'gecorrigeerde_verkoopprijs' => 'int32',
        'geindexeerde_verkoopprijs' => 'int32',
        'vierkantemeterprijs' => 'int32',
        'gecorrigeerde_vierkantemeterprijs' => 'int32',
        'geindexeerde_vierkantemeterprijs' => 'int32',
        'verkoopdatum' => 'date-time',
        'adres' => null,
        'object' => null,
        'cbs_indeling' => null,
        'fotos' => null,
        'bijzonderheden' => null
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
        'afstand' => 'afstand',
        'verkoopprijs' => 'verkoopprijs',
        'gecorrigeerde_verkoopprijs' => 'gecorrigeerdeVerkoopprijs',
        'geindexeerde_verkoopprijs' => 'geindexeerdeVerkoopprijs',
        'vierkantemeterprijs' => 'vierkantemeterprijs',
        'gecorrigeerde_vierkantemeterprijs' => 'gecorrigeerdeVierkantemeterprijs',
        'geindexeerde_vierkantemeterprijs' => 'geindexeerdeVierkantemeterprijs',
        'verkoopdatum' => 'verkoopdatum',
        'adres' => 'adres',
        'object' => 'object',
        'cbs_indeling' => 'cbsIndeling',
        'fotos' => 'fotos',
        'bijzonderheden' => 'bijzonderheden'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'afstand' => 'setAfstand',
        'verkoopprijs' => 'setVerkoopprijs',
        'gecorrigeerde_verkoopprijs' => 'setGecorrigeerdeVerkoopprijs',
        'geindexeerde_verkoopprijs' => 'setGeindexeerdeVerkoopprijs',
        'vierkantemeterprijs' => 'setVierkantemeterprijs',
        'gecorrigeerde_vierkantemeterprijs' => 'setGecorrigeerdeVierkantemeterprijs',
        'geindexeerde_vierkantemeterprijs' => 'setGeindexeerdeVierkantemeterprijs',
        'verkoopdatum' => 'setVerkoopdatum',
        'adres' => 'setAdres',
        'object' => 'setObject',
        'cbs_indeling' => 'setCbsIndeling',
        'fotos' => 'setFotos',
        'bijzonderheden' => 'setBijzonderheden'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'afstand' => 'getAfstand',
        'verkoopprijs' => 'getVerkoopprijs',
        'gecorrigeerde_verkoopprijs' => 'getGecorrigeerdeVerkoopprijs',
        'geindexeerde_verkoopprijs' => 'getGeindexeerdeVerkoopprijs',
        'vierkantemeterprijs' => 'getVierkantemeterprijs',
        'gecorrigeerde_vierkantemeterprijs' => 'getGecorrigeerdeVierkantemeterprijs',
        'geindexeerde_vierkantemeterprijs' => 'getGeindexeerdeVierkantemeterprijs',
        'verkoopdatum' => 'getVerkoopdatum',
        'adres' => 'getAdres',
        'object' => 'getObject',
        'cbs_indeling' => 'getCbsIndeling',
        'fotos' => 'getFotos',
        'bijzonderheden' => 'getBijzonderheden'
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
        $this->container['afstand'] = $data['afstand'] ?? null;
        $this->container['verkoopprijs'] = $data['verkoopprijs'] ?? null;
        $this->container['gecorrigeerde_verkoopprijs'] = $data['gecorrigeerde_verkoopprijs'] ?? null;
        $this->container['geindexeerde_verkoopprijs'] = $data['geindexeerde_verkoopprijs'] ?? null;
        $this->container['vierkantemeterprijs'] = $data['vierkantemeterprijs'] ?? null;
        $this->container['gecorrigeerde_vierkantemeterprijs'] = $data['gecorrigeerde_vierkantemeterprijs'] ?? null;
        $this->container['geindexeerde_vierkantemeterprijs'] = $data['geindexeerde_vierkantemeterprijs'] ?? null;
        $this->container['verkoopdatum'] = $data['verkoopdatum'] ?? null;
        $this->container['adres'] = $data['adres'] ?? null;
        $this->container['object'] = $data['object'] ?? null;
        $this->container['cbs_indeling'] = $data['cbs_indeling'] ?? null;
        $this->container['fotos'] = $data['fotos'] ?? null;
        $this->container['bijzonderheden'] = $data['bijzonderheden'] ?? null;
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
     * Gets afstand
     *
     * @return int|null
     */
    public function getAfstand()
    {
        return $this->container['afstand'];
    }

    /**
     * Sets afstand
     *
     * @param int|null $afstand Afstand tot het waarderingsobject in meters.
     *
     * @return self
     */
    public function setAfstand($afstand)
    {
        $this->container['afstand'] = $afstand;

        return $this;
    }

    /**
     * Gets verkoopprijs
     *
     * @return int|null
     */
    public function getVerkoopprijs()
    {
        return $this->container['verkoopprijs'];
    }

    /**
     * Sets verkoopprijs
     *
     * @param int|null $verkoopprijs In hele euros.
     *
     * @return self
     */
    public function setVerkoopprijs($verkoopprijs)
    {
        $this->container['verkoopprijs'] = $verkoopprijs;

        return $this;
    }

    /**
     * Gets gecorrigeerde_verkoopprijs
     *
     * @return int|null
     */
    public function getGecorrigeerdeVerkoopprijs()
    {
        return $this->container['gecorrigeerde_verkoopprijs'];
    }

    /**
     * Sets gecorrigeerde_verkoopprijs
     *
     * @param int|null $gecorrigeerde_verkoopprijs In hele euros.
     *
     * @return self
     */
    public function setGecorrigeerdeVerkoopprijs($gecorrigeerde_verkoopprijs)
    {
        $this->container['gecorrigeerde_verkoopprijs'] = $gecorrigeerde_verkoopprijs;

        return $this;
    }

    /**
     * Gets geindexeerde_verkoopprijs
     *
     * @return int|null
     */
    public function getGeindexeerdeVerkoopprijs()
    {
        return $this->container['geindexeerde_verkoopprijs'];
    }

    /**
     * Sets geindexeerde_verkoopprijs
     *
     * @param int|null $geindexeerde_verkoopprijs In hele euros.
     *
     * @return self
     */
    public function setGeindexeerdeVerkoopprijs($geindexeerde_verkoopprijs)
    {
        $this->container['geindexeerde_verkoopprijs'] = $geindexeerde_verkoopprijs;

        return $this;
    }

    /**
     * Gets vierkantemeterprijs
     *
     * @return int|null
     */
    public function getVierkantemeterprijs()
    {
        return $this->container['vierkantemeterprijs'];
    }

    /**
     * Sets vierkantemeterprijs
     *
     * @param int|null $vierkantemeterprijs In hele euros per vierkante meters.
     *
     * @return self
     */
    public function setVierkantemeterprijs($vierkantemeterprijs)
    {
        $this->container['vierkantemeterprijs'] = $vierkantemeterprijs;

        return $this;
    }

    /**
     * Gets gecorrigeerde_vierkantemeterprijs
     *
     * @return int|null
     */
    public function getGecorrigeerdeVierkantemeterprijs()
    {
        return $this->container['gecorrigeerde_vierkantemeterprijs'];
    }

    /**
     * Sets gecorrigeerde_vierkantemeterprijs
     *
     * @param int|null $gecorrigeerde_vierkantemeterprijs In hele euros per vierkante meters.
     *
     * @return self
     */
    public function setGecorrigeerdeVierkantemeterprijs($gecorrigeerde_vierkantemeterprijs)
    {
        $this->container['gecorrigeerde_vierkantemeterprijs'] = $gecorrigeerde_vierkantemeterprijs;

        return $this;
    }

    /**
     * Gets geindexeerde_vierkantemeterprijs
     *
     * @return int|null
     */
    public function getGeindexeerdeVierkantemeterprijs()
    {
        return $this->container['geindexeerde_vierkantemeterprijs'];
    }

    /**
     * Sets geindexeerde_vierkantemeterprijs
     *
     * @param int|null $geindexeerde_vierkantemeterprijs In hele euros per vierkante meters.
     *
     * @return self
     */
    public function setGeindexeerdeVierkantemeterprijs($geindexeerde_vierkantemeterprijs)
    {
        $this->container['geindexeerde_vierkantemeterprijs'] = $geindexeerde_vierkantemeterprijs;

        return $this;
    }

    /**
     * Gets verkoopdatum
     *
     * @return \DateTime|null
     */
    public function getVerkoopdatum()
    {
        return $this->container['verkoopdatum'];
    }

    /**
     * Sets verkoopdatum
     *
     * @param \DateTime|null $verkoopdatum In UTC.
     *
     * @return self
     */
    public function setVerkoopdatum($verkoopdatum)
    {
        $this->container['verkoopdatum'] = $verkoopdatum;

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
     * @param Adres|null $adres adres
     *
     * @return self
     */
    public function setAdres($adres)
    {
        $this->container['adres'] = $adres;

        return $this;
    }

    /**
     * Gets object
     *
     * @return Objectdata|null
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param Objectdata|null $object object
     *
     * @return self
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets cbs_indeling
     *
     * @return CbsIndeling|null
     */
    public function getCbsIndeling()
    {
        return $this->container['cbs_indeling'];
    }

    /**
     * Sets cbs_indeling
     *
     * @param CbsIndeling|null $cbs_indeling cbs_indeling
     *
     * @return self
     */
    public function setCbsIndeling($cbs_indeling)
    {
        $this->container['cbs_indeling'] = $cbs_indeling;

        return $this;
    }

    /**
     * Gets fotos
     *
     * @return \Calcasa\Api\Model\Foto[]|null
     */
    public function getFotos()
    {
        return $this->container['fotos'];
    }

    /**
     * Sets fotos
     *
     * @param \Calcasa\Api\Model\Foto[]|null $fotos Fotos van het referentieobject.
     *
     * @return self
     */
    public function setFotos($fotos)
    {
        $this->container['fotos'] = $fotos;

        return $this;
    }

    /**
     * Gets bijzonderheden
     *
     * @return \Calcasa\Api\Model\VerkoopBijzonderheden[]|null
     */
    public function getBijzonderheden()
    {
        return $this->container['bijzonderheden'];
    }

    /**
     * Sets bijzonderheden
     *
     * @param \Calcasa\Api\Model\VerkoopBijzonderheden[]|null $bijzonderheden Eventuele bijzonderheden van de transactie.
     *
     * @return self
     */
    public function setBijzonderheden($bijzonderheden)
    {
        $this->container['bijzonderheden'] = $bijzonderheden;

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


