<!DOCTYPE html>
<html>
<head>
    <title>Products website</title>
</head>
<body>
    <h1>Welcome to our website</h1>
    <ul>
        <?php
            // we can use name of service as host name which is defined in docker-compose.yml file
            // because docker creates a network for all the services and in the network services can
            // access eachother by service name
            $json = file_get_contents('http://product-service');
            $obj = json_decode($json);

            $products = $obj->products;
            foreach ($products as $product) {
                echo "<li>$product</li>";
            }
        ?>
    </ul>
</body>
</html>