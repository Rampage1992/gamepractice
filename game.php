<?php

            function display_items() {
                $items = array(
                   "rock" => '<a href="?item=rock">rock<img src="img/stenen.jpg" width="140" height="140" alt="saks"></a>',
                   "paper" => '<a href="?item=paper">paper<img src="img/papir.jpg" width="140" height="140" alt="papir"></a>',
                   "scissors" => '<a href="?item=scissors">scissors<img src="img/saks.jpg" width="140" height="140" alt="saks"></a>',
                );
            
            foreach( $items as $item => $value) :
               echo $value;
            endforeach;     
        
        }

        function game() 
        {
            if(isset($_GET['item']) == TRUE ) 
            {
            
            //mulige genstande    
            $items = array('rock', 'paper', 'scissors');

            //brugerens genstand
            $user_item = $_GET['item'];

            //Computer genstand
            $comp_item = $items[rand(0,2)];

            //User item isn't valid
            if( in_array($user_item, $items) == FALSE ) 
            {
                echo "Man må ikke snyde";
                die;
            }

            if( $user_item == 'scissors' && $comp_item == 'paper' OR 
                $user_item == 'paper' && $comp_item == 'rock' OR 
                $user_item == 'rock' && $comp_item == 'scissors' ) 
                {
                    echo '<h2>Du vinder fedtsyl!</h2>';
                } 

            if( $comp_item == 'scissors' && $user_item == 'paper' OR 
                $comp_item == 'paper' && $user_item == 'rock' OR 
                $comp_item == 'rock' && $user_item == 'scissors' )
                {
                    echo '<h2>Du har tabt fordi at du er for dårlig</h2>';
                }

                if( $user_item == $comp_item) {
                    echo '<h2>uafgjort</h2>';
                }

                if( $user_item == $comp_item) {
                    echo '<h2>uafgjort</h2>';
                }
                    
    
            else {
                display_items();
            } 
               
                    
        }
            
        }

        ?>