<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Product List</title>
</head>
<body>
    <div class="container">
        <h1>Product List</h1>
        <div class="categories">
            <h2>Categories</h2>
            <ul>
                <!-- Use PHP to dynamically generate category links -->
                <?php
                // Replace with your actual database connection code
                $pdo = new PDO("mysql:host=localhost;dbname=admin_dashboard", 'root', '');
                $categories_query = "SELECT * FROM categories";
                $categories_result = $pdo->query($categories_query);
                foreach ($categories_result as $category) {
                    echo "<li><a href='?category_id={$category['category_id']}'>{$category['category_name']}</a></li>";
                }
                ?>
            </ul>
        </div>
        <div class="subcategories">
            <h2>Subcategories</h2>
            <ul>
                <!-- Use PHP to dynamically generate subcategory links -->
                <?php
                if (isset($_GET['category_id'])) {
                    $category_id = $_GET['category_id'];
                    $subcategories_query = "SELECT * FROM subcategories WHERE category_id = ?";
                    $stmt = $pdo->prepare($subcategories_query);
                    $stmt->execute([$category_id]);
                    $subcategories_result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($subcategories_result as $subcategory) {
                        echo "<li><a href='?subcategory_id={$subcategory['subcategory_id']}'>{$subcategory['subcategory_name']}</a></li>";
                    }
                }
                ?>
            </ul>
        </div>
        <div class="products">
            <h2>Products</h2>
            <ul>
                <!-- Use PHP to dynamically generate product list based on category or subcategory selection -->
                <?php
                if (isset($_GET['subcategory_id'])) {
                    $subcategory_id = $_GET['subcategory_id'];
                    $products_query = "SELECT * FROM products WHERE subcategory_id = ?";
                    $stmt = $pdo->prepare($products_query);
                    $stmt->execute([$subcategory_id]);
                    $products_result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($products_result as $product) {
                        echo "<li>{$product['product_name']}</li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
