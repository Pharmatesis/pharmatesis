<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <form action="index.php?action=registerUser" id="register-form" method="get">
                <div class="form-group">
                    <label for="email">Email: </label><input class="form-control" type="text" name="email" id="email" />
                </div>                
                <div class="form-group">
                    <label for="password">Password: </label><input class="form-control" type="password" name="password" id="password"/>
                </div>              
                <div class="form-group">
                    <label for="name">Name: </label><input class="form-control" type="text" name="name" id="name"/>
                </div>
                <div class="form-group">
                    <label for="surnames">Surnames: </label><input class="form-control" type="text" name="surnames" id="surnames"/>
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday: </label><input class="form-control" type="text" name="birthday" id="birthday"/>
                </div>
                <div class="form-group">
                    <label for="profession">Profession: </label><input class="form-control" type="text" name="profession" id="profession"/>
                </div>
                <div class="form-group">
                    <label for="specialism">Specialism: </label><input class="form-control" type="text" name="specialism" id="specialism"/>
                </div>                
                <div class="btn-group">
                    <button class="btn btn-primary" type="submit" name="register" id="register">Register</button>
                </div>
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
