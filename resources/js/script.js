let cards = document.querySelectorAll(".card")


cards.forEach((card) => {
    card.addEventListener("mouseenter", () => {
        card.classList.add("shadow")
    })
    card.addEventListener("mouseleave", () => {
        card.classList.remove("shadow")
    })
})