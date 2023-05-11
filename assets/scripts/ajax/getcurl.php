<?php
// API endpoint URL
$url = 'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM';

// Initialize curl
$ch = curl_init();

// Set curl options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute the curl request and store the response
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
    exit;
}

// Close the curl request
curl_close($ch);

// Convert JSON response to PHP array
$data = json_decode($response, true);

// Display data in a table
echo '<table>';
echo '<tr><th>KODE</th><th>Nama Barang</th><th>Group Barang</th><th>Harga Jual</th><th>Quantity</th></tr>';
foreach ($data as $row) {
    echo '<tr>';
    echo '<td>' . $row['i_code'] . '</td>';
    echo '<td>' . $row['i_name'] . '</td>';
    echo '<td>' . $row['g_code'] . '</td>';
    echo '<td>' . $row['i_sell'] . '</td>';
    echo '<td>' . $row['i_qty'] . '</td>';
    echo '</tr>';
}
echo '</table>';
?>