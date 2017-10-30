<?php
namespace app\index\controller;
use think\Db;
use app\index\model\User as UserModel;
class Index extends \think\Controller
{
  /**
     * @登录、注册
     */
    public function index() {
      $UserModel = new UserModel;
      $back   = cookie('url_back');  //返回地址
      $url_back  = isset($back) ? $back : "http://m.bxgogo.com/index/user/index";
     
      if (request()->isAjax()) {
         $mobile   = input('mobile');  //用户名
         $password  = input('pass');  //用户密码
         // 验证数据
             // 登录
            $user = $UserModel->login($mobile, $password, true);
            if ($user) {
              $dateuser=Db::name('bankrollnd')->where('uid',$mobile)->find();
              if(empty($dateuser)){
                Db::name('bankrollnd')->insert(['uid'=>$mobile]);
              }
              
                cookie('url_back', null);
                return json(['flag' =>1,'msg' => '登录成功','back'=>$url_back]);
            } else {
                return json(['flag' =>0,'msg' => $UserModel->errMsg]);
            }
        } else {
            return $UserModel->isLogin() ? $this->herurl('http://m.bxgogo.com/index/user/index') : $this->fetch();
        }
   }
     /**
     * @登录、注册
     */
    public function reg() {
      if (request()->isAjax()) {
         $mobile   = input('mobile');  //用户名
         $Tracy    = input('mesCode');  //验证码
         $password=baserand();//登录密码
         $pass =encryt_data(json_encode(['uid'=>$mobile,'pass'=>$password]),config('PrivateKeyFilePath')); //密码
         // 验证数据
              if(empty($mobile) && empty($Tracy)){//注册
                    return json(['flag' =>0,'msg' => '手机号或验证码不能为空']);
              }
              if($Tracy !==cookie('mesCode')){
                    return json(['flag' =>0,'msg' => '验证码输入错误']);
              }
              $db=Db::name('user');
              $user=$db->where('uid',$mobile)->field('uid')->find(); 
               if ($user) {
                     return json(['flag' =>0,'msg' => '用户已存在']); 
                }
              $seller=Db::name('seller')->where('seller_id',$mobile)->field('seller_id')->find(); 
               if ($seller) {
                     return json(['flag' =>0,'msg' => '用户已存在']); 
                }
$user['pass']=$pass;
						$user['mobile']=$mobile;
						$user['uid']=$mobile;
						$user['logtime']=time();
				if(!empty(input('cookie.user_commend')))
				{
					$comm_id = input('cookie.user_commend');
					$user_vip=Db::name('user')->where('uid',$comm_id)->where('qid=7')->find();
	
					if($user_vip)
					{
						//echo "INSERT INTO `b_user` (`logtime`,`recommend`, `pass` , `uid` , `mobile`) VALUES ('".time()."',{$user_vip['uid']},'{$pass}','{$mobile}','{$mobile}');";die;
						//Db::name('bankrollnd')->where('uid',$user_vip['uid'])->setInc('total', 5);
						Db::query("INSERT INTO `b_user` (`logtime`,`recommend`, `pass` , `uid` , `mobile`) VALUES ('".time()."',{$user_vip['uid']},'{$pass}','{$mobile}','{$mobile}');");
						//Db::name('user')->insert(['logtime'=>time(),"recommend"=>$user_vip,'pass'=>$pass,'uid'=>$mobile,'mobile'=>$mobile]);

					}else{
				
						Db::name('user')->insert($user);
					}
				}else{

						Db::name('user')->insert($user);
				}
              $dateuser=Db::name('bankrollnd')->where('uid',$mobile)->find();
              if(empty($dateuser)){
                Db::name('bankrollnd')->insert(['uid'=>$mobile]);
              }
           //发送信息
             $obj = & load_alipay('Aliyunsend');
            $obj->send($mobile,['uid'=>$mobile,'pass'=>$password],'SMS_49285066');
            $user=Db::name('user')->where('uid',$mobile)->find(); 
          //自动登录
           $UserModel = new UserModel;
           $uid = $UserModel->autoLogin($user, true);
                if ($uid) {
                     return json(['flag' =>1,'msg' => "登录成功"]);
                } else {
                     return json(['flag' =>0,'msg' => '登录失败']);
                }
        } else {
            return json(['flag' =>0,'msg' => '非法数据提交']);
        }
   }
           /**
     * QQ登录
     */
    public function qqlogin()
    {
         $oauth=& load_qqpay('qqoauth');
          if ( input('code') && input('state') == 'STATE' ) {
            $Token= $oauth->getOauthAccessToken(__APPURL__ );
             // 处理创建结果
            if( input('usercancel')==1){
              // 接口失败的处理
                return '用户取消授权';
            }
          } else {
            $url = $oauth->getOauth(__APPURL__ ,"STATE", "get_user_info,get_simple_userinfo") ;//授权类类型get_user_info,get_simple_userinfo   网站/移动端调用
              header( 'location:' . $url );
              exit;
         }
          // 处理创建结果
            if($Token===FALSE){
              // 接口失败的处理
                return '接口调用错误';
            }
           // 接口成功的处理
           $result = $oauth->getOauthUserInfo($Token['access_token'], $Token['openid']);
             // 处理返回结果
            if($result===FALSE){
               // 接口失败的处理
                return '接口调用错误';
            }
          dump($result);
          // autoin($access_token,$openid,2,$callback)
    }
  /**
     * 成功跳转
     */
    public function herurl($url) {
       header("location:$url");
    exit;
   }
   /**
     * 退出登录
     */
    public function loginout()
    {
        session(null);
        cookie('user_auth', null);
        cookie('signin_token', null);
        return $this->redirect('index');
    }

