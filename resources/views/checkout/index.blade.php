@extends('layouts.app')

@section('extra-script')
    <script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')

<div class="col-md-12">
    <h1>Page de paiement</h1>
    <div class="row">
        <div class="col-md-6">
            <form action="#" class="my-4">
                <div id="card-element">
                </div>
                <div id="card-errors" role="alert"></div>
                <button class="btn btn-success mt-4" id="submit">Pay</button>
            </form>
        </div>
    </div>
</div>
    
@endsection

@section('extra-js')
<script>
        var stripe = Stripe('pk_test_51I0wFvAEUallKK3aIL2RXuwQcFBTKeWcBL1VWgsRoMGkhEOf7toFXOzBlD9pr6usRP3Y8GjVZtc09o5kh2UnUNZo00NHokebu8');
        var elements = stripe.elements();
        var style = {
            base: {
            color: "#32325d",
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: "antialiased",
            fontSize: "16px",
            "::placeholder": {
                color: "#aab7c4"
            }
            },
            invalid: {
            color: "#fa755a",
            iconColor: "#fa755a"
            }
        };
        var card = elements.create("card", { style: style });
        card.mount("#card-element");
        card.addEventListener('change', ({error}) => {
        const displayError = document.getElementById('card-errors');
            if (error) {
                displayError.classList.add('alert', 'alert-warning', 'mt-3');
                displayError.textContent = error.message;
            } else {
                displayError.classList.remove('alert', 'alert-warning', 'mt-3');
                displayError.textContent = '';
            }
        });
        var submitButton = document.getElementById('submit');
        submitButton.addEventListener('click', function(ev) {
        ev.preventDefault();
        stripe.confirmCardPayment("{{ $clientSecret }}", {
            payment_method: {
                card: card
            }
            }).then(function(result) {
                if (result.error) {
                // Show error to your customer (e.g., insufficient funds)
                console.log(result.error.message);
                } else {
                    // The payment has been processed!
                    if (result.paymentIntent.status === 'succeeded') {
                        // Show a success message to your customer
                        // There's a risk of the customer closing the window before callback
                        // execution. Set up a webhook or plugin to listen for the
                        // payment_intent.succeeded event that handles any business critical
                        // post-payment actions.
                        console.log(result.paymentIntent);
                    }
                }
            });
        });

</script>
@endsection