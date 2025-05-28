<?php /* Template_ 2.2.7 2018/01/29 11:47:38 /www/designpix4_godomall_com/data/mail/body_DELIVERY.php 000015051 */ 
if (is_array($TPL_VAR["rc_goods"])) $TPL_rc_goods_1=count($TPL_VAR["rc_goods"]); else if (is_object($TPL_VAR["rc_goods"]) && in_array("Countable", class_implements($TPL_VAR["rc_goods"]))) $TPL_rc_goods_1=$TPL_VAR["rc_goods"]->count();else $TPL_rc_goods_1=0;
if (is_array($TPL_VAR["rc_receiverNmAdd"])) $TPL_rc_receiverNmAdd_1=count($TPL_VAR["rc_receiverNmAdd"]); else if (is_object($TPL_VAR["rc_receiverNmAdd"]) && in_array("Countable", class_implements($TPL_VAR["rc_receiverNmAdd"]))) $TPL_rc_receiverNmAdd_1=$TPL_VAR["rc_receiverNmAdd"]->count();else $TPL_rc_receiverNmAdd_1=0;?>
<div style="margin: auto; width: 600px; color: rgb(85, 85, 85); padding-right: 20px; padding-left: 20px; font-family: Malgun Gothic; font-size: 13px; background-color: rgb(255, 255, 255);">
    <div style="height: 46px; text-align: right; margin-top: 20px; margin-bottom: 50px; border-bottom-color: rgb(102, 102, 102); border-bottom-width: 2px; border-bottom-style: solid;">
        <a style="color: rgb(68, 68, 68); font-weight: bold; text-decoration: none; cursor: pointer;" href="#" target="_blank"><?php echo $TPL_VAR["rc_mallDomain"]?></a>
    </div>
    <div style="margin-bottom: 50px;">
        <div style="color: rgb(68, 68, 68); letter-spacing: -2px; font-size: 32px;">
            <b>주문하신 상품이</b><br><b>발송</b>되었습니다. <img style="margin-top: -40px; margin-right: 10px; float: right;" alt="mailimg_delivery top image" src="/data/mail/img/mailimg_delivery.png">
        </div>
        <div style="line-height: 22px; margin-top: 30px;">
            <strong><?php echo $TPL_VAR["rc_orderNm"]?></strong>
            님, 저희 쇼핑몰을 이용하여 주셔서 감사합니다. <br> <?php echo $TPL_VAR["rc_orderNm"]?> 님께서 주문하신 상품이 아래와 같이 발송되었습니다. <br> 고객님께 빠르고 정확하게 제품이 전달될 수 있도록 최선을 다하겠습니다.
        </div>
    </div>
    <div style="color: rgb(68, 68, 68); font-size: 15px; font-weight: bold; margin-bottom: 10px;">상품배송정보</div>
    <table class="__se_tbl_ext" style="width: inherit; border-top-color: rgb(181, 181, 181); border-top-width: 1px; border-top-style: solid; border-collapse: collapse;">
        <colgroup>
            <col width="20%">
            <col width="">
<?php if($TPL_VAR["rc_receiverNmAdd"]){?>
            <col width="15%">
<?php }?>
            <col width="10%">
            <col width="">
        </colgroup>
        <thead>
        <tr>
            <th style="height: 43px; font-size: 13px; border-bottom-color: rgb(218, 218, 218); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">주문번호</th>
            <th style="height: 43px; font-size: 13px; border-bottom-color: rgb(218, 218, 218); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">상품명</th>
<?php if($TPL_VAR["rc_receiverNmAdd"]){?>
            <th style="height: 43px; font-size: 13px; border-bottom-color: rgb(218, 218, 218); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">배송지</th>
<?php }?>
            <th style="height: 43px; font-size: 13px; border-bottom-color: rgb(218, 218, 218); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">수량</th>
            <th style="height: 43px; font-size: 13px; border-bottom-color: rgb(218, 218, 218); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">배송정보</th>
        </tr>
        </thead>
        <tbody>
