<script>
async function getUserId(formID) {
  
  const username = document.querySelector(`#${formID} #username-container input`).value;
  const fieldUserID = document.querySelector(`#${formID} #userid-container input`);

  let response;

  try {
    response = await fetch(`https://dev.to/${username}`);
  } catch(err) {
    console.log(err);
    return fieldUserID.value = 'Error';
  }

  const body = await response.text();

  const matches = body.match(/user_\d+(?=")/);

  const userId = matches ? matches[0] : `error 404: the user ${username} doesn't exist`;

  fieldUserID.value = userId;
}

function DTW_setButtonEvent(button) {

  button.onclick = async function(ev) {
    ev.preventDefault();

    button.disabled = true;
    button.innerText = 'Loading';

    const formID = button.getAttribute('data-formId');

    await getUserId(formID);

    button.innerText = 'Get ID';
    button.disabled = false;
  }

}
</script>
