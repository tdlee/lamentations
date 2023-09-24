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
        Alter, Robert (2019), <cite>The Hebrew Bible: Volume 3: The Writings</cite>, W.W.Norton&nbsp;&amp;&nbsp;Co., <?php ISBN("978-0-393-29249-7"); ?>
      </li>
      <li>
        Berlin, Adele (2004), <cite>Lamentations: A Commentary</cite>, Westminster John Knox Press, <?php ISBN("978-0-664-22974-0"); ?>
      </li>
      <li>
        Dobbs-Allsopp, F.W. (1997), <cite>Tragedy, Tradition and Theology in the Book of Lamentations</cite>, Journal for the Study of the Old Testament, 22,74, pp.29&ndash;60, <a href="https://doi.org/10.1177/030908929702207402" target="_blank">DOI: 10.1177/030908929702207402</a>
      </li>
      <li>
        Goldingay, John (2022), <cite>The Book of Lamentations</cite>, Eerdmans, <?php ISBN("978-0-8028-2542-1"); ?>
      </li>
      <li>
        Middlemas, Jill (2021), <cite>Lamentations: An Introduction and Study Guide</cite>, T&amp;T&nbsp;Clark, <?php ISBN("978-0-567-69691-5"); ?>
      </li>
    </ul>

    <p>
      Other commentary and academic sources include:
    </p>
    <ul>
      <li>
        Various items mentioned in relevant footnotes at their point of use
      </li>
      <li>
        Assis, Elie (2007), <cite>Tha Alphabetic Acrostic in the Book of Lamentations</cite>, The Catholic Biblical Quarterly, 69,4 pp.710&ndash;724
      </li>
      <li>
        Mandolfo, Carleen R. (2007), <cite>Daughter Zion Talks Back to the Prophets: A Dialogic Theology of the Book of Lamentations</cite>, Society of Biblical Literature, <?php ISBN("978-1-58983-247-3"); ?>
      </li>
    </ul>

    <p>
      Having no knowledge of Hebrew, the following online resources have proved immensely valuable:
    </p>
    <ul>
      <li>
	The <a href="https://www.sefaria.org/Lamentations.1?lang=bi" target="_blank">Sefaria</a>
        dual-langauge version (English: <abbr title="Jewish Publication Society">JPS</abbr> 1985).
        This not only shows the Hebrew text but allows each word to be selected
        for dictionary look-up.
        It also shows original word order, crucial for verifying, for example,
        the leading verbs that so dominate the second chapter.
      </li>
      <li>
        <a href="https://www.biblegateway.com/passage/?search=lamentations+1&version=YLT" target="_blank">Young's Literal Translation</a> (1862&ndash;1898).
        This largely follows the word-ordering of the Hebrew
        (see comment above about Sefaria/JPS)
        and is careful to use words consistently,
        allowing repetition to be clearly visible.
      </li>
    </ul>

    <h2>Background and introductory reading</h2>

    <p>
      The background to Lamentations was one of devasation, destruction and catastrophe for the Jewish people around 587/586 BCE, with brutal siege and exile.
      Useful online sources include:
    </p>
    <ul>
      <li>
        <a href="https://bibleproject.com/guides/book-of-lamentations/" target="_blank">Guide to the Book of Lamentations</a> from the "BibleProject"
      </li>
      <li>
        <a href="https://www.thetorah.com/article/an-introduction-to-lamentations" target="_blank">An Introduction to Lamentations</a> from the "TheTorah"
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
