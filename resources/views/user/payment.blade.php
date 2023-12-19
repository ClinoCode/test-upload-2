<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-nCMx1D437pVJc2Zr"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Halaman Pembayaran Pelanggan - Sekayu Catering</title>
</head>

<body>
    <form action="" id="submit_form" method="POST">
        @csrf
        <input type="hidden" name="json" id="json_callback">
    </form>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        document.addEventListener('DOMContentLoaded', function pembayaran() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snap_token }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    send_response_to_form(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */

                    send_response_to_form(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    send_response_to_form(result)
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    let confirmClose = confirm("Kembali ke form pemesanan?");
                    if (confirmClose) {
                        // Redirect to main page
                        window.location.href = "{{ route('home.form_pemesanan') }}";
                    } else {
                        pembayaran();
                    }

                }
            })
        });

        function send_response_to_form(result) {
            document.getElementById('json_callback').value = JSON.stringify(result);
            $('#submit_form').submit();
        }
    </script>

</body>

</html>
