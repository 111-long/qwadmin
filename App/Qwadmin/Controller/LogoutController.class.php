<?php
/**
*
* ��Ȩ���У�ǡά����<www.qiawei.com>
* ��    �ߣ�����<admin@huikon.cn>
* ��    �ڣ�2016-01-17
* ��    ����1.0.4
* ����˵������̨�ǳ���������
*
**/

namespace Qwadmin\Controller;
use Qwadmin\Controller\ComController;
class LogoutController extends ComController {
    public function index(){
		cookie('user',null);
		$url = C("URL");
		header("Location: {$url}/Qwadmin/login.html");
		exit(0);
    }
}