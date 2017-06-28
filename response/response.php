<?php

class Response {
    /**
     * 输出通信数据(只支持json格式)
     * @param integer $code 状态码
     * @param string $message 提示信息
     * @param array $data 数据
     * return string
     */
    public static function api_response($code, $message = '', $data = array()) {
        $result = self::generate_array($code, $message, $data);
        echo json_encode($result);
    }

    /*
     * 按照接口格式生成原数据数组
     * @param integer $code 状态码
     * @param string $message 状态信息
     * @param array $data 数据
     * return array 
     */
    private function generate_array($code, $message='', $data=array()){
        if(!is_numeric($code)){
            return null;
        }

        $result = array(
            'code' => $code,
            'message' => $message,
            'data' => $data
        );
        return $result;
    }
}
