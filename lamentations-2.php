<!DOCTYPE html>
<?php $hver='5' ?>
<html lang="en">
<head>

  <title>ServiceMusic: Lamentations 2</title>

  <meta name="description" content="An acrostic and 'qinah' rendering of Lamentations 2">
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

    <h1>Lamentations 2</h1>

    <?php
      include('chapter-links.php');
    ?>

    <p>
      This second poem leaves no doubt of the horrifying prospect that God himself is the antagonist: that he has turned against his own Daughter Zion.
      She in consequence considers the horrifying prospect of cannibalising her own infants (2:20, repeated at 4:10).
      Bookended, "A&nbsp;to&nbsp;Z", by "the day of the <span class="yhwh">Lord</span>'s anger",
      this is the nightmare-turned-reality incarnation of the prophet's warning,
        <a href="https://www.biblegateway.com/passage/?search=amos+5%3A18-20&version=NRSVUE" target="_blank">Amos&nbsp;5:18&ndash;20</a>;
      it is the polar opposite of the psalmist's praise,
        <a href="https://www.biblegateway.com/passage/?search=psalm+118%3A24-29&version=NRSVUE" target="_blank">Ps.&nbsp;118:24&ndash;27</a>.
      The poem has some striking similarities with the psalmist's lament,
        <a href="https://www.biblegateway.com/passage/?search=psalm+89%3A38-45&version=NRSVUE" target="_blank">Ps.&nbsp;89:38&ndash;45</a>.<?php
          Footnote('For these references see Goldingay (2022): p.91 (Amos); p.111 (Ps.118);  p.89 (Ps.89).');
        ?>
      Observe the "devour" thread in vv.2, 5 (twice) 8 and 16.<?php Footnote('Provan (2016), p.57.'); ?>
      Observe, too, the "pitiless"/"without pity" thread in vv.2, 17 and 21 (also 3:43).<?php Footnote('Dobbs-Allsopp (1997), p.49.'); ?>
    </p>

    <p>
      In the Hebrew text, over 80% of this poem's verses,
      1&ndash;11 and 15&ndash;21, start with verbs.<?php
        Footnote('This includes even the very opening itself if, as the rhythm suggests, the opening "Alas!" is treated as an outlying anacrusis.')
      ?>
      And additionally, within those verses,
      many of their internal couplets are similarly verb-fronted.
      In English this can be seen strikingly in
      <a href="https://www.biblegateway.com/passage/?search=lamentations+2&version=YLT" target="_blank">Young's Literal Translation</a>
      from the late nineteenth century.<?php
        Footnote('Young\'s Literal Translation is able to do this reasonably accurately because, unlike this version, it is not constrained by attempting either <i>qinah</i> or alphabetic acrostics. That said, of course, this poetry-led version attempts to retain this linguistic feature where possible.');
      ?>
    </p>

    <p>
      This bombarding effect is counter
      to the English-language "subject then verb" convention.
      That sustained, pounding drive is conveyed here
      by using a verb-fronted, list-like structure for the first few verses,
      with the subject being relegated to less prominent placement.
      For example the first three verses may be read as:
    </p>
    <div class="panel panel--width-18em">
      <div class="poem poem__hebverse">
        <p>
          <span class="acrostic-letter">A</span>las! Angered, the Lord:<br>
            &mdash;beclouded&hellip;<br>
            &mdash;flung down&hellip;<br>
            &mdash;put out of mind&hellip;<br>
            &mdash;<span class="acrostic-letter">b</span>litzed to the ground&hellip;<br>
            &mdash;razed in fury&hellip;<br>
        </p>
        <p>
          The Lord has:<br>
            &mdash;devoured&hellip;<br>
            &mdash;<span class="acrostic-letter">c</span>ut off&hellip;<br>
            &mdash;withdrawn&hellip;<br>
            &mdash;blazed&hellip;<br>
        </p>
      </div><!-- "poem" -->
    </div><!-- "panel" -->

    <p>
      The first poem had been in two "voices", approximately 50&ndash;50:
      a witness-reporter and Daughter Zion herself.
      This second poem is mostly voiced by the reporter,
      until at 18&ndash;19 the reporter can be seen to implore the city
      to voice her complaint, which she accordingly does to close the poem.
      Yet in the midst of their initially objective reportage,
      the reporter breaks down and speaks subjectively of their own personal response
      in a soliloquy, 11&ndash;17, that interrrupts their graphic portrayal of the violence
      and seeks, however vainly, to comfort Jerusalem.<?php Footnote('Middlemas (2021), p.94'); ?>
    </p>

    <div class="widthclear"></div>

    <div class="panel">
      <div class="poem poem__hebverse poem--acrostic draft">

        <div class="poem__verse">
          <div class="poem__verseref">1</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn='See footnotes on 1:1.';
                $fn2='Footstool: a metaphorical reference to Jerusalem, its temple or the ark within the temple. See Goldingay (2022), p.92; Provan (2016), pp.59&ndash;60.';
              ?>
              Alas!<?php Footnote($fn); ?><br>
              Angered, the Lord beclouded<br>
              &emsp;Daughter Zion;<br>
              flung down from the heavens to earth<br>
              &emsp;the honour of Israel;<br>
              put out of mind his footstool<?php Footnote($fn2); ?><br>
              &emsp;in the day of his anger;
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">2</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn='For acrostic purposes, the first and last couplets have been interchanged.';
              ?>
              Blitzed to the ground in desecration<?php Footnote($fn); ?><br>
              &emsp;a kingdom and its princes;<br>
              razed in fury the defences<br>
              &emsp;of Daughter Judah.<br>
              The Lord has devoured without pity<br><!-- "devour" thread --><!-- "pitiless": 2:2, 2:17, 2:21, 3.43 -->
              &emsp;all the dwellings of Jacob;
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">3</div>
          <div class="poem__versetext">
            <p>
              Cut off in his smouldering wrath<br>
              &emsp;every horn of Israel;<br>
              withdrawn his right hand<br><!-- "hand": vv. 3,4,7,8,(19) -->
              &emsp;at enemy approach;<br>
              blazed against Jacob in fire,<br>
              &emsp;consuming all around.
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">4</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn1='The Lord\'s "right hand", usually defensive of his people, was not only withdrawn in v.3 but is now turned to attack against them both here and in v.8.  See also the "enemy hands" in v.7.';
                $fn2='This overall line is shorter than the usual qinah 3&ndash;2; Goldingay (2022), p.95, note \'d\'.';
                $fn3='The city.  Contrast 6<em>a</em>, a different noun, which refers to the Temple.';
              ?>
              Drawing his bow like an enemy,<br>
              &emsp;his right hand poised,<?php Footnote($fn1); ?><br><!-- "hand": vv. 3,4,7,8,(19) -->
              like a foe, he has slain those precious<br>
              &emsp;in his eye;<?php Footnote($fn2); ?><br>
              on Daughter Zion's tent<?php Footnote($fn3); ?> his fire-wrath<br>
              &emsp;has he outpoured.
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">5</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn='The Hebrew also has an alliterative wordplay here.';
              ?>
              Enemy! So the Lord has become,<br>
              &emsp;and devoured Israel&mdash;<br><!-- "devour" thread -->
              has devoured all of her palaces,<br><!-- "devour" thread -->
              &emsp;and laid waste her strongholds;<br>
              has multiplied for Daughter Judah<br>
              &emsp;wailing and weeping.<?php Footnote($fn); ?>
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">6</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn='The Temple, yet here referred to as something flimsy and temporary. See note on 4<em>e</em>.';
                $fn2='The "like a garden" simile has been perplexing down the centuries, with no settled understanding. In her compact 126&nbsp;page commentary on the whole book, Berlin (2004) devotes over one entire page solely to this one term, briefly laying out a wide range of possibilities. Some sort of resonance with the Garden of Eden is likely, possibly combined with a contrast to Sodom from Gen.13:10: "&hellip;like the garden of the <span class="yhwh">Lord</span>&hellip;before the <span class="yhwh">Lord</span> had destroyed Sodom and Gomorrah".';
              ?>
              Flattening his bivouac<?php Footnote($fn); ?> like a garden,<?php Footnote($fn2); ?><br>
              &emsp;he destroyed his own meeting place.<br>
              The <span class="yhwh">Lord</span> has obliterated from Zion<br>
              &emsp;his own feast-day and sabbath;<br>
              in angered rage has spurned<br>
              &emsp;both king and priest.
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">7</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn='Translation compromise. Rather than "God has&hellip; (Heb:El) this should be "The Lord has&hellip;" (Heb:Adonai). But there seems no suitable acrostic \'G\' word for this line. Switching it with the next line, "given over&hellip;", would leave too large a gap before identifying "the Lord"; and early, strong identification seems important in this verse.';
              ?>
              God<?php Footnote($fn); ?> has rejected his altar,<br>
              &emsp;disowned his shrine;<br>
              given over to enemy hands<br><!-- "hand": vv. 3,4,7,8,(19) -->
              &emsp;the walls of her strongholds.<br>
              Now <em>they</em> in the <span class="yhwh">Lord</span>'s house shout<br>
              &emsp;as on <em>our</em> feast-day.<?php
                Footnote('"God has enabled Israel\'s enemies to engage in a parody of [Israel\'s] worship in the very temple itself." Provan (2016), p.67.');
              ?>
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">8</div>
          <div class="poem__versetext">
            <p>
              Hell-bent was the <span class="yhwh">Lord</span> on destroying<br>
              &emsp;Daughter Zion's wall;<br>
              out-stretching his tape-measure; not staying<br>
              &emsp;his hand from devouring;<br><!-- "devour" thread --><!-- "hand": vv. 3,4,7,8,(19) -->
              making mourn both wall and rampart,<br>
              &emsp;which together collapse.
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">9</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn='This line may well refer to the absence of religious law (in parallel to the secular goverance of the first line).';
              ?>
              Ingested in earth sank her gates;<br>
              &emsp;he shattered her bars.<br>
              Her king and her princes are exiled;<br>
              &emsp;law is absent;<?php Footnote($fn); ?><br>
              her prophets, too, found<br>
              &emsp;no vision from the <span class="yhwh">Lord</span>.
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">10</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn='The names "Jerusalem" and "Zion" are interchanged in this verse for acrostic purposes.  A rejected alternative would have been to invert the verse (lines 1-2-3 becoming 3-2-1) but that would have lost the thematic continuity from the previous verse\'s "rulers" and "prophets" into this verse\'s "elders".';
                $fn2='From the elders, the most senior male figures, to the most junior female figures: this suggests the two extremes of the city\'s social spectrum, becoming a merism representing the entire population.  Goldingay (2022), p.103; Berlin (2004), p.71.';
              ?>
              Jerusalem-Daughter,<?php Footnote($fn); ?> your elders<br>
              &emsp;sit dumbstruck on the ground;<br>
              dust they cast on their heads<br>
              &emsp;and sackcloth they gird.<br>
              Zion's young women<?php Footnote($fn2); ?> bow<br>
              &emsp;their heads to the ground.
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

