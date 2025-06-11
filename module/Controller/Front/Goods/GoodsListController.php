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
 
 
class GoodsListController extends \Bundle\Controller\Front\Goods\GoodsListController
{

    public function index()
    {

        $getValue = Request::get()->length($checkParameter)->toArray();
        $cateCd = $getValue['cateCd'];

        $cate = \App::load('\\Component\\Category\\Category');
        $cateInfo = $cate->getCategoryGoodsList($cateCd);

        // echo 'displayType :: '.$cateInfo['displayType'];
        
        parent::index();
        
    }
}