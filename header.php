<!DOCTYPE html>
<html>
</head>
<?php wp_head(); ?>
</head>

<body>

  <div class='wrapper wrapper--nav'>
    <div class="container container--nav-utility">
      <div class="nav-popout__wrapper">
        <button class="btn-region">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon__globe" width="16" height="16" viewBox="0 0 16 16">
            <path d="M11 3a8 8 0 1 0 8 8 8.009 8.009 0 0 0-8-8Zm6.345 7.2h-2.212A11.736 11.736 0 0 0 13.7 5.206a6.411 6.411 0 0 1 3.645 4.994Zm-5.921-5.579a10.391 10.391 0 0 1 2.1 5.579h-4.9a10.207 10.207 0 0 1 1.961-5.579c.138-.008.275-.021.415-.021s.283.013.424.022Zm-3.074.56A12.116 12.116 0 0 0 7.024 10.2H4.655A6.411 6.411 0 0 1 8.35 5.182ZM4.655 11.8h2.38a12.539 12.539 0 0 0 1.245 4.984A6.408 6.408 0 0 1 4.655 11.8Zm5.905 5.579A9.575 9.575 0 0 1 8.633 11.8h4.891a9.759 9.759 0 0 1-2.083 5.578c-.146.01-.291.022-.441.022s-.293-.013-.44-.022Zm3.209-.618a12.279 12.279 0 0 0 1.354-4.961h2.222a6.4 6.4 0 0 1-3.575 4.961Z" transform="translate(-3 -3)" />
          </svg>
          Choose a Region<div class="arrow-down"></div>
        </button>
        <div class="nav-popout">
          <div class="nav-popout__header">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon__globe" width="16" height="16" viewBox="0 0 16 16">
              <path d="M11 3a8 8 0 1 0 8 8 8.009 8.009 0 0 0-8-8Zm6.345 7.2h-2.212A11.736 11.736 0 0 0 13.7 5.206a6.411 6.411 0 0 1 3.645 4.994Zm-5.921-5.579a10.391 10.391 0 0 1 2.1 5.579h-4.9a10.207 10.207 0 0 1 1.961-5.579c.138-.008.275-.021.415-.021s.283.013.424.022Zm-3.074.56A12.116 12.116 0 0 0 7.024 10.2H4.655A6.411 6.411 0 0 1 8.35 5.182ZM4.655 11.8h2.38a12.539 12.539 0 0 0 1.245 4.984A6.408 6.408 0 0 1 4.655 11.8Zm5.905 5.579A9.575 9.575 0 0 1 8.633 11.8h4.891a9.759 9.759 0 0 1-2.083 5.578c-.146.01-.291.022-.441.022s-.293-.013-.44-.022Zm3.209-.618a12.279 12.279 0 0 0 1.354-4.961h2.222a6.4 6.4 0 0 1-3.575 4.961Z" transform="translate(-3 -3)" />
            </svg>
            <span>Select Region</span>
          </div>
          <div class="nav-popout__body">
            <div class="nav-popout__body__item">
              <p>North America</p>
              <ul>
                <li><a href="https://www.bgis.com/">Canada (English)</a></li>
                <li><a href="https://www.bgis.com/fr/">Canada (Français)</a></li>
                <li><a href="https://www.bgis.com/us/">United States</a></li>
              </ul>
            </div>
            <div class="nav-popout__body__item">
              <p>Europe</p>
              <ul>
                <li><a href="https://www.bgis.com/uk/">UK</a></li>
              </ul>
            </div>
            <div class="nav-popout__body__item">
              <p>Asia Pacific</p>
              <ul>
                <li><a href="https://apac.bgis.com/">Asia Pacific</a><span>
                    <img src="<?php echo get_theme_file_uri('/images/icons/icon_checkmark.svg') ?>" alt="tick" />
                  </span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='container container--nav'>
      <a class="nav__logo" href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('/images/logos/logo_white.svg') ?>" alt="BGIS APAC" class="logo__img"></a>
      <nav class='nav'>
        <div>
          <a href="/about">About Us</a>
          <a href="/services">Our Services</a>
          <a href="/our-sectors">Sectors We Serve</a>
          <a href="/our-work">Our Work</a>
        </div>
        <div>
          <a href="/news-insights">News & Insights</a>
          <a href="/careers">Careers</a>
          <a href="/contact">Contact Us</a>
          <div class="nav__separator"></div>
          <button class="nav__search">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" role="img" width="24" height="24" viewBox="0 0 24 24.001">
              <path id="bx-search" d="M13.263,23.527a10.2,10.2,0,0,0,6.282-2.165L25.186,27,27,25.187l-5.64-5.64a10.251,10.251,0,1,0-8.1,3.98Zm0-17.961a7.7,7.7,0,1,1-7.7,7.7A7.706,7.706,0,0,1,13.263,5.566Z" transform="translate(-3 -3)"></path>
            </svg>
          </button>
        </div>
      </nav>
    </div>
    <div class="search">
      <button class="search__close">
        <img src="<?php echo get_theme_file_uri('/images/icons/icon_close.svg') ?>" alt="Close Search" class="close__icon">
      </button>
      <form id="search-form" class="search__box">
        <input id="global-search-input" class="search__input" type="text" placeholder="Search" />
      </form>
    </div>
  </div>