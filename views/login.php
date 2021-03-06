<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <form action="index.php?action=loginUser" name="login-form" id="login-form" method="post">
                <div class="form-group">
                    <label for="email">Email: </label><input class="form-control" type="text" name="email" id="email" />
                </div>                
                <div class="form-group">
                    <label for="password">Password: </label><input class="form-control" type="password" name="password" id="password"/>
                </div>
                
                <div class="btn-group">
                    <button class="btn btn-primary" type="submit" name="login" id="login">Login</button>
                </div>
                <a href="#">Forgot your password?</a>
                <?php if(isset($msg)){ ?>
                    <div class="alert alert-success">
                        <?php echo $msg;  ?>
                    </div>
                <?php } ?>
                <?php if(isset($err)){ ?>
                    <div class="alert alert-danger">
                        <?php echo $err;  ?>
                    </div>
                <?php } ?>
            </form>            
        </div>
    </div>
</div>
