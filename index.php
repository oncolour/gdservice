<?php require 'includes/_page_header.php';?>

    <!-- Hero -->
    <section id="hero">
        <nav>
            <a id="logo" href="/"><img src="src/images/gdservice-logo.png" alt="GD Service Logotyp"></a>
        </nav>
        <div class="row">
            <div class="small-12 medium-offset-1 medium-10 large-offset-0 large-7 columns fadeInUp animated">
                <h1>Busstvätt &amp; Chaufförsbemanning i Stockholm.</h1>
                <h2>Håll dina bussar tvättade.</h2>
                <p>Vi erbjuder hög kvalitativ busstvätt och städservice för turistbussar i Sverige, med utgångspunkt Stockholm.</p>
                <span itemscope itemtype="http://schema.org/Offer"><a itemprop="url" class="button" href="mailto:daniel@gdservice.se?subject=Kontakt%20från%20GDservice.se"><span itemprop="description">Få din buss tvättad idag</span></a></span>
                <a class="text-center" href="#services">Vår service</a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section id="services" role="main">
        <div class="row" itemscope itemtype="http://schema.org/Service">

            <header class="small-12  medium-8 large-3 columns">
                <h1 itemprop="serviceType">Vi erbjuder högkvalitativ busstvätt och uthyrning av chaufför.</h1>
            </header>
            <article class="small-12 medium-12 large-5 columns" itemprop="description">
                <p>Vi utför större städuppdrag där vi jobbar med fordonet en dag eller två. Vi arbetar från grunden med hjälp av ångmaskiner och andra verktyg.</p>
                <p>Vi hyr ut erfarna chaufförer med behörighet C eller D för kortare och längre uppdrag inom transportsektorn. </p>
            </article>


            <aside class="small-12 medium-12 large-4 tjanster-list columns">
                <h3>Kontinuerlig service</h3>
                <div class="row">
                    <p class="small-12 large-12 columns"><i class="fa fa-bus"></i>Busstvätt, service och underhåll av turistbussar.</p>
                    <p class="small-12 large-12 columns"><i class="fa fa-user"></i>Vi tar hand om er vagnpark.</p>
                    <p class="small-12 large-12 columns"><i class="fa fa-truck"></i>Allt från invändigt städ till utvändig tvätt, service och toatömning beroende på tvätthallarnas förutsättningar.</p>
                </div>
            </aside>
        </div>
    </section>

    <!-- Banner -->
    <section role="banner">
        <div class="row">
            <div class="large-12 text-center columns">
                <h3><strong>Vi kör.</strong> Så du kan känna dig säker!</h3>
            </div>
        </div>
    </section>

    <footer>
        <div class="row">
            <div id="hcard-Daniel-Grönberg" class="vcard small-12 large-7 columns" itemscope itemtype="http://schema.org/Person">
                <a itemprop="url" class="url fn" href="http://www.gdservice.se" ><span itemprop="name">Daniel Grönberg</span></a> -
                <div class="org" itemprop="brand">GDservice</div>
                <br>
                <a class="email" href="mailto:daniel@gdservice.se"><i class="fa fa-envelope"></i><span itemprop="email">Daniel@gdservice.se</span></a>
                <div class="tel">
                    <a href="tel:+46733451144"><i class="fa fa-phone"></i><span itemprop="telephone">073-345 11 44</span></a></div>
                <div class="adr">
                    <span class="locality" itemprop="address"><i class="fa fa-map-marker"></i>Stockholm</span>

                </div>


            </div>

            <p class="small-12 large-5 columns">© <span itemscope itemtype="https://schema.org/Property" itemprop="copyrightYear">2016</span> Copyright GDservice. Designad av <a href="http://oncolour.se" itemprop="url" target="_blank">Oncolour</a>.</p>
        </div>
    </footer>
    <?php require 'includes/_page_footer.php';?>