<!-- omit 'K' -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">11</div>
          <div class="poem__versetext">
            <p>
              Lamenting, my weeping eyes fail;<br>
              &emsp;my stomach churns;<br>
              at the holocaust of my Daughter People<br><!-- line recurs at 3:48 and 4:10 -->
              &emsp;my liver-bile spills,<?php Footnote('This vivid translation courtesy of Berlin (2004), p.63.'); ?><br><!-- 2:11,19: same verb, I believe -->
              as infants and children expire<br>
              &emsp;in the city streets.
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">12</div>
          <div class="poem__versetext">
            <p>
              Mothers hear them crying out loud:<br>
              &emsp;"Where is corn and wine?"<br>
              as they expire like the sword-wounded<br>
              &emsp;in the city streets;<br>
              as their lives ebb away<br>
              &emsp;in their mothers' arms.
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

<!-- omit 'N' -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">13</div>
          <div class="poem__versetext">
            <p>
              O Daughter Jerusalem: to what can I<br>
              &emsp;liken you? How advocate?<br>
              O virgin Daughter Zion:<br>
              &emsp;whose plight is like yours?<br>
              Wide as the sea breaks your wound;<br>
              &emsp;who could heal you?
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">14</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn='This striking translation courtesy of <a href="http://www.usccb.org/bible/lamentations/2" target="_blank"><abbr title="New American Bible, Revised Edition">NABRE</abbr></a>.';
              ?>
              Prophets provided you visions&mdash;<br>
              &emsp;whitewashed illusion.<?php Footnote($fn); ?><br>
              They did not lay bare your guilt<br>
              &emsp;to restore your fortunes;<br>
              they saw for you only oracles<br>
              &emsp;of illusion and deceit.
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

