<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/airtime", function (){
    $baseUrl = "https://api.gamswitchgm.com";
    $accessToken = "PzAhhPGKX9DxK4fnsQrmIjZg-D3GgzNAK7VT8sgARJpaqWk0T2OJyY37l4h93OTIKQXrO7g-ffgc1U-9ic6bw11gcxDWAP-_VaznBy6f56b-4TwpH2aoTLU0RXXm9Ngc5t2qCcLgbCn89ImV1JffdS5VyB2RwWyG0MvXB8zkdqADHD2kpvY9le1MK8t8VRNXHzFSayR8Jn3qc22k_iSN7UuC4qThQToZt_TFmNkF6pkmYNBqH7FR88kmnW87ROYRr_olZOkih0pb3spAJt9LaTgbDD9SV7eO3zf1PtlVZrXhNliY2bnLqyZw1xppN6WX3s0xZxL9bgfOJDTh6zbzk07LP4rAGk33YnCCPFUqZiY3MO2SfBzoXwTKM0JaGrlK6Q94DrJy3vl2keYoIA01RuwtpbapoeRvp7ar0bH9hvGwCi5i3ka-kqbo16PyYr0D9JGrzMWPqz5xpZf674B1RDzv_SMc2gtxK30xZq8bXoc2LL1cQsbc14zYoembHnu-WtFYa0E-GxFWTq80CHWlpg";
    $hashKey = "6d22d083-52a9-409f-9227-a1efe4ad8d17";
    $cardNumber = "5061829900001279";
    $nonce = Str::random(10);
    $timestamp = time();
    $phone = "2202920233";
    $url = $baseUrl."/api/airtime/gswlive";
    $signature = $hashKey."airtime".$nonce.$timestamp.$phone;
    $signature = hash("sha512", $signature);
    $headers = [
        "Accept" => "application/json",
        "Content-Type" => "application/json",
        "Signature" => $signature,
    ];
    $requestBody = [
        "Type" => "Africell",
        "PhoneNumber" => "2202920233",
        "Amount" => "10",
    ];

    $response = Http::withToken($accessToken)
        ->withHeaders($headers)
        ->post($url, $requestBody);

    dd($response->json());
});

Route::get('/balance-enquiry', function (Request $request) {

    $baseUrl = "https://api.gamswitchgm.com";
    $accessToken = "PzAhhPGKX9DxK4fnsQrmIjZg-D3GgzNAK7VT8sgARJpaqWk0T2OJyY37l4h93OTIKQXrO7g-ffgc1U-9ic6bw11gcxDWAP-_VaznBy6f56b-4TwpH2aoTLU0RXXm9Ngc5t2qCcLgbCn89ImV1JffdS5VyB2RwWyG0MvXB8zkdqADHD2kpvY9le1MK8t8VRNXHzFSayR8Jn3qc22k_iSN7UuC4qThQToZt_TFmNkF6pkmYNBqH7FR88kmnW87ROYRr_olZOkih0pb3spAJt9LaTgbDD9SV7eO3zf1PtlVZrXhNliY2bnLqyZw1xppN6WX3s0xZxL9bgfOJDTh6zbzk07LP4rAGk33YnCCPFUqZiY3MO2SfBzoXwTKM0JaGrlK6Q94DrJy3vl2keYoIA01RuwtpbapoeRvp7ar0bH9hvGwCi5i3ka-kqbo16PyYr0D9JGrzMWPqz5xpZf674B1RDzv_SMc2gtxK30xZq8bXoc2LL1cQsbc14zYoembHnu-WtFYa0E-GxFWTq80CHWlpg";
    $hashKey = "6d22d083-52a9-409f-9227-a1efe4ad8d17";
    $cardNumber = "5061829900001279";
    $nonce = Str::random(10);
    $timestamp = time();
    $url = $baseUrl."/api/balance/gswlive";

    $signature = $hashKey . "balance" . $nonce . $timestamp . $cardNumber;
    $signature = hash("sha512", $signature);
    $headers = [
        "Accept" => "application/json",
        "Content-Type" => "application/json",
        "Signature" => $signature,
    ];
    $requestBody = [
        "Amount" => "0",
        "AccountType" => "Savings",
    ];

    $response = Http::withToken($accessToken)
        ->withHeaders($headers)
        ->post($url, $requestBody);


    //echo json_encode($headers);
    //echo PHP_EOL;
    //echo json_encode($requestBody);
    //echo $url;
    dd($response->json());

});

Route::get("test-pgp", function (Request $request){
    $response = Http::
    withHeaders(["x-api-key" => "NNHULdBJxjJeemQGPzjRqFVpcgGwYH"])->
    post("http://localhost:8080/api/v1/encrypt-data", [
        "data" => json_encode([
            "username" => "Shegs",
            "fullname" => "Shegun Babs",
        ])
    ]);

    return $response->json();
});

Route::get("test-pgp-decrypt", function(){
    $response = Http::
        withHeaders([])->
        post("http://localhost:8080/api/v1/decrypt-data", [
            "data" => "2D2D2D2D2D424547494E20504750204D4553534147452D2D2D2D2D0A56657273696F6E3A2044696469736F6674204F70656E504750204C69627261727920666F72204A61766120332E320A0A6851454D4132646270754F75576747644151662B49754C54564A4A546D2F344D5233706633476A736E32716F434C35557076505746482F6851476D2F384D57790A344A4775753336686C7A356B7971424E35794E3149777866702F576E6F7A61496A514242673150356261334E6D466457353633392F3779306F4D634B6571527A0A4562777171423872694E42324B4D54796B79424855544E575A4335467376366B427063525352464B756265314142637247626B314274317254555171655257440A4E50356648443369684F2B46734941386871466D446A556F4E6E724E39364F6D39424958637535534A385779314339646A6F5849747069357535653273755A740A584359332B744B795A4255717752747A6A50744E56506937675641377A5447794D59624C3074445632485061676D726E4F317A6753727947666935396A39486D0A4B41512F4F51646C6954303633567648584D6F516D4F7757464B6741482B386A726F6976756D797A36644A6B416246756A694C57465A566C73736F6C516365310A477561326E4F3378506C517A367A314E45454A374E62504D5132674C5253355A353634475A4D494175556E575030745038377747554443334F2F387A6E4F59770A5759462B59385571653557684A30436A395171534766552B65396B43776750586846684B766A466E4B6D48386871503453773D3D0A3D766F6C6A0A2D2D2D2D2D454E4420504750204D4553534147452D2D2D2D2D0A"
    ]);

    dd(json_decode($response->json()["data"]));
});
