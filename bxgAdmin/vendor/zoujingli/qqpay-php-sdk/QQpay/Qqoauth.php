<?php
namespace QQpay;

/**
 * 支付宝
 * Class AliPay
 */
class Qqoauth {
    const AuthorizeURL = 'https://graph.qq.com/oauth2.0/authorize'; //获取requestCode的api接口
    const AccessTokenURL = 'https://graph.qq.com/oauth2.0/token';//获取Access Token的api接口
    const ApiBase = 'https://graph.qq.com/oauth2.0/me';//获取openid
    const userlist= 'https://graph.qq.com/user/get_user_info';//获取用户信息
    public $config = array();
    public $errCode = 0;
    public $errMsg = "no access";
    /**
     * 构造方法
     * @param array $options
     */
    public function __construct($config = array()) {
        $this->config = $config;
    }
    /**
     * Oauth请求Authorize访问地址 二维码登录
     * @param string $callback 授权回跳地址
     * @param string $state 为重定向后会带上state参数（填写a-zA-Z0-9的参数值，最多128字节）
     * @param string $scope 授权类类型get_user_info,get_simple_userinfo   网站/移动端调用
     * @return string
     */
    public function getOauth($callback, $state = '', $scope = "get_user_info") {
        //Oauth 标准参数
        $redirect_uri = urlencode($callback);
        return self::AuthorizeURL. "?client_id={$this->config['app_id']}&redirect_uri={$redirect_uri}&response_type=code&scope={$scope}&state={$state}";
    }
	   /**
     * 通过 code 获取 AccessToken
     * @return bool|array
     */
    public function getOauthAccessToken($callback) {
        $redirect_uri = urlencode($callback);
        $code = isset($_GET['code']) ? $_GET['code'] : '';
        if (empty($code)) {
            return false;
        }
        $params = array(
            'grant_type' => 'authorization_code',//授权类型
            'client_id'     => $this->config['app_id'],//分配给应用的appid。
            'client_secret' => $this->config['app_key'],//分配给应用的appkay。
            'redirect_uri'  => $redirect_uri,//成功授权后的回调地址，必须是注册appid时填写的主域名下的地址，建议设置为网站首页或网站的用户中心
            'code'          => $code,
        );
        $result = httpGetResponse(self::AccessTokenURL. '?' . http_build_query($params));
        if ($result) {
            $json = json_decode($result, true);
            if (!$json || !empty($json['errcode'])) {
                $this->errCode = $json['errcode'];
                $this->errMsg = $json['errmsg'];
                return false;
            }
            return $json;
        }
        return false;
    }
    /**
     * 刷新access token并续期
     * @param string $refresh_token
     * @return bool|array
     */
    public function getOauthRefreshToken($refresh_token) {
       $params = array(
            'grant_type' => 'refresh_token',//授权类型
            'client_id'     => $this->config['app_id'],//分配给应用的appid。
	'client_secret' => $this->config['app_key'],//分配给应用的appkay。
            'refresh_token'  => $refresh_token,//成功授权后的回调地址，返回的refres_token。
        );
        $result = httpGetResponse(self::AccessTokenURL . '?' . http_build_query($params));
        if ($result) {
            $json = json_decode($result, true);
            if (!$json || !empty($json['errcode'])) {
                $this->errCode = $json['errcode'];
                $this->errMsg = $json['errmsg'];
                return false;
            }
            return $json;
        }
        return false;
	}
    /**
     * 获取授权后的用户openid
     * @param string $access_token
     */
    public function getOauthuserid($access_token) {
        $result = httpGetResponse(self::ApiBase . '?' . "access_token={$access_token}");
        if ($result) {
            $json = json_decode($result, true);
            if (!$json || !empty($json['error'])) {
                $this->errCode = $json['error'];
                $this->errMsg = $json['error_description'];
                return false;
            }
            return $json;
        }
        return false;
    }
        /**
     * 获取授权后的用户资料
     * @param string $access_token
     * @param string $openid
     * @return bool|array {openid,nickname,sex,province,city,country,headimgurl,privilege,[unionid]}
     * 注意：unionid字段 只有在用户将公众号绑定到微信开放平台账号后，才会出现。建议调用前用isset()检测一下
     */
    public function getOauthUserInfo($access_token,$openid) {
        $result = httpGetResponse(self::userlist. '?' . "access_token={$access_token}&oauth_consumer_key={$this->config['app_id']}&openid={$openid}");
        if ($result) {
            $json = json_decode($result, true);
            if (!$json || !empty($json['error'])) {
                $this->errCode = $json['error'];
                $this->errMsg = $json['error_description'];
                return false;
            }
            return $json;
        }
        return false;
    }
}