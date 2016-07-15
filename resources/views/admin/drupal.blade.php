@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{asset('org/fa/css/font-awesome.min.css')}}" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{asset('asset/css/drupal/html.css')}}" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{asset('asset/css/drupal/toolbar.css')}}" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{asset('asset/css/drupal/ui.css')}}" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{asset('asset/css/drupal/body.css')}}" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{asset('asset/css/drupal/dp.css')}}" media="screen" charset="utf-8">
@endsection
@section('body_attr')class="user-logged-in path-admin"@stop
@section('content')
    <a href="#main-content" class="visually-hidden focusable skip-link">
        跳转到主要内容
    </a>
    <div id="toolbar-administration" role="group" aria-label="站点管理工具栏" class="toolbar">
        <nav class="toolbar-lining clearfix" role="navigation" aria-label="管理菜单(下拉)"><h3 class="toolbar-tray-name visually-hidden">管理菜单(下拉)</h3><div class="toolbar-menu-administration"><ul class="toolbar-menu root"><li class="menu-item menu-item--collapsed level-1"><div class="toolbar-box"><a href="/admin/content" title="查找及管理内容。" id="toolbar-link-system-admin_content" class="toolbar-icon toolbar-icon-system-admin-content" data-drupal-link-system-path="admin/content">内容</a><button class="toolbar-icon toolbar-handle"><span class="action">扩展</span><span class="label">内容</span></button></div>
                        <ul class="toolbar-menu">
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/content/comment" title="列出及编辑评论批准队列中的站点评论" id="toolbar-link-comment-admin" class="toolbar-icon toolbar-icon-comment-admin" data-drupal-link-system-path="admin/content/comment">评论</a></div>
                            </li>
                        </ul>


                    </li><li class="menu-item menu-item--collapsed level-1 menu-item--active-trail open"><div class="toolbar-box"><a href="/admin/structure" title="管理区块、内容类型、菜单等。" id="toolbar-link-system-admin_structure" class="toolbar-icon toolbar-icon-system-admin-structure" data-drupal-link-system-path="admin/structure">结构</a><button class="toolbar-icon toolbar-handle open"><span class="action">折叠</span><span class="label">结构</span></button></div>
                        <ul class="toolbar-menu">
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/structure/types" title="Create and manage fields, forms, and display settings for your content." id="toolbar-link-entity-node_type-collection" class="toolbar-icon toolbar-icon-entity-node-type-collection" data-drupal-link-system-path="admin/structure/types">内容类型</a></div>
                            </li>
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/structure/taxonomy" title="管理Tag，分类和内容类型。" id="toolbar-link-entity-taxonomy_vocabulary-collection" class="toolbar-icon toolbar-icon-entity-taxonomy-vocabulary-collection" data-drupal-link-system-path="admin/structure/taxonomy">分类</a></div>
                            </li>
                            <li class="menu-item level-2 menu-item--active-trail open">
                                <div class="toolbar-box"><a href="/admin/structure/block" title="设置区块内容出现在网站的边栏或其他位置。" id="toolbar-link-block-admin_display" class="toolbar-icon toolbar-icon-block-admin-display menu-item--active" data-drupal-link-system-path="admin/structure/block">区块布局</a></div>
                            </li>
                            <li class="menu-item menu-item--expanded level-2">
                                <div class="toolbar-box"><a href="/admin/structure/display-modes" title="为内容或表单配置可用显示" id="toolbar-link-field_ui-display_mode" class="toolbar-icon toolbar-icon-field-ui-display-mode" data-drupal-link-system-path="admin/structure/display-modes">显示模式</a><button class="toolbar-icon toolbar-handle"><span class="action">扩展</span><span class="label">显示模式</span></button></div>
                                <ul class="toolbar-menu">
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/structure/display-modes/form" title="管理自定义表单模式。" id="toolbar-link-entity-entity_form_mode-collection" class="toolbar-icon toolbar-icon-entity-entity-form-mode-collection" data-drupal-link-system-path="admin/structure/display-modes/form">表单模式</a></div>
                                    </li>
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/structure/display-modes/view" title="管理定制的视图模式。" id="toolbar-link-entity-entity_view_mode-collection" class="toolbar-icon toolbar-icon-entity-entity-view-mode-collection" data-drupal-link-system-path="admin/structure/display-modes/view">视图模式</a></div>
                                    </li>
                                </ul>

                            </li>
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/structure/contact" title="创建、管理联系表。" id="toolbar-link-entity-contact_form-collection" class="toolbar-icon toolbar-icon-entity-contact-form-collection" data-drupal-link-system-path="admin/structure/contact">联系表单</a></div>
                            </li>
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/structure/menu" title="管理菜单和菜单链接。" id="toolbar-link-entity-menu-collection" class="toolbar-icon toolbar-icon-entity-menu-collection" data-drupal-link-system-path="admin/structure/menu">菜单</a></div>
                            </li>
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/structure/views" title="管理经过定制的内容列表。" id="toolbar-link-entity-view-collection" class="toolbar-icon toolbar-icon-entity-view-collection" data-drupal-link-system-path="admin/structure/views">视图</a></div>
                            </li>
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/structure/comment" title="管理评论的格式和显示样式" id="toolbar-link-entity-comment_type-collection" class="toolbar-icon toolbar-icon-entity-comment-type-collection" data-drupal-link-system-path="admin/structure/comment">评论类型</a></div>
                            </li>
                        </ul>


                    </li><li class="menu-item level-1"><div class="toolbar-box"><a href="/admin/appearance" title="Select and configure themes." id="toolbar-link-system-themes_page" class="toolbar-icon toolbar-icon-system-themes-page" data-drupal-link-system-path="admin/appearance">外观</a></div></li><li class="menu-item level-1"><div class="toolbar-box"><a href="/admin/modules" title="添加和启用模块扩展站点的功能。" id="toolbar-link-system-modules_list" class="toolbar-icon toolbar-icon-system-modules-list" data-drupal-link-system-path="admin/modules">扩展</a></div></li><li class="menu-item menu-item--collapsed level-1"><div class="toolbar-box"><a href="/admin/config" title="管理设置." id="toolbar-link-system-admin_config" class="toolbar-icon toolbar-icon-system-admin-config" data-drupal-link-system-path="admin/config">配置</a><button class="toolbar-icon toolbar-handle"><span class="action">扩展</span><span class="label">配置</span></button></div>
                        <ul class="toolbar-menu">
                            <li class="menu-item menu-item--expanded level-2">
                                <div class="toolbar-box"><a href="/admin/config/people" title="设置用户帐号。" id="toolbar-link-user-admin_index" class="toolbar-icon toolbar-icon-user-admin-index" data-drupal-link-system-path="admin/config/people">人员</a><button class="toolbar-icon toolbar-handle"><span class="action">扩展</span><span class="label">人员</span></button></div>
                                <ul class="toolbar-menu">
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/people/accounts" title="配置默认用户帐号设置，包括字段，注册条件，以及电邮信息。" id="toolbar-link-entity-user-admin_form" class="toolbar-icon toolbar-icon-entity-user-admin-form" data-drupal-link-system-path="admin/config/people/accounts">帐户设置</a></div>
                                    </li>
                                </ul>

                            </li>
                            <li class="menu-item menu-item--expanded level-2">
                                <div class="toolbar-box"><a href="/admin/config/system" title="Configure basic site settings, actions, and cron." id="toolbar-link-system-admin_config_system" class="toolbar-icon toolbar-icon-system-admin-config-system" data-drupal-link-system-path="admin/config/system">系统</a><button class="toolbar-icon toolbar-handle"><span class="action">扩展</span><span class="label">系统</span></button></div>
                                <ul class="toolbar-menu">
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/system/site-information" title="管理站点名称、电子邮件地址、口号、默认首页和错误页。" id="toolbar-link-system-site_information_settings" class="toolbar-icon toolbar-icon-system-site-information-settings" data-drupal-link-system-path="admin/config/system/site-information">Basic site settings</a></div>
                                    </li>
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/system/cron" title="管理自动站点维护任务。" id="toolbar-link-system-cron_settings" class="toolbar-icon toolbar-icon-system-cron-settings" data-drupal-link-system-path="admin/config/system/cron">Cron</a></div>
                                    </li>
                                </ul>

                            </li>
                            <li class="menu-item menu-item--expanded level-2">
                                <div class="toolbar-box"><a href="/admin/config/content" title="Configure content formatting and authoring." id="toolbar-link-system-admin_config_content" class="toolbar-icon toolbar-icon-system-admin-config-content" data-drupal-link-system-path="admin/config/content">内容写作</a><button class="toolbar-icon toolbar-handle"><span class="action">扩展</span><span class="label">内容写作</span></button></div>
                                <ul class="toolbar-menu">
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/content/formats" title="选择和配置文本编辑器，以及在显示时如何过滤内容。" id="toolbar-link-filter-admin_overview" class="toolbar-icon toolbar-icon-filter-admin-overview" data-drupal-link-system-path="admin/config/content/formats">文本格式和编辑器</a></div>
                                    </li>
                                </ul>

                            </li>
                            <li class="menu-item menu-item--expanded level-2">
                                <div class="toolbar-box"><a href="/admin/config/user-interface" title="Configure the administrative user interface." id="toolbar-link-system-admin_config_ui" class="toolbar-icon toolbar-icon-system-admin-config-ui" data-drupal-link-system-path="admin/config/user-interface">用户界面</a><button class="toolbar-icon toolbar-handle"><span class="action">扩展</span><span class="label">用户界面</span></button></div>
                                <ul class="toolbar-menu">
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/user-interface/shortcut" title="添加及修改快捷方式组。" id="toolbar-link-entity-shortcut_set-collection" class="toolbar-icon toolbar-icon-entity-shortcut-set-collection" data-drupal-link-system-path="admin/config/user-interface/shortcut">快捷方式</a></div>
                                    </li>
                                </ul>

                            </li>
                            <li class="menu-item menu-item--expanded level-2">
                                <div class="toolbar-box"><a href="/admin/config/media" id="toolbar-link-system-admin_config_media" class="toolbar-icon toolbar-icon-system-admin-config-media" title="" data-drupal-link-system-path="admin/config/media">媒体</a><button class="toolbar-icon toolbar-handle"><span class="action">扩展</span><span class="label">媒体</span></button></div>
                                <ul class="toolbar-menu">
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/media/image-styles" title="配置可用于显示时改变尺寸或调整图片的样式。" id="toolbar-link-entity-image_style-collection" class="toolbar-icon toolbar-icon-entity-image-style-collection" data-drupal-link-system-path="admin/config/media/image-styles">图像样式</a></div>
                                    </li>
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/media/file-system" title="Configure the location of uploaded files and how they are accessed." id="toolbar-link-system-file_system_settings" class="toolbar-icon toolbar-icon-system-file-system-settings" data-drupal-link-system-path="admin/config/media/file-system">文件系统</a></div>
                                    </li>
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/media/image-toolkit" title="如果您安装了其它的图像工具包，请选择其对图像的处理。" id="toolbar-link-system-image_toolkit_settings" class="toolbar-icon toolbar-icon-system-image-toolkit-settings" data-drupal-link-system-path="admin/config/media/image-toolkit">图像工具包</a></div>
                                    </li>
                                </ul>

                            </li>
                            <li class="menu-item menu-item--expanded level-2">
                                <div class="toolbar-box"><a href="/admin/config/development" title="Configure and use development tools." id="toolbar-link-system-admin_config_development" class="toolbar-icon toolbar-icon-system-admin-config-development" data-drupal-link-system-path="admin/config/development">开发</a><button class="toolbar-icon toolbar-handle"><span class="action">扩展</span><span class="label">开发</span></button></div>
                                <ul class="toolbar-menu">
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/development/performance" title="Configure caching and bandwidth optimization." id="toolbar-link-system-performance_settings" class="toolbar-icon toolbar-icon-system-performance-settings" data-drupal-link-system-path="admin/config/development/performance">性能</a></div>
                                    </li>
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/development/logging" title="Configure the display of error messages and database logging." id="toolbar-link-system-logging_settings" class="toolbar-icon toolbar-icon-system-logging-settings" data-drupal-link-system-path="admin/config/development/logging">日志和错误</a></div>
                                    </li>
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/development/maintenance" title="Take the site offline for updates and other maintenance tasks." id="toolbar-link-system-site_maintenance_mode" class="toolbar-icon toolbar-icon-system-site-maintenance-mode" data-drupal-link-system-path="admin/config/development/maintenance">维护模式</a></div>
                                    </li>
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/development/qixiaojun" title="开发演示模块" id="toolbar-link-qixiaojun-admin" class="toolbar-icon toolbar-icon-qixiaojun-admin" data-drupal-link-system-path="admin/config/development/qixiaojun">自定义模块配置</a></div>
                                    </li>
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/development/configuration" title="导入和导出配置。" id="toolbar-link-config-sync" class="toolbar-icon toolbar-icon-config-sync" data-drupal-link-system-path="admin/config/development/configuration">配置同步</a></div>
                                    </li>
                                </ul>

                            </li>
                            <li class="menu-item menu-item--expanded level-2">
                                <div class="toolbar-box"><a href="/admin/config/search" title="Configure site search, metadata, and search engine optimization." id="toolbar-link-system-admin_config_search" class="toolbar-icon toolbar-icon-system-admin-config-search" data-drupal-link-system-path="admin/config/search">搜索及元数据</a><button class="toolbar-icon toolbar-handle"><span class="action">扩展</span><span class="label">搜索及元数据</span></button></div>
                                <ul class="toolbar-menu">
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/search/pages" title="配置搜索页面和搜索索引选项。" id="toolbar-link-entity-search_page-collection" class="toolbar-icon toolbar-icon-entity-search-page-collection" data-drupal-link-system-path="admin/config/search/pages">搜索页面</a></div>
                                    </li>
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/search/path" title="对现存路径添加定制地址。" id="toolbar-link-path-admin_overview" class="toolbar-icon toolbar-icon-path-admin-overview" data-drupal-link-system-path="admin/config/search/path">URL别名</a></div>
                                    </li>
                                </ul>

                            </li>
                            <li class="menu-item menu-item--expanded level-2">
                                <div class="toolbar-box"><a href="/admin/config/regional" title="Configure regional settings, localization, and translation." id="toolbar-link-system-admin_config_regional" class="toolbar-icon toolbar-icon-system-admin-config-regional" data-drupal-link-system-path="admin/config/regional">地区和语言</a><button class="toolbar-icon toolbar-handle"><span class="action">扩展</span><span class="label">地区和语言</span></button></div>
                                <ul class="toolbar-menu">
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/regional/settings" title="Configure the locale and timezone settings." id="toolbar-link-system-regional_settings" class="toolbar-icon toolbar-icon-system-regional-settings" data-drupal-link-system-path="admin/config/regional/settings">区域设置</a></div>
                                    </li>
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/regional/date-time" title="Configure how dates and times are displayed." id="toolbar-link-entity-date_format-collection" class="toolbar-icon toolbar-icon-entity-date-format-collection" data-drupal-link-system-path="admin/config/regional/date-time">日期和时间格式</a></div>
                                    </li>
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/regional/language" title="设置内容、界面和配置的语言。" id="toolbar-link-entity-configurable_language-collection" class="toolbar-icon toolbar-icon-entity-configurable-language-collection" data-drupal-link-system-path="admin/config/regional/language">语言</a></div>
                                    </li>
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/regional/content-language" title="配置内容的语言支持。" id="toolbar-link-language-content_settings_page" class="toolbar-icon toolbar-icon-language-content-settings-page" data-drupal-link-system-path="admin/config/regional/content-language">内容的语言</a></div>
                                    </li>
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/regional/translate" title="管理翻译文件的导入，并添加或自定义界面翻译。" id="toolbar-link-locale-translate_page" class="toolbar-icon toolbar-icon-locale-translate-page" data-drupal-link-system-path="admin/config/regional/translate">用户界面翻译</a></div>
                                    </li>
                                </ul>

                            </li>
                            <li class="menu-item menu-item--expanded level-2">
                                <div class="toolbar-box"><a href="/admin/config/services" id="toolbar-link-system-admin_config_services" class="toolbar-icon toolbar-icon-system-admin-config-services" title="" data-drupal-link-system-path="admin/config/services">Web服务</a><button class="toolbar-icon toolbar-handle"><span class="action">扩展</span><span class="label">Web服务</span></button></div>
                                <ul class="toolbar-menu">
                                    <li class="menu-item level-3">
                                        <div class="toolbar-box"><a href="/admin/config/services/rss-publishing" title="Configure the site description, the number of items per feed, and whether feeds should be titles/teasers/full-text." id="toolbar-link-system-rss_feeds_settings" class="toolbar-icon toolbar-icon-system-rss-feeds-settings" data-drupal-link-system-path="admin/config/services/rss-publishing">RSS 发布</a></div>
                                    </li>
                                </ul>

                            </li>
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/config/workflow" title="Manage the content workflow." id="toolbar-link-system-admin_config_workflow" class="toolbar-icon toolbar-icon-system-admin-config-workflow" data-drupal-link-system-path="admin/config/workflow">工作流</a></div>
                            </li>
                        </ul>


                    </li><li class="menu-item level-1"><div class="toolbar-box"><a href="/admin/people" title="管理用户账号、角色和权限。" id="toolbar-link-entity-user-collection" class="toolbar-icon toolbar-icon-entity-user-collection" data-drupal-link-system-path="admin/people">人员</a></div></li><li class="menu-item menu-item--collapsed level-1"><div class="toolbar-box"><a href="/admin/reports" title="查看报告、更新和错误。" id="toolbar-link-system-admin_reports" class="toolbar-icon toolbar-icon-system-admin-reports" data-drupal-link-system-path="admin/reports">报告</a><button class="toolbar-icon toolbar-handle"><span class="action">扩展</span><span class="label">报告</span></button></div>
                        <ul class="toolbar-menu">
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/reports/updates" title="获取您所安装模块和模板的可用更新的报告。" id="toolbar-link-update-status" class="toolbar-icon toolbar-icon-update-status" data-drupal-link-system-path="admin/reports/updates">可用更新</a></div>
                            </li>
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/reports/dblog" title="查看最近的事件日志。" id="toolbar-link-dblog-overview" class="toolbar-icon toolbar-icon-dblog-overview" data-drupal-link-system-path="admin/reports/dblog">最新日志信息</a></div>
                            </li>
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/reports/translations" title="获得一份已安装模块和主题的可用界面翻译状态报告。" id="toolbar-link-locale-translate_status" class="toolbar-icon toolbar-icon-locale-translate-status" data-drupal-link-system-path="admin/reports/translations">可用的翻译更新</a></div>
                            </li>
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/reports/fields" title="所有实体类型的字段总览。" id="toolbar-link-entity-field_storage_config-collection" class="toolbar-icon toolbar-icon-entity-field-storage-config-collection" data-drupal-link-system-path="admin/reports/fields">字段列表</a></div>
                            </li>
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/reports/access-denied" title="查看“拒绝访问”错误(403s)。" id="toolbar-link-dblog-access_denied" class="toolbar-icon toolbar-icon-dblog-access-denied" data-drupal-link-system-path="admin/reports/access-denied">最常见“拒绝访问”错误</a></div>
                            </li>
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/reports/page-not-found" title="查看“没有找到页面”错误(404s)。" id="toolbar-link-dblog-page_not_found" class="toolbar-icon toolbar-icon-dblog-page-not-found" data-drupal-link-system-path="admin/reports/page-not-found">最常见的“没有找到页面”错误</a></div>
                            </li>
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/reports/search" title="查看最热门的搜索关键字。" id="toolbar-link-dblog-search" class="toolbar-icon toolbar-icon-dblog-search" data-drupal-link-system-path="admin/reports/search">热门搜索</a></div>
                            </li>
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/reports/status" title="Get a status report about your site's operation." id="toolbar-link-system-status" class="toolbar-icon toolbar-icon-system-status" data-drupal-link-system-path="admin/reports/status">状态报告</a></div>
                            </li>
                            <li class="menu-item level-2">
                                <div class="toolbar-box"><a href="/admin/reports/views-plugins" title="预览所有视图使用的插件。" id="toolbar-link-views_ui-reports_plugins" class="toolbar-icon toolbar-icon-views-ui-reports-plugins" data-drupal-link-system-path="admin/reports/views-plugins">视图插件</a></div>
                            </li>
                        </ul>


                    </li><li class="menu-item level-1"><div class="toolbar-box"><a href="/admin/help" title="使用参考、配置和模块。" id="toolbar-link-help-main" class="toolbar-icon toolbar-icon-help-main" data-drupal-link-system-path="admin/help">帮助</a></div></li></ul></div><div class="toolbar-toggle-orientation" style=""><div class="toolbar-lining"><button class="toolbar-icon toolbar-icon-toggle-horizontal" type="button" value="horizontal" title="水平方向">水平方向</button></div></div></nav>
        <nav
            id="toolbar-bar"
            role="navigation"
            aria-label="工具栏项目"
            class="toolbar-bar clearfix"
            data-offset-top=""
        >
            <div class="toolbar-tab">
                <a
                        href="/admin"
                        title="管理菜单"
                        class="toolbar-icon toolbar-icon-menu trigger toolbar-item"
                        data-drupal-subtrees=""
                        id="toolbar-item-administration"
                        data-toolbar-tray="toolbar-item-administration-tray"
                        aria-owns="toolbar-item-administration-tray"
                        role="button"
                        aria-pressed="false"
                >
                    管理
                </a>
                <div
                        id="toolbar-item-administration-tray"
                        data-toolbar-tray="toolbar-item-administration-tray"
                        class="toolbar-tray is-active toolbar-tray-horizontal"
                        data-offset-top=""
                        style="margin-top: 39px;"
                >
                    <nav class="toolbar-lining clearfix" role="navigation" aria-label="管理菜单(下拉)">
                        <h3 class="toolbar-tray-name visually-hidden">管理菜单(下拉)</h3>
                        <div class="toolbar-menu-administration">
                            <ul class="toolbar-menu">
                                <li class="menu-item menu-item--collapsed"><a href="/admin/content" title="查找及管理内容。" id="toolbar-link-system-admin_content" class="toolbar-icon toolbar-icon-system-admin-content" data-drupal-link-system-path="admin/content">内容</a></li>
                                <li class="menu-item menu-item--collapsed"><a href="/admin/structure" title="管理区块、内容类型、菜单等。" id="toolbar-link-system-admin_structure" class="toolbar-icon toolbar-icon-system-admin-structure" data-drupal-link-system-path="admin/structure">结构</a></li>
                                <li class="menu-item"><a href="/admin/appearance" title="Select and configure themes." id="toolbar-link-system-themes_page" class="toolbar-icon toolbar-icon-system-themes-page" data-drupal-link-system-path="admin/appearance">外观</a></li>
                                <li class="menu-item"><a href="/admin/modules" title="添加和启用模块扩展站点的功能。" id="toolbar-link-system-modules_list" class="toolbar-icon toolbar-icon-system-modules-list" data-drupal-link-system-path="admin/modules">扩展</a></li>
                                <li class="menu-item menu-item--collapsed"><a href="/admin/config" title="管理设置." id="toolbar-link-system-admin_config" class="toolbar-icon toolbar-icon-system-admin-config" data-drupal-link-system-path="admin/config">配置</a></li>
                                <li class="menu-item"><a href="/admin/people" title="管理用户账号、角色和权限。" id="toolbar-link-entity-user-collection" class="toolbar-icon toolbar-icon-entity-user-collection" data-drupal-link-system-path="admin/people">人员</a></li>
                                <li class="menu-item menu-item--collapsed"><a href="/admin/reports" title="查看报告、更新和错误。" id="toolbar-link-system-admin_reports" class="toolbar-icon toolbar-icon-system-admin-reports" data-drupal-link-system-path="admin/reports">报告</a></li>
                                <li class="menu-item"><a href="/admin/help" title="使用参考、配置和模块。" id="toolbar-link-help-main" class="toolbar-icon toolbar-icon-help-main" data-drupal-link-system-path="admin/help">帮助</a></li>
                            </ul>
                        </div>
                        <div class="toolbar-toggle-orientation" style="">
                            <div class="toolbar-lining">
                                <button class="toolbar-icon toolbar-icon-toggle-vertical" type="button" value="vertical" title="垂直方向">垂直方向</button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </nav>
        <nav id="toolbar-bar" role="navigation" aria-label="工具栏项目" class="toolbar-bar clearfix">
            {{--<h2 class="visually-hidden">工具栏项目</h2>--}}
            <div class="toolbar-tab">
                <a
                        href="/admin"
                        title="管理菜单"
                        class="toolbar-icon toolbar-icon-menu trigger toolbar-item"
                        data-drupal-subtrees=""
                        id="toolbar-item-administration"
                        data-toolbar-tray="toolbar-item-administration-tray"
                        aria-owns="toolbar-item-administration-tray"
                        role="button"
                        aria-pressed="false"
                >管理</a>
                <div
                        id="toolbar-item-administration-tray"
                        data-toolbar-tray="toolbar-item-administration-tray"
                        class="toolbar-tray"
                >
                        <nav
                                class="toolbar-lining clearfix"
                                role="navigation"
                                aria-label="管理菜单(下拉)"
                        >
                        {{--<h3 class="toolbar-tray-name visually-hidden">管理菜单(下拉)</h3>--}}
                            <h3 class="toolbar-tray-name">管理菜单(下拉)</h3>
                            <div class="toolbar-menu-administration">
                                <ul class="toolbar-menu root">
                                    <li class="menu-item menu-item--collapsed level-1">
                                        <div class="toolbar-box">
                                            <a
                                                    href="/admin/content"
                                                    title="查找及管理内容。"
                                                    id="toolbar-link-system-admin_content"
                                                    class="toolbar-icon toolbar-icon-system-admin-content"
                                                    data-drupal-link-system-path="admin/content"
                                                    >
                                                内容
                                            </a>
                                            <button class="toolbar-icon toolbar-handle">
                                                <span class="action">扩展</span><span class="label">内容</span>
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="toolbar-menu-administration">
                                <ul class="toolbar-menu">
                                    <li class="menu-item menu-item--collapsed">
                                        <a
                                                href="/admin/content"
                                                title="查找及管理内容。"
                                                id="toolbar-link-system-admin_content"
                                                class="toolbar-icon toolbar-icon-system-admin-content"
                                                data-drupal-link-system-path="admin/content"
                                        >
                                            内容
                                        </a>
                                    </li>

                                    <li class="menu-item menu-item--collapsed">
                                        <a
                                                href="/admin/structure"
                                                title="管理区块、内容类型、菜单等。"
                                                id="toolbar-link-system-admin_structure"
                                                class="toolbar-icon toolbar-icon-system-admin-structure"
                                                data-drupal-link-system-path="admin/structure"
                                        >
                                            结构
                                        </a>
                                    </li>
                                    <li class="menu-item"><a href="/admin/appearance" title="Select and configure themes." id="toolbar-link-system-themes_page" class="toolbar-icon toolbar-icon-system-themes-page" data-drupal-link-system-path="admin/appearance">外观</a></li>
                                    <li class="menu-item"><a href="/admin/modules" title="添加和启用模块扩展站点的功能。" id="toolbar-link-system-modules_list" class="toolbar-icon toolbar-icon-system-modules-list" data-drupal-link-system-path="admin/modules">扩展</a></li>
                                    <li class="menu-item menu-item--collapsed"><a href="/admin/config" title="管理设置." id="toolbar-link-system-admin_config" class="toolbar-icon toolbar-icon-system-admin-config" data-drupal-link-system-path="admin/config">配置</a></li>
                                    <li class="menu-item"><a href="/admin/people" title="管理用户账号、角色和权限。" id="toolbar-link-entity-user-collection" class="toolbar-icon toolbar-icon-entity-user-collection" data-drupal-link-system-path="admin/people">人员</a></li>
                                    <li class="menu-item menu-item--collapsed"><a href="/admin/reports" title="查看报告、更新和错误。" id="toolbar-link-system-admin_reports" class="toolbar-icon toolbar-icon-system-admin-reports" data-drupal-link-system-path="admin/reports">报告</a></li>
                                    <li class="menu-item"><a href="/admin/help" title="使用参考、配置和模块。" id="toolbar-link-help-main" class="toolbar-icon toolbar-icon-help-main" data-drupal-link-system-path="admin/help">帮助</a></li>
                                </ul>
                            </div>
                        </nav>
                </div>
            </div>
        </nav>

    </div>

    <header class="content-header clearfix">
        <div class="layout-container">
            <div class="region region-header">
                <div id="block-seven-page-title" class="block block-core block-page-title-block">
                    <h1 class="js-quickedit-page-title page-title">结构</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="layout-container">

        <div class="region region-breadcrumb">
            <div id="block-seven-breadcrumbs" class="block block-system block-system-breadcrumb-block">


                <nav class="breadcrumb" role="navigation" aria-labelledby="system-breadcrumb">
                    <h2 id="system-breadcrumb" class="visually-hidden">面包屑</h2>
                    <ol>
                        <li>
                            <a href="{{url('admin/index')}}">首页</a>
                        </li>
                        <li>
                            <a href="{{url('admin/manage')}}">管理</a>
                        </li>
                    </ol>
                </nav>

            </div>

        </div>

        <main class="page-content clearfix" role="main">
            main

        </main>

    </div>

