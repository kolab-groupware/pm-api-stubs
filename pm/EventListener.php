<?php
// Copyright 1999-2017. Plesk International GmbH.
interface EventListener
{
    public function filterActions();
    public function handleEvent($objectType, $objectId, $action, $oldValue, $newValue);
}
