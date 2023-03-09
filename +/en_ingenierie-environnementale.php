<?php 
function title(){return 'Environmental Engineering';}
function content(){ ?>
<style>
    .services_header {
        background-image: url(/cdn/environmental.jpg);
        background-size: cover;
    }
</style>
<section class="services_header">
    <div class="wrap">
        <div class="discover">
            <h1>Environmental<br>Engineering</h1>
            <p>Environmental Site Assessments Phase I (Phase 1), Preliminary Environmental Characterization Phase II
                (Phase 2), Comprehensive environmental characterization Phase III (Phase 3), Environmental
                rehabilitation of contaminated land Phase IV (Phase 4)</p><a
                href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>contact" class="btn">Contact Us</a>
        </div>
    </div>
</section>
<section class="env_mob">
    <p>Environmental Site Assessments Phase I (Phase 1), Preliminary Environmental Characterization Phase II (Phase 2),Comprehensive environmental characterization Phase III (Phase 3), Environmental rehabilitation of contaminated land Phase IV (Phase 4)</p><a href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>contact" class="btn">En
        Savoir Plus</a>
</section>

<?php } ?>