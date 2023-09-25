<?php

namespace MoySklad\Entity;

use JMS\Serializer\Annotation\Type;
use MoySklad\ApiClient;

/**
 * Базовый класс для методов получения списка сущностей
 */
class ListEntity extends AbstractListEntity implements \IteratorAggregate 
{
    
    /**
     * @Type("MoySklad\Entity\Context")
     */
    public $context;

    /**
     * @Type("array<MoySklad\Entity\MetaEntity>")
     */
    public $rows;
    
    protected $_selfIterator = false;
    
    public function getIterator() 
    {
        return new \ArrayIterator(($this->_selfIterator)?$this:$this->rows); 
    }
    
    /**
     * @param ApiClient $api
     * @throws ApiClientException
     * @throws \Exception
     */
    public function fetch(ApiClient $api, $useCache = false): void
    {
        $this->_selfIterator = true;
        parent::fetch($api,$useCache);
        $this->_selfIterator = false;
    }
    
}
