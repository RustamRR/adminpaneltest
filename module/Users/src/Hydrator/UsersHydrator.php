<?php

namespace Users\Hydrator;

use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

class UsersHydrator extends DoctrineHydrator
{
    public function extract($object)
    {
        return parent::extract($object); // TODO: Change the autogenerated stub
    }

    public function hydrate(array $data, $object)
    {
        return parent::hydrate($data, $object); // TODO: Change the autogenerated stub
    }
}