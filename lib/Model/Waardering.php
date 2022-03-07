<?php
/**
 * Waardering
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
 * Waardering Class Doc Comment
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Waardering implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Waardering';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'aangemaakt' => '\DateTime',
        'status' => '\Calcasa\Api\V0\Model\WaarderingStatus',
        'originele_input' => '\Calcasa\Api\V0\Model\WaarderingInputParameters',
        'adres' => '\Calcasa\Api\V0\Model\Adres',
        'model' => '\Calcasa\Api\V0\Model\Modeldata',
        'taxatie' => '\Calcasa\Api\V0\Model\Taxatiedata',
        'object' => '\Calcasa\Api\V0\Model\Objectdata',
        'cbs_indeling' => '\Calcasa\Api\V0\Model\CbsIndeling',
        'fotos' => '\Calcasa\Api\V0\Model\\Calcasa\Api\Model\Foto[]',
        'referenties' => '\Calcasa\Api\V0\Model\\Calcasa\Api\Model\Referentieobject[]',
        'vorige_verkopen' => '\Calcasa\Api\V0\Model\\Calcasa\Api\Model\VorigeVerkoop[]',
        'rapport' => '\Calcasa\Api\V0\Model\Rapport',
        'factuur' => '\Calcasa\Api\V0\Model\Factuur'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'aangemaakt' => 'date-time',
        'status' => null,
        'originele_input' => null,
        'adres' => null,
        'model' => null,
        'taxatie' => null,
        'object' => null,
        'cbs_indeling' => null,
        'fotos' => null,
        'referenties' => null,
        'vorige_verkopen' => null,
        'rapport' => null,
        'factuur' => null
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
        'id' => 'id',
        'aangemaakt' => 'aangemaakt',
        'status' => 'status',
        'originele_input' => 'origineleInput',
        'adres' => 'adres',
        'model' => 'model',
        'taxatie' => 'taxatie',
        'object' => 'object',
        'cbs_indeling' => 'cbsIndeling',
        'fotos' => 'fotos',
        'referenties' => 'referenties',
        'vorige_verkopen' => 'vorigeVerkopen',
        'rapport' => 'rapport',
        'factuur' => 'factuur'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'aangemaakt' => 'setAangemaakt',
        'status' => 'setStatus',
        'originele_input' => 'setOrigineleInput',
        'adres' => 'setAdres',
        'model' => 'setModel',
        'taxatie' => 'setTaxatie',
        'object' => 'setObject',
        'cbs_indeling' => 'setCbsIndeling',
        'fotos' => 'setFotos',
        'referenties' => 'setReferenties',
        'vorige_verkopen' => 'setVorigeVerkopen',
        'rapport' => 'setRapport',
        'factuur' => 'setFactuur'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'aangemaakt' => 'getAangemaakt',
        'status' => 'getStatus',
        'originele_input' => 'getOrigineleInput',
        'adres' => 'getAdres',
        'model' => 'getModel',
        'taxatie' => 'getTaxatie',
        'object' => 'getObject',
        'cbs_indeling' => 'getCbsIndeling',
        'fotos' => 'getFotos',
        'referenties' => 'getReferenties',
        'vorige_verkopen' => 'getVorigeVerkopen',
        'rapport' => 'getRapport',
        'factuur' => 'getFactuur'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['aangemaakt'] = $data['aangemaakt'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['originele_input'] = $data['originele_input'] ?? null;
        $this->container['adres'] = $data['adres'] ?? null;
        $this->container['model'] = $data['model'] ?? null;
        $this->container['taxatie'] = $data['taxatie'] ?? null;
        $this->container['object'] = $data['object'] ?? null;
        $this->container['cbs_indeling'] = $data['cbs_indeling'] ?? null;
        $this->container['fotos'] = $data['fotos'] ?? null;
        $this->container['referenties'] = $data['referenties'] ?? null;
        $this->container['vorige_verkopen'] = $data['vorige_verkopen'] ?? null;
        $this->container['rapport'] = $data['rapport'] ?? null;
        $this->container['factuur'] = $data['factuur'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Id van de waardering of tracking Id.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets aangemaakt
     *
     * @return \DateTime|null
     */
    public function getAangemaakt()
    {
        return $this->container['aangemaakt'];
    }

    /**
     * Sets aangemaakt
     *
     * @param \DateTime|null $aangemaakt Het tijdsstempel van wanneer de waardering aangemaakt is.
     *
     * @return self
     */
    public function setAangemaakt($aangemaakt)
    {
        $this->container['aangemaakt'] = $aangemaakt;

        return $this;
    }

    /**
     * Gets status
     *
     * @return WaarderingStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param WaarderingStatus|null $status De huidige status van de waardering. | Waarde | Omschrijving | | --- | --- | | `onbekend` | Status onbekend. | | `initialiseren` | Deze waardering is geinitialiseerd maar moet nog bevestigd worden. | | `open` | Deze waardering is bevestigd maar moet nog uitgevoerd worden. | | `voltooid` | Deze waardering is voltooid. | | `opgewaardeerd` | Deze waardering is geupgrade naar een ander waardering type. | | `ongeldig` | Deze waardering is niet geldig, bijvoorbeeld omdat hij niet door de business rules is gekomen. | | `verlopen` | Deze waardering is verlopen omdat hij niet op tijd bevestigd is. | | `error` | Er is iets mis gegaan voor deze waardering. | | `inBehandeling` | Deze waardering is in behandeling door het systeem. |
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets originele_input
     *
     * @return WaarderingInputParameters|null
     */
    public function getOrigineleInput()
    {
        return $this->container['originele_input'];
    }

    /**
     * Sets originele_input
     *
     * @param WaarderingInputParameters|null $originele_input De invoer die gebruikt is voor het aanmaken van deze waardering.
     *
     * @return self
     */
    public function setOrigineleInput($originele_input)
    {
        $this->container['originele_input'] = $originele_input;

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
     * Gets model
     *
     * @return Modeldata|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param Modeldata|null $model model
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets taxatie
     *
     * @return Taxatiedata|null
     */
    public function getTaxatie()
    {
        return $this->container['taxatie'];
    }

    /**
     * Sets taxatie
     *
     * @param Taxatiedata|null $taxatie taxatie
     *
     * @return self
     */
    public function setTaxatie($taxatie)
    {
        $this->container['taxatie'] = $taxatie;

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
     * @param \Calcasa\Api\Model\Foto[]|null $fotos fotos
     *
     * @return self
     */
    public function setFotos($fotos)
    {
        $this->container['fotos'] = $fotos;

        return $this;
    }

    /**
     * Gets referenties
     *
     * @return \Calcasa\Api\Model\Referentieobject[]|null
     */
    public function getReferenties()
    {
        return $this->container['referenties'];
    }

    /**
     * Sets referenties
     *
     * @param \Calcasa\Api\Model\Referentieobject[]|null $referenties referenties
     *
     * @return self
     */
    public function setReferenties($referenties)
    {
        $this->container['referenties'] = $referenties;

        return $this;
    }

    /**
     * Gets vorige_verkopen
     *
     * @return \Calcasa\Api\Model\VorigeVerkoop[]|null
     */
    public function getVorigeVerkopen()
    {
        return $this->container['vorige_verkopen'];
    }

    /**
     * Sets vorige_verkopen
     *
     * @param \Calcasa\Api\Model\VorigeVerkoop[]|null $vorige_verkopen vorige_verkopen
     *
     * @return self
     */
    public function setVorigeVerkopen($vorige_verkopen)
    {
        $this->container['vorige_verkopen'] = $vorige_verkopen;

        return $this;
    }

    /**
     * Gets rapport
     *
     * @return Rapport|null
     */
    public function getRapport()
    {
        return $this->container['rapport'];
    }

    /**
     * Sets rapport
     *
     * @param Rapport|null $rapport rapport
     *
     * @return self
     */
    public function setRapport($rapport)
    {
        $this->container['rapport'] = $rapport;

        return $this;
    }

    /**
     * Gets factuur
     *
     * @return Factuur|null
     */
    public function getFactuur()
    {
        return $this->container['factuur'];
    }

    /**
     * Sets factuur
     *
     * @param Factuur|null $factuur factuur
     *
     * @return self
     */
    public function setFactuur($factuur)
    {
        $this->container['factuur'] = $factuur;

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


