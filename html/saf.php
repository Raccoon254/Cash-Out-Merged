<?
$ch = curl_init('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer kOfvfhAGmoopx0epFZ1zRh7GsQIE',
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, {
    "BusinessShortCode": 174379,
    "Password": "MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjMwMjA2MjAxODIx",
    "Timestamp": "20230206201821",
    "TransactionType": "CustomerPayBillOnline",
    "Amount": 1,
    "PartyA": 254708374149,
    "PartyB": 174379,
    "PhoneNumber": 254708374149,
    "CallBackURL": "https://mydomain.com/path",
    "AccountReference": "CompanyXLTD",
    "TransactionDesc": "Payment of X" 
  });
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response     = curl_exec($ch);
curl_close($ch);
echo $response;