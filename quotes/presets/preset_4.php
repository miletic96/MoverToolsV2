<style>
    .form-buttons {
        justify-content: flex-end;

    }

    .form-buttons-justify {
        justify-content: space-between;

    }
    .submit-active {
        display: inline-block !important;
    }

    fieldset {
        display: flex;
        flex-wrap: wrap;
        flex: 1 1 auto;
    }

    .form-wizard {
        padding: 40px 50px;
        background-color: #ffffff;
        /* box-shadow: 0 5px 25px -5px rgba(0, 0, 0, 0.1); */
    }

    .step {
        display: none;
    }

    .step.is-active {
        display: flex;
        flex-wrap: wrap;
        flex: 1 1 auto;
    }

    .input-group {
        padding-bottom: 10px;
    }

    .input-group.has-error .form-control,  .input-group.has-error .input-group-text{
        border-color: #ff3355 !important;
    }

    /* .form-control {
    } */

    .btn-prev {
        display: none;
    }

    #btn-submit {
        display: none;
    }

    .btn-prev.is-active
        {
        display: inline-block;
    }

    .progress-bar {
        margin-bottom: 10px;
        width: 100%;
        height: 2px;
        background-color: #7755dd;
        transform-origin: left center;
        transform: scaleX(0.01);
        transition: transform 0.2s ease;
    }

    .datepicker {
        display: none;


    }
/* //Stari CSS */
#form-buttons .btn-primary,
    #form-buttons .btn-primary:hover {
        background-color: <?php echo $form_options['primary_color'] ?> !important;
        border-color: <?php echo $form_options['primary_color'] ?> !important;
    }

    #form-buttons .btn-primary:focus {
        background-color: <?php echo $form_options['secondary_color'] ?> !important;
        border-color: <?php echo $form_options['secondary_color'] ?> !important;
    }

    .free-quote-form .input-group .form-control {
        border: 0;
        border-bottom: 3px solid <?php echo $form_options['primary_color'] ?>;
        border-bottom-right-radius: 6px;
    }

    #free-quote-form .progress-bar {
        background-color: <?php echo $form_options['primary_color'] ?> !important;

    }
    .free-quote-form .input-group-text {

        background-color: transparent;
        border: none;
        border-bottom: 3px solid <?php echo $form_options['primary_color'] ?>;
        color: <?php echo $form_options['secondary_color'] ?>;
        border-radius: 0;
        border-bottom-left-radius: 6px;
    }

    .free-quote-form .btn-primary {
        border-radius: 4px;
        text-transform: unset;
    }

    /* .steps-wrapper {
        min-height: 150px;
    } */

    #free-quote {
        min-height: 150px;
        margin-top: 50px;
    }






    .free-quote-form .input-group .form-control {
        height: 2.5em;
    }

    /* .steps-wrapper {
        min-height: 150px;
    } */


    <?php
    include('variable/preset_css_inject.php');

    ?>
</style>


<div id="free-quote" class="free-quote-form">

    <form>
        <input type="hidden" name="api_url" id="api_url" value="<?php echo $form_options['api_url'] ?>">
        <input type="hidden" name="quoteRedirect" id="quoteRedirect" value="<?php echo $form_options['redirect_url'] ?>">
    </form>

    <form id="free-quote-form" class="preset-5 col form-wizard js-form-wizard">
        <?php if ($form_options['form_header_text'] != null && $form_options['form_header_text'] != '') { ?>
            <div class="form-row mb-3 form_header">
                <div class="col-12"><?php echo $form_options['form_header_text'] ?></div>
            </div>
        <?php } ?>
        <input type="hidden" name="company_key" id="company_key" value="<?php echo $form_options['company_id'] ?>">

        <fieldset class="step js-step">
            <div class="col-lg-3 col-md-12  col-12 px-3">
                <div class=" input-group js-input-group">
                    <div class="  input-group-prepend">
                        <span class=" input-group input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg></span>
                    </div>
                    <input type="text" class="form-control js-form-control" name="first_name" id="first_name" placeholder="First and Last Name*" required>
                    <div class="invalid-feedback" for="first_name"></div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-12 px-3">
                <div class=" input-group js-input-group">
                    <div class="  input-group-prepend">
                        <span class=" input-group input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg></span>
                    </div>
                    <input type="text" class="form-control js-form-control" maxlength="5" name="source_zip" id="source_zip" placeholder="Moving From ZIP code*" required>
                    <div class="invalid-feedback" for="source_zip"></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-12 px-3">
                <div class=" input-group js-input-group">
                    <div class="  input-group-prepend">
                        <span class=" input-group input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
  <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
</svg></span>
                    </div>
                    <input type="text" class="form-control js-form-control" maxlength="5" name="destination_zip" id="destination_zip" placeholder="Moving To ZIP code*" required>
                    <div class="invalid-feedback" for="destination_zip"></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-12 px-3">
                <div class=" input-group js-input-group">
                    <div class="  input-group-prepend">
                        <span class=" input-group input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
  <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg></span>
                    </div>
                    <input type="date" class="form-control js-form-control" name="move_date" id="move_date" placeholder="Date Of Move*" required>
                    <div class="invalid-feedback" for="move_date"></div>
                </div>
            </div>

        </fieldset>
        <fieldset class="step js-step">
            <div class="col-sm-12 col-lg-4 col-12 px-3">
                <div class=" input-group js-input-group">
                    <div class="  input-group-prepend">
                        <span class=" input-group input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
</svg></span>
                    </div>
                    <input type="tel" class="form-control js-form-control" name="phone" id="phone" placeholder="Your Phone Number*" required>
                    <div class="invalid-feedback" for="phone"></div>
                </div>
            </div>



            <div class=" col-lg-4 col-md-12 col-12 px-3">
                <div class=" input-group js-input-group">
                    <div class="  input-group-prepend">
                        <span class=" input-group input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg></span>
                    </div>
                    <input type="email" class="form-control js-form-control" name="email" id="email" placeholder="Your Email Address*" required>
                    <div class="invalid-feedback" for="email"></div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-12 px-3">
                <div class=" input-group js-input-group">
                    <select class="form-control js-form-control  required" name="move_size_id" id="move_size_id" required placeholder="Size Of Move*">
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
                </div>
            </div>

        </fieldset>
        <div id="form-buttons" class=" input-group  text-right form-buttons col-md-12">
            <button type="button" class="btn-prev js-btn-prev btn btn-primary">Prev</button>
            <button type="button" class="js-btn-next btn btn-primary" data-step-text="Next" data-final-step-text="Submit">Next</button>
            <button type="submit" id="btn-submit" class="btn btn-primary"><?php echo $form_options['send_bitton_text'] ?></button>

        </div>

        <div class="progress-bar js-progress-bar"></div>
    </form>
</div>