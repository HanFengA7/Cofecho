<?$Cofecho_DB_Class = new Cofecho_DB_Class();?>
<?$Cofecho_User_Class = new Cofecho_User_Class();?>
<?$Cofecho_Nkan_Class = new Cofecho_Nkan_Class();?>
<?$ErrorM = new Cofecho_ErrorM();?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cn">
<?include(Usr_T_PATH.'head.html')?>
<?include(Usr_T_PATH.'header.html')?>
<?include(Usr_T_PATH.'list.html')?>
    <body class="<?=$page['body_class']?>">
        <?include($page['body_file'])?>
        <?include(Usr_Tpi_PATH.'dialog.inc.html')?>
        <?include(Usr_T_PATH.'footer.html')?>
    </body>
</html>