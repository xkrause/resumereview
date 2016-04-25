<?php
    //Create the API URL using the private app credentials
    $baseUrl = '';
    
    //this will fetch the headers from shopify and the second parameter specifies the function
    //to parse it into an array structure
    $headers = get_headers($baseUrl.'shop.json', 1);
    
    $apiLimit = (int) str_replace('/500', '', $headers['HTTP_X_SHOPIFY_SHOP_API_CALL_LIMIT']);
    
    $response = json_decode(file_get_contents($baseUrl.'products/count.json')); //request it from the shopify api
    $productCount = $response->count; //get the count parameter
    $pages = ceil($productCount/250); //get the amount of pages with max 250 products per page
    
    //Now we can easily loop through them:
    $current_page = 1;
    
    while ($current_page <= $pages) { $response =
            json_decode(file_get_contents($baseUrl.
            'products.json?limit=250&page='.$current_page));
            foreach ($response->products as $product) {
                var_dump($product);
             }
            $current_page++;
    }

    //Create a new product
    $product =
        array('title' => 'New Product',
        'body_html' => 'New Product Description',
        'vendor'=> 'Product Vendor',
        'product_type'=> 'Product Type',
        'variants' => array(
        array('option1' => 'Default',
        'price' => '100.00',
        'sku' => 'ABC123',
        'inventory_quantity'=> '100',
        'inventory_management' => 'shopify',
        'taxable' => true,
        'requires_shipping' => true
            )
        )
    );

    $ch = curl_init($baseUrl.'products.json'); //set the url
    $data_string = json_encode(array('product'=>$product)); //encode the product as json
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  //specify this as a POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string); //set the POST string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //specify return value as string
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
    ); //specify that this is a JSON call
    
    $server_output = curl_exec ($ch); //get server output if you wish to error handle / debug
    curl_close ($ch); //close the connection
?>