   /**
     * //发送验证码
     */
  public function sendco() {
    $mobile=input('mobile');
    if(request()->isAjax() && !empty($mobile)){
      $code=baserand();//获取随机数
       $user=Db::name('user')->where('uid',$mobile)->field('uid')->find(); 
       if ($user) {
          return json(['flag' =>0,'msg' => '用户已存在']); 
       }
      cookie('mesCode',$code,600);
      $obj = & load_alipay('Aliyunsend');
      $result = $obj->send($mobile,['code'=>$code,'product'=>'百信购'],'SMS_44440686');
         // 接口成功的处理
     if($result !== true){
    return json(['flag' =>0,'msg' => $obj->errMsg]);
     }else{
    return json(['flag' =>1,'msg' => "短信下发成功"]);
     }
     }
   }
      /**
     * 微信登录
     */
    public function wxlogin() {
        $callback="http://m.bxgogo.com";
    $state="bxgogo";
    $scope="snsapi_userinfo";
        // SDK实例对象
        $oauth = & load_wechat('Oauth');
    $result = $oauth->getOauthRedirect($callback, $state,$scope);
         // 接口成功的处理
     dump($result);
    }
      /**
     * 微信登录开放平台
     */
    public function openwxlogin() {
        $callback="http://login.bxgogo.com/index/index/openwx_url";
         $state="bxgogo";
        // SDK实例对象
        $oauth = & load_wechat('Oauth');
       $result = $oauth->getOauth($callback, $state);
    }
     /**
     * 微信同步通知页面
     */
    public function openwx_url() {
      
    }
     /**
     * 支付宝登陆
     */
    public function alipayoauth() {
        // SDK实例对象
        $obj = & load_alipay('Aliyunoauth');
         $result = $obj->oauth(['return_url'=>'http://login.bxgogo.com/index/index/alipay_url']);//支付宝处理完请求后，当前页面自动跳转到商户网站里指定页面的http路径
    }
    /**
     * 支付宝服务器同步通知页面路径
     */
    public function alipay_url() {
        // SDK实例对象
        $obj = & load_alipay('Alipaynotify');
        $result = $obj->verifyNotify(input());
       if ($result) {//验证成功.
            $user_id= input('user_id'); //Y用户账号
            $token= input('token'); //授权token
            if (input('is_success') !== 'T' && empty($user_id)) {
                return '数据异常';
            }
              $user=Db::name('user')->where('user_id',$user_id)->where('token',$token)->find(); 
              if($user){
                //自动登录
              $UserModel = new UserModel;
              $uid = $UserModel->autoLogin($user, true);
                  if ($uid) {
                         return $this->herurl(cookie('url_back ')) ;
                   } else {
                        return json(['flag' =>0,'msg' => '登录失败']);
                   }
              }else{
                     return '此支付宝未绑定账号';
                }
        } else {
            echo "验证失败";
        }
    }

    //忘记密码
     public function forgetpass(){
        $mobile=input('mobile');
        $code=input('code');
        $mscode=cookie('basecode');
        if (request()->isAjax()) {
            if($code != $mscode){
                  return json(['flag' =>0,'msg' => '验证码输入错误!']);
            }else{
                  return json(['flag' =>1,'msg' => '验证通过','mobile'=>$mobile]);
            }
        }else{
          return $this->fetch();
        }
     }

     //设置新密码
     public function resetpass(){
        $mobile=input('mobile');
        $pass=input('pass');
        $newpass=input('repass');
        if (request()->isAjax()) {
            if($pass != $newpass){
                  return json(['flag' =>0,'msg' => '两次输入不一致']);
            }else{
                $password =encryt_data(json_encode(['uid'=>$mobile,'pass'=>$pass]),config('PrivateKeyFilePath')); //密码
                Db::name('user')->where('uid',$mobile)->update(['pass' => $password]);
                  return json(['flag' =>1,'msg' => '修改成功']);
            }
        }else{
          $this->assign('mobile',$mobile);//用户
          return $this->fetch();
        }
     }
    public function passnext() {
           // 判断是否登录
          $UserModel = new UserModel;
           $user_key= $UserModel->isLogin();
       if($user_key ==0){ 
            header("location:http://login.bxgogo.com");
           exit;
       }
       $user_key=(string)$user_key;
       $pass=input('pass');
       $repass=input('repass');
        $password =encryt_data(json_encode(['uid'=>$user_key,'pass'=>$repass]),config('PrivateKeyFilePath')); //密码
         if (request()->isAjax() ) {
            if(!empty($pass) && !empty($repass)){
                Db::name('user')->where('uid',$user_key)->update(['pass' => $password]);
              return json(['flag' =>1,'msg' => '修改成功']);
            }else{
              return json(['flag' =>0,'msg' => '系统异常，请稍候再试']);
            }
          }else{
            return $this->fetch();
          }
    }
      public function paynext() {
           // 判断是否登录
          $UserModel = new UserModel;
           $user_key= $UserModel->isLogin();
       if($user_key ==0){ 
            header("location:http://login.bxgogo.com");
           exit;
       }
       $user_key=(string)$user_key;
       $pass=input('pass');
       $repass=input('repass');
        $password =encryt_data(json_encode(['uid'=>$user_key,'pass'=>$repass]),config('PrivateKeyFilePath')); //密码
         if (request()->isAjax() ) {
            if(!empty($pass) && !empty($repass)){
                Db::name('user')->where('uid',$user_key)->update(['paypass' => $password]);
              return json(['flag' =>1,'msg' => '修改成功']);
            }else{
              return json(['flag' =>0,'msg' => '系统异常，请稍候再试']);
            }
          }else{
            return $this->fetch();
          }
    }
}
