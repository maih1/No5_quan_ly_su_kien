<html>
<head>
	<title>Đăng ký sự kiện</title>
	<meta charset=UTF-8>
    <link rel="stylesheet" href="../web/css/EventAdd.css">
    <script type="text/javascript" async src="../web/js/RealFileBtn.js"></script>
</head>
<body>
    <form method="post" action="" enctype="multipart/form-data" >   
        <button id="back-home" name="back-home" >Quay lại</button><br>

        <?php if(getError('name')) {?>
            <span class="error"><?php  echo getError('name'); ?></span><br>
        <?php } ?>
        <label class="input-form" for="name">Tên sự kiện</label>
        <input id="name" type="text" name="name" value="<?php getValue($name, 'ev_add_name');?>"><br>        
        
        <?php if(getError('slogan')) {?>
            <span class="error"><?php  echo getError('slogan'); ?></span><br>
        <?php } ?>
        <label class="input-form" for="slogan">Slogan</label>
        <input id="slogan" type="text" name="slogan" value="<?php getValue($slogan, 'ev_add_slogan');?>"><br>        
        
        <?php if(getError('leader')) {?>
            <span class="error"><?php  echo getError('leader'); ?></span><br>
        <?php } ?>
        <label class="input-form" for="leader">Leader</label>
        <input id="leader" type="text" name="leader" value="<?php getValue($leader, 'ev_add_leader');?>"><br>        
        
        <?php if(getError('description')) {?>
            <span class="error"><?php  echo getError('description'); ?></span><br>
        <?php } ?>
        <label class="input-form" for="description">Mô tả chi tiết</label>
        <textarea id="description" name="description"><?php getValue($description, 'ev_add_des');?></textarea><br>        
        
        <?php if(getError('avatar')) {?>
            <span class="error"><?php  echo getError('avatar'); ?></span><br>
        <?php } ?>
        <label class="input-form" for="avatar">Avatar</label>
        <input type="file" id="real-file" name="upload-file" hidden="hidden" accept="image/*"/>
        <input id="custom-text" type="text" name="avatar" readonly="readonly" value="<?php getValue($avatar, 'ev_add_name_avatar');?>">
        <button type="button" id="custom-button">Browse</button><br>
        
        <div class="button-submit">
            <button class="center-block" type="submit" name='submit' formaction="<?php isConfirm(); ?>">Xác Nhận</button>    
        </div>      
  </form>
</body>
</html>