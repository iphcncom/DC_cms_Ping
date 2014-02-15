<?php
/*@support tpl_options*/
!defined('EMLOG_ROOT') && exit('access deined!');
$options = array(
    'Home_on' => array(
        'type' => 'radio',
        'name' => '是否开启首页CMS样式',
        'values' => array(
            'y' => '是',
            'n' => '否'
        ),
        'default' => 'y',
    ),
    'Tp_type' => array(
        'type' => 'radio',
        'name' => '站点类型设置',
        'values' => array(
            'blog' => '博客',
            'photo' => '图库',
			'all' => '博客+图库'
        ),
        'default' => 'blog',
		'description' => '在博客+图库模式下，必须开启首页CMS样式。',
    ),
    'Home_type' => array(
        'type' => 'radio',
        'name' => '首页样式',
        'values' => array(
            '1' => '侧重博客',
            '2' => '博客无图库',
			'3' => '侧重图库'
        ),
        'default' => '1',
    ),
    'List_type' => array(
        'type' => 'radio',
        'name' => '图库列表样式',
        'values' => array(
            '1' => '单栏',
            '2' => '单栏带简略信息',
			'3' => '双栏',
			'4' => '三栏'
        ),
        'default' => '3',
		'description' => '选择站点图库的列表页样式。在单博客模式下无效。',
    ),
	'Side_type' => array(
        'type' => 'radio',
        'name' => '博客侧边栏样式',
        'values' => array(
            'blogside' => '模板自带边栏',
            'side' => '系统自带边栏'
        ),
        'default' => 'blogside',
		'description' => '选择系统自带边栏时，个人资料和日历样式失效，后期修正。',
    ),
	'Css_root' => array(
        'type' => 'radio',
        'name' => '博客后台登入按钮是否显示',
        'values' => array(
            'black' => '是',
            'none' => '否'
        ),
        'default' => 'black',
    ),
    'Blog_Sort_id' => array(
        'type' => 'sort',
        'name' => '博客分类选择',
		'multi' => true,
        'description' => '选择博客的分类，可以多选。',
    ),
    'Photo_Sort_id' => array(
        'type' => 'sort',
        'name' => '图库分类选择',
		'multi' => true,
        'description' => '选择图库的分类，可以多选。',
    ),
    'Views_up' => array(
        'type' => 'text',
        'name' => '热点排行上限',
		'default' => '9999',
        'description' => '热点排行里面最多的浏览量。设置不同数字可以显示不同的文章，可以全方位展示。请输入纯数字。',
    ),
    'Views_down' => array(
        'type' => 'text',
        'name' => '热点排行下限',
		'default' => '1',
        'description' => '热点排行里面最少的浏览量。设置不同数字可以显示不同的文章，可以全方位展示。请输入纯数字。',
    ),
    'Sns_qq' => array(
        'type' => 'text',
        'name' => '腾讯微博地址',
		'default' => 'http://www.huanwuu.com',
    ),
    'Sns_sina' => array(
        'type' => 'text',
        'name' => '新浪微博地址',
		'default' => 'http://www.huanwuu.com',
    ),
    'Sns_renren' => array(
        'type' => 'text',
        'name' => '人人微博地址',
		'default' => 'http://www.huanwuu.com',
    ),
    'Sns_kaixin' => array(
        'type' => 'text',
        'name' => '开心网微博地址',
		'default' => 'http://www.huanwuu.com',
    ),
    'Sns_netease' => array(
        'type' => 'text',
        'name' => '网易微博地址',
		'default' => 'http://www.huanwuu.com',
    ),
    'Logo_head' => array(
        'type' => 'image',
        'name' => '头部LOGO',
        'values' => array(
            TEMPLATE_URL . 'images/theme/logo.png',
        ),
		'description' => '设置站点头部LOGO，228X49最佳。',
    ),
    'Logo_footer' => array(
        'type' => 'image',
        'name' => '底部LOGO',
        'values' => array(
            TEMPLATE_URL . 'images/theme/logo2.png',
        ),
		'description' => '设置站点底部LOGO，172X39最佳。',
    ),
    'Ad_300x250' => array(
        'type' => 'text',
        'name' => '300x250广告位',
		'multi' => true,
		'rich' => true,
        'description' => '广告位，支持富文本。添加联盟广告代码，请切换编辑器到html代码模式下。',
    ),
);?>