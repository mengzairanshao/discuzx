<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: plugin.lang.php 30542 2012-06-01 08:03:33Z zhengqingpeng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}


$devlang = array
(
	//note 插件相关	请以 plugins_ 开头
	'author' => '作者',
	'add_new' => '新增',
	//note 用户组相关	请以 usergroups_ 开头
	'usergroups' => '用户组',
	'usergroups_system_0' => '普通用户',
	'usergroups_system_1' => '管理员',
	'usergroups_system_2' => '超级版主',
	'usergroups_system_3' => '版主',
	'usergroups_system_4' => '禁止发言',
	'usergroups_system_5' => '禁止访问',
	'usergroups_system_6' => '用户IP被禁止',
	'usergroups_system_7' => '游客',
	'usergroups_system_8' => '等待验证',
	'plugins' => '插件配置',
	'plugins_home' => '介绍',
	'plugins_editlink' => '设计',
	'plugins_validator' => '检查更新',
	'plugins_list' => '插件列表',
	'plugins_system' => '系统插件',
	'plugins_install' => '安装新插件',
	'plugins_newcomment' => '以下为插件目录 source/plugin/ 下未安装的插件',
	'plugins_menu' => '插件',
	'plugins_name' => '插件名称',
	'plugins_unavailable' => '本插件未被启用',
	'plugins_empty' => '空',
	'plugins_directory' => '插件目录',
	'plugins_identifier' => '唯一标识符',
	'plugins_vars_title' => '配置名称(必填)',
	'plugins_vars_variable' => '配置变量名(必填)',
	'plugins_vars_type' => '配置类型',
	'plugins_add' => '设计新插件',
	'plugins_add_tips' => '<li><b>本功能仅供插件开发者使用。</b></li><li>插件开发人员在使用本功能前请务必仔细阅读《<a href="http://dev.discuz.org/wiki" target="_blank">Discuz! 技术文库</a>》中的内容。</li><li>警告: 不正确的插件设计或安装可能危及到整个站点的正常使用。</li>',
	'plugins_import' => '导入插件数据',
	'plugins_import_ignore_version' => '允许导入老版本 Discuz! 的插件(易产生错误!!)',
	'plugins_update_to' => '更新到 ',
	'plugins_config' => '参数设置',
	'plugins_config_module' => '模块',
	'plugins_config_vars' => '变量',
	'plugins_config_install' => '安装',
	'plugins_config_uninstall' => '卸载',
	'plugins_config_upgrade' => '更新',
	'plugins_config_delete' => '卸载',
	'plugins_config_upgrade_other' => '您确定要把 {pluginname} {version} 插件更新到以下版本吗？',
	'plugins_config_uninstallplugin' => '卸载此插件',
	'plugins_edit' => '设计插件',
	'plugins_edit_available' => ' (插件已启用)',
	'plugins_edit_tips' => '<li><b>本功能仅供插件开发者使用，如果您只是安装或使用本插件，切勿修改本设置。</b></li><li>插件开发人员在使用本功能前请务必仔细阅读《<a href="http://dev.discuz.org/wiki" target="_blank">Discuz! 技术文库</a>》中的内容。</li><li>警告: 不正确的插件设计或安装可能危及到整个站点的正常使用。</li><li>把设计完的插件发布到<a href="http://addon.discuz.com" target="_blank">“Discuz! 应用中心”</a>分享给广大站长。</li>',
	'plugins_edit_name' => '插件名称(name)',
	'plugins_edit_name_comment' => '此插件的名称，中英文均可，最多 40 个字节',
	'plugins_edit_version' => '插件版本号(version)',
	'plugins_edit_version_comment' => '此插件的版本，中英文均可，最多 20 个字节。版本号高于旧版本号时，安装给用户时将会提示更新',
	'plugins_edit_copyright' => '版权信息(copyright)',
	'plugins_edit_copyright_comment' => '设置插件的版权信息，最多 100 个字节，一旦设置无法更改',
	'plugins_edit_identifier' => '唯一标识符(identifier)',
	'plugins_edit_identifier_comment' => '插件的唯一英文标识，不能够与现有插件标识重复。可使用字母、数字、下划线命名，不能包含其他符号或特殊字符，最大 40 个字节',
	'plugins_edit_adminid' => '后台权限等级(adminid)',
	'plugins_edit_adminid_comment' => '使用管理中心中插件接口自带的插件参数设置程序所需的最低权限等级要求。注意: 插件的后台模块拥有自己的权限设置，因此不受此限制',
	'plugins_edit_directory' => '插件目录(directory)',
	'plugins_edit_directory_comment' => '插件程序(包括前台和后台)相对于 source/plugin/ 的相对路径，必须以 "/" 结尾，否则会产生错误。如果不指定本设置，则默认插件的前后台程序均放置于 source/plugin/ 里。 ',
	'plugins_edit_description' => '插件描述(description)',
	'plugins_edit_description_comment' => '插件的简单描述，最多 100 个字节，可选填',
	'plugins_edit_langexists' => '插件语言包',
	'plugins_edit_langexists_comment' => '如果插件存在语言包，请选择“是”',
	'plugins_edit_modules' => '插件模块和导航',
	'plugins_edit_modules_name' => '程序模块(必填)',
	'plugins_edit_modules_menu' => '链接名称',
	'plugins_edit_modules_menu_url' => '链接 URL',
	'plugins_edit_modules_navtitle' => '导航说明',
	'plugins_edit_modules_navicon' => '导航图标',
	'plugins_edit_modules_navsubname' => '副导航名称',
	'plugins_edit_modules_navsuburl' => '副导航链接',
	'plugins_edit_modules_type' => '模块类型',
	'plugins_edit_modules_type_1' => '主导航项目',
	'plugins_edit_modules_type_2' => '',
	'plugins_edit_modules_type_5' => '主导航项目 - 插件菜单',
	'plugins_edit_modules_type_23' => '底部导航项目',
	'plugins_edit_modules_type_24' => '家园导航项目',
	'plugins_edit_modules_type_25' => '快捷导航项目',
	'plugins_edit_modules_type_6' => '',
	'plugins_edit_modules_type_7' => '个人设置',
	'plugins_edit_modules_type_8' => '',
	'plugins_edit_modules_type_9' => '',
	'plugins_edit_modules_type_10' => '',
	'plugins_edit_modules_type_3' => '管理中心',
	'plugins_edit_modules_type_4' => '全局包含',
	'plugins_edit_modules_type_11' => '页面嵌入 - 普通版',
	'plugins_edit_modules_type_12' => '特殊主题',
	'plugins_edit_modules_type_13' => '普通脚本',
	'plugins_edit_modules_type_14' => '站点帮助',
	'plugins_edit_modules_type_15' => '论坛管理 - 基本',
	'plugins_edit_modules_type_16' => '论坛管理 - 工具',
	'plugins_edit_modules_type_17' => '个人设置 - 个人资料',
	'plugins_edit_modules_type_19' => '个人设置 - 积分',
	'plugins_edit_modules_type_18' => '',
	'plugins_edit_modules_type_21' => '门户管理',
	'plugins_edit_modules_type_26' => '我的帖子',
	'plugins_edit_modules_type_27' => '顶部导航项目',
	'plugins_edit_modules_type_28' => '页面嵌入 - 手机版',
	'plugins_edit_modules_type_g1' => '程序链接',
	'plugins_edit_modules_type_g2' => '程序脚本',
	'plugins_edit_modules_type_g3' => '扩展项目',
	'plugins_edit_modules_adminid' => '使用等级',
	'plugins_edit_modules_include' => '包含运行',
	'plugins_edit_vars' => '插件变量配置',
	'plugins_edit_vars_title' => '配置名称',
	'plugins_edit_vars_title_comment' => '中英文均可，用于显示在插件配置的菜单中，最多 100 个字节。此处支持语言定义，例如：lang_admincp.php 定义了 \'myaction\'=>\'我的操作\' ，则此处填写 myaction 即可，这样有利于多语言版本插件的制作',
	'plugins_edit_vars_description' => '配置说明',
	'plugins_edit_vars_description_comment' => '描述此项配置的用途和取值范围，详细的描述有利于插件使用者了解这个设置的作用，最多 255 个字节。此处和配置名称类似，也支持语言定义',
	'plugins_edit_vars_type' => '配置类型',
	'plugins_edit_vars_type_number' => '数字(number)',
	'plugins_edit_vars_type_text' => '字串(text)',
	'plugins_edit_vars_type_textarea' => '文本(textarea)',
	'plugins_edit_vars_type_radio' => '开关(radio)',
	'plugins_edit_vars_type_select' => '单选选择(select)',
	'plugins_edit_vars_type_selects' => '多项选择(selects)',
	'plugins_edit_vars_type_color' => '颜色(color)',
	'plugins_edit_vars_type_date' => '日期(date)',
	'plugins_edit_vars_type_datetime' => '日期/时间(datetime)',
	'plugins_edit_vars_type_forum' => '版块单选(forum)',
	'plugins_edit_vars_type_forums' => '版块多选(forums)',
	'plugins_edit_vars_type_group' => '用户组单选(group)',
	'plugins_edit_vars_type_groups' => '用户组多选(groups)',
	'plugins_edit_vars_type_extcredit' => '扩展积分(extcredit)',
	'plugins_edit_vars_type_forum_text' => '版块/字串(forum_text)',
	'plugins_edit_vars_type_forum_textarea' => '版块/文本(forum_textarea)',
	'plugins_edit_vars_type_forum_radio' => '版块/开关(forum_radio)',
	'plugins_edit_vars_type_forum_select' => '版块/单选选择(forum_select)',
	'plugins_edit_vars_type_group_text' => '用户组/字串(group_text)',
	'plugins_edit_vars_type_group_textarea' => '用户组/文本(group_textarea)',
	'plugins_edit_vars_type_group_radio' => '用户组/开关(group_radio)',
	'plugins_edit_vars_type_group_select' => '用户组/单选选择(group_select)',
	'plugins_edit_vars_multiselect_comment' => '按住 CTRL 多选',
	'plugins_edit_vars_type_comment' => '设置此配置的数据类型，用于程序中检查和过滤相应配置值',
	'plugins_edit_vars_variable' => '配置变量名',
	'plugins_edit_vars_variable_comment' => '设置配置项目的变量名，用于插件程序中调用，可包含英文、数字和下划线，在同一个插件中需要保持变量名的唯一性，最多 40 个字节',
	'plugins_edit_vars_extra' => '扩充设置',
	'plugins_edit_vars_extra_comment' => '只在配置类型为“选择(select)”时有效，用于设定选项值。等号前面为选项索引(建议用数字)，后面为内容，例如: <br /><i>1 = 光电鼠标<br />2 = 机械鼠标<br />3 = 没有鼠标</i><br />注意: 选项确定后请勿修改索引和内容的对应关系，但仍可以新增选项。如需调换显示顺序，可以通过移动整行的上下位置来实现',
	'plugins_import_default' => '默认',
	'plugins_import_installtype_1' => '插件',
	'plugins_import_installtype_2' => '提供了以下',
	'plugins_import_installtype_3' => '种安装方式，请选择',
	'plugins_import_license' => '授权协议',
	'plugins_import_agree' => '我同意',
	'plugins_import_pass' => '我不同意',
	'plugins_conflict_view' => '查看细节',
	'plugins_conflict_info' => '联系作者',
	'plugins_module_sample' => '<span title="下载模块模板文件">[&darr;]</span>',
	'plugins_find_newversion' => '发现新版',
	'plugins_online_update' => '点击在线安装新版',
	'plugins_list_available' => '已启用的插件',
	'plugins_list_unavailable' => '未启用的插件',
	'plugins_list_new' => '未安装的插件',
	'plugins_enable_succeed' => '插件已启用',
	'plugin_not_found' => '插件未找到',
	'plugins_install_succeed' => '插件成功安装！<br />为了正常使用此插件，您可能还需要上传或修改相应的文件或模板，详情请查看本插件的安装说明<br /><br /><a href="http://addon.discuz.com?view=plugins">点击这里返回应用中心</a><br />',
	'plugin_file_error' => '插件文件缺失',
	'plugins_edit_identifier_invalid' => '您输入的唯一标识符不合法或与现有插件重复',
	'plugins_upgrade_succeed' => '插件成功更新到 {toversion}<br /><br /><a href="http://addon.discuz.com?view=plugins">点击这里返回应用中心</a><br />',
	'plugins_edit_name_invalid' => '您没有输入插件名称',
	'plugins_edit_succeed' => '插件配置更新成功 ',
	'plugins_delete_succeed' => '插件成功卸载！<br />为了正常卸载此插件，您可能还需要删除或修改相应的文件或模板，详情请查看本插件的安装说明',
	'plugins_conflict' => '插件已启用</h4><br />友情提示：您刚启用的插件与某些插件存在共用的嵌入点。虽然共用嵌入点属于正常情况，但是如果您遇到插件运行不正常的情况请及时联系插件作者。<a href="javascript:;" onclick="display(\'conflict\')">[点击查看]</a><br /><div id="conflict" style="display:none"><br />{plugins}<br /></div><br />',
	'plugins_disable_succeed' => '插件已关闭',
	'plugins_import_var_invalid' => '插件的嵌入点名称不合法，无法导入',
	'plugins_import_identifier_duplicated' => '您要导入的插件({plugin_name})已经安装',
	'plugins_import_version_invalid_confirm' => '本插件适用于 Discuz! {cur_version} 与当前版本({set_version})不一致，您确定要安装吗？<br />如果本插件的安装说明中不包含修改文件的内容则说明此插件为绿色插件，您可放心安装',
	'plugins_import_version_invalid' => '本插件适用于 Discuz! {cur_version} 与当前版本({set_version})不一致',
	'plugins_import_succeed' => '插件数据导入成功！<br />为了正常使用此插件，您可能还需要上传或修改相应的文件或模板，详情请查看本插件的安装说明',
	'plugins_config_upgrade_confirm' => '您确定要把 {pluginname} {version} 插件更新到 {toversion} 吗？',
	'plugins_config_upgrade_missed' => '此插件已更新到最新版本<br /><br /><a href="http://addon.discuz.com?view=plugins">点击这里返回应用中心</a><br />',
	'plugins_upgrade_var_invalid' => '插件的嵌入点名称不合法，无法更新',
	'plugins_setting_succeed' => '插件参数设置更新成功 ',
	'plugins_setting_module_nonexistence' => '指定的插件管理模块文件({modfile})不存在或存在语法错误，请检查是否已将插件完整上传',
	'plugins_add_succeed' => '插件已成功添加，请继续进行详细设置',
	'plugins_nonexistence' => '您即将进行的操作：设计插件。请先选择插件：',
	'plugin_donot_edit' => '不允许编辑',
	'plugins_edit_directory_invalid' => '您输入的插件目录不合法或没有使用 "/" 结尾',
	'plugins_edit_language_invalid' => '插件语言包文件({langfile})不存在',
	'plugins_edit_modules_name_invalid' => '您输入的程序模块名称不合法',
	'plugins_edit_modules_duplicated' => '您输入的程序模块名称与现有模块重复',
	'plugins_edit_var_invalid' => '您输入的配置变量名不合法或重复',
	'plugins_delete_error' => '您不能卸载系统插件。',
	'plugins_delete_confirm' => '您确定要卸载 {pluginname} {toversion} 插件吗？<br /><br />请选择您卸载该应用的原因，以便我们以后为您提供更好的应用：<br /><br /><label><input name="uninstallreason[]" class="checkbox" type="checkbox" value="1" />功能不满足需求</label> <label><input name="uninstallreason[]" class="checkbox" type="checkbox" value="2" />界面不美观</label> <label><input name="uninstallreason[]" class="checkbox" type="checkbox" value="3" />效率问题运行速度慢</label> <label><input name="uninstallreason[]" class="checkbox" type="checkbox" value="4" />发现了更好的应用</label><label><input name="uninstallreason[]" class="checkbox" type="checkbox" value="5" />纯试用现在卸载</label>',
	'styles_delete_confirm' => '您确定要卸载这些风格吗？<br /><br />请选择您卸载该应用的原因，以便我们以后为您提供更好的应用：<br /><br /><label><input name="uninstallreason[]" class="checkbox" type="checkbox" value="1" />功能不满足需求</label> <label><input name="uninstallreason[]" class="checkbox" type="checkbox" value="2" />界面不美观</label> <label><input name="uninstallreason[]" class="checkbox" type="checkbox" value="3" />效率问题运行速度慢</label> <label><input name="uninstallreason[]" class="checkbox" type="checkbox" value="4" />发现了更好的应用</label><label><input name="uninstallreason[]" class="checkbox" type="checkbox" value="5" />纯试用现在卸载</label>',
	'pluginvar_not_found' => '插件变量未找到',
	'plugins_edit_var_title_invalid' => '您没有输入配置名称',
	'plugins_edit_vars_succeed' => '插件变量配置更新成功 ',
	'plugins_edit_vars_invalid' => '插件配置变量名不合法或者已被占用',
	'plugins_validator_noupdate' => '没有检测到新版本插件',
	'plugins_script_magic' => '道具脚本',
	'plugins_script_cron' => '计划任务脚本',
	'plugins_script_adv' => '广告脚本',
	'plugins_script_task' => '站点任务脚本',
	'plugins_script_cache' => '缓存脚本',
	'plugins_script_secqaa' => '验证问答脚本',
	'plugins_script_seccode' => '验证码脚本',
	'plugins_script_navigation' => '导航栏目嵌入脚本',
	'plugins_script_repeat' => '文件名称重复',
	'plugins_script_add' => '添加',
	'plugins_script_delete' => '删除',
	);
?>