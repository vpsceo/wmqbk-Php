<?php if(!defined('wmblog'))exit;?>
<?php include "head.php";?>
  <div id="content" style="position: relative;">
    <div id="main">
   <?php foreach($list as $v){ ?>	 
      <div id="log-<?php echo $v['id']; ?>" class="post_list">
	  <?php if($v['title']<>""){?><h2><a href="<?php echo vurl($v['id']); ?>"><?php echo $v['title'];?></a></h2><?php } ?>
      <div class="excerpt">
	  <?php if($v['pic']<>""){ ?><div class="thumbnail"><a href="<?php echo vurl($v['id']); ?>"><img src="<?php echo $v['pic'];?>" /></a></div><?php } ?>
	  <div class="textPost"><a href="<?php echo vurl($v['id']); ?>"><?php echo $v['sum']; ?></a></div>	
	  </div>	
	  <div class="meta">
	  <p class="time"><?php echo timeago($v['atime']);?> 通过<?php echo $v['fm']; ?> <?php if($v['ist']==1){ ?><i style="color:#F60;padding-top:2px" class="iconfont">&#xe618;</i><?php } ?></p>
      <p class="navPost"><a href="<?php echo vurl($v['id']);?>"><i class="iconfont">&#xe61e;</i> 评论(<?php echo  $v['num']; ?>)</a> 
	 
	<?php  view_admin($v['id'],$v['ist'],0);?>
</p></div></div> 
 
<?php } ?>
	<div class="pagination">
		<span class="info"> 共计：<?php echo $count; ?> 条记录 每页:<?php echo $per_page; ?>条</span><?php echo $pagelist; ?>
	</div>
    </div> 
	<?php include ("right.php");?>
  </div>
  </div>
<?php include "foot.php";?>
</body>
</html>