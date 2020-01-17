
<div class="">

    <h3 class="well  bg-light text-center table-bordered">User Login</h3>

    <div class="">
        <form method="post" action="<? $_SERVER['PHP_SELF'];  ?>">


            <div class="form-group">
                <label for="link">Email</label>
                <input id="email" type="text" name="email" class="form-control" placeholder="Input your email"/>
            </div>

            <div class="form-group">
                <label for="link">Password</label>
                <input id="password" type="password" name="password" class="form-control" placeholder="Input password"/>
            </div>


            <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
            <a href="<?= ROOT_PATH; ?>" class="btn btn-danger">Cancel</a>
        </form>

    </div>
</div>