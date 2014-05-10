<?php
foreach ($actions as $action) {
	if ($action['options']['type'] == 'link') {
		if(array_key_exists('post',$action['options'])){
			unset($action['options']['post']);
			echo $this->Form->postLink($action['name'], $action['url'], array_merge($action['options'], array('title' => $action['name'],'escapeTitle' => false)));
		} else {
			echo $this->Html->link($action['name'], $action['url'], array_merge($action['options'], array('title' => $action['name'],'escapeTitle' => false)));
		}
	}
	elseif ($action['options']['type'] == 'image' && !empty($action['options']['image'])) {
		echo $this->Html->link(
			$this->Html->image($action['options']['image'], array('alt' => $action['name'])),
			$action['url'], array_merge($action['options'], array('escape' => false, 'title' => $action['name']))
		);
	}
}