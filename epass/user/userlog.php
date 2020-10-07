<?php
include('header.php')
?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.orange-indigo.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
      <link rel="stylesheet" href="userlog.css">
      
      <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-app.js"></script>
      <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
      <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-analytics.js"></script>
      <!-- Add Firebase products that you want to use -->
      <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-auth.js"></script>
      <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-firestore.js"></script>
      <script type="text/javascript" src="fb.js"></script>
   </head>
   <body>
      <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">
         <!-- Header section containing title -->
         <header class="mdl-layout__header mdl-color-text--white mdl-color--light-blue-700">
            <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-grid">
               <div class="mdl-layout__header-row mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--8-col-desktop">
                  <a>
                     <h3>Citizen E-pass Signup</h3>
                  </a>
               </div>
            </div>
         </header>
         <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-grid">
               <!-- Container for the demo -->
               <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
                  <div class="mdl-card__title mdl-color--light-blue-600 mdl-color-text--white">
                     <h2 class="mdl-card__title-text">Google Authentication with Popup</h2>
                  </div>
                  <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                     <p>Sign in with your Google account below....to proceed further</p>
                     <!-- Button that handles sign-in/sign-out -->
                     <button disabled class="mdl-button mdl-js-button mdl-button--raised" id="quickstart-sign-in">Sign in with Google</button>
                     <!-- Container where we'll display the user details -->
                     <div class="quickstart-user-details-container">
                        Sign-in status: <span id="quickstart-sign-in-status">Unknown</span>
                        <div>Firebase auth <code>currentUser</code> INfo:</div>
                        <pre><code id="quickstart-account-details"></code></pre>
                        <div>
                           <strong>User ID</strong>
                           <pre><code id="uid"></code></pre>
                        </div>
                        <div><strong>User ProFile Pic:</strong></div>
                        <img src="img_avatar2.png" alt="Avatar" id="myimg" class="avatar"><br>
                        <div><strong>Google OAuth Access Token:</strong></div>
                        <pre><code id="quickstart-oauthtoken"></code></pre>
                        <!--Phone-->
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
   </body>
</html>