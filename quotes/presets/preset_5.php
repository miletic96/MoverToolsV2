<style>
    .free-quote-form .btn-primary {
        border-radius: 5px;
        text-transform: unset;
    }

    .free-quote-form .btn-primary,
    .free-quote-form .btn-primary:hover {
        background-color: <?php echo $form_options['primary_color'] ?> !important;
        border-color: <?php echo $form_options['primary_color'] ?> !important;
    }

    .free-quote-form .btn-primary:focus {
        background-color: <?php echo $form_options['secondary_color'] ?> !important;
        border-color: <?php echo $form_options['secondary_color'] ?> !important;
    }

    .free-quote-form .select2-container--default .select2-selection--single,
    .free-quote-form .input-group,
    .free-quote-form .input-group .input-group-text,
    .free-quote-form .input-group .form-control {
        background-color: #f3f3f3;
        border: none !important;
    }

    .free-quote-form .input-group-text {
        background-color: transparent;
        border-right: none;
        color: <?php echo $form_options['secondary_color'] ?>;
        border-radius: 0;
    }

    .free-quote-form .datepicker td:hover,
    .free-quote-form .datepicker td.day:hover,
    .datepicker th:hover {
        background-color: <?php echo $form_options['secondary_color'] ?>;
    }

    .free-quote-form .select2-container {
        flex: 1;
    }


    <?php
    include('variable/preset_css_inject.php');
    ?>
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
        <div class="form-row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2 col-sm-12  ">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
  <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
</svg></span>
                    </div>
                    <input type="text" class="form-control" name="source_zip" id="source_zip" placeholder="Moving From ZIP code*" required>
                    <div class="invalid-feedback" for="source_zip"></div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 col-sm-12 ">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
  <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
</svg></span>
                    </div>
                    <input type="text" class="form-control" name="destination_zip" id="destination_zip" placeholder="Moving To ZIP code*" required>
                    <div class="invalid-feedback" for="destination_zip"></div>
                </div>
            </div>



            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></span>
                    </div>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Your Full Name*" required>
                    <div class="invalid-feedback" for="first_name"></div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg></span>
                    </div>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email Address*" required>
                    <div class="invalid-feedback" for="email"></div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg></span>
                    </div>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone Number*" required>
                    <div class="invalid-feedback" for="phone"></div>
                </div>
            </div>


            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
  <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
  <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></span>
                    </div>
                    <input data-provide="datepicker" type="date" class="form-control" name="move_date" id="move_date" placeholder="Date Of Move*" required>
                    <div class="invalid-feedback" for="move_date"></div>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <div class="input-group">
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
                </div>
            </div>
        </div>

        <div class="form-row text-center">
            <button type="submit" class="btn btn-primary m-auto"><?php echo $form_options['send_bitton_text'] ?></button>
        </div>
    </form>
</div>