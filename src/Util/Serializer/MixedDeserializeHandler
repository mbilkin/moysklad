<?php

namespace MoySklad\Util\Serializer;

use JMS\Serializer\Serializer;
use MoySklad\Entity\Meta;

class MixedDeserializeHandler
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @param $visitor
     * @param mixed $value
     * @param array $type
     * @return array|mixed
     */
    public function __invoke($visitor, $value, array $type)
    {
        if (is_array($value)) {
            $this->serializer = SerializerInstance::getInstance();

            try {
                $className = Meta::getClassNameByType($value['meta']['type']);
            } catch (\InvalidArgumentException $exception) {
                //@todo log it
                return $value;
            }

            return $this->serializer->deserialize(json_encode($value), $className, 'json');
        } else
            return $value;
    }
}
