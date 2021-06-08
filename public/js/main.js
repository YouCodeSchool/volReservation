let number = document
  .querySelector("body > div > div > div:nth-child(5) > input")
  .vdocument.querySelector("body > div > div > div:nth-child(5) > button")
  .addEventListener("click", function () {
    for (var i = 0; i < number; i++) {
      var form = document.createElement("form");
      document.body.appendChild(form);
      form.method = "";
      form.action = "";
      var element1 = document.createElement(
        "<INPUT NAME='un' TYPE='text' VALUE='" + un + "'>"
      );
      form.appendChild(element1);
      var element2 = document.createElement(
        "<INPUT NAME='pw' TYPE='text' VALUE='" + pw + "'>"
      );
      form.appendChild(element2);
      form.submit();
    }
  });
