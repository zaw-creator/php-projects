<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php 
   function getcurrency($apikey, $source){

      $baseUrl='http://apilayer.net/api/live';

      $param =[
         'source' => $basecurrency,
         'appid' => $apikey,
      ];

      $url = $baseUrl . '?' . http_build_query($param);

      try{
         $response = file_get_contents($url);
         $currencydata = json_decode($response, true);
         return $currencydata;
      }catch (Exception $e){
         echo "Error: " . $e->getMessage();
         return null;
      }
   }
   
   
   
   
   ?>
</body>
</html>