<style>
    .flow-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .step {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 500px;
        margin: 20px 0;
        padding: 20px;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeSlideIn 0.8s ease forwards;
    }

    .step:nth-child(1) {
        animation-delay: 0.3s;
    }

    .step:nth-child(2) {
        animation-delay: 0.9s;
    }

    .step:nth-child(3) {
        animation-delay: 1.5s;
    }

    .step h3 {
        color: #0070c0;
        margin: 0 0 10px;
        font-size: 1.2rem;
    }

    .step p {
        margin: 0;
        color: #333;
    }

    .step-number {
        font-size: 1.8rem;
        font-weight: bold;
        color: #0070c0;
        margin-bottom: 10px;
    }

    .arrow {
        font-size: 2rem;
        color: #0070c0;
        margin: -10px 0;
        opacity: 0;
        animation: fadeIn 0.8s ease forwards;
    }

    .arrow:nth-of-type(2) {
        animation-delay: 0.8s;
    }

    .arrow:nth-of-type(4) {
        animation-delay: 1.4s;
    }

    @keyframes fadeSlideIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }
</style>

<div class="flow-container">

    <div class="step">
        <div class="step-number">01</div>
        <h3>Blood Collection</h3>
        <p>cfDNA isolation from blood collected during routine health checkup (10mL)</p>
    </div>

    <div class="arrow">⬇</div>

    <div class="step">
        <div class="step-number">02</div>
        <h3>Early Detection</h3>
        <p>Multi-modal analysis of methylation patterns and genetic characteristics in cfDNA to detect signals of
            multiple types of cancer.</p>
    </div>

    <div class="arrow">⬇</div>

    <div class="step">
        <div class="step-number">03</div>
        <h3>Tissue of Origin Prediction</h3>
        <p>If a cancer signal is detected, the test will further determine where in the body the cancer is coming from
            with high accuracy to guide further clinical action.</p>
    </div>
</div>