@section('js')
    <script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"admin\/index","currentPathIsAdmin":true,"isFront":false,"currentLanguage":"zh-hans"},"pluralDelimiter":"\u0003","ajaxPageState":{"libraries":"classy\/base,classy\/messages,contextual\/drupal.contextual-links,contextual\/drupal.contextual-toolbar,core\/drupal.active-link,core\/html5shiv,core\/normalize,seven\/drupal.nav-tabs,seven\/global-styling,shortcut\/drupal.shortcut,toolbar\/toolbar,toolbar\/toolbar.escapeAdmin,tour\/tour,user\/drupal.user.icons","theme":"seven","theme_token":"fgZ7RGWqpU2wWWP3XYc6USr9KbbyA_1l5qwlIp0KUNU"},"ajaxTrustedUrl":[],"toolbar":{"breakpoints":{"toolbar.narrow":"only screen and (min-width: 16.5em)","toolbar.standard":"only screen and (min-width: 38.125em)","toolbar.wide":"only screen and (min-width: 61em)"},"subtreesHash":"APKzzG5_CSlg3kPE7AJXxqdeQn2AWGAokFDvTmhquIQ"},"user":{"uid":"1","permissionsHash":"ab6c8deb3e2d26f2b3544f6a528567a26c8294be77aaf7f5c3a801a7ba7adbfd"}}</script>
    <script src="{{asset('asset/js/drupal/domready.js')}}" charset="utf-8"></script>
    <script src="{{asset('asset/js/drupal/modernizr.min.js')}}" charset="utf-8"></script>
@endsection
@endsection
