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
        Alter, Robert (2019) <cite>The Hebrew Bible: Volume 3: The Writings</cite>, W.W.Norton&nbsp;&amp;&nbsp;Co., <?php ISBN("978-0-393-29249-7"); ?>
      </li>
      <li>
        Berlin, Adele (2004) <cite>Lamentations: A Commentary</cite>, Westminster John Knox Press, <?php ISBN("978-0-664-22974-0"); ?>
      </li>
      <li>
        Goldingay, John (2022) <cite>The Book of Lamentations</cite>, Eerdmans, <?php ISBN("978-0-8028-2542-1"); ?>
      </li>
      <li>
        Middlemas, Jill (2021) <cite>Lamentations: An Introduction and Study Guide</cite>, T&amp;T&nbsp;Clark, <?php ISBN("978-0-567-69691-5"); ?>
      </li>
    </ul>

    <p>
      Other sources include:
    </p>
    <ul>
      <li>
        Various items mentioned in relevant footnotes at their point of use
      </li>
      <li>
        Mandolfo, Carleen R. (2007) <cite>Daughter Zion Talks Back to the Prophets: A Dialogic Theology of the Book of Lamentations</cite>, Society of Biblical Literature, <?php ISBN("978-1-58983-247-3"); ?>
      </li>
    </ul>

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
