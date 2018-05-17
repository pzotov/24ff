<?php

class shopTestPluginBackendAction extends waViewAction {
	public function execute(){
		$this->setLayout(new shopBackendLayout());
	}
}