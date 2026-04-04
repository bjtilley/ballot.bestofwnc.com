/******************
    User custom JS
    ---------------

   Put JS-functions for your template here.
   If possible use a closure, or add them to the general Template Object "Template"
*/

$(document).on("ready pjax:scriptcomplete", function () {
  /**
   * Code included inside this will only run once the page Document Object Model (DOM) is ready for JavaScript code to execute
   * @see https://learn.jquery.com/using-jquery-core/document-ready/
   */

  // Loop from question fields
  function runScript() {
    let mxFormFields = document.getElementsByClassName("form-control");
    if (mxFormFields.length === 0) return;

    const groupData = window.groupQuestionsData;
    if (!groupData) return;

    for (var i = 0; i < mxFormFields.length; i++) {
      let mxFieldPieces = mxFormFields[i].getAttribute("name").split("X");
      let mxQuestionId = mxFieldPieces[2];
      const mxQuestionFieldId = mxFormFields[i].id;
      let answers = groupData[mxQuestionId] || [];

      $(`#${mxQuestionFieldId}`).autocomplete({
        minLength: 3,
        source: answers,
      });
    }
  }
  runScript();

  function loadQuestionAnswers() {}
  /*
  // Vanilla JavaScript
  document.querySelectorAll(".mx-form-fields").forEach((e) => {
    e.style.display = "none";
  });

  window.onloadTurnstileCallback = function () {
    turnstile.render("#cloudflare-turnstile", {
      sitekey: "0x4AAAAAABAMlwBNpUTdYkxr",
      callback: function (token) {
        console.log(`Challenge Success ${token}`);
        document
          .querySelector("#mx-limesurvey-submit")
          .classList.remove("d-none");
      },
    });
  };
  */
});
