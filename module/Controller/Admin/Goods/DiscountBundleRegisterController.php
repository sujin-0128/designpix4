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
 * @link      http://www.godo.co.kr
 */

namespace Controller\Admin\Goods;

// use Framework\Debug\Exception\AlertBackException;
// use Framework\Debug\Exception\LayerException;
// use App;
// use Exception;
// use Globals;
use Request;
// use Session;

class DiscountBundleRegisterController extends \Bundle\Controller\Admin\Controller
{
	public function index(){
		// --- 각 배열을 trim 처리
		$this->callMenu('goods', 'discountBundle', 'discountBundleGroupList');

        $postValue = Request::post()->toArray();

		// $giftCfg = gd_policy('dpx.giftCfg') ; 

		// $this->setData('cfg', $giftCfg);


		// $present = \App::load('\\Component\\Designpix\\Present');
		// $cardGroup = $present->getCardGroup();

		// $this->setData('cardGroup', $cardGroup);		

		// $cardList = $present->getCardList();

		// $this->setData('cardList', $cardList); 
	}
}