<style>
    .grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        grid-template-rows: repeat(3, auto);
        gap: 10px;
        justify-items: center;
        align-items: center;
        max-width: 1400px;
        margin: auto;
    }

    .card-process {
        background: #fff;
        border-radius: 16px;
        padding: 20px;
        width: 180px;
        /* height: 140px; */
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s ease-out;
    }

    .card-process.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .icon {
        height: 40px;
        margin-bottom: 10px;
    }

    .label {
        background: #5c6ac4;
        color: white;
        padding: 8px 12px;
        border-radius: 20px;
        font-size: 13px;
        display: inline-block;
        margin-top: 5px;
    }

    .arrow {
        font-size: 24px;
        color: #333;
    }

    @media (max-width: 768px) {
        .grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }
</style>

<div id="workflow" class="grid"></div>

<script>
    const steps = [{
            icon: "🧬",
            text: "DNA extraction from Cancer and normal cells"
        },
        {
            icon: "🖥️",
            text: "WES"
        },
        {
            icon: "🧪",
            text: "Somatic mutation detection"
        },
        {
            icon: "🏅",
            text: "Selection of patient-specific mutations (KR 10-2472050)"
        },
        {
            icon: "📄",
            text: "BSP establishment (signature)"
        },
        {
            icon: "🧫",
            text: "Blood collection"
        },
        {
            icon: "🧬",
            text: "Blood collection"
        },
        {
            icon: "🧬",
            text: "BSP sequencing (100,000x)"
        },
        {
            icon: "🧬",
            text: "ctDNA detection (HQSTM Adoption)"
        },
        {
            icon: "📘",
            text: "Clinical report"
        },
    ];

    const container = document.getElementById("workflow");

    steps.forEach((step, index) => {
        // Create card
        const card = document.createElement("div");
        card.className = "card-process";
        card.innerHTML = `
      <div class="icon">${step.icon}</div>
      <div class="label">${step.text}</div>
    `;
        container.appendChild(card);

        // Add arrow unless it's the last item in a row
        const isEndOfRow = (index + 1) % 4 === 0;
        const isLast = index === steps.length - 1;

        if (!isEndOfRow && !isLast) {
            const arrow = document.createElement("div");
            arrow.className = "arrow";
            arrow.innerHTML = "➔";
            container.appendChild(arrow);
        }
    });

    const cards = document.querySelectorAll(".card-process");

    function revealCardsSequentially(i = 0) {
        if (i < cards.length) {
            cards[i].classList.add("visible");
            setTimeout(() => revealCardsSequentially(i + 1), 400);
        }
    }

    window.onload = () => {
        revealCardsSequentially();
    };
</script>
