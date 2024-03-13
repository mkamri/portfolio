<?php include($_SERVER["DOCUMENT_ROOT"].'/header.html'); ?>
<main>
    <section id="intro">
        <h1 class="text-cyan">mika's ui components</h1>
        <p>Welcome to my collection of UI components that I have developed. These components are dependency-free and you are welcome to use and edit them under the <a href="https://opensource.org/license/mit/" target="_blank">MIT license</a>.</p>
    </section>
    <section id="input-increment">
        <h1>input increment</h1>
        <p>This number field uses plus/minus buttons and enforces min/max values (optional).</p>
        <hr>
        <h2>demo // <a href="https://codepen.io/mkamri/pen/abMVbGq" target="_blank">View Codepen</a>
        </h2>
        <?php include('components/input-increment.php') ?>
    </section>
    <section id="input-dropdown">
        <h1>input dropdown</h1>
        <p>Override the styling on all browsers to create a clean, modern dropdown element.</p>
        <hr>
        <h2>demo // <a href="https://codepen.io/mkamri/pen/wvZWZKP" target="_blank">View Codepen</a>
        </h2>
        <?php include('components/input-dropdown.php') ?>
    </section>
</main>
<?php include($_SERVER["DOCUMENT_ROOT"].'/footer.html'); ?>