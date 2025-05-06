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
