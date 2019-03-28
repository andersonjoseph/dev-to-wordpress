async function DTW_SHORTCODE_getPost(postURL) {

  let response = await fetch(postURL);

  let body = await response.text();
  let matches = body.match(/\d+(?=" id="article-body")/);

  const articleID = matches ? matches[0] : null;

  response = await fetch(`https://dev.to/api/articles/${articleID}`);

  body = await response.json();

  return body;
}

async function DTW_SHORTCODE_showPost(container, postURL) {

  let post;
  try {
    post = await DTW_SHORTCODE_getPost(postURL);
  } catch(err) {
    console.log(err);
    return container.innerHTML = '<span color: red>Something bad happened :( </span>'
  }

  const HTML = `
    <figure>
      <a href="https://dev.to/${post.user.name}">
        <img src="${post.user.profile_image}">
      </a>
    </figure>
    <main>
      <h3><a href="${post.url}">${post.title}</a></h3>

      <a style="display: inline;" href="https://dev.to/${post.user.name}">${post.user.name}</a> | <figure style="display: inline;"><p style="display: inline;">${post.positive_reactions_count}</p> <img style="height: 15px;" src="${DTW_image_reactions}"></figure>
    </main>
  `;

  container.innerHTML = HTML;
}

const DTW_SHORTCODE_containers = document.getElementsByClassName('DTW_shortcode_container');
for(let container of DTW_SHORTCODE_containers) {
  DTW_SHORTCODE_showPost(container, container.getAttribute('data-post'));
}
