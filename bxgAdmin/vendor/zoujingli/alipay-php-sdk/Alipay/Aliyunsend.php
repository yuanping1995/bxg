<?php
namespace Alipay;

/**
 *阿里大于SDK
 */
class Aliyunsend {

    /** 支付接口基础地址 */
    public $gateUrl = "http://gw.api.taobao.com/router/rest?";
    public $config;
    /** 执行错误消息及代码 */
    public $errMsg;
	
    public function __construct($config = array()) {
        $this->config = $config;
    }
    /**
     * 发送短信
	 *$mobile  手机号
	 *$option  短信模板变量
	 *$template  短信模板ID
     */
    public function send($mobile, $option, $template) {
        $data['method']            = 'alibaba.aliqin.fc.sms.num.send';//接口名称
		$data['app_key']           = $this->config['app_key'];//分配给应用的AppKey
		$data['sms_free_sign_name'] =$this->config['sign_name'];////你的短信签名
		$data["timestamp"]         = date("Y-m-d H:i:s",time());
		$data['format']            ='json';//
		$data['v']                 ='2.0';//
		$data["sign_method"]       = "md5";
        $data['sms_type']          = 'normal';         //短信类型，传入值请填写normal
        $data['sms_param']         = json_encode($option);//短信模板变量
        $data['rec_num']           = $mobile;  //短信接收号码。支持单个或多个手机号码。群发短信需传入多个号码，以英文逗号分隔
        $data['sms_template_code'] = $template;//短信模板ID
		$data["sign"] = $this->getPaySign($data);
		$urldata=http_build_query($data);
        $result = httpGetResponse($this->gateUrl . $urldata);
		$result = json_decode($result, true);
        if (empty($result)) {
            $this->errMsg = '解析返回结果失败';
            return false;
        }
		if (isset($result['alibaba_aliqin_fc_sms_num_send_response']['result']['success']) && $result['alibaba_aliqin_fc_sms_num_send_response']['result']['success'] == 'true') {
            return true;
        }else{
		  switch ($result['error_response']['sub_code']) {
                case 'isv.BUSINESS_LIMIT_CONTROL':
                     $this->errMsg = '请勿频繁请求,稍后再试';
                    break;
                case 'isv.MOBILE_NUMBER_ILLEGAL':
                      $this->errMsg = '手机号码格式不正确';
                    break;
				case 'isv.permission-ip-whitelist-limit':
                      $this->errMsg = '请求IP不在应用的IP白名单列表中';
                    break;
                default :
                    $this->errMsg = '短信系统异常';
            }
           return false;
		}
    }

	    /**
     * 生成签名
     * @param array $option
     * @param string $partnerKey
     * @return string
     */
    public function getPaySign($option) {
        ksort($option);
		$arr = [];
        foreach ($option as $k => $v) {
           $arr[] = $k . $v;
        }
        return strtoupper(md5($this->config['secretKey'] . implode('', $arr) . $this->config['secretKey']));
    }
}
