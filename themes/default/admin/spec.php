
    <form action="<?php echo $this->url_for('admin', 'spec'); ?>" method="post">
	  <fieldset>
        <legend>Change your config</legend>
        <div class="clearfix">
          <label for="host">Host</label>
          <div class="input">
            <input class="medium" name="email" size="30" type="text" value="localhost" />
          </div>
        </div> <!-- /clearfix -->
        <div class="clearfix">
          <label for="user">User</label>
          <div class="input">
            <input class="medium" name="username" size="30" type="text" value="root" />
          </div>
        </div> <!-- /clearfix -->
        <div class="clearfix">
          <label for="password">Password</label>
          <div class="input">
            <input class="medium" name="password" size="30" type="password" value="" />
          </div>
        </div> <!-- /clearfix -->
        <div class="clearfix">
          <label for="database">Database</label>
          <div class="input">
            <input class="medium" name="database" size="30" type="text" value="rat" />
          </div>
		</div>
        <div class="clearfix">
          <label for="prefix">Table prefix</label>
          <div class="input">
            <input class="medium" name="prefix" size="30" type="text" value="" />
          </div>
		</div>
		<div class="actions">
          <button type="submit" class="btn primary">Login to your new app!</button>
        </div>
      </fieldset>
    </form>