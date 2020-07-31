<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cn">
<?include(Usr_T_PATH.'head.html')?>
<?include(Usr_T_PATH.'header.html')?>
<?include(Usr_T_PATH.'list.html')?>
    <body class="<?=$page['body_class']?>">
        <div id="loading" class="loading"></div>
        <div id="pjax-container">
        <?include($page['body_file'])?>
        <?include(Usr_Tpi_PATH.'dialog.inc.html')?>
        <?include(Usr_T_PATH.'footer.html')?>
        </div>
    </body>
</html>