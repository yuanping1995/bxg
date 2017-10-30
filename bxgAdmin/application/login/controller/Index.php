<?php
namespace app\login\controller;
use think\Db;
use app\index\model\User as UserModel;
class Index extends \think\Controller
{
    public function index()
    {
        $callback=input('callback');
        return 'login';
    }
       /**
     * 微信登录
     */
    public function wechatlogin()
    {
         $callback=input('callback');
         $oauth=& load_wechat('Oauth');
          if ( input('code') && input('state') == 'STATE' ) {
            $Token= $oauth->getOauthAccessToken();
          } else {
            $url = $oauth->getOauthRedirect(__APPURL__ ,"STATE","snsapi_userinfo");//授权回跳地址snsapi_userinfo
              header( 'location:' . $url );
              exit;
         }
         // 处理创建结果
          if($Token===FALSE){
            // 接口失败的处理
              return '错误代码：'.$oauth->errCode.'错误原因：'.$oauth->errMsg;
          }
         $user = & load_wechat('User');
         // 读取微信粉丝列表
         $userlist = $user->getUserList($Token['openid']);
          // 处理创建结果
         if($userlist ===FALSE){
            $result = $oauth->getOauthUserinfo($Token['access_token'], $Token['openid']);
             // 处理返回结果
            if($result===FALSE){
              // 接口失败的处理
              return '错误代码：'.$oauth->errCode.'错误原因：'.$oauth->errMsg;
            }
         }else{
           // 接口成功的处理
            $result=$userlist;
         }
          dump($result);
          // autoin($access_token,$openid,0,$callback)
    }
       /**
     * 微信网页登录
     */
    public function wechlogin()
    {
         $callback=input('callback');
         config('wechat.appid','wx2d3955a79caf7b3a');
         config('wechat.appsecret','8f7305d889491844097a29c959047c4b');
         $oauth=& load_wechat('Oauth');
          if ( input('code') && input('state') == 'STATE' ) {
            $Token= $oauth->getOauthAccessToken();
          } else {
            //方法一
            // $url = $oauth->getOauth(__APPURL__ ,"STATE","snsapi_login");//授权回跳地址snsapi_userinfo
            //   header( 'location:' . $url );
            //   exit;
            //方法二
            $options['id']          ='login_container';  //页面显示二维码的容器
            $options['appid']       ='wx2d3955a79caf7b3a';//应用唯一标识
            $options['scope']       ='snsapi_login';  //应用授权作用域
            $options['redirect_uri']=urlencode(__APPURL__);  //重定向地址，需要进行UrlEncode
            $options['state']       ='STATE';  //用于保持请求和回调的状态，授权请求后原样带回给第三方
            $options['style']       ='';       //提供"black"、"white"可选，默认为黑色文字描述。
            $options['href']        ='';       //自定义样式链接，第三方可根据实际需求覆盖默认样式
            $this->assign('options', $options);
            return $this->fetch(); 
         }
         // 处理创建结果
          if($Token===FALSE){
            // 接口失败的处理
              return '错误代码：'.$oauth->errCode.'错误原因：'.$oauth->errMsg;
          }
         $user = & load_wechat('User');
         // 读取微信粉丝列表
         $userlist = $user->getUserList($Token['openid']);
          // 处理创建结果
         if($userlist ===FALSE){
            $result = $oauth->getOauthUserinfo($Token['access_token'], $Token['openid']);
             // 处理返回结果
            if($result===FALSE){
              // 接口失败的处理
                return '错误代码：'.$oauth->errCode.'错误原因：'.$oauth->errMsg;
            }
         }else{
           // 接口成功的处理
            $result=$userlist;
         }
          dump($result);
          // autoin($access_token,$openid,0,$callback)
    }
           /**
     * QQ登录
     */
    public function qqlogin()
    {
         $callback=input('callback');
         $oauth=& load_qqpay('qqoauth');
          // 处理创建结果
          if( input('usercancel')!=0){
            // 接口失败的处理
              return '用户取消授权';
          }
          if ( input('code') && input('state') == 'STATE' ) {
            $Token= $oauth->getOauthAccessToken(__APPURL__);
          } else {
            $url = $oauth->getOauth(__APPURL__ ,"STATE", "get_user_info,get_simple_userinfo") ;//授权类类型get_user_info,get_simple_userinfo   网站/移动端调用
              header( 'location:' . $url );
              exit;
         }
          // 处理创建结果
          if($Token===FALSE){
              // 接口失败的处理
              return '错误代码：'.$oauth->errCode.'错误原因：'.$oauth->errMsg;
           }
           // 接口成功的处理
           $result = $oauth->getOauthuserid($Token['access_token']);
             // 处理返回结果
            if($result===FALSE){
            	 // 接口失败的处理
                return '错误代码：'.$oauth->errCode.'错误原因：'.$oauth->errMsg;
            }
          dump($result);
          // autoin($access_token,$openid,2,$callback)
    }
     /**
     * 支付宝pc网站登录
     */
    public function alilogin()
    {
         $callback=input('callback');
         $oauth=& load_alipay('aliyunoauth');
         if ( input('auth_code') && input('state') == 'STATE' ) {
            $Token= $oauth->getOauthAccessToken( );
          } else {
              $url = $oauth->getOauth(__APPURL__,"STATE", "auth_user") ;//目前只支持auth_user和auth_base两个值
              header( 'location:' . $url );
              exit;
         }
           // 处理创建结果
            if($Token===FALSE){
              // 接口失败的处理
                return '错误代码：'.$oauth->errCode.'错误原因：'.$oauth->errMsg;
            }
           // 接口成功的处理
           $result = $oauth->getOauthUserInfo($Token['alipay_system_oauth_token_response']['access_token']);
             // 处理返回结果
            if($result===FALSE){
            	 // 接口失败的处理
                return '错误代码：'.$oauth->errCode.'错误原因：'.$oauth->errMsg;
            }
          dump($result);
          // autoin($access_token,$openid,1,$callback)
    }
         /**
     * 第三方自动登录
     */
    public function autoin($access_token,$openid,$logintype,$callback)
    {
      switch ($logintype) {
          case '1'://支付宝
              $dateuser=Db::name('user')->where('uid',$mobile)->find();
           break;
          case '2'://QQ
              $dateuser=Db::name('user')->where('uid',$mobile)->find();
            break;
          default : //微信
              $dateuser=Db::name('user')->where('uid',$mobile)->find();
        }
       if($dateuser){
          //自动登录
          $UserModel = new UserModel;
          $uid = $UserModel->autoLogin($user, true);
          header("location:$callback");
          exit;
       }else{
          //无记录开始捆绑账号或注册
          $data=['access_token'=>$access_token,'openid'=>$openid,'logintype'=>$logintype];
          cookie('token_data',$data,3600);
       }
    }
}
