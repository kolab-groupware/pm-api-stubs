<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Helper for prepending URL with base URL
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_View_Helper_BaseUrl extends Zend_View_Helper_Abstract 
{

    /**
     * Add base URL to URL
     *
     * @param string $url
     * @return string
     */
    public function baseUrl($url) { }

    /**
     * Prepare URL for specified controller/action in context of module
     *
     * ```php
     * [
     *     'controller' => string,
     *     'action' => string,
     *     'link' => string,
     * ]
     * ```
     *
     * @param array|string $params
     * @return string
     */
    public function moduleUrl($params) { }

}