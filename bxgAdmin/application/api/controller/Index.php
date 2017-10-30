<?php
namespace app\api\controller;

class Index extends \think\Controller
{
    public function index()
    {
        return 'api';
    }
  /**
  * 发送短信
  */
    public function send_code(){
      	$mobile=input('mobile');
		$typeid=input('typeid',0);
	   if(!empty($mobile)){
		$code=baserand();//获取随机数
		cookie('basecode',$code,600);
		switch ($typeid) {
          case '1'://登录确认验证码
              $template='SMS_25090295';
           break;
          case '2'://登录异常验证码
              $template='SMS_25090294';
            break;
		  case '3'://用户注册验证码
		      $template='SMS_25090293';
            break;
		  case '4'://活动确认验证码
		      $template='SMS_25090292';
            break;
		  case '5'://修改密码验证码
		      $template=' SMS_25090291 ';
			  break;
		  case '6'://信息变更验证码
		      $template='SMS_25090290';
            break;
          default : //身份验证
              $template='SMS_44440686';
         }
           $obj = & load_alipay('Aliyunsend');
		   $result = $obj->send($mobile,['code'=>$code,'product'=>'百信购'],$template);
         // 接口成功的处理
		     if($result !== true){
				return json(['flag' => 0,'msg' => $obj->errMsg]);//发送失败
			}else{
			   return json(['flag' => 1,'msg' => "短信发送成功"]);//发送成功
		    }
	  }else{
	  	return json(['flag' => 0,'msg' => '发送参数有误']);//发送失败
	  }
   }
     /**
     * 支付宝扫码支付
     */
  public function Micropay() {
      $data['out_trade_no']  =  baseOrderSn();//商户网站唯一订单号
      $data['auth_code']     = input('auth_code');//支付授权码
      $data['body']          = '百信购订单';  //描述信息。
      $data['subject']       = '百信购订单';//商品的标题/交易标题/订单标题/订单关键字等。
      $data['total_amount']  = sprintf("%.2f",input('pirce'));//订单总金额，单位为元，精确到小数点后两位，
          $obj = & load_alipay('Aliyunpay');
          $result = $obj->Micropay($data);
        if($result===FALSE){
          // 接口失败的处理
           return '错误代码：'.$obj->errMsg;
         }else{// 接口成功的处理
           dump($result);
       }
    }
    /**
     * 微信提交刷卡支付，并且确认结果，接口比较慢
     */
  public function wxMicropay() {
      $data['out_trade_no'] =  baseOrderSn();//商户网站唯一订单号
      $data['auth_code']    = input('auth_code');//支付授权码
      $data['body']         = '百信购订单';  //描述信息。
      $data['total_fee']    = sprintf("%.2f",input('pirce')*100);//订单总金额，单位为元，精确到小数点后两位，
       $obj = & load_wechat('Pay');
       $result = $obj->MicroPay($data);
      if($result===FALSE){
        // 接口失败的处理
        return '错误代码：'.$obj->errMsg;
       }else{// 接口成功的处理
         dump($result);
       }
    }
   /**
     * 商品查询接口
     */
  public function goods_query() {
      $data['out_trade_no'] =  baseOrderSn();//商户网站唯一订单号
      $data['auth_code']    = input('auth_code');//支付授权码
      $data['body']         = '百信购订单';  //描述信息。
      $data['total_fee']    = sprintf("%.2f",input('pirce')*100);//订单总金额，单位为元，精确到小数点后两位，
        $url=$this->gatewayUrl . http_build_query($params);
        $obj=httpGetResponse($url);
        $result=json_decode($obj, true);
      if($result===FALSE){
        // 接口失败的处理
        return '错误代码：'.$obj->errMsg;
       }else{// 接口成功的处理
         dump($result);
       }
    }
}
