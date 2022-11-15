<?php
        $name = "1984";
        $read = true;

    

        if($read) {
        
            $message = "You have read $name";

        } else {

            $message = "You have NOT read $name";
            
        }
            
        $books = [
            "Na drini ćuprija",
            "1984",
            "The road"
        ];

        $phones = [

            [
                'model' => 'Iphone 14 Pro Max',
                'IMEI' => '356728115354819',
                'color' => 'black',
                'purchaseURL' => 'https://example.com',
                'releaseYear' => 2021
            ],

            [
                'model' => 'Iphone 14 Pro Max',
                'IMEI' => '3567281153548609',
                'color' => 'white',
                'purchaseURL' => 'https://example.com',
                'releaseYear' => 2022
            ],
            
            [
                'model' => 'Iphone 13 Pro Max',
                'IMEI' => '3567251153548509',
                'color' => 'white',
                'purchaseURL' => 'https://example.com',
                'releaseYear' => 1950
            ],
            
            [
                'model' => 'Iphone 10 Pro Max',
                'IMEI' => '3567281153448509',
                'color' => 'black',
                'purchaseURL' => 'https://example.com',
                'releaseYear' => 2010
            ]  
        
        ];

        function filter($items, $fn) {

            $filteredItems = [];

            foreach ($items as $item) {

                if($fn($item)) {

                    $filteredItems[] = $item;
                }

        }

            return $filteredItems;
        };


        $filteredPhones = array_filter($phones, function ($phone) {

            return $phone['releaseYear'] > 2000 && $phone['releaseYear'] < 2022;

        });

?>