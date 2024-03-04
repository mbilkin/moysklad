<?php

namespace MoySklad\Entity\Document;

use JMS\Serializer\Annotation\Type;
use MoySklad\Entity\MetaEntity;
use MoySklad\Util\Object\Annotation\Generator;

class Demand extends MetaEntity
{
    
    /**
     * @Type("string")
     */
    public $accountId;
    
    /**
     * @Type("MoySklad\Entity\Agent\Counterparty")
     * @Generator(type="object")
     */
    public $agent;
    
    /**
     * @Type("MoySklad\Entity\Account")
     */
    public $agentAccount;
    
    /**
     * @Type("bool")
     * @Generator()
     */
    public $applicable;
    
    /**
     * @Type("array<MoySklad\Entity\Attribute>")
     */
    public $attributes = [];
    
    /**
     * @Type("string")
     * @Generator()
     */
    public $code;
    
    /**
     * @Type("MoySklad\Entity\Contract")
     */
    public $contract;
    
    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     */
    public $created;
    
    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     */
    public $deleted;
    
    /**
     * @Type("string")
     * @Generator()
     */
    public $description;
    
    /**
     * @Type("string")
     * @Generator()
     */
    public $externalCode;
    
    /**
     * @Type("MoySklad\Entity\Group")
     * @Generator(type="object", anyFromExists=true)
     */
    public $group;
    
    /**
     * @Type("string")
     * @Generator()
     */
    public $id;
    
    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     * @Generator(type="datetime")
     */
    public $moment;
    
    /**
     * @Type("string")
     * @Generator()
     */
    public $name;
    
    /**
     * @Type("MoySklad\Entity\Agent\Organization")
     * @Generator(type="object", anyFromExists=true)
     */
    public $organization;

    /**
     * @Type("MoySklad\Entity\Account")
     */
    public $organizationAccount;

    /**
     * @Type("int")
     * @Generator()
     */
    public $overhead;
    
    /**
     * @Type("MoySklad\Entity\Agent\Employee")
     */
    public $owner;
    
    /**
     * @Type("int")
     */
    public $payedSum;
    
    /**
     * @Type("MoySklad\Entity\ListEntity")
     */
    public $positions;
    
    /**
     * @Type("bool")
     * @Generator()
     */
    public $printed;
    
    /**
     * @Type("MoySklad\Entity\Project")
     */
    public $project;
    
    /**
     * @Type("bool")
     * @Generator()
     */
    public $published;
    
    /**
     * @Type("MoySklad\Entity\Rate")
     * @Generator(type="object")
     */
    public $rate;
    
    /**
     * @Type("MoySklad\Entity\CustomEntity")
     */
    public $salesChannel;
    
    /**
     * @Type("bool")
     */
    public $shared;
    
    /**
     * @Type("string")
     */
    public $shipmentAddress;
    
    /**
     * @Type("MoySklad\Entity\State")
     */
    public $state;
    
    /**
     * @Type("MoySklad\Entity\Store\Store")
     * @Generator(type="object")
     */
    public $store;
    
    /**
     * @Type("int")
     */
    public $sum;
        
    /**
     * @Type("string")
     */
    public $syncId;

    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     */
    public $updated;
    
    /**
     * @Type("bool")
     */
    public $vatIncluded;

    /**
     * @Type("bool")
     * @Generator()
     */
    public $vatEnabled;

    /**
     * @Type("int")
     */
    public $vatSum;

    /**
     * @Type("MoySklad\Entity\Document\CustomerOrder")
     */
    public $customerOrder;
    
}
