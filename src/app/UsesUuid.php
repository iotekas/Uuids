<?php

namespace iotek\UsesUuid;

use Ramsey\Uuid\Uuid;

trait Uuids
{
    protected static function bootUuids()
    {
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Uuid::uuid4()->toString();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
