<?php 

    class Movie {

        public $urlImg;
        public $title;
        public $cardText;

        public function TheMovie() {
            $urlImg = "https://sm.ign.com/ign_es/screenshot/default/deadpool-2_5szd.jpg";

            $title = 'DeadPool';

            $cardText = 'Some quick example text to build on the card title.';

            return 
                '
                    <img src=' . $urlImg . ' class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $title . '</h5>
                        <p class="card-text">' . $cardText . '</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                ';
        }

    }

?>
