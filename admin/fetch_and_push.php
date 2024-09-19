<?php
include('config/db.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// API URL and data to be sent in POST request
$api_url = "https://ow-scanx-analytics.dhan.co/customscan/fetchdt";

$sql = "SELECT script_code FROM scripts";
echo "Executing query: " . $sql . "<br>";  // Print the SQL query
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        $scriptcode = $row['script_code'];
        
        $post_data = [
            'data' => [
                "sorder" => "asc",
                "count" => 1,
                "fields" => [
                    "DayVolPrevCandle",
                    "DispSym",
                    "Ltp",
                    "Mcap",
                    "Pe",
                    "DivYeild",
                    "Pb",
                    "Roe",
                    "ROCE",
                    "Ind_Pe",
                    "Ind_Pb",
                    "High1Yr",
                    "Low1Yr",
                    "BookValue",
                    "Eps"
                ],
                "params" => [
                    [
                        "field" => "Sid",
                        "op" => "",
                        "val" => "$scriptcode",
                    ],
                    [
                        "field" => "Exch",
                        "op" => "",
                        "val" => "NSE",
                    ],
                    [
                        "field" => "Seg",
                        "op" => "",
                        "val" => "E",
                    ]
                ],
                "pgno" => 1,
            ],
        ];

        $json_data = json_encode($post_data);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data); // JSON data
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // To store the response instead of outputting it
        curl_setopt($ch, CURLOPT_HTTPHEADER, [  
            'Content-Type: application/json', // Set the content type to JSON
            'Content-Length: ' . strlen($json_data) // Set the length of the JSON data
        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'cURL error: ' . curl_error($ch);
            curl_close($ch);
            exit();
        }
        curl_close($ch);

        $data = json_decode($response, true);

        if (is_array($data)) {
            $scriptC = (int)$data["data"][0]["Sid"];

            $roe = $data["data"][0]["Roe"];
            $eps = $data["data"][0]["Eps"];
            $pe = $data["data"][0]["Pe"];
            $ipe = $data["data"][0]["Ind_Pe"];
            $pb  = $data["data"][0]["Pb"];
            $book_value = $data["data"][0]["BookValue"];
            $tick_size = $data["data"][0]["TickSize"];
            $div_yield = $data["data"][0]["DivYeild"];
            $high = $data["data"][0]["High1Yr"];
            $low  = $data["data"][0]["Low1Yr"];
            $ltp  = $data["data"][0]["Ltp"];

            $sql = "UPDATE scripts SET  
                    roe='$roe',
                    eps='$eps',
                    pe_ratio='$pe',
                    ipe='$ipe',
                    pb_ratio='$pb',
                    book_value='$book_value',
                    ticker_size='$tick_size',
                    div_yield='$div_yield',
                    52_week_high='$high',
                    52_week_low='$low',
                    ltp='$ltp'
                    WHERE script_code='$scriptcode'";
            
            // Print the SQL query for debugging
            echo "Executing query: " . $sql . "<br>";
            
            $conn->query($sql);

        } else {

        }
    }
}

$conn->close();
?>