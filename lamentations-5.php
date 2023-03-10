<!DOCTYPE html>
<?php $hver='5' ?>
<html lang="en">
<head>

  <title>ServiceMusic: Lamentations 5</title>

  <meta name="description" content="An acrostic and 'qinah' rendering of Lamentations 5">
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

    <h1>Lamentations 5</h1>

    <?php
      include('chapter-links.php');
    ?>

    <p>
      Lamentations 5, like other chapters, has the same number of stanzas, 22,
      as the Hebrew alphabet.
      But unlike the other chapters:
    </p>
    <ul>
      <li>
        it lacks an acrostic structure (but see below)
      </li>
      <li>
        the <i>qinah</i> three&ndash;two stress pattern is largely absent;
        many stanzas are three&ndash;three.
      </li>
    </ul>
    <p>
      Even, it would appear, the toehold of sanity provided by those features has evaporated.
    </p>
    <p>
      Further, the Hebrew Masoretic text puts a section break between verses 18 and 19.
      Mount Zion,
      God's dwelling-place
      and formerly "joy of all the earth" (2:15 and Ps.48:2)
      is now abandoned, in chaos,
      like the primordial cosmos before creation.
      Bleak, indeed.
    </p>
    <p>
      Yet this chapter, above the others, is the book's prayer.
      It is preceded by abandonment,
      especially chapter 4, which "was distinctive for incorprating no speaking to Yahweh".<?php Footnote('Goldingay(2022), p193') ?>
      It remains in abandonment.
      But whereas the other litanies of complaint had addressed God mostly <em><span lang="fr">en passant</span></em>,
      this chapter is framed as a prayer to him.
      This is the pinnacle: "the lamenting population was shown a way to rebuild their shattered universe by, paradoxically, reaching out to their God who was not there for them anymore".<?php
        Footnote('Wielenga, Bob <a href="https://pdfs.semanticscholar.org/18fc/b2fa310cc185b6086281dd0ddfa871119151.pdf" target="_blank"><cite>The Suffering Witness: A Missiological Reading of Lamentations</cite></a>, In die Skriflig.');
      ?>
    </p>
    <p>
      Many attempts have been made to find something comparable to the acrostic.
      Not least, this would provide the otherwise missing "seventh acrostic"
      (the other six being one each in chapters 1, 2 and 4,
      plus the triple acrostic of chapter 3) which would yield a
      creation-derived and sabbath-reflecting "six+one" of completion.
      In the final four verses,
      taking not only the first but also the final letter of each
      (an "acrostic-telestic")
      yields the eight-letter Hebrew phrase "your God is exalted greatly".<?php
        Footnote('Guillaume, Philippe <a href="https://www.jhsonline.org/index.php/jhs/article/download/6440/5410" target="_blank"><cite>Lamentations 5: The seventh acrostic</cite></a>, Journal of Hebrew Scriptures.');
        ?>
      While initially such praise looks a misfit in the context of devastation
      it nevertheless resonates well with Job's
      <i>"The <span class="yhwh">Lord</span> gives and the <span class="yhwh">Lord</span> takes away;
      bless&egrave;d be the name of the <span class="yhwh">Lord</span>"</i> (Job&nbsp;1:21).
    </p>
    <p>
      How might we represent that?
      Perhaps "Alleluia",
      itself directly from the Hebrew "Hallelujah"
      ("Praise the <span class="yhwh">Lord</span>"),
      might be appropriate.
    <p>

    <div class="panel">
      <div class="poem poem__hebverse draft">

<!--

        <br>
        <div class="poem__verseref">i-n</div>
        <p>
          ...<br>
            ...
        </p>
