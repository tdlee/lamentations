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

    <div class="widthclear"></div>

    <div class="panel">
      <div class="poem poem__hebverse draft">

        <div class="poem__verse">
          <div class="poem__verseref">1</div>
          <div class="poem__versetext">
            <?php
              $fn_recall='The verbs "recall" (here) and "ignore" (v20) form an antithetical pair, topping and tailing the chapter. Both are also about deliberation: "recall" is more than "remember" and "ignore" is more than "forget".  See Berlin (2004), p.117; Goldingay (2022), p.205; Berman (2023), p.158.';
              $fn_list='There now starts a catalogue of what, in modern-day writing, we would call bullet points, that returns at v.17 "<i>For all this&hellip;</i>".';
            ?>
              <div class="indent0">Recall,<?php Footnote($fn_recall); ?> O <span class="yhwh">Lord</span>, what befell us:</div><!--5:1,20: "recall"/"ignore" opposites; quoted in "staging" -->
              <div class="indent1">look; notice our disgrace:<?php Footnote($fn_list); ?></div><!-- same verbs as 1:11,12 and 2:20 -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>

        <div class="content-area--left-indent">

          <div class="poem__verse">
            <div class="poem__verseref">2&ndash;4</div>
            <div class="poem__versetext">
                <div class="indent0">Our heritage turned over to strangers,</div><!-- 3:3, 5:2: common verb "turn" -->
                <div class="indent1">our homes to occupiers.</div><!-- 2,3,14,18: qinah -->
                <div class="indent0">Orphans we have become: fatherless;</div>
                <div class="indent1">our mothers as widows.</div><!-- 2,3,14,18: qinah -->
                <div class="indent0">Our well-water? Extorted for profit;</div>
                <div class="indent1">even our firewood comes at a price.</div>
            </div><!-- poem__versetext -->
          </div><!-- poem__verse -->

          <br>
          <div class="poem__verse">
            <div class="poem__verseref">5&ndash;7</div>
            <div class="poem__versetext">
              <?php
                $fn_egypt='Reaching out to Egypt and Assyria: see also Hosea 7:11 and 12:2. \'Egypt\' may additionally be viewed figuratively as a condition of slavery; see Alter (2018), vol.2 (Prophets) p.1224 (footnote to Hosea 8:13).';
              ?>
                <div class="indent0">Up to our necks are we pursued;</div>
                <div class="indent1">we weary, we are given no rest.</div><!-- "we are given": passive voice; Berman (2023) p.163 -->
                <div class="indent0">We stretched out hands to Egypt;<?php Footnote($fn_egypt); ?></div>
                <div class="indent1">to Assyria to beg for our bread.</div>
                <div class="indent0">Our ancestors sinned and are no more;</div>
                <div class="indent1">now we, we bear their punishment.</div>
            </div><!-- poem__versetext -->
          </div><!-- poem__verse -->

          <br>
          <div class="poem__verse">
            <div class="poem__verseref">8&ndash;10</div>
            <div class="poem__versetext">
              <?php
                $fn='These may be understood as Babylonian officials who were slaves or servants of the Babylonian king (Berlin, 2004), p.121. In modern parlance, "lackeys" or "puppet government" may be imagined.';
              ?>
              <!-- The word "underlings" from Goldingay commentary, p.198 -->
                <div class="indent0">Underlings rule us as overlords;<?php Footnote($fn); ?></div>
                <div class="indent1">there is no release from their hand.</div>
              <?php
                $fn='This might mean either the heat of the desert sun or tribes preying on desert refugees; Goldingay (2022), p.199.';
              ?>
                <div class="indent0">Getting bread is at risk of our lives,</div>
                <div class="indent1">exposed to the desert sword.<?php Footnote($fn); ?></div>
                  <!-- "exposed to...": idea from NABRE -->
                <div class="indent0">Our skin burns hot as an oven</div>
                <div class="indent1">from the raging fevers of famine.</div>
            </div><!-- poem__versetext -->
          </div><!-- poem__verse -->

          <br>
          <div class="poem__verse">
            <div class="poem__verseref">11&ndash;14</div>
            <div class="poem__versetext">
                <div class="indent0">Women are raped in Zion;</div>
                <div class="indent1">virgins in the cities of Judah.</div>
                <div class="indent0">Princes are strung up by their hands;</div><!-- many versions "hung up"; Contemporary English Version "strung up" -->
                <div class="indent1">elders disrespected to their faces.</div>
                <div class="indent0">Young men slave at millstones;</div>
                <div class="indent1">lads under woodpiles stagger.<?php Footnote('A difficult verse to translate in several respects. So given the surrounding abuse-related text, a view of hard-labour and slavery is chosen; the work typically of pack animals. See Berlin (2004), p.123; Goldingay (2022), pp.200&ndash;201; Hens-Piazza (2017), p.83; Middlemas (2021), p.100.'); ?></div>
                <div class="indent0">Elders abandoned their city-gate;</div><!-- abandoned: vv.14,15 -->
                <div class="indent1">young men their songs.</div><!-- the first half's "abandoned" verb serves this half--><!-- 2,3,14,18: qinah -->
            </div><!-- poem__versetext -->
          </div><!-- poem__verse -->

          <br>
          <div class="poem__verse">
            <div class="poem__verseref">15&ndash;16</div>
            <div class="poem__versetext">
                <div class="indent0">Joy has abandoned our hearts;</div><!-- abandoned: vv.14,15 -->
                <div class="indent1">our dancing turned into dirges.</div>
                  <!-- if we can't acrosti-cate, let's alliterate -->
                <div class="indent0">The crown from our head has tumbled:</div>
                <div class="indent1">woe to us; for we have sinned.</div>
            </div><!-- poem__versetext -->
          </div><!-- poem__verse -->

          </div><!-- "left-indent" -->

        <br>

        <div class="poem__verse">
          <div class="poem__verseref">17&ndash;18</div>
          <div class="poem__versetext">
              <div class="indent0">For all this: our hearts sicken;<?php Footnote('Hebrew: a series of three consecutive half-verses all starting "for" ("because of").') ?></div><!-- "heart[s] sick[en]": 1:22 and 5:17; "sick" also at 1:13 -->
              <div class="indent0">for all these: our eyes dim;</div>
            <?php
              $fn='Originally foxes or jackals, although not the same "jackal" noun as at 4:3.  Hyenas are familiar, and this allows the poetic force of alliteration.';
            ?>
              <div class="indent0">for Mount Zion: there desolate,</div>
              <div class="indent1">the haunt of hyenas.<?php Footnote($fn); ?></div><!-- 2,3,14,18: qinah -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

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
        <div class="poem__verse">
          <div class="poem__verseref">19&ndash;22<br>Alleluia</div>
          <div class="poem__versetext">
                <!-- 1:1, 3:28, 5:19: quoted in new "staging" -->
                <div class="indent0 acrostic-line">And you, <span class="yhwh">Lord</span>, sit enthroned,</div><!-- "sit": same verb at 1:1, 3:28 and 5:19 (and elsewhere) -->
                <div class="indent1">generation upon generation eterna<span class="acrostic-letter">l</span>;</div>
                <div class="indent0 acrostic-line">Long years, why always ignore us?</div><!--5:1,20: "recall"/"ignore" opposites; quoted in "staging" -->
                <div class="indent1">Why for all time forsak<span class="acrostic-letter">e</span>?</div>
                <div class="indent0 acrostic-line">Lead us back, <span class="yhwh">Lord</span>, renew days of old,</div><!-- 1:7, 5:21: "days of old" -->
                <div class="indent1">let us turn back to yo<span class="acrostic-letter">u</span>.</div>
              <?php
                $fn='The "<i>indeed</i>" translation is supported by both NABRE and Alter (2018) vol.3 (The Writings), p.669.
                  Other versions also have this as statement
                  (KJV: "<i>but thou hast&hellip;</i>"; NEB: "<i>but if thou hast&hellip;then indeed</i>").
                  The NIV has the more open "<i>unless you have&hellip;</i>".';
                $fn2='This is an astonishingly grim ending; we do well to meditate on this closure.
                  Some Jewish traditions conventionally repeat v.21 ("<i>Lead us back&hellip; turn back to you</i>") as a coda.';
              ?>
                <div class="indent0 acrostic-line">Indeed,<?php Footnote($fn); ?> you have discarded us:</div><!-- "discarded": 3:45; 5:22 -->
                <div class="indent1">to you we are anathem<span class="acrostic-letter">a</span>.<?php Footnote($fn2); ?></div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

      </div><!-- "poem" -->

    </div><!-- "panel" -->

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
        most stanzas are three&ndash;three.<?php
          Footnote('Three&ndash;two <i>qinah</i> remains in 2, 3, 14 and 18; Goldingay (2022), p.190.  This is retained here, and seems particularly poignant at 17&ndash;18.');
        ?>
      </li>
    </ul>
    <p>
      Even, it would appear, the toehold of sanity provided by those features has evaporated.
      The very attempt to impose structure upon the chaos is under threat;
      structure and content conspire together
      to provide the book with a very unsettling ending.<?php
        Footnote('Provan (2016), p.124; Hens-Piazza (2017), p.75.');
      ?>
    </p>
    <p>
      Further, the Hebrew Masoretic text puts a chapter break between verses 18 and 19.<?php Footnote('Goldingay (2022), p.203 note \'d\'; p.204.'); ?>
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
      especially chapter 4, which "was distinctive for incorporating no speaking to Yahweh".<?php Footnote('Goldingay (2022), p.193.') ?>
      It remains in abandonment.
      But whereas the other litanies of complaint had addressed God mostly <em><span lang="fr">en passant</span></em>,
      this chapter is framed as a prayer to him.
      This is the pinnacle: "the lamenting population was shown a way to rebuild their shattered universe by, paradoxically, reaching out to their God who was not there for them anymore".<?php
        Footnote('Wielenga (2007), p.69.');
      ?>
      And textually, although the previous <i>qinah</i> rhythm
      and sophisticated cross-line and cross-verse enjambment
      have all but vanished,
      there are instead the more balanced lines of Hebrew poetry
      with pervasive parallelism:<?php Footnote('Dobbs-Allsopp (2012), p.140; Middlemas (2021), pp.21&ndash;22.'); ?>
      the form so emblematic of Bible's highest form of prayer, the Psalms.
    </p>
    <p>
      A further contrast of this chapter with the others is that this is communal.
      No "I" speaks in this poem;
      and whereas Lam.1 and Lam.2 never spoke in first-person plural terms,
      and Lam.3 and Lam.4 did so only when past the halfway point,
      Lam.5 speaks almost throughout in "we/our/us" terms.<?php
        Footnote('Goldingay (2022), p.191.');
      ?>
    </p>
    <p>
      The main central portion of the chapter may be viewed as
      two confessional sections:
      vv.2&ndash;7 reflecting broadly on history ending "our ancestors sinned"
      and vv.8&ndash;16 about the current state ending "we have sinned".<?php
        Footnote('Berman (2023), p.160ff.');
      ?>
    </p>

    <h2>A conclusion refused</h2>

    <p>
      Spolier alert: Lamentations does not end well.
    </p>

    <p>
      A brief glance at the footnotes of most major Bible translations
      reveals instances of uncertainty on perhaps most pages,
      not only of words and meaning
      but also of syntax.
      Lamentations is no exception; several instances approach guesswork.
      The final verse, 5:22, is such a case.
      Instead of a conclusion or <em>denouement</em>,
      the text has a strange syntax which becomes almost impossible to grasp,
      confounding translators and commentators.
      For a deeper dive see
      Gordis (1974), pp.289&ndash;293
      and Linafelt (2001), pp.340&ndash;343.
      Linafelt's tentative suggestion is that the entire book
      ends not with a syntactically complete sentence but an open-ended ellipsis;
      an "if&hellip;" stripped of its expected "then&hellip;".
    </p>

    <div class="panel panel--width-20em">
      <div class="poem poem__hebverse">
        <div class="poem__verse">
          <div class="poem__versetext">
            <div class="indent0">For if truly you have rejected us,</div>
            <div class="indent0">raging bitterly against us&mdash;</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->
        <div class="panel__cite">
          <em>[The End]</em>
        </div><!-- "panel__cite" -->
      </div><!-- "poem" -->
    </div><!-- "panel" -->

    <p>
      He comments:
      "The book is left opening out into the emptiness of God's non-response"<?php
        Footnote('Linafelt (2000), p.60.');
      ?>
      "&hellip;indicating by its very incompleteness
      a refusal to move&mdash;in the face of
      <span class="yhwh">Yhwh</span>'s lack of response&mdash;beyond lament to praise,
      but also a refusal to conclude at all.
      The ending of the book is, then, a willful <em>non</em>ending."<?php
        Footnote('Linafelt (2001), p.343.');
      ?>
    </p>

    <h2>Inner-biblical contrasts</h2>

    <p>
      Just as the fourth chapter has both similarities with some Psalms
      but also contrasts against them,
      so too does this chapter: in this case Psalms 74 and 79.
      Absent are: the usual Psalmist terms of endearment
      (e.g. "sheep of your pasture", "Jacob", "your servants");
      the destruction being a desecration;
      the attachment of blame to the invaders;
      any call for vengeance on them; etc.<?php
        Footnote('Berman (2023), pp.155&ndash;157.');
      ?>
    </p>
    <p>
      Similarly striking is a contrast of 19&ndash;20 against Psalm 102:12&ndash;13,
      where almost identical statements are taken in almost diametrically opposed directions:<?php Footnote('The Literal Standard Version exhibits this contrast with clarity.'); ?>
    </p>

    <div class="panel panel--width-28em">
      <div class="poem poem__hebverse">
        <div class="poem__verse">
          <div class="poem__versetext">
            <div class="indent0">And You, O YHWH, abide for all time,</div>
            <div class="indent1">And Your memorial from generation to generation.</div>
            <div class="indent0">You rise&mdash;You pity Zion,</div>
            <div class="indent1">For the time to favour her,</div>
            <div class="indent1">For the appointed time has come.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->
        <div class="panel__cite">
          &mdash;Ps.102:12&ndash;13 (<abbr title="Literal Standard Version">LSV</abbr>)
        </div><!-- "panel__cite" -->
        <hr>
        <div class="poem__verse">
          <div class="poem__versetext">
            <div class="indent0">You, O YHWH, remain for all time,</div>
            <div class="indent1">Your throne to generation and generation.</div>
            <div class="indent0">Why do You forget us forever?</div>
            <div class="indent1">You forsake us for [the] length of [our] days!</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->
        <div class="panel__cite">
          &mdash;Lam.5:19&ndash;20 (<abbr title="Literal Standard Version">LSV</abbr>)
        </div><!-- "panel__cite" -->

      </div><!-- "poem" -->
    </div><!-- "panel" -->
    <p>
      In the psalm, the community proclaims YHWH's arising
      to restore Zion;
      here in Lamentations, he is accused of remaining seated, perpetually doing nothing.<?php Footnote('Williamson (2023), pp.77&ndash;78.'); ?>
    </p>

    <h2>A hidden acrostic?</h2>

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
        Footnote('Guillaume (2009).');
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

    <hr>

    <div class="footnotes">
      <?php
        PrintFootnotes();
      ?>
    </div><!-- "footnotes" -->

  </div><!-- content-area -->

  <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/php/bodyfooter.php');
  ?>

</body>

</html>
