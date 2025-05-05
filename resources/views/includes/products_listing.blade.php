<style>
    .page-center {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .solutions-container {
        max-width: 700px;
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .solution {
        background: #fff;
        padding: 20px 25px;
        border-left: 6px solid #003e73;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.07);
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.8s ease forwards;
    }

    h2 {
        margin: 0 0 10px;
        font-size: 1.6em;
    }

    .brand {
        color: #003e73;
        font-weight: bold;
    }

    .fast,
    .abst {
        color: #f58220;
        font-weight: bold;
    }

    ul {
        margin: 0;
        padding-left: 20px;
    }

    ul li {
        margin-bottom: 6px;
        line-height: 1.5;
    }

    .footer-icons {
        display: flex;
        justify-content: space-between;
        padding-top: 10px;
        font-size: 1em;
        color: #003e73;
        font-weight: bold;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.8s ease forwards;
    }

    .orange {
        color: #f58220;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in {
        animation-fill-mode: forwards;
    }
</style>

<div class="page-center">
    <div class="solutions-container">

        <div class="solution" data-aos="fade-up">
            <h2><span class="brand">Bact</span><span class="fast">fast</span><sup>®</sup></h2>
            <ul>
                <li><strong>Identifies 22,000 types of bacterial species<sup>10</sup></strong></li>
                <li>Identifies all known referenced bacteria to species and subspecies level</li>
                <li>Compatible with all sample types</li>
                <li>Sensitivity: 99.7%<sup>9</sup></li>
                <li>CE IVD approved</li>
            </ul>
        </div>

        <div class="solution" data-aos="fade-up" data-aos-delay="100">
            <h2><span class="brand">digital</span><span class="abst">ABST</span><sup>®</sup></h2>
            <ul>
                <li><strong>Identifies drug resistance or sensitive genes favourable to treatment response</strong></li>
                <li>digitalABST<sup>®</sup> is a big data and machine learning solution</li>
                <li>Processes the results obtained by Bactfast for AMR identification</li>
            </ul>
        </div>

        <div class="solution" data-aos="fade-up" data-aos-delay="200">
            <h2><span class="brand">Fungi</span><span class="fast">fast</span><sup>®</sup></h2>
            <ul>
                <li><strong>Identifies over 6000 fungi species & subspecies<sup>10</sup></strong></li>
                <li>Sensitivity: 99.7%<sup>9</sup></li>
                <li>Compatible with all sample types</li>
                <li>CE IVD approved</li>
            </ul>
        </div>

        <div class="solution" data-aos="fade-up" data-aos-delay="300">
            <h2><span class="brand">Vir</span><span class="fast">fast</span><sup>®</sup></h2>
            <ul>
                <li><strong>Identifies over 9000 viruses<sup>10</sup></strong></li>
                <li>Identifies all known DNA and RNA viruses in a single test</li>
                <li>Compatible with all sample types</li>
            </ul>
        </div>
    </div>
</div>
