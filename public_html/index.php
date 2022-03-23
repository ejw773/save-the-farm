<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Save the Farm</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div id="header">
    <div id="header-contents">
      <h1 class="title">Save the Farm!</h1>
      <div class="button" data-button="status" id="status-button">Status</div>
    </div>
  </div>
  <div id="status-bar" style="display: none">
    <table>
      <th>Glasses:</th>
      <td>On</td>
      <th>Contacts:</th>
      <td>Out</td>
    </table>
  </div>

  <div class="message-area">
    <p class="message-text">Ok, the game is about to begin. Will you be able to find the golden mouse statuette and save your great-aunt's farm? We wish you good luck!</p>
    <div class="make-your-choice">
      <div class="main-option">
        Eat
        <div class="second-option" data-button="eat soup">Soup</div>
        <div class="second-option" data-button="eat mushrooms">Mushrooms</div>
      </div>
      <div class="main-option">
        Go
        <div class="second-option" data-button="go to the forest">To the Forest</div>
        <div class="second-option" data-button="go to the bathroom">To the Bathroom</div>
      </div>
    </div>
  </div>
  <script src="index.js"></script>
</body>

</html>