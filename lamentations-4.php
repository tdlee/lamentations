<!DOCTYPE html>
<?php $hver='5' ?>
<html lang="en">
<head>

  <title>ServiceMusic: Lamentations 4</title>

  <meta name="description" content="An acrostic and 'qinah' rendering of Lamentations 4">
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

    <h1>Lamentations 4</h1>

    <?php
      include('chapter-links.php');
    ?>

    <div class="panel">
      <div class="poem poem__hebverse draft">

        <div class="poem__verse">
          <div class="poem__verseref">
            Acrostic omissions: J, K, Q, X
          </div>
          <div class="poem__versetext">
            &nbsp;
          </div><!-- poem__versetext -->
          <div class="poem__verseref">1</div>
          <div class="poem__versetext">
            <div class="poem__versespeaker">Narrator:</div>
            <?php
              $fn='See footnotes on 1:1.';
              $fn2='Often translated "<i>jewels</i>",
                "<i>holy stones</i>" is not only more literal
                but also allows the metaphor for the stones of the destroyed Temple.
                Taken in conjunction with following verse,
                this metaphor links an increasingly human sequence:
                "<i>gold</i>", "<i>holy stones</i>", "<i>belov&egrave;d sons &amp; Daughter People</i>".';
                $fn3='A "disgorge" thread runs through the chapter at vv.1, 11 and 13.  See also the "pour" thread in chapter&nbsp;2.';
            ?>
              <div class="indent0 acrostic-line">Alas!<?php Footnote($fn); ?> The gold, now dulled;</div>
              <div class="indent2">finest gold tarnished!</div>
              <div class="indent1">the holy stones<?php Footnote($fn2); ?> disgorged<?php Footnote($fn3); ?></div><!-- disgorged: 4:1, 4:11, 4:13 --><!-- "stones" (v1) and "sons" (v2) should resonate -->
              <div class="indent2">on every street corner.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">2</div>
          <div class="poem__versetext">
            <?php
              $fn='The Hebrew words at "stones" (v1) and "sons" (v2) are similar. This has guided the choice of words in this version.';
            ?>
              <div class="indent0 acrostic-line">Belov&egrave;d sons<?php Footnote($fn); ?> of Zion</div><!-- "stones" (v1) and "sons" (v2) should resonate -->
              <div class="indent2">of gold-weight worth,</div>
              <div class="indent1">alas, ranked mere clay crocks&mdash;</div><!-- "alas" matches opening word of this chapter (and so also of chapters 1 and 2) --><!-- "mere" added because English "crocks" doesn't quite capture disposable nature of Hebrew -->
              <div class="indent2">work of a potter's hands.</div><!-- all three keywords (work, potter, hand) are important -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">3</div>
          <div class="poem__versetext">
            <?php
              $fn='A folk tradition, then familiar but now forgotten, about ostriches abandoning their hatchlings.  Contrast the first half of this verse.  (See also Job 39:13&ndash;16.)';
            ?>
              <div class="indent0 acrostic-line">Cubs even of jackals</div>
              <div class="indent2">are breast-fed nursed,</div>
              <div class="indent1">but my Daughter People is cruel</div>
              <div class="indent2">as the desert ostrich.<?php Footnote($fn); ?></div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">4</div>
          <div class="poem__versetext">
<div title="Contrast Psalm 131:2-3 (NASB):

  But I have calmed and quieted myself,
    I am like a weaned child with its mother;
    like a weaned child I am content.

  Israel, put your hope in the Lord
    both now and forevermore."
>
              <div class="indent0 acrostic-line">Dry-thirsted, the suckling's tongue</div>
              <div class="indent2">glues to its palate;</div>
              <div class="indent1">infants beg for bread,</div>
              <div class="indent2">but no one provides.</div>
