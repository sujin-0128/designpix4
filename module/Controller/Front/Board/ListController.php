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

namespace Controller\Front\Board;

use Component\Board\Board;
use Component\Board\BoardList;
use Component\Goods\GoodsCate;
use Component\Page\Page;
use Framework\Debug\Exception\AlertBackException;
use Framework\Debug\Exception\RedirectLoginException;
use Framework\Debug\Exception\RequiredLoginException;
use Framework\Utility\DateTimeUtils;
use Framework\Utility\Strings;
use Request;
use View\Template;

class ListController extends \Bundle\Controller\Front\Board\ListController {

    public function index() {
        try {
            $locale = \Globals::get('gGlobal.locale');
            $this->addCss([
                'plugins/bootstrap-datetimepicker.min.css',
                'plugins/bootstrap-datetimepicker-standalone.css',
            ]);
            $this->addScript([
                'gd_board_common.js',
                'moment/moment.js',
                'moment/locale/' . $locale . '.js',
                'jquery/datetimepicker/bootstrap-datetimepicker.js',
            ]);

            // GET 요청의 Query params를 연관 배열로 변환
            $req = Request::get()->toArray();

            //마이페이지에서 디폴트 기간노출 7일
            if ($req['memNo'] > 0 && ($req['bdId'] == Board::BASIC_QA_ID || $req['bdId'] == Board::BASIC_GOODS_QA_ID)) {
                $rangDate = \Request::get()->get(
                    'rangDate',
                    [
                        DateTimeUtils::dateFormat('Y-m-d', '-6 days'),
                        DateTimeUtils::dateFormat('Y-m-d', 'now'),
                    ]
                );
                $req['rangDate'] = $rangDate;
            }

            $boardList = new BoardList($req);
            $boardList->checkUsePc();
            $getData = $boardList->getList();
            $bdList['cfg'] = $boardList->cfg;
            $bdList['cnt'] = $getData['cnt'];
            $bdList['list'] = $this->maskWriterIp($getData['data']);

            $bdList['noticeList'] = $getData['noticeData'];
            $bdList['categoryBox'] = $boardList->getCategoryBox($req['category'], ' onChange="this.form.submit();" ');
            $bdList['pagination'] = $getData['pagination']->getPage();

            // 웹취약점 개선사항 상단 에디터 업로드 이미지 alt 추가
            if ($bdList['cfg']['bdHeader']) {
                $tag = "title";
                preg_match_all('@' . $tag . '="([^"]+)"@', $bdList['cfg']['bdHeader'], $match);
                $titleArr = array_pop($match);

                foreach ($titleArr as $title) {
                    $bdList['cfg']['bdHeader'] = str_replace('title="' . $title . '"', 'title="' . $title . '" alt="' . $title . '"', $bdList['cfg']['bdHeader']);
                }
            }

            // 웹취약점 개선사항 하단 에디터 업로드 이미지 alt 추가
            if ($bdList['cfg']['bdFooter']) {
                $tag = "title";
                preg_match_all('@' . $tag . '="([^"]+)"@', $bdList['cfg']['bdFooter'], $match);
                $titleArr = array_pop($match);

                foreach ($titleArr as $title) {
                    $bdList['cfg']['bdFooter'] = str_replace('title="' . $title . '"', 'title="' . $title . '" alt="' . $title . '"', $bdList['cfg']['bdFooter']);
                }
            }
        } catch (RequiredLoginException $e) {
            if ($req['noheader'] == 'y') {
                throw new AlertBackException($e->getMessage());
            }
            throw new RedirectLoginException();
        } catch (\Exception $e) {
            throw new AlertBackException($e->getMessage());
        }

        if (gd_isset($req['noheader'], 'n') != 'n') {
            $this->getView()->setDefine('header', 'outline/_share_header.html');
            $this->getView()->setDefine('footer', 'outline/_share_footer.html');
        }
        $this->setData('isMemNo', $req['memNo']);
        $this->setData('bdList', $bdList);
        // gd_debug($bdList['list']);
        // exit;
        $this->setData('req', gd_htmlspecialchars($boardList->req));
        $path = 'board/skin/' . $bdList['cfg']['themeId'] . '/list.html';
        $this->getView()->setDefine('list', $path);

        if (preg_match('/\/mypage\//', Request::server()->get('HTTP_REFERER')) || $req['mypageFl'] == 'y') {
            $this->setData('mypageFl', 'y');
        }
    }

    private function maskWriterIp(array &$data): array {
        // 배열의 각 요소를 순회
        foreach ($data as &$item) {
            // 'writerIp' 키가 존재할 경우
            if (isset($item['writerIp'])) {
                // IP 주소를 . 기준으로 나누기
                $ipParts = explode('.', $item['writerIp']);

                // IP 주소의 앞 두 부분만 남기고 나머지는 *로 대체
                if (count($ipParts) >= 4) {
                    $item['writerIp'] = $ipParts[0] . '.' . $ipParts[1] . '.*.*';
                }
            }
        }

        // 참조로 전달된 배열을 반환
        return $data;
    }
}
