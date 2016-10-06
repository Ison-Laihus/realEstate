<ul id="lyk_gallery">
    <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?>
    <li onclick="selecton(this)">
        <img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>"/>
    </li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
<script type="text/javascript">
    var lis = document.getElementById('lyk_gallery').getElementsByTagName('li');
    lis[0].id = 'lyk_gallery_item_on';
    var showImg = document.getElementById('lyk_show_pic');

    function selecton(e) {
        for ( var i=0; i<lis.length; i++ ) {
            lis[i].id = '';
        }
        e.id = 'lyk_gallery_item_on';
        showImg.src = e.getElementsByTagName('img')[0].src;
    }
</script>