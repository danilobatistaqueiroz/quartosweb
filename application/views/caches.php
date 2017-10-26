<html>
  <meta charset="UTF-8">
  <script src="../bower_components/jquery/dist/jquery.js"></script>
  <script>
  function sendAndLoad(sURL, params, sType) {
      $.ajax({
        url: sURL,
        type: 'GET',
        data: params,
        success: function(response) {
          console.log(response);
          document.all['output'].value = "success:\r\n" + JSON.stringify(response);
        },
        error: function(xhr) {
          console.log(xhr);
          document.all['output'].value = "error " + xhr;
        }
      });
  }
  function buttonUserClick(){
    var params = {login:'super', name: 'super user', passwd: '123', email: 'super@gmail.com', type: 'Admin', address: 'Avenue New World'};
    sendAndLoad('/ci_projects/quartosweb/index.php/rediscache',params);
  }
  </script>
  <body>
    <button onclick="buttonUserClick();">Test Rest Call User</button>
    <textarea rows="16" cols="80" id="output" value=""></textarea>
  </body>
</html>