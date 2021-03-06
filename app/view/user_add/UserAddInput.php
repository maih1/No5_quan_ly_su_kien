<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web/css/UserAdd.css" type="text/css" />
    <script type="text/javascript" async src="../web/js/RealFileBtn.js"></script>
    <title>Đăng ký người dùng</title>
</head>

<body>

    <form method="POST" action="" enctype="multipart/form-data">
        <button id="back-home" name="back-home" >Quay lại</button><br>

        <!-- User name -->
        <?php if (getError('name')) { ?>
            <span class="error"><?php echo getError('name'); ?></span><br>
        <?php } ?>
        <label class="input-form" for="name">Họ và tên</label>
        <input id="name" type="text" name="name" maxlength="100" value="<?php getValue($name, 'name'); ?>"><br>

        <!-- User type -->
        <?php if (getError('type')) { ?>
            <span class="error"><?php echo getError('type'); ?></span><br>
        <?php } ?>
        <label class="input-form" for="type"><?php echo "Phân loại"; ?></label>
        <?php foreach($_type as $i => $i_value){ ?>
            <input class="radio_type" type="radio" name="type" 
                <?php 
                if (isset($type) && $type == $i) {
                    echo "checked";
                } elseif ((isset($_SESSION['checkUserAdd']) && $_SESSION['checkUserAdd'] == 5) && isset($_SESSION['type'])){
                    
                    if($i == $_SESSION['type']){
                        echo "checked";
                    }
                      
                }
                ?> value="<?=$i?>">
            <label for="radio_gender"><?php echo $i;?></label>
        <?php } ?><br>
        <br>
        <!-- User id -->
        <?php if (getError('user_id')) { ?>
            <span class="error"><?php echo getError('user_id'); ?></span><br>
        <?php } ?>
        <label class="input-form" for="user_id">ID</label>
        <input id="user-id" type="text" name="user_id" maxlength="250" value="<?php getValue($user_id, 'user_id'); ?>"><br>

        <!-- User avatar -->
        <?php if (getError('avatar')) { ?>
            <span class="error"><?php echo getError('avatar'); ?></span><br>
        <?php } ?>
        <label class="input-form" for="avatar">Avatar</label>
        <input type="file" id="real-file" name="upload-file" hidden="hidden" accept="image/*" />
        <input id="custom-text" type="text" name="avatar" readonly="readonly" value="<?php getValue($avatar, 'nameAvatar'); ?>">
        <button type="button" id="custom-button">Browse</button><br>

        <!-- User description -->
        <?php if (getError('description')) { ?>
            <span class="error"><?php echo getError('description'); ?></span><br>
        <?php } ?>
        <label class="input-form" for="description">Mô tả thêm</label>
        <textarea id="description" name="description" maxlength="1000"><?php getValue($description, 'description'); ?></textarea><br>

        <div class="button-submit">
            <button class="center-block" name='submit' formaction="<?php isConfirm(); ?>">Xác Nhận</button>
        </div>

    </form>

</body>

</html>