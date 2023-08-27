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
      from the gender-specific Hebrew "geber",
      unlike "adam" which can sometimes be read in gender-inclusive ways.
      This recurs in verses 27, 35 and 39.<?php Footnote('Middlemas (2021), p.45'); ?>
    </p>

    <p>
      Like the earlier two poems, this can also be seen as being in two primary "voices":
      an individual "geber" (1&ndash;24 and 40&ndash;66) and a narrator (25&ndash;39).<?php Footnote('Goldingay (2022), p.125'); ?>
      Or, using a slightly different break-point, 22&ndash;39 may be viewed as a "Wisdom" section, reflecting on the nature of God.<?php Footnote('Berlin (2004), p.92'); ?>
      That said, it might be noticed that the voice in 40&ndash;47 is in plural, communal form.<?php
        Footnote('Goldingay (2022), p.150');
    ?><?php
        Footnote('Dobbs-Allsopp, F.W. (1997),
          <cite>Tragedy, Tradition and Theology in the Book of Lamentations</cite>,
          Journal for the Study of the Old Testament, 22,74, 41,
          <a href="https://doi.org/10.1177/030908929702207402" target="_blank">DOI: 10.1177/030908929702207402</a>');
      ?>
    </p>

    <p>
      Some see in this chapter's first six verses a sort of "anti-psalm"
      to the well-known Psalm 23 "The <span class="yhwh">Lord</span> is my shepherd".<?php
        Footnote('Van Hecke, Pierre J.P. (2002),
          <a href="https://www.tandfonline.com/doi/abs/10.1080/09018320210000415" target="_blank">
          <cite>Lamentations 3,1-6: An anti-psalm 23</cite></a>,
          Scandinavian Journal of the Old Testament, 16:2, 264-282,
          <a href="https://doi.org/10.1080/09018320210000415" target="_blank">DOI: 10.1080/09018320210000415</a>');
      ?>
      Other commentators extend this reversal further, to v.9 or v.13.<?php
       Footnote('Berlin (2004), p.86');
      ?>
      <span class="noprint">
        (Hover the mouse over verses 1&ndash;6 to see the text of the psalm.)
      </span>
    </p>

    <div class="panel">
      <div class="poem poem__hebverse poem--acrostic draft">

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
          ?>
          <p>
            Agonies: I am the man<?php Footnote($fn); ?> seared<br><!-- man/geber: vv 1,27,35,39 -->
              by the rod of his wrath;
          </p>
          <p>
            Away he has driven, force-marched me<br>
              in darkness, no light;
          </p>
          <p>
            Against me he turns his hand<br>
              from day-dawn to dusk;
          </p>
        </div><!-- poem__versetext -->

        <br>
        <div class="poem__verseref">4&ndash;6</div>
        <div class="poem__versetext">
          <p>
            Breaking my bones, he has wasted<br>
              my flesh and my skin;
          </p>
          <p>
            Besieged by him; he caged me<br>
              by bitterness, hardship;
          </p>
          <p>
            Bound by him in darkness<br>
              to dwell as the long-dead.
          </p>
        </div><!-- poem__versetext -->
</div><!-- Psalm 23 mouse-hover -->

        <br>
        <div class="poem__verseref">7&ndash;9</div>
        <div class="poem__versetext">
          <p>
            Confined, inescapably walled,<br><!-- 7 and 9 start with the same verb -->
              he chained me and weighted me;
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

        <br>
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
              for his arrows a target;
          </p>
        </div><!-- poem__versetext -->

        <br>
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
              he sated me with gall;
          </p>
        </div><!-- poem__versetext -->

        <br>
        <div class="poem__verseref">16&ndash;18</div>
        <div class="poem__versetext">
          <p>
            Fracturing my teeth on gravel,<br>
              he ground me in dust.
          </p>
          <p>
            Far from my mind any peace,<br>
              I forgot what is good;
          </p>
          <p>
            Fled, dregs of honour; and gone<br>
              all I'd hoped in the <span class="yhwh">Lord</span>.
          </p>
        </div><!-- poem__versetext -->

        <br>
        <div class="poem__verseref">19&ndash;21</div>
        <div class="poem__versetext">
          <p>
            Gall, a bitter remembrance<br>
              of my affliction, my wandering;
          </p>
          <p>
            Grief downcasts my soul,<br>
              in its pained recollection;
          </p>
          <p>
            Glimmering, though, to heart<br>
              dawns a faint, far-off hope:
          </p>
        </div><!-- poem__versetext -->

        <br>
        <div class="content-area--left-indent">
          <div class="poem__verseref">22&ndash;24</div>
          <div class="poem__versetext">
            <p>
              Habitual, though, his compassions;<br>
                the <span class="yhwh">Lord</span>'s love never fails us;
            </p>
            <p>
              His mercies renew each day-dawning;<br>
                how great is your faithfulness.
            </p>
            <?php
              $fn='This section of first person narrative concludes with three references to the self, before the narrative switches to a third person perspective.';
            ?>
            <p>
              Hope I then in him; may I say<br>
                "My portion is the <span class="yhwh">Lord</span>".<?php Footnote($fn); ?>
            </p>
          </div><!-- poem__versetext -->

          <br>
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

          <br>
          <div class="poem__verseref">28&ndash;30</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn='"Lie" is the same verb as 1:1&mdash;"Alone she lies".';
                $fn2='The three lines of this stanza all begin with verbs; lines two and three share the same one that can mean put, give or offer.';
              ?>
              Lie he alone and in silence<?php Footnote($fn); ?><?php Footnote($fn2); ?><br><!-- "lie": same verb as 1:1 -->
                when it's laid so upon him.
            </p>
            <p>
              Lend he his mouth to the dust&mdash;<br>
                perhaps yet may be hope.
            </p>
            <p>
              Lend he his cheek to the assailant;<br>
                take his fill of disgrace.
            </p>
          </div><!-- poem__versetext -->

          <br>
          <div class="poem__verseref">31&ndash;33</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn='As with the "I" stanza, the lines in this "M" stanza should all start with the same word, in this case a small, simple word to mean "for&hellip;" or "because&hellip;".  Unfortunately this is a challenge too far. Had this stanza been "N" rather than "M", "now" would have been a possibility.  But that would then have required a subsequent stanza of three "Q" or "X" words.';
              ?>
              Mankind's desertion by the Lord<?php Footnote($fn); ?><br>
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

          <br>
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
              Negating our crying for justice?&mdash;<br>
                the Lord would not bide.<!-- vv36,37 "Lord" not "LORD" -->
            </p>
          </div><!-- poem__versetext -->

          <br>
          <div class="poem__verseref">37&ndash;39</div>
          <div class="poem__versetext">
            <p>
              Ordering futures? Who can make so<br>
                should the Lord not decree?<!-- vv36,37 "Lord" not "LORD" -->
            </p>
            <p>
              Out of the Most High's mouth, come not<br><!-- vv35,38: "Most High" -->
                both disaster and good?
            </p>
            <p>
              Of what shall one living complain;<br><!-- man/geber: vv 1,27,35,39 -->
                this man for his sins?<?php Footnote('The first half-verse has Hebrew "adam", the second has "geber". This contrast is preserved here using "one" and "man".'); ?>
            </p>
          </div><!-- poem__versetext -->

          <br>
        </div><!-- "left-indent" -->

        <div class="poem__verseref">40&ndash;42</div>
        <div class="poem__versetext">
          <p>
            Plumb we our ways, let us audit them,<br>
              that we return to the <span class="yhwh">Lord</span>;
          </p>
          <p>
            Plead we, hearts in our hands,<br>
              to God on high:
          </p>
          <p>
            Perversely we have rebelled;<br>
              you did not forgive.
          </p>
        </div><!-- poem__versetext -->

        <br>
        <div class="poem__verseref">43&ndash;45</div>
        <div class="poem__versetext">
          <p>
            <?php
              $fn='The Hebrew verb here often refers to the covering of the Ark of the Covenant: the immanent presence of God. It also alludes to the Exdous "pillar of cloud" and to Moses on Mt.&nbsp;Sinai. While those had beneficially signified the presence of God with his people, here God has erected a barrier against his own people. "Nowhere in Lamentations, and perhaps the entire Bible, is God\'s refusal to be present more strongly expressed." Berlin (2004) p.96.';
            ?>
            Re-cloaked<?php Footnote($fn); ?> in anger, you pursued us;<br><!-- vv.43,44: same verb -->
              you slew us unsparingly;
          </p>
          <p>
            Re-cloaked in enveloping cloud:<br>
              impenetrable to prayer.
          </p>
          <p>
            <?php
              $fn='The verb "rejected" can be seen as anticpating its recurrence at 5:22, the devasting final verse of the enitre book.';
            ?>
            Rejected<?php Footnote($fn); ?> and outcast you made us<br>
              in the midst of the peoples.
          </p>
        </div><!-- poem__versetext -->

        <br>
        <div class="poem__verseref">46&ndash;48</div>
        <div class="poem__versetext">
          <p>
            Snapping and gaping their mouths at us<br>
              are all our enemies;
          </p>
          <p>
            Suffering, ours: terror and traps,<br><!-- alliteration -->
              holocaust and horror;<!-- alliteration; see also next verse -->
          </p>
          <p>
            <?php
              $fn='Verses 47&ndash;48 involve alliteration and the repetition of "holocaust". Further, the final part of 48 is the same as 2:11.';
            ?>
            Stream tears from my eyes at the holocaust<br>
              of my Daughter People.<?php Footnote($fn); ?><!-- holocaust from 47; whole line from 2:11; also 4:10 -->
          </p>
        </div><!-- poem__versetext -->

        <br>
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
            Tears stream: how grieves my soul<br><!-- see 49 -->
              for the daughters of my city.
          </p>
        </div><!-- poem__versetext -->

        <br>
        <div class="poem__verseref">52&ndash;54</div>
        <div class="poem__versetext">
          <p>
            Unreasoning, my enemies ensnare me,<br><!-- "ensnare": 3:52; 4:18 -->
              ensnaring as a bird;
          </p>
          <p>
            Undone&mdash;my life in a pit<br>
              as rocks they cast on me;<!-- double use of "ensnare" -->
          </p>
          <p>
            Under waters engulfing my head;<br>
              I thought, "I am lost".<?php
                Footnote('53&ndash;54: see also Ps.88:7&ndash;8 "You plunge me into the bottom of the pit, into the darkness of the abyss. Your wrath lies heavy upon me; all your waves crash over me." (NABRE)');
            ?>
          </p>
        </div><!-- poem__versetext -->

        <br>
        <div class="poem__verseref">55&ndash;57</div>
        <div class="poem__versetext">
          <p>
            Voiced I your name, <span class="yhwh">Lord</span>,<br>
              from bottom-most pit;
          </p>
          <p>
            Validate my plea; close not<br>
              your ears to my cry.
          </p>
          <p>
            Venturing close when I called you,<br>
              you spoke: "do not fear".
          </p>
        </div><!-- poem__versetext -->

        <br>
        <div class="poem__verseref">58&ndash;60</div>
        <div class="poem__versetext">
          <p>
            When you pleaded, O Lord, my cause,<br>
              you redeemed my life.
          </p>
          <p>
            Witness, O <span class="yhwh">Lord</span>, how I am wronged;<br><!-- 59/60: same opening word -->
              do justice for me.
          </p>
          <p>
            Witness all their vindictiveness,<br><!-- 59/60: same opening word -->
              their scheming against me.
          </p>
        </div><!-- poem__versetext -->

        <br>
        <div class="poem__verseref">61&ndash;63</div>
        <div class="poem__versetext">
          <p>
            <?php
              $fn='A near-direct repetition from the previous verse. Goldingay (2022) indicates that the slight change in the second occurrence makes it sharper. The choice here of "against me" and "at me" attempts to reflect this.';
            ?>
            You have heard, <span class="yhwh">Lord</span>, their insults,<br>
              their scheming at me;<?php Footnote($fn); ?>
          </p>
          <p>
            Yonder, they mutter and prattle<br>
              from day-dawn to dusk;
          </p>
          <p>
            You see them? Whether seated or rising,<br>
              they mock me in songs.
          </p>
        </div><!-- poem__versetext -->

        <br>
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
