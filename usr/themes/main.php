<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cn">
<?php 
require(Usr_T_PATH.'/head.php');
require(Usr_T_PATH.'/header.php');
?>
    <body class="<?php echo($page['body_class']); ?>">
        <?php require(Usr_T_PATH.'/list.php'); ?>
        <?php require($page['body_file']); ?>
        <?php require(Usr_Tpi_PATH.'dialog.inc.html'); ?>
        <?php require(Usr_T_PATH.'footer.php'); ?>
    </body>
</html>