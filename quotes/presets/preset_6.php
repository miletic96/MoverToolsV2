<style>
    .free-quote-form .btn-primary,
    .free-quote-form .btn-primary:hover {
        background-color: <?php echo $form_options['primary_color'] ?> !important;
        border-color: <?php echo $form_options['primary_color'] ?> !important;
    }

    .free-quote-form .btn-primary:focus {
        background-color: <?php echo $form_options['secondary_color'] ?> !important;
        border-color: <?php echo $form_options['secondary_color'] ?> !important;
    }

    .free-quote-form .input-group-text {

        background-color: transparent;
        color: <?php echo $form_options['secondary_color'] ?>;
        border-radius: 0;
    }

    .free-quote-form .datepicker table tr td.active.active {
        background-color: <?php echo $form_options['primary_color'] ?>;
        background-image: linear-gradient(to bottom, <?php echo $form_options['primary_color'] . ', ' . $form_options['primary_color'] ?>);
    }

    .free-quote-form .datepicker td:hover,
    .free-quote-form .datepicker td.day:hover,
    .datepicker th:hover {
        background-color: <?php echo $form_options['secondary_color'] ?>;
    }

    .free-quote-form .select2-container {
        flex: 1;
    }

    .row-columns {
        display: flex;
        width: 100%;
    }
    .free-quote-form .form_header {
        margin-bottom: 25px;
    }
    .free-quote-form .input-wrap .input-group {
        display: grid;
        grid-template-columns: 1fr 10fr;
        height: 65px;
        margin-bottom: 20px;

    }
    .free-quote-form .input-wrap {
        margin-left: 15px;
    }
    .free-quote-form .row-select .input-wrap .input-group {
        display: grid;
        grid-template-columns: 1fr 21fr;

    }
    .input-group-prepend, .free-quote-form .input-wrap .form-control {
        height: 45px;
    }
    .input-group-prepend, .free-quote-form .input-wrap .select2-selection {
        height: 45px !important;
        border-left: none;
    }
    
    .free-quote-form .input-wrap .input-group .input-group-prepend {
        padding-top: 10px;
    padding-bottom: 10px;
    /* margin: 0 auto; */
    border: 1px solid #ccc;
    margin-left: auto;
    display: flex;
    align-items: center;
    min-width: 40px;
    place-content: space-evenly;
    border-right: none !important;
    }
    .input-wrap {
        width: 100%
    }
    .invalid-feedback {
        grid-column-start: 1;
        grid-column-end: 3;
        text-align: center;

    }
    
    <?php
    include('variable/preset_css_inject.php');
    ?>
    @media screen and (max-width: 767px) {
        .free-quote-form .row-columns {
            display: block;
        }
        .free-quote-form .input-wrap {
        margin-left: unset;
    }
    .free-quote-form .input-wrap .input-group .input-group-prepend {
        margin-left: unset;
        margin-right: auto;
    }
    .free-quote-form .input-wrap .form-control {
        margin-left: auto;
    }
    }
</style>

<div id="free-quote" class="free-quote-form">
    <form>
        <input type="hidden" name="api_url" id="api_url" value="<?php echo $form_options['api_url'] ?>">
        <input type="hidden" name="quoteRedirect" id="quoteRedirect" value="<?php echo $form_options['redirect_url'] ?>">

    </form>

    <form id="free-quote-form" class="preset-0 col">
        <?php if ($form_options['form_header_text'] != null && $form_options['form_header_text'] != '') { ?>
            <div class="form-row mb-3 form_header">
                <div class="col-12 text-center"><?php echo $form_options['form_header_text'] ?></div>
            </div>
        <?php } ?>
        <input type="hidden" name="company_key" id="company_key" value="<?php echo $form_options['company_id'] ?>">
        <div class="form-row">

            <div class="row-columns">
                <div class="input-wrap">
                    <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-truck"></i></span>
                            </div>
                            <input type="text" class="form-control" name="source_zip" id="source_zip" placeholder="Moving From ZIP code*" required>
                        <div class="invalid-feedback" for="source_zip"></div>
                    </div>
                </div>

                <div class="input-wrap">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-map"></i></span>
                        </div>
                        <input type="text" class="form-control" name="destination_zip" id="destination_zip" placeholder="Moving To ZIP code*" required>
                        <div class="invalid-feedback" for="destination_zip"></div>
                    </div>
                </div>

            </div>
            <div class="row-columns">
                <div class="input-wrap">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Your Full Name*" required> 
                        <div class="invalid-feedback" for="first_name"></div>
                    </div>
                </div>
                <div class="input-wrap">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email Address*" required> 
                        <div class="invalid-feedback" for="email"></div>
                    </div>
                </div>
            </div>
            <div class="row-columns">
                <div class="input-wrap">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                        </div>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone Number*" required>
                        <div class="invalid-feedback" for="phone"></div>
                    </div>
                </div>


                <div class="input-wrap">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </div>
                        <input type="date" class="form-control " name="move_date" id="move_date" placeholder="Date Of Move*" required>
                        <div class="invalid-feedback" for="move_date"></div>
                    </div>
                </div>
            </div>

            <div class="row-columns row-select">

            <div class="input-wrap">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-dolly"></i></span>
                    </div>
                    <select class="form-control selectpicker required" name="move_size_id" id="move_size_id" required placeholder="Size Of Move*">
                        <option value="default">Size Of Move*</option>
                        <option value="1">Studio</option>
                        <option value="2">1 Bedroom</option>
                        <option value="3">2 Bedrooms</option>
                        <option value="4">3 Bedrooms</option>
                        <option value="5">4 Bedrooms</option>
                        <option value="6">4+ Bedrooms</option>
                        <option value="7">Small Office</option>
                        <option value="8">Medium Office</option>
                        <option value="9">Large Office</option>
                        <option value="10">Small storage (5x5, 5x8, 5x10)</option>
                        <option value="11">Medium storage (10x10, 10x15)</option>
                        <option value="12">Large storage (10x20)</option>
                    </select> 
                    <div class="invalid-feedback" for="move_size_id"></div>
                </div> </div>
            </div>
        </div>

        <div class="form-row text-center">
            <button type="submit" class="btn btn-primary m-auto w-100"><i class="fas fa-share mr-2"></i><?php echo $form_options['send_bitton_text'] ?></button>
        </div>
    </form>
</div>