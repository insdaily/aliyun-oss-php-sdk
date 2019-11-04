<?php

namespace OSS\Laravel;

use Illuminate\Support\Facades\Facade as SupportFacade;

/**
 * Facade for the Aliyun Oss service
 *
 * @method static AliyunOssClient NewOssClient($name, array $args = []) Get a client from the service builder.
 */
class Facade extends SupportFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'oss';
    }
}
