<!DOCTYPE html>
<?php $hver='5' ?>
<html lang="en">
<head>

  <title>ServiceMusic: Lamentations 1</title>

  <meta name="description" content="An acrostic and 'qinah' rendering of Lamentations 1">
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

    <h1>Lamentations 1</h1>

    <?php
      include('chapter-links.php');
    ?>

    <p>
      Reminder: the 3&ndash;2 <i>qinah</i> rhythm is vitally important to recitation and reading.
      <span class="noprint">
        For an example, hover the mouse over the opening "Alas!&nbsp;&hellip;" verse.
      </span>
    </p>

    <div class="panel">
      <div class="poem poem__hebverse draft">

<!-- enemy; foe
     Two different words in use.
     There doesn't seem to be a significant difference.
     Verses: 2, 5, 7, 9, 10, 16, 17, 21.
     Nevertheless we try to respect the original.
     We let the E-acrostic at v5 decide on "enemy" to open it.
     This couplet has both words so makes a good baseline for tracking usage.
       Goldingay/Young:adversary  Berlin:foe    Sefaria:enemy  Lee:enemy
       Goldingay/Young:enemy:     Berlin:enemy  Sefaria:foe    Lee:foe
     although Sefaria/JPS has a couple of internal inconsistencies.
-->

        <div class="poem__verse">
          <div class="poem__verseref">
            Acrostic omissions: J, K, Q, X
          </div>
          <div class="poem__versetext">
            &nbsp;
          </div><!-- poem__versetext -->
          <div class="poem__verseref">1</div>
          <div class="poem__versetext">
<div title="Example qinah 3-2 rhythm: stress the capitalised syllables:

  alas!
      a-LONE she SITS: the CI-ty
          once GREAT with PEO-ple;

      SHE, once GREAT among NA-tions,
          now ab-AN-doned, WI-dowed;

      SHE, once PRIN-cess among PRO-vinces,
          now CHAINED, en-SLAVED."
>
            <div class="poem__versespeaker">Narrator:</div>
              <?php
                $fn='"Alas!": Hebrew <i>ekah</i>, meaning "how", the name of the book itself, and beginning with the Hebrew letter \'aleph\' equivalent to our \'A\'.';
                $fn2='Despite the importance of the overall 3&ndash;2 <i>qinah</i> metre,
                  the opening "Alas!" is probably a preamble \'anacrusis\',
                  external to that metre (i.e. 4&ndash;2).
                  This is probably also true of the "Alas!" of the second chapter
                  although probably not of the fourth.  See Goldingay (2022), p.49, note \'c\'.
                  So in these two chapters I have followed this, and also used an additional acrostic "A&hellip;" word following that "Alas!"';
                $fn3='This verb "sit" runs as a thread through the book.
                  Here at the start it describes the city;
                  at almost the centre, 3:28, it describes a representative person;
                  finally at almost the close, 5:19, it describes God himself.';
              ?>
              <!-- 1:1, 3:28, 5:19: quoted in new "staging" -->
              <div class="indent0 acrostic-line">Alas!<?php Footnote($fn); Footnote($fn2); ?></div>
              <div class="indent1">Alone she sits:<?php Footnote($fn3); ?> the city</div><!-- "sit": same verb at 1:1, 3:28 and 5:19 (and elsewhere) -->
              <div class="indent2">once great with people;</div><!-- "great": 1a,1b,22c -->
              <div class="indent1">She, once great among nations,</div><!-- "great": 1a,1b,22c -->
              <div class="indent2">now abandoned, widowed;</div>
              <div class="indent1">she, once princess among provinces,</div>
              <div class="indent2">now chained, enslaved.</div>