<?php if($TPL_rc_goods_1){$TPL_I1=-1;foreach($TPL_VAR["rc_goods"] as $TPL_V1){$TPL_I1++;?>
        <tr>
<?php if($TPL_I1== 0){?>
            <td style="height: 43px; text-align: center; padding-top: 15px; padding-bottom: 15px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(218, 218, 218); border-bottom-width: 1px; border-bottom-style: solid;" rowspan="<?php echo $TPL_rc_goods_1?>"><?php echo $TPL_VAR["rc_orderNo"]?></td>
<?php }?>
            <td style="height: 43px; text-align: left; padding-top: 15px; padding-bottom: 15px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(218, 218, 218); border-bottom-width: 1px; border-bottom-style: solid;">
<?php if($TPL_V1["goodsType"]=='addGoods'){?>
                <img style="vertical-align: middle;" alt="add goods icon" src="/data/mail/img/icon_plus.gif">
<?php }?><?php echo $TPL_V1["goodsNm"]?>

<?php if($TPL_V1["optionInfo"]){?>
                <br>
                <span style="color: rgb(153, 153, 153); font-size: 12px;">
<?php if((is_array($TPL_R2=$TPL_V1["optionInfo"])&&!empty($TPL_R2)) || (is_object($TPL_R2) && in_array("Countable", class_implements($TPL_R2)) && $TPL_R2->count() > 0)) {$TPL_S2=count($TPL_R2);$TPL_I2=-1;foreach($TPL_R2 as $TPL_V2){$TPL_I2++;?><?php echo $TPL_V2["optionName"]?> : <?php echo $TPL_V2["optionValue"]?>

<?php if(($TPL_S2- 1)!=$TPL_I2){?> / <?php }?>
<?php }}?>
                </span>
<?php }?>
<?php if((is_array($TPL_R2=$TPL_V1["optionTextInfo"])&&!empty($TPL_R2)) || (is_object($TPL_R2) && in_array("Countable", class_implements($TPL_R2)) && $TPL_R2->count() > 0)) {foreach($TPL_R2 as $TPL_V2){?>
                <br>
                <span style="color: rgb(153, 153, 153); font-size: 12px;">옵션 : <?php echo $TPL_V2["optionValue"]?></span>
<?php }}?>
            </td>
<?php if($TPL_VAR["rc_receiverNmAdd"]&&$TPL_V1["orderInfoTit"]){?>
            <td style="height: 43px; text-align: center; padding-top: 15px; padding-bottom: 15px; font-size: 13px; border-bottom-color: rgb(218, 218, 218); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_V1["orderInfoTit"]?></td>
<?php }?>
            <td style="height: 43px; text-align: center; padding-top: 15px; padding-bottom: 15px; font-size: 13px; border-bottom-color: rgb(218, 218, 218); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_V1["goodsCnt"]?></td>
            <td style="height: 43px; text-align: center; padding-top: 15px; padding-bottom: 15px; font-size: 13px; border-bottom-color: rgb(218, 218, 218); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_V1["invoiceCompanyName"]?><br><a href="<?php echo $TPL_V1["invoiceLink"]?>" target="_blank"><?php echo $TPL_V1["invoiceNo"]?></a></td>
        </tr>
<?php }}?>
        </tbody>
    </table>
    <div style="margin: 40px 0px 10px; color: rgb(68, 68, 68); font-size: 15px; font-weight: bold;">배송지정보</div>
