<?php
/**
 * (C)2020-2099 TanCan All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
#载入模板
$page['body_class'] = 'mdui-drawer-body-left mdui-theme-primary-indigo mdui-theme-accent-pink mdui-color-grey-100 mdui-loaded';
$page['body_file'] = (Usr_TP_P_PATH.'AC-write.html');
require(Usr_TP_PATH.'main.php');

$Cofecho_DB_Class = new Cofecho_DB_Class();
if (isset($_POST['submit'])) {
    $title = trim(htmlspecialchars($_POST['title']));
    $text = $_POST['text'];
    if ($_POST['title'] == '') {
        $error_tip = '"标题不能为空！"';
        echo ('<script>mdui.snackbar({
            message: '.$error_tip.',
            position: "right-top",
            timeout: "5000"
            });</script>');
        exit;
    }elseif($_POST['text'] == ''){
        $error_tip = '"内容不能为空！"';
        echo ('<script>mdui.snackbar({
            message: '.$error_tip.',
            position: "right-top",
            timeout: "5000"
            });</script>');
        exit;
    }else {
        $time = date('Y-m-d H:i:s');
        $sql = "INSERT INTO `Cofecho_Contents` (`cid`, `title`, `text`, `created`, `modified`) VALUES (NULL, '$title', '$text', '$time', '$time')";
        $Cofecho_DB_Class->query($sql);
    }
    $error_tip = '"提交成功！"';
    echo ('<script>mdui.snackbar({
        message: '.$error_tip.',
        position: "right-top",
        timeout: "5000"
        });</script>');
    exit;
}
