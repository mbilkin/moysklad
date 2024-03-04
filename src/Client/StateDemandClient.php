<?php

namespace MoySklad\Client;

/**
 * Class StateClient
 *
 * Клиент работы со статусами (отгрузок)
 */
class StateDemandClient extends StateClient {
    /**
     * ServiceClient constructor.
     * @param ApiClient $api
     */
    public function __construct(ApiClient $api)
    {
        parent::__construct($api, '/entity/demand/metadata?entityType=state');
    }
}