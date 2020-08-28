<?$Cofecho_DB_Class = new Cofecho_DB_Class();?>
<?$Cofecho_User_Class = new Cofecho_User_Class();?>
<?$ErrorM = new Cofecho_ErrorM();?>

<?if($Cofecho_User_Class->Check_Logon() == 1){?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cn">
<?require(Usr_TP_PATH.'head.html')?>
<?require(Usr_TP_PATH.'list.html')?>
<?require(Usr_TP_PATH.'header.html')?>
<body class="<?=$page['body_class']?>">
<!--style="background-image: url(//i.stay.pub/2020/08/08/815d733fbe803.png);"!-->
    <?require($page['body_file'])?>
    <?require(Usr_TP_PATH.'footer.html')?>
</body>
</html>
<?}else{?>
    <?header('location:/User/Login')?>
<?}?>