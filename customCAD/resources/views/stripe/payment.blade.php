<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <!--website-favicon-->
    <link href="{{ asset('images/cadLogoNoText.png') }}" rel="icon">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">


        body {
            background: #7F7FD5;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #91EAE4, #86A8E7, #7F7FD5);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #91EAE4, #86A8E7, #7F7FD5) fixed;/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            font-family: 'Poppins';
        }

        .btn-purple-moon {
            background: #4e54c8;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #8f94fb, #4e54c8);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #8f94fb, #4e54c8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #fff;
            border: 3px solid #eee;
        }
        .btn-funky-moon {
            background: #A770EF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(145deg, #FDB99B, #CF8BF3, #A770EF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(145deg, #FDB99B, #CF8BF3, #A770EF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #fff;
            border: 3px solid #eee;
        }

    
        .panel-title {
        display: block;
        font-weight: bold;
        margin-bottom: 16px;
        }

        .panel-title span {
            font-weight: normal;

        }

        .display-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }

    </style>
</head>
<body>
  
    <div style="margin-top:40px" class="container">
        <div class="row">
            <div class="cad-img">
                <img class="img-responsive center-block  " style="margin-top:50px; margin-bottom:50px;" width=400 src="{{ asset('images/cadLogo.png') }}" alt="image">
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table" >
                        <div class="row display-tr" >
                            <h3 class="panel-title display-td" >Payment Details</h3>     
                                <img class="img-responsive pull-right" src="{{ asset('/images/accepted_c22e0.png') }}">
                        </div>                    
                    </div>
                    <div class="panel-body">

                        <div class="payment-details">
                            <h4 class="text-center"><b>Event registration for:</b></h4><br> 
                            <h4 class="text-center">{{ $event->title }}</h4>
                            <hr>
                            <h4 class="text-center"><b>You will be charged as below:</b></h4><br>
                            <h4 class="panel-title">Registration fee <span class="pull-right">{{ $event->fee }}</span><br></h4>
                            <h4 class="panel-title">Stripe Processing fee <span class="pull-right">{{ $processing_fee = number_format($event->fee * 0.03 + 1, 2) }}</span><br></h4>
                            <h4 class="panel-title">Taxes <span class="pull-right">{{ $taxes = number_format($processing_fee * 0.06, 2) }}</span><br></h4>
                            <hr>
                            <h4 class="panel-title">Total Amount <span class="pull-right">{{ $total = number_format($event->fee + $processing_fee + $taxes, 2) }}</span><br></h4>
                        </div>
      
                        <hr>
                        <form 
                                role="form" 
                                action="{{ route('stripe.post', ['event_id' => $event->id,'full_name' => $full_name, 'phone_number' => $phone_number,'ic_number' => $ic_number,
                                'matric_number' => $matric_number, 'total'=> $total] ) }}" 
                                method="post" 
                                class="require-validation"
                                data-cc-on-file="false"
                                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                id="payment-form">
                            @csrf
      
                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> <input
                                        class='form-control' size='4' type='text' name='name'>
                                </div>
                            </div>
      
                            <div class='form-row row'>
                                <div class='col-xs-12 form-group card required'>
                                    <label class='control-label'>Card Number</label> <input
                                        autocomplete='off' class='form-control card-number' size='20'
                                        type='text'>
                                </div>
                            </div>
      
                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label> <input autocomplete='off'
                                        class='form-control card-cvc' placeholder='ex. 311' size='4'
                                        type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' size='2'
                                        type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                        type='text'>
                                </div>
                            </div>
      
                            <div class='form-row row'>
                                <div style="height: auto !important" class='col-md-12 error form-group hide'>
                                    <div class='alert-danger alert'>Please correct the errors and try again.</div>
                                </div>
                            </div>
      
                            <div style="margin-top:auto;margin-bottom:10px;"class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-purple-moon btn-lg btn-block" type="submit">Pay Now (RM {{ $total }})</button>
                                </div>
                            </div>
                              
                        </form>
                        <a style="text-decoration:none;"href="{{ route('showSingleProgram',$event) }}"><button class="col btn btn-funky-moon btn-lg btn-block">Cancel Payment</button></a>
                    </div>
                </div>        
            </div>
        </div>
          
    </div>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
    <script type="text/javascript">
    $(function() {
    
        var $form         = $(".require-validation");
    
        $('form.require-validation').bind('submit', function(e) {
            var $form         = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'].join(', '),
            $inputs       = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid         = true;
            $errorMessage.addClass('hide');
    
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
            });
    
            if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
            }
    
    });
    
    function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];
                
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    
    });
    </script>
      
</body>

</html>