</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">2</div>
          <div class="poem__versetext">
              <?php
                $fn='In some translations, "her lovers". But this is not the same as "lovers" in v.19. This "who love her" follows Berlin (2004) p.51.';
              ?>
            <div class="indent0 acrostic-line">Bitterly she weeps through the night;</div>
            <div class="indent2">tears wet her cheeks.</div>
            <div class="indent1">None there is to comfort her</div>
            <div class="indent2">from all who love her;<?php Footnote($fn); ?></div>
            <div class="indent1">her friends all have betrayed her:</div><!-- "her friends all" rather than "all her friends": seems a better flow from the immediately preceding "from all who love her" -->
            <div class="indent2">become her foes.</div><!-- enemy/foe -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">3</div>
          <div class="poem__versetext">
              <?php
                $fn='The Hebrew "straits" (or "narrows") resonates strongly with their word for "Egypt"; Berlin (2004) p.51; Goldingay (2022) p.54 note \'e\'. This prompts a powerful reminder of their ancestral enslavement there. On that occasion, her pursuers famously did <em>not</em> overtake her, being destroyed at Moses\' parting of the sea. But on this occasion there is no such deliverance.';
              ?>
              <div class="indent0 acrostic-line">Cast out into exile by force</div>
              <div class="indent2">is Judah to hard labour.</div>
              <div class="indent1">She <!-- sit/dwell/lie as 1:1 --> sits among the nations</div><!-- quoted in "notes" -->
              <div class="indent2">but finds no repose.</div>
              <div class="indent1">All who pursue her overtake her:</div>
              <div class="indent2">dire her straits.<?php Footnote($fn); ?></div><!-- mentioned in "notes" -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">4</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">Devoid of all pilgrims to her assemblies,</div><!-- match v4:assemblies with v15:assembly -->
              <div class="indent2">Zion roads mourn;</div><!-- may be "roads to" or "roads in" -->
              <div class="indent1">her gateways all are desolate,</div><!-- "desolate" common to 1:4, 1:13, 1:16 -->
              <div class="indent2">her priests groan,</div><!-- quoted in chapter intro -->
              <div class="indent1">her young women <!-- grieve; --> wail;</div>
              <div class="indent2">how bitter her fate.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">5</div>
          <div class="poem__versetext">
              <?php
                $fn='Note overlapping verb sequences: "afflicted"/"inflicted" (same Hebrew verb) at 5<em>b</em> and 12<em>c</em>, then "unleashed against" at 12<em>b</em> and 22. Dobbs-Allsopp (2012) p.68.';
              ?>
              <div class="indent0 acrostic-line">Enemies now have mastered her;</div><!-- enemy/foe -->
              <div class="indent2">her foes prosper,</div><!-- enemy/foe -->
              <div class="indent1">since the <span class="yhwh">Lord</span> has afflicted her<?php Footnote($fn); ?></div><!-- vv.5,12: afflicted/inflicted (would ideally be the same) -->
              <div class="indent2">for her many transgressions.</div><!-- 5,14,22: same word "transgressions" -->
              <div class="indent1">Her youngsters are driven to exile,</div>
              <div class="indent2">captive before the enemy.</div><!-- enemy/foe --><!-- vv.5,18: common "captive" root word -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">6</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">Fled from Daughter Zion</div>
              <div class="indent2">is all her splendour.</div>
              <div class="indent1">Her leaders now wander like deer&mdash;</div>
              <div class="indent2">they find no pasture;</div>
              <div class="indent1">they run, all strength spent,</div>
              <div class="indent2">pursued by the hunter.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">7</div>
          <div class="poem__versetext">
              <?php
                $fn1='The term "days of old" will recur at almost the very end of the book, 5:21. Assis (2009), p.322.';
                $fn2='This verse, like 2:19 and 4:15, has an extra line in the Hebrew, considered by some commentators to be a marginal gloss.  See also Provan (2016), pp.41&ndash;42. Alternatively, prior to the finalisation of the text, this stanza may have circulated in different versions: see Dobbs-Allsopp (2023), p.240. For an overview of suggested variant readings and ideas, see Kotz&eacute; (2011), pp.61&ndash;63.';
                $fn_mind='Verses 7 and 9 share a common Hebrew verb root for past and future tenses. The English "remember" is close, but only works for the past (v.7), not prospectively for the future (v.9).  The basis chosen here, and worded to try to preserve 3&ndash;2 <i>qinah</i> rhythm, is "calls to mind" (past) and "no mind&hellip;to" (future). See Berman (2023), p.34.';
                $fn_treasures='The Hebrew word, here rendered "treasures", has several shades of meaning. Its uses in vv.7, 10 and 11 (briefly: valuable goods; feminine privacy; children) seem to play the poetic ambiguity of their interaction to advantage.  See translation notes.';
              ?>
              <div class="indent0 acrostic-line">Goodly treasures<?php Footnote($fn_treasures); ?> once hers</div>
              <div class="indent2">in days of old<?php Footnote($fn1); ?></div><!-- 1:7, 5:21: "days of old" -->
              <div class="indent1">Jerusalem calls to mind<?php Footnote($fn_mind); ?></div><!-- 1:7,9: same verb about remembering or calling to mind; 7: to past; 9: to future -->
              <div class="indent2">in her days of downfall.</div><!-- 1:7,9, 3:19: "downfall" -->
              <div class="indent1">When her people fell to enemy hand,</div><!-- enemy/foe -->
              <div class="indent2">there was none to help.</div>
              <div class="indent1">Her enemies look on and mock</div>
              <div class="indent2">her fallen state.<?php Footnote($fn2); ?></div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">8</div>
          <div class="poem__versetext">
              <?php
                $fn_soiled='The Hebrew is unclear and anomalous,
                  with three possibilities of meaning and interpretation:
                  "mockery", "wanderer" and "menstruant",
                  the last supported by its similarity to (although not sameness as)
                  the closing phrase of the more certain v17.
                  There may well be an intentional interplay of them all.
                  See Berlin (2004), pp.53&ndash;54 (and 58&ndash;59); also Goldingay (2022), pp.62&ndash;63.
                  This version uses a common "soiled" at both verses to reflect this resonance.';
                $fn_recoil='The narrator\'s words can be seen here to imply Daughter Zion\'s guilty reaction. But at v13 she turns the same terminology to her defence.';
              ?>
              <div class="indent0 acrostic-line">How grievously has Jerusalem sinned&mdash;</div>
              <div class="indent2">how become a soiled rag.<?php Footnote($fn_soiled); ?></div><!-- vv 8,17: "soiled" Hebrew roots very similar; let them resonate in English -->
              <div class="indent1">Those who once honoured her, despise her,</div>
              <div class="indent2">seeing her nakedness.</div>
              <div class="indent1">She, aghast, cries out;</div>
              <div class="indent2">she recoils backwards.<?php Footnote($fn_recoil); ?></div><!-- vv8,13: same root words "turn/back" -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">9</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">Impurity clings to her skirts;</div>
              <div class="indent2">no mind has she to her future.</div><!-- 1:7,9: same verb about remembering or calling to mind; 7: to past; 9: to future -->
              <div class="indent1">Downfallen in jaw-dropping shock,</div><!-- 1:7,9, 3:19: "downfall" -->
              <div class="indent2">there is none to comfort her.</div>
            <div class="poem__versespeaker">Daughter Zion:</div>
              <div class="indent1">"Look, O <span class="yhwh">Lord</span>: my affliction&mdash;</div>
              <div class="indent2">how the foe triumphs."</div><!-- enemy/foe --><!-- "how": vv9,11 -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

