<html>
<head>
	<title>Xác nhận đăng ký sự kiện</title>
	<meta charset=UTF-8>
    <link rel="stylesheet" href="../web/css/EventAdd.css">
</head>
<body>
    <form method="post" action="">   

        <label class="input-form" for="name">Tên sự kiện</label>
        <label class="add-confirm"><?php echo $_SESSION['ev_add_name']?></label><br>        
        
        <label class="input-form" for="slogan">Slogan</label>
        <label class="add-confirm"><?php echo $_SESSION['ev_add_slogan'];?></label><br>                
       
        <label class="input-form" for="slogan">Leader</label>
        <label class="add-confirm"><?php echo $_SESSION['ev_add_leader'];?></label><br>         
       
        <label class="input-form" for="description">Mô tả chi tiết</label>
        <label id="des"><?php echo $_SESSION['ev_add_des'];?></label><br>         
        
        <label class="input-form" for="avatar">Avatar</label>
        <img id="output" src="<?php echo '../'.$_SESSION['ev_add_avatar']; ?>"/>
        
        <div class="button-submit">
            <button class="center-block" name='back-page'  >Sửa lại</button>    
            <button class="center-block" name="submit-confirm" >Đăng ký</button>    
        </div>
  </form>
</body>
</html>