<?php
/**
 * (C)2020-2099 TanCan All rights reserved.
 * Cofecho [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
 
require_once(Var_C_PATH.'Cofecho_DB_Class.php');

/**
 * [Cofecho_Nkan_Class]
 */
class Cofecho_Nkan_Class extends Cofecho_DB_Class
{   
    protected $nkaninfo;
    protected $page;
    
    /**
     * 构造函数
     */
    public function __construct()
    {   
        parent::__construct();
    }
    
    # [ACInfo()] 文章信息查询
    public function ACInfo($acinfo,$cid){
        $sql = "SELECT * FROM Cofecho_Contents JOIN Cofecho_User WHERE `cid` = "."{$cid}";
        parent::query($sql);
        $rs = parent::fetchAll();
        return $rs[0][$acinfo];
    }
    
    # [NkanNUM()] 文章总数
    public function NkanNUM(){
        $sql = 'SELECT * FROM Cofecho_Contents';
        parent::query($sql);
        $rs = parent::fetchAll();
        return count($rs);
    }
    
    # [Mupage()] 文章分页
    public function Mupage($page,$PageSize){
        #根据页码取出数据：php->mysql的处理
         //编写sql获取分页数据SELECT * FROM 表名 LIMIT 起始位置,显示条数
        $sql = "select * from Cofecho_Contents JOIN Cofecho_User order by cid desc limit ".($page-1)*$PageSize .",$PageSize";
         //把sql语句传送到数据中
         parent::query($sql);
         //处理数据
        while($row = parent::fetch(PDO::FETCH_ASSOC)) {
            include(Usr_Tp_PATH.'aclist.html');
         }
         //获取数据总数
         $to_result = $this -> NkanNUM();
         //计算页数
         $to_pages=ceil($to_result/$PageSize);
         
        #显示数据+分页条
        $page_banner="";
        //计算偏移量
         $page_banner.="<div class='mdui-container mdui-valign'>";
         $page_banner.="<div class='mdui-center'>";
        if($page>1){
         $page_banner.="<a href='"."?p=1' class='mdui-btn mdui-btn-icon mdui-btn-dense mdui-color-indigo-accent mdui-ripple'><i class='mdui-icon material-icons'>&#xe020;</i></a>";
         $page_banner.="   ";
         $page_banner.="<a href='"."?p=".($page-1)."' class='mdui-btn mdui-btn-icon mdui-btn-dense mdui-color-indigo-accent mdui-ripple'><i class='mdui-icon material-icons'>&#xe5cb;</i></a>";
        }
        //初始化数据
         $start=1;
         $end=$to_pages;
         if ($to_pages>$ShowPage){
         if($page>$pageffset+1){
         $page_banner.="   ";
         }
         if ($page>$pageffset){
         $start=$page-$pageffset;
         $end=$to_pages>$page+$pageffset?$page+$pageffset:$to_pages;
         }else{
         $start=1;
         $end=$to_pages>$ShowPage?$ShowPage:$to_pages;
         }
         if ($page+$pageffset>$to_pages){
         $start=$start-($page+$pageffset-$end);
         }
         }
         for($i=$start;$i<=$end;$i++){
         $page_banner.="
         <a href='"."?p=".($i)."' class='mdui-btn mdui-btn-icon mdui-btn-dense mdui-color-indigo-accent mdui-ripple'>{$i}</a>
         ";
         }
         //尾部省略
         if ($to_pages>$ShowPage&&$to_pages>$page+$pageffset){
         $page_banner.="   ";
         $page_banner.="共{$to_pages}页";
         $page_banner.="   ";
         }
         if ($page<$to_pages){
         $page_banner.="<a href='"."?p=".($page+1)."' class='mdui-btn mdui-btn-icon mdui-btn-dense mdui-color-indigo-accent mdui-ripple'><i class='mdui-icon material-icons'>&#xe5cc;</i></a>";
         $page_banner.="   ";
         $page_banner.="<a href='"."?p=".($to_pages)."' class='mdui-btn mdui-btn-icon mdui-btn-dense mdui-color-indigo-accent mdui-ripple'><i class='mdui-icon material-icons'>&#xe01f;</i></a>";
         }
         $page_banner.="</div>";
         $page_banner.="</div>";
         echo $page_banner;
    } 
    
}