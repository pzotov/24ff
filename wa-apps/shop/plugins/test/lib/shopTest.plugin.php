<?php

class shopTestPlugin extends shopPlugin {
	public function backendMenu(){
		return array(
			'core_li' => '<li class="'.(waRequest::get('plugin') == 'test' ? 'selected' : 'no-tab').'"><a href="?plugin=test">'._wp('Тестовое задание').'</a></li>',
		);
	}
}