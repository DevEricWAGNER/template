<div
  class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1"
>
  <h4 class="mb-6 text-xl font-bold text-black dark:text-white">
    Top Channels
  </h4>

  <div class="flex flex-col">
    <div
      class="grid grid-cols-4 rounded-sm bg-gray-2 dark:bg-meta-4 sm:grid-cols-5"
    >
      <div class="p-2.5 xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Source</h5>
      </div>
      <div class="p-2.5 text-center xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">{{ __('Username') }}</h5>
      </div>
      <div class="p-2.5 text-center xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">{{ __('Followers') }}</h5>
      </div>
      <div class="hidden p-2.5 text-center sm:block xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">{{ __('Link') }}</h5>
      </div>
    </div>

    <div
      class="grid grid-cols-4 border-b border-stroke dark:border-strokedark sm:grid-cols-5"
    >
      <div class="flex items-center gap-3 p-2.5 xl:p-5">
        <div class="flex-shrink-0">
          <img src="{{ asset('img/brand/brand-01.svg') }}" alt="Brand" />
        </div>
        <p class="hidden font-medium text-black dark:text-white sm:block">
          Google
        </p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-black dark:text-white">3.5K</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-meta-3">$5,768</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-black dark:text-white">590</p>
      </div>
    </div>

    <div
      class="grid grid-cols-4 border-b border-stroke dark:border-strokedark sm:grid-cols-5"
    >
      <div class="flex items-center gap-3 p-2.5 xl:p-5">
        <div class="flex-shrink-0">
          <img src="{{ asset('img/brand/brand-02.svg') }}" alt="Brand" />
        </div>
        <p class="hidden font-medium text-black dark:text-white sm:block">
          Twitter
        </p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-black dark:text-white">2.2K</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-meta-3">$4,635</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-black dark:text-white">467</p>
      </div>
    </div>

    <div
      class="grid grid-cols-4 border-b border-stroke dark:border-strokedark sm:grid-cols-5"
    >
      <div class="flex items-center gap-3 p-2.5 xl:p-5">
        <div class="flex-shrink-0">
          <img src="{{ asset('img/brand/brand-03.svg') }}" alt="Brand" />
        </div>
        <p class="hidden font-medium text-black dark:text-white sm:block">
          Github
        </p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-black dark:text-white" id="github_username">Loading...</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-meta-3" id="github_followers">Loading...</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <a href="" class="font-medium text-black dark:text-white" id="github_url" target="_blank">Lien</a>
      </div>
    </div>

    <div
      class="grid grid-cols-4 border-b border-stroke dark:border-strokedark sm:grid-cols-5"
    >
      <div class="flex items-center gap-3 p-2.5 xl:p-5">
        <div class="flex-shrink-0">
          <img src="{{ asset('img/brand/brand-04.svg') }}" alt="Brand" />
        </div>
        <p class="hidden font-medium text-black dark:text-white sm:block">
          Instagram
        </p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-black dark:text-white" id="instagram_name">Loading...</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-meta-3" id="instagram_followers">Loading...</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-black dark:text-white">389</p>
      </div>
    </div>

    <div class="grid grid-cols-4 sm:grid-cols-5">
      <div class="flex items-center gap-3 p-2.5 xl:p-5">
        <div class="flex-shrink-0">
          <img src="{{ asset('img/brand/brand-05.svg') }}" alt="Brand" />
        </div>
        <p class="hidden font-medium text-black dark:text-white sm:block">
          Facebook
        </p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-black dark:text-white">1.2K</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-meta-3">$2,740</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-black dark:text-white">230</p>
      </div>
    </div>
  </div>
</div>


<script>

    const GithubApiUrl = 'https://api.github.com/users/DevEricWAGNER';

    function getGitHubInfos() {
        fetch(GithubApiUrl)
            .then(response => {
                if (response.ok) {
                    return response.json();
                }
                throw new Error('Erreur lors de la récupération des données');
            })
            .then(data => {
                const followersCount = data.followers;
                const username = data.name;
                const url = data.html_url;
                document.getElementById('github_followers').textContent = followersCount;
                document.getElementById('github_username').textContent = username;
                document.getElementById('github_url').href = url;
            })
            .catch(error => {
                console.error('Erreur:', error);
            });
    }
    window.onload = getGitHubInfos;

    const InstagramApiUrl = 'https://api.github.com/users/DevEricWAGNER';

    function getInstagramInfos() {
        fetch(InstagramApiUrl)
            .then(response => {
                if (response.ok) {
                    return response.json();
                }
                throw new Error('Erreur lors de la récupération des données');
            })
            .then(data => {
                const followersCount = data.followers;
                const username = data.name;
                const url = data.html_url;
                document.getElementById('instagram_followers').textContent = followersCount;
                document.getElementById('instagram_username').textContent = username;
                document.getElementById('instagram_url').href = url;
            })
            .catch(error => {
                console.error('Erreur:', error);
            });
    }
    window.onload = getInstagramInfos;
</script>