<?php if($TPL_VAR["rc_receiverNm"]){?>
    <table class="__se_tbl_ext" style="width: inherit; border-top-color: rgb(181, 181, 181); border-top-width: 1px; border-top-style: solid; border-collapse: collapse;">
        <tbody>
<?php if($TPL_VAR["rc_receiverNmAdd"]){?>
        <tr>
            <td colspan="2" style="height: 43px; text-align: left; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">메인 배송지</td>
        </tr>
<?php }?>
        <tr>
            <td style="height: 43px; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">받는사람</td>
            <td style="width: 80%; height: 43px; color: rgb(51, 51, 51); padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_VAR["rc_receiverNm"]?></td>
        </tr>
        <tr>
            <td style="height: 43px; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">주소</td>
            <td style="width: 80%; height: 43px; color: rgb(51, 51, 51); padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_VAR["rc_receiverZonecode"]?> <?php echo $TPL_VAR["rc_receiverAddress"]?> <?php echo $TPL_VAR["rc_receiverAddressSub"]?></td>
        </tr>
        <tr>
            <td style="height: 43px; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">전화번호</td>
            <td style="width: 80%; height: 43px; color: rgb(51, 51, 51); padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_VAR["rc_receiverPhone"]?></td>
        </tr>
        <tr>
            <td style="height: 43px; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">휴대폰번호</td>
            <td style="width: 80%; height: 43px; color: rgb(51, 51, 51); padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_VAR["rc_receiverCellPhone"]?></td>
        </tr>
        <tr>
            <td style="height: 43px; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">배송메시지</td>
            <td style="width: 80%; height: 43px; color: rgb(51, 51, 51); padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_VAR["rc_receiverMemo"]?></td>
        </tr>
        </tbody>
    </table>
<?php }?>
<?php if($TPL_VAR["rc_receiverNmAdd"]){?>
<?php if($TPL_rc_receiverNmAdd_1){foreach($TPL_VAR["rc_receiverNmAdd"] as $TPL_K1=>$TPL_V1){?>
    <table class="__se_tbl_ext" style="width: inherit; border-top-color: rgb(181, 181, 181); border-top-width: 1px; border-top-style: solid; border-collapse: collapse; margin-top:5px;">
        <tbody>
        <tr>
            <td colspan="2" style="height: 43px; text-align: left; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">추가배송지<?php echo $TPL_K1?></td>
        </tr>
        <tr>
            <td style="height: 43px; text-align: left; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">받는사람</td>
            <td style="width: 80%; height: 43px; color: rgb(51, 51, 51); padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_V1?></td>
        </tr>
        <tr>
            <td style="height: 43px; text-align: left; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">주소</td>
            <td style="width: 80%; height: 43px; color: rgb(51, 51, 51); padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_VAR["rc_receiverZonecodeAdd"][$TPL_K1]?> <?php echo $TPL_VAR["rc_receiverAddressAdd"][$TPL_K1]?> <?php echo $TPL_VAR["rc_receiverAddressSubAdd"][$TPL_K1]?></td>
        </tr>
        <tr>
            <td style="height: 43px; text-align: left; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">전화번호</td>
            <td style="width: 80%; height: 43px; color: rgb(51, 51, 51); padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_VAR["rc_receiverPhoneAdd"][$TPL_K1]?></td>
        </tr>
        <tr>
            <td style="height: 43px; text-align: left; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">휴대폰번호</td>
            <td style="width: 80%; height: 43px; color: rgb(51, 51, 51); padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_VAR["rc_receiverCellPhoneAdd"][$TPL_K1]?></td>
        </tr>
        <tr>
            <td style="height: 43px; text-align: left; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">배송메시지</td>
            <td style="width: 80%; height: 43px; color: rgb(51, 51, 51); padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_VAR["rc_orderMemoAdd"][$TPL_K1]?></td>
        </tr>
        </tbody>
    </table>
<?php }}?>
<?php }?>
    <div style="color: rgb(229, 229, 229); margin-top: 70px; margin-bottom: 20px; border-bottom-color: currentColor; border-bottom-width: 1px; border-bottom-style: solid;"></div>
    <div style="margin-bottom: 20px;"><?php if((is_array($TPL_R1=gd_get_footer_logo_tag())&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?> </div>
    <div style="color: rgb(102, 102, 102); font-size: 13px; margin-bottom: 25px;">
        <p>본 메일은 발신 전용으로 회신되지 않습니다. 추가 문의는 <a style="color: rgb(68, 68, 68); font-size: 12px; font-weight: bold;" href="#">[고객센터]</a>를 이용해주시기 바랍니다.
        </p>
        <p style="color: rgb(153, 153, 153); font-size: 11px;">Copyright(C) <b style="color: rgb(153, 153, 153); font-size: 11px;"><?php echo $TPL_VAR["rc_mallNm"]?></b> All right reserved.</p>
    </div>
</div>