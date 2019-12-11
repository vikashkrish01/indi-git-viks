<?php
if (!getenv('TYPO3_ACTIVE_FRAMEWORK_EXTENSIONS')) {
    putenv('TYPO3_ACTIVE_FRAMEWORK_EXTENSIONS=' . 'about,adminpanel,backend,belog,beuser,core,extbase,extensionmanager,filelist,fluid,form,frontend,impexp,info,install,lowlevel,opendocs,recordlist,redirects,reports,rte_ckeditor,scheduler,seo,setup,sys_note,t3editor,tstemplate,viewpage');
}