</div><!-- mouse-hover -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">5</div>
          <div class="poem__versetext">
            <?php
              $fn='The purple of luxury.  If this Hebrew poem is then overlayed with the Christian gospels there is a resonance with the trial, mocking and crucifixion of Jesus.';
              $fn_those='The grammatical particle here represented as "those" is relatively rare in Hebrew poetry, yet that places it prominently as the acrostic letter in both halves of this verse. (Dobbs-Allsopp (2023), p.236.) In this version, that initial acrostic placement is not possible, so it is here placed at the breakpoint of each half-verse, as an analogous aid in showing their parallelism.';
            ?>
              <!--
                The two parts of this verse follow the same structure.
                For the use of "those", itself unusual in Hebrew poetry
                and here double-used, see Dobbs-Allsopp (2023), p.236.
              -->
              <div class="indent0 acrostic-line">Embraced now on dung heaps are those<?php Footnote($fn_those); ?></div><!-- fortuitously, the original verb is very close to our "embraced"; Berlin (2004) p 101, note 'f' -->
              <div class="indent2">once robed in purple;<?php Footnote($fn); ?></div><!-- rhythmic parallel between the two halves of this verse -->
              <div class="indent1">Destitute now in the streets lie those</div><!-- see footnote on first half-verse -->
              <div class="indent2">once feasting on dainties.</div><!-- rhythmic parallel between the two halves of this verse -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">6</div>
          <div class="poem__versetext">
            <?php
              $fn='The pairing of "iniquity" and "outrage" is common to vv.6, 13 and&nbsp;22; see Goldingay (2022), p.186. "Outrage" in this chapter, required by the \'O\' acrostic in v13, corresponds to "sin" in other chapters. (The O-acrostic possibility of "offence" seems too mild.)';
            ?>
              <div class="indent0 acrostic-line">Far greater my Daughter People's iniquity</div>
              <div class="indent2">than the outrage of Sodom,<?php Footnote($fn); ?></div><!-- 4:6,13,22: iniquity/outrage: same nouns, different order;  different singular/plural -->
              <div class="indent1">which had been overthrown in an instant</div><!-- "overthrown": the "turn" verb from other chapters -->
              <div class="indent2">with no hand on her laid.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">7</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">Glistening as snow, once, her princes,</div>
              <div class="indent2">whiter than milk;</div>
              <div class="indent1">their limbs more ruddy than coral,</div>
              <div class="indent2">their beauty as sapphire.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">8</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">How soot-black now their faces,</div>
              <div class="indent2">unrecognised in streets;</div>
              <div class="indent1">their skin shrivelled, taut on their bones</div>
              <div class="indent2">as dessicated wood.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">9</div>
          <div class="poem__versetext">
              <?php
                $fn_good='"Better" is the same root as the "judicious", often translated "good", at 3:25&ndash;27. Both poems deploy this prominently as the acrostic head-word. In English, imagine here "good[er] to be sword-pierced than&hellip;". See translation notes.';
                $fn_bounty='This term is literally "bounty of the field". Its two other Hebrew Bible occurrences are in Deut.32:13 and Ezek.36:30 where the context is the <span class="yhwh">Lord</span>\'s blessing. So its use here may carry a critique of their squandering. See Berman (2023), p.133.';
              ?>
              <div class="indent0 acrostic-line">Impaling on sword? Far better<?php Footnote($fn_good); ?></div>
              <div class="indent2">than impaling by famine;</div>
              <div class="indent1">lives bleeding away, wasted</div>
              <div class="indent2">of the harvest bounty.<?php Footnote($fn_bounty); ?></div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

<!--
  To map the 22-letter Hebrew alphabet onto 26-letter Western alphabet
  need to omit four letters.
  'J' and 'K' go...
-->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">10</div>
          <div class="poem__versetext">
              <?php
                $fn_acrostic='The word for God\'s daily compassionate "mercies" from 3:22 here re-appears (adjectively) in a horrifyingly different guise; O\'Connor (2002), p.62; also Goldingay (2022), p.173. Our acrostic constraint requires use of a substitute word, which unfortunately loses that association.';
                $fn='The "Daughter People" half-line is the same at 2:11, 3:48 and 4:10.';
              ?>
              <div class="indent0 acrostic-line">Loving<?php Footnote($fn_acrostic); ?> women's own hands</div>
              <div class="indent2">cook their own children:</div>
              <div class="indent1">they became their food</div>
              <div class="indent2">at my Daughter People's ravaging.<?php Footnote($fn); ?></div><!-- this half-line is common to 2:11, 3:48 and 4:10 --><!-- quoted in "reading" -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">11</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">Meted out in full is the <span class="yhwh">Lord</span>'s anger,</div><!-- 1:12; 2:1,3,21,22; 4:11/1; staging-quotes: "[day of]...anger" -->
              <div class="indent2">his fury disgorged;</div><!-- disgorged: 4:1, 4:11, 4:13 --><!-- 2:4; 4:11/2: "fury" -->
              <div class="indent1">He has kindled a firestorm in Zion</div><!-- "firestorm": see translation notes -->
              <div class="indent2">that consumed her foundations.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">12</div>
          <div class="poem__versetext">
