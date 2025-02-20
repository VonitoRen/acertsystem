<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>PRC-CAR | ACERT</title>
    <link rel="icon" type="/image/png" sizes="32x32" href="\img\prclogo.svg">
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/sweetalert2.min.css')}}">
<script src="{{asset('js/sweetalert2.all.min.js')}}"></script>
<!-- Custom styles for this template-->
<link href="/css/sb-admin-2.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<style>
   
#password-error {
    color: red !important;  /* Force the color to be red */
    font-size: 0.9em;
    margin-top: 5px;
    display: block;
}

#username-error {
    color: red !important;  /* Force the color to be red */
    font-size: 0.9em;
    margin-top: 5px;
    display: block;
}

</style>

</head>
<body>
    
</body>
</html>

<x-guest-layout>
    <center>
        <b><h1>Automated Certification System (ACERT)</h1></b>
    </center>
    <br>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form>
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <span id="username-error" class="text-red-500" ></span> <!-- Error message for username -->
        </div>

      <!-- Password -->
        <div class="mt-4 position-relative">
            <x-input-label for="password" :value="__('Password')" />
            
            <!-- Password input with padding for the eye icon -->
            <input id="password" class="block mt-1 w-full pr-10" type="password" name="password" required autocomplete="current-password" />
            
            <!-- Eye icon to toggle password visibility -->
            <i id="toggle-password" class="fas fa-eye position-absolute" style="right: 10px; top: 50%; transform: translateY(120%); cursor: pointer;"></i>
            
            <!-- Error message for password -->
            <span id="password-error" class="text-red-500 block mt-1"></span>
        </div>


        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <button id="jihadi" class="btn btn-primary">
                Log In
            </button>
        </div>
    </form>
</x-guest-layout>


<script>
      $(document).ready(function() {
            // Toggle password visibility
            $('#toggle-password').on('click', function() {
                var passwordField = $('#password');
                var passwordFieldType = passwordField.attr('type');
                
                // Toggle between 'password' and 'text' type
                if (passwordFieldType === 'password') {
                    passwordField.attr('type', 'text');
                    $(this).removeClass('fa-eye').addClass('fa-eye-slash'); // Change icon to "eye-slash"
                } else {
                    passwordField.attr('type', 'password');
                    $(this).removeClass('fa-eye-slash').addClass('fa-eye'); // Change icon back to "eye"
                }
            });
            
        $('#jihadi').on('click', function(e){
            e.preventDefault();
            console.log('napindot')
            var username = $('#username').val();
            var password = $('#password').val();
            var walanglaman = false;
            $('#username-error').empty();
            $('#password-error').empty();
        // Validate username
        if (username == '') {
           
            $('#username-error').text('Username is required.');
            console.log('jeahdy')
            walanglaman = true;
        }

        // Validate password
        if (password == '') {
            $('#password-error').text('Password is required.');
            walanglaman = true;
        }

        // If there's an error, don't send the request
        if (walanglaman) {
            return;
        }

        $.ajax({
    url: '{{ route('logInAuthenticate') }}', // Your URL for login
    type: 'POST',
    data: {
        _token: '{{ csrf_token() }}',
        username: username,
        password: password,
    },
    dataType: 'json',
    success: function(response) {
        console.log(response); // This will show if redirection URL is received
        if (response.status === 'success') {
            // Redirect to the URL received in the response
            window.location.href = response.redirection;
        } else {
            // Display the error message below the password field
            $('#password-error').html(response.errorMessage).show();
            $('#password').addClass('border-red-500'); // Optionally add red border to the password field
        }
    },
    error: function(error) {
        console.error(error);
        // Optionally, display a general error message
        $('#password-error').html('An error occurred during login. Please try again.').show();
        $('#password').addClass('border-red-500'); // Optionally add red border to the password field
    }
});


        })
        
     
    })
// Function to update the eye icon's position
function updateEyeIconPosition() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('toggle-password');
        
        // Calculate the input field's height and adjust the icon's position
        const inputHeight = passwordInput.offsetHeight;
        eyeIcon.style.top = `${inputHeight / 2}px`; // Center the icon vertically
    }

    // Attach the function to the input event
    document.getElementById('password').addEventListener('input', updateEyeIconPosition);

    // Call the function initially to set the correct position
    updateEyeIconPosition();

</script>