const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach((item) => {
    const question = item.querySelector("h3");

    question.addEventListener("click", () => {
        item.classList.toggle("faq-active");

        /* const answerParagraphs = item.querySelectorAll("p:not(:first-child)");

        answerParagraphs.forEach((paragraph) => {
            paragraph.style.display = item.classList.contains("active") ? "block" : "none";
        }); */
    });
});