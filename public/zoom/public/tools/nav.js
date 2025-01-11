/* eslint-disable no-undef */
window.addEventListener('DOMContentLoaded', function(event) {
  console.log('DOM fully loaded and parsed');
  websdkready();
});

function websdkready() {
  var testTool = window.testTool;
  if (testTool.isMobileDevice()) {
    // eslint-disable-next-line no-undef
    var vConsole = new VConsole();
  }
  console.log("checkSystemRequirements");
  // console.log(JSON.stringify(ZoomMtgEmbedded.checkSystemRequirements()));

  var CLIENT_ID = "fhpQAiXITnWzSd0oyPtmxQ";

  /**
   * NEVER PUT YOUR ACTUAL SDK SECRET OR CLIENT SECRET IN CLIENT SIDE CODE, THIS IS JUST FOR QUICK PROTOTYPING
   * The below generateSignature should be done server side as not to expose your api secret in public
   * You can find an example in here: https://developers.zoom.us/docs/meeting-sdk/auth/#signature
   */
  var CLIENT_SECRET = "uFCyrY4fu3K17lTgkzIOUUt1Px7uftPj";


  // click join meeting button
  document
    .getElementById("join_meeting")
    .addEventListener("click", function (e) {
      e.preventDefault();
      var meetingConfig = testTool.getMeetingConfig("81682031608","Programmer Elijah","491767",0,"elijahsun@gmail.com");
      if (!meetingConfig.mn || !meetingConfig.name) {
        alert("Meeting number or username is empty");
        return false;
      }
      testTool.setCookie("meeting_number", meetingConfig.mn);
      testTool.setCookie("meeting_pwd", meetingConfig.pwd);

      // generateSDKSignature define in token-tool.js
      var signature = generateSDKSignature({
        meetingNumber: meetingConfig.mn,
        sdkKey: CLIENT_ID,
        sdkSecret: CLIENT_SECRET,
        role: meetingConfig.role,
        success: function (res) {
          console.log(res);
          meetingConfig.signature = res;
          meetingConfig.sdkKey = CLIENT_ID;
          if (document.getElementById('demoType').value === 'cdn') {
          var joinUrl = "/meetings/ui?" + testTool.serialize(meetingConfig);
          console.log(joinUrl);
         location.href=joinUrl
          //  window.open(joinUrl, "_blank");
          } else {
            var joinUrl = "/meetings/ui?" + testTool.serialize(meetingConfig);
            console.log(joinUrl);
            location.href=joinUrl
            //window.open(joinUrl, "_blank");
          }
        },
      });
    });


}