<!-- omit 'Q' -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">15</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn='Psalm 48:2, Psalm 50:2; Ezek.27:3.';
                $fn2='Compare Matt.27:39-40: "Those passing by reviled him, shaking their heads and saying, "You who would destroy the temple and rebuild it in three days, save yourself, if you are the Son of God, [and] come down from the cross!"';
              ?>
              Reviling with hiss and with head-toss<br>
              &emsp;at Daughter Jerusalem,<?php Footnote($fn2); ?><br>
              now those on the road passing by<br>
              &emsp;slow-clap in derision:<br><!-- "slow-clap" also in notes -->
              "Was this once 'Perfect in beauty,<br>
              &emsp;joy of all earth'?"<?php Footnote($fn); ?>
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">16</div>
          <div class="poem__versetext">
            <p>
              Snarling and gnashing their teeth,<br>
              &emsp;all your enemies<br>
              open their mouths at you, saying<br>
              &emsp;"We have devoured her!<br><!-- "devour" thread -->
              Long for this day we have waited&mdash;<br>
              &emsp;we have lived to see it!"
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">17</div>
          <div class="poem__versetext">
            <p>
              The <span class="yhwh">Lord</span> has done what he planned,<br>
              &emsp;has fulfilled his threat<br>
              decreed from days of old,<br>
              &emsp;to destroy without pity;<br><!-- "pitiless": 2:2, 2:17, 2:21, 3.43 -->
              has let the enemy over you gloat<br>
              &emsp;and exalted your foes' horn.
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">18</div>
          <div class="poem__versetext">
            <p>
              Unto the Lord let your heart cry,<br>
              &emsp;wall of Daughter Zion.<br>
              Shed tears like a torrent<br>
              &emsp;day and night;<br>
              give yourself no relief,<br>
              &emsp;your eyes no rest.
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">19</div>
          <div class="poem__versetext">
            <p>
              <?php
                $fn='This verse, like 1:7 and 4:15, has an extra line in the Hebrew, considered by some commentators to be a marginal gloss.  See also Provan (2016), p.77.';
              ?>
              Vociferous! Cry anguished at night,<br>
              &emsp;at the start of each watch.<br>
              Spill out your heart like water<br><!-- 2:11,19: same verb, I believe -->
              &emsp;in full sight of the Lord.<br>
              Lift up your hands to him<br><!-- "hand": vv. 3,4,7,8,(19) -->
              &emsp;for the lives of your babes<br>
              [who faint from famine and hunger<br>
              &emsp;at every street-corner].<?php Footnote($fn); ?>
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">20</div>
          <div class="poem__versetext">
            <p>
              Who have you thus tormented?<br>
              &emsp;Look, <span class="yhwh">Lord</span>; notice.<br><!-- verbs match 1:11 (and reversed 1:12) -->
              Must women eat their own womb's fruit,<br>
              &emsp;their nursed babes?<br>
              Should priest and prophet be slain<br>
              &emsp;in the sanctuary of the Lord?
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

<!-- omit 'X' -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">21</div>
          <div class="poem__versetext">
            <p>
              Young and old lie strewn<br>
              &emsp;on the ground in the streets;<br>
              young women and young men fallen,<br>
              &emsp;cut down by the sword.<br>
              You slew them on the day of your wrath:<br>
              &emsp;you butchered&mdash;pitilessly.<!-- "pitiless": 2:2, 2:17, 2:21, 3.43 --><?php Footnote('Intensification of "slew" to "butchered".  The latter also builds from the cannibalism of the previous verse; Berlin (2004), p.76.'); ?>
            </p>
          </div><!-- poem__versetext -->
        </div><!-- poem__verse -->

        <br>
        <div class="poem__verse">
          <div class="poem__verseref">22</div>
          <div class="poem__versetext">
            <p>
              Zoned round: the terrors you summoned<br>
              &emsp;as to a feast day;<br>
              on the day of the <span class="yhwh">Lord</span>'s anger<br>
              &emsp;none escaped or survived.<br>
              Those I had nursed and reared,<br>
              &emsp;my enemy annihilated.
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
