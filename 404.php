<?php require_once("includes/header.php") ?>


<style>
      @font-face {
        font-family: "Proxima Nova";
        src: url("/static/graphics/ProximaNova-Regular.woff2") format("woff2"),
          url("/static/graphics/ProximaNova-Regular.woff") format("woff");
      }

      * {
        padding: 0;
        margin: 0;
      }

      body,
      html {
        background-color: #fff;
        color: #36383b;
        font-family: "Proxima Nova", Arial, sans-serif;
        font-size: 1rem;
        height: 100%;
        -webkit-font-smoothing: antialiased;
        width: 100%;
      }

      a,
      a:hover,
      a:active,
      a:visited {
        color: #36383b;
        text-decoration: none;
      }

      li {
        list-style: none;
      }

      .header {
        background-color: #ffffff;
        position: fixed;
        width: 100%;
      }

      .nav {
        display: flex;
        justify-content: space-between;
        max-width: 1170px;
        margin: 0 auto;
        padding-left: 22px;
        padding-right: 22px;
      }

      @media (min-width: 1200px) {
        .nav {
          max-width: 1170px;
        }
      }

      .nav {
        padding-top: 20px;
      }

      @media (max-width: 375px) {
        .nav {
          padding-left: 18px;
          padding-right: 18px;
        }
      }

      .nav-list {
        display: inline-block;
      }

      .nav-item {
        display: inline;
        line-height: 32px;
        margin-right: 2rem;
        vertical-align: text-top;
      }

      .actions .nav-item {
        margin-right: 30px;
      }

      @media (max-width: 768px) {
        .actions .nav-item,
        .nav-item {
          margin-right: 1rem;
        }
      }

      .nav-item:last-of-type {
        margin-right: 0;
      }

      .item-active a,
      .nav-item a:hover {
        color: #2a5bd7;
      }

      .logo {
        height: 48px;
        margin-right: 98px;
      }

      @media (max-width: 768px) {
        .logo {
          height: 40px;
        }
      }

      @media (max-width: 554px) {
        .logo {
          margin-right: 0;
        }
      }

      .content-block {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      .content-block .headline {
        font-weight: bold;
        font-size: 62px;
        margin-bottom: 16px;
      }

      @media (max-width: 375px) {
        .content-block .headline {
          font-size: 54px;
        }
      }

      .content-block .headline-copy {
        font-size: 20px;
        line-height: 28px;
      }

      .headline-copy a {
        text-decoration: underline;
      }

      .image {
        margin-bottom: 26px;
        margin-top: 100px;
      }

      .headline-wrapper {
        margin: 0 auto;
        padding-left: 22px;
        padding-right: 22px;
        text-align: left;
        width: 50%;
      }

      @media (max-width: 1080px) {
        .headline-wrapper {
          width: 90%;
        }
      }

      @media (max-width: 375px) {
        .headline-wrapper {
          padding-left: 18px;
          padding-right: 18px;
        }
      }
    </style>

    <div class="content-block">
      <img
        src="/static/graphics/meditation.png"
        class="image"
        alt="woman meditating"
      />
      <div class="headline-wrapper">
        <h1 class="headline">Something's wrong here.</h1>
        <p class="headline-copy">
          This is a 404 error, which means you&#39;ve clicked on a bad link or
          entered an invalid URL. Maybe what you are looking for can be found at
          <a href="index.php">Shortly.com</a>. P.S.
          Shortly links are case sensitive.
        </p>
      </div>
    </div>
  </body>
</html>
