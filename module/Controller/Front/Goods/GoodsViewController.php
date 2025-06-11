<?php
 
/**
 * This is commercial software, only users who have purchased a valid license
 * and accept to the terms of the License Agreement can install and use this
 * program.
 *
 * Do not edit or add to this file if you wish to upgrade Godomall5 to newer
 * versions in the future.
 *
 * @copyright ⓒ 2016, NHN godo: Corp.
 * @link http://www.godo.co.kr
 */
namespace Controller\Front\Goods;
use Request;
 
 
class GoodsViewController extends \Bundle\Controller\Front\Goods\GoodsViewController
{
    public function pre()
    {
        $getValue = Request::get()->toArray();
        $allowNoBundleSale = 'n';
        

        // --- 모듈 호출
        $dpx = \App::load('\\Component\\Designpix\\Dpx');

        // 결합 할인 상품인지 확인
        $getData = $dpx->checkAllowNoBundleSale();
        // var_dump($getData);
        $layerBundleBuy = '';
        $layerBundleCart = '';
        if(count($getData) > 0){

            $layerBundleBuy = '../goods/layer_bundle_main_buy.php';
            if($getData[0]['bundleType'] == 'main'){
                    $layerBundleCart = '../goods/layer_bundle_main_cart.php';
            }else{
                $layerBundleCart = '../goods/layer_bundle_discout_cart.php';
            }

        }
        // echo 'bundleType :: '.$getData[0]['bundleType'] .'<br>';
        // echo 'showNoBundlePopup :: '.$getData[0]['showNoBundlePopup'] .'<br>';
        // echo 'preCartBundlePopup :: '.$getData[0]['preCartBundlePopup'] .'<br>';
        // echo 'layerBundleBuy :: '.$layerBundleBuy .'<br>';
        // echo 'layerBundleCart :: '.$layerBundleCart .'<br>';

        // $this->setData('allowNoBundleSale', $allowNoBundleSale);
        $this->setData('bundleType', $getData[0]['bundleType']);                    // 상품 구분(main : 메인상품(판매함), discount:할인상품(판매안함))
        $this->setData('showNoBundlePopup', $getData[0]['showNoBundlePopup']);      // 상품 바로구매 시 결합상품 안내 레이어팝업 노출 여부(y:노출, n:비노출), 메인상품만 해당
        $this->setData('preCartBundlePopup', $getData[0]['preCartBundlePopup']);    // 상품 장바구니 시 결합상품 안내 레이어팝업 노출 여부(y:노출, n:비노출), 메인, 할인 둘다 해당 
        $this->setData('layerBundleBuy', $layerBundleBuy);                          // 바로구매시 안내 레이어 url
        $this->setData('layerBundleCart', $layerBundleCart);                        // 장바구니시 안내 레이어 url

        
    }
}