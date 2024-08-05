<?php
// Function to fetch and parse stock price
function fetch_price($ticker) {
    $url = "https://www.google.com/finance/quote/$ticker?hl=en";
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);
    
    if ($response === false) {
        return array($ticker, null);
    }

    $dom = new DOMDocument();
    @$dom->loadHTML($response);

    $xpath = new DOMXPath($dom);
    $priceNode = $xpath->query('//div[contains(@class, "YMlKec fxKbKc")]');
    $prevNode = $xpath->query('//div[contains(@class, "P6K39c")]');

    if ($priceNode->length > 0 && $prevNode->length > 0) {
        $price = $priceNode->item(0)->nodeValue;
        $prev = $prevNode->item(0)->nodeValue;
        
        $price = str_replace("₹", "", $price);
        $price = str_replace(",", "", $price);
        $price = trim($price);

        $prev = str_replace("₹", "", $prev);
        $prev = str_replace(",", "", $prev);
        $prev = trim($prev);

        $price = $prev;

        echo "$ticker: $price $prev\n";
        return array($ticker, $price);
    } else {
        return array($ticker, null);
    }
}

// Function to fetch all stock prices in parallel
function fetch_all_prices($tickers) {
    $prices = array();
    $mh = curl_multi_init();
    $ch_array = array();
    
    foreach ($tickers as $ticker) {
        $ch = curl_init();
        $url = "https://www.google.com/finance/quote/$ticker?hl=en";
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_multi_add_handle($mh, $ch);
        
        $ch_array[$ticker] = $ch;
    }

    $running = null;
    do {
        curl_multi_exec($mh, $running);
    } while ($running);

    foreach ($ch_array as $ticker => $ch) {
        $response = curl_multi_getcontent($ch);
        list($ticker, $price) = fetch_price_from_response($response, $ticker);
        $prices[$ticker] = $price;
        curl_multi_remove_handle($mh, $ch);
        curl_close($ch);
    }

    curl_multi_close($mh);

    return $prices;
}

function fetch_price_from_response($response, $ticker) {
    if ($response === false) {
        return array($ticker, null);
    }

    $dom = new DOMDocument();
    @$dom->loadHTML($response);

    $xpath = new DOMXPath($dom);
    $priceNode = $xpath->query('//div[contains(@class, "YMlKec fxKbKc")]');
    $prevNode = $xpath->query('//div[contains(@class, "P6K39c")]');

    if ($priceNode->length > 0 && $prevNode->length > 0) {
        $price = $priceNode->item(0)->nodeValue;
        $prev = $prevNode->item(0)->nodeValue;
        
        $price = str_replace("₹", "", $price);
        $price = str_replace(",", "", $price);
        $price = trim($price);

        $prev = str_replace("₹", "", $prev);
        $prev = str_replace(",", "", $prev);
        $prev = trim($prev);

        // $price = $prev;

        echo "$ticker: $price $prev\n";
        return array($ticker, $price);
    } else {
        return array($ticker, null);
    }
}

// Function to upload prices using POST request
function upload_prices($prices, $post_url) {
    foreach ($prices as $ticker => $price) {
        if ($price !== null) {
            $payload = json_encode(array(
                'ticker' => str_replace(":NSE", "", trim($ticker)),
                'price' => $price
            ));

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $post_url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

            $response = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            if ($httpcode == 200) {
                echo "Successfully uploaded $ticker: $price\n";
            } else {
                echo "Failed to upload $ticker: $price, Status code: $httpcode\n";
            }

            curl_close($ch);
        }
    }
}

// List of stock tickers
$tickers = array("AEGISLOG:NSE");

$post_url = "http://localhost:8000/admin/controller/process_update_price_3dd09699c1e3fd702f70435186087a06.php";  // Replace with your actual POST URL

$prices = fetch_all_prices($tickers);

// upload_prices($prices, $post_url);
?>
