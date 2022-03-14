<?php include 'Partiales/header.php' ?>

<?php include 'Oprations/wallet/deposit.php' ?>

<main>
    <?php if (isset($deposit->msg)) {?>
        <div class="alert alert-<?php if(array_keys($deposit->msg)[0] == 'success') echo 'success'; else echo 'danger' ?>" role="alert">
            <?php print_r(array_values($deposit->msg)[0]) ?>
        </div>
    <?php } ?>
    <div class="container d-flex justify-content-center align-items-center" style="height: 90vh;">
        <div class="card rounded w-50" style="background-image: linear-gradient(to right, #fc5c7d, #6a82fb);">
            <div class="card-header">
                <h4 class="text-primary">Deposit In Your Wallet </h4>
            </div>
            <div class="card-body p-5">
                <?php include 'Partiales/deposit.php'; ?>
            </div>
        </div>
    </div>
</main>

<?php include 'Partiales/footer.php' ?>