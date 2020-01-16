<?php
return array (
  'tca' => 
  array (
    'be_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'adminOnly' => true,
        'rootLevel' => 1,
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-backend',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups',
        'useColumnsForDefaultValues' => 'lockToDomain, file_permissions',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title, db_mountpoints, file_mountpoints, file_permissions, tables_select, tables_modify, pagetypes_select, non_exclude_fields, groupMods, lockToDomain, description',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:db_mountpoints',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 3,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'enableMultiSelectFilterTextfield' => true,
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND sys_filemounts.pid=0 ORDER BY sys_filemounts.title',
            'size' => 3,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                1 => '--div--',
                2 => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                1 => 'readFolder',
                2 => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                1 => 'writeFolder',
                2 => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                1 => 'addFolder',
                2 => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                1 => 'renameFolder',
                2 => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                1 => 'moveFolder',
                2 => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                1 => 'copyFolder',
                2 => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                1 => 'deleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                1 => 'recursivedeleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                1 => '--div--',
                2 => 'mimetypes-other-other',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                1 => 'readFile',
                2 => 'mimetypes-other-other',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                1 => 'writeFile',
                2 => 'mimetypes-other-other',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                1 => 'addFile',
                2 => 'mimetypes-other-other',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                1 => 'renameFile',
                2 => 'mimetypes-other-other',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                1 => 'replaceFile',
                2 => 'mimetypes-other-other',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                1 => 'moveFile',
                2 => 'mimetypes-other-other',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                1 => 'copyFile',
                2 => 'mimetypes-other-other',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                1 => 'deleteFile',
                2 => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
                1 => '',
              ),
            ),
          ),
        ),
        'pagetypes_select' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.pagetypes_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'pagetypes',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 20,
          ),
        ),
        'tables_modify' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_modify',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'tables',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'tables_select' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'tables',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'non_exclude_fields' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.non_exclude_fields',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'exclude',
            'size' => 25,
            'autoSizeMax' => 50,
          ),
        ),
        'explicit_allowdeny' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.explicit_allowdeny',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'explicitValues',
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'languages',
          ),
        ),
        'custom_options' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.custom_options',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'custom',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'lockToDomain' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
            'softref' => 'substitute',
          ),
        ),
        'groupMods' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'modListGroup',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'subgroup' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'enableMultiSelectFilterTextfield' => true,
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'AND NOT(be_groups.uid = ###THIS_UID###) ORDER BY be_groups.title',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
                'maxLevels' => 99,
              ),
            ),
            'size' => 20,
            'minitems' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,subgroup,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.base_rights,groupMods,tables_select,tables_modify,pagetypes_select,non_exclude_fields,explicit_allowdeny,allowed_languages,custom_options,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.mounts_and_workspaces,workspace_perms,db_mountpoints,file_mountpoints,file_permissions,category_perms,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.options,lockToDomain,TSconfig,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'be_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'adminOnly' => true,
        'rootLevel' => 1,
        'default_sortby' => 'admin, username',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'type' => 'admin',
        'typeicon_column' => 'admin',
        'typeicon_classes' => 
        array (
          0 => 'status-user-backend',
          1 => 'status-user-admin',
          'default' => 'status-user-backend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,lockToDomain,options,db_mountpoints,file_mountpoints,file_permissions,userMods',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'username,email,realName',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'username,description,usergroup,db_mountpoints,file_mountpoints,admin,options,file_permissions,userMods,lockToDomain,realName,email,disable,starttime,endtime,lastlogin',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'eval' => 'nospace,trim,lower,unique,required',
            'autocomplete' => false,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.password',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 100,
            'eval' => 'trim,required,password,saltedPassword',
            'autocomplete' => false,
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'ORDER BY be_groups.title',
            'size' => 5,
            'maxitems' => 20,
            'enableMultiSelectFilterTextfield' => true,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_list_title',
                ),
              ),
            ),
          ),
        ),
        'avatar' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'avatar',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'lockToDomain' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
            'softref' => 'substitute',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'enableMultiSelectFilterTextfield' => true,
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND sys_filemounts.pid=0 ORDER BY sys_filemounts.title',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'email' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 255,
            'softref' => 'email[subst]',
          ),
        ),
        'realName' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'disable' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
            'default' => 1,
          ),
        ),
        'disableIPlock' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.IPlockState',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'labelChecked' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
                'labelUnchecked' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disabled',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'admin' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.admin',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
            'fieldInformation' => 
            array (
              'adminIsSystemMaintainer' => 
              array (
                'renderType' => 'adminIsSystemMaintainer',
              ),
            ),
          ),
        ),
        'options' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
                1 => 0,
              ),
            ),
            'default' => 3,
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                1 => '--div--',
                2 => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                1 => 'readFolder',
                2 => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                1 => 'writeFolder',
                2 => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                1 => 'addFolder',
                2 => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                1 => 'renameFolder',
                2 => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                1 => 'moveFolder',
                2 => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                1 => 'copyFolder',
                2 => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                1 => 'deleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                1 => 'recursivedeleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                1 => '--div--',
                2 => 'mimetypes-other-other',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                1 => 'readFile',
                2 => 'mimetypes-other-other',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                1 => 'writeFile',
                2 => 'mimetypes-other-other',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                1 => 'addFile',
                2 => 'mimetypes-other-other',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                1 => 'renameFile',
                2 => 'mimetypes-other-other',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                1 => 'replaceFile',
                2 => 'mimetypes-other-other',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                1 => 'moveFile',
                2 => 'mimetypes-other-other',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                1 => 'copyFile',
                2 => 'mimetypes-other-other',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                1 => 'deleteFile',
                2 => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
                1 => '',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'lang' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.lang',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'English',
                1 => '',
              ),
              1 => 
              array (
                0 => 'Afrikaans',
                1 => 'af',
              ),
              2 => 
              array (
                0 => 'Albanian',
                1 => 'sq',
              ),
              3 => 
              array (
                0 => 'Arabic',
                1 => 'ar',
              ),
              4 => 
              array (
                0 => 'Basque',
                1 => 'eu',
              ),
              5 => 
              array (
                0 => 'Bosnian',
                1 => 'bs',
              ),
              6 => 
              array (
                0 => 'Brazilian Portuguese',
                1 => 'pt_BR',
              ),
              7 => 
              array (
                0 => 'Bulgarian',
                1 => 'bg',
              ),
              8 => 
              array (
                0 => 'Catalan',
                1 => 'ca',
              ),
              9 => 
              array (
                0 => 'Chinese (Simple)',
                1 => 'ch',
              ),
              10 => 
              array (
                0 => 'Chinese (Trad)',
                1 => 'zh',
              ),
              11 => 
              array (
                0 => 'Croatian',
                1 => 'hr',
              ),
              12 => 
              array (
                0 => 'Czech',
                1 => 'cs',
              ),
              13 => 
              array (
                0 => 'Danish',
                1 => 'da',
              ),
              14 => 
              array (
                0 => 'Dutch',
                1 => 'nl',
              ),
              15 => 
              array (
                0 => 'Esperanto',
                1 => 'eo',
              ),
              16 => 
              array (
                0 => 'Estonian',
                1 => 'et',
              ),
              17 => 
              array (
                0 => 'Faroese',
                1 => 'fo',
              ),
              18 => 
              array (
                0 => 'Finnish',
                1 => 'fi',
              ),
              19 => 
              array (
                0 => 'French',
                1 => 'fr',
              ),
              20 => 
              array (
                0 => 'French (Canada)',
                1 => 'fr_CA',
              ),
              21 => 
              array (
                0 => 'Galician',
                1 => 'gl',
              ),
              22 => 
              array (
                0 => 'Georgian',
                1 => 'ka',
              ),
              23 => 
              array (
                0 => 'German',
                1 => 'de',
              ),
              24 => 
              array (
                0 => 'Greek',
                1 => 'el',
              ),
              25 => 
              array (
                0 => 'Greenlandic',
                1 => 'kl',
              ),
              26 => 
              array (
                0 => 'Hebrew',
                1 => 'he',
              ),
              27 => 
              array (
                0 => 'Hindi',
                1 => 'hi',
              ),
              28 => 
              array (
                0 => 'Hungarian',
                1 => 'hu',
              ),
              29 => 
              array (
                0 => 'Icelandic',
                1 => 'is',
              ),
              30 => 
              array (
                0 => 'Italian',
                1 => 'it',
              ),
              31 => 
              array (
                0 => 'Japanese',
                1 => 'ja',
              ),
              32 => 
              array (
                0 => 'Khmer',
                1 => 'km',
              ),
              33 => 
              array (
                0 => 'Korean',
                1 => 'ko',
              ),
              34 => 
              array (
                0 => 'Latvian',
                1 => 'lv',
              ),
              35 => 
              array (
                0 => 'Lithuanian',
                1 => 'lt',
              ),
              36 => 
              array (
                0 => 'Malay',
                1 => 'ms',
              ),
              37 => 
              array (
                0 => 'Norwegian',
                1 => 'no',
              ),
              38 => 
              array (
                0 => 'Persian',
                1 => 'fa',
              ),
              39 => 
              array (
                0 => 'Polish',
                1 => 'pl',
              ),
              40 => 
              array (
                0 => 'Portuguese',
                1 => 'pt',
              ),
              41 => 
              array (
                0 => 'Romanian',
                1 => 'ro',
              ),
              42 => 
              array (
                0 => 'Russian',
                1 => 'ru',
              ),
              43 => 
              array (
                0 => 'Serbian',
                1 => 'sr',
              ),
              44 => 
              array (
                0 => 'Slovak',
                1 => 'sk',
              ),
              45 => 
              array (
                0 => 'Slovenian',
                1 => 'sl',
              ),
              46 => 
              array (
                0 => 'Spanish',
                1 => 'es',
              ),
              47 => 
              array (
                0 => 'Swedish',
                1 => 'sv',
              ),
              48 => 
              array (
                0 => 'Thai',
                1 => 'th',
              ),
              49 => 
              array (
                0 => 'Turkish',
                1 => 'tr',
              ),
              50 => 
              array (
                0 => 'Ukrainian',
                1 => 'uk',
              ),
              51 => 
              array (
                0 => 'Vietnamese',
                1 => 'vi',
              ),
            ),
          ),
        ),
        'userMods' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'modListUser',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'languages',
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'createdByAction' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'lastlogin' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
                'maxLevels' => 99,
              ),
            ),
            'size' => 20,
            'minitems' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,disable,admin,username,password,avatar,usergroup,realName,email,lang,lastlogin,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.rights,userMods,allowed_languages,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.mounts_and_workspaces,workspace_perms,db_mountpoints,options,file_mountpoints,file_permissions,category_perms,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,lockToDomain,disableIPlock,TSconfig,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,disable,admin,username,password,avatar,usergroup,realName,email,lang,lastlogin,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,disableIPlock,TSconfig,db_mountpoints,options,file_mountpoints,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'pages' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'rowDescription',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages',
        'type' => 'doktype',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'delete' => 'deleted',
        'crdate' => 'crdate',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'useColumnsForDefaultValues' => 'doktype,fe_group,hidden',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'doktype',
        'typeicon_classes' => 
        array (
          1 => 'apps-pagetree-page-default',
          '1-hideinmenu' => 'apps-pagetree-page-hideinmenu',
          '1-root' => 'apps-pagetree-page-domain',
          3 => 'apps-pagetree-page-shortcut-external',
          '3-hideinmenu' => 'apps-pagetree-page-shortcut-external-hideinmenu',
          '3-root' => 'apps-pagetree-page-shortcut-external-root',
          4 => 'apps-pagetree-page-shortcut',
          '4-hideinmenu' => 'apps-pagetree-page-shortcut-hideinmenu',
          '4-root' => 'apps-pagetree-page-shortcut-root',
          6 => 'apps-pagetree-page-backend-users',
          '6-hideinmenu' => 'apps-pagetree-page-backend-users-hideinmenu',
          '6-root' => 'apps-pagetree-page-backend-users-root',
          7 => 'apps-pagetree-page-mountpoint',
          '7-hideinmenu' => 'apps-pagetree-page-mountpoint-hideinmenu',
          '7-root' => 'apps-pagetree-page-mountpoint-root',
          199 => 'apps-pagetree-spacer',
          '199-hideinmenu' => 'apps-pagetree-spacer',
          '199-root' => 'apps-pagetree-page-domain',
          254 => 'apps-pagetree-folder-default',
          '254-hideinmenu' => 'apps-pagetree-folder-default',
          '254-root' => 'apps-pagetree-page-domain',
          255 => 'apps-pagetree-page-recycler',
          '255-hideinmenu' => 'apps-pagetree-page-recycler',
          'contains-shop' => 'apps-pagetree-folder-contains-shop',
          'contains-approve' => 'apps-pagetree-folder-contains-approve',
          'contains-fe_users' => 'apps-pagetree-folder-contains-fe_users',
          'contains-board' => 'apps-pagetree-folder-contains-board',
          'contains-news' => 'apps-pagetree-folder-contains-news',
          'page-contentFromPid' => 'apps-pagetree-page-content-from-page',
          'page-contentFromPid-root' => 'apps-pagetree-page-content-from-page-root',
          'page-contentFromPid-hideinmenu' => 'apps-pagetree-page-content-from-page-hideinmenu',
          'default' => 'apps-pagetree-page-default',
        ),
        'searchFields' => 'title,alias,nav_title,subtitle,url,keywords,description,abstract,author,author_email',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'doktype,title,alias,rowDescription,hidden,starttime,endtime,fe_group,url,target,shortcut,keywords,description,abstract,newUntil,lastUpdated,cache_timeout,cache_tags,backend_layout,backend_layout_next_level,categories',
        'maxDBListItems' => 30,
        'maxSingleDBListItems' => 50,
      ),
      'columns' => 
      array (
        'doktype' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.0',
                1 => '1',
                2 => 'apps-pagetree-page-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.4',
                1 => '6',
                2 => 'apps-pagetree-page-backend-users',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
                1 => '--div--',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.2',
                1 => '4',
                2 => 'apps-pagetree-page-shortcut',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.5',
                1 => '7',
                2 => 'apps-pagetree-page-mountpoint',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
                1 => '3',
                2 => 'apps-pagetree-page-shortcut-external',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
                1 => '--div--',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.folder',
                1 => '254',
                2 => 'apps-pagetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.2',
                1 => '255',
                2 => 'apps-filetree-folder-recycler',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.7',
                1 => '199',
                2 => 'apps-pagetree-spacer',
              ),
            ),
            'default' => '1',
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim,required',
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'slug' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.slug',
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Compatibility\\PseudoSiteTcaDisplayCondition->isInPseudoSite:pages:false',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'fieldSeparator' => '/',
              'prefixParentPageSlug' => true,
            ),
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'php_tree_stop' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:php_tree_stop',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'max' => 255,
          ),
        ),
        'editlock' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.hidden_toggle',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'pages',
            'foreign_table_where' => 'AND pages.uid=###CURRENT_PID### AND pages.sys_language_uid = 0',
            'default' => 0,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.sorting',
            'items' => 
            array (
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 7,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
          ),
        ),
        'extendToSubpages' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'nav_hide' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_toggle',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'target' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 80,
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'eval' => 'trim',
          ),
        ),
        'alias' => 
        array (
          'exclude' => true,
          'displayCond' => 
          array (
            'AND' => 
            array (
              0 => 'VERSION:IS:false',
              1 => 'USER:TYPO3\\CMS\\Core\\Compatibility\\PseudoSiteTcaDisplayCondition->isInPseudoSite:pages:true',
            ),
          ),
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.alias',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 32,
            'eval' => 'nospace,alphanum_x,lower,unique',
            'softref' => 'notify',
          ),
        ),
        'url' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'max' => 255,
            'eval' => 'trim,required',
            'softref' => 'url',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'lastUpdated' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'newUntil' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'cache_timeout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.1',
                1 => 60,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.2',
                1 => 300,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.3',
                1 => 900,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.4',
                1 => 1800,
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.5',
                1 => 3600,
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.6',
                1 => 14400,
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.7',
                1 => 86400,
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.8',
                1 => 172800,
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.9',
                1 => 604800,
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.10',
                1 => 2678400,
              ),
            ),
            'default' => 0,
          ),
        ),
        'cache_tags' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_tags',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => '',
          ),
        ),
        'no_search' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.shortcut_page',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, alias, url',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut_mode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.2',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.3',
                1 => 3,
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'content_from_pid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, alias, url',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'mount_pid' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'abstract' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.author',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim,email',
            'max' => 255,
            'softref' => 'email[subst]',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'is_siteroot' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'mount_pid_ol' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol',
          'config' => 
          array (
            'type' => 'radio',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.1',
                1 => 1,
              ),
            ),
          ),
        ),
        'module' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                2 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module.I.4',
                1 => 'fe_users',
                2 => 'status-user-frontend',
              ),
            ),
            'default' => '',
          ),
        ),
        'fe_login_mode' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.enable',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.disableAll',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.disableGroups',
                1 => 3,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.enableAgain',
                1 => 2,
              ),
            ),
          ),
        ),
        'l18n_cfg' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.1',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.2',
                1 => '',
              ),
            ),
          ),
        ),
        'backend_layout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                1 => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'backend_layout_next_level' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                1 => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'tsconfig_includes' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'items' => 
            array (
              0 => 
              array (
                0 => 'Bootstrap Package: Backend Layouts (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts.tsconfig',
              ),
              1 => 
              array (
                0 => 'Bootstrap Package: TCEMAIN (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/TCEMAIN.tsconfig',
              ),
              2 => 
              array (
                0 => 'Bootstrap Package: TCEFORM (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/TCEFORM.tsconfig',
              ),
              3 => 
              array (
                0 => 'Bootstrap Package: All Content Elements (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/All.tsconfig',
              ),
              4 => 
              array (
                0 => 'Bootstrap Package: Categories for Content Elements (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Categories.tsconfig',
              ),
              5 => 
              array (
                0 => 'Bootstrap Package Content Element: Accordion (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Accordion.tsconfig',
              ),
              6 => 
              array (
                0 => 'Bootstrap Package Content Element: Audio (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Audio.tsconfig',
              ),
              7 => 
              array (
                0 => 'Bootstrap Package Content Element: Bullet List (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Bullets.tsconfig',
              ),
              8 => 
              array (
                0 => 'Bootstrap Package Content Element: Card Group (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/CardGroup.tsconfig',
              ),
              9 => 
              array (
                0 => 'Bootstrap Package Content Element: Carousel (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Carousel.tsconfig',
              ),
              10 => 
              array (
                0 => 'Bootstrap Package Content Element: Carousel Small (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/CarouselSmall.tsconfig',
              ),
              11 => 
              array (
                0 => 'Bootstrap Package Content Element: Carousel Fullscreen (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/CarouselFullscreen.tsconfig',
              ),
              12 => 
              array (
                0 => 'Bootstrap Package Content Element: CSV (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Csv.tsconfig',
              ),
              13 => 
              array (
                0 => 'Bootstrap Package Content Element: External Media (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/ExternalMedia.tsconfig',
              ),
              14 => 
              array (
                0 => 'Bootstrap Package Content Element: Header (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Header.tsconfig',
              ),
              15 => 
              array (
                0 => 'Bootstrap Package Content Element: Icon Group (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/IconGroup.tsconfig',
              ),
              16 => 
              array (
                0 => 'Bootstrap Package Content Element: Image (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Image.tsconfig',
              ),
              17 => 
              array (
                0 => 'Bootstrap Package Content Element: List Group (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/ListGroup.tsconfig',
              ),
              18 => 
              array (
                0 => 'Bootstrap Package Content Element: Media (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Media.tsconfig',
              ),
              19 => 
              array (
                0 => 'Bootstrap Package Content Element: Menu Cards (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/MenuCardList.tsconfig',
              ),
              20 => 
              array (
                0 => 'Bootstrap Package Content Element: Menu Cards of subpages (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/MenuCardDir.tsconfig',
              ),
              21 => 
              array (
                0 => 'Bootstrap Package Content Element: Menu Thumbnails (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/MenuThumbnailList.tsconfig',
              ),
              22 => 
              array (
                0 => 'Bootstrap Package Content Element: Menu Thumbnails of subpages (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/MenuThumbnailDir.tsconfig',
              ),
              23 => 
              array (
                0 => 'Bootstrap Package Content Element: Panel (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Panel.tsconfig',
              ),
              24 => 
              array (
                0 => 'Bootstrap Package Content Element: Quote (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Quote.tsconfig',
              ),
              25 => 
              array (
                0 => 'Bootstrap Package Content Element: Social Links (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/SocialLinks.tsconfig',
              ),
              26 => 
              array (
                0 => 'Bootstrap Package Content Element: Tab (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Tab.tsconfig',
              ),
              27 => 
              array (
                0 => 'Bootstrap Package Content Element: Table (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Table.tsconfig',
              ),
              28 => 
              array (
                0 => 'Bootstrap Package Content Element: Text (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Text.tsconfig',
              ),
              29 => 
              array (
                0 => 'Bootstrap Package Content Element: Text in Columns (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Textcolumn.tsconfig',
              ),
              30 => 
              array (
                0 => 'Bootstrap Package Content Element: Text and Icon (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Texticon.tsconfig',
              ),
              31 => 
              array (
                0 => 'Bootstrap Package Content Element: Text and Media (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Textmedia.tsconfig',
              ),
              32 => 
              array (
                0 => 'Bootstrap Package Content Element: Text and Images (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Textpic.tsconfig',
              ),
              33 => 
              array (
                0 => 'Bootstrap Package Content Element: Text with Teaser (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Textteaser.tsconfig',
              ),
              34 => 
              array (
                0 => 'Bootstrap Package Content Element: Timeline (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Timeline.tsconfig',
              ),
              35 => 
              array (
                0 => 'Bootstrap Package Content Element: File Links (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Uploads.tsconfig',
              ),
              36 => 
              array (
                0 => 'Hofexpress Package (hofexpress_package)',
                1 => 'EXT:hofexpress_package/Configuration/TsConfig/Page/All.tsconfig',
              ),
            ),
            'enableMultiSelectFilterTextfield' => true,
            'softref' => 'ext_fileref',
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'pages',
              'fieldname' => 'categories',
            ),
            'size' => 20,
            'maxitems' => 9999,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.seo_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'no_index' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'onChange' => 'reload',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_index',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'no_follow' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_follow',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'canonical_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link',
          'displayCond' => 'FIELD:no_index:=:0',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link',
                  'blindLinkFields' => 'class,target,title',
                  'blindLinkOptions' => 'mail,folder,file',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'og_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'og_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'og_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'og_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'disabled' => true,
                      ),
                      'social' => 
                      array (
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.crop_variant.social',
                        'coverAreas' => 
                        array (
                        ),
                        'cropArea' => 
                        array (
                          'x' => '0.0',
                          'y' => '0.0',
                          'width' => '1.0',
                          'height' => '1.0',
                        ),
                        'allowedAspectRatios' => 
                        array (
                          '1.91:1' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.191_1',
                            'value' => 1.9099999999999999,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => '1.91:1',
                      ),
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'twitter_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'twitter_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'twitter_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'twitter_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'disabled' => true,
                      ),
                      'social' => 
                      array (
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.crop_variant.social',
                        'coverAreas' => 
                        array (
                        ),
                        'cropArea' => 
                        array (
                          'x' => '0.0',
                          'y' => '0.0',
                          'width' => '1.0',
                          'height' => '1.0',
                        ),
                        'allowedAspectRatios' => 
                        array (
                          '1.91:1' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.191_1',
                            'value' => 1.9099999999999999,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => '1.91:1',
                      ),
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'nav_icon' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:pages.nav_icon',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'nav_icon',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,png,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,png,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'thumbnail' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:pages.thumbnail',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'thumbnail',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    title,
                                    alternative,
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
          'l10n_mode' => 'exclude',
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;standard,--palette--;;title,nav_icon,--div--;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.tabs.seo,--palette--;;seo,--palette--;;robots,--palette--;;canonical,--div--;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.tabs.socialmedia,--palette--;;opengraph,--palette--;;twittercards,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;;abstract,--palette--;;metatags,--palette--;;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;;layout,thumbnail,--palette--;;replace,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;;links,--palette--;;caching,--palette--;;miscellaneous,--palette--;;module,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;;media,--palette--;;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;;visibility,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'thumbnail' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;;title,nav_icon,--palette--;;external,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;;abstract,--palette--;;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;;layout,thumbnail,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;;links,--palette--;;miscellaneous,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;;media,--palette--;;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;;visibility,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'thumbnail' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;;title,nav_icon,--palette--;;shortcut,--palette--;;shortcutpage,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;;abstract,--palette--;;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;;layout,thumbnail,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;;links,--palette--;;miscellaneous,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;;media,--palette--;;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;;visibility,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'thumbnail' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        7 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;;title,--palette--;;mountpoint,--palette--;;mountpage,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;;abstract,--palette--;;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;;layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;;links,--palette--;;miscellaneous,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;;media,--palette--;;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;;visibility,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        199 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;standard,--palette--;;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;;backend_layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;;config,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;;visibility,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        254 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;standard,--palette--;;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;;backend_layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;;module,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;;media,--palette--;;config,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;;hiddenonly,--palette--;;adminsonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        255 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;standard,--palette--;;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;;hiddenonly,--palette--;;adminsonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime, endtime, extendToSubpages',
        ),
        2 => 
        array (
          'showitem' => 'layout, lastUpdated, newUntil, no_search',
        ),
        3 => 
        array (
          'showitem' => 'alias, target, cache_timeout, cache_tags',
        ),
        5 => 
        array (
          'showitem' => 'author, author_email',
        ),
        6 => 
        array (
          'showitem' => 'php_tree_stop, editlock',
        ),
        7 => 
        array (
          'showitem' => 'is_siteroot',
        ),
        8 => 
        array (
          'showitem' => 'backend_layout_next_level',
        ),
        'standard' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard',
          'showitem' => 'doktype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
        ),
        'shortcut' => 
        array (
          'showitem' => 'shortcut_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode_formlabel',
        ),
        'shortcutpage' => 
        array (
          'showitem' => 'shortcut;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_formlabel',
        ),
        'mountpoint' => 
        array (
          'showitem' => 'mount_pid_ol;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol_formlabel',
        ),
        'mountpage' => 
        array (
          'showitem' => 'mount_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_formlabel',
        ),
        'external' => 
        array (
          'showitem' => 'url;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url_formlabel',
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title',
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, slug, --linebreak--, nav_title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title_formlabel, --linebreak--, subtitle;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle_formlabel',
        ),
        'titleonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title',
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, slug',
        ),
        'visibility' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.hidden_toggle_formlabel, nav_hide;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_toggle_formlabel',
        ),
        'hiddenonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_formlabel',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access',
          'showitem' => 'starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.starttime_formlabel, endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.endtime_formlabel, extendToSubpages;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages_formlabel, --linebreak--, fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_group_formlabel, --linebreak--, fe_login_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode_formlabel, --linebreak--,editlock',
        ),
        'abstract' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract',
          'showitem' => 'abstract;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract_formlabel',
        ),
        'metatags' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags',
          'showitem' => 'keywords;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.keywords_formlabel, --linebreak--, description;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
        ),
        'editorial' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial',
          'showitem' => 'author;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel, author_email;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel, lastUpdated;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated_formlabel',
        ),
        'layout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout',
          'showitem' => 'layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout_formlabel, newUntil;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil_formlabel, --linebreak--, backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'backend_layout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout',
          'showitem' => 'backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'module' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.module',
          'showitem' => 'module;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module_formlabel',
        ),
        'replace' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.replace',
          'showitem' => 'content_from_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid_formlabel',
        ),
        'links' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links',
          'showitem' => 'alias;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.alias_formlabel, --linebreak--, target;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target_formlabel',
        ),
        'caching' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.caching',
          'showitem' => 'cache_timeout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout_formlabel, cache_tags',
        ),
        'language' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language',
          'showitem' => 'l18n_cfg;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg_formlabel',
        ),
        'miscellaneous' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous',
          'showitem' => 'is_siteroot;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot_formlabel, no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel, php_tree_stop;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.php_tree_stop_formlabel',
        ),
        'adminsonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous',
          'showitem' => 'editlock;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.editlock_formlabel',
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media',
          'showitem' => 'media;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media_formlabel',
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config',
          'showitem' => 'tsconfig_includes;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes, --linebreak--, TSconfig;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.TSconfig_formlabel',
        ),
        'seo' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.seo',
          'showitem' => 'seo_title;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.seo_title',
        ),
        'robots' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.robots',
          'showitem' => 'no_index;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_index_formlabel, no_follow;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_follow_formlabel',
        ),
        'canonical' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.canonical',
          'showitem' => 'canonical_link',
        ),
        'opengraph' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.opengraph',
          'showitem' => 'og_title, --linebreak--, og_description, --linebreak--, og_image',
        ),
        'twittercards' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.twittercards',
          'showitem' => 'twitter_title, --linebreak--, twitter_description, --linebreak--, twitter_image',
        ),
      ),
    ),
    'sys_category' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category',
        'descriptionColumn' => 'description',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'rootLevel' => -1,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'searchFields' => 'title,description',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_category',
        ),
        'security' => 
        array (
          'ignoreRootLevelRestriction' => true,
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,description',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,parent,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.items,items,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND sys_category.uid=###REC_FIELD_l10n_parent### AND sys_category.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.title',
          'config' => 
          array (
            'type' => 'input',
            'width' => 200,
            'eval' => 'trim,required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.description',
          'config' => 
          array (
            'type' => 'text',
            'default' => '',
          ),
        ),
        'parent' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.parent',
          'config' => 
          array (
            'minitems' => 0,
            'maxitems' => 1,
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1,0) ORDER BY sys_category.sorting ASC',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
            'default' => 0,
          ),
        ),
        'items' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.items',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => '*',
            'MM' => 'sys_category_record_mm',
            'MM_oppositeUsage' => 
            array (
              'pages' => 
              array (
                0 => 'categories',
              ),
              'sys_file_metadata' => 
              array (
                0 => 'categories',
              ),
              'tt_content' => 
              array (
                0 => 'categories',
              ),
            ),
            'size' => 10,
            'fieldWizard' => 
            array (
              'recordsOverview' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'sys_collection' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_collection',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'descriptionColumn' => 'description',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'type' => 'type',
        'rootLevel' => -1,
        'searchFields' => 'title,description',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'apps-clipboard-list',
          'static' => 'apps-clipboard-list',
          'filter' => 'actions-system-tree-search-open',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title, description, table_name, items',
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_collection',
            'foreign_table_where' => 'AND sys_file_collection.pid=###CURRENT_PID### AND sys_file_collection.sys_language_uid IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
          ),
        ),
        'table_name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_collection.table_name',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'tables',
          ),
        ),
        'items' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_collection.items',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'prepend_tname' => true,
            'allowed' => '*',
            'MM' => 'sys_collection_entries',
            'MM_hasUidField' => true,
            'multiple' => true,
            'size' => 5,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_collection.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 60,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_collection.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 60,
            'rows' => 5,
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_collection.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_collection.type.static',
                1 => 'static',
              ),
            ),
            'default' => 'static',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        'static' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,table_name,items,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,fe_group,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
    ),
    'sys_file' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'type' => 'type',
        'hideTable' => true,
        'rootLevel' => 1,
        'default_sortby' => 'name ASC',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          1 => 'mimetypes-text-text',
          2 => 'mimetypes-media-image',
          3 => 'mimetypes-media-audio',
          4 => 'mimetypes-media-video',
          5 => 'mimetypes-application',
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'name, type, mime_type, sha1',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'storage, name, type, mime_type, size, sha1, missing',
      ),
      'columns' => 
      array (
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'user',
            'renderType' => 'fileInfo',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.storage',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'foreign_table_where' => 'ORDER BY sys_file_storage.name',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.identifier',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.name',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'size' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.unknown',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.text',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.image',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.audio',
                1 => 3,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.video',
                1 => 4,
              ),
              5 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.software',
                1 => 5,
              ),
            ),
          ),
        ),
        'mime_type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.mime_type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sha1' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.sha1',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'size' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.size',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 8,
            'max' => 30,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'missing' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.missing',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'metadata' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.metadata',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'inline',
            'foreign_table' => 'sys_file_metadata',
            'foreign_field' => 'file',
            'size' => 1,
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'fileinfo, storage, missing',
        ),
      ),
      'palettes' => 
      array (
      ),
    ),
    'sys_file_collection' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'apps-filetree-folder-media',
          'static' => 'apps-clipboard-images',
          'folder' => 'apps-filetree-folder-media',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'files,title',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,files,title,description',
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_collection',
            'foreign_table_where' => 'AND sys_file_collection.pid=###CURRENT_PID### AND sys_file_collection.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.0',
                1 => 'static',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.1',
                1 => 'folder',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.2',
                1 => 'category',
              ),
            ),
          ),
        ),
        'files' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.files',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'files',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.storage',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'foreign_table_where' => 'ORDER BY sys_file_storage.name',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'folder' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.folder',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService->renderTceformsSelectDropdown',
            'default' => '',
          ),
        ),
        'recursive' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.recursive',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.category',
          'config' => 
          array (
            'minitems' => 0,
            'maxitems' => 1,
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1,0) ORDER BY sys_category.sorting ASC',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
              ),
            ),
            'default' => 0,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,files,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'static' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,files,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'folder' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,storage,folder,recursive,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'category' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,category,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
    ),
    'sys_file_metadata' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata',
        'label' => 'file',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'file:type',
        'hideTable' => true,
        'rootLevel' => 1,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'title,description,alternative',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'file, title, description, alternative,categories',
      ),
      'columns' => 
      array (
        'crdate' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_metadata',
            'foreign_table_where' => 'AND sys_file_metadata.uid=###REC_FIELD_l10n_parent### AND sys_file_metadata.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'user',
            'renderType' => 'fileInfo',
          ),
        ),
        'file' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:=:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file',
            'foreign_table_where' => 'AND sys_file.uid = ###REC_FIELD_file###',
            'minitems' => 1,
            'maxitems' => 1,
            'size' => 1,
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.title',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'placeholder' => '__row|file|name',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'alternative' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'width' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file.width',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'height' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file.height',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'sys_file_metadata',
              'fieldname' => 'categories',
            ),
            'size' => 20,
            'maxitems' => 9999,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,fileinfo,title,description,alternative,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
    ),
    'sys_file_reference' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference',
        'label' => 'uid_local',
        'formattedLabel_userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileInlineLabelService->getInlineLabel',
        'formattedLabel_userFunc_options' => 
        array (
          'sys_file' => 
          array (
            0 => 'title',
            1 => 'name',
          ),
        ),
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'uid_local:type',
        'hideTable' => true,
        'delete' => 'deleted',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'rootLevel' => -1,
        'shadowColumnsForMovePlaceholders' => 'tablenames,fieldname,uid_local,table_local,uid_foreign',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'uid_local,uid_foreign,tablenames,fieldname,title,description',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,uid_local,uid_foreign,tablenames,fieldname,sorting_foreign,table_local,title,description',
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_table_where' => 'AND sys_file_reference.uid=###REC_FIELD_l10n_parent### AND sys_file_reference.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'uid_local' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_local',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'size' => 1,
            'eval' => 'int',
            'maxitems' => 1,
            'minitems' => 0,
            'allowed' => 'sys_file',
            'hideSuggest' => true,
          ),
        ),
        'uid_foreign' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_foreign',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'eval' => 'int',
          ),
        ),
        'tablenames' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.tablenames',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'fieldname' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.fieldname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sorting_foreign' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.sorting_foreign',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'max' => 4,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'table_local' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.table_local',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'default' => 'sys_file',
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|title',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 20,
            'max' => 1024,
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'description' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 5,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|description',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'alternative' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.alternative',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|alternative',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'crop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.crop',
          'config' => 
          array (
            'type' => 'imageManipulation',
          ),
        ),
        'autoplay' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.autoplay',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--palette--;;basicoverlayPalette,--palette--;;filePalette',
        ),
        1 => 
        array (
          'showitem' => '--palette--;;basicoverlayPalette,--palette--;;filePalette',
        ),
        2 => 
        array (
          'showitem' => '--palette--;;basicoverlayPalette,--palette--;;filePalette',
        ),
        3 => 
        array (
          'showitem' => '--palette--;;basicoverlayPalette,--palette--;;filePalette',
        ),
        4 => 
        array (
          'showitem' => '--palette--;;basicoverlayPalette,--palette--;;filePalette',
        ),
        5 => 
        array (
          'showitem' => '--palette--;;basicoverlayPalette,--palette--;;filePalette',
        ),
      ),
      'palettes' => 
      array (
        'basicoverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette',
          'showitem' => 'title,description',
        ),
        'imageoverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette',
          'showitem' => '
				title,alternative,--linebreak--,
				link,description,--linebreak--,crop
				',
        ),
        'videoOverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette',
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'audioOverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette',
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'filePalette' => 
        array (
          'showitem' => 'uid_local, hidden, sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
    ),
    'sys_file_storage' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'name',
        'delete' => 'deleted',
        'descriptionColumn' => 'description',
        'rootLevel' => 1,
        'versioningWS_alwaysAllowLiveEdit' => true,
        'enablecolumns' => 
        array (
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_file_storage',
        ),
        'searchFields' => 'name,description',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'name,description,driver,processingfolder,configuration,auto_extract_metadata',
      ),
      'columns' => 
      array (
        'name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'is_browsable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_browsable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'is_default' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_default',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'eval' => 'maximumRecordsChecked',
            'validation' => 
            array (
              'maximumRecordsChecked' => 1,
            ),
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'is_public' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_public',
          'config' => 
          array (
            'default' => 1,
            'type' => 'user',
            'renderType' => 'userSysFileStorageIsPublic',
          ),
        ),
        'is_writable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_writable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'is_online' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_online',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'auto_extract_metadata' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.auto_extract_metadata',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'processingfolder' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder',
          'config' => 
          array (
            'type' => 'input',
            'placeholder' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder.placeholder',
            'size' => 20,
          ),
        ),
        'driver' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.driver',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              'Local' => 
              array (
                0 => 'Local filesystem',
                1 => 'Local',
              ),
            ),
            'default' => 'Local',
            'onChange' => 'reload',
          ),
        ),
        'configuration' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.configuration',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'driver',
            'ds' => 
            array (
              'Local' => 'FILE:EXT:core/Configuration/Resource/Driver/LocalDriverFlexForm.xml',
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,name,driver,configuration,is_default,auto_extract_metadata,processingfolder,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:accesscapabilities,--palette--;Capabilities;capabilities,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,is_online,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'capabilities' => 
        array (
          'showitem' => 'is_browsable, is_public, is_writable',
        ),
      ),
    ),
    'sys_filemounts' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts',
        'adminOnly' => true,
        'rootLevel' => 1,
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_filemounts',
        ),
        'useColumnsForDefaultValues' => 'path,base',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title,path',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,hidden,path,base,description',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'required,trim',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'base' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.baseStorage',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file_storage',
            'allowNonIdValues' => true,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'eval' => 'required',
            'range' => 
            array (
              'lower' => 1,
            ),
          ),
        ),
        'path' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.folder',
          'displayCond' => 'FIELD:base:>:0',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService->renderTceformsSelectDropdown',
          ),
        ),
        'read_only' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.read_only',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,base,path,read_only,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'sys_history' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_history',
        'label' => 'tablename',
        'tstamp' => 'tstamp',
        'adminOnly' => true,
        'rootLevel' => 1,
        'hideTable' => true,
        'default_sortby' => 'uid DESC',
      ),
      'columns' => 
      array (
        'history_data' => 
        array (
          'label' => 'history_data',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recuid' => 
        array (
          'label' => 'recuid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tablename' => 
        array (
          'label' => 'tablename',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'snapshot' => 
        array (
          'label' => 'snapshot',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'history_data, recuid, tablename, tstamp, snapshot',
        ),
      ),
    ),
    'sys_language' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_language',
        'adminOnly' => true,
        'rootLevel' => 1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_column' => 'flag',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_language',
          'mask' => 'flags-###TYPE###',
        ),
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 80,
            'eval' => 'trim,required',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'language_isocode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_language.language_isocode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Service\\IsoCodeService->renderIsoCodeSelectDropdown',
          ),
        ),
        'flag' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_language.flag',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
                2 => '',
              ),
              1 => 
              array (
                0 => 'multiple',
                1 => 'multiple',
                2 => 'flags-multiple',
              ),
              2 => 
              array (
                0 => 'ad',
                1 => 'ad',
                2 => 'flags-ad',
              ),
              3 => 
              array (
                0 => 'ae',
                1 => 'ae',
                2 => 'flags-ae',
              ),
              4 => 
              array (
                0 => 'af',
                1 => 'af',
                2 => 'flags-af',
              ),
              5 => 
              array (
                0 => 'ag',
                1 => 'ag',
                2 => 'flags-ag',
              ),
              6 => 
              array (
                0 => 'ai',
                1 => 'ai',
                2 => 'flags-ai',
              ),
              7 => 
              array (
                0 => 'al',
                1 => 'al',
                2 => 'flags-al',
              ),
              8 => 
              array (
                0 => 'am',
                1 => 'am',
                2 => 'flags-am',
              ),
              9 => 
              array (
                0 => 'an',
                1 => 'an',
                2 => 'flags-an',
              ),
              10 => 
              array (
                0 => 'ao',
                1 => 'ao',
                2 => 'flags-ao',
              ),
              11 => 
              array (
                0 => 'aq',
                1 => 'aq',
                2 => 'flags-aq',
              ),
              12 => 
              array (
                0 => 'ar',
                1 => 'ar',
                2 => 'flags-ar',
              ),
              13 => 
              array (
                0 => 'as',
                1 => 'as',
                2 => 'flags-as',
              ),
              14 => 
              array (
                0 => 'at',
                1 => 'at',
                2 => 'flags-at',
              ),
              15 => 
              array (
                0 => 'au',
                1 => 'au',
                2 => 'flags-au',
              ),
              16 => 
              array (
                0 => 'aw',
                1 => 'aw',
                2 => 'flags-aw',
              ),
              17 => 
              array (
                0 => 'ax',
                1 => 'ax',
                2 => 'flags-ax',
              ),
              18 => 
              array (
                0 => 'az',
                1 => 'az',
                2 => 'flags-az',
              ),
              19 => 
              array (
                0 => 'ba',
                1 => 'ba',
                2 => 'flags-ba',
              ),
              20 => 
              array (
                0 => 'bb',
                1 => 'bb',
                2 => 'flags-bb',
              ),
              21 => 
              array (
                0 => 'bd',
                1 => 'bd',
                2 => 'flags-bd',
              ),
              22 => 
              array (
                0 => 'be',
                1 => 'be',
                2 => 'flags-be',
              ),
              23 => 
              array (
                0 => 'bf',
                1 => 'bf',
                2 => 'flags-bf',
              ),
              24 => 
              array (
                0 => 'bg',
                1 => 'bg',
                2 => 'flags-bg',
              ),
              25 => 
              array (
                0 => 'bh',
                1 => 'bh',
                2 => 'flags-bh',
              ),
              26 => 
              array (
                0 => 'bi',
                1 => 'bi',
                2 => 'flags-bi',
              ),
              27 => 
              array (
                0 => 'bj',
                1 => 'bj',
                2 => 'flags-bj',
              ),
              28 => 
              array (
                0 => 'bl',
                1 => 'bl',
                2 => 'flags-bl',
              ),
              29 => 
              array (
                0 => 'bm',
                1 => 'bm',
                2 => 'flags-bm',
              ),
              30 => 
              array (
                0 => 'bn',
                1 => 'bn',
                2 => 'flags-bn',
              ),
              31 => 
              array (
                0 => 'bo',
                1 => 'bo',
                2 => 'flags-bo',
              ),
              32 => 
              array (
                0 => 'bq',
                1 => 'bq',
                2 => 'flags-bq',
              ),
              33 => 
              array (
                0 => 'br',
                1 => 'br',
                2 => 'flags-br',
              ),
              34 => 
              array (
                0 => 'bs',
                1 => 'bs',
                2 => 'flags-bs',
              ),
              35 => 
              array (
                0 => 'bt',
                1 => 'bt',
                2 => 'flags-bt',
              ),
              36 => 
              array (
                0 => 'bv',
                1 => 'bv',
                2 => 'flags-bv',
              ),
              37 => 
              array (
                0 => 'bw',
                1 => 'bw',
                2 => 'flags-bw',
              ),
              38 => 
              array (
                0 => 'by',
                1 => 'by',
                2 => 'flags-by',
              ),
              39 => 
              array (
                0 => 'bz',
                1 => 'bz',
                2 => 'flags-bz',
              ),
              40 => 
              array (
                0 => 'ca',
                1 => 'ca',
                2 => 'flags-ca',
              ),
              41 => 
              array (
                0 => 'catalonia',
                1 => 'catalonia',
                2 => 'flags-catalonia',
              ),
              42 => 
              array (
                0 => 'cc',
                1 => 'cc',
                2 => 'flags-cc',
              ),
              43 => 
              array (
                0 => 'cd',
                1 => 'cd',
                2 => 'flags-cd',
              ),
              44 => 
              array (
                0 => 'cf',
                1 => 'cf',
                2 => 'flags-cf',
              ),
              45 => 
              array (
                0 => 'cg',
                1 => 'cg',
                2 => 'flags-cg',
              ),
              46 => 
              array (
                0 => 'ch',
                1 => 'ch',
                2 => 'flags-ch',
              ),
              47 => 
              array (
                0 => 'ci',
                1 => 'ci',
                2 => 'flags-ci',
              ),
              48 => 
              array (
                0 => 'ck',
                1 => 'ck',
                2 => 'flags-ck',
              ),
              49 => 
              array (
                0 => 'cl',
                1 => 'cl',
                2 => 'flags-cl',
              ),
              50 => 
              array (
                0 => 'cm',
                1 => 'cm',
                2 => 'flags-cm',
              ),
              51 => 
              array (
                0 => 'cn',
                1 => 'cn',
                2 => 'flags-cn',
              ),
              52 => 
              array (
                0 => 'co',
                1 => 'co',
                2 => 'flags-co',
              ),
              53 => 
              array (
                0 => 'cr',
                1 => 'cr',
                2 => 'flags-cr',
              ),
              54 => 
              array (
                0 => 'cs',
                1 => 'cs',
                2 => 'flags-cs',
              ),
              55 => 
              array (
                0 => 'cu',
                1 => 'cu',
                2 => 'flags-cu',
              ),
              56 => 
              array (
                0 => 'cv',
                1 => 'cv',
                2 => 'flags-cv',
              ),
              57 => 
              array (
                0 => 'cw',
                1 => 'cw',
                2 => 'flags-cw',
              ),
              58 => 
              array (
                0 => 'cx',
                1 => 'cx',
                2 => 'flags-cx',
              ),
              59 => 
              array (
                0 => 'cy',
                1 => 'cy',
                2 => 'flags-cy',
              ),
              60 => 
              array (
                0 => 'cz',
                1 => 'cz',
                2 => 'flags-cz',
              ),
              61 => 
              array (
                0 => 'de',
                1 => 'de',
                2 => 'flags-de',
              ),
              62 => 
              array (
                0 => 'dj',
                1 => 'dj',
                2 => 'flags-dj',
              ),
              63 => 
              array (
                0 => 'dk',
                1 => 'dk',
                2 => 'flags-dk',
              ),
              64 => 
              array (
                0 => 'dm',
                1 => 'dm',
                2 => 'flags-dm',
              ),
              65 => 
              array (
                0 => 'do',
                1 => 'do',
                2 => 'flags-do',
              ),
              66 => 
              array (
                0 => 'dz',
                1 => 'dz',
                2 => 'flags-dz',
              ),
              67 => 
              array (
                0 => 'ec',
                1 => 'ec',
                2 => 'flags-ec',
              ),
              68 => 
              array (
                0 => 'ee',
                1 => 'ee',
                2 => 'flags-ee',
              ),
              69 => 
              array (
                0 => 'eg',
                1 => 'eg',
                2 => 'flags-eg',
              ),
              70 => 
              array (
                0 => 'eh',
                1 => 'eh',
                2 => 'flags-eh',
              ),
              71 => 
              array (
                0 => 'en-us-gb',
                1 => 'en-us-gb',
                2 => 'flags-en-us-gb',
              ),
              72 => 
              array (
                0 => 'england',
                1 => 'england',
                2 => 'flags-gb-eng',
              ),
              73 => 
              array (
                0 => 'er',
                1 => 'er',
                2 => 'flags-er',
              ),
              74 => 
              array (
                0 => 'es',
                1 => 'es',
                2 => 'flags-es',
              ),
              75 => 
              array (
                0 => 'et',
                1 => 'et',
                2 => 'flags-et',
              ),
              76 => 
              array (
                0 => 'eu',
                1 => 'eu',
                2 => 'flags-eu',
              ),
              77 => 
              array (
                0 => 'fi',
                1 => 'fi',
                2 => 'flags-fi',
              ),
              78 => 
              array (
                0 => 'fj',
                1 => 'fj',
                2 => 'flags-fj',
              ),
              79 => 
              array (
                0 => 'fk',
                1 => 'fk',
                2 => 'flags-fk',
              ),
              80 => 
              array (
                0 => 'fm',
                1 => 'fm',
                2 => 'flags-fm',
              ),
              81 => 
              array (
                0 => 'fo',
                1 => 'fo',
                2 => 'flags-fo',
              ),
              82 => 
              array (
                0 => 'fr',
                1 => 'fr',
                2 => 'flags-fr',
              ),
              83 => 
              array (
                0 => 'ga',
                1 => 'ga',
                2 => 'flags-ga',
              ),
              84 => 
              array (
                0 => 'gb',
                1 => 'gb',
                2 => 'flags-gb',
              ),
              85 => 
              array (
                0 => 'gd',
                1 => 'gd',
                2 => 'flags-gd',
              ),
              86 => 
              array (
                0 => 'ge',
                1 => 'ge',
                2 => 'flags-ge',
              ),
              87 => 
              array (
                0 => 'gf',
                1 => 'gf',
                2 => 'flags-gf',
              ),
              88 => 
              array (
                0 => 'gg',
                1 => 'gg',
                2 => 'flags-gg',
              ),
              89 => 
              array (
                0 => 'gh',
                1 => 'gh',
                2 => 'flags-gh',
              ),
              90 => 
              array (
                0 => 'gi',
                1 => 'gi',
                2 => 'flags-gi',
              ),
              91 => 
              array (
                0 => 'gl',
                1 => 'gl',
                2 => 'flags-gl',
              ),
              92 => 
              array (
                0 => 'gm',
                1 => 'gm',
                2 => 'flags-gm',
              ),
              93 => 
              array (
                0 => 'gn',
                1 => 'gn',
                2 => 'flags-gn',
              ),
              94 => 
              array (
                0 => 'gp',
                1 => 'gp',
                2 => 'flags-gp',
              ),
              95 => 
              array (
                0 => 'gq',
                1 => 'gq',
                2 => 'flags-gq',
              ),
              96 => 
              array (
                0 => 'gr',
                1 => 'gr',
                2 => 'flags-gr',
              ),
              97 => 
              array (
                0 => 'gs',
                1 => 'gs',
                2 => 'flags-gs',
              ),
              98 => 
              array (
                0 => 'gt',
                1 => 'gt',
                2 => 'flags-gt',
              ),
              99 => 
              array (
                0 => 'gu',
                1 => 'gu',
                2 => 'flags-gu',
              ),
              100 => 
              array (
                0 => 'gw',
                1 => 'gw',
                2 => 'flags-gw',
              ),
              101 => 
              array (
                0 => 'gy',
                1 => 'gy',
                2 => 'flags-gy',
              ),
              102 => 
              array (
                0 => 'hk',
                1 => 'hk',
                2 => 'flags-hk',
              ),
              103 => 
              array (
                0 => 'hm',
                1 => 'hm',
                2 => 'flags-hm',
              ),
              104 => 
              array (
                0 => 'hn',
                1 => 'hn',
                2 => 'flags-hn',
              ),
              105 => 
              array (
                0 => 'hr',
                1 => 'hr',
                2 => 'flags-hr',
              ),
              106 => 
              array (
                0 => 'ht',
                1 => 'ht',
                2 => 'flags-ht',
              ),
              107 => 
              array (
                0 => 'hu',
                1 => 'hu',
                2 => 'flags-hu',
              ),
              108 => 
              array (
                0 => 'id',
                1 => 'id',
                2 => 'flags-id',
              ),
              109 => 
              array (
                0 => 'ie',
                1 => 'ie',
                2 => 'flags-ie',
              ),
              110 => 
              array (
                0 => 'il',
                1 => 'il',
                2 => 'flags-il',
              ),
              111 => 
              array (
                0 => 'im',
                1 => 'im',
                2 => 'flags-im',
              ),
              112 => 
              array (
                0 => 'in',
                1 => 'in',
                2 => 'flags-in',
              ),
              113 => 
              array (
                0 => 'io',
                1 => 'io',
                2 => 'flags-io',
              ),
              114 => 
              array (
                0 => 'iq',
                1 => 'iq',
                2 => 'flags-iq',
              ),
              115 => 
              array (
                0 => 'ir',
                1 => 'ir',
                2 => 'flags-ir',
              ),
              116 => 
              array (
                0 => 'is',
                1 => 'is',
                2 => 'flags-is',
              ),
              117 => 
              array (
                0 => 'it',
                1 => 'it',
                2 => 'flags-it',
              ),
              118 => 
              array (
                0 => 'jm',
                1 => 'jm',
                2 => 'flags-jm',
              ),
              119 => 
              array (
                0 => 'jo',
                1 => 'jo',
                2 => 'flags-jo',
              ),
              120 => 
              array (
                0 => 'jp',
                1 => 'jp',
                2 => 'flags-jp',
              ),
              121 => 
              array (
                0 => 'ke',
                1 => 'ke',
                2 => 'flags-ke',
              ),
              122 => 
              array (
                0 => 'kg',
                1 => 'kg',
                2 => 'flags-kg',
              ),
              123 => 
              array (
                0 => 'kh',
                1 => 'kh',
                2 => 'flags-kh',
              ),
              124 => 
              array (
                0 => 'ki',
                1 => 'ki',
                2 => 'flags-ki',
              ),
              125 => 
              array (
                0 => 'km',
                1 => 'km',
                2 => 'flags-km',
              ),
              126 => 
              array (
                0 => 'kn',
                1 => 'kn',
                2 => 'flags-kn',
              ),
              127 => 
              array (
                0 => 'kp',
                1 => 'kp',
                2 => 'flags-kp',
              ),
              128 => 
              array (
                0 => 'kr',
                1 => 'kr',
                2 => 'flags-kr',
              ),
              129 => 
              array (
                0 => 'kw',
                1 => 'kw',
                2 => 'flags-kw',
              ),
              130 => 
              array (
                0 => 'ky',
                1 => 'ky',
                2 => 'flags-ky',
              ),
              131 => 
              array (
                0 => 'kz',
                1 => 'kz',
                2 => 'flags-kz',
              ),
              132 => 
              array (
                0 => 'la',
                1 => 'la',
                2 => 'flags-la',
              ),
              133 => 
              array (
                0 => 'lb',
                1 => 'lb',
                2 => 'flags-lb',
              ),
              134 => 
              array (
                0 => 'lc',
                1 => 'lc',
                2 => 'flags-lc',
              ),
              135 => 
              array (
                0 => 'li',
                1 => 'li',
                2 => 'flags-li',
              ),
              136 => 
              array (
                0 => 'lk',
                1 => 'lk',
                2 => 'flags-lk',
              ),
              137 => 
              array (
                0 => 'lr',
                1 => 'lr',
                2 => 'flags-lr',
              ),
              138 => 
              array (
                0 => 'ls',
                1 => 'ls',
                2 => 'flags-ls',
              ),
              139 => 
              array (
                0 => 'lt',
                1 => 'lt',
                2 => 'flags-lt',
              ),
              140 => 
              array (
                0 => 'lu',
                1 => 'lu',
                2 => 'flags-lu',
              ),
              141 => 
              array (
                0 => 'lv',
                1 => 'lv',
                2 => 'flags-lv',
              ),
              142 => 
              array (
                0 => 'ly',
                1 => 'ly',
                2 => 'flags-ly',
              ),
              143 => 
              array (
                0 => 'ma',
                1 => 'ma',
                2 => 'flags-ma',
              ),
              144 => 
              array (
                0 => 'mc',
                1 => 'mc',
                2 => 'flags-mc',
              ),
              145 => 
              array (
                0 => 'md',
                1 => 'md',
                2 => 'flags-md',
              ),
              146 => 
              array (
                0 => 'me',
                1 => 'me',
                2 => 'flags-me',
              ),
              147 => 
              array (
                0 => 'mf',
                1 => 'mf',
                2 => 'flags-mf',
              ),
              148 => 
              array (
                0 => 'mg',
                1 => 'mg',
                2 => 'flags-mg',
              ),
              149 => 
              array (
                0 => 'mh',
                1 => 'mh',
                2 => 'flags-mh',
              ),
              150 => 
              array (
                0 => 'mk',
                1 => 'mk',
                2 => 'flags-mk',
              ),
              151 => 
              array (
                0 => 'ml',
                1 => 'ml',
                2 => 'flags-ml',
              ),
              152 => 
              array (
                0 => 'mm',
                1 => 'mm',
                2 => 'flags-mm',
              ),
              153 => 
              array (
                0 => 'mn',
                1 => 'mn',
                2 => 'flags-mn',
              ),
              154 => 
              array (
                0 => 'mo',
                1 => 'mo',
                2 => 'flags-mo',
              ),
              155 => 
              array (
                0 => 'mp',
                1 => 'mp',
                2 => 'flags-mp',
              ),
              156 => 
              array (
                0 => 'mq',
                1 => 'mq',
                2 => 'flags-mq',
              ),
              157 => 
              array (
                0 => 'mr',
                1 => 'mr',
                2 => 'flags-mr',
              ),
              158 => 
              array (
                0 => 'ms',
                1 => 'ms',
                2 => 'flags-ms',
              ),
              159 => 
              array (
                0 => 'mt',
                1 => 'mt',
                2 => 'flags-mt',
              ),
              160 => 
              array (
                0 => 'mu',
                1 => 'mu',
                2 => 'flags-mu',
              ),
              161 => 
              array (
                0 => 'mv',
                1 => 'mv',
                2 => 'flags-mv',
              ),
              162 => 
              array (
                0 => 'mw',
                1 => 'mw',
                2 => 'flags-mw',
              ),
              163 => 
              array (
                0 => 'mx',
                1 => 'mx',
                2 => 'flags-mx',
              ),
              164 => 
              array (
                0 => 'my',
                1 => 'my',
                2 => 'flags-my',
              ),
              165 => 
              array (
                0 => 'mz',
                1 => 'mz',
                2 => 'flags-mz',
              ),
              166 => 
              array (
                0 => 'na',
                1 => 'na',
                2 => 'flags-na',
              ),
              167 => 
              array (
                0 => 'nc',
                1 => 'nc',
                2 => 'flags-nc',
              ),
              168 => 
              array (
                0 => 'ne',
                1 => 'ne',
                2 => 'flags-ne',
              ),
              169 => 
              array (
                0 => 'nf',
                1 => 'nf',
                2 => 'flags-nf',
              ),
              170 => 
              array (
                0 => 'ng',
                1 => 'ng',
                2 => 'flags-ng',
              ),
              171 => 
              array (
                0 => 'ni',
                1 => 'ni',
                2 => 'flags-ni',
              ),
              172 => 
              array (
                0 => 'gb-nir',
                1 => 'gb-nir',
                2 => 'flags-gb-nir',
              ),
              173 => 
              array (
                0 => 'nl',
                1 => 'nl',
                2 => 'flags-nl',
              ),
              174 => 
              array (
                0 => 'no',
                1 => 'no',
                2 => 'flags-no',
              ),
              175 => 
              array (
                0 => 'np',
                1 => 'np',
                2 => 'flags-np',
              ),
              176 => 
              array (
                0 => 'nr',
                1 => 'nr',
                2 => 'flags-nr',
              ),
              177 => 
              array (
                0 => 'nu',
                1 => 'nu',
                2 => 'flags-nu',
              ),
              178 => 
              array (
                0 => 'nz',
                1 => 'nz',
                2 => 'flags-nz',
              ),
              179 => 
              array (
                0 => 'om',
                1 => 'om',
                2 => 'flags-om',
              ),
              180 => 
              array (
                0 => 'pa',
                1 => 'pa',
                2 => 'flags-pa',
              ),
              181 => 
              array (
                0 => 'pe',
                1 => 'pe',
                2 => 'flags-pe',
              ),
              182 => 
              array (
                0 => 'pf',
                1 => 'pf',
                2 => 'flags-pf',
              ),
              183 => 
              array (
                0 => 'pg',
                1 => 'pg',
                2 => 'flags-pg',
              ),
              184 => 
              array (
                0 => 'ph',
                1 => 'ph',
                2 => 'flags-ph',
              ),
              185 => 
              array (
                0 => 'pk',
                1 => 'pk',
                2 => 'flags-pk',
              ),
              186 => 
              array (
                0 => 'pl',
                1 => 'pl',
                2 => 'flags-pl',
              ),
              187 => 
              array (
                0 => 'pm',
                1 => 'pm',
                2 => 'flags-pm',
              ),
              188 => 
              array (
                0 => 'pn',
                1 => 'pn',
                2 => 'flags-pn',
              ),
              189 => 
              array (
                0 => 'pr',
                1 => 'pr',
                2 => 'flags-pr',
              ),
              190 => 
              array (
                0 => 'ps',
                1 => 'ps',
                2 => 'flags-ps',
              ),
              191 => 
              array (
                0 => 'pt',
                1 => 'pt',
                2 => 'flags-pt',
              ),
              192 => 
              array (
                0 => 'pw',
                1 => 'pw',
                2 => 'flags-pw',
              ),
              193 => 
              array (
                0 => 'py',
                1 => 'py',
                2 => 'flags-py',
              ),
              194 => 
              array (
                0 => 'qa',
                1 => 'qa',
                2 => 'flags-qa',
              ),
              195 => 
              array (
                0 => 'qc',
                1 => 'qc',
                2 => 'flags-qc',
              ),
              196 => 
              array (
                0 => 're',
                1 => 're',
                2 => 'flags-re',
              ),
              197 => 
              array (
                0 => 'ro',
                1 => 'ro',
                2 => 'flags-ro',
              ),
              198 => 
              array (
                0 => 'rs',
                1 => 'rs',
                2 => 'flags-rs',
              ),
              199 => 
              array (
                0 => 'ru',
                1 => 'ru',
                2 => 'flags-ru',
              ),
              200 => 
              array (
                0 => 'rw',
                1 => 'rw',
                2 => 'flags-rw',
              ),
              201 => 
              array (
                0 => 'sa',
                1 => 'sa',
                2 => 'flags-sa',
              ),
              202 => 
              array (
                0 => 'sb',
                1 => 'sb',
                2 => 'flags-sb',
              ),
              203 => 
              array (
                0 => 'sc',
                1 => 'sc',
                2 => 'flags-sc',
              ),
              204 => 
              array (
                0 => 'gb-sct',
                1 => 'gb-sct',
                2 => 'flags-gb-sct',
              ),
              205 => 
              array (
                0 => 'sd',
                1 => 'sd',
                2 => 'flags-sd',
              ),
              206 => 
              array (
                0 => 'se',
                1 => 'se',
                2 => 'flags-se',
              ),
              207 => 
              array (
                0 => 'sg',
                1 => 'sg',
                2 => 'flags-sg',
              ),
              208 => 
              array (
                0 => 'sh',
                1 => 'sh',
                2 => 'flags-sh',
              ),
              209 => 
              array (
                0 => 'si',
                1 => 'si',
                2 => 'flags-si',
              ),
              210 => 
              array (
                0 => 'sj',
                1 => 'sj',
                2 => 'flags-sj',
              ),
              211 => 
              array (
                0 => 'sk',
                1 => 'sk',
                2 => 'flags-sk',
              ),
              212 => 
              array (
                0 => 'sl',
                1 => 'sl',
                2 => 'flags-sl',
              ),
              213 => 
              array (
                0 => 'sm',
                1 => 'sm',
                2 => 'flags-sm',
              ),
              214 => 
              array (
                0 => 'sn',
                1 => 'sn',
                2 => 'flags-sn',
              ),
              215 => 
              array (
                0 => 'so',
                1 => 'so',
                2 => 'flags-so',
              ),
              216 => 
              array (
                0 => 'sr',
                1 => 'sr',
                2 => 'flags-sr',
              ),
              217 => 
              array (
                0 => 'ss',
                1 => 'ss',
                2 => 'flags-ss',
              ),
              218 => 
              array (
                0 => 'st',
                1 => 'st',
                2 => 'flags-st',
              ),
              219 => 
              array (
                0 => 'sv',
                1 => 'sv',
                2 => 'flags-sv',
              ),
              220 => 
              array (
                0 => 'sx',
                1 => 'sx',
                2 => 'flags-sx',
              ),
              221 => 
              array (
                0 => 'sy',
                1 => 'sy',
                2 => 'flags-sy',
              ),
              222 => 
              array (
                0 => 'sz',
                1 => 'sz',
                2 => 'flags-sz',
              ),
              223 => 
              array (
                0 => 'tc',
                1 => 'tc',
                2 => 'flags-tc',
              ),
              224 => 
              array (
                0 => 'td',
                1 => 'td',
                2 => 'flags-td',
              ),
              225 => 
              array (
                0 => 'tf',
                1 => 'tf',
                2 => 'flags-tf',
              ),
              226 => 
              array (
                0 => 'tg',
                1 => 'tg',
                2 => 'flags-tg',
              ),
              227 => 
              array (
                0 => 'th',
                1 => 'th',
                2 => 'flags-th',
              ),
              228 => 
              array (
                0 => 'tj',
                1 => 'tj',
                2 => 'flags-tj',
              ),
              229 => 
              array (
                0 => 'tk',
                1 => 'tk',
                2 => 'flags-tk',
              ),
              230 => 
              array (
                0 => 'tl',
                1 => 'tl',
                2 => 'flags-tl',
              ),
              231 => 
              array (
                0 => 'tm',
                1 => 'tm',
                2 => 'flags-tm',
              ),
              232 => 
              array (
                0 => 'tn',
                1 => 'tn',
                2 => 'flags-tn',
              ),
              233 => 
              array (
                0 => 'to',
                1 => 'to',
                2 => 'flags-to',
              ),
              234 => 
              array (
                0 => 'tr',
                1 => 'tr',
                2 => 'flags-tr',
              ),
              235 => 
              array (
                0 => 'tt',
                1 => 'tt',
                2 => 'flags-tt',
              ),
              236 => 
              array (
                0 => 'tv',
                1 => 'tv',
                2 => 'flags-tv',
              ),
              237 => 
              array (
                0 => 'tw',
                1 => 'tw',
                2 => 'flags-tw',
              ),
              238 => 
              array (
                0 => 'tz',
                1 => 'tz',
                2 => 'flags-tz',
              ),
              239 => 
              array (
                0 => 'ua',
                1 => 'ua',
                2 => 'flags-ua',
              ),
              240 => 
              array (
                0 => 'ug',
                1 => 'ug',
                2 => 'flags-ug',
              ),
              241 => 
              array (
                0 => 'um',
                1 => 'um',
                2 => 'flags-um',
              ),
              242 => 
              array (
                0 => 'us',
                1 => 'us',
                2 => 'flags-us',
              ),
              243 => 
              array (
                0 => 'uy',
                1 => 'uy',
                2 => 'flags-uy',
              ),
              244 => 
              array (
                0 => 'uz',
                1 => 'uz',
                2 => 'flags-uz',
              ),
              245 => 
              array (
                0 => 'va',
                1 => 'va',
                2 => 'flags-va',
              ),
              246 => 
              array (
                0 => 'vc',
                1 => 'vc',
                2 => 'flags-vc',
              ),
              247 => 
              array (
                0 => 've',
                1 => 've',
                2 => 'flags-ve',
              ),
              248 => 
              array (
                0 => 'vg',
                1 => 'vg',
                2 => 'flags-vg',
              ),
              249 => 
              array (
                0 => 'vi',
                1 => 'vi',
                2 => 'flags-vi',
              ),
              250 => 
              array (
                0 => 'vn',
                1 => 'vn',
                2 => 'flags-vn',
              ),
              251 => 
              array (
                0 => 'vu',
                1 => 'vu',
                2 => 'flags-vu',
              ),
              252 => 
              array (
                0 => 'gb-wls',
                1 => 'gb-wls',
                2 => 'flags-gb-wls',
              ),
              253 => 
              array (
                0 => 'wf',
                1 => 'wf',
                2 => 'flags-wf',
              ),
              254 => 
              array (
                0 => 'ws',
                1 => 'ws',
                2 => 'flags-ws',
              ),
              255 => 
              array (
                0 => 'ye',
                1 => 'ye',
                2 => 'flags-ye',
              ),
              256 => 
              array (
                0 => 'yt',
                1 => 'yt',
                2 => 'flags-yt',
              ),
              257 => 
              array (
                0 => 'za',
                1 => 'za',
                2 => 'flags-za',
              ),
              258 => 
              array (
                0 => 'zm',
                1 => 'zm',
                2 => 'flags-zm',
              ),
              259 => 
              array (
                0 => 'zw',
                1 => 'zw',
                2 => 'flags-zw',
              ),
            ),
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,language_isocode,flag,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'sys_log' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_log',
        'label' => 'details',
        'tstamp' => 'tstamp',
        'adminOnly' => true,
        'rootLevel' => 1,
        'hideTable' => true,
        'default_sortby' => 'uid DESC',
      ),
      'columns' => 
      array (
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'userid' => 
        array (
          'label' => 'userid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'action' => 
        array (
          'label' => 'action',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recuid' => 
        array (
          'label' => 'recuid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tablename' => 
        array (
          'label' => 'tablename',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recpid' => 
        array (
          'label' => 'recpid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'error' => 
        array (
          'label' => 'error',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details' => 
        array (
          'label' => 'details',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'type' => 
        array (
          'label' => 'type',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details_nr' => 
        array (
          'label' => 'details_nr',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'IP' => 
        array (
          'label' => 'IP',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'log_data' => 
        array (
          'label' => 'log_data',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'event_pid' => 
        array (
          'label' => 'event_pid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'workspace' => 
        array (
          'label' => 'workspace',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'NEWid' => 
        array (
          'label' => 'NEWid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'tstamp, userid, action, recuid, tablename, recpid, error, details, type, details_nr, IP, log_data, event_pid, workspace, NEWid',
        ),
      ),
    ),
    'sys_news' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_news',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'adminOnly' => true,
        'rootLevel' => 1,
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_news',
        ),
        'searchFields' => 'title,content',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title,content,starttime,endtime',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'content' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 5,
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,content,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tx_scheduler_task_group' => 
    array (
      'ctrl' => 
      array (
        'label' => 'groupName',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-tx_scheduler_task_group',
        ),
        'adminOnly' => true,
        'rootLevel' => 1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'searchFields' => 'groupName',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,groupName',
      ),
      'columns' => 
      array (
        'groupName' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.groupName',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 80,
            'eval' => 'required,unique,trim',
            'softref' => 'substitute',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,groupName,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'tx_extensionmanager_domain_model_extension' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension',
        'label' => 'uid',
        'default_sortby' => '',
        'hideTable' => true,
        'rootLevel' => 1,
        'adminOnly' => true,
        'typeicon_classes' => 
        array (
          'default' => 'empty-icon',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'extension_key,version,integer_version,title,description,state,category,last_updated,update_comment,author_name,author_email,md5hash,serialized_dependencies',
      ),
      'columns' => 
      array (
        'extension_key' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.extensionkey',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.version',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'alldownloadcounter' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'integer_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.integerversion',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.state',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
            'eval' => 'int',
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.category',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
            'eval' => 'int',
          ),
        ),
        'last_updated' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.lastupdated',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
          ),
        ),
        'update_comment' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.updatecomment',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'author_name' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authorname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'author_email' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authoremail',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'current_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.currentversion',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'review_state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.reviewstate',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'md5hash' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.md5hash',
          'config' => 
          array (
            'type' => 'input',
            'size' => 1,
          ),
        ),
        'serialized_dependencies' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.serializedDependencies',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'extensionkey, version, integer_version, title, description, state, category, last_updated, update_comment, author_name, author_email, review_state, md5hash, serialized_dependencies',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'tx_extensionmanager_domain_model_repository' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository',
        'label' => 'uid',
        'default_sortby' => '',
        'hideTable' => true,
        'rootLevel' => 1,
        'adminOnly' => true,
        'typeicon_classes' => 
        array (
          'default' => 'empty-icon',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,description,wsdl_url_mirror_list_url,last_update,extension_count',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'wsdl_url' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.wsdlUrl',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'mirror_list_url' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.mirrorListUrl',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
          ),
        ),
        'last_update' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.lastUpdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'extension_count' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.extensionCount',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title, description, wsdl_url, mirror_list_url, last_update, extension_count',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'backend_layout' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-backend_layout',
        ),
        'selicon_field' => 'icon',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,config,description,hidden,icon',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 25,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.config',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'belayoutwizard',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.icon',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'maxitems' => 1,
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,icon,config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'fe_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups',
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-frontend',
        ),
        'useColumnsForDefaultValues' => 'lockToDomain',
        'searchFields' => 'title,description',
        'type' => 'tx_extbase_type',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,hidden,subgroup,lockToDomain,description',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'subgroup' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'AND NOT(fe_groups.uid = ###THIS_UID###) ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
            'size' => 6,
            'autoSizeMax' => 10,
            'minitems' => 0,
            'maxitems' => 20,
          ),
        ),
        'lockToDomain' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUserGroup',
                1 => 'Tx_Extbase_Domain_Model_FrontendUserGroup',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,subgroup,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUserGroup' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,subgroup,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type',
        ),
      ),
    ),
    'fe_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'default_sortby' => 'username',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'status-user-frontend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,lockToDomain,disable,starttime,endtime',
        'searchFields' => 'username,name,first_name,last_name,middle_name,address,telephone,fax,email,title,zip,city,country,company,description',
        'type' => 'tx_extbase_type',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'username,password,usergroup,lockToDomain,name,first_name,middle_name,last_name,title,company,address,zip,city,country,email,www,telephone,fax,disable,starttime,endtime,lastlogin,description',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'eval' => 'nospace,trim,lower,uniqueInPid,required',
            'autocomplete' => false,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.password',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 100,
            'eval' => 'trim,required,password,saltedPassword',
            'autocomplete' => false,
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
            'size' => 6,
            'minitems' => 1,
            'maxitems' => 50,
          ),
        ),
        'lockToDomain' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
            'softref' => 'substitute',
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'eval' => 'trim',
            'max' => 160,
          ),
        ),
        'first_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.first_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'middle_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.middle_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'last_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.last_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'address' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.address',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 3,
          ),
        ),
        'telephone' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.phone',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 30,
          ),
        ),
        'fax' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fax',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
          ),
        ),
        'email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 255,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title_person',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'zip' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.zip',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 10,
            'max' => 10,
          ),
        ),
        'city' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'country' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'www' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.www',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'company' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.company',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'maxitems' => 6,
            'minitems' => 0,
          ),
        ),
        'disable' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'lastlogin' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUser',
                1 => 'Tx_Extbase_Domain_Model_FrontendUser',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'felogin_forgotHash' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_forgotHash',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,username,password,usergroup,lastlogin,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personelData,company,title,name,--palette--;;2,address,zip,city,country,telephone,fax,email,www,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,disable,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUser' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,username,password,usergroup,lastlogin,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personelData,company,title,name,--palette--;;2,address,zip,city,country,telephone,fax,email,www,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,disable,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        2 => 
        array (
          'showitem' => 'first_name,--linebreak--,middle_name,--linebreak--,last_name',
        ),
      ),
    ),
    'sys_domain' => 
    array (
      'ctrl' => 
      array (
        'label' => 'domainName',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-domain',
        ),
        'searchFields' => 'domainName',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,domainName',
      ),
      'columns' => 
      array (
        'domainName' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.domainName',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 255,
            'eval' => 'required,unique,lower,trim,domainname',
            'softref' => 'substitute',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,domainName,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
      ),
    ),
    'sys_template' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'adminOnly' => true,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'root',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-template-extension',
          1 => 'mimetypes-x-content-template',
        ),
        'searchFields' => 'title,constants,config',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,clear,root,basedOn,nextLevel,sitetitle,description,hidden,starttime,endtime',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'root' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.root',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'clear' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clear',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'Constants',
                1 => '',
              ),
              1 => 
              array (
                0 => 'Setup',
                1 => '',
              ),
            ),
            'cols' => 2,
          ),
        ),
        'sitetitle' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.sitetitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
          ),
        ),
        'constants' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.constants',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 10,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'nextLevel' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.nextLevel',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'sys_template',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => '',
          ),
        ),
        'include_static_file' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_file',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'maxitems' => 100,
            'items' => 
            array (
              0 => 
              array (
                0 => 'Form (form)',
                1 => 'EXT:form/Configuration/TypoScript/',
              ),
              1 => 
              array (
                0 => 'XML Sitemap (seo)',
                1 => 'EXT:seo/Configuration/TypoScript/XmlSitemap',
              ),
              2 => 
              array (
                0 => 'Bootstrap Package: Full Package (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TypoScript',
              ),
              3 => 
              array (
                0 => 'Bootstrap Package: Content Elements (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TypoScript/ContentElement',
              ),
              4 => 
              array (
                0 => 'Bootstrap Package: Bootstrap 3.x (LESS) (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TypoScript/Bootstrap3',
              ),
              5 => 
              array (
                0 => 'Bootstrap Package: Bootstrap 4.x (SCSS) (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TypoScript/Bootstrap4',
              ),
              6 => 
              array (
                0 => 'Hofexpress Package (hofexpress_package)',
                1 => 'EXT:hofexpress_package/Configuration/TypoScript',
              ),
            ),
            'enableMultiSelectFilterTextfield' => true,
            'softref' => 'ext_fileref',
          ),
        ),
        'basedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'sys_template',
            'maxitems' => 50,
            'autoSizeMax' => 10,
            'minitems' => 0,
            'default' => '',
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_edit',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_add',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'includeStaticAfterBasedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOn',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.config',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 10,
            'cols' => 48,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'static_file_mode' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,sitetitle,constants,config,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.tabs.options,clear,root,nextLevel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.tabs.include,includeStaticAfterBasedOn,include_static_file,basedOn,static_file_mode,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tt_content' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'subheader,bodytext',
        'descriptionColumn' => 'rowDescription',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:tt_content',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'type' => 'CType',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'copyAfterDuplFields' => 'colPos,sys_language_uid',
        'useColumnsForDefaultValues' => 'colPos,sys_language_uid,CType',
        'shadowColumnsForNewPlaceholders' => 'colPos',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'CType',
        'typeicon_classes' => 
        array (
          'header' => 'mimetypes-x-content-header',
          'text' => 'mimetypes-x-content-text',
          'textpic' => 'mimetypes-x-content-text-picture',
          'image' => 'mimetypes-x-content-image',
          'textmedia' => 'mimetypes-x-content-text-media',
          'bullets' => 'mimetypes-x-content-list-bullets',
          'table' => 'mimetypes-x-content-table',
          'uploads' => 'mimetypes-x-content-list-files',
          'list' => 'mimetypes-x-content-plugin',
          'shortcut' => 'mimetypes-x-content-link',
          'script' => 'mimetypes-x-content-script',
          'div' => 'mimetypes-x-content-divider',
          'html' => 'mimetypes-x-content-html',
          'default' => 'mimetypes-x-content-text',
          'menu_abstract' => 'content-menu-abstract',
          'menu_categorized_content' => 'content-menu-categorized',
          'menu_categorized_pages' => 'content-menu-categorized',
          'menu_pages' => 'content-menu-pages',
          'menu_subpages' => 'content-menu-pages',
          'menu_recently_updated' => 'content-menu-recently-updated',
          'menu_related_pages' => 'content-menu-related',
          'menu_sitemap' => 'content-menu-sitemap',
          'menu_sitemap_pages' => 'content-menu-sitemap-pages',
          'menu_section' => 'content-menu-section',
          'menu_section_pages' => 'content-menu-section',
          'form_formframework' => 'content-form',
          'login' => 'mimetypes-x-content-login',
          'accordion' => 'content-bootstrappackage-accordion',
          'audio' => 'content-audio',
          'card_group' => 'content-bootstrappackage-card-group',
          'carousel' => 'content-bootstrappackage-carousel',
          'carousel_small' => 'content-bootstrappackage-carousel',
          'carousel_fullscreen' => 'content-bootstrappackage-carousel',
          'csv' => 'content-bootstrappackage-csv',
          'external_media' => 'content-bootstrappackage-externalmedia',
          'icon_group' => 'content-bootstrappackage-icon-group',
          'listgroup' => 'content-bootstrappackage-listgroup',
          'media' => 'mimetypes-x-content-multimedia',
          'menu_card_list' => 'content-bootstrappackage-menu-card',
          'menu_card_dir' => 'content-bootstrappackage-menu-card',
          'menu_thumbnail_list' => 'content-menu-thumbnail',
          'menu_thumbnail_dir' => 'content-menu-thumbnail',
          'panel' => 'content-panel',
          'quote' => 'content-quote',
          'social_links' => 'content-bootstrappackage-social-links',
          'tab' => 'content-bootstrappackage-tab',
          'textcolumn' => 'content-text-columns',
          'texticon' => 'content-bootstrappackage-texticon',
          'textteaser' => 'content-text-teaser',
          'timeline' => 'content-bootstrappackage-timeline',
        ),
        'searchFields' => 'header,header_link,subheader,bodytext,pi_flexform',
      ),
      'interface' => 
      array (
        'always_description' => 0,
        'showRecordFieldList' => 'CType,header,rowDescription,header_link,bodytext,image,media,imagewidth,imageorient,records,colPos,starttime,endtime,fe_group,categories',
      ),
      'columns' => 
      array (
        'CType' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:theme_name',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.accordion',
                1 => 'accordion',
                2 => 'content-bootstrappackage-accordion',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.audio',
                1 => 'audio',
                2 => 'content-audio',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.card_group',
                1 => 'card_group',
                2 => 'content-bootstrappackage-card-group',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel',
                1 => 'carousel',
                2 => 'content-bootstrappackage-carousel',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel_small',
                1 => 'carousel_small',
                2 => 'content-bootstrappackage-carousel',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel_fullscreen',
                1 => 'carousel_fullscreen',
                2 => 'content-bootstrappackage-carousel',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.csv',
                1 => 'csv',
                2 => 'content-bootstrappackage-csv',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.external_media',
                1 => 'external_media',
                2 => 'content-bootstrappackage-externalmedia',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.icon_group',
                1 => 'icon_group',
                2 => 'content-bootstrappackage-icon-group',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.listgroup',
                1 => 'listgroup',
                2 => 'content-bootstrappackage-listgroup',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.media',
                1 => 'media',
                2 => 'mimetypes-x-content-multimedia',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card_list',
                1 => 'menu_card_list',
                2 => 'content-bootstrappackage-menu-card',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card_dir',
                1 => 'menu_card_dir',
                2 => 'content-bootstrappackage-menu-card',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail_list',
                1 => 'menu_thumbnail_list',
                2 => 'content-menu-thumbnail',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail_dir',
                1 => 'menu_thumbnail_dir',
                2 => 'content-menu-thumbnail',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.panel',
                1 => 'panel',
                2 => 'content-panel',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.quote',
                1 => 'quote',
                2 => 'content-quote',
              ),
              18 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.social_links',
                1 => 'social_links',
                2 => 'content-bootstrappackage-social-links',
              ),
              19 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.tab',
                1 => 'tab',
                2 => 'content-bootstrappackage-tab',
              ),
              20 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.textcolumn',
                1 => 'textcolumn',
                2 => 'content-text-columns',
              ),
              21 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.texticon',
                1 => 'texticon',
                2 => 'content-bootstrappackage-texticon',
              ),
              22 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.textteaser',
                1 => 'textteaser',
                2 => 'content-text-teaser',
              ),
              23 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.timeline',
                1 => 'timeline',
                2 => 'content-bootstrappackage-timeline',
              ),
              24 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.standard',
                1 => '--div--',
              ),
              25 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.0',
                1 => 'header',
                2 => 'content-header',
              ),
              26 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.1',
                1 => 'text',
                2 => 'content-text',
              ),
              27 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.2',
                1 => 'textpic',
                2 => 'content-textpic',
              ),
              28 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.3',
                1 => 'image',
                2 => 'content-image',
              ),
              29 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textmedia',
                1 => 'textmedia',
                2 => 'content-textmedia',
              ),
              30 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.lists',
                1 => '--div--',
              ),
              31 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.4',
                1 => 'bullets',
                2 => 'content-bullets',
              ),
              32 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.5',
                1 => 'table',
                2 => 'content-table',
              ),
              33 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.6',
                1 => 'uploads',
                2 => 'content-special-uploads',
              ),
              34 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.menu',
                1 => '--div--',
              ),
              35 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_abstract',
                1 => 'menu_abstract',
                2 => 'content-menu-abstract',
              ),
              36 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_content',
                1 => 'menu_categorized_content',
                2 => 'content-menu-categorized',
              ),
              37 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_pages',
                1 => 'menu_categorized_pages',
                2 => 'content-menu-categorized',
              ),
              38 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_pages',
                1 => 'menu_pages',
                2 => 'content-menu-pages',
              ),
              39 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_subpages',
                1 => 'menu_subpages',
                2 => 'content-menu-pages',
              ),
              40 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_recently_updated',
                1 => 'menu_recently_updated',
                2 => 'content-menu-recently-updated',
              ),
              41 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_related_pages',
                1 => 'menu_related_pages',
                2 => 'content-menu-related',
              ),
              42 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section',
                1 => 'menu_section',
                2 => 'content-menu-section',
              ),
              43 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section_pages',
                1 => 'menu_section_pages',
                2 => 'content-menu-section',
              ),
              44 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap',
                1 => 'menu_sitemap',
                2 => 'content-menu-sitemap',
              ),
              45 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap_pages',
                1 => 'menu_sitemap_pages',
                2 => 'content-menu-sitemap-pages',
              ),
              46 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.special',
                1 => '--div--',
              ),
              47 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.13',
                1 => 'shortcut',
                2 => 'content-special-shortcut',
              ),
              48 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.14',
                1 => 'list',
                2 => 'content-plugin',
              ),
              49 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.16',
                1 => 'div',
                2 => 'content-special-div',
              ),
              50 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.17',
                1 => 'html',
                2 => 'content-special-html',
              ),
              51 => 
              array (
                0 => 'Form',
                1 => 'form_formframework',
                2 => 'content-form',
              ),
              52 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.forms',
                1 => '--div--',
              ),
              53 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.10',
                1 => 'login',
                2 => 'content-elements-login',
              ),
            ),
            'default' => 'text',
            'authMode' => 'explicitAllow',
            'authMode_enforce' => 'strict',
          ),
        ),
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l18n_parent' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'frame_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_before',
                1 => 'ruler-before',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_after',
                1 => 'ruler-after',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent',
                1 => 'indent',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_left',
                1 => 'indent-left',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_right',
                1 => 'indent-right',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.none',
                1 => 'none',
              ),
            ),
            'default' => 'default',
          ),
          'onChange' => 'reload',
        ),
        'space_before_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                1 => 'extra-small',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                1 => 'small',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                1 => 'medium',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                1 => 'large',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                1 => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'space_after_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                1 => 'extra-small',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                1 => 'small',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                1 => 'medium',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                1 => 'large',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                1 => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'bullets_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'colPos' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->colPosListItemProcFunc',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.0',
                1 => '1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.normal',
                1 => '0',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'date' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'header' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'header_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.5',
                1 => '5',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6',
                1 => '100',
              ),
            ),
            'default' => 0,
          ),
        ),
        'header_position' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.1',
                1 => 'center',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.2',
                1 => 'right',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.3',
                1 => 'left',
              ),
            ),
            'default' => '',
          ),
        ),
        'header_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'softref' => 'email[subst]',
          ),
        ),
        'bodytext' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 80,
            'rows' => 15,
            'softref' => 'typolink_tag,images,email[subst],url',
            'search' => 
            array (
              'andWhere' => '`CType`=\'text\' OR `CType`=\'textpic\' OR `CType`=\'textmedia\'',
            ),
          ),
        ),
        'image' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.images',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
          ),
        ),
        'assets' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'assets',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
            ),
          ),
        ),
        'imagewidth' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagewidth',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'max' => 4,
            'eval' => 'int',
            'range' => 
            array (
              'upper' => 1999,
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageheight' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageheight',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'max' => 4,
            'eval' => 'int',
            'range' => 
            array (
              'upper' => 1999,
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageorient' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.0',
                1 => 0,
                2 => 'content-beside-text-img-above-center',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.1',
                1 => 1,
                2 => 'content-beside-text-img-above-right',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.2',
                1 => 2,
                2 => 'content-beside-text-img-above-left',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.3',
                1 => 8,
                2 => 'content-beside-text-img-below-center',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.4',
                1 => 9,
                2 => 'content-beside-text-img-below-right',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.5',
                1 => 10,
                2 => 'content-beside-text-img-below-left',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.6',
                1 => 17,
                2 => 'content-inside-text-img-right',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.7',
                1 => 18,
                2 => 'content-inside-text-img-left',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.8',
                1 => '--div--',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.9',
                1 => 25,
                2 => 'content-beside-text-img-right',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.10',
                1 => 26,
                2 => 'content-beside-text-img-left',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.imageorient.125',
                1 => '125',
                2 => 'content-bootstrappackage-beside-text-img-centered-right',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.imageorient.126',
                1 => '126',
                2 => 'content-bootstrappackage-beside-text-img-centered-left',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'imageborder' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageborder',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '1',
                1 => 1,
              ),
              1 => 
              array (
                0 => '2',
                1 => 2,
              ),
              2 => 
              array (
                0 => '3',
                1 => 3,
              ),
              3 => 
              array (
                0 => '4',
                1 => 4,
              ),
              4 => 
              array (
                0 => '5',
                1 => 5,
              ),
              5 => 
              array (
                0 => '6',
                1 => 6,
              ),
              6 => 
              array (
                0 => '7',
                1 => 7,
              ),
              7 => 
              array (
                0 => '8',
                1 => 8,
              ),
            ),
            'default' => 2,
          ),
        ),
        'cols' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => '1',
                1 => '1',
              ),
              2 => 
              array (
                0 => '2',
                1 => '2',
              ),
              3 => 
              array (
                0 => '3',
                1 => '3',
              ),
              4 => 
              array (
                0 => '4',
                1 => '4',
              ),
              5 => 
              array (
                0 => '5',
                1 => '5',
              ),
              6 => 
              array (
                0 => '6',
                1 => '6',
              ),
              7 => 
              array (
                0 => '7',
                1 => '7',
              ),
              8 => 
              array (
                0 => '8',
                1 => '8',
              ),
              9 => 
              array (
                0 => '9',
                1 => '9',
              ),
            ),
            'default' => 0,
          ),
        ),
        'pages' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.startingpoint',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 50,
            'minitems' => 0,
          ),
        ),
        'recursive' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.recursive',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.5',
                1 => '250',
              ),
            ),
            'default' => 0,
          ),
        ),
        'list_type' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                2 => '',
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Frontend\\Hooks\\TableColumnHooks->sortPluginList',
            'default' => '',
            'authMode' => 'explicitAllow',
            'authMode_enforce' => 'strict',
          ),
        ),
        'file_collections' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'localizeReferencesAtParentLocalization' => true,
            'allowed' => 'sys_file_collection',
            'foreign_table' => 'sys_file_collection',
            'minitems' => 0,
            'size' => 5,
          ),
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
            ),
          ),
        ),
        'filelink_size' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'filelink_sorting' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.extension',
                1 => 'extension',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.name',
                1 => 'name',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.type',
                1 => 'type',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.size',
                1 => 'size',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.creation_date',
                1 => 'creation_date',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.modification_date',
                1 => 'modification_date',
              ),
            ),
          ),
        ),
        'filelink_sorting_direction' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction.ascending',
                1 => 'asc',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction.descending',
                1 => 'desc',
              ),
            ),
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'default' => '',
          ),
        ),
        'records' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_content',
            'size' => 5,
            'maxitems' => 200,
            'minitems' => 0,
          ),
        ),
        'sectionIndex' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'linkToTop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'pi_flexform' => 
        array (
          'l10n_display' => 'hideDiff',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pi_flexform',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'list_type,CType',
            'ds' => 
            array (
              'default' => '
                        <T3DataStructure>
                          <ROOT>
                            <type>array</type>
                            <el>
                                <!-- Repeat an element like "xmlTitle" beneath for as many elements you like. Remember to name them uniquely  -->
                              <xmlTitle>
                                <TCEforms>
                                    <label>The Title:</label>
                                    <config>
                                        <type>input</type>
                                        <size>48</size>
                                    </config>
                                </TCEforms>
                              </xmlTitle>
                            </el>
                          </ROOT>
                        </T3DataStructure>
                    ',
              '*,form_formframework' => 'FILE:EXT:form/Configuration/FlexForms/FormFramework.xml',
              '*,login' => 'FILE:EXT:felogin/Configuration/FlexForms/Login.xml',
              '*,accordion' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Accordion.xml',
              '*,card_group' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/CardGroup.xml',
              '*,carousel' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Carousel.xml',
              '*,carousel_small' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Carousel.xml',
              '*,carousel_fullscreen' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Carousel.xml',
              '*,icon_group' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/IconGroup.xml',
              '*,menu_card_list' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuCard.xml',
              '*,menu_card_dir' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuCard.xml',
              '*,menu_thumbnail_list' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuThumbnail.xml',
              '*,menu_thumbnail_dir' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuThumbnail.xml',
              '*,tab' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Tab.xml',
              '*,timeline' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Timeline.xml',
            ),
            'search' => 
            array (
              'andWhere' => '`CType`=\'list\'',
            ),
          ),
        ),
        'accessibility_title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'accessibility_bypass' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'accessibility_bypass_text' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass_text',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'selected_categories' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:selected_categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND sys_category.sys_language_uid IN (0,-1) ORDER BY sys_category.title ASC',
            'size' => 20,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
              ),
            ),
          ),
        ),
        'category_field' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:category_field',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Category\\CategoryRegistry->getCategoryFieldsForTable',
            'itemsProcConfig' => 
            array (
              'table' => 'tt_content',
            ),
          ),
        ),
        'table_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.default',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.striped',
                1 => 'striped',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.bordered',
                1 => 'bordered',
              ),
            ),
            'default' => '',
          ),
        ),
        'table_caption' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_caption',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'table_delimiter' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.124',
                1 => 124,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.59',
                1 => 59,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.44',
                1 => 44,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.58',
                1 => 58,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.9',
                1 => 9,
              ),
            ),
            'default' => 124,
          ),
        ),
        'table_enclosure' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.39',
                1 => 39,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.34',
                1 => 34,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_header_position' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_tfoot' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_tfoot',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'uploads_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'uploads_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'tt_content',
              'fieldname' => 'categories',
            ),
            'size' => 20,
            'maxitems' => 9999,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
          ),
        ),
        'tx_bootstrappackage_accordion_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_accordion_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => false,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'tx_bootstrappackage_card_group_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_card_group_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => false,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'external_media_source' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.external_media_source',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'max' => 1024,
          ),
        ),
        'external_media_ratio' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.external_media_ratio',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '16:9',
                1 => '16by9',
              ),
              1 => 
              array (
                0 => '4:3',
                1 => '4by3',
              ),
            ),
          ),
        ),
        'tx_bootstrappackage_icon_group_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_icon_group_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => false,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'panel_class' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.panel_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.primary',
                1 => 'primary',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.success',
                1 => 'success',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.info',
                1 => 'info',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.warning',
                1 => 'warning',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.danger',
                1 => 'danger',
              ),
            ),
          ),
        ),
        'quote_source' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.source',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'quote_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.link',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'tx_bootstrappackage_tab_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_tab_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => false,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'Ionicons',
                1 => 'EXT:bootstrap_package/Resources/Public/Images/Icons/Ionicons/',
              ),
              2 => 
              array (
                0 => 'Glyphicons',
                1 => 'EXT:bootstrap_package/Resources/Public/Images/Icons/Glyphicons/',
              ),
            ),
          ),
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon',
          'displayCond' => 'FIELD:icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.none',
                1 => 0,
                2 => 'EXT:bootstrap_package/Resources/Public/Images/Icons/none.jpg',
              ),
            ),
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Utility\\TextIconUtility->addIconItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'icon_file' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_file',
          'displayCond' => 'FIELD:icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,png,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,png,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
        'icon_position' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.left',
                1 => 'left',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.right',
                1 => 'right',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.top',
                1 => 'top',
              ),
            ),
          ),
        ),
        'icon_type' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_type',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 'default',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.square',
                1 => 'square',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.circle',
                1 => 'circle',
              ),
            ),
          ),
        ),
        'icon_size' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_size',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                1 => 'medium',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                1 => 'large',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.awesome',
                1 => 'awesome',
              ),
            ),
          ),
        ),
        'icon_color' => 
        array (
          'displayCond' => 'FIELD:icon_type:!=:default',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_color',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'colorpicker',
            'default' => '#FFFFFF',
          ),
        ),
        'icon_background' => 
        array (
          'displayCond' => 'FIELD:icon_type:!=:default',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_background',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'colorpicker',
            'default' => '#333333',
          ),
        ),
        'tx_bootstrappackage_timeline_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_timeline_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => false,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'background_color_class' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_color_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'none',
                1 => 'none',
              ),
              1 => 
              array (
                0 => 'primary',
                1 => 'primary',
              ),
              2 => 
              array (
                0 => 'secondary',
                1 => 'secondary',
              ),
              3 => 
              array (
                0 => 'light',
                1 => 'light',
              ),
              4 => 
              array (
                0 => 'dark',
                1 => 'dark',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'background_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'large' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'medium' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'small' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'extrasmall' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
                1 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
                2 => 
                array (
                  'showitem' => '
                            crop,
                            --palette--;;filePalette
                        ',
                ),
                3 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
                4 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
                5 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image_options' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_image_options',
          'config' => 
          array (
            'type' => 'flex',
            'ds' => 
            array (
              'default' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/BackgroundImage.xml',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'readmore_label' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.readmore_label',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'teaser' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.teaser',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'text',
            'softref' => 'rtehtmlarea_images,typolink_tag',
            'cols' => '40',
            'rows' => '3',
          ),
        ),
        'tx_bootstrappackage_carousel_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_carousel_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => false,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'file_folder' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.file_folder',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'folder',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'CType,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories',
        ),
        'bullets' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,bullets_type,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'div' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'header' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'text' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
              ),
            ),
          ),
        ),
        'textpic' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,image,file_folder,filelink_sorting,--palette--;;mediaAdjustments,--palette--;;gallerySettings,--palette--;;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
              ),
            ),
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'textmedia' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,assets,--palette--;;mediaAdjustments,--palette--;;gallerySettings,--palette--;;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
              ),
            ),
            'assets' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'image' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,image,file_folder,filelink_sorting,--palette--;;mediaAdjustments,--palette--;;gallerySettings,--palette--;;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'html' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 't3editor',
                'wrap' => 'off',
                'format' => 'html',
              ),
            ),
          ),
        ),
        'list' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,list_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type_formlabel,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.list_formlabel,recursive,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'subtype_value_field' => 'list_type',
        ),
        'menu_categorized_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,selected_categories,category_field,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'pages',
                ),
              ),
            ),
          ),
        ),
        'menu_categorized_content' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,selected_categories,category_field,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'tt_content',
                ),
              ),
            ),
          ),
        ),
        'menu_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_subpages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_sitemap' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_section' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_abstract' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_recently_updated' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_related_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_section_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_sitemap_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'shortcut' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.shortcut_formlabel,records;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'table' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.table.bodytext,--palette--;;tableconfiguration,table_caption,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;tablelayout,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 'textTable',
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'uploads' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,--palette--;;uploads,--palette--;;uploadslayout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'form_formframework' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;header,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,pi_flexform,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'login' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;general,--palette--;;headers,pi_flexform,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'accordion' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,tx_bootstrappackage_accordion_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'audio' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,assets,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'assets' => 
            array (
              'config' => 
              array (
                'filter' => 
                array (
                  0 => 
                  array (
                    'parameters' => 
                    array (
                      'allowedFileExtensions' => 'mp3',
                    ),
                  ),
                ),
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'uid_local' => 
                    array (
                      'config' => 
                      array (
                        'appearance' => 
                        array (
                          'elementBrowserAllowed' => 'mp3',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'card_group' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,tx_bootstrappackage_card_group_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.card_group.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'carousel' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,tx_bootstrappackage_carousel_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'carousel_small' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,tx_bootstrappackage_carousel_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'carousel_fullscreen' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,tx_bootstrappackage_carousel_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'csv' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,media;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.ALT.uploads_formlabel,--palette--;;tableconfiguration,--palette--;;tablelayout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'config' => 
              array (
                'filter' => 
                array (
                  0 => 
                  array (
                    'parameters' => 
                    array (
                      'allowedFileExtensions' => 'csv',
                    ),
                  ),
                ),
                'minitems' => 0,
                'maxitems' => 1,
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'uid_local' => 
                    array (
                      'config' => 
                      array (
                        'appearance' => 
                        array (
                          'elementBrowserAllowed' => 'csv',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'external_media' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.palette.external_media;external_media,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'icon_group' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,tx_bootstrappackage_icon_group_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.icon_group.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'listgroup' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel',
              'config' => 
              array (
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'media' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,assets,file_folder,filelink_sorting,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'assets' => 
            array (
              'config' => 
              array (
                'filter' => 
                array (
                  0 => 
                  array (
                    'parameters' => 
                    array (
                      'allowedFileExtensions' => 'youtube, vimeo',
                    ),
                  ),
                ),
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'uid_local' => 
                    array (
                      'config' => 
                      array (
                        'appearance' => 
                        array (
                          'elementBrowserAllowed' => 'youtube, vimeo',
                        ),
                      ),
                    ),
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'menu_card_list' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,readmore_label,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_card_dir' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,readmore_label,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_thumbnail_list' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_thumbnail_dir' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'panel' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header_minimal,bodytext,panel_class,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
              ),
            ),
          ),
        ),
        'quote' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,quote_link;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.link,quote_source;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.source,bodytext;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.text,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'social_links' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
              ),
            ),
          ),
        ),
        'tab' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,tx_bootstrappackage_tab_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'textcolumn' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
              ),
            ),
          ),
        ),
        'texticon' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.icon,--palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon;bootstrap_package_icons,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
              ),
            ),
          ),
        ),
        'textteaser' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,teaser,bodytext,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
              ),
            ),
          ),
        ),
        'timeline' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,tx_bootstrappackage_timeline_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'general' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general',
          'showitem' => '
                CType;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
                colPos;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos_formlabel,
            ',
        ),
        'header' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header',
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel
            ',
        ),
        'headers' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers',
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
                --linebreak--,
                subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel
            ',
        ),
        'gallerySettings' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings',
          'showitem' => '
                imageorient;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient_formlabel,
                imagecols;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols_formlabel
            ',
        ),
        'mediaAdjustments' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments',
          'showitem' => '
                imagewidth;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imagewidth,
                imageheight;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageheight,
                imageborder;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageborder
            ',
        ),
        'imagelinks' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks',
          'showitem' => '
                image_zoom;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom_formlabel
            ',
        ),
        'uploads' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'showitem' => '
                media;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.ALT.uploads_formlabel,
                --linebreak--,
                file_collections;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections.ALT.uploads_formlabel,
                --linebreak--,
                filelink_sorting,
                filelink_sorting_direction,
                target
            ',
        ),
        'menu_accessibility' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility',
          'showitem' => '
                accessibility_title;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_title_formlabel,
                --linebreak--,
                accessibility_bypass;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_formlabel,
                accessibility_bypass_text;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_text_formlabel
            ',
        ),
        'hidden' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.default.hidden
            ',
        ),
        'language' => 
        array (
          'showitem' => '
                sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
            ',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                --linebreak--,
                fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                --linebreak--,editlock
            ',
        ),
        'uploadslayout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.uploads_layout',
          'showitem' => '
                filelink_size;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size_formlabel,
                uploads_description,
                uploads_type
            ',
        ),
        'appearanceLinks' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks',
          'showitem' => '
                sectionIndex;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex_formlabel,
                linkToTop;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop_formlabel
            ',
        ),
        'frames' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames',
          'showitem' => '
                layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,
                frame_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class_formlabel,
                space_before_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class_formlabel,
                space_after_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class_formlabel,
            
    --linebreak--,
    background_color_class,
    --linebreak--,
    background_image,
    background_image_options,
