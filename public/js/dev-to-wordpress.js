async function DTW_getPosts(username) {
  const DTW_url = `https://dev.to/api/articles?username=${username}`;
  const response = await fetch(DTW_url);

  const posts = await response.json();

  return posts;
}

async function DTW_showPosts(container) {
  let posts;

  const numberOfPosts = container.getAttribute('data-n');
  const username = container.getAttribute('data-username');

  try {
    posts = await DTW_getPosts(username);
  } catch(err) {
    console.log(err);
    return container.innerHTML = `<p> <span style = 'color: red'>Something bad has happened :( </span></p>`;
  }

  container.innerHTML = '';

  let i = 0;
  for(let post of posts) {
    if(i >= numberOfPosts){
      break;
    }
    const HTMLpost = `
    <div class="DTW-container__post">
      <div class="post__title">
        <h5><a href="${post.url}">${post.title}</a></h5>
      </div>

      <div class="post__content">

        <p class="content__date">${new Date(post.published_at).toDateString()}</p>

        <a href="${post.url}">
          <figure class="content__likes">
            <p>${post.positive_reactions_count}</p>
            <img src="${DTW_image_reactions}">
          </figure>
        </a>

        <a href="https://dev.to${post.path}#comments">
          <figure class="content__comments">
            <p>${post.comments_count}</p>
            <img src="${DTW_image_comments}">
          </figure>
        </a>
      </div>
    </div>
    `;
    container.innerHTML += HTMLpost;
    i++;
  }
};

const DTW_containers = document.querySelectorAll('.DTW-container');
DTW_containers.forEach((container) => {
  DTW_showPosts(container);
});