<!-- omit 'J' and 'K' -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">10</div>
          <div class="poem__versetext">
            <div class="poem__versespeaker">Narrator:</div>
              <div class="indent0 acrostic-line">Lecherous enemy hands spread</div><!-- enemy/foe --><!-- "spread": 1:10, 1:13, 1:17 -->
              <div class="indent2">all over her treasures;</div>
              <div class="indent1">pagan nations she sees</div>
              <div class="indent2">enter her sanctuary&mdash;</div>
              <div class="indent1">those you commanded against</div><!-- 10,17: "commanded [and negation]": common verb -->
              <div class="indent2">entering your assembly.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">11</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">Moaning in famine her people</div>
              <div class="indent2">all search for bread,</div>
              <div class="indent1">bartering treasures for food</div>
              <div class="indent2">to salvage their souls.</div><!-- 1:11,16,19: "salvage...soul" --><!-- 1:11,16,19; 3:17,20,24,25,51,58: "soul" -->
            <div class="poem__versespeaker">Daughter Zion:</div>
              <div class="indent1">"Look, O <span class="yhwh">Lord</span>, and notice&mdash;</div><!-- vv11,12: match verbs, albeit in reverse order; see also 5:1 -->
              <div class="indent2">how I am despised."</div><!-- "how": vv9,11 -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">12</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">Notice! And look, you passers-by;</div><!-- vv11,12: match verbs, albeit in reverse order; see also 5:1 -->
              <div class="indent2">is it nothing to you?</div><!-- couplet copied in "notes" -->
              <div class="indent1">Is there any pain like my pain,</div><!--vv.12,18: common "pain" -->
              <div class="indent2">which he unleashed against me&mdash;</div><!-- vv12,22: common "unleash" ("deal out") --><!-- this line and next both begin "which". Dobbs-Allsopp (2023) p.239. -->
              <div class="indent1">which the <span class="yhwh">Lord</span> inflicted</div><!-- vv.5,12: afflicted/inflicted (would ideally be the same) --><!-- leading "which": see comment on previous line -->
              <div class="indent2">in the day of his anger?</div><!-- 1:12; 2:1,3,21,22; 4:11/1; staging-quotes: "[day of]...anger" -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">13</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">Out from on high he hurled fire</div>
              <div class="indent2">down into my bones.</div>
              <div class="indent1">He spread a net for my feet;</div><!-- "spread": 1:10, 1:13, 1:17 -->
              <div class="indent2">recoiling me backwards.<?php Footnote('See footnote at v8.'); ?></div><!-- vv8,13: same root words "turn/back" -->
              <div class="indent1">He has made me desolate:</div><!-- "desolate" common to 1:4, 1:13, 1:16 -->
              <div class="indent2">all day sickened.</div><!-- "heart[s] sick[en]": 1:22 and 5:17; "sick" also at 1:13 -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">14</div>
          <div class="poem__versetext">
              <?php
                $fn1='This is the only occurrence of this verb in the entire Bible, so any translation is conjectural.';
                $fn2='Original wording is something like "Delivers my Lord [to] hands [I am] not able to withstand". Expressing that within 3&ndash;2 <i>qinah</i> is tricky; even more so when trying to keep the resonance of the "his hand" earlier in the verse.';
              ?>
              <div class="indent0 acrostic-line">Packed<?php Footnote($fn1); ?> into a yoke are my transgressions;</div><!-- 5,14,22: same word "transgressions" -->
              <div class="indent2">twisted tight by his hand,</div><!-- "twisted tight" alliteration (also preceded by "transgressions" -->
              <div class="indent1">mounted upon my neck,</div>
              <div class="indent2">sapping my strength.</div>
              <div class="indent1">My Lord hand-delivered me to those</div>
              <div class="indent2">whom I cannot withstand.<?php Footnote($fn2); ?></div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">15</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">Rejected are all my own warriors</div>
              <div class="indent2">by my Lord in my midst;</div>
              <div class="indent1">he called an assembly against me</div><!-- verb: 15,19,21: match; 17:different --><!-- match v4:assemblies with v15:assembly -->
              <div class="indent2">to crush my young men.</div>
              <div class="indent1">In a winepress my Lord has trodden</div>
              <div class="indent2">virgin Daughter Judah.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">16</div>
          <div class="poem__versetext">
              <?php
                $fn='Some Jewish commentators here see a comforter-Messiah being yearned for; Goldingay (2022), p.75.';
              ?>
              <div class="indent0 acrostic-line">Streaming with tears, my eyes&mdash;</div>
              <div class="indent2">my eyes weep for these things;</div>
              <div class="indent1">far distant one who might comfort me,<?php Footnote($fn); ?></div>
              <div class="indent2">who might salvage my soul.</div><!-- 1:11,16,19: "salvage...soul" --><!-- 1:11,16,19; 3:17,20,24,25,51,58: "soul" -->
              <div class="indent1">My children all are desolate;</div><!-- "desolate" common to 1:4, 1:13, 1:16 -->
              <div class="indent2">the foe has prevailed.</div><!-- enemy/foe -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">17</div>
          <div class="poem__versetext">
              <?php
                $fn='The narrator\'s earlier speech had used the verbs "spread" and "command" close to its culmination (v.10). The opening of their next speech re-deploys the same verbs with different slants. Linafelt (2000), p.51.';
              ?>
            <div class="poem__versespeaker">Narrator:</div>
	    <div class="indent0 acrostic-line">Taut spreads out Zion her hands,<?php Footnote($fn); ?></div><!-- "spread": 1:10, 1:13, 1:17 -->
              <div class="indent2">but none comforts her;</div>
              <div class="indent1">the <span class="yhwh">Lord</span> has commanded against Jacob</div><!-- verb: 15,19: match; 17:different --><!-- 10,17: "commanded [and negation]": common verb -->
              <div class="indent2">his enemies to encircle;</div>
              <div class="indent1">Jerusalem has become among them</div>
              <div class="indent2">menstrually soiled.</div><!-- vv 8,17: "soiled" Hebrew roots very similar; let them resonate in English -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">18</div>
          <div class="poem__versetext">
            <div class="poem__versespeaker">Daughter Zion:</div>
              <div class="indent0 acrostic-line">Upright in judgement is the <span class="yhwh">Lord</span>,</div>
              <div class="indent2">for I defied his command.</div><!-- vv18,20: match "defied" -->
              <div class="indent1">Hear, I pray, all you peoples,</div>
              <div class="indent2">and look on my pain:</div><!--vv.12,18: common "pain" -->
              <div class="indent1">my maidens and my young men</div>
              <div class="indent2">gone into captivity.</div><!-- vv.5,18: common "captive" root word -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">19</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">Vainly I called to my lovers&mdash;</div><!-- verb: 15,19,21: match; 17:different --><!-- for "lovers" see note at v2 which is different -->
              <div class="indent2">they abandoned me.</div>
              <div class="indent1">In the city my priests and my elders</div><!-- quoted in chapter intro -->
              <div class="indent2">perish</div>
              <div class="indent1">when they search for food for themselves</div>
              <div class="indent2">to salvage their souls.</div><!-- 1:11,16,19: "salvage...soul" --><!-- 1:11,16,19; 3:17,20,24,25,51,58: "soul" -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">20</div>
          <div class="poem__versetext">
              <div class="indent0 acrostic-line">Wretched am I, <span class="yhwh">Lord</span>; look!</div><!-- referenced in notes (for notice/look) -->
              <div class="indent2">My stomach churns,</div><!-- 1:20, 2:11: same -->
              <div class="indent1">my heart turns over within me:</div>
              <div class="indent2">defiantly I had defied.</div><!-- vv18,20: match "defied" --><!-- maintain Hebrew doubling of "defy" root -->
              <div class="indent1">Outdoors, the sword bereaves;</div>
              <div class="indent2">indoors, very death.</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">21</div>
          <div class="poem__versetext">
              <?php
                $fn1='Berlin (2004) pp.44,60 takes this half-line as vocalised utterance. Here that would be: Yearnings&hellip;they heard: "none brings me comfort".';
                $fn2='In Hebrew this word, meaning something like "bad", can apply in two opposite directions: someone can be either on the receiving end (e.g. "I\'m bad", such as distressed or injured: "in a bad way") or the performing end (e.g. "I\'m bad", such as an evildoer\'s innate badness). Here the progression from v21 to v22 exploits this word\'s dual direction for a revengeful <i><span lang="de">schadenfreude</span></i>. See Goldingay (2022), pp.80&ndash;81. To reflect this "same but opposite" poetically whilst avoiding potential ambiguity, we use the near-rhymes "malignant state" and "malignant ways".';
              ?>
              <div class="indent0 acrostic-line">Yearnings of anguish they heard:</div>
              <div class="indent2">none brings me comfort.<?php Footnote($fn1); ?></div>
              <div class="indent1">My foes all heard my malignant<?php Footnote($fn2); ?> state,</div><!-- 21,22 common word for receiving and transmitting badness, evil, etc. --><!-- enemy/foe -->
              <div class="indent2">rejoicing that you caused it.</div>
              <div class="indent1">Oh, bring on the day you called forth&mdash;</div><!-- verb: 15,19,21: match; 17:different -->
              <div class="indent2">let them be as me!</div>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">22</div>
          <div class="poem__versetext">
              <?php
                $fn='The opening v.1 "great", there used twice positively, here returns, but in negative contrast, to bracket this chapter.  See Dobbs-Allsopp (2012), p.74.';
              ?>
              <div class="indent0 acrostic-line">Zero in&mdash;their malignant ways all are before you;</div><!-- 21,22 common word for receiving and transmitting badness, evil, etc. -->
              <div class="indent2">unleash against them</div><!-- vv12,22: common "unleash" ("deal out") -->
              <div class="indent1">as you unleashed against me</div>
              <div class="indent2">for all my transgressions.</div><!-- 5,14,22: same word "transgressions" -->
              <div class="indent1">For great<?php Footnote($fn); ?> are my groans;</div><!-- "great": 1a,1b,22c -->
              <div class="indent2">my heart is sick.</div><!-- "heart[s] sick[en]": 1:22 and 5:17; "sick" also at 1:13 -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

      </div><!-- "poem" -->

    </div><!-- "panel" -->

    <p>
      Throughout chapters one, two and four, Zion is not only the dwelling-place of God
      but is additionally personified by the hauntingly endearing term "Daughter Zion" and variants such as "Daughter Jerusalem" and "my Daughter People".
      The poems lament not merely an inanimate city;
      the city is a precious daughter, beloved of God.<?php
          Footnote('Adelman (2021); Berlin (2004), pp.10&ndash;12.');
          ?>
      This is set out within the very first verse.
    </p>

    <p>
      Further, in this first poem all the cited human suffering is connected to, and filtered through, the persona of the city, from "<em>her</em> priests groan" (v4) through to "<em>my</em> priests and <em>my</em> elders perish" (v19).<?php Footnote('Dobbs-Allsopp (2012), p.62.'); ?>
    </p>

    <p>
      Observe that this first poem is in two "voices": a witness-narrator recites most of 1&ndash;11<i>b</i>; the city herself recites most of 11<i>c</i>&ndash;22.  In each, though, the voice of the other occasionally appears, indeed, interrupts:
    </p>
    <ul>
      <li>
        The witness's section 7&ndash;10 about the city's accused sin and violation is briefly interrupted at 9<i>c</i> by Jerusalem herself.
      </li>
      <li>
        At 1:17 the witness interjects a brief observation at a pause or turning point in the city's speech.
      </li>
    </ul>

    <p>
      Section 7&ndash;10 is clearly female-intimate
      and the language heaps up with innuendo.
      But it contains a deep and unsettling ambiguity
      which has a significant bearing on how we receive it.
      At first sight, the section is strongly suggestive of Daughter Zion
      having been wilfully unfaithful and wantonly adulterous,
      including the accusation of "sin" (v8).<?php
        Footnote('Several other linguistic resonances and wordplays across the whole chapter
          lead the surface reading in this direction.');
      ?>
      Yet in contrast with forcefully direct language in the
      <a href="https://www.britannica.com/topic/biblical-literature/The-Nevi-im-Prophets" target="_blank">Latter Prophets</a>
      (Isaiah, Jeremiah, Ezekiel, and the twelve minor prophets)
      the language of the Lamentations poet is non-specific:
      she is never here accused of "adultery" or "whoring".<?php
        Footnote('Dobbs-Allsopp (2012), p.64.');
      ?>
      And a totally different thread also emerges from behind this:
      that of victim of sexual defilement and rape,
      aligned with many other Lamentations passages
      focussed on the abuse and violation of the innocent.
      Both these contrasting threads, adulteress and rape victim,
      may be viewed as co-existing possibilities.<?php Footnote("Dobbs-Allsopp (2012), pp.63&ndash;67; Hens-Piazza (2017), pp.8&ndash;18."); ?>
      For us as readers, indeed as disciples and worshippers,
      inhabiting the poetic and disturbingly ambiguous both/and
      can be, and perhaps should be, more valuable
      than rushing into a falsely simplistic either/or.
    </p>

    <p>
      Observe, too, the frequency of the word "all",<?php Footnote('Goldingay (2022), pp.11, 41.'); ?> establishing and reinforcing the book's theme of the totality of the devastation and suffering&mdash;a totality given visual expression to the reader by the end-to-end <span class="acrostic-letter">A</span>-to-<span class="acrostic-letter">Z</span> alphabetic acrostic.
    </p>

    <hr>

    <div class="footnotes">
      <?php
        PrintFootnotes();
      ?>
    </div><!-- "footnotes" -->

  </div><!-- content-area -->

<!-- Further notes:
v3. lodges is too temporary; need permanence
v4. wailing/grieving; needs sense of "something has been done to me"
-->

  <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/php/bodyfooter.php');
  ?>

</body>

</html>
