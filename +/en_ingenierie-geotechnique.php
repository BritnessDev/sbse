<?php 
function title(){return 'Geotechnical Engineering';}
function content(){ ?>
<style>
    .services_header {
        background-image: url(/cdn/geotechnical.jpg);
        background-size: cover;
    }
</style>
<section class="services_header">
    <div class="wrap">
        <div class="discover">
            <h1>Geotechnical<br>Engineering</h1>
            <p>Proposing a Realization of plans is essential to maintain the security of most of the projects that we
                carry out at Groupe SBSE. Whether an Electrical or Environmental project, Realization of plans is
                necessary to ensure that the projects carried out by our Structural Engineering Company are safe, stable
                and built to last.</p><a href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>contact" class="btn">Contact Us</a>
        </div>
    </div>
</section>
<section class="geo_mob">
    <p>Proposing a Realization of plans is essential to maintain the security of most of the projects that we carry out
        at Groupe SBSE. Whether an Electrical or Environmental project, Realization of plans is necessary to ensure that
        the projects carried out by our Structural Engineering Company are safe, stable and built to last.</p><a
        href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>contact" class="btn">Contact Us</a>
</section>

<?php } ?>