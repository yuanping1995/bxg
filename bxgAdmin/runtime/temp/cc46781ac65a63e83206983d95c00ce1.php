<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\newbxg\bxgAdmin/./application/admin\view\user\tab_5.html";i:1510040187;}*/ ?>
<div class="row full-height-scroll" style="padding-top:20px;">
    <div class="col-sm-3" style="border-right:1px solid #eee;">
        <div class="red-bg col-sm-8 col-sm-offset-2" style="padding:8px 0;text-align:center;border-radius:5px;">
            <?php echo $Seller['shopName']; ?>
        </div>
        <div class="shop-head">
            <img src="     <?php echo $Seller['Doorimg']; ?>" width="90%"/>
        </div>
        <div class="table-responsive" style="padding:0 10px;">
            <table class="table">
                <tbody>
                    <tr>
                        <td>合同编号：</td>
                        <td>   <?php echo $Seller['Pactid']; ?></td>
                    </tr>
                    <tr>
                        <td>签约日期：</td>
                        <td>  <?php echo date("Y/m/d H:i:s",$Seller['signTime']); ?></td>
                    </tr>
                    <tr>
                        <td>签约城市：</td>
                        <td> <?php echo $Seller['signCity']; ?></td>
                    </tr>

                    <tr>
                        <td>审核ID：</td>
                        <td><?php echo $Seller['AuditId']; ?></td>
                    </tr>
                    <tr>
                        <td>审核时间：</td>
                        <td><?php echo date("Y/m/d H:i:s",$Seller['AuditTime']); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-7">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td>店铺ID：<?php echo $Seller['shopId']; ?></td>
                        <td>店铺名称：<?php echo $Seller['shopName']; ?></td>
                    </tr>
                    <tr>
                        <td>商家限额：满<?php echo $Seller['Quotatotal']; ?>元包邮</td>
                        <td>限额运费：<?php echo $Seller['Faretotal']; ?>元</td>
                    </tr>
                    <tr>
                        <td>营业时间：<?php echo $Seller['Bustime']; ?></td>

                    </tr>
                    <tr>
                        <td>浏览量：<?php echo $Seller['broNum']; ?></td>
                        <td>关注量：<?php echo $Seller['followNum']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">店铺地址：<?php echo $Seller['Area']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="diagnosis-proof">
            <span>营业执照：</span>
            <a class="imgBig" href="<?php echo $Seller['Patentimg']['Positive']; ?>">
                <img src="<?php echo $Seller['Patentimg']['Positive']; ?>" width="120" height="180"/>
            </a>
            <a class="imgBig" href="<?php echo $Seller['Patentimg']['back']; ?>">
                <img src=" <?php echo $Seller['Patentimg']['back']; ?>" width="120" height="180"/>
            </a>
        </div>


    </div>
</div>