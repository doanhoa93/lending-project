// MySQL API
var apis = 'api.php'; 

// set image directori
var imageDir = 'image';

// Replace with: your firebase account
var config = {
    apiKey: "AIzaSyDfKpgAUCOja3z-tc0yHOqzOCEGo0seJAQ",
    databaseURL: "https://chatdemo-99edd.firebaseio.com/"
};
firebase.initializeApp(config);

// create firebase child
var dbRef = firebase.database().ref(),
	messageRef = dbRef.child('message'),
	userRef = dbRef.child('user');
