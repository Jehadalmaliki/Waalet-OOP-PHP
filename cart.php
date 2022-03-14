<?php include 'Partiales/header.php' ?>

<main class="p-5">
    <?php if (isset($cart->msg)) {?>
        <div class="alert alert-<?php if(array_keys($cart->msg)[0] == 'success') echo 'success'; else echo 'danger' ?>"  role="alert">
            <?php print_r(array_values($cart->msg)[0]) ?>
        </div>
    <?php } ?>
    <?php if (isset($withdraw->msg)) {?>
        <div class="alert alert-<?php if(array_keys($withdraw->msg)[0] == 'success') echo 'success'; else echo 'danger' ?>"  role="alert">
            <?php print_r(array_values($withdraw->msg)[0]) ?>
        </div>
    <?php } ?>
    <div class="container-lg table-responsive">
        <table class="table  table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">total</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'Partiales/item-cart.php' ?>
            </tbody>
        </table>
    </div>
</main>

<!-- Modal confirm the order -->
<?php include 'Modals/wthdraw.php'; ?>

<!-- Modal confirm the empty cart -->
<?php include 'Modals/emptyCart.php'; ?>

<?php include 'Partiales/footer.php' ?>