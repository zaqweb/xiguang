<?php /* Smarty version 2.6.26, created on 2016-02-15 15:18:00
         compiled from menu.htm */ ?>
<div id="menu">
 <ul class="top">
  <li><a href="index.php"><i class="home"></i><em><?php echo $this->_tpl_vars['lang']['menu_home']; ?>
<?php if ($this->_tpl_vars['unum']['system']): ?><span class="unum"><span><?php echo $this->_tpl_vars['unum']['system']; ?>
</span></span><?php endif; ?></em></a></li>
 </ul>
 
 <?php if (! $this->_tpl_vars['workspace']['menu_column'] && ! $this->_tpl_vars['workspace']['menu_single']): ?>
 <?php $_from = $this->_tpl_vars['workspace']['menu_simple']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
 <ul>
  <li<?php if ($this->_tpl_vars['cur'] == $this->_tpl_vars['menu']['unique_id']): ?> class="cur"<?php endif; ?>><a href="page.php?rec=edit&id=<?php echo $this->_tpl_vars['menu']['id']; ?>
"><i></i><em><?php echo $this->_tpl_vars['menu']['page_name']; ?>
</em></a></li>
  <?php $_from = $this->_tpl_vars['menu']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['child']):
?>
  <li<?php if ($this->_tpl_vars['cur'] == $this->_tpl_vars['child']['unique_id']): ?> class="cur"<?php endif; ?>><a href="page.php?rec=edit&id=<?php echo $this->_tpl_vars['child']['id']; ?>
"><i class="menuPage"></i><em><?php echo $this->_tpl_vars['child']['page_name']; ?>
</em></a></li>
  <?php endforeach; endif; unset($_from); ?>
 </ul>
 <?php endforeach; endif; unset($_from); ?>
 <?php endif; ?>
 <?php $_from = $this->_tpl_vars['workspace']['menu_column']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
 <ul>
  <li<?php if ($this->_tpl_vars['cur'] == $this->_tpl_vars['menu']['name_category']): ?> class="cur"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['menu']['name_category']; ?>
.php"><i class="<?php echo $this->_tpl_vars['menu']['name']; ?>
Cat"></i><em><?php echo $this->_tpl_vars['menu']['lang_category']; ?>
</em></a></li>
  <li<?php if ($this->_tpl_vars['cur'] == $this->_tpl_vars['menu']['name']): ?> class="cur"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['menu']['name']; ?>
.php"><i class="<?php echo $this->_tpl_vars['menu']['name']; ?>
"></i><em><?php echo $this->_tpl_vars['menu']['lang']; ?>
</em></a></li>
 </ul>
 <?php endforeach; endif; unset($_from); ?>
 <?php if ($this->_tpl_vars['workspace']['menu_single']): ?>
 <ul>
  <?php $_from = $this->_tpl_vars['workspace']['menu_single']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
  <li<?php if ($this->_tpl_vars['cur'] == $this->_tpl_vars['menu']['name']): ?> class="cur"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['menu']['name']; ?>
.php"><i class="<?php echo $this->_tpl_vars['menu']['name']; ?>
"></i><em><?php echo $this->_tpl_vars['menu']['lang']; ?>
<?php if ($this->_tpl_vars['menu']['name'] == 'plugin'): ?><?php if ($this->_tpl_vars['unum']['plugin']): ?><span class="unum"><span><?php echo $this->_tpl_vars['unum']['plugin']; ?>
</span></span><?php endif; ?><?php endif; ?></em></a></li>
  <?php endforeach; endif; unset($_from); ?>
 </ul>
 <?php endif; ?>
 <ul class="bot">
  <li<?php if ($this->_tpl_vars['cur'] == 'backup'): ?> class="cur"<?php endif; ?>><a href="backup.php"><i class="backup"></i><em><?php echo $this->_tpl_vars['lang']['backup']; ?>
</em></a></li>
  <li<?php if ($this->_tpl_vars['cur'] == 'manager'): ?> class="cur"<?php endif; ?>><a href="manager.php"><i class="manager"></i><em><?php echo $this->_tpl_vars['lang']['manager']; ?>
</em></a></li>
  <li<?php if ($this->_tpl_vars['cur'] == 'manager_log'): ?> class="cur"<?php endif; ?>><a href="manager.php?rec=manager_log"><i class="managerLog"></i><em><?php echo $this->_tpl_vars['lang']['manager_log']; ?>
</em></a></li>
 </ul>
</div>