<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	if ($_REQUEST['Body'] == 'Monday' || $_REQUEST['Body'] == 'monday' || $_REQUEST['Body'] == 'Lunes'|| $_REQUEST['Body'] == 'lunes') {
        $n = rand(0, 4);
        switch($n){
            case 0:
                $message = "Money [muhn-ee] - Pera\nI need money - kailangan ko ng pera";
                break;
            case 1:
                $message ="Strong [strawng] - Malakas\nI want to be strong - Gusto kong maging malakas";
                break;
            case 2:
                $message ="Turtle [tur-tl] - Pagong\nYou walk like a turtle - Ituturo sa iyo tulad ng isang pagong";
                break;
            case 3:
                $message ="Water [waw-ter] - Tubig\nCan I buy a bottle of water? - Maaari ba akong bumili ng isang bot ng tubig?";
                break;
            case 4:
                $message ="Chicken [chik-uh n] - Manok\nI want chicken for dinner - Gusto kong monk para sa hapunan";
                break;
            default:
                $message = "A word a day";
        }
    }else if($_REQUEST['Body'] == 'Tuesday' || $_REQUEST['Body'] == 'tuesday'|| $_REQUEST['Body'] == 'Martes'|| $_REQUEST['Body'] == 'martes'){
        $n = rand(0, 4);
        switch($n){
            case 0:
                $message ="Rich - Malakas\nYour family is rich - Ang iyong pamilya ay mayaman";
                break;
            case 1:
                $message ="Brought [brawt] - Dinala\nI brought cookies - Dinala ko cookies";
                break;
            case 2:
                $message ="Arrive [uh-rahyv] - Dumating\nPlease arrive on time - Mangyaring dumating sa oras";
                break;
            case 3:
                $message ="Decide [dih-sahyd] - Magpasya\nplease decide what to eat - Mangyaring magpasya kung ano ang kumain";
                break;
            case 4:
                $message ="Dog - Aso\nLet the dog out - Hayaan ang mga aso sa labas";
                break;    
            default:
                $message = "A word a day";
        }
    }else if($_REQUEST['Body'] == 'Wednesday' || $_REQUEST['Body'] == 'Wedneday'|| $_REQUEST['Body'] == 'Miyerkules'|| $_REQUEST['Body'] == 'miyerkules'){
        $n = rand(0, 4);
        switch($n){
             case 0:
                $message ="Breakfast [brek-fuh st] - Almusal\nWhat's for breakfast? - Ano para sa almusal?";
                break;
            case 1:
                $message ="Study [stuhd-ee] - Pag-aaral\nI need to study my homework - Kailangan ko sa pag-aaral ang aking mga araling-bahay";
                break;    
            case 2:
                $message ="Soap [sohp] - Sabon\nPlease use soap to wash your hand - Mangyaring gamitin ang sabon upang hugasan ang iyong mga kamay";
                break;
            case 3:
                $message ="Favorite [fey-ver-it] - Malakas\nWhat's your favorite song? - Anong paborito mong kanta?";
                break;
            case 4:
                $message ="Rain [reyn] - Ulan\nIs it going to rain? - Ito ay pagpunta sa ulan?";
                break;
            default:
                $message = "A word a day";
        }
    }else if($_REQUEST['Body'] == 'Thursday' || $_REQUEST['Body'] == 'Thursday'|| $_REQUEST['Body'] == 'Huwebes'|| $_REQUEST['Body'] == 'huwebes'){
        $n = rand(0, 10);
        switch($n){
            case 0:
                $message = "Cat - Pusa\nCat has nine lives - Pusa ay may siyam na buhay";
                break;
            case 1:
                $message ="Pray - Manalangin\nPlease pray for me - Mangyaring manalangin para sa akin";
                break;
            case 2:
                $message ="Hurry [hur-ee] - Magmadali\nHurry up please - Magmadali up mangraying";
                break;
            case 3:
                $message ="Story [stawr-ee]- Kuwento\nTell me a story  - Sabihin mo sa akin ng isang kuwento";
                break;
            case 4:
                $message ="Funny [fuhn-ee] - Nakakatawa\nYou are so funny - Ikaw ay kaya nakakatawa";
                break;    
            default:
                $message = "A word a day";
        }
    }else if($_REQUEST['Body'] == 'Friday' || $_REQUEST['Body'] == 'Friday'|| $_REQUEST['Body'] == 'Biyernes'|| $_REQUEST['Body'] == 'biyernes'){
        $n = rand(0, 4);
        switch($n){
            case 0:
                $message = "Game [geym] - Laro\nI want to play a game - Gusto ko upang i-play sa isang laro";
                break;
            case 1:
                $message ="Wash [wawsh] - Hugasan\nWash the car - Hugasan ang kotse ";
                break;
            case 2:
                $message ="Car [kahr] - Kotse\nI want to learn to drive a car - Ako magkulang sa malaman upang humimok ng kotse";
                break;
            case 3:
                $message ="Hungry [huhng-gree] - Gutom\nI am hungry - Ako ay gutom na";
                break;
            case 4:
                $message ="Pay - Magbayad\nPay for food - Magbayad para sa pagkain";
                break;
            default:
                $message = "A word a day";
        }
    }else if($_REQUEST['Body'] == 'Saturday' || $_REQUEST['Body'] == 'Saturday'|| $_REQUEST['Body'] == 'Sabado'|| $_REQUEST['Body'] == 'sabado'){
        $n = rand(0, 4);
        switch($n){
            case 0:
                $message = "Born [bawrn]- Ipinanganak\nI was born in December- Ay ipinanganak sa Disyembre";
                break;
            case 1:
                $message ="Coffee [kaw-fee] - Kape\nCan I order a small coffee? - Maaari ako bumili ng isang maliit na kape";
                break;
            case 2:
                $message ="Candy [kan-dee] - Kendi\nI want candy -Gusto ko ng kendi";
                break;
            case 3:
                $message ="Milk - Gatas\nI love milk - Gustung-gusto ko ng gatas";
                break; 
            case 4:
                $message ="Police [puh-lees] - Pulis\nCall the police - Tumawag ng pulis";
                break;
            default:
                $message = "A word a day";
        }
    }else if($_REQUEST['Body'] == 'Sunday' || $_REQUEST['Body'] == 'Sunday'|| $_REQUEST['Body'] == 'Linggo'|| $_REQUEST['Body'] == 'linggo'){
        $n = rand(0, 4);
        switch($n){
             case 0:
                $message ="Soup [soop] - Sopas\nDo you want soup? - Ang gusto mong sopas";
                break;
            case 1:
                $message ="Kitten [kit-n] - Kuting\nThere's a kitten in the background - Mayroong isang kuting sa likod-bahay";
                break;
            case 2:
                $message ="Sleep - Pagtulog\nTime to go to sleep - Oras upang pumunta sa pagtulog";
                break;
            case 3:
                $message ="Time [tahym] - Oras\nWhat time is it? - Anong oras na";
                break;
            case 4:
                $message ="Picture [pik-cher] - Larawan\nCan you take a picture - Maaari kang kumuha ng larawan";
                break;      
            default:
                $message = "A word a day";
        }
    }
?>
<Response>
    <Message><?php echo $message ?></Message>
</Response>