<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $as = new MessageWelcome();
        
        /*
         * Example Of Piramida
         * $as->piramidabilurut(10);
         */
        
        /*
         * Prime Number
         *
         * $d = 100000;
         * $sieve = array_fill(0, $d, 0);
         * $as->eratosthenes_sieve($sieve, $d);
         */
        
        
        /*
         * Factorial
         * $s = 3;
         * echo $as->factorial($s);
         */
        
        
        /*
         * Sorting
         * 
         * $unsorted = array('asu','bagu','abu','rabu','aau');
         * $sorted = $as->quicksort($unsorted);
         * for($k=0;$k<count($sorted);$k++){
         * echo $sorted[$k].' ';
         * }
         */
        
        /*
         * Searching Word in a String
         *
         * $pattern = 'Hello';
         *         $text    = 'helo Helslow Bandung ibukota surabaya';
         *         
         *         $hasil = $as->MorrisPratt($text, $pattern);
         *         echo $hasil;
         */
         
         /*
          * $kata = "Halo Apa Kabar";
          * $hasilnya = $as->StringReverse($kata);
          * 
          * it will be output "Rabak Apa Olah"
          * 
          * echo $as->WordReverse($kata);
          * 
          * it will output "Olah Apa Rabak"
          * 
          * echo $as->WordStringReverse($kata);
          * 
          * it will be output "Kabar Apa Halo"
          * 
          * echo $hasilnya;
          * echo ucfirst($hasilnya);
          * echo ucwords($hasilnya);
          * echo strtolower($hasilnya);
          * echo strtoupper($hasilnya);
          */
         


        
        class MessageWelcome{
            public $hello;
            public $selamat = "Hey Kamu";
            public $hasil;
            
            function setWelcome($greeting){
                $this->hello = $greeting;
                echo $this->hello;
            }
         
            function ditambah($first, $two){
                $this->hasil = $first + $two;
                echo $this->hasil;
            }
                        
            function fibonacci($count){
            $first = 0;
            $second = 1;
            print $first.'<br>';
            for($i=1;$i<=$count-1;$i++)
               {
               $final = $first + $second;
               $first = $second;
               $second = $final;
               print $final.'<br>';
               }
            }
            
            function OddEven($bil){
                if($bil%2 == 0){
                    print $bil.' = genap';
                }
                else{
                    print $bil.' = ganjil';
                }
            }
            
            /*Tampilan
             * jika input 3
             * 9
             * 876
             * 54321
             */             
            function piramidabilurut($bil){
                $cetak = $bil*$bil;
                  for($i=1;$i<=$bil;$i++) {
                    for($j=1;$j<=($i*2)-1;$j++){
                        print $cetak.' ';
                        $cetak--;
                    }
                    print '<br>';
                    
                }
              
            }
            
            /*
             * Get Prime Number
             */           
            function eratosthenes_sieve($sieve, $n)
            {
                    $i = 2;

                    while ($i <= $n) {
                            if ($sieve[$i] == 0) {
                                    echo $i.'<br>';

                                    $j = $i;
                                    while ($j <= $n) {
                                            $sieve[$j] = 1;
                                            $j += $i;
                                    }
                            }
                            $i++;
                    }
            }
            
            //Factorial Function
            function factorial($s)
            {
                echo $s.'! ';
                if($s <= 1) 
                {
                    return 1;
                }
                else 
                {                    
                    return $s * $this->factorial($s - 1);                    
                }
            }
            
            //QuickSort
            function quicksort($array)
            {
                if (count($array) == 0)
                    return array();

                $pivot = $array[0];
                $left = $right = array();

                for ($i = 1; $i < count($array); $i++) {
                    if ($array[$i] < $pivot)
                        $left[] = $array[$i];
                    else
                        $right[] = $array[$i];
                }

                return array_merge($this->quicksort($left), array($pivot), $this->quicksort($right));
            }
            
            
            
            function preprocessMorrisPratt($pattern, &$nextTable)
            {
                    $i = 0;
                    $j = $nextTable[0] = -1;
                    $len = strlen($pattern);

                    while ($i < $len) {
                            while ($j > -1 && $pattern[$i] != $pattern[$j]) {
                                    $j = $nextTable[$j];
                            }

                            $nextTable[++$i] = ++$j;
                    }
            }

            function MorrisPratt($text, $pattern)
            {
                    // get the text and pattern lengths
                    $n = strlen($text);
                    $m = strlen($pattern);
                    $nextTable = array();

                    // calculate the next table
                    $this->preprocessMorrisPratt($pattern, $nextTable);

                    $i = $j = 0;
                    while ($j < $n) {
                            while ($i > -1 && $pattern[$i] != $text[$j]) {
                                    $i = $nextTable[$i];
                            }
                            $i++;
                            $j++;
                            if ($i >= $m) {
                                    return $j - $i;
                            }
                    }
                    return -1;
            }
            
            //String Manipulate
            
            //Reverse String
            function StringReverse($str){
                $hasil = strrev($str);
                return $hasil;
            }
            
            //Reverse Word
            function WordReverse($str){
                $pecahanstring = explode(" ",$str);
                    
                 $hasil = "";
                 foreach($pecahanstring as $value){
                   $values = ucfirst(strtolower(strrev($value)));
                   $hasil = $hasil." ".$values;            
                 }
                                  
                 return $hasil;
            }
            
            // Reverse String Per Word
            function WordStringReverse($str){
                $pecahanstring = explode(" ",strrev($str));
                    
                 $hasil = "";
                 foreach($pecahanstring as $value){
                   $values = ucfirst(strtolower(strrev($value)));
                   $hasil = $hasil." ".$values;            
                 }
                                  
                 return $hasil;
            }
            
     }
     
?>
    </body>
</html>
