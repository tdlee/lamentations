<!DOCTYPE html>
<?php $hver='5' ?>
<html lang="en">
<head>

  <title>ServiceMusic: Lamentations: Reading and recitation</title>

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

    <h1>Lamentations: Reading and recitation</h1>

    <?php
      include('chapter-links.php');
    ?>

    <h2>Qinah de-mystified</h2>

    <p>
      The 3&ndash;2 <i>qinah</i> pulse is vital to the first four chapters.
      But don't let the thought of poetic stress stress you, or of pulse threaten your pulse-rate.
    </p>

    <p>
      If you have ever recited nursery rhymes,
      or heard kids excitedly calling them out in the playground,
      then you already know how to do it.
      Here are some well-known examples (in these cases 4&ndash;3 and 4&ndash;4):
    </p>

    <div class="panel panel--width-26em">
      <div class="poem">
        <p>
          &emsp;&emsp;<u>Ma</u>ry,&emsp;&emsp;&emsp;&emsp;&emsp;<u>Ma</u>ry,&emsp;&emsp;&emsp;<u>quite</u> con<u>tra</u>ry<br>
          &emsp;&emsp;<u>how</u> does your <u>gar</u>den&emsp;&emsp;<u>grow</u>?<br>
          with <u>sil</u>ver&emsp;&emsp;&emsp;&emsp;&emsp;<u>bells</u> and <u>coc</u>kle&emsp;&emsp;<u>shells</u><br>
          and <u>pret</u>ty maids&emsp;<u>all</u> in a&emsp;&emsp;<u>row</u>.
        </p>
      </div><!-- "poem" -->

      <div class="panel__cite">
        pulse: 4&ndash;3, 4&ndash;3
      </div><!-- "panel__cite" -->
    </div><!-- "panel" -->

    <div class="panel panel--width-26em">
      <div class="poem">
        <p>
          &emsp;&emsp;<u>Hush</u> little &emsp;&emsp;<u>ba</u>by,&emsp;&emsp;&emsp;<u>don't</u> say a <u>word</u><br>
          &emsp;&emsp;<u>Ma</u>ma's gonna <u>buy</u> you a <u>mock</u>ing &emsp;<u>bird</u><br>
          And <u>if</u>&emsp;&emsp;that&emsp;&emsp;<u>mock</u>ing&emsp;&emsp;<u>bird</u> don't&emsp;<u>sing</u>,<br>
          &emsp;&emsp;<u>Ma</u>ma's gonna <u>buy</u> you a&emsp;<u>dia</u>mond&emsp;<u>ring</u>.
        </p>
      </div><!-- "poem" -->

      <div class="panel__cite">
        pulse: 4&ndash;4, 4&ndash;4
      </div><!-- "panel__cite" -->
    </div><!-- "panel" -->

    <p>
      The pulse is maintained
      and the varying number of words simply slot naturally into place.
      But that said, don't be too rigid about it; give it natural fluidity.
    </p>

    <p>
      Here are the opening verses from this version of Lamentations&nbsp;3:
    </p>

    <!--
      Replicated in "index" and "reading".
    -->
    <div class="panel panel--width-26em">
      <div class="poem">
        <p>
          &emsp;&emsp;&emsp;&emsp;<u>Ag</u>onies:&emsp;&emsp;<u>I</u> am the man <u>seared</u><br>
          by the <u>rod</u> &emsp;of his <u>wrath</u>;
        </p>
        <p>
          &emsp;&emsp;&emsp;A<u>way</u>&mdash;me he <u>drove</u>, force-<u>marched</u><br>
          &emsp;&emsp;in <u>dark</u>ness, no <u>light</u>;
        </p>
        <p>
          &emsp;&emsp;&emsp;A<u>gainst</u> me he <u>turns</u> &emsp;his&emsp; <u>hand</u><br>
          &emsp;from <u>day</u>-dawn to <u>dusk</u>;
        </p>
      </div><!-- "poem" -->

      <div class="panel__cite">
        pulse: 3&ndash;2, 3&ndash;2, 3&ndash;2
      </div><!-- "panel__cite" -->
    </div><!-- "panel" -->

    <p>
      And in the final chapter, where 3&ndash;2 <i>qinah</i> is largely replaced by 3&ndash;3,
      although not entirely so,
      rhythmic pulse is still entirely appropriate.
    </p>

    <h2>Theme words and recurrence</h2>

    <p>
      Be alert to particular words that recur.
      A few examples:
    </p>

    <ul>
      <li>
        The opening
        "Alone she sits&hellip;" (1:1)
        is picked up at the centre
        "Lonesome let him sit&hellip;"
        then returns and is reflected in the closing
        "And you, <span class="yhwh">Lord</span>, sit forever&hellip;" (5:19).
      </li>
      <li>
        "Notice" and "look" form a running thread across the chapters, often paired.
        See the translation notes for further details.
      </li>
      <li>
        Chapter&nbsp;1: recurrent "all", which subtly helps establish the "A&nbsp;to&nbsp;Z" totality of the alphabetic acrostic.
      </li>
      <li>
        Chapter&nbsp;2: "ground" thread; "pour" thread.
      </li>
      <li>
        Chapter&nbsp;4: "disgorge" thread (a continuation of chapter&nbsp;2's "pour" thread)
      </li>
      <li>
        Biblical poetry often refers to "hand" and "face".
        <ul>
          <li>
            "Hand" occurs several times in each chapter.
          </li>
          <li>
            "Face", while less common, can nevertheless be particularly important,
            not least because of the theological association with "the face of God"
            in the Torah (the foundational first five books of the Bible).
            See 4:16 and its footnotes.
          </li>
        </ul>
      </li>
    </ul>

    <p>
      <em>(t.b.c.)</em>
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
