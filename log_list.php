<?php 
/**
 * 文章列表判断
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
if(_g('Home_on') == 'y' && $pageurl == Url::logPage()){
	include View::getView('home/home-'. _g('Home_type'));
}elseif(_g('Tp_type') == 'blog'){include View::getView('list/blog');
}elseif(_g('Tp_type') == 'photo'){include View::getView('list/list_'. _g('List_type'));
}elseif(_g('Tp_type') == 'all' && _g('Home_on') == 'y'){include View::getView('list/list_'. _g('List_type'));
}elseif(_g('Tp_type') == 'all' && _g('Home_on') !== 'y' && $pageurl == Url::logPage()){include View::getView('list/list_'. _g('List_type'));
}elseif(_g('Tp_type') == 'all' && _g('Home_on') !== 'y' && in_array($sortid, _g('Photo_Sort_id'))){include View::getView('list/list_'. _g('List_type'));
}elseif(_g('Tp_type') == 'all' && _g('Home_on') !== 'y' && in_array($sortid, _g('Blog_Sort_id'))){include View::getView('list/blog');
}include View::getView('footer');
?>