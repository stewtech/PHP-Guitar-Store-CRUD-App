<?php include '../view/header.php'; ?>
<div id="main">
    <?php include '../view/categories_nav.php'?>
    <div id="content">
        <h1><?php echo $category_name; ?></h1>
        <ul class="nav">
            <?php foreach ($products as $product) : ?>
            <li>
                <a href="?action=view_product&product_id=
                    <?php echo $product['productID']; ?>">
                    <?php echo $product['productName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php include '../view/footer.php'; ?>

