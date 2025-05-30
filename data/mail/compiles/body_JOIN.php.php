<?php /* Template_ 2.2.7 2017/03/30 08:56:41 /www/designpix4_godomall_com/data/mail/body_JOIN.php 000005518 */ ?>
<div style="margin: auto; width: 600px; color: rgb(85, 85, 85); padding-right: 20px; padding-left: 20px; font-family: Malgun Gothic; font-size: 13px; background-color: rgb(255, 255, 255);">
    <div style="height: 46px; text-align: right; margin-top: 20px; margin-bottom: 50px; border-bottom-color: rgb(102, 102, 102); border-bottom-width: 2px; border-bottom-style: solid;">
        <a style="color: rgb(68, 68, 68); font-weight: bold; text-decoration: none; cursor: pointer;" href="#" target="_blank"><?php echo $TPL_VAR["rc_mallDomain"]?></a>
    </div>
    <div style="margin-bottom: 50px;">
        <div style="color: rgb(68, 68, 68); letter-spacing: -2px; font-size: 32px;">
            <b>회원가입</b>을<br>축하드립니다. <img style="margin-top: -40px; margin-right: 10px; float: right;" alt="mailimg_join top image" src="/data/mail/img/mailimg_join.png">
        </div>
        <div style="line-height: 22px; margin-top: 30px;">
            <strong><?php echo $TPL_VAR["rc_memNm"]?></strong>
            님의
            <strong><?php echo $TPL_VAR["rc_mallNm"]?></strong>
            회원가입을 축하드립니다. <br> 다양한 상품정보와 함께 언제나 만족스런 쇼핑을 하실 수 있도록 <br> 최선을 다하는 <?php echo $TPL_VAR["rc_mallNm"]?>이 되겠습니다. <br> 항상 새롭고 신선한 뉴스와 이벤트로 고객님의 알찬쇼핑을 제안하고자 더욱 열심히 노력하겠습니다. <br>감사합니다.
        </div>
    </div>
    <div style="color: rgb(68, 68, 68); font-size: 15px; font-weight: bold; margin-bottom: 10px;">회원가입정보</div>
    <table class="__se_tbl_ext" style="width: inherit; border-top-color: rgb(181, 181, 181); border-top-width: 1px; border-top-style: solid; border-collapse: collapse;">
        <tbody>
        <tr>
            <td style="height: 43px; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">가입아이디</td>
            <td style="width: 80%; height: 43px; color: rgb(51, 51, 51); padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_VAR["rc_memId"]?></td>
        </tr>
        </tbody>
    </table>
    <div style="margin: 40px 0px 10px; color: rgb(68, 68, 68); font-size: 15px; font-weight: bold;">광고성 정보 수신동의 상태</div>
    <table class="__se_tbl_ext" style="width: inherit; border-top-color: rgb(181, 181, 181); border-top-width: 1px; border-top-style: solid; border-collapse: collapse;">
        <tbody>
        <tr>
            <td style="height: 43px; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">SMS</td>
            <td style="width: 50%; height: 43px; color: rgb(51, 51, 51); padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_VAR["rc_smsFl"]?></td>
            <td style="width: 30%; height: 43px; text-align: right; color: rgb(136, 136, 136); font-size: 12px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;">설정변경일 : <?php echo $TPL_VAR["rc_today"]?></td>
        </tr>
        <tr>
            <td style="height: 43px; color: rgb(136, 136, 136); padding-right: 20px; padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(247, 247, 247);">이메일</td>
            <td style="width: 50%; height: 43px; color: rgb(51, 51, 51); padding-left: 20px; font-size: 13px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;"><?php echo $TPL_VAR["rc_maillingFl"]?></td>
            <td style="width: 30%; height: 43px; text-align: right; color: rgb(136, 136, 136); font-size: 12px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid;">설정변경일 : <?php echo $TPL_VAR["rc_today"]?></td>
        </tr>
        </tbody>
    </table>
    <div style="color: rgb(229, 229, 229); margin-top: 80px; margin-bottom: 20px; border-bottom-color: currentColor; border-bottom-width: 1px; border-bottom-style: solid;"></div>
    <div style="margin-bottom: 20px;"><?php if((is_array($TPL_R1=gd_get_footer_logo_tag())&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?> </div>
    <div style="color: rgb(102, 102, 102); font-size: 13px; margin-bottom: 25px;">
        <p>본 메일은 발신 전용으로 회신되지 않습니다. 추가 문의는 <a style="color: rgb(68, 68, 68); font-size: 12px; font-weight: bold;" href="#">[고객센터]</a>를 이용해주시기 바랍니다.
        </p>
        <p style="color: rgb(153, 153, 153); font-size: 11px;">Copyright(C) <b style="color: rgb(153, 153, 153); font-size: 11px;"><?php echo $TPL_VAR["rc_mallNm"]?></b> All right reserved.</p>
    </div>
</div>