<div title="Contrast Psalm 48:4-8 (NASB):

  For, behold, the kings arrived,
    they passed by together.
  They saw it, then they were amazed;
    they were terrified, they fled in a hurry.
  Panic seized them there,
    anguish, as that of a woman in childbirth.
  With the east wind
    you smash the ships of Tarshish.
  Just as we have heard, so have we seen
    in the city of the Lord of armies, in the city of our God;
    God will establish her forever."
>
              <div class="indent0 acrostic-line">Not the kings of the earth</div>
              <div class="indent2">nor its people believed</div>
              <div class="indent1">that enemy or foe could penetrate</div>
              <div class="indent2">the gates of Jerusalem.</div>
</div><!-- mouse-hover -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">13</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">Outrages of her prophets, the cause,</div>
              <div class="indent2">and the iniquities of her priests,</div><!-- 4:6,13,22: iniquity/outrage: same nouns, different order;  different singular/plural -->
              <div class="indent1">who had disgorged in the midst of the city</div><!-- disgorged: 4:1, 4:11, 4:13 -->
              <div class="indent2">the blood of the just.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">14</div>
          <div class="poem__versetext">
            <?php
              $fn='The referent "they" is ambiguous. It makes sense for it to be the priests and prophets of the previous verse; this leads well into vv.15&ndash;16; Goldingay (2022), p.176. And there is a certain irony in the prophets&mdash;the visionaries&mdash;being blind; Berlin (2004), p.111.';
            ?>
              <div class="indent0 acrostic-line">Polluted with blood, through the streets</div>
              <div class="indent2">they<?php Footnote($fn); ?> strayed blindly;</div><!-- 14,15: common "strayed" -->
              <div class="indent1">so defiled that none would dare</div>
              <div class="indent2">touch their garments.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">15</div>
          <div class="poem__versetext">
            <?php
              $fn='This verse, like 1:7 and 2:19, has an extra line in the Hebrew, considered by some commentators to be a marginal gloss.';
            ?>
              <div class="indent0 acrostic-line">"Repulsive! Away!"</div>
              <div class="indent2">people shout at them.</div>
              <div class="indent1">"Repulsive! Repulsive! Hands off!"</div>
              <div class="indent2">So they straggled; they strayed.</div><!-- Hebrew alliteration --><!-- 14,15: common "strayed" -->
              <div class="indent1">Resolute were the nations:</div>
              <div class="indent2">"They'll not reside here."<?php Footnote($fn); ?></div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">16</div>
          <div class="poem__versetext">
<div title="Contrast Numbers 6:24-26 (NASB):

  The Lord bless you, and keep you;

  The Lord cause His face to shine on you,
    and be gracious to you;

  The Lord lift up His face to you,
    and give you peace."
>
            <?php
              $fnface1='Astonishingly, very few English translations capture this verse\'s double use of "face" in the Hebrew. See the translation notes.';
              $fnface2='"The <span class="yhwh">Lord</span>\'s face" is usually a positive image, and with priestly blessing of favour: Num.&nbsp;6:24&ndash;26. But here his face operates in a hostile fashion; see Goldingay (2022), p.179. It can be his angry face: Lev.&nbsp;26:17; see Berlin (2004), p.102, note&nbsp;\'m\'.';
            ?>
              <!-- "face": 2:19, 4:16 -->
              <div class="indent0 acrostic-line">Scattered from the <span class="yhwh">Lord</span>'s own face:<?php Footnote($fnface1); ?><?php Footnote($fnface2); ?></div>
              <div class="indent2">no more does he notice them.</div><!-- variant of "notice": see also 1:11, 1:12 etc. --><!-- quoted in "notes" --><!-- vv.16,22: "no more..." commonality and in leading position -->
              <div class="indent1">The people from the priests turn their own faces:</div>
              <div class="indent2">show elders no favour.</div>
