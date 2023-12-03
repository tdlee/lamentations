<!DOCTYPE html>
<?php $hver='5' ?>
<html lang="en">
<head>

  <title>ServiceMusic: Lamentations 3</title>

  <meta name="description" content="An acrostic and 'qinah' rendering of Lamentations 3">
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

    <h1>Lamentations 3</h1>

    <?php
      include('chapter-links.php');
    ?>

    <p>
      Lamentations 3 takes the acrostic nature of these poems a step further than the others.
      Not only do we have the twenty-two stanzas
      corresponding to the Hebrew alphabet,
      but each stanza itself has three lines sharing that same initial letter.
    </p>

    <p>
      In contrast to the first and second poems which are voiced by Daughter Zion
      and reflect a woman's perspective of the effects of war and siege,
      this poem is strongly masculine in perspective.
      Indeed its opening words would be best translated as "I am the man",
      from the male-specific Hebrew <em>geber</em>.<?php
        Footnote('Contrast the Hebrew <em>adam</em> which, rather like the English word "man",
          is not only the male "Adam" in the Gen.2 Adam and Eve creation story,
          but can sometimes be read in gender-inclusive manner
          as in the "mankind/<em>adam</em>&hellip;male and female [God] created them"
          in the preceding Gen.1 creation story.');
      ?>
      This recurs in verses 27, 35 and 39.<?php Footnote('Middlemas (2021), p.45.'); ?>
    </p>

    <p>
      Structurally, while the acrostic tends to produce its own grouping
      <em>within</em> acrostic boundaries,
      observe how particular thoughts may have their own
      counter-grouping cutting <em>across</em> these boundaries.
      An early, clear example is at 12&ndash;13 where the bow-and-arrow
      crosses the D/E acrostic boundary.
      This "enjambment" of ideas and images across the alphabetic boundaries
      is a counterweight to the formal structuring of the acrostic,
      and this keeps the poem moving forwards.<?php Footnote('Berlin (2004), p.85.'); ?>
      See also 3&ndash;4, 15&ndash;16, 42&ndash;44, 45&ndash;47 and 48&ndash;51.
      A similar change of thought happens between 58 and 59 within the "W" stanza.
    </p>

    <p>
      And it is <em>within</em> a single verse, at 42,
      that perhaps the most abrupt change of direction happens.
      Just when the poet is on the brink of regaining his confidence,
      the vision of fragile hope is shattered and evaporates:
      "<em>But you did not forgive</em>".
      Like a thunderbolt from a clear blue sky,
      scything through the verse
      and cutting apart the established Deuteronomic pattern of "we repent; God will forgive":
      "<em>But you did not forgive</em>".<?php
        Footnote('Respectively: Dobbs-Allsopp (1997), p.48; Hens-Piazza (2017), p.52.');
      ?>
      This may be the most disturbing idea in the chapter, and in the entire book.<?php
        Footnote('Berlin (2004), p.96.');
      ?>
    </p>

    <p>
      Like the earlier two poems, this may also be seen as being in two primary "voices":
      an individual <em>geber</em> (1&ndash;24 and 40&ndash;66) and a narrator (25&ndash;39).<?php Footnote('Goldingay (2022), p.123. But Hens-Piazza (2017), p.39 sees just one voice throughout.'); ?>
      Or, using a slightly different break-point, 22&ndash;39 may be viewed as a "Wisdom" section, reflecting on the nature of God.<?php Footnote('Berlin (2004), p.92.'); ?>
      That said, it might be noticed that the voice in 40&ndash;47 is in plural, communal form.<?php
        Footnote('Goldingay (2022), p.150; Dobbs-Allsopp (1997), p.41.');
      ?>
    </p>

    <p>
      There are many,
      especially in my own tradition,
      the protestant regions of the western Christian faith,
      who isolate the hopeful passage of 3:22&ndash;39
      from the stark images of the rest of the poems.
      But it seems useful, verging on essential,
      to recognise that this
      "grand statement of hope stands at the centre of the work as a whole
      <em>but not as the focal point</em> [emphasis mine]
      because it exists in tension
      with the portraits of human suffering&hellip;in
      the more negative images of the material."<?php Footnote('Middlemas (2004), p.94.'); ?>
    </p>

    <p>
      As if to support this,
      "there are a number of places in 3:25&ndash;39
      where the [Hebrew] syntax is convoluted and even problematic.&hellip;
      One effect&hellip;is
      to disrupt&hellip;the ease and forthrightness
      of the poetry's meaning at this point,
      to slow down the reading process
      and to require our closer attention.
      Dissonance thus enters the poetry's message"<?php
        Footnote('Dobbs-Allsopp (2012), pp.120&ndash;121.');
      ?>
      at precisely the solitary point where hope is expressed.
      The syntax of this new version attempts to reflect this.
      Similarly, the intensely ordered form of the triple acrostic in the man's outward speech
      is strikingly at odds with the ambiguity riddling his interior response.<?php
        Footnote('Hens-Piazza (2017), p.40.');
      ?>
    </p>

    <p>
      Several commentators see in the first few verses a sort of "anti-psalm"
      to the well-known Psalm&nbsp;23, "The <span class="yhwh">Lord</span> is my shepherd".<?php
        Footnote('Van Hecke (2002); Berlin (2004), p.86 n.4; Hens-Piazza (2017), p.41.');
      ?>
      <span class="noprint">
        (Hover the mouse over verses 1&ndash;3 to see the text of the psalm.)
      </span>
    </p>

    <div class="widthclear"></div>

    <div class="panel">
      <div class="poem poem__hebverse poem--acrostic draft">

        <div class="poem__verse">
          <div class="poem__verseref">1&ndash;3</div>
          <div class="poem__versetext">
<div title="Contrast 1-6 with Psalm 23:

  The Lord is my shepherd;
    there is nothing I lack.

  In green pastures he makes me lie down;
    to still waters he leads me;
    he restores my soul.

  He guides me along right paths
    for the sake of his name.

  Even though I walk through the valley of the shadow of death,
    I will fear no evil, for you are with me;
    your rod and your staff comfort me.

  You set a table before me
    in front of my enemies;
  You anoint my head with oil;
    my cup overflows.

  Indeed, goodness and mercy will pursue me
    all the days of my life;
  I will dwell in the house of the Lord
    for endless days."
>
            <?php
              $fn='Translation compromise.  Ideally this would start "I am the man" but the acrostic constraint doesn\'t allow this.';
              $fn2='Each of these three verses is headed by a first person pronoun, thus stressing the first person nature of this discourse. Berlin (2004), p.88.';
            ?>
            <p>
              Agonies: I am the man<?php Footnote($fn); ?> seared<br><!-- man/geber: vv 1,27,35,39 --><!-- quoted in "staging" -->
                by the rod of his wrath;
            </p>
            <p>
              Away&mdash;me he drove, force-marched<br>
                in darkness, no light;
            </p>
            <p>
              Against me, he turns his hand<br><!-- 3:3, 5:2: common verb "turn" -->
                from day-dawn to dusk;<?php Footnote($fn2); ?>
            </p>
</div><!-- Psalm 23 mouse-hover -->
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">4&ndash;6</div>
          <div class="poem__versetext">
            <p>
              Breaking my bones, he has wasted<br>
                my flesh and my skin.
            </p>
            <p>
              Besieged by him; he caged me<br>
                by bitterness, hardship;
            </p>
            <p>
              Bound by him in darkness<br>
                to dwell as the ever-dead.<!-- "ever-dead" preferable to "long-dead"; Berlin,p90; Goldingay,p130 -->
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">7&ndash;9</div>
          <div class="poem__versetext">
            <p>
              Confining, inescapably walled,<br><!-- 7 and 9 start with the same verb -->
                he chained me, he weighted me;<!-- double "he" in verse, as per most translations -->
            </p>
            <p>
              Cry though I into the void,<br>
                he blanks out my prayer.
            </p>
            <p>
              Confining my walkway with hewn stone,<br><!-- see 7 -->
                he twisted my paths;
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">10&ndash;12</div>
          <div class="poem__versetext">
            <p>
              Dangerous as an ambushing bear,<br>
                as a prey-stalking lion,
            </p>
            <p>
              Dragging from my pathway he ripped me<br>
                and desolate made me.
            </p>
            <p>
              Drawing his bow, he propped me:<br>
                for his arrows a target;<!-- enjambment to next -->
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">13&ndash;15</div>
          <div class="poem__versetext">
            <p>
              Eviscerated he my innards<br>
                with the shafts of his quiver.<?php
                  Footnote('12&ndash;13: see also Ps.38:3 "Your arrows have sunk deep in me; your hand has come down upon me." (NABRE)');
              ?>
            </p>
            <p>
              Excoriated, to my kinsfolk a laughing-stock,<br>
                their taunt-tune the day long.
            </p>
            <p>
              Engorging me, force-feeding bitterness<br>
                he sated me with gall;<!-- vv.15,19: bitter/gall word-pair --><!-- enjambment to next -->
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">16&ndash;18</div>
          <div class="poem__versetext">
            <p>
              <!-- couplet quoted in chapter intro -->
              Fracturing my teeth on gravel,<br>
                he ground me in dust.
            </p>
            <p>
              Far any peace from my spirit,<br><!-- vv.17,24: same "spirit" -->
                I forgot what is good;
            </p>
            <?php
              $fn1='The original carries a double meaning of not only "hope <em>in</em> the <span class="yhwh">Lord</span> has perished"  but also "hope <em>because of</em> the <span class="yhwh">Lord</span> has perished". See also Dobbs-Allsopp (2012), p.114.';
            ?>
            <p>
              Fled, perished dregs of honour and<br><!-- "perished" better than previous "gone": Dobbs-Allsopp (2012), p.114 -->
                vestigial hope from the <span class="yhwh">Lord</span>.<?php Footnote($fn1); ?>
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">19&ndash;21</div>
          <div class="poem__versetext">
            <?php
              $fn1='The pairing "gall" and "bitterness" echoes from v.15.';
              $fn2='In the Hebrew text both 19 and 20 start with an emphatic verb "remember". In 20, this is doubled, albeit in different conjugations.  So "<sup>19</sup>Remember&hellip; <sup>20</sup>Remember, remember&hellip;". Our English acrostic would require a synonymous \'G\' verb.  No such verb seems apparent.  To reflect at least some representation of this structure and emphasis, we position the verb at the verse-ends.';
            ?>
            <p>
              Gall and bitterness<?php Footnote($fn1); ?> are my affliction<br><!-- vv.15,19: bitter/gall word-pair -->
                and hollowness&mdash;such remembering;
            </p>
            <p>
              Grief downcasts my soul&mdash;<br>
                such recollecting; such remembering.<?php Footnote($fn2); ?>
            </p>
            <p>
              Glimmering with this to heart<br>
                therefore I will hope:<!-- 21,24, "therefore/I/hope" similarities (24 adds "in him") -->
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="content-area--left-indent">

          <div class="poem__verse">
            <div class="poem__verseref">22&ndash;24</div>
            <div class="poem__versetext">
              <?php
                $fn1='The Hebrew three-verse acrostic stanza 19&ndash;21 ends with "therefore I will hope" and 22&ndash;24 with "therefore I will hope in him". Indeed this similarity possibly led to the accidental omission (<i>homoioteleuton</i>) of the 22&ndash;24 stanza in the Septuagint/LXX by its translators. Provan (2016), p.93; Goldingay (2022), p.137.';
                $fn2='This section of first person narrative concludes with three references to the self, before the narrative switches to a third person perspective.';
              ?>
              <p>
                How constant the <span class="yhwh">Lord</span>'s loyalties;<br>
                  his compassion is never drained;
              </p>
              <p>
                His mercies renew each day-dawning;<br>
                  how great is your faithfulness.
              </p>
              <p>
                Hope I therefore in him;<?php Footnote($fn1); ?> my spirit says<br><!-- vv.17,24: same "spirit" --><!-- 21,24, "therefore/I/hope" similarities (24 adds "in him") -->
                  "My portion is the <span class="yhwh">Lord</span>".<?php Footnote($fn2); ?>
              </p>
            </div><!-- poem__versetext -->
          </div><!-- poem__verse -->

          <br>
          <div class="poem__verse">
            <div class="poem__verseref">25&ndash;27</div>
            <div class="poem__versetext">
              <p>
                <?php
                  $fn='In this \'I\' stanza, each line shares an opening Hebrew word meaning "good".';
                ?>
                Irreproachable<?php Footnote($fn); ?> is the <span class="yhwh">Lord</span> to his seekers,<br>
                  to the one who quests for him;<!-- many translations opt for first half-verse plural; second half-verse singular -->
              </p>
              <p>
                Irreproachable: our hoping in quietness<br>
                  for the <span class="yhwh">Lord</span>'s deliverance;
              </p>
              <p>
                Irreproachable: a man's bearing<br><!-- man/geber: vv 1,27,35,39 -->
                  the yoke while in youth.
              </p>
            </div><!-- poem__versetext -->
          </div><!-- poem__verse -->

          <br>
          <div class="poem__verse">
            <div class="poem__verseref">28&ndash;30</div>
            <div class="poem__versetext">
              <p>
                <?php
                  $fn1='"Sit" is the same verb as 1:1&mdash;"Alone she sits". Goldingay (2022), p.143.';
                  $fn2='The three lines of this stanza all begin with verbs; lines two and three share the same one that can mean put, give or offer.';
                ?>
                <!-- 1:1, 3:28, 5:19: quoted in new "staging" -->
                <!-- couplet quoted in chapter intro -->
                Lonesome let him sit<?php Footnote($fn1); ?> and in silence<?php Footnote($fn2); ?><br><!-- "sit": same verb at 1:1, 3:28 and 5:19 (and elsewhere) -->
                  when it's laid so upon him.
              </p>
              <p>
                <!-- couplet quoted in chapter intro -->
                Lend he his mouth to the dust&mdash;<br>
                  perhaps yet may be hope.
              </p>
              <p>
                <!-- couplet quoted in chapter intro -->
                Lend he his cheek to the assailant;<br>
                  take his fill of disgrace.
              </p>
            </div><!-- poem__versetext -->
          </div><!-- poem__verse -->

          <br>
          <div class="poem__verse">
            <div class="poem__verseref">31&ndash;33</div>
            <div class="poem__versetext">
              <p>
                <?php
                  $fn='As with the "I" stanza, the lines in this "M" stanza should all start with the same word, in this case a small, simple word to mean "for&hellip;" or "because&hellip;".  Unfortunately this is a challenge too far. Had this stanza been "N" rather than "M", "now" would have been a possibility.  But that would then have required a subsequent stanza of three "Q" or "X" words.';
                ?>
                Mankind's desertion by our Lord<?php Footnote($fn); ?><br>
                  lasts not forever;
              </p>
              <p>
                Mercy and kindness will follow<br>
                  his sorrow-borne strike;<br>
              </p>
              <p>
                Mean heart guides not his affliction<br>
                  of humanity's children.
              </p>
            </div><!-- poem__versetext -->
          </div><!-- poem__verse -->

          <br>
          <div class="poem__verse">
            <div class="poem__verseref">34&ndash;36</div>
            <div class="poem__versetext">
              <p>
                Neutering, crushing underfoot<br>
                  all prisoners of earth?
              </p>
              <p>
                Nay-saying, denying this man's rights<br><!-- man/geber: vv 1,27,35,39 -->
                  before the Most High?<!-- vv35,38: "Most High" -->
              </p>
              <p>
                Negation of our cry for justice&mdash;<br>
                  does our Lord not look?<!-- vv36,37 "Lord" not "LORD" --><!-- "look" as in "look"/"notice" -->
              </p>
            </div><!-- poem__versetext -->
          </div><!-- poem__verse -->

          <br>
          <div class="poem__verse">
            <div class="poem__verseref">37&ndash;39</div>
            <div class="poem__versetext">
              <p>
                Ordering futures? Who can make so<br>
                  should our Lord not decree?<!-- vv36,37 "Lord" not "LORD" -->
              </p>
              <p>
                Out of the Most High's mouth, come not<br><!-- vv35,38: "Most High" -->
                  both disaster and good?
              </p>
              <p>
                Of what shall one living complain;<br><!-- man/geber: vv 1,27,35,39 -->
                  this man for his sins?<?php Footnote('The first half-verse has Hebrew <em>adam</em>, the second has <em>geber</em>. This contrast is preserved here using "one" and "man".'); ?>
              </p>
            </div><!-- poem__versetext -->
          </div><!-- poem__verse -->

        </div><!-- "left-indent" -->

        <br>
        <div class="poem__verse">

          <div class="poem__verseref">40&ndash;42</div>
          <div class="poem__versetext">
            <p>
              Plumb we our ways, examine them,<br>
                and turn back to the <span class="yhwh">Lord</span>;
            </p>
            <p>
              Plead we, hearts and hands raised,<br>
                to God on high:
            </p>
            <p>
              Perversely we have rebelled.<br>
                &mdash;But you did not forgive;<!-- quoted in chapter intro --><!-- semantic enjambment to next -->
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">43&ndash;45</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn='The Hebrew verb here often refers to the covering of the Ark of the Covenant: the immanent presence of God. It also alludes to the Exdous "pillar of cloud" and to Moses on Mt.&nbsp;Sinai. While those had beneficially signified the presence of God with his people, here God has erected a barrier against his own people. "Nowhere in Lamentations, and perhaps the entire Bible, is God\'s refusal to be present more strongly expressed." Berlin (2004) p.96.';
              ?>
              Re-cloaked<?php Footnote($fn); ?> in anger, you pursued us;<br><!-- vv.43,44: same verb -->
                you slew us pitilessly;<!-- "pitiless": 2:2, 2:17, 2:21, 3.43 -->
            </p>
            <p>
              Re-cloaked in enveloping cloud:<br>
                impervious to prayer.
            </p>
            <p>
              <?php
                $fn='The verb "rejected" can be seen as anticipating its recurrence at 5:22, the devasting final verse of the entire book. Goldingay (2022), p.153.';
              ?>
              Rejected<?php Footnote($fn); ?> and filth you made us<br>
                in the midst of the peoples;<!-- enjambment to next -->
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">46&ndash;48</div>
          <div class="poem__versetext">
            <p>
              Snapping and gaping their mouths at us<br><!-- "gape their mouths": 2:16 and 3:46 -->
                are all our enemies;
            </p>
            <p>
              <?php
                $fn='Verses 47&ndash;48 involve alliteration and the repetition of "ravaging".';
              ?>
              Suffering, ours: terror and traps,<br><!-- alliteration -->
                ravaging and ransack.<?php Footnote($fn); ?><!-- alliteration; see also next verse -->
            </p>
            <p>
              <?php
                $fn='The "Daughter People" half-line is the same at 2:11, 3:48 and 4:10.';
              ?>
              Stream tears from my eyes<br>
                at my Daughter People's ravaging;<?php Footnote($fn); ?><!-- this half-line is common to 2:11, 3:48 and 4:10 --><!-- enjambment to next --><!-- quoted in "staging" --><!-- quoted in "reading" -->
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">49&ndash;51</div>
          <div class="poem__versetext">
            <p>
              Tears stream: unbidden,<br><!-- 49 and 51 both begin "my eye" (Hebrew) -->
                no respite, unending,
            </p>
            <p>
              Till out looks the <span class="yhwh">Lord</span><br>
                and sees from the heavens.
            </p>
            <p>
              Tears stream, tormenting my soul<br><!-- see 49 --><!-- 2:20, 3:51: same strong verb -->
                for all the daughters of my city.<!-- quoted in "staging" -->
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">52&ndash;54</div>
          <div class="poem__versetext">
            <p>
              Unreasoning, my enemies ensnared me,<br><!-- "ensnare": 3:52; 4:18 --><!-- quoted in "staging" -->
                ensnaring as a bird;<!-- double use of "ensnare" -->
            </p>
            <p>
              Undone&mdash;my life in a pit<br>
                as rocks they cast on me;
            </p>
            <p>
              Under waters engulfing my head;<br>
                I thought, "I am lost".<?php
                  Footnote('53&ndash;54: see also Ps.88:7&ndash;8 "You plunge me into the bottom of the pit, into the darkness of the abyss. Your wrath lies heavy upon me; all your waves crash over me." (NABRE)');
              ?>
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">55&ndash;57</div>
          <div class="poem__versetext">
            <?php
              $fn1='In 55&ndash;61 the verb tenses, which work differently between Biblical Hebrew and English, can be interpreted as past or present or even a mixture. We follow Dobbs-Allsopp (2012), pp.126&ndash;127, Berlin (2004), pp.81&ndash;83 and Provan (2016), pp.105&ndash;108 in adopting the present tense. For the past tense, see Goldingay (2022), pp.156ff.';
            ?>
            <p>
              Voice<?php Footnote($fn1); ?> I your name, <span class="yhwh">Lord</span>,<br>
                from bottom-most pit;
            </p>
            <p>
              Validate my plea; close not<br>
                your ears to my cry.
            </p>
            <p>
              Venturing close when I call you,<br>
                say: "do not fear".
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">58&ndash;60</div>
          <div class="poem__versetext">
            <p>
              When you plead, my Lord, my cause,<br>
                you redeem my life.
            </p>
            <p>
              Witness, <span class="yhwh">Lord</span>, how I am wronged;<br><!-- 59/60: same opening word -->
                do justice for me;
            </p>
            <p>
              Witness all their vindictiveness,<br><!-- 59/60: same opening word -->
                their scheming against me.<!-- "against/at me": 60/61/62 -->
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">61&ndash;63</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn1='A near-direct repetition from the previous verse. Goldingay (2022), p.159 indicates that the slight change in the second occurrence makes it sharper. The choice here of "against me" and "at me" attempts to reflect this. This "against/at me" also recurs in the following verse.';
                $fn2='Just as this poem opens with "I am", so also it (almost) closes.';
              ?>
              You hear, <span class="yhwh">Lord</span>, their insults,<br>
                their scheming at me:<?php Footnote($fn1); ?><!-- "against/at me": 60/61/62 -->
            </p>
            <p>
              Yonder, foes prattle against me<br><!-- "against/at me": 60/61/62 -->
                from day-dawn to dusk;
            </p>
            <p>
              You notice? Whether seated or rising,<br><!-- "notice" from the look/notice thread -->
                I am their snide-song.<?php Footnote($fn2); ?><!-- quoted in "staging" -->
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">64&ndash;66</div>
          <div class="poem__versetext">
            <p>
              Zilch make their rewards, O <span class="yhwh">Lord</span>,<br>
                for the works at their hands;
            </p>
            <p>
              Ziplock their cold hearts:<br>
                your curse upon them;
            </p>
            <p>
              Zealously hunt them, destroy them<br>
                under the heavens of the <span class="yhwh">Lord</span>.
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

      </div><!-- "poem" -->
      <hr>
      <div class="footnotes">
        <?php
          PrintFootnotes();
        ?>
      </div><!-- "footnotes" -->

      <div class="panel__footer">
        Copyright &copy; 2020&ndash;2023 David&nbsp;Lee
      </div><!-- "panel__footer" -->

    </div><!-- "panel" -->

  </div><!-- content-area -->

  <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/php/bodyfooter.php');
  ?>

</body>

</html>
