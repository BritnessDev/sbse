<?php 
function title(){return 'Services';}
function content(){ ?>

<section class="services">
    <h3>Proposed services</h3>
    <p>Solutions that make a difference</p><a href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>contact"
        class="btn">Contact Us</a>
</section>

<section class="services_block">
    <div class="wrap">
        <div class="blck1"><img src="/cdn/service1.png">
            <h3>Environmental Engineering</h3>
            <p>Environmental Site Assessments Phase I (Phase 1), Preliminary Environmental Characterization Phase II
                (Phase 2), Comprehensive environmental characterization Phase III (Phase 3), Environmental
                rehabilitation of contaminated land Phase IV (Phase 4)</p><a href="#" class="btn">Learn More</a>
        </div>
        <div class="blck1"><img src="/cdn/service2.png">
            <h3>Building Engineering</h3>
            <p>Pre-purchase inspection, Commercial Building Inspection, Residential Building Inspection and industrial
                Building Inspection, Inspection of interior facades and garages Bill 122, Provisional Fund Study (Bill
                16)</p><a href="#" class="btn">Learn More</a>
        </div>
        <div class="blck1"><img src="/cdn/service3.png">
            <h3>Structural Engineering</h3>
            <p>Building Design, Residential Homes & Renovations, Industrial Structures, Structure Inspectionsz</p><a
                href="#" class="btn">Learn More</a>
        </div>
        <div class="blck1"><img src="/cdn/service4.png">
            <h3>Geotechnical Engineering</h3>
            <p>Geotechnics and Geology, Quality Control of Materials, Geotechnical Drilling</p><a href="#"
                class="btn">Learn More</a>
        </div>
    </div>
</section>

<?php } ?>