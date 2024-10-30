<?php

namespace luckywp\scriptsControl\admin;

final class AjaxNonce
{
    const KEY = 'lwpsc-ajax-nonce';
    const QUERY_ARGUMENT = 'nonce';

    /**
     * @return string
     */
    public static function create()
    {
        return wp_create_nonce(self::KEY);
    }

    public static function check()
    {
        check_ajax_referer(self::KEY, self::QUERY_ARGUMENT);
    }
}
