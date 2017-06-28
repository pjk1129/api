<?php

class Common {
    /**
     * 使用函数 explode(" ",$str)
     * @param key=value&page=0
     * return array
     */
    public static function explodeSring($src) {
        if (empty($src)){
            return array();
        }

        $srcs = explode('&', $src);
        $result = array();
        for ($i=0; $i<count($srcs); $i++){
            $value = $srcs[$i];
            $array = explode('=', $value);
            $key = $array[0];
            $val = $array[1];
            $result[$key] = $val;
        }
        return $result;
    }
    
}