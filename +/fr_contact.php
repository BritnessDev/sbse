<?php 
function title(){return 'Nous Contacter';}
function content(){ ?>
<section class="contact_block">
    <div class="wrap">
        <h4>Contact us</h4>
        <div class="address_block">
            <div class="address_block_left">
                <p>5475 Pare Rue, Mont-Royal, QC Suite 205</p>
                <div class="phone"><a href="mailto:info@groupesbse.com"><svg width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.1645 20.1016C18.6838 20.665 18.0093 21.0312 17.27 20.9979C15.3635 20.9121 11.3753 20.2321 7.57097 16.4218C3.76709 12.6119 3.08786 8.61786 3.00209 6.70808C2.96882 5.96719 3.33471 5.29129 3.89782 4.8097L5.70841 3.26119C6.18412 2.85434 6.90351 2.93182 7.282 3.43066L9.71667 6.63955C9.9844 6.99241 9.98572 7.4804 9.71989 7.83471L7.22109 11.1652L12.8192 16.7722L16.3049 14.3727C16.6553 14.1314 17.1205 14.1414 17.4603 14.3974L20.5934 16.7577C21.0632 17.1117 21.1375 17.7892 20.7555 18.2369L19.1645 20.1016Z"
                                fill="white" /> </svg> info@groupesbse.com</a> &emsp; <a href="tel:4389885203"><svg
                            width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.3492 2.49795C11.3508 1.83792 12.6492 1.83792 13.6508 2.49795L20.6508 7.11096C21.4931 7.66602 22 8.60721 22 9.61593V17.0001C22 18.6569 20.6569 20.0001 19 20.0001H5C3.34315 20.0001 2 18.6569 2 17.0001V9.61593C2 8.60721 2.50694 7.66602 3.34922 7.11096L10.3492 2.49795ZM12 4.00012L4 9.00012L12 14.0001L20 9.00012L12 4.00012Z"
                                fill="white" /></svg> 438-988-5203</a></div><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.810424169516!2d-73.66130218450036!3d45.493762179101275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc919d43dc45075%3A0xab1363a55150b83e!2s5475%20Pare%20St%2C%20Mount%20Royal%2C%20QC%20H4P%201P7%2C%20Canada!5e0!3m2!1sen!2sin!4v1674225373596!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="address_block_right">
                <form action="#" method="POST" id="contact_form" class="frm">
                    <div class="x12">
                        <div class="controls" id="name"><input type="text" name="name" placeholder="Name"
                                autocomplete="off" class="name">
                            <div class="error_message"></div>
                        </div>
                    </div>
                    <div class="x12">
                        <div class="controls" id="address"><input type="text" name="address" class="address"
                                placeholder="Address" autocomplete="off">
                            <div class="error_message"></div>
                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="x6">
                            <div class="controls" id="email"><input type="text" name="email" placeholder="Email"
                                    class="email">
                                <div class="error_message"></div>
                            </div>
                        </div>
                        <div class="x6">
                            <div class="controls" id="phone"><input type="text" name="phone" placeholder="Phone"
                                    class="phone">
                                <div class="error_message"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="x12">
                        <div class="controls" id="object"><input type="text" name="object" class="object"
                                placeholder="Object" autocomplete="off">
                            <div class="error_message"></div>
                        </div>
                    </div>
                    <div class="controls" id="message"><textarea type="text" name="message" class="message"
                            placeholder="Message" autocomplete="off"></textarea>
                        <div class="error_message"></div>
                    </div>
                    <div class="contact_form flash_error" style="display:none"></div>
                    <div class="controls"><input type="hidden" name="redirect"
                            value="https://web3forms.com/success"><button type="submit" id="submit"
                            class="ui-button">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php } ?>