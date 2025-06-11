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

class DiscountBundlePsController extends \Bundle\Controller\Admin\Controller
{
	public function index()
    {
        $postData = Request::post()->toArray();

        $mode = $postData['mode'] ?? null;

        $dpx = \App::load('\\Component\\Designpix\\Dpx');

        try {
            switch ($mode) {
                case 'add':
                    $result = $dpx->dpxAddBundle($postData);
                    $this->layer(__('등록 하였습니다.'));
                    // $discountBundle->addBundle($postData);
                    break;

                case 'modify':
                    // $discountBundle->modifyBundle($postData);
                    break;

                case 'delete':
                    // $bundleNo = Request::get()->get('bundleNo');
                    // $discountBundle->deleteBundle($bundleNo);
                    break;

                default:
                    throw new Exception('잘못된 요청입니다.');
            }

            // Response::redirect('./bundle_discount_list.php', '처리가 완료되었습니다.', 'parent');

        } catch (Exception $e) {
            Response::alertBack($e->getMessage());
        }
    }
}