</div><!-- mouse-hover -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">17</div>
          <div class="poem__versetext">
            <div class="poem__versespeaker">Community:</div>
            <?php
              $fn_pointless='This "pointless" translation courtesy of Parry (2011a), p.85.';
              $fn='The identity of the nation which could not or would not help is unknown. One possibility is Edom. This would connect with its condemnation a few verses ahead. Berlin (2004), pp.112&ndash;113; Provan (2016), p.121.';
            ?>
              <div class="indent0 acrostic-line">Tired out eyes scan, exhausted,</div>
              <div class="indent2">for help&mdash;pointless.<?php Footnote($fn_pointless); ?></div><!-- "pointless" from Parry (2011a), p.85. -->
              <div class="indent1">From our watchtowers we watched for a nation<?php Footnote($fn); ?></div>
              <div class="indent2">that cannot deliver.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">18</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">Unceasing, they ensnared our steps,</div><!-- "ensnare": 3:52; 4:18 -->
              <div class="indent2">our squares no-go zones.</div><!-- 2:11,2:12,4:18: "[x] squares": three minor variants --><!-- "no-go zones": quoted in "notes" -->
              <div class="indent1">Our end drew near, our days gone;</div>
              <div class="indent2">our end had come.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">19</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">Vicious and swifter than sky-hawks</div>
              <div class="indent2">came our pursuers:</div>
              <div class="indent1">Hot on our heels through the hills;</div>
              <div class="indent2">ambushers of the desert.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">20</div>
          <div class="poem__versetext">
            <?php
              $fn_anointed='"The <span class="yhwh">Lord</span>\'s own anointed"
                is the line of the dynasty of King David,
                and in this instance probably Zedekiah; Berlin (2004), p.113.
                The associated terms "life-breath" and "in his shade we will dwell"
                are Ancient Near East images of beneficent rulers; Goldingay (2022), p.183.
                Also see Berman (2023), pp.140&ndash;141.';
            ?>
              <div class="indent0 acrostic-line">Wedged in their traps was our life-breath,</div>
              <div class="indent2">the <span class="yhwh">Lord</span>'s own anointed,<?php Footnote($fn_anointed); ?></div>
              <div class="indent1">of whom we'd believed "in his shade</div>
              <div class="indent2">we will dwell among nations."</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">21</div>
          <div class="poem__versetext">
            <div class="poem__versespeaker">Narrator (community):</div>
            <?php
              $fn_esau='The Edomites were descended from Esau, the twin brother of Jacob (later called Israel). The brothers, and their descendents, were locked in sibling rivalry from the outset: Gen.25:22&ndash;30.';
              $fn1='While "Daughter Zion" is clearly a term of endearment, by contrast "Daughter Edom", for Zion\'s enemy, can, and probably should, be read with a sarcastic twist.  Berlin (2004) p.113; Dobbs-Allsopp (2012), p.137.';
              $fn2='This is the same verb as for Daughter Zion at the 1:1 opening of the book, now coming full circle to describe the unsuspecting fate of the enemy.';
              $fn3='See also Jer.&nbsp;25:15&ndash;29 for this imagery, where Edom and Uz are included.';
            ?>
              <div class="indent0 acrostic-line">You rejoice; you gloat, Daughter Edom:<?php Footnote($fn_esau); Footnote($fn1); ?></div>
              <div class="indent2">sit<?php Footnote($fn2); ?> basking in Uz;</div><!-- same verb as 1:1 -->
              <div class="indent1">but to you, too, the chalice shall pass&mdash;</div>
              <div class="indent2">to you, boozed and debauched.<?php Footnote($fn3); ?></div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">22</div>
          <div class="poem__versetext">
              <?php
                $fn_no_more='The phrase of punishment "no more&hellip;notice" of v.16 is transformed into a parallel phrase of grace "no more&hellip;exile".  Berman (2023), p.148.';
              ?>
              <div class="indent0 acrostic-line">Zion-Daughter, your iniquity expiated,</div>
              <div class="indent2">no more does he exile you.<?php Footnote($fn_no_more); ?></div><!-- vv.16,22: "no more..." commonality and in leading position -->
              <div class="indent1">But your iniquity, Daughter Edom, will he prosecute,</div>
              <div class="indent2">lay bare your outrages.</div><!-- 4:6,13,22: iniquity/outrage: same nouns, different order;  different singular/plural --><!-- 2:14; 4:22: "lay bare" commonality -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

      </div><!-- "poem" -->

    </div><!-- "panel" -->

    <p>
      The opening "Alas!" recalls the first two poems;
      it is swiftly reinforced in the second half of v2.
    </p>

    <p>
      As with all three preceding poems, this, too, can work as two voices,
      although here as first-person singular (most) and first-person plural (17&ndash;20 or 17&ndash;22).<?php
        Footnote('For 17&ndash;20 see Dobbs-Allsopp (2012), p.133, Goldingay (2022), p.163 and Provan (2016), p.109; for 17&ndash;22 see Middlemas (2021), p.25.');
      ?>
      Unlike them, however, the personalised perspective is neither female (as in Lam.1 and 2) nor male (Lam.3),
      but rather various groups within the population.
      And whereas the addressee in 1 and 3 had been the <span class="yhwh">Lord</span>,
      and in 2 had been mostly the city,
      here there is no specific addressee until the personified cities in the closing verses.
    </p>

    <p>
      While the narration of 1&ndash;16 is predominantly observational
      of the inhabitants ("my Daughter People")
      it is punctuated at three places, vv.6, 11 and 16,
      by theological reflection and interpretation
      of perhaps an over-reliance on Zion theology.<?php
        Footnote('Berman (2023), pp.131, 138.');
      ?>
      It might be regarded as a third voice.
    </p>

    <p>
      Visually, a unique aspect of this chapter is the striking use of colour
      in the opening eight verses and its erasure as the degradation of the siege takes hold.<?php Footnote('Berlin (2004), p.103.'); ?>
    </p>

    <p>
      It starts with the impossible.
      Pure gold cannot tarnish under normal circumstances.<?php
        Footnote('Any tarnishing we perceive is not of the gold itself, but of small amounts of other embedded metal impurities.');
      ?>
      Yet here it does.
      The city, temple and king had been believed to be safe under the <span class="yhwh">Lord</span>'s protection;
      defeat and devastation were unthinkable.
      Yet here all this can fall, and does.<?php Footnote('Berman (2023), p.129.'); ?>
      Things are so bad that even nature, God's own created order, is out of kilter.
      And it continues into the human realm,
      including the horror of mothers cannibalising their own God-given children.
      "Blessings of the covenant become human carnage."<?php
        Footnote('Hens-Piazza (2017), p.60.');
      ?>
    </p>

    <p>
      From an inner-biblical perspective, just as the opening verses of Lam.3
      seem to pull in tension against Psalm&nbsp;23,
      so here are other contrasts, and even overturnings of other passages:
    </p>
    <ul>
      <li>
         v2: the rare term "children [sons] of Zion" leads us to <a href="https://www.biblegateway.com/passage/?search=psalm+149%3A2&version=NRSVUE" target="_blank">Psalm&nbsp;149:2</a><?php
          Footnote('Goldingay (2022), p.168; Berman (2023), p.130.');
        ?>
        which in turn draws us to contrast this chapter overall with themes in that psalm
      </li>
      <li>
        v4: contrast with <a href="https://www.biblegateway.com/passage/?search=psalm+131&version=NRSVUE" target="_blank">Psalm&nbsp;131</a>
      </li>
      <li>
        v12: seems almost a parody of <a href="https://www.biblegateway.com/passage/?search=psalm+48%3A4-8&version=NRSVUE" target="_blank">Psalm&nbsp;48:4&ndash;8</a><?php
          Footnote('Berman (2023), p.134.');
        ?>
      </li>
      <li>
        v16: contrast with <a href="https://www.biblegateway.com/passage/?search=numbers+6%3A24-26&version=NRSVUE" target="_blank">Numbers&nbsp;6:24&ndash;26</a><?php
          Footnote('Goldingay (2022), p.179.');
        ?>
      </li>
      <li>
        vv1&ndash;8 (in particular 1&ndash;2, 5, 7&ndash;8): contrast the degrading colour imagery against <a href="https://www.biblegateway.com/passage/?search=Song%20of%20Songs%205:10-16&version=NRSVUE" target="_blank">Song of Songs&nbsp;5:10&ndash;16</a><?php
          Footnote('Fullerton&nbsp;Strollo (2017).');
        ?>
      </li>
      <li>
        the chapter as a whole resembles an inversion of the prayer for the king and kingdom welfare in <a href="https://www.biblegateway.com/passage/?search=psalm+144%3A9-14&version=NRSVUE" target="_blank">Psalm&nbsp;144:9&ndash;14</a>.<?php
          Footnote('Berman (2023), pp.148&ndash;150.');
        ?>
      </li>
    </ul>

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
