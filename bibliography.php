<!DOCTYPE html>
<?php $hver='5' ?>
<html lang="en">
<head>

  <title>ServiceMusic: Lamentations: Bibliography</title>

  <meta name="description" content="An acrostic and 'qinah' rendering of Lamentations">
  <meta name="keywords" content="lamentations, scripture, rendering, translation, paraphrase, acrostic, qinah, Hebrew, poem, poetry">

  <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/php/headcommon.php');
  ?>

</head>

<body>

  <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/php/bodyheader.php');
  ?>

  <div class="content-area">

    <h1>Lamentations: Bibliography</h1>

    <?php
      include('chapter-links.php');
    ?>

    <p>
      Much of the detail here has been greatly aided by some excellent literature.
      The major sources are listed below.
    </p>

    <ul>
      <li>
        Alter, Robert (2019) "The Hebrew Bible: Volume 3: The Writings", W.W.Norton&nbsp;&amp;&nbsp;Co., <span class="nowrap">ISBN&nbsp;978-0-393-29249-7</span>
      </li>
      <li>
        Berlin, Adele (2004) "Lamentations: A Commentary", Westminster John Knox Press, <span class="nowrap">ISBN&nbsp;978-0-664-22974-0</span>
      </li>
      <li>
        Goldingay, John (2022) "The Book of Lamentations", Eerdmans, <span class="nowrap">ISBN&nbsp;978-0-8028-2542-1</span>
      </li>
      <li>
        Middlemas, Jill (2021) "Lamentations: An Introduction and Study Guide", T&amp;T&nbsp;Clark, <span class="nowrap">ISBN&nbsp;978-0-567-69691-5</span>
      </li>
    </ul>

    <p>
      Additional sources for particular points are mentioned in relevant footnotes at the point of use.
    </p>


    <hr>
    <div class="footnotes">
      <?php
        PrintFootnotes();
      ?>
    </div><!-- footnotes -->

  </div><!-- content-area -->

  <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/php/bodyfooter.php');
  ?>

</body>

</html>
