<style>

    h2 {
      color: #003e73;
      margin-bottom: 50px;
    }

    .workflow-container {
      max-width: 900px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(4, auto);
      gap: 30px;
      align-items: center;
    }

    .workflow-step {
      background: #fff;
      padding: 16px 20px;
      border-radius: 12px;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
      font-size: 15px;
      color: #003e73;
      position: relative;
    }

    .highlight {
      color: #f58220;
      font-weight: bold;
    }

    .center-img {
      grid-column: 2 / 3;
      grid-row: 2 / 3;
    }

    .center-img img {
      width: 100%;
      max-width: 200px;
      margin: 0 auto;
    }

    .arrow {
      font-size: 26px;
      color: #003e73;
      animation: bounce 2s infinite;
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(5px); }
    }

    /* Position steps */
    .step-1 { grid-column: 2; grid-row: 1; }
    .step-2 { grid-column: 3; grid-row: 1; }
    .step-3 { grid-column: 3; grid-row: 2; }
    .step-4 { grid-column: 3; grid-row: 3; }
    .step-5 { grid-column: 2; grid-row: 4; }
    .step-6 { grid-column: 1; grid-row: 3; }
    .step-7 { grid-column: 1; grid-row: 2; }
    .step-8 { grid-column: 1; grid-row: 1; }

    @media (max-width: 768px) {
      .workflow-container {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .center-img img {
        max-width: 160px;
      }
    }
  </style>

  <h2>SAMPLE WORKFLOW</h2>

  <div class="workflow-container">

    <div class="workflow-step step-1" data-aos="fade-down">
      <strong>Sample collected</strong><br>
      Collected in sterile condition
    </div>

    <div class="workflow-step step-2" data-aos="fade-down-left">
      <strong>Microbiologist</strong><br>
      Reviews and prepares sample
    </div>

    <div class="workflow-step step-3" data-aos="fade-left">
      <strong>Wet lab processing</strong><br>
      NGS library preparation
    </div>

    <div class="workflow-step step-4" data-aos="fade-up-left">
      <strong>Raw data is generated</strong><br>
      Basecall outputs created
    </div>

    <div class="workflow-step step-5" data-aos="fade-up">
      <strong>Genomics platform</strong><br>
      Analyzes raw data
    </div>

    <div class="workflow-step step-6" data-aos="fade-up-right">
      <strong>Data interpretation</strong><br>
      <span class="highlight">Proprietary Bioinformatics Pipeline</span>
    </div>

    <div class="workflow-step step-7" data-aos="fade-right">
      <strong>Report generation</strong><br>
      Automated report creation
    </div>

    <div class="workflow-step step-8" data-aos="fade-down-right">
      <strong>Delivery to clinician</strong><br>
      Ready for review
    </div>

    <div class="center-img" data-aos="zoom-in">
      <img src="{{ asset('assets/img/client/minionusp-removebg-preview.png') }}" alt="MinION Device">
      <div><strong>NGS Data Processing</strong></div>
    </div>

  </div>
