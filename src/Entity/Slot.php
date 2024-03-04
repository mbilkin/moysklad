<?php

namespace MoySklad\Entity;

use JMS\Serializer\Annotation\Type;
use MoySklad\Util\Object\Annotation\Generator;

class Slot extends MetaEntity
{
    /**
     * @Type("int")
     */
    public $accountId;
    
    /**
     * @Type("string")
     * @Generator()
     */
    public $externalCode;
    
    /**
     * @Type("string")
     */
    public $id;
    
    /**
     * @Type("string")
     * @Generator()
     */
    public $name;
    
    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     */
    public $updated;
    
    /**
     * @Type("string")
     * @Generator()
     */
    public $barcode;
    
}
