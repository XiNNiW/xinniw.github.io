<?php
$title = "projects";
$layout = "default";
$content = function($site, $page){
?>
<header class="post-header">
<h1 class="post-title"><?php echo $page->title ?></h1>
</header>
    <hr>
    <section class='section--project'>
        <h2 class="h3--project-title">
            <span class="span--project-title">> telegraph: chaotic resonance synthesizer</span>
            <a class="link--project-primary" href="https://github.com/XiNNiW/telegraph">project source code</a>
        </h2>

        <img class="img--project" src="/assets/images/telegraph.png" loading = "lazy"/>
        <p class="p--project-description">
            Telegraph is an open-source, cross-platform VST synthesizer plugin that utilizes non-linear filters to create chaotic, unpredictable timbres.
            Telegraph makes ringing oscillations that hiss, warble, and stutter. It can make beautiful distorted tones that sound a bit like badly treated cassette tape. It is also capable of wild, out of control noise.
            The plugin uses <a href="https://github.com/XiNNiW/algae">algae</a> (my own custom DSP framework) for sound generation.
            Future versions will target progressively older computers in an effort to create novel software instruments that do not promote planned or percieved obsolecense. This will be an exploration of Brian Crabtree's concept of "past-proofing".
            While the current version uses JUCE, the internals of the project are already preparing to abandon JUCE in favor of a UI solution that will be able to run on a 2007 machine just as well as on a 2023 machine.
    </section>
    <hr>
    <section class='section--project'>
        <h2 class="h3--project-title">
            <span class="span--project-title">> escanaba euclidean</span>
            <a class="link--project-primary" href="https://github.com/NorthCoastModularCollective/EuclideanTrigger">project source code</a>
        </h2>
        <img class="img--project" src="/assets/images/escanaba-euclidean.jpg"/>
        <p class="section--project-description">
            The Escanaba Euclidean is a eurorack clock and rhythm manipulation module designed with North Coast Modular Collective.
            The Escanaba Euclidean module has 3 alternate firmware modes:
            <h4>Escanaba Euclidean Firmware</h4>

            The Eucliean firmware generates euclidean rhythms synchronized to an external eurorack clock source. If no clock source is available it will self clock. Its 3 controls are as follows:
            <ul>
                <li>Number of hits</li>
                <li>Length of pattern in beats</li>
                <li>Pattern rotation. When in self clocking mode, the rotation control becomes a tempo control.</li>
            </ul>


            <h4>Calumet Clock Firmware</h4>

            The Calument Clock firmware turns the module into a eurorack clock source. Its 3 controls are as follows:
            <ul>
                <li>Swing control</li>
                <li>Clock Division/Multiplication</li>
                <li>Tempo</li>
            </ul>
            <h4>Burst Generator</h4>

            The Burst Generator firmware allows the module to respond to incoming trigger signals by repeating them in a variety of ways. This allows the creation of "bouncing ball" rhythms, ratchets, and other rhythmic tricks. Its controls are as follows:
            <ul>
                <li>Number of repeats</li>
                <li>Initial repeat speed</li>
                <li>A "gravity" control that controls whether the repeats accelerate or decelerate in speed.</li>
            </ul>
        </p>
    </section>
    <hr>
    <section class='section--project'>
        <h2 class="h3--project-title">
            <span class="span--project-title">> chord palette</span>
            <a class="link--project-primary" href="https://github.com/XiNNiW/harmony-tools">project source code</a>
        </h2>
        <img class="img--project" src="/assets/images/chord-palette.png" loading = "lazy"/>
        <p class="p--project-description">
            Chord Palette is a compositional assistant. Given a chord and a scale, the program lists the chords that can be made using at least one note from the chord and several notes from the scale.
            This constraint is inspired by Arvo Part's tintintabulation technique where a triad is used as a kind of harmonic anchor for a composition.
            This tools takes a more vertical approach and can be used as a starting point for generating tintintabulation inspired chord progressions.
        </p>
    </section>
    <hr>
    <section class='section--project'>
        <h2 class="h3--project-title">
            <span class="span--project-title">> pollard</span>
            <a class="link--project-primary" href="https://github.com/XiNNiW/pollard">project source code</a>
        </h2>
        <img class="img--project" src="/assets/images/pollard.png" loading = "lazy"/>
        <p class="project-description">
            Pollard is a browser based cutup poetry assistant. The user specifies a corpus of text and a syllable pattern.
            The system then generates cutup poetry based on the corpus that fits this syllable pattern. The cutups are arranged using a 1st order markov chain with weights set from the original corpus. It is named after the lead singer and songwriter Bob Pollard from the band Guided by Voices.
        </p>
    </section>
<?php } ?>
