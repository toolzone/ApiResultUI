<?php
/**
 *  ==================================================================
 *        文 件 名: test1.php
 *        概    要:
 *        作    者: 火离
 *        创建时间: 2019/1/5 9:43
 *        修改时间:
 *        copyright (c) 2019 toolzone@163.com
 *  ==================================================================
 */

/**
 * @title 登录注册
 * Class Api
 */
class Test1
{
    /**
     * @title 用户登录API
     * @url https://wwww.baidu.com/login
     * @method POST
     * @param string username 账号 空 必须
     * @param string password 密码 空 必须
     * @code 1 成功
     * @code 2 失败
     * @return int code 状态码（具体参见状态码说明）
     * @return string msg 提示信息
     */
    public function login() {
        return json_encode(['code' => 1, 'msg' => '登录成功']);
    }
    
    /**
     * @title 用户注册API
     * @url https://wwww.baidu.com/reg
     * @method POST
     * @param string username 账号 空 必须
     * @param string password 密码 空 必须
     * @param string password2 重复密码 空 必须
     * @code 1 成功
     * @code 2 失败
     * @return int code 状态码（具体参见状态码说明）
     * @return string msg 提示信息
     */
    public function reg() {
        return json_encode(['code' => 1, 'msg' => '注册成功']);
    }
}