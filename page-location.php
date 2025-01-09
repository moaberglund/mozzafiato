<?php
/*
Template Name: Location
*/
get_header();
?>
<main>
    <div id="location" class="wrapper">
        <h1>Location</h1>

        <div class="grid">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2771.052471941408!2d9.279008077548493!3d46.01014497108833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDbCsDAwJzM2LjUiTiA5wrAxNic1My43IkU!5e0!3m2!1ssv!2ses!4v1736167473665!5m2!1ssv!2ses"
                    width="650" height="350" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="contact-info">
                <div>
                    <h3>Address:</h3>
                    <p>Via Tre Terre 15</p>
                    <p>123 45, Como</p>
                    <p>Italy</p>
                </div>
                <div>
                    <h3>Phone:</h3>
                    <p>+39 123 456 789</p>
                </div>
                <div>
                    <h3>Email:</h3>
                    <p>info@mozzafiato.com</p>
                </div>
            </div>
        </div>

        <div id="getHere">
            <h2>How to get here</h2>

            <h3><i class="fa-solid fa-car" style="color: #D8AE5E;"></i> By Car</h3>
            <h4>From South</h4>
            <p>
                Along the SS36 of Lake Como and Spluga, along the Lecco
                branch.Varenna is located about 30 km away from Lecco, exit Bellano
                / Valsassina.To enjoy the pleasant view of the lake, you can also
                take the Mandello exit and continue on the state road adjacent to
                the lake.
            </p>

            <h4>From North</h4>
            <p>
                Along the SS 36 of Lake Como and the Spluga Pass, crossing the
                Valchiavenna from the Spluga, or descending from the Engadine (Sankt
                Moritz).After Colico you travel about 14 km before taking the exit
                for Bellano / Valsassina; after about 6 km you will arrive in
                Varenna, along the road adjacent to the lake.
            </p>

            <h3><i class="fa-solid fa-train" style="color: #D8AE5E;"></i> By Train</h3>
            <h4>From Bergamo</h4>
            <p>
                Direct trains to LECCO and continue with trains from LECCO, direct
                to BELLANO – COLICO – SONDRIO –TIRANO
            </p>
            <p>Journey time: 40 minutes</p>

            <h4>From Lecco</h4>
            <p>Direct trains BELLANO – COLICO – SONDRIO – TIRANO</p>
            <p>Journey time: 20 minutes</p>

            <h4>From Tirano</h4>
            <p>Direct trains to LECCO-MILAN</p>
            <p>Journey time: 1 hour 30 minutes</p>

            <h3><i class="fa-solid fa-anchor" style="color: #D8AE5E;"></i> By Ferry</h3>
            <p>
                The car ferry service connects Varenna with the municipalities of
                Bellagio, Cadenabbia and Menaggio. Varenna is also one of the stops
                on the Como – Colico and Lecco – Bellagio route. The Navigazione
                Laghi website collects timetables and prices, as well as other
                useful information on special routes, educational itineraries and
                cruises. It is advisable to pay attention to the summer or winter
                calendar in force.
            </p>
        </div>
    </div>
</main>
<?php get_footer(); ?>