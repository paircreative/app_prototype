<?php require_once("header.php"); ?>
<main class="form-signin">
    <div class="container" style="padding: 85px;">   
            <div class="row valign-middle">
                    <div class="col-md-4 offset-md-4">
                            <form class="form-login">
                                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>

                                <div class="checkbox mb-3">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>
                                </div><br />
                                <button class="w-100 btn btn-lg btn-outline-success" type="submit">Sign in</button>
                                <br /><br />
                                <a href="">Forgot my password</a>
                            </form>
                    </div>
            </div>               
    </div>    
</div>

</main>
<?php require_once("footer.php"); ?>