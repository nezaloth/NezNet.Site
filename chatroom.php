<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NezNet.Site</title>

    <link rel="icon" type="image/png" href="../images/universal/logo.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <script src="/NezNet.Site/libraries/include-html.js"></script>

    <!-- Imports stylesheet -->
    <link rel="stylesheet" href="../style.css">
  </head>

  <body>
    <!-- Please don't remove the next 2 lines! -->
    <div id="top"></div>
    <div id="skip"><a href="#content">Skip to content</a></div>

    <div id="container">
      <div id="sidebar">
        <div id="sidebar-content">
          <!-- Profile picture image -->
          <div class="icon"><img src="../images/universal/pfp.png" alt="Profile picture" /></div>
          <div include-html="../main-menu/site-name.html"></div>

          <!-- Navigation menu  -->
          <nav id="main-menu">
            <ul>
              <div include-html="../main-menu/links.html"></div>
            </ul>
          </nav>
          <div include-html="../main-menu/site-message.html"></div>
        </div>
      </div>

      <!-- Content area -->
      <main id="content">
        <!-- Section tags must be used for blocks -->
        <section class="full">
          <h1><b>Site Template</b></h1>
          <p>Feel free to copy and use this site template for any personal projects!</p>
          <p>Find the source code for this webpage on the site github: <a href="https://github.com/nezaloth/NezNet.Site/blob/main/template.html">https://github.com/nezaloth/NezNet.Site/blob/main/template.html</a></p>
          <p>In order to work correctly the template also needs <a href="https://github.com/nezaloth/NezNet.Site/blob/main/style.css">style.css</a>, the <a       href="https://  github.com/nezaloth/NezNet.Site/tree/main/libraries">libraries folder</a>, <a href="https://github.com/nezaloth/NezNet.Site/tree/main/main-menu">main-menu folder</a> and <a href="https://github.com/nezaloth/NezNet.Site/tree/main/footer">footer folder</a></p>
        </section>

        <section class="full">
          <div id="wrapper">
            <div id="menu">
              <p class="welcome">Welcome, <b></b></p>
              <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
            </div>

            <div id="chatbox"></div>

            <form name="message" action="">
              <input name="usermsg" type="text" id="usermsg" />
              <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
            </form>
          </div>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script type="text/javascript">
            // jQuery Document
            $(document).ready(function () {});
          </script>
        </section>

        <footer id="main-footer">
          <p>Updated 24/8/2024</p>
          <div include-html="../footer/links.html"></div>
        </footer>
      </main>
    </div>

    <script>
      includeHTML();
    </script>
  </body>
</html>