-->

        <div class="poem__verseref">1</div>
        <?php
          $fn='There now starts a catalogue of what, in modern-day writing, we would call bullet points, that returns at v.17 "<i>At all this&hellip;</i>".';
        ?>
        <p>
          Recall, O <span class="yhwh">Lord</span>, what befell us,<br>
            look; notice our disgrace:<?php Footnote($fn); ?><!-- same verbs as 1:11,12 and 2:20 -->
        </p>
        <br>

        <div class="content-area--left-indent">
          <div class="poem__verseref">2&ndash;4</div>
          <p>
            Our heritage given over to strangers,<br>
              our homes to occupiers.
          </p>
          <p>
            Orphans we have become, without fathers;<br>
              our mothers as widows.
          </p>
          <p>
            Our well-water? Extorted for profit;<br>
              even our firewood comes at a price.
          </p>

          <br>
          <div class="poem__verseref">5&ndash;7</div>
          <p>
            Up to our necks are we pursued;<br>
              we wearied, we found no rest.
          </p>
          <p>
            We stretched out hands to Egypt;<br>
              to Assyria to beg for our bread.
          </p>
          <p>
            Our ancestors offended and are no more;<br>
              now we, we bear their punishment.
          </p>

          <br>
          <div class="poem__verseref">8&ndash;10</div>
          <p>
            Slaves rule over us;<br>
              there is no-one to free us from their hand.
          </p>
          <?php
            $fn='This might mean either the heat of the desert sun or tribes preying on desert refugees.';
          ?>
          <p>
            Getting bread is at risk of our lives,<br>
              exposed to the desert sword.<?php Footnote($fn); ?>
              <!-- "exposed to...": idea from NABRE -->
          </p>
          <p>
            Our skin burns hot as an oven<br>
              from the raging fevers of famine.
          </p>

          <br>
          <div class="poem__verseref">11&ndash;14</div>
          <p>
            Women are raped in Zion;<br>
              virgins in the cities of Judah.
          </p>
          <p>
            Princes are hanged by them;<br>
              elders are shown no respect.
          </p>
          <p>
            Young men have millstones to carry;<br>
              lads under woodpiles stagger.
          </p>
          <p>
            Elders abandoned their city-gate;<br><!-- abandoned: vv.14,15 -->
              young men their songs.<!-- the first half's "abandoned" verb serves this half-->
          </p>

          <br>
          <div class="poem__verseref">15&ndash;16</div>
          <p>
            Joy has abandoned our hearts;<br><!-- abandoned: vv.14,15 -->
              our dancing turned into dirges.
              <!-- if we can't acrosti-cate, let's alliterate -->
          </p>
          <p>
            The crown from our head has toppled:<br>
              woe now to us; for we have offended.
          </p>

          <br>
        </div><!-- "left-indent" -->

        <div class="poem__verseref">17&ndash;18</div>
        <p>
          For all this: our hearts sicken;<?php Footnote('Hebrew: a series of three consecutive half-verses all starting "for" ("because of").') ?><br><!-- "heart[s] sick[en]": 1:22 and 5:17 -->
        </p>
        <p>
          for all these: our eyes grow dim;
        </p>
        <?php
          $fn='Originally foxes or jackals, although not the same "jackal" noun as at 4:3.  Hyenas are familiar, and this allows the poetic force of alliteration.';
        ?>
        <p>
          for Mount Zion: lying desolate,<br>
            the haunt of hyenas.<?php Footnote($fn); ?>
        </p>

        <br>
        <hr>

        <!--
           For the hidden acrostic-telestic "alleluia" we look to construct the four verses thus:
            *A*...*l*
            *l*...*e*
            *l*...*u*
            *i*...*a*
        -->
        <br>
        <div class="poem__verseref">19&ndash;22<br>Alleluia</div>
        <div class="poem--acrostic">
          <p>
            And you, <span class="yhwh">Lord</span>, your throne shall endure:<br>
              ruling generations eterna<span class="acrostic-letter">l</span>;
          </p>
          <p>
            Long years, why always forget us?<br>
              Why forever forsak<span class="acrostic-letter">e</span>?
          </p>
          <p>
            Lead us back, <span class="yhwh">Lord</span>, renew days of old,<br>
            let us turn back to yo<span class="acrostic-letter">u</span>.
          </p>
          <?php
            $fn='The "<i>indeed</i>" translation is supported by both NABRE and Robert Alter.
            Other versions also have this as statement
            (KJV: "<i>but thou hast&hellip;</i>"; NEB: "<i>but if thou hast&hellip;then indeed</i>").
            The NIV can\'t stomach this: a begging "<i>unless you have&hellip;</i>".';
            $fn2='This is an astonishingly grim ending; we do well to meditate on this closure.
            Some Jewish traditions conventionally repeat v.21 ("<i>Lead us back&hellip; turn back to you</i>") as a coda.';
          ?>
          <p>
            Indeed,<?php Footnote($fn); ?> you have discarded us:<br>
            to you we are anathem<span class="acrostic-letter">a</span>.<?php Footnote($fn2); ?>
          </p>

        </div><!-- "poem/acrostic" -->
      </div><!-- "poem" -->
      <hr>
      <div class="footnotes">
        <?php
          PrintFootnotes();
        ?>
      </div><!-- "footnotes" -->

      <div class="panel__footer">
        Copyright &copy; 2020&ndash;2022 David&nbsp;Lee
      </div><!-- "panel__footer" -->

    </div><!-- "panel" -->

  </div><!-- content-area -->

  <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/php/bodyfooter.php');
  ?>

</body>

</html>
