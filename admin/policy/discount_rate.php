<form id="frmCart" name="frmCart" action="discount_rate_ps.php" method="post" target="ifrmProcess">
    <input type="hidden" name="mode" value="modify" />
    <div class="page-header js-affix">
        <h3>상품 수량 별 할인율 설정
            <small>상품 수량을 0개로 설정한 부분은 할인되지 않습니다.</small>
        </h3>
        <input type="submit" value="저장" class="btn btn-red" />
    </div>

    <div class="table-title">
        상품 수량 별 할인율 설정
    </div>
    <table class="table table-cols" cellpadding="1" cellspacing="1" border="0" width="100%" bgcolor="#CCCCCC">
        <tr>
            <td width="100" bgcolor="#F6F6F6" align="center" bgcolor="">노출 여부</td>
            <td align="left" bgcolor="" colspan="7">
                <label class="radio-inline">
                    <input type="radio" name="show_discount_by_count" value="0" <?= $showDiscountByCount === 0 ? 'checked' : '' ?> />미노출
                </label>
                <label class="radio-inline">
                    <input type="radio" name="show_discount_by_count" value="1" <?= $showDiscountByCount === 1 ? 'checked' : '' ?> />B2B 회원에게 노출
                </label>
                <label class="radio-inline">
                    <input type="radio" name="show_discount_by_count" value="2" <?= $showDiscountByCount === 2 ? 'checked' : '' ?> />모두에게 노출
                </label>
            </td>

            <?php for ($i = 0; $i < 7; $i++) { ?>
                <input type="hidden" name="discount_no[]" value="<?= $discountRateData[$i]['discountNo'] ?>" class="input" size="5">
            <?php } ?>
        </tr>
        <tr>
            <td width="100" bgcolor="#F6F6F6" align="center" bgcolor="">할인 타입</td>
            <td align="left" bgcolor="" colspan="7">
                <label class="radio-inline">
                    <input type="radio" name="sale_type" value="0" <?= $discountRateData[0]['saleType'] == 0 ? 'checked' : '' ?> onclick="dpxType(this.value)" />원
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sale_type" value="1" <?= $discountRateData[0]['saleType'] == 1 ? 'checked' : '' ?> onclick="dpxType(this.value)" />%
                </label>
            </td>
        </tr>
        <tr>
            <td width="100" bgcolor="#F6F6F6" align="center" bgcolor="">수량</td>
            <?php for ($i = 0; $i < 7; $i++) { ?>
                <td align="center" bgcolor="">
                    <input type="text" name="goods_count[]" value="<?= $discountRateData[$i]['goodsCnt'] * 1 ?>" class="input" size="5" tabindex="<?= $i * 2 + 1 ?>"> 개
                </td>
            <?php } ?>
        </tr>
        <tr>
            <td align="center" bgcolor="#F6F6F6">할인</td>
            <?php for ($i = 0; $i < 7; $i++) { ?>
                <td align="center" bgcolor="#FFFFFF">
                    <label class="discount-price"><input type="text" name="discount_price[]" value="<?= $discountRateData[$i]['discountPrice'] ?>" class="input" size="5" tabindex="<?= $i * 2 + 2 ?>">원</label>
                    <label class="discount-rate"><input type="text" name="discount_rate[]" value="<?= $discountRateData[$i]['discountRate'] * 100 ?>" class="input" size="5" tabindex="<?= $i * 2 + 2 ?>"> %</label>
                </td>
            <?php } ?>
        </tr>
    </table>
</form>

<script>
    $(document).ready(function() {
        var setType = $("input[name=sale_type]:checked").val();
        dpxType(setType);
    })

    function dpxType(d) {
        if (d == 0) {
            $("label.discount-rate").hide();
            $("label.discount-price").show();
        } else if (d == 1) {
            $("label.discount-rate").show();
            $("label.discount-price").hide();
        }
    }
</script>