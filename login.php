<?php
include __DIR__.'/head.inc.php';
?>
<div class="row" id="content">
	<div class="pagination-centered">
		<h2>Аудентификация</h2>

           //вывод ошибок
            <?php if(isset($errors) && is_array($errors)): ?>
              <ul>
                <?php foreach ($errors as $error): ?> 
                  <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

	        <form class="form-horizontal">
          <div class="control-group">
            <label class="control-label">Username</label>
            <div class="controls input-prepend">
              <input type="text" id="inputEmail" placeholder="Username"><span class="add-on"><i class="icon-tag"></i></span>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Password</label>
            <div class="controls  input-prepend">
              <input type="password" id="inputPassword" placeholder="Password"><span class="add-on"><i class="icon-tags"></i></span>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
             <input type="submit" class="btn btn-success" name="sign" value="Sign in">
            </div>
          </div>
        </form>

     </div>	   
</div>
<?php
include __DIR__ . '/footer.inc.php';
?>