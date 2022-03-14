<form action="" method="POST">
    <div class="mb-3" style="background-image: linear-gradient(to right, #fc5c7d, #6a82fb);">
        <label for="formGroupExampleInput2" class="form-label">Amount:</label>
        <input type="number" name="amount" id="formGroupExampleInput2" placeholder="Enter Deposit amount" class="form-control <?php echo (!empty($deposit->amount_err)) ? 'is-invalid' : ''; ?>" style="background-image: linear-gradient(to right, #fc5c7d, #6a82fb);">
        <span class="invalid-feedback"><?php echo $deposit->amount_err;?></span>
    </div>
    <div class="mb-3">
        <button class="w-100 btn  btn-info" name="submit" value="submit" type="submit">Save</button>
    </div>
</form>