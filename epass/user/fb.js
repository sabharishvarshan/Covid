function include(file) { 
  var script  = document.createElement('script'); 
  script.src  = file; 
  script.type = 'text/javascript'; 
  document.head.appendChild(script); 
  console.log('Hi');
} 
var firebaseConfig = {
  apiKey: "AIzaSyCKpMQC6an9JeK1P4uIrVXROQySj8jt7RY",
  authDomain: "covid-410.firebaseapp.com",
  databaseURL: "https://covid-410.firebaseio.com",
  projectId: "covid-410",
  storageBucket: "covid-410.appspot.com",
  messagingSenderId: "128131987870",
  appId: "1:128131987870:web:df88ce265757aa9351be8f",
  measurementId: "G-BS9TLPC092"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
function toggleSignIn() {
  if (!firebase.auth().currentUser) {
      // [START createprovider]
      var provider = new firebase.auth.GoogleAuthProvider();
      // [END createprovider]
      // [START addscopes]
      provider.addScope('https://www.googleapis.com/auth/contacts.readonly');
      // [END addscopes]
      // [START signin]
      firebase.auth().signInWithPopup(provider).then(function(result) {
          // This gives you a Google Access Token. You can use it to access the Google API.
          var token = result.credential.accessToken;
          // The signed-in user info.
          var user = result.user;
          // [START_EXCLUDE]
          document.getElementById('quickstart-oauthtoken').textContent = token;
          // [END_EXCLUDE]
      }).catch(function(error) {
          // Handle Errors here.
          var errorCode = error.code;
          var errorMessage = error.message;
          // The email of the user's account used.
          var email = error.email;
          // The firebase.auth.AuthCredential type that was used.
          var credential = error.credential;
          // [START_EXCLUDE]
          if (errorCode === 'auth/account-exists-with-different-credential') {
              alert('You have already signed up with a different auth provider for that email.');
              // If you are using multiple auth providers on your app you should handle linking
              // the user's accounts here.
          } else {
              console.error(error);
          }
          // [END_EXCLUDE]
      });
      // [END signin]
  } else {
      // [START signout]
      firebase.auth().signOut();
      // [END signout]
  }
  // [START_EXCLUDE]
  document.getElementById('quickstart-sign-in').disabled = true;
  // [END_EXCLUDE]
}

function initApp() {
  // Listening for auth state changes.
  // [START authstatelistener]
  firebase.auth().onAuthStateChanged(function(user) {
      if (user) {
          // User is signed in.
          var displayName = user.displayName;
          var email = user.email;
          var emailVerified = user.emailVerified;
          var photoURL = user.photoURL;
          var isAnonymous = user.isAnonymous;
          var uid = user.uid;
          var providerData = user.providerData;
          // [START_EXCLUDE]
          document.getElementById('quickstart-sign-in-status').textContent = 'Signed in';
          document.getElementById('quickstart-sign-in').textContent = 'Sign out';
          document.getElementById('quickstart-account-details').textContent = displayName;
          document.getElementById('uid').textContent = uid;
          document.getElementById('myimg').src = photoURL;
          localStorage.setItem("storageName", displayName);
          localStorage.setItem("img", photoURL);
          localStorage.setItem("uid", uid);
          window.open("http://localhost/covid/epass/admin/sidebar.html");

          // [END_EXCLUDE]
      } else {
          // User is signed out.
          // [START_EXCLUDE]
          document.getElementById('quickstart-sign-in-status').textContent = 'Signed out';
          document.getElementById('quickstart-sign-in').textContent = 'Sign in with Google';
          document.getElementById('quickstart-account-details').textContent = '';
          document.getElementById('quickstart-oauthtoken').textContent = '';
          document.getElementById('uid').textContent = '';
          document.getElementById('myimg').src = "img_avatar2.png";
          window.close("http://localhost/covid/epass/admin/sidebar.html");
          // [END_EXCLUDE]
      }
      // [START_EXCLUDE]
      document.getElementById('quickstart-sign-in').disabled = false;


      // [END_EXCLUDE]
  });
  // [END authstatelistener]

  document.getElementById('quickstart-sign-in').addEventListener('click', toggleSignIn, false);
}
window.onload = function() {
  initApp();
};

function out() {
  firebase.auth().signOut();
}

  