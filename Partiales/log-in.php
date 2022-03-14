<form action="" method="post" style="background-image: linear-gradient(to right, #fc5c7d, #6a82fb);">
    <div class="mb-3" >
        <label for="formGroupExampleInput2" class="form-label">Email:</label>
        <input type="email" name="email" id="formGroupExampleInput2" placeholder="Your Email" class="form-control <?php echo (!empty($userLogin->email_err)) ? 'is-invalid' : ''; ?>" style="background-image: linear-gradient(to right, #fc5c7d, #6a82fb);">
        <span class="invalid-feedback"><?php echo $userLogin->email_err;?></span>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Password:</label>
        <input type="password" name="password" id="formGroupExampleInput2" placeholder="Your Password" class="form-control <?php echo (!empty($userLogin->password_err)) ? 'is-invalid' : ''; ?>"style="background-image: linear-gradient(to right, #fc5c7d, #6a82fb);">
        <span class="invalid-feedback"><?php echo $userLogin->password_err;?></span>
    </div>
    <div class="mb-3">
        <p class="fs-sm pt-3 mb-0">Don't have an account? 
            <a href="register.php" class="fw-medium" data-view="#modal-signup-view">Sign up</a>
        </p>
    </div>
    <div class="mb-3">
        <button class="w-100 btn  btn-info" name="login" type="submit">Sign up</button>
    </div>
</form>