',
        ),
        'tableconfiguration' => 
        array (
          'showitem' => '
                table_delimiter,
                table_enclosure
            ',
        ),
        'tablelayout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.table_layout',
          'showitem' => '
                cols,
                table_class,
                table_header_position,
                table_tfoot
            ',
        ),
        'external_media' => 
        array (
          'showitem' => '
        external_media_source, --linebreak--,
        external_media_ratio
    ',
        ),
        'bootstrap_package_icons' => 
        array (
          'showitem' => '
        icon_position, icon_type, icon_size, --linebreak--,
        icon_color, icon_background, --linebreak--,
        icon_set, --linebreak--,
        icon, icon_file
    ',
        ),
        'header_minimal' => 
        array (
          'showitem' => '
        header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
        --linebreak--,
        header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
    ',
        ),
      ),
    ),
    'sys_redirect' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect',
        'label' => 'source_host',
        'label_alt' => 'source_path',
        'label_alt_force' => true,
        'crdate' => 'createdon',
        'cruser_id' => 'createdby',
        'tstamp' => 'updatedon',
        'versioningWS' => false,
        'default_sortby' => 'source_host, source_path',
        'rootLevel' => 1,
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disabled',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_redirect',
        ),
        'searchFields' => 'source_host,source_path,target,target_statuscode',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'disabled, source_host, source_path, respect_query_parameters, is_regexp, force_https, keep_query_parameters, target, target_statuscode, hitcount, lasthiton, disable_hitcount',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;source,--palette--;;targetdetails,--div--;LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:tabs.redirectCount,disable_hitcount,hitcount,lasthiton,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;visibility',
        ),
      ),
      'palettes' => 
      array (
        'visibility' => 
        array (
          'showitem' => 'disabled, --linebreak--, starttime, endtime',
        ),
        'source' => 
        array (
          'showitem' => 'source_host, --linebreak--, source_path, respect_query_parameters, is_regexp',
        ),
        'targetdetails' => 
        array (
          'showitem' => 'target, target_statuscode, --linebreak--, force_https, keep_query_parameters',
        ),
      ),
      'columns' => 
      array (
        'disabled' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'source_host' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_host',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim,required,TYPO3\\CMS\\Redirects\\Evaluation\\SourceHost',
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_host_global_text',
                  1 => '*',
                ),
              ),
            ),
            'default' => '*',
          ),
        ),
        'source_path' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_path',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
            'placeholder' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_path.placeholder',
            'max' => 2048,
          ),
        ),
        'force_https' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.force_https.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'keep_query_parameters' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.keep_query_parameters.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'respect_query_parameters' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.respect_query_parameters.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'required',
            'renderType' => 'inputLink',
            'softref' => 'typolink',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'blindLinkOptions' => 'mail,folder,telephone',
                  'blindLinkFields' => 'class, target',
                ),
              ),
            ),
            'max' => 2048,
          ),
        ),
        'target_statuscode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.301',
                1 => 301,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.302',
                1 => 302,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.303',
                1 => 303,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.307',
                1 => 307,
              ),
            ),
            'default' => 307,
            'size' => 1,
          ),
        ),
        'hitcount' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.hitcount',
          'config' => 
          array (
            'type' => 'input',
            'size' => 5,
            'default' => 0,
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'lasthiton' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.lasthiton',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'datetime,int',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'disable_hitcount' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.hitcountState',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'labelChecked' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
                'labelUnchecked' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disabled',
                'invertStateDisplay' => true,
              ),
            ),
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'is_regexp' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.is_regexp',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
      ),
    ),
    'sys_note' => 
    array (
      'ctrl' => 
      array (
        'label' => 'subject',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'delete' => 'deleted',
        'title' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_note',
        ),
        'sortby' => 'sorting',
        'searchFields' => 'subject,message',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'category,subject,message,personal',
      ),
      'columns' => 
      array (
        'category' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.category',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '0',
                2 => 'sysnote-type-0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.1',
                1 => '1',
                2 => 'sysnote-type-1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.3',
                1 => '3',
                2 => 'sysnote-type-3',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.4',
                1 => '4',
                2 => 'sysnote-type-4',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.2',
                1 => '2',
                2 => 'sysnote-type-2',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'subject' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.subject',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
          ),
        ),
        'message' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.message',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
          ),
        ),
        'personal' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.personal',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        'position' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position.top',
                1 => 1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position.bottom',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,category,subject,message,position,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,personal,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'tx_bootstrappackage_accordion_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'bodytext',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-accordion-item',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => '
            hidden,
            tt_content,
            header,
            bodytext
        ',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,bodytext,media,--palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaposition;mediaposition,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--palette--;;hiddenLanguagePalette',
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'mediaposition' => 
        array (
          'showitem' => '
                mediaorient,
                imagecols,
                image_zoom,
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType="accordion"',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'allowNonIdValues' => true,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_accordion_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_accordion_item.pid=###CURRENT_PID### AND tx_bootstrappackage_accordion_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,images,email[subst],url',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
          ),
        ),
        'mediaorient' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.left',
                1 => 'left',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.top',
                1 => 'top',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.right',
                1 => 'right',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.bottom',
                1 => 'bottom',
              ),
            ),
            'default' => 'left',
          ),
          'l10n_mode' => 'exclude',
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '1',
                1 => 1,
              ),
              1 => 
              array (
                0 => '2',
                1 => 2,
              ),
              2 => 
              array (
                0 => '3',
                1 => 3,
              ),
              3 => 
              array (
                0 => '4',
                1 => 4,
              ),
              4 => 
              array (
                0 => '5',
                1 => 5,
              ),
              5 => 
              array (
                0 => '6',
                1 => 6,
              ),
            ),
            'default' => 2,
          ),
          'l10n_mode' => 'exclude',
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_card_group_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-card-group-item',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => '
            hidden,
            tt_content,
            header
        ',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.header;header,image,bodytext,--palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link;link,icon_file,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--palette--;;hiddenLanguagePalette',
          'columnsOverrides' => 
          array (
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'header' => 
        array (
          'showitem' => '
                header,
                --linebreak--,
                subheader,
            ',
        ),
        'link' => 
        array (
          'showitem' => '
                link,
                link_title,
                --linebreak--,
                link_icon,
                link_class,
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType="card_group"',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'allowNonIdValues' => true,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_card_group_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_card_group_item.pid=###CURRENT_PID### AND tx_bootstrappackage_card_group_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    title,
                                    alternative,
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.bodytext',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,images,email[subst],url',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
          ),
        ),
        'link' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'link_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'link_icon' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_icon',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'link_icon',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'link_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'primary',
                1 => 'primary',
              ),
              2 => 
              array (
                0 => 'secondary',
                1 => 'secondary',
              ),
              3 => 
              array (
                0 => 'success',
                1 => 'success',
              ),
              4 => 
              array (
                0 => 'info',
                1 => 'info',
              ),
              5 => 
              array (
                0 => 'warning',
                1 => 'warning',
              ),
              6 => 
              array (
                0 => 'danger',
                1 => 'danger',
              ),
              7 => 
              array (
                0 => 'outline-default',
                1 => 'outline-default',
              ),
              8 => 
              array (
                0 => 'outline-primary',
                1 => 'outline-primary',
              ),
              9 => 
              array (
                0 => 'outline-secondary',
                1 => 'outline-secondary',
              ),
              10 => 
              array (
                0 => 'outline-success',
                1 => 'outline-success',
              ),
              11 => 
              array (
                0 => 'outline-info',
                1 => 'outline-info',
              ),
              12 => 
              array (
                0 => 'outline-warning',
                1 => 'outline-warning',
              ),
              13 => 
              array (
                0 => 'outline-danger',
                1 => 'outline-danger',
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_carousel_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item',
        'type' => 'item_type',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'item_type',
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-carousel-item',
          'header' => 'content-bootstrappackage-carousel-item-header',
          'call_to_action' => 'content-bootstrappackage-carousel-item-calltoaction',
          'image' => 'content-bootstrappackage-carousel-item-image',
          'text_and_image' => 'content-bootstrappackage-carousel-item-textandimage',
          'background_image' => 'content-bootstrappackage-carousel-item-backgroundimage',
          'html' => 'content-bootstrappackage-carousel-item-html',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => '
            hidden,
            tt_content,
            header,
            header_layout,
            header_class,
            subheader,
            subheader_layout,
            subheader_class
            bodytext,
            image,
            text_color,
            background_color,
            background_image
        ',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,nav_title,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--palette--;;hiddenLanguagePalette',
        ),
        'header' => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,nav_title,text_color,link,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,background_color,background_image,background_image_options,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--palette--;;hiddenLanguagePalette',
        ),
        'call_to_action' => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,nav_title,bodytext,button_text,link,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,background_color,background_image,background_image_options,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--palette--;;hiddenLanguagePalette',
        ),
        'image' => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,nav_title,image,link,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,background_color,background_image,background_image_options,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--palette--;;hiddenLanguagePalette',
        ),
        'text_and_image' => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,nav_title,bodytext,text_color,image,link,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,background_color,background_image,background_image_options,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--palette--;;hiddenLanguagePalette',
        ),
        'background_image' => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,nav_title,background_color,background_image,background_image_options,link,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--palette--;;hiddenLanguagePalette',
        ),
        'html' => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,nav_title,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,background_color,background_image,background_image_options,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--palette--;;hiddenLanguagePalette',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'header' => 
        array (
          'showitem' => '
                header,
                header_layout,
                header_class,
                --linebreak--,
                subheader,
                subheader_layout,
                subheader_class,
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content,
                item_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType IN ("carousel","carousel_small","carousel_fullscreen")',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'item_type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.header',
                1 => 'header',
                2 => 'content-bootstrappackage-carousel-item-header',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.calltoaction',
                1 => 'call_to_action',
                2 => 'content-bootstrappackage-carousel-item-calltoaction',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.image',
                1 => 'image',
                2 => 'content-bootstrappackage-carousel-item-image',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.textandimage',
                1 => 'text_and_image',
                2 => 'content-bootstrappackage-carousel-item-textandimage',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.backgroundimage',
                1 => 'background_image',
                2 => 'content-bootstrappackage-carousel-item-backgroundimage',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.html',
                1 => 'html',
                2 => 'content-bootstrappackage-carousel-item-html',
              ),
            ),
            'default' => 'header',
            'authMode' => 'explicitAllow',
            'authMode_enforce' => 'strict',
          ),
          'l10n_mode' => 'exclude',
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'allowNonIdValues' => true,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_carousel_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_carousel_item.pid=###CURRENT_PID### AND tx_bootstrappackage_carousel_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'link' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.link',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'header_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'H1',
                1 => '1',
              ),
              1 => 
              array (
                0 => 'H2',
                1 => '2',
              ),
              2 => 
              array (
                0 => 'H3',
                1 => '3',
              ),
              3 => 
              array (
                0 => 'H4',
                1 => '4',
              ),
            ),
            'default' => '1',
          ),
          'l10n_mode' => 'exclude',
        ),
        'header_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 'none',
              ),
              1 => 
              array (
                0 => 'h1',
                1 => 'h1',
              ),
              2 => 
              array (
                0 => 'h2',
                1 => 'h2',
              ),
              3 => 
              array (
                0 => 'h3',
                1 => 'h3',
              ),
              4 => 
              array (
                0 => 'h4',
                1 => 'h4',
              ),
              5 => 
              array (
                0 => 'h5',
                1 => 'h5',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'subheader_layout' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.subheader_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'H2',
                1 => '2',
              ),
              1 => 
              array (
                0 => 'H3',
                1 => '3',
              ),
              2 => 
              array (
                0 => 'H4',
                1 => '4',
              ),
            ),
            'default' => '2',
          ),
          'l10n_mode' => 'exclude',
        ),
        'subheader_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.subheader_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 'none',
              ),
              1 => 
              array (
                0 => 'h1',
                1 => 'h1',
              ),
              2 => 
              array (
                0 => 'h2',
                1 => 'h2',
              ),
              3 => 
              array (
                0 => 'h3',
                1 => 'h3',
              ),
              4 => 
              array (
                0 => 'h4',
                1 => 'h4',
              ),
              5 => 
              array (
                0 => 'h5',
                1 => 'h5',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '5',
            'softref' => 'typolink_tag,images,email[subst],url',
          ),
        ),
        'button_text' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.button_text',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'large' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'medium' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'small' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'extrasmall' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    title,
                                    alternative,
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'text_color' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.text_color',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'colorpicker',
            'default' => '#FFFFFF',
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_color' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.background_color',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'colorpicker',
            'default' => '#333333',
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.background_image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'background_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'large' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'medium' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'small' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'extrasmall' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image_options' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_image_options',
          'config' => 
          array (
            'type' => 'flex',
            'ds' => 
            array (
              'default' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/BackgroundImage.xml',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_icon_group_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-icon-group-item',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => '
            hidden,
            tt_content,
            header
        ',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,subheader,link,icon_file,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--palette--;;hiddenLanguagePalette',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType="icon_group"',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'allowNonIdValues' => true,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_icon_group_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_icon_group_item.pid=###CURRENT_PID### AND tx_bootstrappackage_icon_group_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'subheader' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'link' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.link',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
          'l10n_mode' => 'exclude',
        ),
        'icon_file' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.icon_file',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 1,
            'maxitems' => 1,
          ),
          'l10n_mode' => 'exclude',
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_tab_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'bodytext',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-tab-item',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => '
            hidden,
            tt_content,
            header,
            bodytext
        ',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,bodytext,media,--palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaposition;mediaposition,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--palette--;;hiddenLanguagePalette',
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'mediaposition' => 
        array (
          'showitem' => '
                mediaorient,
                imagecols,
                image_zoom,
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType="tab"',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'allowNonIdValues' => true,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_tab_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_tab_item.pid=###CURRENT_PID### AND tx_bootstrappackage_tab_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,images,email[subst],url',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
          ),
        ),
        'mediaorient' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.left',
                1 => 'left',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.top',
                1 => 'top',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.right',
                1 => 'right',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.bottom',
                1 => 'bottom',
              ),
            ),
            'default' => 'left',
          ),
          'l10n_mode' => 'exclude',
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '1',
                1 => 1,
              ),
              1 => 
              array (
                0 => '2',
                1 => 2,
              ),
              2 => 
              array (
                0 => '3',
                1 => 3,
              ),
              3 => 
              array (
                0 => '4',
                1 => 4,
              ),
              4 => 
              array (
                0 => '5',
                1 => 5,
              ),
              5 => 
              array (
                0 => '6',
                1 => 6,
              ),
            ),
            'default' => 2,
          ),
          'l10n_mode' => 'exclude',
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_timeline_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_userFunc' => 'BK2K\\BootstrapPackage\\Userfuncs\\Tca->timelineItemLabel',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'default_sortby' => 'date',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-timeline-item',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => '
            hidden,
            tt_content,
            header
        ',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,date,header,bodytext,icon_file,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--palette--;;hiddenLanguagePalette',
          'columnsOverrides' => 
          array (
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType="timeline"',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'allowNonIdValues' => true,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_timeline_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_timeline_item.pid=###CURRENT_PID### AND tx_bootstrappackage_timeline_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'date' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.date',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'dbType' => 'date',
            'eval' => 'date,required',
            'default' => '0000-00-00',
          ),
          'l10n_mode' => 'exclude',
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,images,email[subst],url',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
          ),
        ),
        'icon_file' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.icon_file',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
          'l10n_mode' => 'exclude',
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    title,
                                    alternative,
                                    description,
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_hofexpressapp_domain_model_address' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_address',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'name,street,region,house_number',
        'iconfile' => 'EXT:hofexpress_app/Resources/Public/Icons/tx_hofexpressapp_domain_model_address.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, street, region, zipcode, house_number',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,name,street,region,zipcode,house_number,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_hofexpressapp_domain_model_address',
            'foreign_table_where' => 'AND `tx_hofexpressapp_domain_model_address`.`pid`=###CURRENT_PID### AND `tx_hofexpressapp_domain_model_address`.`sys_language_uid` IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_address.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'street' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_address.street',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'region' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_address.region',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'zipcode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_address.zipcode',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'eval' => 'int,required',
          ),
        ),
        'house_number' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_address.house_number',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
      ),
    ),
    'tx_hofexpressapp_domain_model_customer' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_customer',
        'label' => 'user_id',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => '',
        'iconfile' => 'EXT:hofexpress_app/Resources/Public/Icons/tx_hofexpressapp_domain_model_customer.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, user_id, phone_number, address',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,user_id,phone_number,address,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_hofexpressapp_domain_model_customer',
            'foreign_table_where' => 'AND `tx_hofexpressapp_domain_model_customer`.`pid`=###CURRENT_PID### AND `tx_hofexpressapp_domain_model_customer`.`sys_language_uid` IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'user_id' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_customer.user_id',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'eval' => 'int,required',
          ),
        ),
        'phone_number' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_customer.phone_number',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'eval' => 'int,required',
          ),
        ),
        'address' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_customer.address',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_hofexpressapp_domain_model_address',
            'default' => 0,
            'size' => 10,
            'autoSizeMax' => 30,
            'maxitems' => 9999,
            'multiple' => 0,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
              ),
              'addRecord' => 
              array (
                'disabled' => false,
              ),
              'listModule' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
      ),
    ),
    'tx_hofexpressapp_domain_model_deliverytype' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_deliverytype',
        'label' => 'home_or_take_type',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'home_or_take_type',
        'iconfile' => 'EXT:hofexpress_app/Resources/Public/Icons/tx_hofexpressapp_domain_model_deliverytype.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, home_or_take_type',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,home_or_take_type,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_hofexpressapp_domain_model_deliverytype',
            'foreign_table_where' => 'AND `tx_hofexpressapp_domain_model_deliverytype`.`pid`=###CURRENT_PID### AND `tx_hofexpressapp_domain_model_deliverytype`.`sys_language_uid` IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'home_or_take_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_deliverytype.home_or_take_type',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
      ),
    ),
    'tx_hofexpressapp_domain_model_food' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_food',
        'label' => 'food_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'food_name,food_type',
        'iconfile' => 'EXT:hofexpress_app/Resources/Public/Icons/tx_hofexpressapp_domain_model_food.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, food_name, price, food_type, image, foodmenu, food_types',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,food_name,price,food_type,image,foodmenu,food_types,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_hofexpressapp_domain_model_food',
            'foreign_table_where' => 'AND `tx_hofexpressapp_domain_model_food`.`pid`=###CURRENT_PID### AND `tx_hofexpressapp_domain_model_food`.`sys_language_uid` IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'food_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_food.food_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'price' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_food.price',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'double2,required',
          ),
        ),
        'food_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_food.food_type',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_food.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'tx_hofexpressapp_domain_model_food',
              'table_local' => 'sys_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'maxitems' => 999,
          ),
        ),
        'foodmenu' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_food.foodmenu',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_hofexpressapp_domain_model_restaurantmenu',
            'default' => 0,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'food_types' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_food.food_types',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_hofexpressapp_domain_model_foodtype',
            'default' => 0,
            'size' => 10,
            'autoSizeMax' => 30,
            'maxitems' => 9999,
            'multiple' => 0,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
              ),
              'addRecord' => 
              array (
                'disabled' => false,
              ),
              'listModule' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
      ),
    ),
    'tx_hofexpressapp_domain_model_foodtype' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_foodtype',
        'label' => 'select_food_type',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'select_food_type',
        'iconfile' => 'EXT:hofexpress_app/Resources/Public/Icons/tx_hofexpressapp_domain_model_foodtype.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, select_food_type',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,select_food_type,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_hofexpressapp_domain_model_foodtype',
            'foreign_table_where' => 'AND `tx_hofexpressapp_domain_model_foodtype`.`pid`=###CURRENT_PID### AND `tx_hofexpressapp_domain_model_foodtype`.`sys_language_uid` IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'select_food_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_foodtype.select_food_type',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
      ),
    ),
    'tx_hofexpressapp_domain_model_order' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_order',
        'label' => 'total_amount',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'status',
        'iconfile' => 'EXT:hofexpress_app/Resources/Public/Icons/tx_hofexpressapp_domain_model_order.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, total_amount, status, order_status, delivery, customer, order_items',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,total_amount,status,order_status,delivery,customer,order_items,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_hofexpressapp_domain_model_order',
            'foreign_table_where' => 'AND `tx_hofexpressapp_domain_model_order`.`pid`=###CURRENT_PID### AND `tx_hofexpressapp_domain_model_order`.`sys_language_uid` IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'total_amount' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_order.total_amount',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'eval' => 'int',
          ),
        ),
        'status' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_order.status',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'order_status' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_order.order_status',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_hofexpressapp_domain_model_orderstatus',
            'default' => 0,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'delivery' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_order.delivery',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_hofexpressapp_domain_model_deliverytype',
            'default' => 0,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'customer' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_order.customer',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_hofexpressapp_domain_model_customer',
            'default' => 0,
            'size' => 10,
            'autoSizeMax' => 30,
            'maxitems' => 1,
            'multiple' => 0,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
              ),
              'addRecord' => 
              array (
                'disabled' => false,
              ),
              'listModule' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
        'order_items' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_order.order_items',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_hofexpressapp_domain_model_orderitems',
            'foreign_field' => 'tx_order',
            'maxitems' => 9999,
            'appearance' => 
            array (
              'collapseAll' => 0,
              'levelLinksPosition' => 'top',
              'showSynchronizationLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'showAllLocalizationLink' => 1,
            ),
          ),
        ),
      ),
    ),
    'tx_hofexpressapp_domain_model_orderitems' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_orderitems',
        'label' => 'quantity',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => '',
        'iconfile' => 'EXT:hofexpress_app/Resources/Public/Icons/tx_hofexpressapp_domain_model_orderitems.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, quantity, food, tx_hofexpressapp_order',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,quantity,food,tx_hofexpressapp_order,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_hofexpressapp_domain_model_orderitems',
            'foreign_table_where' => 'AND `tx_hofexpressapp_domain_model_orderitems`.`pid`=###CURRENT_PID### AND `tx_hofexpressapp_domain_model_orderitems`.`sys_language_uid` IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'quantity' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_orderitems.quantity',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'eval' => 'int',
          ),
        ),
        'food' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_orderitems.food',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_hofexpressapp_domain_model_food',
            'default' => 0,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'tx_hofexpressapp_order' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_orderitems.tx_hofexpressapp_order',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_hofexpressapp_domain_model_order',
            'default' => 0,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'tx_order' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
    ),
    'tx_hofexpressapp_domain_model_orderstatus' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_orderstatus',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'name,description',
        'iconfile' => 'EXT:hofexpress_app/Resources/Public/Icons/tx_hofexpressapp_domain_model_orderstatus.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, description',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,name,description,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_hofexpressapp_domain_model_orderstatus',
            'foreign_table_where' => 'AND `tx_hofexpressapp_domain_model_orderstatus`.`pid`=###CURRENT_PID### AND `tx_hofexpressapp_domain_model_orderstatus`.`sys_language_uid` IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_orderstatus.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_orderstatus.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
          ),
        ),
      ),
    ),
    'tx_hofexpressapp_domain_model_restaurant' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_restaurant',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'name,description,address,restaurant_type',
        'iconfile' => 'EXT:hofexpress_app/Resources/Public/Icons/tx_hofexpressapp_domain_model_restaurant.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, description, logo, address, restaurant_type, cover_image, menu, food, order_items',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,name,description,logo,address,restaurant_type,cover_image,menu,food,order_items,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_hofexpressapp_domain_model_restaurant',
            'foreign_table_where' => 'AND `tx_hofexpressapp_domain_model_restaurant`.`pid`=###CURRENT_PID### AND `tx_hofexpressapp_domain_model_restaurant`.`sys_language_uid` IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_restaurant.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_restaurant.description',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            'fieldControl' => 
            array (
              'fullScreenRichtext' => 
              array (
                'disabled' => false,
              ),
            ),
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim,required',
          ),
        ),
        'logo' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_restaurant.logo',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'logo',
              'tablenames' => 'tx_hofexpressapp_domain_model_restaurant',
              'table_local' => 'sys_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'maxitems' => 1,
            'minitems' => 1,
          ),
        ),
        'address' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_restaurant.address',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim,required',
          ),
        ),
        'restaurant_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_restaurant.restaurant_type',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'cover_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_restaurant.cover_image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'cover_image',
              'tablenames' => 'tx_hofexpressapp_domain_model_restaurant',
              'table_local' => 'sys_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'maxitems' => 1,
          ),
        ),
        'menu' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_restaurant.menu',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_hofexpressapp_domain_model_restaurantmenu',
            'default' => 0,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'food' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_restaurant.food',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_hofexpressapp_domain_model_food',
            'default' => 0,
            'size' => 10,
            'autoSizeMax' => 30,
            'maxitems' => 9999,
            'multiple' => 0,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
              ),
              'addRecord' => 
              array (
                'disabled' => false,
              ),
              'listModule' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
        'order_items' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_restaurant.order_items',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_hofexpressapp_domain_model_orderitems',
            'default' => 0,
            'size' => 10,
            'autoSizeMax' => 30,
            'maxitems' => 9999,
            'multiple' => 0,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
              ),
              'addRecord' => 
              array (
                'disabled' => false,
              ),
              'listModule' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
      ),
    ),
    'tx_hofexpressapp_domain_model_restaurantmenu' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_restaurantmenu',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'name,description',
        'iconfile' => 'EXT:hofexpress_app/Resources/Public/Icons/tx_hofexpressapp_domain_model_restaurantmenu.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, description',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,name,description,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_hofexpressapp_domain_model_restaurantmenu',
            'foreign_table_where' => 'AND `tx_hofexpressapp_domain_model_restaurantmenu`.`pid`=###CURRENT_PID### AND `tx_hofexpressapp_domain_model_restaurantmenu`.`sys_language_uid` IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_restaurantmenu.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpressapp_domain_model_restaurantmenu.description',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            'fieldControl' => 
            array (
              'fullScreenRichtext' => 
              array (
                'disabled' => false,
              ),
            ),
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
          ),
        ),
      ),
    ),
  ),
  'categoryRegistry' => 'O:40:"TYPO3\\CMS\\Core\\Category\\CategoryRegistry":4:{s:11:"' . "\0" . '*' . "\0" . 'registry";a:3:{s:5:"pages";a:1:{s:10:"categories";a:1:{s:8:"position";s:18:"replace:categories";}}s:17:"sys_file_metadata";a:1:{s:10:"categories";a:1:{s:8:"position";s:18:"replace:categories";}}s:10:"tt_content";a:1:{s:10:"categories";a:1:{s:8:"position";s:18:"replace:categories";}}}s:13:"' . "\0" . '*' . "\0" . 'extensions";a:1:{s:4:"core";a:3:{s:5:"pages";a:1:{s:10:"categories";s:10:"categories";}s:17:"sys_file_metadata";a:1:{s:10:"categories";s:10:"categories";}s:10:"tt_content";a:1:{s:10:"categories";s:10:"categories";}}}s:20:"' . "\0" . '*' . "\0" . 'addedCategoryTabs";a:3:{s:5:"pages";s:5:"pages";s:17:"sys_file_metadata";s:17:"sys_file_metadata";s:10:"tt_content";s:10:"tt_content";}s:11:"' . "\0" . '*' . "\0" . 'template";s:60:"


CREATE TABLE %s (
  %s int(11) DEFAULT \'0\' NOT NULL
);


";}',
);
#