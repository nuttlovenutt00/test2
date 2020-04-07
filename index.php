<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My LIFF App</title>
</head>
<body>
  <p id="scanCode"></p>
  <p>
    <button id="btnScanCode" onclick="scanCode();">Scan Code</button>
    <button id="btnScanCode" onclick="send();">Send</button>
  </p>
  <script src="https://static.line-scdn.net/liff/edge/2.1/liff.js"></script>
  <script>
    function scanCode() {
      liff.scanCode().then(result => {
        const stringifiedResult = JSON.stringify(result);
        alert(stringifiedResult);
        document.getElementById("scanCode").textContent = stringifiedResult;
      });
    }

    liff.init({ liffId: "1654049732-NO7ZWReR" }, () => {
      function send() {
      liff.sendMessages([{
            type: 'text',
            text: "Send text message"
        }, {
            type: 'sticker',
            packageId: '2',
            stickerId: '144'
        }]).then(function () {
            window.alert("Sent");
        }).catch(function (error) {
            window.alert("Error sending message: " + error);
        });

      }
    }, err => console.error(err.code, error.message));
   
     
      
  </script>
</body>
</html>
