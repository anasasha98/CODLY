
const inputs = document.querySelectorAll("input, select, textarea");


for (const el of inputs) {
  el.oldValue = el.value + el.checked;
}

// Declares function and call it directly
var setEnabled;
(setEnabled = function () {
  var e = true;
  for (const el of inputs) {
    if (el.oldValue !== (el.value + el.checked)) {
      e = false;
      break;
    }
  }
  document.querySelector("#discard").disabled = e;
  document.querySelector("#save").disabled = e;
})();

document.oninput = setEnabled;
document.onchange = setEnabled;
