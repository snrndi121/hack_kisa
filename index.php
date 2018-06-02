<!DOCTYPE html>
<meta charset="utf-8">
<?php
  $arr = array();
  function isValidJSON($str) {
    $arr = json_decode($str);
    return json_last_error() == JSON_ERROR_NONE;
  }

  $json_params = file_get_contents("php://input");

  if (isset($arr) && isValidJSON($json_params)) {
    $decoded_params = json_decode($json_params, true);
    var_dump($decoded_params);
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $myfile2 = fopen("log.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $decoded_params);
    fwrite($myfile2, $decoded_params);
    fclose($myfile);
    fclose($myfile2);
  } else {
    $myfile = fopen("donwork2.txt", "w");
    var_dump($arr);
    fwrite($myfile, "dont work");
    fclose($myfile);
  }
?>
<html>
  <head>
    <title></title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
  </head>
  <body>
    <p>
      <img id="main_logo" src="assets/img/logo.png"
      style="margin-left: auto; margin-right: auto; display: block;margin-top: 50px"/>
    </p>
  </body>
  <script>
    $("p").click(function () {
      jQuery("#main_logo").fadeOut("slow", function() {
        // Animation complete.
        location.href="home.php";
	console.log(FB());
      });
    });
  </script>
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js">
</script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyBAVl1r7oawvRUFK5vUgKDIcK2OtVM46ZI",
        authDomain: "unithon6th2team.firebaseapp.com",
        databaseURL: "https://unithon6th2team.firebaseio.com",
        projectId: "unithon6th2team",
        storageBucket: "",
        messagingSenderId: "308175452800"
    };
    firebase.initializeApp(config);
</script>
<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-auth.js"></script>
<script
	src="https://www.gstatic.com/firebasejs/4.10.1/firebase-database.js"></script>
<script
	src="https://www.gstatic.com/firebasejs/4.10.1/firebase-firestore.js"></script>
<script
	src="https://www.gstatic.com/firebasejs/4.10.1/firebase-messaging.js"></script>
<!-- Leave out Storage -->
<!-- <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-storage.js"></script> -->
<script>
    firebase.initializeApp({
        apiKey: 'AIzaSyBAVl1r7oawvRUFK5vUgKDIcK2OtVM46ZI',
        authDomain: 'unithon6th2team.firebaseapp.com',
        projectId: 'unithon6th2team'
    });
    // Initialize Cloud Firestore through Firebase
    const db = firebase.firestore();
function sortFunc(a, b) {
        var a_data = a['tsymd'] + a['trtm']
        var b_data = b['tsymd'] + b['trtm']
        if (a_data < b_data) return -1;
        if (a_data > b_data) return 1;
        return 0;
    }
    function Firebase1() {
        return new Promise(resolve => {
            db.collection("ReceivedTransferFinAccount").get().then((querySnapshot) => {
                const data = []
                querySnapshot.forEach((doc) => {
                    data.push(doc.data())
                });
                resolve(data)
            });
        });
    }
    function Firebase2() {
        return new Promise(resolve => {
            db.collection("DrawingTransfer").get().then((querySnapshot) => {
                const data = []
                querySnapshot.forEach((doc) => {
                    data.push(doc.data())
                });
                resolve(data)
            });
        });
    }
    async function fireResolve(resolve) {
        const data1 = await Firebase1();
        const data2 = await Firebase2();
        const data = data1.concat(data2)
        data.sort(sortFunc);
        resolve(data)
    }
    function fb() {
        return new Promise(fireResolve)
    }
    async function FB() {
        const result = await fb();
    }
</script>
</html>
