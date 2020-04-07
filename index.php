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

function send() {
    liff.init({ liffId: "1654049732-NO7ZWReR" }, () => {
      
      liff.sendMessages([{
            type: 'text',
            text: "Send text message"
        }
        ])

      
    }, err => console.error(err.code, error.message));
   alert("send");
       }
      
  </script>
</body>
</html>
