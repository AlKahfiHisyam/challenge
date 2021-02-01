<html lang="en">
  <head>
    <meta name="google-signin-client_id" content="1073446404452-kfet300f5ke6dc0vppb0tfqspa4ng7il.apps.googleusercontent.com">
  </head>
  <body>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
        <a href="#" onclick="signOut();" id="button">Sign out</a>
            <div id="id" name="id"></div>
            <div id="nama" name="nama"></div>
            <image id="image" src=''></div>
            <div id="email" name="email"></div>

    <script src="https://apis.google.com/js/platform.js" async defer></script>  
    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            document.getElementById('id').innerHTML = 'ID Pemilik : '+profile.getId(); // Do not send to your backend! Use an ID token instead.
            document.getElementById('nama').innerHTML = 'Nama Pemilik : ' + profile.getName();
            document.getElementById('image').src = profile.getImageUrl();
            document.getElementById('email').innerHTML = 'Email : ' + profile.getEmail(); // This is null if the 'email' scope is not present.
        }

        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                location.reload();
            console.log('User signed out.');
            });
        }
    </script>
    
  </body>
</html>