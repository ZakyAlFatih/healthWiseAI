const metricsElement = document.getElementById("metrics-data");
const metricData = {
    daysReported: metricsElement.dataset.daysReported,
    totalDaysInMonth: metricsElement.dataset.totalDaysInMonth,
    totalHydrationProgress: metricsElement.dataset.totalHydrationProgress,
    totalStepCount: metricsElement.dataset.totalStepCount,
    totalCalorieBurned: metricsElement.dataset.totalCalorieBurned,
    maxStep: metricsElement.dataset.maxStep,
    achievementPercentage: metricsElement.dataset.achievementPercentage,
    totalSedentaryTime: metricsElement.dataset.sedentary,
    moodLevel: metricsElement.dataset.moodLevel,
    totalSleep: metricsElement.dataset.totalSleep,
};

const metricSets = [
    {
        title1: "Hydration Trends",
        content1: `<span class="metric-point">${metricData.daysReported}</span> out of <span class="metric-point">${metricData.totalDaysInMonth} days</span>, with an average daily take of<br><span class="metric-point">${metricData.totalHydrationProgress} liters</span>`,
        title2: "Total Steps",
        title2: "Total Steps",
        content2: `
                        <p class="metric-value" id="metric-2-content">${metricData.totalStepCount}
                        <span class="metric-unit">steps</span></p>`,
        title3: "Calories Burned",
        content3: `Burned a total of <span class="metric-point">${
            metricData.totalCalorieBurned
        }</span> calories, averaging <span class="metric-point">${(
            metricData.totalCalorieBurned / metricData.daysReported
        ).toFixed(
            2
        )}</span> calories <span class="metric-point">per day.</span> Your most active day burned <span class="metric-point">${
            metricData.maxStep
        }</span> calories.`,
        arrowImage: "images/arrow-1.png",
    },
    {
        title1: "Sleep Duration",
        content1: `Slept for a total of <span class="metric-point">${
            metricData.totalSleep
        }</span> hours, averaging 
            <span class="metric-point">${
                metricData.totalSleep / metricData.daysReported
            } hours</span>/<br>night.`,
        title2: "Sedentary Time",
        content2: `<p class="metric-desc" id="metric-2-content">Spent a total of 
            <span class="metric-point">${
                metricData.totalSedentaryTime
            }</span> hours sitting, averaging 
            <span class="metric-point">${
                metricData.totalSedentaryTime / metricData.daysReported
            } hours/day</span>.</p>`,
        title3: "Mood or Stress",
        content3: `Reported an average stress level of <span class="metric-point">${
            metricData.moodLevel / metricData.daysReported
        }/10</span>, with some peaks 
            during work deadlines.`,
        arrowImage: "images/arrow-2.png",
    },
];

let currentIndex = 0;

function updateCards() {
    const cards = ["metric-1", "metric-2", "metric-3"];
    const isNextIndex = currentIndex === 0 ? 1 : 0;

    const fadeOutClass =
        currentIndex === 0 ? "fade-out-left" : "fade-out-right";
    cards.forEach((id) => {
        document.getElementById(id).classList.add(fadeOutClass);
    });

    setTimeout(() => {
        document.getElementById("metric-1-title").innerHTML =
            metricSets[currentIndex].title1;
        document.getElementById("metric-1-content").innerHTML =
            metricSets[currentIndex].content1;

        document.getElementById("metric-2-title").innerHTML =
            metricSets[currentIndex].title2;
        document.getElementById("metric-2-content").innerHTML =
            metricSets[currentIndex].content2;

        document.getElementById("metric-3-title").innerHTML =
            metricSets[currentIndex].title3;
        document.getElementById("metric-3-content").innerHTML =
            metricSets[currentIndex].content3;

        document.getElementById("arrow-btn").src =
            metricSets[currentIndex].arrowImage;

        const fadeInClass =
            currentIndex === 0 ? "fade-in-left" : "fade-in-right";
        cards.forEach((id) => {
            document.getElementById(id).classList.remove(fadeOutClass);
            document.getElementById(id).classList.add(fadeInClass);
        });

        setTimeout(() => {
            cards.forEach((id) =>
                document.getElementById(id).classList.remove(fadeInClass)
            );
        }, 500);
    }, 500);
}

document.getElementById("arrow-btn").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % metricSets.length;
    updateCards();
});
