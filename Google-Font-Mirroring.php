<?php

/**
 * Plugin Name: 谷歌字体镜像
 * Plugin URI:  http://yj.c2cmalls.com
 * Description: 使用炎木CDN开放式字体服务来取代谷歌的.
 * Author:      yanmu
 * Author URI:  http://yj.c2cmalls.com
 * Version:     1.0
 * License:     GPL
 */

/**
 * Silence is golden
 */
if (!defined('ABSPATH')) exit;

class Google_Font_Mirroring
{

    /**
     * init Hook
     *
     */
    public function __construct()
    {
        add_filter('style_loader_tag', array($this, 'ohMyFont'), 1000, 1);
    }


    /**
     * 使用炎木CDN开放式字体服务来取代谷歌的.
     *
     * @param $text
     * @return mixed
     */
    public function ohMyFont($text)
    {
        return str_replace('//fonts.googleapis.com/css', '//font.c2cmalls.com/css', $text);
    }
}

/**
 * bootstrap
 */
new Google_Font_Mirroring;