
    <div class="mdui-drawer mdui-color-grey-50 mdui-drawer-close" id="main-drawer" >
      <div class="mdui-list" mdui-collapse="{accordion:true}" style="margin-bottom: 56px;">
        
            <a href="<?php echo $GLOBALS['url'] ?>/index.php">
              <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon Cofecho_icon Cofecho_icon_icon"></i>
                <div class="mdui-list-item-content">首  页</div>
              </li>
            </a>

            <a>
    		  <li class="mdui-list-item mdui-ripple" mdui-dialog="{target:'#ABOUT_AirBee'}">
				<i class="mdui-list-item-icon mdui-icon Cofecho_icon Cofecho_icon_iconfuzhi"></i>
				<div class="mdui-list-item-content">基友</div>
			  </li>
			</a>

          
            <a>
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon Cofecho_icon Cofecho_icon_xiuxiankafeiyule"></i>
                <span class="mdui-list-item-content mdui-text-color-theme-text">留言点滴</span>
                <span class="mdui-list-item-avatar" style="background: -webkit-linear-gradient(to right, #654ea3, #eaafc8);">
                    <?php 
                    echo("0");
                    //echo mysqli_num_rows( $ALLNUM );
                    ?>
                </span>
            </li>
            </a>
            
            
            <a>
    		  <li class="mdui-list-item mdui-ripple" mdui-dialog="{target:'#ABOUT_AirBee'}">
				<i class="mdui-list-item-icon mdui-icon Cofecho_icon Cofecho_icon_shoucang"></i>
				<div class="mdui-list-item-content">Cofecho</div>
			  </li>
			</a>
    
        </div>
      </div>