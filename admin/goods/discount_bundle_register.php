<form id="frmCart" name="frmCart" action="discount_bundle_ps.php" method="post" target="ifrmProcess">
    <input type="hidden" name="mode" value="modify" />
    <div class="page-header js-affix">
        <h3>결합 할인 상품 등록</h3>
        <div class="btn-group">
            <input type="button" value="목록" class="btn btn-white btn-icon-list" onclick="goList('./discount_bundle_list.php');" />
            <input type="submit" value="저장" class="btn btn-red"/>
        </div>
    </div>



    <div class="table-title">
        결합 할인 상품 등록
    </div>
    <input type="hidden" name="mode" value="<?= isset($bundle) ? 'modify' : 'add' ?>">
  <input type="hidden" name="bundleNo" value="<?= $bundle['bundleNo'] ?? '' ?>">

  <table class="table table-rows">
    <tr>
      <th>구매 상품(A)</th>
      <td>
        <!-- <input type="hidden" name="mainGoodsNo" value="<?= $bundle['mainGoodsNo'] ?? '' ?>"> -->
        <!-- <input type="text" value="<?= $bundle['mainGoodsNm'] ?? '' ?>" > -->
         <input type="text" name="mainGoodsNo" >
         <label>
            <button type="button" class="btn btn-sm btn-gray" onclick="layer_register('scm','radio',true)">상품 검색</button>
        </label>
      </td>
    </tr>
    <tr>
      <th>혜택 상품(B)</th>
      <td>
        <!-- <input type="hidden" name="subGoodsNo" value="<?= $bundle['subGoodsNo'] ?? '' ?>"> -->
        <!-- <input type="text" value="<?= $bundle['subGoodsNm'] ?? '' ?>" > -->
         <input type="text" name="subGoodsNo" >
         <label>
            <button type="button" class="btn btn-sm btn-gray" onclick="layer_register('scm','radio',true)">상품 검색</button>
        </label>
      </td>
    </tr>
    <tr>
      <th>할인 방식</th>
      <td>
        <label><input type="radio" name="discountType" value="price" <?= $bundle['discountType'] === 'price' ? 'checked' : '' ?>> 고정 금액</label>
        <label><input type="radio" name="discountType" value="percent" <?= $bundle['discountType'] === 'percent' ? 'checked' : '' ?>> 퍼센트</label>
      </td>
    </tr>
    <tr>
      <th>할인 값</th>
      <td>
        <input type="number" name="discountValue" value="<?= $bundle['discountValue'] ?? '' ?>" step="0.01" required> 
      </td>
    </tr>
    <tr>
      <th>상품설명</th>
      <td class="input_area" colspan="3">
                    <textarea name="goodsDescription" rows="3" style="width: 100%; height: 400px; display: none;" id="editor" class="form-control"></textarea><iframe frameborder="0" scrolling="no" src="/admin/gd_share/script/smart/SmartEditor2Skin.html?t=2" style="width: 100%; height: 449px;"></iframe>

                </td>
    </tr>
  </table>

  <div class="center">
    <button type="submit" class="btn btn-primary">저장</button>
    <a href="./bundle_discount_list.php" class="btn btn-secondary">목록</a>
  </div>
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